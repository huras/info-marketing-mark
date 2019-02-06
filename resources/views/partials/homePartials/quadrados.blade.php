<div class='container mosaics-area'>
    <div class='mosaics row'>
            <?php 
                $topMosaics = [                    
                    ['title' => 'Facciamo un C.V. vincente', 'call' => '', 'cover' => 'curriculum.jpg', 'url' => '/facciamo-cv-vicente', 'cover-type' => 1],
                    //['title' => 'TV Sogniamo in grande', 'call' => 'Watch more videos', 'cover' => 'youtube.jpg', 'url' => 'https://www.youtube.com/channel/UCL6PL_3UhIO-VqFJ_IJWu3g', 'cover-type' => 1],
                    ['title' => 'Il saturatore', 'call' => '', 'cover' => '9.jpg', 'url' => 'http://www.saturatore.it/', 'cover-type' => 1],
                ];

                $bottomMosaics = [
                    //['title' => 'Il saturatore', 'call' => '', 'cover' => '9.jpg', 'url' => 'http://www.saturatore.it/', 'cover-type' => 1],
                    //['title' => 'Blog and News', 'call' => '', 'cover' => 'blog.jpg', 'url' => '/blog', 'cover-type' => 1],
                    //['title' => 'ASSIST TO THE WEBINAR.', 'call' => '', 'cover' => 'webinar.jpg', 'url' => '', 'cover-type' => 1]
                ];
            ?>

             

            @foreach($topMosaics as $mosaic)
                <?php $imageAddress = "img/dev/".$mosaic['cover']; ?>
                <a target='_blank' href="{{$mosaic['url']}}" class='mosaic top col-md-6 nlink'>
                    @include('partials/mosaic', $mosaic)
                </a>
            @endforeach

            
    </div>
    
    <div class='mosaics row'>
        @foreach($bottomMosaics as $mosaic)
            <?php $imageAddress = "img/dev/".$mosaic['cover']; ?>
            <a target='_blank' href="{{$mosaic['url']}}" class='mosaic bottom col-md-4 nlink'>
                @include('partials/mosaic', $mosaic)
            </a>
        @endforeach
    </div>
</div>