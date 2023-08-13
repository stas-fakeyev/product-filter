<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function attributeValues()
    {
        return $this->belongsToMany(AttributeValue::class, 'attributes_products');
    }
}
