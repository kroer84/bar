<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'categories_id', 
        'NombreProducto', 
        'precio',
        'imagen',
    ];
    
    public function category()
    {
        return $this->belongsTo('App\Category','categories_id','id');
    }

    public function Counts(){
        return $this->belongsToMany('\App\Count','count_products','counts_id','products_id')
            ->withPivot('cantidad','status_count_products_id');
    }
    public function inventario(){
        return $this->hasMany('App\CountProduct');
    }
}
