<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function view;

class FatturaController extends Controller
{
    public function index() {
        return view('servizi.fatturazione');
    }

    public function info() {
        return view('fatturazione.info');
    }

    public function date() {
        return view('fatturazione.date');
    }

    public function nostra() {
        return view('fatturazione.nostra');
    }

    public function benefici() {
        return view('fatturazione.benefici');
    }

    public function questionariostudiocorsetti() {
        return view('fatturazione.questionariostudiocorsetti');
    }

    public function questionario() {
        return view('fatturazione.questionario');
    }
}
