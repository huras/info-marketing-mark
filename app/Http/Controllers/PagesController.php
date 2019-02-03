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

    public function cvVicente(){
        return view('pages/curriculo');
    }

    public function blog(){
        $posts = BlogPost::orderBy('created_at', 'desc')->where('status', 1)->paginate(5);
        $meses_abreviados = ['Not a month','Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'];

        return view('blog/index', compact('posts','meses_abreviados'));
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
