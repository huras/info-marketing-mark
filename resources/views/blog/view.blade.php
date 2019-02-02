@extends('layouts/themed')

@section('content')
    @include('partials/home-header')
    
        <div class='container blog-view'>
            <div class='row'>
                <div class='col-mb-12 header'>
                    <a href='/blog'> Blog </a>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-9' style='padding-left: 0px; padding-right: 0;'>
                    <div class='post'>
                        <div class='cover'>
                            @switch($post->cover_type_id)
                                @case(1)
                                    <img src="{{asset('images/posts/'.$post->id.'/'.$post->cover)}}">
                                @break
                                @case(2)
                                    <iframe width="100%" height="450" src="https://www.youtube.com/embed/{{$post->cover}}"> </iframe>
                                @break
                            @endswitch
                        </div>
                        <div class='date'> Posted at : {{$post->created_at}} Last updated at : {{$post->updated_at}} </div>
                        <div class='title'> {{$post->title}} </div>
                        <div class='call'> {{$post->call}} </div>
                        <div class='line-separator'>  </div>
                        <div class='content'> {!!$post->content!!} </div>
                        <div class='social-nets'> 
                            <a href='/post/{{$post->id}}'></a>
                        </div>
                    </div>
                </div>
                <div class='col-md-3' style='padding-right: 0;'>
                    <div class='merchan w-100'>
                        <div class='miniposts w-100'>
                            @foreach($posts as $post)
                                <div class='slot'>
                                    <a  href='/post/{{$post->id}}'>
                                        <div class='cover'>
                                            @switch($post->cover_type_id)
                                                @case(1)
                                                    <img src="{{asset('images/posts/'.$post->id.'/'.$post->cover)}}">
                                                @break
                                                @case(2)
                                                    <iframe width="380" height="150" src="https://www.youtube.com/embed/{{$post->cover}}"> </iframe>
                                                @break
                                            @endswitch
                                        </div>
                                        <div class='title'> {{$post->title}} </div>
                                        <div class='call'> {{$post->call}} </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @include('partials/footer')
@endsection