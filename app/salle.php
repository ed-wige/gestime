<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salle extends Model
{
    protected $guarded=[];

    public function Module(){
        return $this->hasMany('App\Module');
     }
}
