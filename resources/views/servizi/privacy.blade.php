@extends('layouts.template2')
@section('titolo')
    Privacy
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
                                            <span class="mkdf-pt-title" style="font-size: 45px; font-family: 'Microsoft Yi Baiti'!important;">
                                                Privacy
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
                                                            <a href="{{route('tabelle')}}">Tabelle dei servizi Privacy</a>
                                                        </li>

                                                        <li style="text-align: center!important; font-size: 28px">
                                                            <a href="{{route('questionario')}}">Questionario Policy di Gestione</a>
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