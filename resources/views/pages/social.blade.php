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
                <h1> Seguimi sui Canali Social </h1>
            </div>
            @foreach($images as $entry)
                <div class='col-12'>
                    <a href='{{$entry["url"]}}'> <img style='margin:36px 0px; width: 100%; height: auto;' src='{{asset("img/site/".$entry["image"])}}'> </a>
                </div>
            @endforeach
        </div>
    </div>

    @include('partials/footer')
@endsection