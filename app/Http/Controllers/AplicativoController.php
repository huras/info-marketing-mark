<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AplicativoController extends Controller
{
    function login(){
        return view('appDemo.login');
    }
}
