<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class date extends Model
{
    protected $guarded=[];

    public function Module(){
        return $this->hasMany('App\Module');
     }
}
