<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreacherModel extends Model{
    protected $table = "preachers";
    public $timestamps = false;

    protected $fillable = [
        'preacher_name',
        'preacher_image',
        'status',
    ];

}