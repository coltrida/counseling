@extends('layouts.template2')
@section('titolo')
    Fatturazione Elettronica
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
                                        <li class="mkdf-pt-title-holder">
                                            <span class="mkdf-pt-title" style="font-size: 45px; font-family: 'Microsoft Yi Baiti'!important;">
                                                Fatturazione Elettronica
                                            </span>
                                        </li>
                                        <li class="mkdf-pt-content-bottom">
                                            <ul>
                                                {{--<li class="mkdf-pt-price-holder">
                                                    <span class="mkdf-pt-value">$</span>
                                                    <span class="mkdf-pt-price">400</span>
                                                </li>--}}
                                                <li class="mkdf-pt-content" >

                                                    <ul>

                                                        <li style="text-align: center!important; font-size: 28px">
                                                            <a href="{{route('fatturarazione.info')}}">Cos'è la fattura elettronica?</a>
                                                        </li>

                                                        <li style="text-align: center!important; font-size: 28px">
                                                            <a href="{{route('fatturarazione.date')}}">Date Importanti</a>
                                                        </li>

                                                        <li style="text-align: center!important; font-size: 28px">
                                                            <a href="{{route('fatturarazione.nostra')}}">La Nostra Fattura Elettronica</a>
                                                        </li>

                                                        <li style="text-align: center!important; font-size: 28px">
                                                            <a href="{{route('fatturarazione.benefici')}}">Benefici</a>
                                                        </li>

                                                        <li style="text-align: center!important; font-size: 28px">
                                                            <a style="border: 1px solid greenyellow; border-radius: 5px; background-color: greenyellow; padding: 10px; font-weight: 800" href="{{route('fatturarazione.questionario')}}">Vuoi un preventivo gratuito?</a>
                                                        </li>

                                                        {{--<li style="text-align: center!important; font-size: 28px">
                                                            <a href="{{route('news')}}">Rassegna stampa e News</a>
                                                        </li>
                                                        @if(isset(Auth::user()->name) && Auth::user()->surname=='Coltrioli')
                                                            <li style="text-align: center!important; font-size: 28px">
                                                                <a href="{{route('inseriscinews')}}">inserisci News</a>
                                                            </li>
                                                        @endif--}}

                                                        {{--<li style="text-align: center!important; font-size: 16px; margin-top: -20px">
                                                            Fonte: www.garanteprivacy.it
                                                        </li>--}}

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