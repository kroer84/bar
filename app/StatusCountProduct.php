<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusCountProduct extends Model
{ 
    public function CountProduct()
    {
        return $this->hasMany('App\Count_Product','state_count__products_id','id');
    } 
}
