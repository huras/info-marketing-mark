@extends('layouts/themed')

@section('styles')
<style>
    body{
        background-color: white!important;
        background-image: none!important;
    }
</style>
@endsection

@section('content')
<div class='container free-webinar'>
    <div class='row sec1'>
        <div class='col-lg-12'>
            <div class='m-head'>
                <div class='title'>
                    <a href='#' class='special-word'> Webinar GRATIS </a> con Marco Polito ti Mostra:
                </div>
                <div class='quote'>
                    "Il Metodo X con cui ho creato un Business Online Da 3 Milioni l'anno Anche Se Non Avevo Idee e Non Sapevo Vendere"
                </div>
            </div>
        </div>
    </div>
    <div class='row sec2' style='align-items: center;'>
        <div class='col-lg-5 video-body'>
            <div class='topics'>
                <div class='title'>
                    CORSO GRATIS CON MIK COSENTINO:
                </div>
                <div class='topic'>
                    <i class="fas fa-check"></i> Il segreto #1 Per scovare una mercato, capire le tue unicità e farti pagare per le soluzioni che puoi offrire (qualsiasi sia la tua situazione, questo ti aiuterà)
                </div>
                <div class='topic'>
                    <i class="fas fa-check"></i> Come creare una TUA nicchia per essere percepito esperto anche in un mare di concorrenti
                </div>
                <div class='topic'>
                    <i class="fas fa-check"></i> Come creare una mentalità imprenditoriale vincente (la maggior parte delle persone impiega 20 anni..e non sempre ci riesce, tu lo capirai al minuto 37)
                </div>
                <div class='topic'>
                    <i class="fas fa-check"></i> Il semplice sistema a 5 passi per acquisire clienti che ti pagano TANTO anche se pensi di non esserne all'altezza
                </div>
                <div class='button btn-a01'>
                    SI! PRENOTA IL MIO POSTO ORA
                </div>
                <div class='ninja-small-letters'>
                    100% GRATIS - La prossima sessione si tiene OGGi!
                </div>
            </div>
        </div>
        <div class='col-lg-7 video-body'>
            <div class='video'>
                <video autoplay src="{{asset('videos/free_webinar.mp4')}}" style='width: 100%;'>
                <!-- controls autoplay -->
            </div>
        </div>
    </div>

    <div class='row sec3' style="align-items: center;">
        <div class='col-lg-5 depoiments-body'>
            <div class='videos'>
                <div class='video-slot'>
                    <div class='video-miniature'>
                        <img src="{{asset('img/dev/1.jpg')}}">  
                    </div>
                    <div class='paragraph'>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. A, quidem deserunt dicta sint nobis illum adipisci modi!
                    </div>
                </div>
                <div class='video-slot'>
                    <div class='video-miniature'>
                        <img src="{{asset('img/dev/2.jpg')}}">
                    </div>
                    <div class='paragraph'>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, sint! Laudantium tempora veniam pariatur assumenda.
                    </div>
                </div>
                <div class='video-slot'>
                    <div class='video-miniature'>
                        <img src="{{asset('img/dev/11.jpg')}}">  
                    </div>
                    <div class='paragraph'>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero dolorum quisquam ex aliquam repudiandae ipsam voluptas?
                    </div>
                </div>
            </div>
        </div>
        <div class='col-lg-7 depoiments-body'>
            <div class='paragraphs'>
                <div class='paragraph'>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et excepturi est quasi tenetur minus quis nostrum at quos itaque possimus nulla ab optio amet ipsa magni dolore illum labore, ratione alias. Ullam voluptatibus, et ducimus nisi cumque eaque.
                </div>                
                <div class='paragraph'>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ratione enim consequatur, nulla sed quo numquam sequi, ex aut porro quam molestias optio eius vitae rerum perferendis minus vel error quasi libero accusantium impedit ipsa nisi id? Exercitationem autem iste unde.
                </div>
                <div class='paragraph'>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut natus ullam porro. Omnis ipsa tenetur minima eum quas consectetur quia ducimus facilis, quo officia, quibusdam dolore aliquid placeat labore rem nihil magnam quam dolor, corrupti exercitationem ipsam? Voluptates?
                </div>
                <div class='paragraph'>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam deleniti unde soluta quo autem. Reprehenderit explicabo eaque molestias, excepturi dolorem saepe sequi quis iste sunt sit, dolore delectus neque aspernatur, quo reiciendis dolor autem nobis veritatis est. Fugit eos amet officia, asperiores perferendis eligendi aut.
                </div>  
            </div>
        </div>
    </div>

    <div class='row sec4'>
        <div class='col-lg-12'>
            <div class='big-button-body'>
                <div class='needlessly-large-button btn-a01' style='text-transform: upper;'>
                    Lorem ipsum dolor sit amet.
                </div>
                <div class='small-letters'>
                    100% GRATIS - Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non officiis repellat unde. Odio, repellat amet fuga corporis quo qui ipsum a aliquid in velit enim iusto suscipit similique cumque sint!
                </div>
                <div class='italic-small-letters'>
                    *Disclaimer: -) : palesemente ti starai chiedendo perchè se non spendo in pubblicità tu sia arrivato qui... Bè, ti sembrerà strano MA ciò che ho investito oggi per mostrarti questa pagina è già stato ampiamente recuperato in altri modi...(quindi, mi costa 0€). Ti spiego di più nel training.
                </div>
            </div>            
        </div>
    </div>

    <div class='row sec5'>
        <div class='col-lg-12'>
            <div class='ugly-and-full-of-letters-footer'>
                <div class='logo'>
                </div>
                <div class='navigation-links'>
                </div>
                <div class='faded-letters'>
                </div>
            </div>
        </div>
    </div>
</div>        
@endsection