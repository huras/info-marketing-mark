<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\BlogPost;
use App\Models\NewsletterContact;
use App;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
    }

    public function home(Request $request){
        $params = [];
        if( isset($request->request->all()['msg']) ){
            $params['window_msg'] = $request->request->all()['msg'];
            $params['window_msg_context'] = $request->request->all()['msg_context'];
        }
        
        return view('pages/home',compact('params'));
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

    public function about(){
        return view('pages/about');
    }

    public function newsletter(Request $request){
        Contact::create($request->all());
        $window_msg = ['message' => 'Contact sent with success!', 'context' => 'success'];
        return view('pages/home', compact('window_msg'));
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

    function createNewsletterContact(Request $request){
        $contact = NewsletterContact::create($request->all());

        $target_email = $request->all()['email'];
        Mail::send('emails.welcome', array('nick' => 'Niobio41'), function($message) use ($target_email){
            $message->from('sogniamoingrande@yahoo.com', 'sogniamoingrande.it');
            $message->to($target_email, 'NiobioXLI')->subject('Welcome!');
        });

        $window_msg = 'Subscribed with success!';
        return redirect()->action('PagesController@home',['msg' => $window_msg, 'msg_context' => 'success']);
    }
}
