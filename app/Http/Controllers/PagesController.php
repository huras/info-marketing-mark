<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\BlogPost;
use App;

class PagesController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
    }

    public function home(){
        return view('pages/home');
    }

    public function videos(){
        return view('pages/videos');
    }

    public function social(){
        return view('pages/social');
    }

    public function cvVicente(){
        return view('pages/curriculo');
    }

    public function contact(){
        $topics = ['Sugestion' ,'Other'];
        return view('pages/contact', compact('topics'));
    }

    public function about(){
        return view('pages/about');
    }

    public function newsletter(Request $request){
        Contact::create($request->all());
        $homeflash = ['message' => 'Contact sent with success!', 'context' => 'success'];
        return view('pages/home', compact('homeflash'));
    }
}
