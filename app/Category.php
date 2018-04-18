<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'NombreCategoria', 'imagen',
    ];


    public function Products()
    {
        return $this->hasMany('App\Product','categories_id','id');
    }
}
