@extends('layouts.layout2')

@section('content')
    @include('layout2.header')

    @include('layout2.partials.goldenButtonModal')

    <div class='container-fluid layout2-home'>
        <div class='top-section row'>
            <section class='w-100'>
                <div class='caroussel desktop-only'>
                    <img src='/img/themes/layout2/DSC_5783-31.jpg' style='filter: sepia(0.3);'>
                    <img src='/img/themes/layout2/DSC_5731-19.jpg' style='filter: sepia(0.3);'>
                    <img src='/img/themes/layout2/DSC_5725-16.jpg' style='filter: sepia(0.3);'>
                </div>

                <?php
                    $pictures = [
                        [
                            'location' => '/img/themes/layout2/DSC_5725-16.jpg',
                        ],
                        [
                            'location' => '/img/themes/layout2/DSC_5731-19.jpg',
                        ],
                        [
                            'location' => '/img/themes/layout2/DSC_5783-31.jpg',
                            'background-position-x' => '-458px'
                        ],
                    ];
                ?>

                <div class='caroussel mobile-only'>
                    @foreach($pictures as $picture)
                        <div class='slide'
                            style='
                                    background-image: url("{{$picture["location"]}}");
                                    @if(isset($picture["background-position-x"])) background-position-x: {{$picture["background-position-x"]}}; @endif
                        '>
                            <img src='{{$picture["location"]}}' style='opacity: 0;'>
                        </div>
                    @endforeach
                </div>
            </section>

            <div class='w-100 de-cima'>
                <div class='laranja-texto animate-on-scroll fadeOut tempo-3-4 delay-1-2' my-animation='fadeIn'>
                    <span> Benvenuto Sognatore </span>
                </div>
            </div>

            <div class='w-100 faixa-transparente de-baixo'>
                <!-- Desktop -->
                <div class='branco-pequeno-texto desktop-only'>
                    Se il tuo sogno e` quello di viaggiare per il mondo e lavorare a
                </div>
                <div class='branco-pequeno-texto desktop-only'>
                    bordo delle navi da crociera o mercantili, sei nel posto giusto.
                </div>

                <!-- Mobile -->
                <div class='branco-pequeno-texto mobile-only'>
                    Se il tuo sogno e` quello di viaggiare il mondo e lavorare a bordo delle navi da crociera o mercantili, sei nel posto giusto.
                </div>
                <div onclick="showYellowButtonModal();" class='botao-amarelo animate-on-scroll fadeOut tempo-3-4 delay-2' my-animation='fadeIn' >
                    Sali a Bordo
                </div>
            </div>
        </div>

        <?php
            $items = [
                [
                    'icon' => 'fas fa-ship',
                    'title' => 'Profilo prefessionale',
                    'content' => 'Costruiamo insieme le colonne del tuo nuovo inizio, curriculum, documenti e social activities',
                    'link' => '#',
                    'modal-title' => 'Profilo prefessionale',
                    'modal-text' => 'Costruiamo insieme le colonne del tuo nuovo inizio, curriculum vitae professionale, lettera di accompagnamento, profilo Linkedin, documentazione italiana e orientamento tasse e agevolazioni. Ti seguiamo in tutti gli step con l`assistenza di un tutor 24h.',
                    'modal-ex-text' => 'Un curriculum vincente e` il tuo biglietto da visita per una candidatura di successo, imparando le tecniche di valorizzazione e comunicazione internazionale.',
                    'base-animation-class' => 'animate-on-scroll encolhidoNoX tempo-2-3 ',
                    'my-animation' => 'esticadoNoX',
                ],
                [
                    'icon' => 'fas fa-language',
                    'title' => 'English Time',
                    'content' => 'Un corso live di inglese tecnico marittimo per consentirti di aprire le tue porte al mercato internazionale',
                    'link' => '#',
                    'modal-title' => 'English Time',
                    'modal-text' => 'Un corso live di inglese tecnico marittimo per consentirti di aprire le tue porte al mercato internazionale.',
                    'modal-ex-text' => 'La nostra professoressa di Inglese ti seguira` durante il corso con incontri live, video, esercizi e simulazioni di colloquio studiate per farti brillare in una candidatura con qualsiasi compagnia al mondo. In solo 8 settimane sarai in grado di sostenere il tuo primo colloquio in inglese.',
                    'base-animation-class' => 'animate-on-scroll encolhidoNoX tempo-2-3 delay-1-2',
                    'my-animation' => 'esticadoNoX',
                ],
                [
                    'icon' => 'fas fa-globe',
                    'title' => 'Socials boost',
                    'content' => 'Ti mostriamo come utilizzare i social e Internet per scovare i recruiter di tutto il mondo e attirarli nella tua rete ',
                    'link' => '#',
                    'modal-title' => 'Social Boost',
                    'modal-text' => 'Ti mostriamo come utilizzare i social e Internet per scovare i recruiter di tutto il mondo e attirarli nella tua rete.',
                    'modal-ex-text' => 'Impariamo insieme come valorizzare il tuo profilo professionale attraverso un uso funzionale della tua rete Linkedin, campagne Email, iniziative strategiche, tecniche di contatto, corretto uso dell`inglese per email professionale e molto altro ancora.',
                    'base-animation-class' => 'animate-on-scroll encolhidoNoX tempo-2-3 delay-1',
                    'my-animation' => 'esticadoNoX',
                ],
                [
                    'icon' => 'fas fa-signal',
                    'title' => 'Potenziamento',
                    'content' => 'Attraverso un percorso motivazionale e di gestione risorse, ti mostriamo la reale portata dei tuoi obbiettivi. ',
                    'link' => '#',
                    'modal-title' => 'Potenziamento',
                    'modal-text' => 'Attraverso un percorso motivazionale e di gestione risorse, ti mostriamo la reale portata dei tuoi obbiettivi.',
                    'modal-ex-text' => 'Il cambiamento di mentalita` e` un processo fondamentale per poter
                    conquistare obbiettivi che credevi impossibili. Imparerai ad usare il tuo cervello sia da un punto di vista energetico che da un punto di vista tecnico, potenziando quelle aree che credevi ormai spente e valorizzando i tuoi punti di forza per farti vincere nelle tue sfide personali e professionali.',
                    'base-animation-class' => 'animate-on-scroll encolhidoNoX tempo-2-3 delay-3-2',
                    'my-animation' => 'esticadoNoX',
                ],
            ];
        ?>

        <?php $modalCount = count($items); ?>
        <script>
            function closeModalWindow(id){
                let modal = document.getElementById(id);
                modal.classList.remove('show-modal');
            }

            function showModalWindow(id) {
                for(let i = 0; i < {{$modalCount}}; i++){
                    closeModalWindow('topic-modal-'+i);
                }

                let modal = document.getElementById(id);
                modal.classList.toggle('show-modal');
            }
        </script>

        <div class='row options'>
            @foreach($items as $key => $item)
                <?php $modalID = 'topic-modal-'.$key ?>
                <div class='col-lg-3 col-sm-6 col-12'>
                    <div class='w-100 topic-slot' onclick='showModalWindow("{{$modalID}}")'>
                        <div class='icone' >
                            <i class="{{$item['icon']}} {{$item['base-animation-class']}}" my-animation='{{$item["my-animation"]}}'></i>
                        </div>
                        <div class='texto'>
                            {{$item['title']}}
                        </div>
                        <div class='conteudo'>
                            {{$item['content']}}
                        </div>
                        <div class='red-link'>
                            (read more)
                        </div>
                    </div>
                </div>

                <div class='topic-modal' id='{{$modalID}}'>
                    <div class='modal-bg' onclick='closeModalWindow("{{$modalID}}")'>
                    </div>
                    <div class='modal-window'>
                        <div class='close-wrapper w-100' onclick='closeModalWindow("{{$modalID}}")'>
                            <span class='close'> X </span>
                        </div>

                        <div class='title'>
                            {{$item['modal-title']}}
                        </div>
                        <div class='conteudo'>
                            {{$item['modal-text']}}
                        </div>
                        <div class='call'>
                            <i> {{$item['modal-ex-text']}} </i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
