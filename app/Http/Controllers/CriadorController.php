<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\BlogPost;

class CriadorController extends Controller
{
    public function dashboard(){
        $totalPosts = count(BlogPost::all());
        $totalContacts = count(Contact::all());
        return view('criador/dashboard', compact('totalContacts', 'totalPosts'));
    }

    public function home_dashboard(){
        return view('criador/home-dashboard');
    }

    public function bigMosaic(){
        
    }
}
