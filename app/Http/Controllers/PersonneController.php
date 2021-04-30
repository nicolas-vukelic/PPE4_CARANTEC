<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    public function Check(Request $request) {
        $email = $request->input('EMAIL');
        $personne = Personne::all()->where('EMAIL',$email)->first();
        if ($personne == NULL){
            $idPersonne = PersonneController::store($request);
        }else{
            $idPersonne= $personne->IDPER;
        }
        return $idPersonne;

    }
    public function store(Request $request)
    {
        Personne::create($request->all());
        $email = $request->input('EMAIL');
        $personne = Personne::all()->where('EMAIL',$email)->first();
        return $personne->IDPER;
    }
}
