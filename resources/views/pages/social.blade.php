@extends('layouts/themed')
@section('content')
    @include('partials/home-header')

    <?php 
        $images = [
            ['image' => 'Social Card Instagram.png', 'url' => 'https://www.instagram.com/sogniamoingrande/'],
            ['image' => 'Social Card Youtube.png', 'url' => 'https://www.youtube.com/channel/UCL6PL_3UhIO-VqFJ_IJWu3g'],
            ['image' => 'Social Card Facebook.png', 'url' => 'https://www.facebook.com/Sogniamo-in-Grande-278875232794723/'],
        ];
    ?>

        <div class='container'>
            <div class='row' style='margin: 64px 0px;'>
                <div class='col-12'>
                    <h1 style='z-index: 5;'> Seguimi sui Canali Social </h1>
                </div>
                <div class='paralax n1' style='display: flex; flex-direction: column; justify-content: center; align-items: center; position: relative; height: 1900px; background-image:url("{{asset("img/site/Social BG.png")}}"); background-position: center; background-size: cover; background-position-x: -261px;'>
                    <div style='width: 100%; width: 100%; height: 100%; background-color: black; opacity: 0.7; position: absolute; left: 0; top: 0;'></div>
                    <div class='w-100'>
                        @foreach($images as $entry)
                            <div class='col-12'>
                                <a target='_blank' href='{{$entry["url"]}}'> <img style='margin:36px 0px; width: 100%; height: auto;' src='{{asset("img/site/".$entry["image"])}}'> </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    

    @include('partials/footer')
@endsection