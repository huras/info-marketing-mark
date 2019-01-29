@extends('layouts/criador')

@section('content')
    <?php
        $colors = [
            ['main' => '#414141', 'sub' => '#545454'],
            ['main' => '#7b5ec2', 'sub' => '#886ec8'],
            ['main' => '#732563', 'sub' => '#9e2987'],
            ['main' => '#1c944b', 'sub' => '#20672b'],
            ['main' => '#b10000', 'sub' => '#7c1212'],
            ['main' => '#2f94b5', 'sub' => '#00b8f7'],
            ['main' => '#b77b14', 'sub' => '#f7b400']
        ];

        $slots = [
            ['name' => 'Home Page', 'count' => null, 'icon' => 'fas fa-home', 'href' => '/admin/home-dashboard', 'use' => true],
            ['name' => 'Newsletter', 'count' => null, 'icon' => 'fas fa-newspaper', 'href' => '#', 'use' => false],
            ['name' => 'Blog', 'count' => $totalPosts, 'icon' => 'fas fa-align-left', 'href' => '/admin/blog', 'use' => true],
            ['name' => 'Contacts', 'count' => $totalContacts, 'icon' => 'far fa-envelope', 'href' => '/admin/contacts', 'use' => true],
            ['name' => 'TV Sogniamoingrande', 'count' => 93, 'icon' => 'fab fa-youtube', 'href' => '#', 'use' => false],
            ['name' => 'Configs', 'count' => null, 'icon' => 'fas fa-cog', 'href' => '#', 'use' => false],
            ['name' => 'Users', 'count' => 9, 'icon' => 'fas fa-users', 'href' => '#', 'use' => false]
        ];
    ?>

    <div class='container dashboard'>
        <div class='row'>
            <h1 style='color: black;'> Dashboard </h1>
        </div>
        <div class='row'>
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