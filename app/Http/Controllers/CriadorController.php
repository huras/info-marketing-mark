<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\BlogPost;
use App\Models\NewsletterContact;
use App;

class CriadorController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function dashboard() {
        $totalPosts = count(BlogPost::all());
        $totalContacts = count(Contact::all());
        return view('criador/dashboard', compact('totalContacts', 'totalPosts'));
    }

    public function home_dashboard() {
        return view('criador/home-dashboard');
    }

    public function bigMosaic() {
        
    }

    public function subscriptions() {
        $subs = NewsletterContact::all()->orderBy('created_at', 'desc');
        $total  = count($subs);
        return view('criador/subscriptions/list', compact('subs', 'total'));
    }
}
