<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    public $table = "projets";
    public $primaryKey = "ID_PROJET";
    protected $appends = ['maxdegree'];
    public function degres(){
        return $this->belongsToMany(DegresAvance::class, 'en_est_a', 'ID_PROJET', 'ID_DEGRES');
    }

    public function getMaxdegreeAttribute(){
        return onEstA::where("ID_PROJET",$this->ID_PROJET)->max('ID_DEGRES');
    }


}
