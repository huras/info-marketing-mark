@extends('layouts/themed')

@section('styles')
<style>
    .my-paralax{
        justify-content: center;
        height: 1900px;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .conteudo{
        background-color: #000000b5;
        color: #ffe4c1;

        padding: 12px 8px;
        margin-bottom: 128px;

        text-align: center;
    }

    .a-col{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .h-100{
        height: 100%;
    }

    .row{
        position: relative;
    }

    .logo{
        position: absolute;
        left: 24%;
        bottom: 16%;
    }

    .logo img{
        width: 100%;
    }
</style>
@endsection

@section('content')
<div class='container-fluid my-paralax' style="background-image: url('img/site/sunset.jpg');">
    <div class='container h-100'>
        <div class='row h-100' style='justify-content: center;'>
            <div class='col-lg-6 col-md-8 col-sm-11 h-100 a-col'>
                <div class='conteudo'>
                    Con la globalizzazione, la crisi economica odierna e la presenza di molti marittimi di altre nazioni sulle navi italiane, emergono non poche difficoltà nell’ambito marittimo nazionale, e iniziare una carriera a bordo di una nave diventa ogni anno più difficile e quasi impossibile senza le giuste conoscenze. Tuttavia ci sono ancora tantissime compagnie straniere che cercano personale marittimo, ma gli standard di valutazione ed i criteri di selezione di quest’ultime sono talvolta fuori portata dai giovani italiani. 

                    Il nostro programma di formazione prevede l'insegnamento di tutto quelle tecniche e strategie fondamentali ad un Allievo Ufficiale per candidarsi alle compagnie di navigazione più attive del mercato estero. Per garantire l’efficacia dell’applicazione e acquisizione del processo formativo, un Tutor si dedicherà in maniera individuale alla situazione, analizzando e studiando il piano di apprendimento e inserimento a bordo. Il programma di formazione è completamente online e ti consente di seguirlo anche da casa, ma la mole di informazioni e la valenza dei contenuti richiederanno la tua attenzione per una cambiamento di mentalità proiettato ai nuovi mercati con piani di apprendimento e tecniche di applicazione.

                    Lo scopo del progetto Sogniamo in Grande è quello di ridare il mare agli Italiani, così come i nostri antenati fecero in passato scrivendo libri di storia e di navigazione. Se sei un Allievo Ufficiale in cerca di imbarco o di una compagnia di valenza Internazionale, allora abbraccia il progetto e scopri come creare il tuo profilo professionale per cominciare una carriera a bordo di successo.
                </div>
            </div>
        </div>
        <div class='logo'>
            <img src='img/site/Logo-transparent.png'>
        </div>
    </div>
</div>
@endsection