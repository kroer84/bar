<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'categories_id', 'NombreProducto', 'precio',
    ];
    
    public function category()
    {
        return $this->belongsTo('App\Category','categories_id','id');
    }

    public function Counts(){
        return $this->belongsToMany('\App\Count','count__products','counts_id','products_id')
            ->withPivot('cantidad','state_count__products_id');
    }
}
