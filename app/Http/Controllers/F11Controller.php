<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use phpDocumentor\Reflection\Project;
use Session;
use Auth;
use App\Entite;
use App\Projet;

class F11Controller extends Controller
{


    public function getProjets($id){
        $projets = Projet::with("degres")->where("ID_ENTITE" , 114)
            ->get();
         //dd($projets->first()->maxdegree);
        return view('f11.projet',compact("projets"));
    }
}
