<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Redirect;
use URL;

class EmailController extends Controller
{
    public function send(Request $req){
       // dd($req);
        $title = $req->input('title');
        $content = $req->input('content');
        $mailfrom = $req->input('mailfrom');

        Mail::send('mails.testemail',
            [
                'title' => $title,
                'mailfrom' => $mailfrom,
                'content' => $content
            ], function ($message)
            {
                $subject = "Messaggio inviato dal sito";
                $message->from('info@counselingsrl.eu', "Counselingsrl");
                $message->to('info@counselingsrl.eu');
                $message->subject($subject);
            });

        //return response()->json(['message' => 'Request completed']);
        return 1;
        //return Redirect::to(URL::previous() . "#cont");
    }

    public function questionario(Request $req){
        // dd($req);
        $azienda = $req->input('azienda');
        $titolare = $req->input('titolare');
        $mail = $req->input('mail');
        $primanumero = $req->input('primanumero');
        $secondanumero = $req->input('secondanumero');
        $prima = $req->input('prima');
        $seconda = $req->input('seconda');
        $terza = $req->input('terza');
        $quarta = $req->input('quarta');
        $quinta = $req->input('quinta');
        $sesta = $req->input('sesta');
        $settima = $req->input('settima');
        $ottava = $req->input('ottava');
        $nona = $req->input('nona');

        Mail::send('mails.questmail',
            [
                'azienda' => $azienda,
                'titolare' => $titolare,
                'mail' => $mail,
                'primanumero' => $primanumero,
                'secondanumero' => $secondanumero,
                'prima' => $prima,
                'seconda' => $seconda,
                'terza' => $terza,
                'quarta' => $quarta,
                'quinta' => $quinta,
                'sesta' => $sesta,
                'settima' => $settima,
                'ottava' => $ottava,
                'nona' => $nona
            ], function ($message)
            {
                $subject = "Questionario inviato dal sito";
                $message->from('info@counselingsrl.eu', "Counselingsrl");
                $message->to('info@counselingsrl.eu');
                $message->subject($subject);
            });

        //return response()->json(['message' => 'Request completed']);
        return 1;
        //return Redirect::to(URL::previous() . "#cont");
    }
}
