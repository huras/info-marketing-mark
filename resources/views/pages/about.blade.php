@extends('layouts/themed')

@section('content')
    @include('partials/home-header')
    <div class='container about-us'>
        <div class='row'>
            <div class='col-md-12 cover' style="background-image: url('{{asset('img/site/marco-draw-map.jpg')}}');">
            </div>
            <div class='col-md-12 texts'>
                <div class='text-content'> 
                    Sono nato e cresciuto a Napoli, diplomandomi all’Istituto Tecnico Nautico Duca degli Abruzzi. Da subito ho compreso che trovare lavoro non sarebbe stata un’impresa da poco, così ho atteso oltre due anni dal mio diploma per il primo imbarco con la compagnia di navigazione Grimaldi, con la quale ho lavorato per sei anni fino alla posizione di secondo ufficiale. Nel 2013 ho cominciato la mia esperienza lavorativa con la compagnia Pullmantur del gruppo RCCL. Durante il mio percorso mi sono scontrato con molte difficoltà che ho imparato a superare con motivazione e carattere, ed oggi mi piacerebbe condividere la mia esperienza con tutti i giovani alunni del nautico che intendono intraprendere la stessa via. Attualmente lavoro su navi che registrano un solo membro di equipaggio di nazionalità italiana sui seicento presenti a bordo, ed in tutta la corporazione Royal la situazione non è più felice. Da qualche tempo ho deciso di aiutare le nuove leve ad avere le giuste informazioni per approcciarsi al settore marittimo internazionale attraverso incontri gratuiti nelle scuole degli Istituti Nautici. Il mio impegno in questo progetto ha l’unico fine di regalare la possibilità ai futuri ufficiali di navigazione di trovare un’opportunità lavorativa non solo nel contesto nazionale, ma su tutta la piattaforma marittima internazionale. Il progetto Sogniamo in Grande è la mia opportunità di condividere le tecniche raccolte in questi 12 anni di carriera con chiunque abbia voglia di emergere e di tentare una carriera ad alti livelli, marcando temi importanti come la motivazione personale, tecniche di memoria, colloquio di lavoro, preparazione di un curriculum vitae, l’importanza delle piattaforme network, contatti delle principali compagnie di navigazione e moltissimo altro ancora. 
                </div>
                <br>
                <div class='text-content'> 
                    Sono l’unico italiano di un equipaggio di seicento persone, ma domani potremmo essere molti di più a ripopolare i mari e sollevare in alto il buon nome lasciatoci in eredità dai nostri antenati. Platone diceva che esistono tre tipologie di uomini, i vivi, i morti e quelli che vanno per mare. Oggi mi piacerebbe rilanciare, i vivi, i morti, e quelli che sanno sognare, perché questi ultimi non moriranno mai e tantomeno vivranno come gli altri, ma molto più in alto.
                </div>
            </div>
        </div>
    </div>
    @include('partials/footer')
@endsection