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

    public function blog(Request $request){
        $meses_abreviados = ['Not a month','Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        $oldQuery = [];

        if ($request->isMethod('post'))//Check if has to filter
        {
            $query = BlogPost::where('status', 1);

            $searchParams = $request->all();
            if(isset($searchParams['title'])){
                $oldQuery['title'] = $searchParams['title'];
                $query->where('title', 'like', '%'.$searchParams['title'].'%');
            }

            $posts = $query->orderBy('created_at', 'desc')->paginate(5);
        }
        else{
            $posts = BlogPost::orderBy('created_at', 'desc')->where('status', 1)->paginate(5);
        }

        return view('blog/index', compact('posts','meses_abreviados','oldQuery'));
    }

    public function post($id){
        $post = BlogPost::find($id);
        $post->clicks = $post->clicks + 1;
        $post->save();
        $posts = BlogPost::where('id', '<>', $id)->limit(5)->get();        
        return view('blog/view', compact('post', 'posts'));
    }
}
