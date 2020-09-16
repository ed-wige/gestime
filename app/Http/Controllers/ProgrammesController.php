<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\module;
use App\horaire;
use App\date;
use App\formateur;
use App\salle;
use App\niveau;


class ProgrammesController extends Controller
{
    function index(){
        $modules=module::all();
        return view('admin.Listemodule',['modulesrep'=>$modules]);
      }

      function justin(){
        $modules=module::all();

        return  $modules->toJson(JSON_PRETTY_PRINT);
      }
    function create(){
      return view('admin.formulaire');
      }
    //


    
    function store(Request $request)
    {
       $horaires=horaire::create([  
      "horaire"=>$request->Horaire
      
       ]);

       $salles=salle::create([  
        "salle"=>$request->Salle
        
         ]);

         $niveaux=niveau::create([  
          "niveau"=>$request->Niveau
          
           ]);

      
      $dates=date::create([
        "date"=>$request->Date
        ]);

      $formateurs=formateur::create([
         "formateur"=> $request->Formateur
          ]);

       $modules  =new module();
       $modules->idmodule=$request->idmodule;
       $modules->module=$request->module;
       $modules->formateur_id=$formateurs->id;
       $modules->date_id=$dates->id;
       $modules->horaire_id=$horaires->id;
       $modules->salle_id=$salles->id;
       $modules->niveau_id=$niveaux->id;
       

      $modules->save();
      
   return redirect('admin.Listemodule');
}
function detail($matricule)
{
   $etudiants=etudiants::where("matricule", "=", $matricule)->get();
   return view("detail", ["etudiants"=> $etudiants[0]]);

   }
  }

