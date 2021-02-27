<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description',
        'slug'
    ];

    public function products()
    {
        $this->belongsToMany(Product::class, 'category_product');
    }
}
