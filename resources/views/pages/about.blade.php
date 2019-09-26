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
                    Sono l’unico italiano di un equipaggio di seicento persone, ma domani potremmo essere molti di più a ripopolare i mari e sollevare in alto il buon nome lasciatoci in eredità dai nostri antenati. Platone diceva che esistono tre tipologie di uomini, i vivi, i morti e quelli che vanno per mare. Oggi mi piacerebbe rilanciare, i vivi, i morti, e quelli che sanno sognare, perché questi ultimi non moriranno mai né tantomeno vivranno come gli altri, ma molto più in alto.
                </div>
                <br>
            </div>
        </div>

        <div class='row mini-list'>
            <?php
                $items = [
                    ['img' => 'img/site/about/fabio.jpg', 'text' => 'Fabio Polito, diplomato al Nautico di Bagnoli Duca degli Abruzzi ha cominciato la sua carriera con la compagnia Grimaldi, per poi abbracciare anche lui i mercati internazionali con il gruppo Royal Caribbean con la compagnia Pullmantur. Insieme a Marco ha collaborato per la realizzazione del progetto SOGNIAMO IN GRANDE ed è uno dei Tutor assegnati del progetto.'],
                    //Captain
                    ['style' => 'background-size: cover;', 'img' => 'img/site/about/The Captain.jpg', 'text' => 'COMANDANTE di LUNGO CORSO. Diplomato con il massimo dei voti presso ITN Nino Bixio di Piano di Sorrento. Ha navigato per 18 anni con la compagnia MSC e attualmente operativo con la GRIMALDI Group. Ha abbracciato il progetto SOGNIAMO IN GRANDE come preparatore Tecnico degli Allievi agli esami di patentino e come Tutor del progetto per gli aspetti operativi di bordo.'],
                    ['img' => 'img/site/about/Foto-Claudia-Pirozzi.jpg', 'text' => 'Docente e Traduttrice freelance di Inglese tecnico, laureata a pieni voti in Mediazione Linguistica e Culturale inglese/spagnolo presso la Facoltà per Interpreti e Traduttori dell’attuale Università degli Studi Internazionali di Roma, con esperienza decennale nell’insegnamento dell’Inglese marittimo presso i maggiori centri di addestramento e formazione marittima in Napoli e provincia.'],

                    ['style' => 'background-size: cover; background-position-y: 0;','img' => 'img/site/about/salvatore.jpg', 'text' => 'Salvatore Smelzo. Diplomato in Ragioneria 96/100. Amministratore e Contabile della gestione clienti del progetto SOGNIAMO IN GRANDE. Impegnato da anni in progetti umanitari senza scopo di lucro. Il suo entusiasmo e la sua competenza nella gestione e organizzazione di nuovi  progetti è stata fondamentale per il progetto SOGNIAMO IN GRANDE.'],
                    //Emanuele
                    ['img' => 'img/site/about/Emanuele.jpg', 'text' => "Allievo Ufficiale di Coperta diplomato con 100/100 presso ITN Giorgio La Pira di Pozzallo. Prossimo all'abilitazione del titolo professionale Ufficiale di Navigazione. Responsabile della sessione Comunicazione e Marketing del progetto SOGNIAMO IN GRANDE, nonché promotore di iniziative, rubriche e social network."],
                    ['style' => 'background-size: cover;', 'img' => 'img/site/about/Huras.jpg', 'text' => "Sviluppatore web e capo dipartimento IT di SOGNIAMO IN GRANDE, laureato in informatica nell'università brasiliana UFSJ. Sviluppatore Full Stack dal Brasile con esperienza in Machine Learning e Web Marketing."],

                    ['img' => '', 'text' => '', 'isModel' => true],
                    ['img' => '', 'text' => '', 'isModel' => true]
                ];
            ?>

            <!-- Claudia Pirozzi -->
            <!-- Salvatore -->
            <!-- Emanuele.jpg -->

            <?php
                foreach($items as $item) {
                    if(isset($item['isModel']))
                        continue;
            ?>

                    <div class='item col-md-4 col-sm-12'>
                        <div class='w-100 cover' style="background-image: url('{{asset($item['img'])}}'); height: 310px;    background-position: center;    background-size: contain;    background-repeat: no-repeat; <?php if(isset($item['style'])) echo $item['style']; ?>">
                        </div>
                        <div class='w-100 texts'>
                            <div class='text-content' style='padding: 0px 4px; text-align: justify; font-size: 18px;'>
                                {{$item['text']}}
                            </div>
                            <br>
                        </div>
                    </div>
            <?php
                } ?>
        </div>
    </div>
    @include('partials/footer')
@endsection
