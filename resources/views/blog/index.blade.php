@extends('layouts/themed')

@section('content')
    @include('layout2.header')
    @include('layout2.partials.goldenButtonModal', ['delay' => 12])
    <div>
        <div class='container container-blog' style='background-color: transparent;'>
            <div class='row'>
                <div class='head col-md-12'>
                    Blog
                </div>
                <div class='col-md-12'>
                    <form class='search-box' method='POST' action='/blog' id='post-search'>
                        {{ csrf_field() }}

                        <div class='row'>
                            <div class='col-md-5 field'>
                                <div class='form-group'>
                                    <input type='text' style='padding-left: 4px;' name='title' placeholder="per cercare..." value='@if(isset($oldQuery["title"])) {{$oldQuery["title"]}} @endif'>
                                </div>
                            </div>
                            <div class='col-md-3 buttons'>
                                <div class='form-group wrap' style=' align-items: center; display: flex; height: 100%; padding-top: 15px;'>
                                    <div class='f-btn std-themed-search' onclick="document.getElementById('post-search').submit();" > <i class='fa fa-search'></i> </div>
                                    <a href='/blog' class='f-btn std-themed-clear nlink'> Clear </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                @if(isset($oldQuery["title"]))
                    <div class='blog-posts col-md-12' style='background-color: #040010; color: white; font-size: 16px; padding: 8px 16px; text-align: center;'>
                        Your search returned <?= count($posts); ?> result<?php if(count($posts)>1) echo 's'; ?>
                    </div>
                @endif

                <div class='blog-posts col-md-12' style='background-color: #040010;'>
                    @foreach($posts as $post)
                        <?php $data = date_parse($post['created_at']); ?>

                        <div class='slot'>
                            <div class='date'>
                                <div class='day-month'> <?= $data['day'] ?>/<?= $meses_abreviados[$data['month']]?> </div>
                                <div class='year'> <?= $data['year'] ?> </div>
                            </div>

                            <div class='cover'>
                                @if(!empty($post->cover))
                                    @switch($post->cover_type_id)
                                        @case(1)
                                            <a href='/post/{{$post->id}}'> <img style='width: 100%; height: auto;' src="{{asset('images/posts/'.$post->id.'/'.$post->cover)}}"> </a>
                                        @break
                                        @case(2)
                                            <iframe width="380" height="250" src="https://www.youtube.com/embed/{{$post->cover}}"> </iframe>
                                        @break
                                    @endswitch
                                @endif
                            </div>

                            <div class='readable'>
                                <a href='/post/{{$post->id}}' class='title'> {{$post->title}} </a>
                                <a href='/post/{{$post->id}}' class='call'> {{$post->call}} </a>
                            </div>
                        </div>
                    @endforeach
                    {{ $posts->onEachSide(1)->links() }}
                </div>
                <div class='extra-content col-md-0'>
                </div>
            </div>
        </div>
    </div>
    @include('partials/footer')
@endsection
