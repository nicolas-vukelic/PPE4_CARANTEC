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



}
