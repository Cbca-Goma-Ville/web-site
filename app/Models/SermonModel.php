<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SermonModel extends Model{
    protected $table = "sermons";
    public $timestamps = false;

    protected $fillable = [
        'author_id',
        'sermon_title',
        'sermon_cover',
        'sermon_audio_url',
        'sermon_video_url',
        'sermon_file_url',
        'sermon_description',
        'sermon_date',
    ];

}