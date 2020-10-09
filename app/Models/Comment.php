<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';

    protected $filltable = [
        'user_id',
        'product_id',
        'content',
    ];

    public function ProductUser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
