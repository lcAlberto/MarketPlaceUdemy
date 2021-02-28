<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
        'name',
        'description',
        'body',
        'price',
        'slug',
        'thumbnail',
        'store_id'
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function caegories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }

}
