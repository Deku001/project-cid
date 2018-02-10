<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    public $table = "projets";
    public $primaryKey = "ID_PROJET";
    

    public function degres(){
        return $this->belongsToMany(DegresAvance::class, 'en_est_a', 'ID_PROJET', 'ID_DEGRES');
    }

    public function comptes(){
        return $this->belongsToMany(Compte::class, 'travaille_sur', 'ID_PROJET', 'ID_COMPTE');
    }


}
