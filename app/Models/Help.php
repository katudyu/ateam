<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    protected $guarded=array('id');
    protected $table ='help';

    public static $rules=array(
        'id'=>'required',
        'question'=>'required',
        'answer'=>'required',
    );

}
