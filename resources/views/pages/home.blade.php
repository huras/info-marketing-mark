@extends('layouts/themed')

@section('content')
    @include('partials/home-header')
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
    <div class='container'>
        <div class='row video-contact'>
            <div class='col-md-12'>
                <h1> Principal Parte Titulo </h1>
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
                        ['image' => 'hands notebook.png', 'texto' => 'Três pratos de trigo para três tigres tristes. O rato roeu a roupa do rei de roma.'],
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
            // dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            adaptiveHeight: true,
            autoplaySpeed: 3000,
            autoplay: true
        });
    </script>
@endsection