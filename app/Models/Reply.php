<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Reply extends Model
{
    Use HasFactory;

    protected $fillable = [
        'content',
        'user_id',
        'post_id',
    ];

    static function getPostReplies($post_id) {
        return DB::table('replies')
            ->where('post_id', $post_id)
            ->get();
    }
}
