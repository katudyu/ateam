<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event';
    protected $primaryKey = 'event_id';
    protected $guarded = array('event_id');
    public static $rules = array(
        'event' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
    );
}
