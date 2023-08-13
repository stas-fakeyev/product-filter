<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
    //
    public function index(Request $request)
    {
        $builder = Product::query();

        if ($request->has('categories')) {
            $categories = collect(Arr::wrap($request->input('categories')))->map(function ($value) {
                return filter_var($value, FILTER_VALIDATE_INT);
            })->filter(function ($value) {
                return is_int($value);
            });
            if ($categories->isNotEmpty()) {
                $builder->whereIn('category_id', $categories->toArray());
            }
        }
        if ($request->has('attributes')) {

            foreach (Arr::wrap($request->input('attributes')) as $attribute_id => $value_ids) {
                if (!filter_var($attribute_id, FILTER_VALIDATE_INT)) {
                    continue;
                }
                $attributeValues = collect(Arr::wrap($value_ids))->map(function ($value) {
                    return filter_var($value, FILTER_VALIDATE_INT);
                })->filter(function ($value) {
                    return is_int($value);
                });
                if ($attributeValues->IsEmpty()) {
                    continue;
                }

                $builder->whereHas('attributeValues', function ($query) use ($attribute_id, $attributeValues) {
                    $query->whereIn('attribute_values.id', $attributeValues->toArray())->where('attribute_values.attribute_id', $attribute_id);
                });
            }
        }
        $products = $builder->paginate(3);
        return ProductResource::collection($products)->preserveQuery();
    }
}
