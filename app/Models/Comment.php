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

    public function commentProduct()
    {
        return $this->belongsToMany(User::class, 'comment', 'product_id', 'user_id');
    }
}
