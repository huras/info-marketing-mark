@extends('layouts/themed')

@section('content')
    @include('partials/home-header')
    <div>
        <div class='container container-blog'>
            <div class='row'>
                <div class='head col-md-12'>
                    Blog
                </div>                
                <div class='blog-posts col-md-12'>
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
                                            <a href='/post/{{$post->id}}'> <img src="{{asset('images/posts/'.$post->id.'/'.$post->cover)}}"> </a>
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

                            <!-- <div class='interactions'>
                                <a href='/post/{{$post->id}}' class='read-more-btn'> 
                                    <i class="fas fa-book-open"></i> 
                                    <div class='btn-label'> Read </div> 
                                </a>
                                <a href='#' class='read-more-btn' title='bookmark'> 
                                    <i class="fas fa-bookmark"></i> 
                                    <div class='btn-label'> Bookmark </div> 
                                </a>
                            </div> -->
                        </div>
                    @endforeach
                    {{ $posts->links() }}
                </div>
                <div class='extra-content col-md-0'>
                </div>
            </div>
        </div>
    </div>
    @include('partials/footer')
@endsection