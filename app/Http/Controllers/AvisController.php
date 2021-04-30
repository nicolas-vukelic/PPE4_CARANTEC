<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AvisController extends Controller
{
    //
    public function affichage_avis()
    {
        $liste_avis=Avis::get();
        return view('liste_avis',['liste_avis'=>$liste_avis]);
    }

   /* public function publier_avis($id)
    {
        $avis = Avis::join('users','avis.IDTEUFUER','=','users.id')
            ->join('Personne','users.id','=','Personne.IDPER')
            ->select('Personne.IDPER','Personne.Nom','Personne.PRENOM')
            ->where('IDEVENT',$id)
            ->get();

        return view('avis',["avis"=>$avis]);
    }*/

}
