<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model{
    protected $table = "comments";
    public $timestamps = false;

    protected $fillable = [
        'comments',
        'comment_author',
        'sermon_id'
    ];

}