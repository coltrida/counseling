<?php

namespace App\Http\Controllers;

use function compact;
use Illuminate\Http\Request;
use function view;

class PresiteController extends Controller
{
    public function dolcevita() {
        $azienda = "Dolcevita";
        $logo = "presite/dolcevita.png";
        $logo1 = "presite/counseling.png";
        $logo2 = "presite/logocorsetti.gif";
        $slide = ["presite/01.jpg", "presite/02.jpg", "presite/03.jpg"];

        return view('presite.index', compact('azienda', 'logo1', 'logo2', 'logo', 'slide'));
    }
}
