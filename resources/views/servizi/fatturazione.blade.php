@extends('layouts.template2')
@section('titolo')
    Fattura Elettronica
@stop

@section('content')
    <div class="vc_row wpb_row vc_row-fluid  vc_custom_1522659030108 mkdf-content-aligment-center"
         style="background-color:rgba(194,170,128,0.08);">
        <div class="wpb_column vc_column_container vc_col-sm-12" >
            <div style="width: 80%; margin: 0 auto">
            <div class="vc_column-inner " >
                <div class="wpb_wrapper" >
                    <div class="wpb_text_column wpb_content_element " >
                        <div class="wpb_wrapper" >
                            <div class="mkdf-price-table mkdf-item-space " >
                                <div class="mkdf-pt-inner ombra" style="color: black;">
                                    <ul>
                                        <li class="mkdf-pt-title-holder" style="background: #95B9E0;">
                                            <span class="mkdf-pt-title" style="font-size: 45px; font-family: 'Microsoft Yi Baiti'!important;">
                                                Cos'è la fattura elettronica?
                                            </span>
                                        </li>
                                        <li class="mkdf-pt-content-bottom">
                                            <ul>
                                                {{--<li class="mkdf-pt-price-holder">
                                                    <span class="mkdf-pt-value">$</span>
                                                    <span class="mkdf-pt-price">400</span>
                                                </li>--}}
                                                <li class="mkdf-pt-content" style="font-size: 20px">

                                                    <ul>

                                                        <li style="text-align: justify!important;">

                                                            La fattura elettronica è una fattura prodotta in formato digitale (file XML) che deve rispettare determinate caratteristiche dettate dal formato della fatturaPA. Una volta prodotta, dev'esser firmata digitalmente ed inviata al destinatario (pubblica amministrazione o privato). Terminato il processo, la fattura deve OBBLIGATORIAMENTE esser CONSERVATA SOSTITUTIVAMENTE in formato digitale (non più cartaceo!) sia dal trasmittente che dal ricevente (DL 82/2005 art. 5 comma 5).

                                                        </li>

                                                        <li style="text-align: justify!important;">
                                                            Per creare una fattura elettronica hai bisogno di uno strumento che ti permetta di creare il file che conterrà i dati della fattura, rispettando le caratterisitiche specificate dal formato della "FatturaPA".
                                                            Counseling ti permette di creare il file XML in modo semplice ed efficace come avresti fatto con una normale "fattura cartacea" grazie al servizio integrato di fatturazione elettronica direttamente nel software.

                                                        </li>

                                                        <li style="text-align: justify!important;">

                                                            Con il servizio per la Fatturazione Elettronica integrato nel software puoi creare, firmare, inviare e conservare in modo semplice e intuitivo le tue fatture elettroniche. Il servizio è totalmente gestito all'interno dell'interfaccia del programma, non dovrai preoccuparti di nulla visualizzarai tutti le tue fatture elettroniche in un unico posto, mantenendo una visione generale sia delle fatture che invii che di quelle che ricevi.

                                                        </li>

                                                        <li style="text-align: justify!important;">
                                                            <button style="background-color: #95b9e0;" class="cornice mkdf-btn mkdf-btn-medium mkdf-btn-solid ombra" onclick="goBack()">Go Back</button>
                                                        </li>

                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="vc_empty_space" style="height: 37px"><span
                                            class="vc_empty_space_inner"></span></div>

                                <div class="mkdf-pt-inner ombra" style="color: black;">
                                    <ul>
                                        <li class="mkdf-pt-title-holder" style="background: #95B9E0;">
                                            <span class="mkdf-pt-title" style="font-size: 45px; font-family: 'Microsoft Yi Baiti'!important;">
                                                Date Importanti
                                            </span>
                                        </li>
                                        <li class="mkdf-pt-content-bottom">
                                            <ul>
                                                {{--<li class="mkdf-pt-price-holder">
                                                    <span class="mkdf-pt-value">$</span>
                                                    <span class="mkdf-pt-price">400</span>
                                                </li>--}}
                                                <li class="mkdf-pt-content" style="font-size: 20px">

                                                    <ul>

                                                        <li style="text-align: justify!important;">

                                                            Dal 2015 è scattato l’obbligo di emettere la fattura elettronica nei confronti della Pubblica Amministrazione (ad esempio ministeri, comuni, regioni, province, forze dell'ordine, università, ecc..): la Pubblica Amministrazione non può infatti più accettare, e di conseguenza pagare, le fatture cartacee. Inoltre, già dal 1 gennaio 2017 emettere fatture elettroniche è possibile in via del tutto facoltativa anche per i privati. <span style="font-weight: 700">Dal 1° Gennaio 2019 </span>la fattura elettronica diventerà un obbligo esteso anche alle fatture tra privati. Ma la data del 1° gennaio 2019 è stata anticipata in alcune casistiche:
                                                            <br>- l’obbligo di fattura elettronica è scattato il 1° luglio 2018 per le prestazioni offerte da subappaltatori nei casi di appalto di lavori stipulati con la Pubblica Amministrazione. Ad esempio, un’impresa di pulizie svolge dei servizi di pulizia dei locali mensa per un’azienda appaltatrice del servizio di refezione scolastica. L’impresa di pulizie dovrà emettere una fattura elettronica all’azienda di ristorazione, perché si tratta di servizi offerti all’interno di un appalto stipulato con la Pubblica Amministrazione;
                                                            <br>- l’obbligo di emissione di fattura elettronica è scattato il 1° settembre 2018 nei confronti di viaggiatori stranieri non residenti all’interno dell’Unione Europea per le fatture emesse in ambito tax free shopping. Ad esempio, una turista giapponese in vacanza a Milano acquista una borsa al prezzo di 200 euro. Per gli acquisti di beni con valore superiore a 155 euro (al lordo dell'IVA) e destinati all'uso personale o familiare, il venditore dovrà emettere la fattura elettronica tax free.


                                                        </li>

                                                        <li style="text-align: justify!important;">
                                                            Per tutte le operazioni tra privati, persone fisiche e giuridiche, l’emissione della fattura elettronica obbligatoria scatterà, come già detto, dal 1° gennaio 2019. Tale data varrà anche per la cessione di benzina o gasolio verso imprese private e professionisti, con una proroga quindi di 6 mesi rispetto a quanto era stato inizialmente previsto nella legge di Bilancio 2018.
                                                            Sono esenti dall’obbligo solamente i possessori di partita IVA con regime dei minimi o con regime forfettario. Per tutti gli altri soggetti l’unica modalità per poter trasmettere le fatture sarà utilizzare un servizio di fatturazione elettronica che risponda ai requisiti della normativa di riferimento.

                                                        </li>

                                                        <li style="text-align: justify!important;">
                                                            <button style="background-color: #95b9e0;" class="cornice mkdf-btn mkdf-btn-medium mkdf-btn-solid ombra" onclick="goBack()">Go Back</button>
                                                        </li>

                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="vc_empty_space" style="height: 37px"><span
                                            class="vc_empty_space_inner"></span></div>

                                <div class="mkdf-pt-inner ombra" style="color: black;">
                                    <ul>
                                        <li class="mkdf-pt-title-holder" style="background: #95B9E0;">
                                            <span class="mkdf-pt-title" style="font-size: 45px; font-family: 'Microsoft Yi Baiti'!important;">
                                                La Nostra Fattura Elettronica
                                            </span>
                                        </li>
                                        <li class="mkdf-pt-content-bottom">
                                            <ul>
                                                {{--<li class="mkdf-pt-price-holder">
                                                    <span class="mkdf-pt-value">$</span>
                                                    <span class="mkdf-pt-price">400</span>
                                                </li>--}}
                                                <li class="mkdf-pt-content" style="font-size: 20px">

                                                    <ul>

                                                        <li style="text-align: justify!important;">

                                                            Counseling gestisce tutto il processo di ciclo attivo: il listino, i preventivi, gli ordini, i documenti di trasporto (DDT), le fatture accompagnatorie, i pro forma e i movimenti di prima nota. Inoltre, eseguiamo l'integrazione con le soluzioni di fatturazione elettronica verso le Pubbliche Amministrazioni e tra privati.

                                                        </li>

                                                        <li style="text-align: justify!important;">
                                                            Permettiamo il dialogo continuo e lo scambio automatico di documenti tra l’azienda e il suo commercialista, il quale può quindi offrire ai propri clienti un servizio di contabilità utile e innovativo risparmiando tempo e risorse. Report finanziari ed economici di facile consultazione. In questo modo, l’azienda ha sempre tutto sotto controllo e il commercialista può verificare in tempo reale dal gestionale di studio la situazione dei propri clienti collegati.

                                                            Il software di fatturazione è semplice da utilizzare e non richiede competenze amministrative specifiche, risultando adatto anche ad artigiani e liberi professionisti (parcellazione). La contabilità rimane a carico del commercialista che la amministra con il gestionale di studio. In qualsiasi momento il commercialista è in grado di accedere alla posizione amministrativa del proprio cliente, osservando la situazione in tempo reale con la possibilità di modificarla se è stato delegato a farlo.

                                                            Tutti i documenti possono essere esportati in .pdf e inviati al cliente dell’impresa. È inoltre possibile l’esportazione in .xml compatibile con la fatturazione elettronica PA.

                                                        </li>

                                                        <li style="text-align: justify!important;">

                                                            E' un software di fatturazione nativo in cloud per consentire all’utente di lavorare in mobilità da qualsiasi dispositivo dotato di una connessione a internet.

                                                        </li>

                                                        <li style="text-align: justify!important;">
                                                            <button style="background-color: #95b9e0;" class="cornice mkdf-btn mkdf-btn-medium mkdf-btn-solid ombra" onclick="goBack()">Go Back</button>
                                                        </li>

                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="vc_empty_space" style="height: 37px"><span
                                            class="vc_empty_space_inner"></span></div>

                                <div class="mkdf-pt-inner ombra" style="color: black;">
                                    <ul>
                                        <li class="mkdf-pt-title-holder" style="background: #95B9E0;">
                                            <span class="mkdf-pt-title" style="font-size: 45px; font-family: 'Microsoft Yi Baiti'!important;">
                                                Benefici
                                            </span>
                                        </li>
                                        <li class="mkdf-pt-content-bottom">
                                            <ul>

                                                <li class="mkdf-pt-content" style="font-size: 20px">

                                                    <ul>

                                                        <li style="text-align: justify!important;">
                                                            Sono molti i vantaggi che aziende e professionisti potranno riscontrare già pochi mesi dopo il passaggio alla fattura elettronica.
                                                            Ad esempio, le comunicazioni con gli enti della Pubblica Amministrazione diminuiranno notevolmente. Infatti, alcuni dei vantaggi per chi emette fattura elettronica riguardano:
                                                            <br>- l’esonero dallo spesometro (proprio come il regime forfettario e dei minimi, chi emette la fattura  elettronica sarà esonerato dalla trasmissione delle comunicazioni delle fatture emesse e ricevute);
                                                            <br>- l’esonero dall'obbligo di comunicare gli acquisti effettuati da operatori di San Marino;
                                                            <br>- l’esonero dal Modello Intrastat, che consente il monitoraggio da parte dell’Agenzia delle Dogane di tutte le operazioni commerciali di scambio intrattenute tra i soggetti di diversi Stati membri dell'Unione Europea;
                                                            <br>- l’esonero dalla comunicazione dei dati relativi ai contratti stipulati dalle società di leasing.


                                                        </li>

                                                        <li style="text-align: justify!important;">
                                                            Come è facile capire capire, passare alla fattura elettronica renderà superflue molte comunicazioni fino ad ora obbligatorie e vissute con la paura di sbagliare. Ma i vantaggi non sono finiti: chi emette fattura elettronica avrà il diritto al rimborso IVA in via prioritaria, vale a dire entro solo tre mesi dalla presentazione della dichiarazione annuale. Un’altra buona notizia riguarda gli accertamenti fiscali in materia di IVA e di imposte dirette, che saranno ridotti da cinque a quattro anni. Il passaggio alla fattura elettronica ti permetterà inoltre di risparmiare il tempo dedicato a creazione, invio e conservazione di una fattura che, di fatto, diminuirà considerevolmente. Risparmierai anche spazio, poiché utilizzando un sistema di conservazione digitale non dovrai più stampare e custodire le fatture in grossi faldoni che esigono spazio e il dispiego di enormi quantità di carta: la legge prevede infatti che, proprio come per le fatture cartacee, anche per le fatture elettroniche i documenti siano conservati a norma per 10 anni.

                                                        </li>



                                                        <li style="text-align: justify!important;">
                                                            <button style="background-color: #95b9e0;" class="cornice mkdf-btn mkdf-btn-medium mkdf-btn-solid ombra" onclick="goBack()">Go Back</button>
                                                        </li>

                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@stop