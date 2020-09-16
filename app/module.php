<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class module extends Model
{
     public function date(){
         return $this->belongsTo('App\Date','date_id','iddate');
      }
      public function formateur(){
        return $this->belongsTo('App\Formateur','formateur_id','idformateur');
     }
     public function horaire(){
        return $this->belongsTo('App\Horaire','horaire_id','idhoraire');
     }
     public function niveau(){
        return $this->belongsTo('App\Niveau','niveau_id','idniveau');
     }
     public function salle(){
        return $this->belongsTo('App\Salle','salle_id','idsalle');
     }
}
