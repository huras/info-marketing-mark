@extends('layouts/themed')

@section('content')
    @include('layout2.header')
        <div class='container'>
            <div class='row contact-form'>
                    @if(isset($params['window_msg']))
                        <div class='container-fluid window-msg home'>
                            <div class='row'>
                                <div class='col-lg-12 col-md-6 col-sm-12'>
                                    <div class='window-message {{$params["window_msg_context"]}} w-100'> {{$params['window_msg']}} </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <h1 style='text-align: center;'> {{__('Contact')}} </h1>
                    <form method='POST' action='/contact' class='w-100' style='display: flex; flex-wrap: wrap;'>
                        {{ csrf_field() }}

                        <div class='col-md-12'>
                            <div class='form-group'>
                                <label> Name </label>
                                <input type='text' name='name'>
                            </div>
                        </div>

                        <div class='col-md-6'>
                            <div class='form-group'>
                                <label> E-mail </label>
                                <input type='text' name='email'>
                            </div>
                        </div>

                        <div class='col-md-6'>
                            <div class='form-group'>
                                <label> Phone </label>
                                <input type='text' name='phone'>
                            </div>
                        </div>

                        <div class='col-md-6'>
                            <div class='form-group'>
                                <label> Topic </label>
                                <select name='topic'>
                                    @foreach($topics as $topic)
                                        <option value='{{$topic}}'> {{$topic}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class='col-md-12'>
                            <div class='form-group'>
                                <label> Message </label>
                                <textarea rows='7' name='message'></textarea>
                            </div>
                        </div>

                        <div class='col-md-12'>
                            <div class='form-group' style='width:100%; display:flex; justify-content:center; align-items: center;'>
                                <input type='submit' style='width:50%;' value='Submit'>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php
        $images = [
            ['image' => 'Social Card Instagram.png', 'url' => 'https://www.instagram.com/sogniamoingrande/'],
            ['image' => 'Social Card Youtube.png', 'url' => 'https://www.youtube.com/channel/UCL6PL_3UhIO-VqFJ_IJWu3g'],
            ['image' => 'Social Card Facebook.png', 'url' => 'https://www.facebook.com/Sogniamo-in-Grande-278875232794723/'],
            ['image' => 'Social Card Linkedin.png', 'url' => 'https://www.linkedin.com/in/sogniamo-in-grande-marco-polito-a94748a7/'],
        ];
    ?>

        <div class='container social-page'>
            <div class='row' style='margin: 64px 0px;'>
                <div class='col-12'>
                    <h1 style='z-index: 5;'> Seguimi sui Canali Social </h1>
                </div>
                <div class='paralax n1' style='display: flex; flex-direction: column; justify-content: center; align-items: center; position: relative; background-image:url("{{asset("img/site/Social BG.png")}}"); background-position: center; background-size: cover; background-position-x: -261px;'>
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
