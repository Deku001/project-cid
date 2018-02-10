<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use phpDocumentor\Reflection\Project;
use Session;
use Auth;
use App\Projet;
class F2_1Controller extends Controller
{
    public function getProjet($id){
        $projet = Projet::with("degres","comptes")->where("ID_ENTITE" , 114)
            ->orderBy('ID_ENTITE', 'desc')->First();

        //dd($projet);
        return view('f2-1.fiche_synthese',compact("projet"));
    }
}
