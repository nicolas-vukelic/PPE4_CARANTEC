<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PersonneController;
use App\Models\Personne;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    public function teufeur()
    {
        $pers = DB::table('Personne')
            ->join('Teufeur','IDPER','=','Personne.IDPER')
            ->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'NOM' => 'required|string|max:32',
            'PRENOM' => 'required|string|max:32',
            'TELEPHONE' => 'required|string|max:10',
            'EMAIL' => 'required|string|email|max:100',
            'password' => 'required|string|confirmed|min:8',
        ]);
        $personneController=new PersonneController();
        $idpersonne=$personneController->Check($request);
        Auth::login($user = User::create([
            'id'=> $idpersonne,
            'email' => $request->EMAIL,
            'password' => Hash::make($request->password),
        ]));

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
