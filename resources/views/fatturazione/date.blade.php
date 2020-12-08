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
                                        <li class="mkdf-pt-title-holder">
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

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@stop