<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $filltable = [
        'name',
        'category_id',
        'description',
        'price',
        'sale_percent',
        'stocks',
        'is_active',
    ];

    public function comments()
    {
        //liên kết khóa ngoại
        return $this->hasMany(Comment::class, 'product_id', 'id');
    }
    public function Category()
    {
        return $this->hasMany(Category::class, 'category_id', 'id');
    }
}
