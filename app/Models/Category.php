<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $filltable = [
        'name',
        'parent_id',
    ];

    public function Product()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
