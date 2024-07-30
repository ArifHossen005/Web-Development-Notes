<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    function user()
    {
        return $this->belongsTo(User::class);
    }

    function comment()
    {
        return $this->hasMany(Comment::class);
    }
    function postTag()
    {
        return $this->hasMany(PostTag::class);
    }
}
