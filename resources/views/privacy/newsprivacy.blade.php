@extends('layouts.template2')
@section('titolo')
    Rassegna stampa e News
@stop

@section('content')
    <div class="mkdf-row-grid-section-wrapper "
         style="background-color:rgba(194,170,128,0.08)">
        <div class="mkdf-row-grid-section">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1522405848948">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="mkdf-section-title-holder  "
                                 style="text-align: center">
                                <div class="mkdf-st-inner">
                                    <h2 class="mkdf-st-title" style="font-family: 'Microsoft Yi Baiti'!important;">
                                        Rassegna stampa e News</h2>
                                    <div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
                                        <div class="mkdf-separator"
                                             style="width: 143px;border-bottom-width: 2px"></div>
                                    </div>
                                    <h4 class="mkdf-st-text" style="font-family: 'Microsoft Yi Baiti'!important;">
                                        Il Garante per la protezione dei dati personali svolge la sua attività di informazione e comunicazione attraverso il Servizio relazioni esterne e media. </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach($news as $ele)

        <div class="mkdf-row-grid-section-wrapper "
             style="background-color:rgba(194,170,128,0.08)">
            <div class="mkdf-row-grid-section" >
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1520416413881">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="mkdf-pricing-tables clearfix  mkdf-normal-space">
                                    <div class="mkdf-pt-wrapper mkdf-outer-space">
                                        <div class="mkdf-price-table mkdf-item-space " >
                                            <div class="mkdf-pt-inner ombra">
                                                <ul>
                                                    <li class="mkdf-pt-title-holder">
                                                    <span class="mkdf-pt-title" style="font-size: 30px; font-weight: 700; font-family: 'Microsoft Yi Baiti'!important;">
                                                        {{$ele->titolo}}
                                                    </span>
                                                    </li>
                                                    <li class="mkdf-pt-content-bottom">
                                                        <ul>
                                                            {{--<li class="mkdf-pt-price-holder">
                                                                <span class="mkdf-pt-value">$</span>
                                                                <span class="mkdf-pt-price">400</span>
                                                            </li>--}}
                                                            <li class="mkdf-pt-content">

                                                                <ul>
                                                                    <li style="font-size: 20px; text-align: justify; color: black">
                                                                        {{$ele->descrizione}}
                                                                    </li>

                                                                    <li style="font-size: 18px; text-align: right;">
                                                                        <p>{{$ele->created_at->format('d M Y')}}</p>
                                                                        <p>fonte: {{$ele->fonte}}</p>
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
        </div>

    @endforeach

    <div class="mkdf-row-grid-section-wrapper "
         style="background-color:rgba(194,170,128,0.08)">
        <div class="mkdf-row-grid-section">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1520416413881">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="mkdf-pricing-tables clearfix  mkdf-normal-space">
                                <div class="mkdf-pt-wrapper mkdf-outer-space">
                                    <div class="mkdf-price-table mkdf-item-space ">
                                        <div id="pagine" class="mkdf-pt-inner" style="text-align: center">
                                            {{$news->links()}}
                                        </div>
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