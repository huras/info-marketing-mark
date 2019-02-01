<div class='container-fluid'>
    <div class='row main-slider'>
        <h1> Notícias e Novidades </h1>
        
        <!-- Main Slider -->
        <div class='home-main-slider col-md-12'>
            <?php 
                $slider_fakeData = [
                    ['image' => 'mechendo no notebook.jpg', 'texto' => 'Lorem ipsum dolor sit amet. This is the latim standard sample text used.'],
                    ['image' => '18.jpg', 'texto' => 'Três pratos de trigo para três tigres tristes. O rato roeu a roupa do rei de roma.'],
                    ['image' => 'onboard-training.jpg', 'texto' => 'A criatividade acabou porque eu não como feijão.'],
                ];
            ?>
            @foreach($slider_fakeData as $slide)
                <?php $imageAddress = "img/dev/".$slide['image']; ?>
                <div class='item' style='background-image: url("{{$imageAddress}}");'>
                    <div class='texto'> {{$slide['texto']}} </div>
                </div>
            @endforeach
        </div>
        <div class='home-main-slider-dots col-md-12'>
        </div>
    </div>
</div>