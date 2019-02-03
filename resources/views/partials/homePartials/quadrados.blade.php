<div class='container mosaics-area'>
    <div class='mosaics row'>
            <?php 
                $topMosaics = [
                    ['title' => 'Facciamo un C.V. vincente', 'call' => '', 'cover' => 'q5tPsoSwrq4', 'url' => '', 'cover-type' => 2]                    
                ];

                $bottomMosaics = [
                    ['title' => 'Il saturatore', 'call' => '', 'cover' => '2.jpg', 'url' => 'https://www.ilsaturatore.it', 'cover-type' => 1],
                    ['title' => 'Uso roupa de frio no inverno todo dia.', 'call' => 'Quem gosta de pudim é tipo eu.', 'cover' => '5.jpg', 'url' => '/blog', 'cover-type' => 1],
                    ['title' => 'ASSIST TO THE WEBINAR.', 'call' => '', 'cover' => 'webinar.jpg', 'url' => '', 'cover-type' => 1]
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