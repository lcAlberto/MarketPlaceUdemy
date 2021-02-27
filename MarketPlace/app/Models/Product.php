<?php

namespace App;

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

}
