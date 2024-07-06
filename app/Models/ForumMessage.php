<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumMessage extends Model
{
    use HasFactory;

    protected $table = "forum_message";

    protected $fillable = [
        'id',
        'user_name',
        'message',
    ];
}