<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MinistryModel extends Model{
    protected $table = "ministries";
    public $timestamps = false;

    protected $fillable = [
        'designation',
        'description',
        'cover_image'
    ];

}