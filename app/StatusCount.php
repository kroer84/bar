<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusCount extends Model
{
    public function Counts()
    {
        return $this->hasMany('App\Count','state_counts_id','id');
    }
}
