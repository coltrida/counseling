<?php

namespace App\Http\Controllers;

use function geoip;
use Illuminate\Http\Request;
use App\utenti;

class CounController extends Controller
{
    public function index(Request $req)
    {
        //dd($req->getClientIp());
        $utente = new utenti();
        $utente->ip = $req->getClientIp();
        //$ipo2 = '192.168.10.1';
        $ipo2 = $utente->ip;
        $bo = geoip($ipo2);
        $utente->city = $bo->city;
        //dd($bo);

        $utente->save();
        return view('home');
    }
}
