<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AttributeResource;
use App\Models\Attribute;

class AttributeController extends Controller
{
    //
    public function index()
    {
        $attributes = Attribute::with('attributeValues')->get();

        return AttributeResource::collection($attributes);
    }
}
