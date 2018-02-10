<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Profile;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
class Compte extends Model implements Authenticatable
{
    use AuthenticableTrait;
    public $table = "comptes";
    public $primaryKey = "ID_COMPTE";

    public function profil()
    {
        return $this->hasOne(Profile::class, 'ID_PROFIL','ID_PROFIL');
    }

    public function entites(){
        //entites belongs to many comptes
        //depend table pivot, ID_COMPTE : primary key, ID_ENTITE foreign key
        return $this->belongsToMany(Entite::class, 'depend', 'ID_COMPTE', 'ID_ENTITE');
    }
}