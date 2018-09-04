<?php

namespace App\Http\Controllers;

use App\Notizia;
use Illuminate\Http\Request;

class NotizieController extends Controller
{
    public function lista()
    {
        $news = Notizia::latest()->paginate(3);
        return view('privacy.newsprivacy')->with('news',$news);
    }

    public function salva(Request $req)
    {
        $news = new Notizia();
        $news->titolo = $req->titolo;
        $news->descrizione = $req->testo;
        $news->fonte = $req->fonte;

        $news->save();

        return redirect()->route('news');
    }
}
