<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ReservationController extends Controller
{
public function index(){


    $reservations=DB::table('Reservation')
        ->join('Event','Reservation.IDEVENT','=','Event.IDEVENT')
        ->join('Personne','Reservation.IDTEUFEUR','=','Personne.IDPER')
        ->join('Tarifs','Event.IDTARIF','=','Tarifs.IDTARIF')
        ->join('Lieux','Lieux.IDLIEU','=','Event.IDLIEU')
        ->where('Reservation.IDTEUFEUR',Auth::id())
        ->get();

    return view('reservation',compact('reservations'));
}

    public function infos_reservations(Request $request)
    {
        $request->validate([
            'NBPLACES'=>'required|numeric|min:1|max:10',
        ]);

        $reservation = Reservation::create([
            'IDEVENT'=>$request->input('IDEVENT'),
            'IDTEUFEUR'=>$request->input('IDPER'),
            'NBPLACES'=>$request->input('NBPLACES'),

        ]);
       // return view('reservation',compact('reservation'));
        return redirect()->back();

    }


}
