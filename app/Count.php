<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    public function StateCount()
    {
        return $this->belongsTo('App\StatusCount','status_counts_id','id');
    }

    public function User()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function Products(){
        return $this->belongsToMany('\App\Product','count_products','counts_id','products_id')
            ->withPivot('cantidad','status_count_products_id');
    }

    public function inventario(){
        return $this->hasMany('App\CountProduct');
    }
}
