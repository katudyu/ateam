<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postal extends Model
{
    protected $table = 'postal';
    protected $guarded = array('id');
    public static $rules = array(
        'postal_code' => 'required',
    );
}
