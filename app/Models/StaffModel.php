<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaffModel extends Model{
    protected $table = "staff";
    public $timestamps = false;

    protected $fillable = [
        'staff_name',
        'staff_image',
        'staff_bio',
        'staff_facebook',
        'staff_instagram',
        'staff_twitter',
        'staff-zungvi',
        'status',
    ];

}