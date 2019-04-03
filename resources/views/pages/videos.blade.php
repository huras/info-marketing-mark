@extends('layouts/themed')



@section('content')
    @include('partials/home-header')

    <?php $videos = [
        ['url' => 'https://www.youtube.com/watch?v=UoxXCWhZlOg', 'description' => 'INCONTRO SCUOLA /// ITN DUCA DEGLI ABRUZZI'],
        ['url' => 'https://www.youtube.com/watch?v=gSXAb3079XM', 'description' => 'ITN DUCA DEGLI ABRUZZI /// SogniamoinGRANDE'],
        ['url' => 'https://www.youtube.com/watch?v=89JsUScrOec', 'description' => 'Sogniamo in Grande. Settore Marittimo.'],
        ['url' => 'https://www.youtube.com/watch?v=2xj_SZeQtI8', 'description' => 'Come fare un colloquio di lavoro. SOGNIAMO IN GRANDE'],
        ['url' => 'https://www.youtube.com/watch?v=q5tPsoSwrq4', 'description' => 'COME FARE UN CURRICULUM VINCENTE'],
        ['url' => 'https://www.youtube.com/watch?v=vAs2O0cNegY', 'description' => 'COME I SOCIAL POSSONO AIUTARTI A TROVARE LAVORO. Linkedin'],
        ['url' => 'https://www.youtube.com/watch?v=rwcXmNvdZRY', 'description' => 'QUANDO SI CERCA LAVORO'],
    ]; ?>

    <div class='container-fluid' style=' background-image: url( {{ asset("img/site/network-bg.png") }} ) '>
        <div class='container home-videos' style='background-color: transparent;'>
            <div class='row'>
                <div class='col-lg-9'>
                    <div class='video-list w-100'>
                        <div class='row'>
                            @foreach($videos as $video)
                                <div class='col-lg-12 video-slot' style='margin-bottom: 64px;'>
                                    <div class='title w-100'> 
                                        <?= $video['description'] ?> 
                                    </div>
                                    <?php 
                                        preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $video['url'], $matches);
                                        $youtubeID = $matches[1];
                                    ?>
                                    <iframe width="100%" height="460" src="https://www.youtube.com/embed/<?= $youtubeID ?>" allowfullscreen> </iframe>
                                </div>
                                <div class='col-lg-12' style='justify-content: center; display: flex;'>
                                    <div class='video-slot-separator'>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class='col-lg-3'>
                    <form class='moving-form'>
                        {{ csrf_field() }}


                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('partials/footer')
@endsection