@extends('layouts/themed')

@section('content')
    <?php $links = [
        ['url' => '#o-que-vou-aprender', 'title' => __('O que vou aprender')]
    ]; ?>

    @include('partials/home-header',compact('links'))
    
    @if(isset($params['window_msg']))
        <div class='container-fluid window-msg home'>
            <div class='row'>
                <div class='col-lg-12 col-md-6 col-sm-12'>
                    <div class='window-message {{$params["window_msg_context"]}} w-100'> {{$params['window_msg']}} </div>
                </div>
            </div>
        </div>
    @endif

    <div class='container-fluid'>
        <div class='row'>
            <div class='paralax n1' style="background-image: url('img/site/Marco explain class 2.jpg');">
                <div class='who'>
                    <div class='title'> SOGNIAMO IN GRANDE </div>
                    <div class='conteudo'> 
                        Iniziare una carriera a bordo di una nave puo` essere molto complicato e non sempre possibile, ma attraverso le competenze maturate nel settore marittimo in panorami internazionali, possiamo garantirti di aumentare le tue chances di impiego, aiutandoti in tutti i passi formativi necessari per creare in te un profilo vincente e professionale, una personalita` capace di sognare in grande e puntare a qualsiasi obbiettivo, anche i piu` impensabili.
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @include('partials/homePartials/quadrados')

    <div class='container' style='margin-bottom: 32px;'>
        <div class='row'>
            <div class='col-md-12'>
                <iframe width="100%" height="580"  src="https://www.youtube.com/embed/NRwIslZXLZQ?autoplay=0&showinfo=0&controls=0" frameborder="0" allowfullscreen> </iframe>
            </div>
        </div>
    </div>

    <div class='container'>
        <div class='row video-contact'>
            <div class='w-100 mini-contact-form'>
                <form action='/newsletter/subscribe' method='POST' class='w-100' style='display: flex; flex-wrap: wrap;'>
                    {{ csrf_field() }}
                    <div class='form-group col-lg-6 col-md-12'>
                        <label> {{ __('first name') }} </label>
                        <input type='text' name='firstname' placeholder="{{ __('Type your first name here') }}">
                    </div>

                    <div class='form-group  col-lg-6 col-md-12'>
                        <label> {{ __('last name') }} </label>
                        <input type='text' name='lastname' placeholder="{{ __('Type your last name here') }}">
                    </div>

                    <div class='form-group col-lg-6 col-md-12'>
                        <label> E-mail </label>
                        <input type='text' name='email' placeholder="{{ __('Type your email here') }}">
                    </div>

                    <div class='form-group col-lg-6 col-md-12'>
                        <label> {{ __('phone') }} </label>
                        <input type='text' name='phone' placeholder="{{ __('Type your phone number here') }}">
                    </div>

                    <div class='form-group'>
                        <input type='submit' value='Subscribe' class='cadastrar'>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class='paralax n2' style="background-image: url('img/site/marco-ship.jpg');">
        <div class='who'>
            <div class='title'> Sognare è un diritto ed un dovere, sognare in grande invece è un privilegio di pochi, approfittane. </div>
            <div class='conteudo'> 
                Sogniamo in grande è un iniziativa dedicata a tutti i studenti di Istituti Nautici, con lo scopo di aiutarli ad avere una formazione professionale e qualificata per proporsi al mondo del lavoro internazionale.
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