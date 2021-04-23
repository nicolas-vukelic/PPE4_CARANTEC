<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeufeurController extends Controller
{
    //
    public function create()
    {
        return view('formulaire');
    }

    public function store(Request $request)
    {
        return 'le login est ' . $request->input('LOGIN') . 'le mdp est ' . $request->input('MDP');

    }
}
