<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController2 extends Controller
{
    public function index(){
        return view('layout2.index');
    }
}
