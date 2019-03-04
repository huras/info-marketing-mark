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

    <!-- Parallax 1 -->
    <div class='container-fluid'>
        <div class='row'>
            <div class='paralax n1' style="background-image: url('img/site/marco-ship.jpg');">
                <div class='texto-1'>
                    <div class='title'> SOGNIAMO IN GRANDE </div>
                    <div class='conteudo'>
                        Ogni singolo giorno aiutiamo tantissimi ragazzi a formarsi in maniera professionale per proporsi al mondo lavorativo del settore marittimo internazionale.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content 1 -->
    <div class='container content-1'>
        <div class='row'>
            <div class='col-lg-6 col-sm-12'>
                <div class='texto'>
                    Con la globalizzazione, la crisi economica odierna  e la presenza di molti marittimi di altre nazioni sulle navi italiane, emergono non poche difficoltà nell’ambito marittimo nazionale, e iniziare una carriera a bordo di una nave diventa ogni anno più difficile e quasi impossibile senza le giuste conoscenze. Tuttavia ci sono ancora tantissime compagnie straniere che cercano personale marittimo, ma gli standard di valutazione ed i criteri di selezione di quest’ultime sono talvolta fuori portata dai giovani italiani. 

                    Proprio per questo il i nostri programmi di formazione prevedono l'insegnamento di tutto quello che serve ad una persona per diventare un ufficiale in grado non solo di proporsi a qualsiasi compagnia di navigazione al mondo, ma anche all’acquisizione delle giuste conoscenze per brillare in maniera professionale anche una volta a bordo. 

                    Ed ecco perché chi abbraccia il progetto Sogniamo in Grande, tende a fare carriera in maniera molto più veloce.  

                    Perché quello che conta per noi veramente, non è solo aiutare i giovani italiani ad inserirsi del mondo del lavoro internazionale, ma anche riproporre un nuova generazione di Ufficiali Italiani che possano farsi valere a bordo come già in nostri antenati fecero in passato.
                </div>
                <div class='btn-1' style='min-height: 300px;'>
                    <a href='http://sogniamoingrande.wixsite.com/2019' class='btn-1'> Entra nel progetto Sogniamo in Grande </a>
                </div>
            </div>
            <div class='col-lg-6 col-sm-12'>
                <div class='images'>
                    <img src='img/site/29683259_10214626803651336_2521987673297999818_n.jpg'>
                    <img src='img/site/NIK_5288.JPG'>
                </div>
            </div>
        </div>
    </div>

    <!-- Content 2 -->
    <div class='container content-2'>
        <div class='row'>
            <div class='col-lg-7'>
                <div class='video-1'>
                    <div class='overlay' id='video-overlay' style="background-image: url('img/site/video-1-overlay.png'); cursor: pointer;" onclick="showVideo();">
                        <i class="fab fa-youtube"></i>
                    </div>
                    <div class='video' id='video'>
                        <iframe width="100%"  height="100%" src="https://www.youtube.com/embed/NRwIslZXLZQ?autoplay=1" frameborder="0" allowfullscreen> </iframe>
                    </div>
                </div>
            </div>
            <div class='col-lg-5 mini-contact-form'>
                <form action='/newsletter/subscribe' method='POST' class='w-100' style='display: flex; flex-wrap: wrap;'>
                    {{ csrf_field() }}
                    <div class='form-group col-lg-12'>
                        <label> {{ __('first name') }} </label>
                        <input type='text' name='firstname' placeholder="{{ __('Type your first name here') }}">
                    </div>

                    <div class='form-group  col-lg-12'>
                        <label> {{ __('last name') }} </label>
                        <input type='text' name='lastname' placeholder="{{ __('Type your last name here') }}">
                    </div>

                    <div class='form-group col-lg-12'>
                        <label> E-mail </label>
                        <input type='text' name='email' placeholder="{{ __('Type your email here') }}">
                    </div>

                    <div class='form-group col-lg-12'>
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

    <!-- Content 3 -->
    <div class='container content-3'>
        <div class='row'>
            <div class='col-lg-5'>
                <div class='texto'>
                    <div class='titulo'>
                        NON SMETTERE DI SOGNARE E QUANDO LO FAI, FALLO IN GRANDE.
                    </div>
                    <div class='conteudo'>
                        Siamo la prima e unica iniziativa focalizzata nei giovani studenti dei Nautici Italiani che vogliono intraprendere una carriera lavorativa a bordo delle navi. I nostri ragazzi meritano l'opportunità di dimostrare il loro valore, noi gli diamo la possibilità di dimostrarlo su panorami internazionali, dove non sistono racoomandazioni e preferenze, ma solo meritocrazia. Non lasicare che le circostanze ti abbatano, regisci e non smettere di sognare.
                    </div>
                </div>
            </div>
            <div class='col-lg-7 background-image' style="background-image: url('img/site/06-0088-.jpg');">
                <div class="btn-1" style="height: 100%; align-items: flex-end;">
                    <a href="http://sogniamoingrande.wixsite.com/2019"> ENTRA A FAR PARTE DEL PROGETTO </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Parallax 2 -->
    <div class='paralax n2' style="background-image: url('img/site/Marco explain class 2.jpg');">
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

        function showVideo() {
            document.getElementById('video-overlay').style.display = 'none';
            document.getElementById('video').style.display = 'flex';
        }
    </script>
@endsection