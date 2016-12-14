<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public $timestamps=false;
    protected $fillable = [

        'name', 'brand', 'unit_type','department'
        ,'active','manufacturing_house','register_day','sales_tax','family'
    ];

}
