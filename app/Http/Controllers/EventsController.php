<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    //

    public function affichage_events()
    {
        $liste_events=Events::get();
        return view('programme',['liste_events'=>$liste_events]);
    }

    public function infos_events($id_event){
        $infos_events=DB::table('Event')
            ->join('Tarifs','Event.IDTARIF','=','Tarifs.IDTARIF')
            ->join('Lieux','Lieux.IDLIEU','=','Event.IDLIEU')
            ->where('IDEVENT', '=', $id_event)->get();
       //$infos_events=Events::where('IDEVENT', '=', $id_event)->get('NOM','DATE','HEUREDEBUT','RESUME');
       return view('infos_events',compact('infos_events'));

    }
}
