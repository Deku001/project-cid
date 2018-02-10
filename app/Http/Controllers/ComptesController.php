<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use App\Compte;

class ComptesController extends Controller
{
    public function getAllComptes()
    {
        return Compte::with('profil')->get();
    }
    public function getLogin(){
         return view('comptes.login');
    }

    public function postLogin(Request $request){

        $this->validate($request, [
            'login' => 'required',
            'mdp' => 'required',
        ]);

        $compte = Compte::where('LOGIN', $request->get('login'))
                        ->where('PASSWD',$request->get('mdp'))
                        ->first();
        if ($compte)
        {
            $request->session()->put('SESS_compte_date_valid', $compte->DATE_VALID);
            $request->session()->put('SESS_compte_id', $compte->ID_COMPTE);
            $request->session()->put('SESS_compte_nom', $compte->NOM);
            $request->session()->put('SESS_compte_email', $compte->EMAIL);
            $request->session()->put('SESS_compte_login', $compte->LOGIN);
            $request->session()->put('SESS_compte_datecrea', $compte->DATE_CREA);
            $request->session()->put('SESS_profil_defaut', $compte->profil->LIBELLE);
            $request->session()->put('SESS_droits_entites', $compte->profil->DROITS_ENTITES);
            $request->session()->put('SESS_droits_comptes', $compte->profil->DROITS_COMPTES);
            $request->session()->put('SESS_droits_projets', $compte->profil->DROITS_PROJETS);
            $request->session()->put('SESS_droits_etapes', $compte->profil->DROITS_ETAPES);
            $request->session()->put('SESS_droits_cid', $compte->profil->DROITS_CID);
            $request->session()->put('SESS_profil_id', $compte->profil->ID_PROFIL);


            \Auth::login($compte, $request->has('remember'));
        }
        flash('Identifiants incorrects !', 'danger');
        return redirect('/f0-1')
            ->withInput($request->only('login', 'remember'));
    }

}
