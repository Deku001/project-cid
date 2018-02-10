<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Project;
use Session;
class Entite extends Model
{
    public $table = "entite";
    public $primaryKey = "ID_ENTITE";
    protected $appends = ['entites_fille'];

    public function entitecomptes(){
        return $this->belongsToMany(Compte::class, 'depend', 'ID_ENTITE', 'ID_COMPTE')
            ->where('comptes.ID_COMPTE', Session::get("SESS_compte_id"));
    }
    public function getEntitesFilleAttribute()
    {
        return Entite::where("ID_ENTITE_CONTIENT",$this->ID_ENTITE)->count();
    }
    public function typeEntite()
    {
        return $this->hasOne(TypeEntite::class, 'ID_TYPE_ENT','ID_TYPE_ENT');
    }
    public function projets()
    {
        return parent::hasMany(Project::class, "ID_PROJET", "ID_PROJET");
    }

}
