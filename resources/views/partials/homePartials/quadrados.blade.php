<div class='container mosaics-area'>
    <div class='mosaics row'>
            <?php 
                $topMosaics = [
                    ['title' => 'Lorem ipsum dolor sit amet', 'call' => 'Hoje o ceu estava azul.', 'cover' => '1.jpg'],
                    ['title' => 'Uso roupa de frio no inverno todo dia.', 'call' => 'Quem gosta de pudim é tipo eu.', 'cover' => '2.jpg']
                ];

                $bottomMosaics = [
                    ['title' => 'Lorem ipsum dolor sit amet', 'call' => 'Hoje o ceu estava azul.', 'cover' => '3.jpg'],
                    ['title' => 'Uso roupa de frio no inverno todo dia.', 'call' => 'Quem gosta de pudim é tipo eu.', 'cover' => '5.jpg'],
                    ['title' => 'Uso roupa de frio no inverno todo dia.', 'call' => 'Quem gosta de pudim é tipo eu.', 'cover' => '8.jpg']
                ];
            ?>

            @foreach($topMosaics as $mosaic)
                <?php $imageAddress = "img/dev/".$mosaic['cover']; ?>
                <div class='mosaic top col-md-6'>
                    @include('partials/mosaic', $mosaic)
                </div>
            @endforeach
    </div>
    
    <div class='mosaics row'>
        @foreach($bottomMosaics as $mosaic)
            <?php $imageAddress = "img/dev/".$mosaic['cover']; ?>
            <div class='mosaic bottom col-md-4'>
                @include('partials/mosaic', $mosaic)
            </div>
        @endforeach
    </div>
</div>