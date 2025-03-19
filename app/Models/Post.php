<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    Use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];

    static function getUserPosts($user_id) {
        return DB::table('posts')
            ->where('user_id', $user_id)
            ->get();
    }
}
