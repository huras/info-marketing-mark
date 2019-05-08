@extends('layouts/themed')

@section('meta')
    <meta property="og:url" content="{{Request::url()}}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{$post->title}}" />
    @if($post->call)
        <meta property="og:description" content="{{$post->call}}" />
    @endif
    @switch($post->cover_type_id)
        @case(1)
            <meta property="og:image" content="http://www.sogniamoingrande.it/images/posts/{{$post->id}}/{{$post->cover}}">
        @break
        @case(2)
        <meta property="og:image" content="http://www.sogniamoingrande.it/img/site/recorte-fb.jpg">
        @break
    @endswitch
@endsection

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
                    <div class='social-sharing w-100' style='    background-color: white;    padding: 0px 16px;    padding-top: 16px;'>
                        <div class="fb-share-button" data-href="{{Request::url()}}" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FPhysics&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                    </div>
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
                                    <a href='/post/{{$post->id}}'>
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