<?php

namespace App\Http\Controllers;


use function dd;
use function geoip;
use Illuminate\Http\Request;
use App\utenti;

class CounController extends Controller
{
    public function index(Request $req)
    {
        /*$utente = new utenti();
        $utente->ip = $req->getClientIp();
        $ipo2 = $utente->ip;
        $bo = geoip($ipo2);
        $utente->city = $bo->city;
        $utente->save();*/
        return view('home');
    }
}
