<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventModel extends Model{
    protected $table = "events";
    public $timestamps = false;

    protected $fillable = [
        'event_name',
        'event_cover',
        'event_description',
        'event_starting_date',
        'event_ending_date',
        'event_starting_time',
        'event_ending_time',
        'event_adress',
        'contact'
    ];

}