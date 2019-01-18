@extends('layouts/themed')

@section('content')
    @include('partials/home-header')
    <div>
        <div class='container container-blog'>
            <div class='row'>
                <div class='head col-md-12'>
                    Blog
                </div>                
                <div class='blog-posts col-md-9'>
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
                                            <img src="{{asset('img/posts/'.$post->cover)}}">
                                        @break
                                        @case(2)
                                            <iframe width="380" height="250" src="{{$post->cover}}"> </iframe>
                                        @break
                                    @endswitch
                                @endif
                            </div>

                            <div class='readable'>
                                <div class='title'> {{$post->title}} </div>
                                <div class='call'> {{$post->call}} </div>
                            </div>

                            <div class='interactions'>
                                <a href='#' class='read-more-btn'> <i class="fas fa-book-open"></i> <div class='btn-label'> Read </div> </a>
                                <a href='#' class='read-more-btn' title='bookmark'> <i class="fas fa-bookmark"></i> <div class='btn-label'> Bookmark </div> </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class='extra-content col-md-3'>
                </div>
            </div>
        </div>
    </div>
    @include('partials/footer')
@endsection