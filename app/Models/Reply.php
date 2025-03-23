<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = 'replies';

    protected $fillable = [
        'reply_content',
        'reply_topic',
        'reply_post',
        'reply_by',
    ];
}
