<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use function log;
use Mail;
use Redirect;
use URL;
use function view;

class EmailController extends Controller
{
    public function send(Request $req){
       //dd($req);
        $title = $req->input('title');
        $content = $req->input('content');
        $mailfrom = $req->input('mailfrom');
        $ldate = date('d-m-Y');
        $consenso= "Ho letto l'Informativa sulla Privacy e acconsento al trattamento dei dati personali. Consenso ottenuto in data ".$ldate;

        Mail::send('mails.testemail',
            [
                'title' => $title,
                'mailfrom' => $mailfrom,
                'consenso' => $consenso,
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
        $ldate = date('d-m-Y');
        $consenso= "Ho letto l'Informativa sulla Privacy e acconsento al trattamento dei dati personali. Consenso ottenuto in data ".$ldate;
        $azienda = $req->input('azienda');
        $titolare = $req->input('titolare');
        $mail = $req->input('mail');
        $primanumero = $req->input('primanumero');
        $secondanumero = $req->input('secondanumero');
        $prima = $req->input('prima');
        $seconda = $req->input('seconda');
        $terza = $req->input('terza');
        $terzabis = $req->input('terzabis');
        $quarta = $req->input('quarta');
        $quinta = $req->input('quinta');
        $sesta = $req->input('sesta');
        $settima = $req->input('settima');
        $ottava = $req->input('ottava');
        $nona = $req->input('nona');

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('mails.allegato',
            [
                'consenso' => $consenso,
                'azienda' => $azienda,
                'titolare' => $titolare,
                'mail' => $mail,
                'primanumero' => $primanumero,
                'secondanumero' => $secondanumero,
                'prima' => $prima,
                'seconda' => $seconda,
                'terza' => $terza,
                'terzabis' => $terzabis,
                'quarta' => $quarta,
                'quinta' => $quinta,
                'sesta' => $sesta,
                'settima' => $settima,
                'ottava' => $ottava,
                'nona' => $nona
            ])->save("questionari/$azienda.pdf");

        Mail::send('mails.questmail',
            [
                'consenso' => $consenso,
                'azienda' => $azienda,
                'titolare' => $titolare,
                'mail' => $mail,
                'primanumero' => $primanumero,
                'secondanumero' => $secondanumero,
                'prima' => $prima,
                'seconda' => $seconda,
                'terza' => $terza,
                'terzabis' => $terzabis,
                'quarta' => $quarta,
                'quinta' => $quinta,
                'sesta' => $sesta,
                'settima' => $settima,
                'ottava' => $ottava,
                'nona' => $nona
            ], function ($message) use ($azienda)
            {
                $subject = "Questionario inviato dal sito";
                $message->from('info@counselingsrl.eu', "Counselingsrl");
                /*$message->to('info@counselingsrl.eu');*/
                $message->to('info@counselingsrl.eu');
                $message->subject($subject);
                $message->attach("questionari/$azienda.pdf");
            });

        //return response()->json(['message' => 'Request completed']);
        return 1;
        //return Redirect::to(URL::previous() . "#cont");
    }

    public function sos(Request $req){
        //dd($req);
        $ldate = date('d-m-Y');
        $consenso= "Ho letto l'Informativa sulla Privacy e acconsento al trattamento dei dati personali. Consenso ottenuto in data ".$ldate;

        $nomesos = $req->input('nomesos');
        $cognomesos = $req->input('cognomesos');
        $telefonosos = $req->input('telefonosos');
        $mailsos = $req->input('mailsos');
        $scelta = $req->input('scelta');

        Mail::send('mails.sosmail',
            [
                'consenso' => $consenso,
                'nomesos' => $nomesos,
                'cognomesos' => $cognomesos,
                'telefonosos' => $telefonosos,
                'mailsos' => $mailsos,
                'scelta' => $scelta
            ], function ($message)
            {
                $subject = "Modulo SOS inviato dal sito";
                $message->from('info@counselingsrl.eu', "Counselingsrl");
                $message->to('info@counselingsrl.eu');
                $message->subject($subject);

            });

        //return response()->json(['message' => 'Request completed']);
        return 1;
        //return Redirect::to(URL::previous() . "#cont");
    }
}
