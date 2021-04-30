<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ApiEvent;
use Illuminate\Support\Facades\DB;


class ApiController extends Controller
{
    public function listApi()
    {
        return response()->json(ApiEvent::all());
        //
    }
}
