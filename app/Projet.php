<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    public $table = "projets";
    public $primaryKey = "ID_PROJET";
    
    public function Projet(){
        return $this->belongsToMany(Compte::class, 'depend', 'ID_ENTITE', 'ID_COMPTE')
            ->where('comptes.ID_COMPTE', Session::get("SESS_compte_id"));
    }


}
