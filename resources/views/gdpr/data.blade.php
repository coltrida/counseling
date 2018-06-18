@extends('layouts.template2')
@section('titolo')
    Data
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
                                        <li class="mkdf-pt-title-holder" style="background: #95B9E0; font-size: 40px; font-family: 'Microsoft Yi Baiti'!important;">
                                            <span class="mkdf-pt-title">Cosa intendiamo per dati personali?</span>
                                        </li>
                                        <li class="mkdf-pt-content-bottom">
                                            <ul>
                                                {{--<li class="mkdf-pt-price-holder">
                                                    <span class="mkdf-pt-value">$</span>
                                                    <span class="mkdf-pt-price">400</span>
                                                </li>--}}
                                                <li class="mkdf-pt-content" >

                                                    <ul style="word-spacing: -5px; font-size: 28px; font-family: 'Microsoft Yi Baiti'!important;">
                                                        <li style="text-align: justify!important;">
                                                            Sono dati personali le informazioni che identificano o rendono identificabile una persona fisica e che possono fornire dettagli sulle sue caratteristiche, le sue abitudini, il suo stile di vita, le sue relazioni personali, il suo stato di salute, la sua situazione economica, ecc..

                                                        </li>

                                                        <li style="text-align: justify!important;">
                                                            Particolarmente importanti sono:<br>

                                                            <b>i dati identificativi:</b> quelli che permettono l'identificazione diretta, come i dati anagrafici (ad esempio: nome e cognome), le immagini, ecc.;

                                                            <br><b>i dati sensibili:</b> quelli che possono rivelare l'origine razziale ed etnica, le convinzioni religiose, filosofiche o di altro genere, le opinioni politiche, l'adesione a partiti, sindacati, associazioni od organizzazioni a carattere religioso, filosofico, politico o sindacale, lo stato di salute e la vita sessuale;

                                                           <br> <b>i dati giudiziari:</b> quelli che possono rivelare l'esistenza di determinati provvedimenti giudiziari soggetti ad iscrizione nel casellario giudiziale (ad esempio, i provvedimenti penali di condanna definitivi, la liberazione condizionale, il divieto od obbligo di soggiorno, le misure alternative alla detenzione) o la qualità di imputato o di indagato.


                                                        </li>

                                                        <li style="text-align: justify!important;">
                                                            Con l'evoluzione delle nuove tecnologie, altri dati personali hanno assunto un ruolo significativo, come quelli relativi alle comunicazioni elettroniche (via Internet o telefono) e quelli che consentono la geolocalizzazione, fornendo informazioni sui luoghi frequentati e sugli spostamenti.

                                                        </li>

                                                        <li style="text-align: right">
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