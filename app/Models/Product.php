<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'unique_identifier', 'price', 'photo', 'description'];

    public function attributeValues()
    {
        return $this->belongsToMany(AttributeValue::class, 'attribute_product', 'product_id', 'attribute_value_id');
    }

    public function attributeProducts()
    {
        return $this->hasMany(AttributeProduct::class);
    }

}
