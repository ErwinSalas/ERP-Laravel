<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    public $timestamps=false;
    protected $fillable=  ['id','name','last_name',
        'address','civil_state',
        'birthday','sex','register_day',
        'type','discount'
    ];

}
