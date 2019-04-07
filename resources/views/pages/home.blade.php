@extends('layouts/themed')

@section('meta')
    <meta property="og:url" content="http://www.sogniamoingrande.it" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Sogniamo in Grande" />
    <meta property="og:description" content="Maritime training and orientation" />
    <meta property="og:image" content="{{asset('img/site/video-bog-post-thumb.png')}}" />
@endsection

@section('content')
    <?php $links = [
        ['url' => '#o-que-vou-aprender', 'title' => __('O que vou aprender')]
    ]; ?>

    @include('partials/home-header',compact('links'))
    
    @if(session()->has('window_msg'))
        <div class='container-fluid window-msg home'>
            <div class='row'>
                <div class='col-lg-12 col-md-6 col-sm-12'>
                    <div class="window-message {{ Session::get('msg_context') }} w-100"> {{ Session::get('window_msg') }} </div>
                </div>
            </div>
        </div>
        <p class="alert "></p>
    @endif

    <!-- Parallax 1 -->
    <div class='container-fluid'>
        <div class='row'>
            <div class='paralax n1' style="background-image: url('img/site/marco-ship.jpg');">
                <div class='texto-1'>
                    <div class='title' style='text-shadow: rgba(0, 0, 0, 0.4) 0px 4px 5px; color: white; font-size: 42px; font-family: Arial; text-transform: uppercase;'> formazione marittima </div>
                    <div class='sub-title' style='text-shadow: rgba(0, 0, 0, 0.4); font-size: 17px; color: white;'> orientamento alle compagnie di navigazione </div>
                    <div class='conteudo' style='font-family: Barlow; font-size: 30px; color: white; text-shadow: rgba(0, 0, 0, 0.4);'>
                        Il progetto Sogniamo In Grande è una programma di formazione marittima e orientamento ai panorami internazionali per consentirti di trovare imbarco in maniera efficace e professionale.
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
                    Con la globalizzazione, la crisi economica odierna e la presenza di molti marittimi di altre nazioni sulle navi italiane, emergono non poche difficoltà nell’ambito marittimo nazionale, e iniziare una carriera a bordo di una nave diventa ogni anno più difficile e quasi impossibile senza le giuste conoscenze. Tuttavia ci sono ancora tantissime compagnie straniere che cercano personale marittimo, ma gli standard di valutazione ed i criteri di selezione di quest’ultime sono talvolta fuori portata dai giovani italiani. 

                    Il nostro programma di formazione prevede l'insegnamento di tutto quelle tecniche e strategie fondamentali ad un Allievo Ufficiale per candidarsi alle compagnie di navigazione più attive del mercato estero. Per garantire l’efficacia dell’applicazione e acquisizione del processo formativo, un Tutor si dedicherà in maniera individuale alla situazione, analizzando e studiando il piano di apprendimento e inserimento a bordo. Il programma di formazione è completamente online e ti consente di seguirlo anche da casa, ma la mole di informazioni e la valenza dei contenuti richiederanno la tua attenzione per una cambiamento di mentalità proiettato ai nuovi mercati con piani di apprendimento e tecniche di applicazione.

                    Lo scopo del progetto Sogniamo in Grande è quello di ridare il mare agli Italiani, così come i nostri antenati fecero in passato scrivendo libri di storia e di navigazione. Se sei un Allievo Ufficiale in cerca di imbarco o di una compagnia di valenza Internazionale, allora abbraccia il progetto e scopri come creare il tuo profilo professionale per cominciare una carriera a bordo di successo.
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
                    <div class='video' id='video' style='display: block;'>
                        <iframe width="100%"  height="100%" src="https://www.youtube.com/embed/gSXAb3079XM?autoplay=1" frameborder="0" allowfullscreen> </iframe>
                    </div>
                </div>
            </div>
            <div class='col-lg-5 background-image'>
                <div class='w-100 h-100' style='display: flex; flex-direction: column; text-align: center; justify-content: center; align-items: center;'>
                    <div class='texto-a15'>
                        Sei in cerca di un imbarco? Vuoi cambiare compagnia? iscriviti gratuitamente e scopri come creare il tuo profilo professionale per candidature di successo su compagnie di valenza internazionale.
                    </div>
                    <div class="btn-1" style="margin-top: 24px; align-items: flex-end;">
                        <a href="http://sogniamoingrande.wixsite.com/2019"> ENTRA A FAR PARTE DEL PROGETTO </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Parallax 2 -->
    <div class='paralax n2' style="background-image: url('img/site/Marco explain class 2.jpg'); margin-top: 64px;">
        <!-- Content 3 -->
        <div class='container content-3' style='margin: auto;'>
            <div class='row'>
                <div class='col-lg-7 mini-contact-form' style='background-color: #003d888a;'>
                    <div class='w-100' style='margin: 32px 0px; font-family: cahoma; font-size: 17px; color: white; text-align: justify; color: white; line-height: 1.2; padding: 0px 5%;'>
                        Iscriviti per rimanere sempre aggiornato sulle opportunità lavorative e le novità del settore marittimo.
                    </div>
                    <form action='/newsletter/subscribe' method='POST' class='w-100' style='display: flex; flex-wrap: wrap;'>
                        {{ csrf_field() }}
                        <div class='form-group col-lg-12'>
                            <label> {{ __('first name') }} </label>
                            <input type='text' name='first_name' required placeholder="{{ __('Type your first name here') }}">
                        </div>

                        <div class='form-group  col-lg-12'>
                            <label> {{ __('last name') }} </label>
                            <input type='text' name='last_name' placeholder="{{ __('Type your last name here') }}">
                        </div>

                        <div class='form-group col-lg-12'>
                            <label> E-mail </label>
                            <input type='text' name='email' required placeholder="{{ __('Type your email here') }}">
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
                <div class='col-lg-5'>
                    <div class='texto'>
                        <div class='titulo' style='text-shadow: -3px 3px black;'>
                            NON SMETTERE DI SOGNARE E QUANDO LO FAI, FALLO IN GRANDE.
                        </div>
                        <div class='conteudo' style='text-shadow: -2px 2px black;'>
                            Siamo la prima e unica iniziativa focalizzata nei giovani studenti dei Nautici Italiani che vogliono intraprendere una carriera lavorativa a bordo delle navi. I nostri ragazzi meritano l'opportunità di dimostrare il loro valore, noi gli diamo la possibilità di dimostrarlo su panorami internazionali, dove non sistono raccomandazioni e preferenze, ma solo meritocrazia. Non lasciare che le circostanze ti abbattano, reagisci, rimettiti in piedi e sogna in grande.
                        </div>
                    </div>
                </div>
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

        function showVideo() {
            document.getElementById('video-overlay').style.display = 'none';
            document.getElementById('video').style.display = 'flex';
        }
    </script>
@endsection