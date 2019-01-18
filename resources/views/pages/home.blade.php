@extends('layouts/themed')

@section('content')
    <?php $links = [
        ['url' => '#o-que-vou-aprender', 'title' => __('O que vou aprender')]
    ]; ?>
    @include('partials/home-header',compact('links'))
    <div class='container-fluid'>
        <div class='row'>
            <div class='paralax n1' style="background-image: url('img/site/marco-explain-class1.jpg');">
                <div class='who'>
                    <div class='title'> Sognare è un diritto ed un dovere, sognare in grande invece è un privilegio di pochi, approfittane. </div>
                    <div class='conteudo'> 
                        Sogniamo in grande è un iniziativa dedicata a tutti i studenti di Istituti Nautici, con lo scopo di aiutarli ad avere una formazione professionale e qualificata per proporsi al mondo del lavoro internazionale.
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Video e Contato -->
    <div class='container' id='o-que-vou-aprender'>
        <div class='row'>
            <div class='w-100'>
                <div class='learn-circles w-100'>
                    <h1 class='w-100'> O que vou aprender? </h1>
                    <?php
                        $bigCircles = [
                            ['caption' => 'Even though the included view will inherit all data available.', 'cover' => '4.jpg'],
                            ['caption' => 'If you would like to @include a view depending on a given boolean condition.', 'cover' => '9.jpg'],
                            ['caption' => 'Blades @include directive allows you to include a Blade view from within another view. ', 'cover' => '10.jpg'],
                            ['caption' => 'The $loop variable also contains a variety of other useful properties.', 'cover' => '17.jpg']
                        ];

                        $smallCircles = [
                            ['caption' => "Since HTML forms can't make PUT, PATCH, or DELETE requests", 'cover' => '11.jpg'],
                            ['caption' => 'Anytime you define a HTML form in your application', 'cover' => '12.jpg'],
                            ['caption' => 'Blade also allows you to define comments in your views. ', 'cover' => '13.jpg'],
                            ['caption' => "However, unlike HTML comments.", 'cover' => '14.jpg'],
                            ['caption' => 'You should include a hidden CSRF token field.', 'cover' => '15.jpg'],
                            ['caption' => 'The CSRF protection middleware can validate the request.', 'cover' => '16.jpg']
                        ];
                    ?>
                    @foreach($smallCircles as $circle)
                        <?php $imageAddress = "img/dev/".$circle['cover']; ?>
                        <div class='circle small col-md-4' >
                            <div class='imagem' style="background-image: url('{{asset($imageAddress)}}');"></div>
                            <div class='caption'> {{$circle['caption']}} </div>
                        </div>
                    @endforeach
                    <div class='circle-separator col-md-12'></div>
                    @foreach($bigCircles as $circle)
                        <?php $imageAddress = "img/dev/".$circle['cover']; ?>
                        <div class='circle big col-md-3'>
                            <div class='imagem' style="background-image: url('{{asset($imageAddress)}}');"></div>
                            <div class='caption'> {{$circle['caption']}} </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class='container'>
        <div class='row video-contact'>
            <div class='col-md-12'>
                <h1> Como posso me preparar? </h1>
            </div>
            <div class='col-md-8'>
                <iframe width="100%" height="420"
                src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
            </div>
            <div class='col-md-4 mini-contact-form'>
                <form action='/contact/new' method='POST'>
                    <div class='form-group'>
                        <label> {{ __('first name') }} </label>
                        <input type='text' name='firstname' placeholder="{{ __('Type your first name here') }}">
                    </div>

                    <div class='form-group'>
                        <label> {{ __('last name') }} </label>
                        <input type='text' name='lastname' placeholder="{{ __('Type your last name here') }}">
                    </div>

                    <div class='form-group'>
                        <label> E-mail </label>
                        <input type='text' name='email' placeholder="{{ __('Type your email here') }}">
                    </div>

                    <div class='form-group'>
                        <label> {{ __('phone') }} </label>
                        <input type='text' name='phone' placeholder="{{ __('Type your phone number here') }}">
                    </div>

                    <div class='form-group'>
                        <input type='submit' value='Cadastrar' class='cadastrar'>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class='container-fluid'>
        <div class='row main-slider'>
            <h1> Novidades </h1>
            
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

    <div class='paralax n2' style="background-image: url('img/site/marco-ship.jpg');">
        <div class='who'>
            <div class='title'> Estratégias em um Novo Paradigma Globalizado </div>
            <div class='conteudo'> 
                Caros amigos, o desafiador cenário globalizado apresenta tendências no sentido de aprovar a manutenção do retorno esperado a longo prazo. Percebemos, cada vez mais, que o desenvolvimento contínuo de distintas formas de atuação agrega valor ao estabelecimento das posturas dos órgãos dirigentes com relação às suas atribuições. Por outro lado, a mobilidade dos capitais internacionais talvez venha a ressaltar a relatividade do processo de comunicação como um todo. 
            </div>
        </div>
    </div>

    @include('partials/footer')
@endsection

@section('scripts')
    <script>
        $('.home-main-slider').slick({
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            adaptiveHeight: true,
            autoplaySpeed: 3000,
            autoplay: true,
            appendDots: '.home-main-slider-dots'
        });
    </script>
@endsection