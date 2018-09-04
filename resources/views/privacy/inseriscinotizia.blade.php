@extends('layouts.template2')
@section('titolo')
    Inserisci Notizia
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
                                        Inserisci Notizia</h2>
                                    <div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
                                        <div class="mkdf-separator"
                                             style="width: 143px;border-bottom-width: 2px"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<form action="{{route('insnews')}}" method="POST">
    {{csrf_field()}}
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
                                            <div class="mkdf-pt-inner ombra">
                                                <ul>
                                                    <li class="mkdf-pt-title-holder" style="background: #95B9E0;">
                                                    <span class="mkdf-pt-title" style="font-size: 30px; font-weight: 700; font-family: 'Microsoft Yi Baiti'!important;">
                                                        <input type="text" style="width: 80%;
                                                        background-color: white;
                                                        color: black;
                                                        font-size: 1.6rem;" name="titolo">
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
                                                                        <textarea rows="14" cols="96" name="testo"></textarea>
                                                                    </li>

                                                                    <li style="font-size: 18px; text-align: right;">
                                                                        <p>{{--{{$ele->created_at->format('d M Y')}}--}}</p>
                                                                        <p>fonte: <input type="text" style="width: 40%;
                                                                            background-color: white;
                                                                            border: 1px solid black;
                                                                            color: black;
                                                                            font-size: 1.6rem;" name="fonte">
                                                                        </p>
                                                                    </li>

                                                                    <li style="font-size: 20px; text-align: justify; color: black">
                                                                        <button class="btn ombra">Inserisci</button>
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

</form>
@stop