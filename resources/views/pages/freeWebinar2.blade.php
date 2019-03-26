@extends('layouts/themed')

@section('styles')
<style>
    body{
        background-color: white!important;
        background-image: none!important;
    }
    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }
</style>
@endsection

@section('scripts')
<script>
    var daysOfWeekInItalian = ['Domenica', 'Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato'];
    var monthNamesItalian = ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'];
    var now = new Date(Date.now() + 5 * 60 * 1000);

    var after5MinOption = document.getElementById('after5MinOption');    
    var currentMinutes = now.getMinutes();
    if(currentMinutes < 10)
        currentMinutes = '0'+currentMinutes;
    var currentTime = now.getHours() + ':' + currentMinutes;
    after5MinOption.innerHTML = '<i class="fas fa-calendar-alt"></i> ' + daysOfWeekInItalian[now.getDay()] + ', ' + now.getDate() + ' ' + monthNamesItalian[now.getMonth()] + ' ' + currentTime;

    var tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);
    var tomorrowAt20Option = document.getElementById('tomorrowAt20Option');    
    tomorrowAt20Option.innerHTML = '';
    tomorrowAt20Option.innerHTML = '<i class="fas fa-calendar-alt"></i> ' + daysOfWeekInItalian[tomorrow.getDay()] + ', ' + tomorrow.getDate() + ' ' + monthNamesItalian[tomorrow.getMonth()] + ' 20:00';

    // Get the modal
    var modal = document.getElementById('modal-75');
    // Get the <span> element that closes the modal
    var span = document.querySelectorAll(".modal-75-bar .close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    function checkDateSelect(){
        var dateSelect = document.getElementById('dateSelect');
        
        if(dateSelect.value != 'none'){
            var hiddenInputs = document.getElementById('hidden-inputs');
            hiddenInputs.style.display = 'none';

            var avaliability_check = document.getElementById('avaliability-check');
            avaliability_check.style.display = 'flex';

            setTimeout(hideAvaliabilityCheck, 2000);
        }
    }

    function hideAvaliabilityCheck(){
        var avaliability_check = document.getElementById('avaliability-check');
        avaliability_check.style.display = 'none';

        var hiddenInputs = document.getElementById('hidden-inputs');
        hiddenInputs.style.display = 'block';
    }
    </script>

    <script> 
        $('document').ready(function() { 
            var video = document.querySelector('.landing');
            video.play();
        }); 
    </script>
@endsection

@section('content')
<!-- 75% Bar Modal -->
<div id="modal-75" class="modal free-webinar2">
  <!-- Modal content -->
  <div class="modal-75-bar">
    <div class='w-100 topo'>
        <span class="close">&times;</span>
        <div class='eternal-seventy-five-percent-bar'> 
            <div class='bg'> </div>
            <img class='bar' src="{{asset('img/site/loading bar.gif')}}">
            <div class='text'> 75% </div>
        </div>
    </div>
    <form class='subscribe w-100' action='/webinar-gratis-2' method='POST'>
        {{ csrf_field() }}
        <div class='form-input w-100'>
            <select onchange='checkDateSelect()' id='dateSelect' name='when'>
                <option disabled selected value='none'> Choose date </option>
                <option value='now'> Adesso </option>
                <option value='after5Min' id='after5MinOption'> 5 min from now </option>
                <option value='tomorrowAt20' id='tomorrowAt20Option'> Tomorrow at 20:00 </option>
            </select>
        </div>
        <div class=''></div>
        <div class='w-100 checking-avaliability' id='avaliability-check'>
            <img src="{{asset('img/site/loading.gif')}}">
            <div class='text'> Verifico la disponibilità </div>
        </div>
        <div class='w-100' style='display: none;' id='hidden-inputs'>
            <div class='form-input w-100'>
                <input type='text' placeholder='Nome' name='first_name'>
            </div>
            <div class='form-input w-100'>
                <input type='text' placeholder='E-mail' name='email'>
            </div>
            <div class='form-input w-100'>
                <input type='submit' value='Completo'>
            </div>
        </div>
    </form>
  </div>
</div>

<div class='container-fluid free-webinar2 pt-1'>
    <div class='container'>
        <div class='row bsec1' style='margin-bottom: 0px;'>
            <div class='col-sm-12 logo-top'>
                <img src="{{asset('img/site/Logo-transparent.png')}}">
            </div>
        </div>
    </div>
    <div class='container'>
        <div class='row bsec1' style='margin-top: 0px;'>
            <div class='col-lg-6 col-sm-12'>
                <div class='textos'>
                    <div class='texto3'>
                        BENVENUTO AL WEBINAR
                    </div>
                    <div class='texto4'>
                        In questo Webinar scoprirai le strategie con cui ho vinto tre colloqui di fila, sono stato promosso due volte in un anno ed ho battuto la concorrenza di altre nazionalità anche se venivo da una scuola del nautico del meridione.
                    </div>
                    <div class='subscribe-call w-100'>
                        <div class='button' onclick="modal.style.display = 'block';">
                            GUARDA IL WEBINAR
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-lg-6 col-sm-12'>
                <div class='textos' style='margin-bottom: 64px;'>
                    <div class='row bsec5' >
                        <div class='title'> Inoltre vedremo anche </div>                        
                    
                        <div class='point'> <i class="far fa-file-alt"></i> <span> Come valorizzare il tuo profilo professionale </span> </div>
                        <div class='point'> <i class="fas fa-phone-slash"></i> <span> Perchè non ti chiamano mai </span> </div>
                        <div class='point'> <i class="fas fa-passport"></i> <span> Come arrivare ai vertici di un'azienda internazionale </span> </div>
                        <div class='point'> <i class="fas fa-ship"></i> <span> Cosa si aspettano da te le compagnie marittime di valenza internazionale </span> </div>
                        <div class='point'> <i class="fas fa-compass"></i> <span> Come scegliere la tua compagnia ideale </span> </div>
                    </div>
                </div>
            </div>

            <div class='col-sm-12' style='border-top: 1px solid white;'>
                <div class='texto1' style='margin-top: 64px;'>
                    NON SMETTERE DI SOGNARE
                </div>
                <div class='video'>
                    <video autoplay controls style='width: 100%;' class='landing video-desktop'>
                        <source src="{{asset('videos/webinarGratuito.mp4')}}" type="video/mp4">
                    </video>
                    <video controls style='width: 100%;' class='landing video-mobile'>
                        <source src="{{asset('videos/webinarGratuito.mp4')}}" type="video/mp4">
                    </video>
                </div>
            </div>

            <div class='col-sm-12' style='margin-top: 32px; padding-bottom: 48px; border-bottom: 1px solid white;'>
                <div class='ebaixo-do-video'>
                    <div class='t1' style='font-size: 24px; color: white; text-align: center; margin-top: 48px;'>
                        Di cosa parla il webinar?
                    </div>
                    <div class='t2' style='font-size: 18px; color: white; margin-top: 8px; text-align: center; white-space: pre-line;'>
                        Ci sono tantissime cose che devi sapere prima di inviare un curriculum ad una grande compagnia straniera altrimenti rischi solo di bruciarti una chance. Parleremo di perchè non riesci a imbarcare e con quali strategie puoi aspirare ad obbietivi molto più alti di quelli che credi.
                    </div>
                    <div class='t2' style='font-size: 24px; color: white; margin-top: 8px; text-align: center; white-space: pre-line;'>
                        Perché vederlo?
                    </div>
                    <div class='t2' style='font-size: 18px; color: white; margin-top: 8px; text-align: center; white-space: pre-line;'>
                        Se sei in attesa di un imbarco, se vuoi cambiare compagnia o lavoro, sappi che ci sono tantissime opportunità da cogliere, ma sono nascoste e tal volta fuori portata. Attraverso questo video puoi scoprire come cambiare il tuo futuro.
                    </div>
                    <div class='t2' style='font-size: 24px; color: white; margin-top: 8px; text-align: center; white-space: pre-line;'>
                        Quanto dura?
                    </div>
                    <div class='t2' style='font-size: 18px; color: white; margin-top: 8px; text-align: center; white-space: pre-line;'>
                        Poco più di un ora, ma la mole di conoscenze e la valenza delle informazioni che puoi acquisire in questo webinar ti ripaga in maniera abbondante del tuo tempo.
                    </div>
                    <div class='t3' style='font-size: 24px; color: white; text-align: center; margin-top: 48px;'>
                        COME TROVARE IMBARCO
                    </div>
                    <div class='t4' style='font-size: 18px; color: white; text-align: center; margin-top: 8px;'>
                        Ci sono tante strategie che possono aiutarti a trovare imbarco velocemente, ma esse sono solo la punta dell'iceberg della tua scalata al successo professionale. Se vuoi scoprire come creare un profilo professionale che si possa vendere a qualsiasi compagnia internazionale, iscriviti e guarda il seguente webinar.
                    </div>
                    <div class='t5' style='font-size: 16px; color: white; text-align: center; margin-top: 16px; white-space: pre-line;'>
                        Marco
                        GUARDA GRATIS IL WEBINAR
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class='container free-webinar2'>
        <div class='row bsec4'>
            <div class='col-sm-12'>
                <div class='textos'>
                    <span class='title'> SCRIVI IL TUO FUTURO OGGI </span>

                    <span class='text'> Spero tu abbia assistito al webinar in tutte le sue fasi, adesso procedi cliccando qui in basso e visita il programma completo. Inoltre un piccolo regalo ti attende per aver ascoltato tutto il webinar. </span>
                    <span class='call'> CLICCA IN BASSO per scoprire i profili ed i programmi disponibili </span>
                </div>
            </div>
            <div class='col-sm-12 subscribe-call'>
                <div class='button' onclick="modal.style.display = 'block';" style='max-width: 75%;'>
                    Scoprili
                </div>
            </div>
        </div>
    </div>

    <div class='container free-webinar2'>
        <div class='row bsec2'>
            
        </div>
    </div>
</div>

<div class='container-fluid free-webinar2 d-footer'>
    <div class='row sec6'>
        <div class='col-lg-12'>
            <div class='ugly-and-full-of-letters-footer'>
                <a href='/' class='logo'>
                    <img src="{{asset('img/site/Logo-transparent.png')}}">
                </a>
                <div class='navigation-links'>
                    <a href='/' class='nav-link'> Home </a>
                    <a href='/about' class='nav-link'> About </a>
                    <a href='/blog' class='nav-link'> Blog </a>
                    <a href='/contact' class='nav-link'> Contatti </a>
                </div>
            </div>
        </div>
    </div>
    <div class='w-100'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <div class='disclaimer'>
                        <div class='t1' style='font-size: 14px; color: white; text-align: center;'>
                            © 2018 I marchi ed i Segni distintivi sono concessi in licenza
                        </div>
                        <div class='t2' style='font-size: 14px; color: white; text-align: center; padding-bottom: 8px;'>
                            Tutti i Diritti sono riservati. E' vietata qualsiasi riproduzione, anche parziale
                        </div>
                        <div class='t3' style='font-size: 14px; color: white;'> *This Website is not a part of Facebook or Facebook Inc. Additionally, this site is NOT endorsed by Facebook in any way.
                            FACEBOOK is a trademark of FACEBOOK Inc.
                        </div>
                        <div class='t4' style='font-size: 14px; color: white; padding-bottom: 8px;'>
                            Questo sito non fa parte del sito Facebook o Facebook Inc. Inoltre, questo sito NON è approvato da Facebook in alcun modo.
                            FACEBOOK è un marchio registrato di FACEBOOK, Inc.
                        </div>
                        <div class='t5' style='font-size: 14px; color: white; text-align: center; padding-bottom: 8px;'>
                            DISCLAIMER
                        </div>
                        <div class='t6' style='font-size: 14px; color: white; padding-bottom: 64px;'>
                            Sottoscrivendo materiale dell’Editore, riconosci e accetti espressamente che non stiamo offrendo in alcun caso promesse, suggerimenti, 
                            proiezioni, rappresentazioni o garanzie di alcun genere in merito a prospettive di lucro future o guadagni in relazione al tuo 
                            acquisto di servizi Sogniamo in Grande® e / o servizi, e che non abbiamo autorizzato alcuna proiezione, promessa o rappresentazione da parte di soggetti terzi, interni o esterni all’azienda.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>        
@endsection