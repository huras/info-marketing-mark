<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailsController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
    }

    function dashboard(){
        return view('criador/email/dashboard');
    }

    function newGroupMail(){
        return view('criador/email/newGroupMail');
    }

    function testMailLayout(){
        return view('emails/hello');
    }

    function sendEmailToList(){
        //$user = User::find($id);
 
        Mail::send('emails.hello', array('nick' => 'Niobio41'), function($message){
            $message->to('hurast@gmail.com', 'NiobioXLI')->subject('Welcome!');
        });
                     
        return Redirect::to('/');
    }
}
