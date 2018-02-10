<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use phpDocumentor\Reflection\Project;
use Session;
use Auth;
use App\Entite;
use App\Projet;
class F01Controller extends Controller
{
    public function getEntiteMere(){
            $entitesMere = Entite::with('entitecomptes.profil','typeEntite')
                ->whereHas('entitecomptes', function($q){
                    $q->where('comptes.ID_COMPTE', Session::get("SESS_compte_id"))
                        ->where('ID_ENTITE_CONTIENT',0);
                })
                ->get();
          //  dd($entitesMere);
            return view('f01.index',compact("entitesMere"));
    }
    public function getEntitefille($id){
        $entitesFille = Entite::with('entitecomptes.profil','typeEntite')->whereHas('entitecomptes', function($q) use($id){
            $q->where('comptes.ID_COMPTE', Session::get("SESS_compte_id"))
                ->where('ID_ENTITE_CONTIENT' ,$id);
        })->get();

        //dd($entitesFille);
        return view('f01.entiteFille',compact("entitesFille"));
    }

    public function getProjets($id){
        $projets = Projet::with("degres")->where("ID_ENTITE" , 114)
            ->get();

        dd($projets);
    }
}
