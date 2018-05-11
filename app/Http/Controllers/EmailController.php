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
}
