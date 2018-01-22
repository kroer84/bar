<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    public function StateCount()
    {
        return $this->belongsTo('App\StatusCount','state_counts_id','id');
    }

    public function User()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function Products(){
        return $this->belongsToMany('\App\Product','count__products','counts_id','products_id')
            ->withPivot('cantidad','state_count__products_id');
    }
}
