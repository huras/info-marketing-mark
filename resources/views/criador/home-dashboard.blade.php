@extends('layouts/criador')

@section('content')
    <div class='container home-dashboard'>
        <div class='row criador-breadcrumb'>
            <h1 style='color: black;'> 
                <a href='/admin/dashboard'> Dashboard </a> <i class="fas fa-caret-right"></i>
                <span> Home Page </span>
            </h1>
        </div>
        <div class='row'>
            <div class='site-map col-md-12'>
                <a href='#' class='home-slot'> Header </a>
            </div>
            <div class='site-map col-md-12'>    
                <a href='#' class='home-slot'> Main Text </a>
            </div>
            <div class='site-map col-md-12'>
                <a href='#' class='home-slot'> What i will learn </a>
            </div>
            <div class='site-map col-md-12'>
                <a href='#' class='home-slot'> How can I prepare </a>
            </div>
            <div class='site-map col-md-12'>
                <a href='#' class='home-slot'> News Slider </a>
            </div>
            <div class='site-map col-md-12'>
                <a href='/admin/home-dashboard/bigMosaic' class='home-slot'> Big Mosaic </a>
            </div>
            <div class='site-map col-md-12'>
                <a href='/admin/home-dashboard/smallMosaic' class='home-slot'> Small Mosaic </a>
            </div>
            <div class='site-map col-md-12'>
                <a href='#' class='home-slot'> Footer </a>
            </div>
        </div>
    </div>
@endsection