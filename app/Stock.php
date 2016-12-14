<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //
    public $timestamps=false;
    protected $fillable=  ['product','amount','min_amount','max_amount','save_except'];
    public function product(){
        $this->hasOne('App\Product');
    }
}
