@if($mosaic['cover-type'] == 1)
    <div class='cover'  style="background-image: url('{{asset($imageAddress)}}');">
        <div class='title'> {{$mosaic['title']}} </div>
        <div class='call'> {{$mosaic['call']}} </div>
        <div class='overlay'></div>
    </div>
@elseif($mosaic['cover-type'] == 2)
    <div class='cover'>
        <iframe width="100%" height="400" src="https://www.youtube.com/embed/{{asset($imageAddress)}}"></iframe>
        <div class='title'> {{$mosaic['title']}} </div>
        <div class='call'> {{$mosaic['call']}} </div>
        <div class='overlay'></div>
    </div>
@endif