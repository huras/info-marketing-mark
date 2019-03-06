@extends('layouts/criador')

@section('content')
    <div class='container dashboard'>
        <div class='row criador-breadcrumb'>
            <h1 style='color: black;'> 
                <a href='/'> <i class="fas fa-home"></i> </a> <i class="fas fa-caret-right"></i>
                <a href='/admin/dashboard'> Dashboard </a> <i class="fas fa-caret-right"></i>
                <span> Email System </span>
            </h1>
        </div>

        @if(session()->has('window_msg'))
            <div class='container-fluid window-msg home'>
                <div class='row'>
                    <div class='col-lg-12 col-md-6 col-sm-12'>
                        <div class="window-message {{ Session::get('msg_context') }} w-100"> {{ Session::get('window_msg') }} </div>
                    </div>
                </div>
            </div>
            <p class="alert "></p>
        @endif

        <?php
            $colors = [
                ['main' => '#39ab75;', 'sub' => '#146738;'],
            ];

            $slots = [
                ['name' => 'Send email(s)', 'count' => null, 'icon' => 'fas fa-mail-bulk', 'href' => route('mail.newGroupMail'), 'use' => true],
            ];
        ?>

        <div class='row email-system' style='justify-content: center;'>
            @foreach($slots as $key => $slot)
                @if($slot['use'])
                    <div class='col-md-4'>
                        <a class='slot' style='background-color: {{$colors[$key]["main"]}}' href='{{$slot["href"]}}'>
                            <div class='icon' style='background-color: {{$colors[$key]["sub"]}}'>
                                <i class='{{$slot["icon"]}}'></i>
                                </div>
                            <div class='title'>
                                @if( $slot["count"] != null )
                                    <span class='count'> {{$slot["count"]}} </span>
                                @endif
                                <span class='name'> {{$slot["name"]}} </span>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection