<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountProduct extends Model
{
    protected $table = 'count_products';

    protected $fillable = ['counts_id','products_id','cantidad','status_count_products_id'];

    public function StateCountProduct()
    {
        return $this->belongsTo('App\StatusCountProduct','status_count_products_id','id');
    }

    public function count(){
        return $this->belongsTo('App\Count', 'counts_id','id');
    }

    public function product(){
        return $this->belongsTo('App\Product', 'products_id', 'id');
    }
}
