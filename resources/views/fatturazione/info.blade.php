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

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@stop