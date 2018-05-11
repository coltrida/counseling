@extends('layouts.template2')
@section('titolo')
    Regulation
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
                                <div class="mkdf-pt-inner ombra">
                                    <ul>
                                        <li class="mkdf-pt-title-holder" style="background: #95B9E0;">
                                            <span class="mkdf-pt-title">Trattamento dei dati</span>
                                        </li>
                                        <li class="mkdf-pt-content-bottom">
                                            <ul>
                                                {{--<li class="mkdf-pt-price-holder">
                                                    <span class="mkdf-pt-value">$</span>
                                                    <span class="mkdf-pt-price">400</span>
                                                </li>--}}
                                                <li class="mkdf-pt-content" >

                                                    <ul>
                                                        <li style="text-align: justify!important;">
                                                            <b>Trattamento</b> è ogni operazione compiuta - manualmente o con strumenti elettronici – sui dati personali di un individuo.

                                                        </li>

                                                        <li style="text-align: justify!important;">
                                                            Ad esempio: la raccolta, la conservazione, l'elaborazione, la modifica, il collegamento e il confronto, la comunicazione e la diffusione a terzi, la cancellazione e la distruzione (art. 4, comma 1, lettera a), del Codice in materia di protezione dei dati personali).

                                                        </li>

                                                        <li style="text-align: justify!important;">
                                                            I soggetti che procedono al trattamento dei dati personali altrui devono adottare particolari misure per garantire il corretto e sicuro utilizzo dei dati.
                                                        </li>

                                                        <li style="text-align: right">
                                                            <button style="background-color: #95b9e0;" class="mkdf-btn mkdf-btn-medium mkdf-btn-solid ombra" onclick="goBack()">Go Back</button>
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