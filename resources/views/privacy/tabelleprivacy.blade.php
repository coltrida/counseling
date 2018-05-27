@extends('layouts.template2')
@section('titolo')
    Tabelle Servizi Privacy
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
                                        Tabelle dei servizi Privacy</h2>
                                    <div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
                                        <div class="mkdf-separator"
                                             style="width: 143px;border-bottom-width: 2px"></div>
                                    </div>
                                    <h4 class="mkdf-st-text" style="font-family: 'Microsoft Yi Baiti'!important;">
                                        Scegli il servizio di cui hai bisogno e ti aiuteremo </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mkdf-row-grid-section-wrapper "
         style="background-color:rgba(194,170,128,0.08)">
        <div class="mkdf-row-grid-section">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1520416413881">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="mkdf-pricing-tables clearfix mkdf-three-columns mkdf-normal-space">
                                <div class="mkdf-pt-wrapper mkdf-outer-space">
                                    <div class="mkdf-price-table mkdf-item-space ">
                                        <div class="mkdf-pt-inner ombra">
                                            <ul>
                                                <li class="mkdf-pt-title-holder" style="background: #95B9E0;">
                                                    <span class="mkdf-pt-title" style="font-size: 45px; font-family: 'Microsoft Yi Baiti'!important;">Soluzione nr.1</span>
                                                </li>
                                                <li class="mkdf-pt-content-bottom">
                                                    <ul>
                                                        {{--<li class="mkdf-pt-price-holder">
                                                            <span class="mkdf-pt-value">$</span>
                                                            <span class="mkdf-pt-price">400</span>
                                                        </li>--}}
                                                        <li class="mkdf-pt-content">

                                                            <ul>
                                                                <li>ADDETTI  N.1  (DITTA INDIVIDUALE SENZA DIPENDENTI)
                                                                </li>
                                                                <li>ARCHIVIO INFORMATICO E CARTACEO
                                                                </li>
                                                                {{--<li>Lorem ipsum dolor sit
                                                                    amett
                                                                </li>
                                                                <li>Dolor sit amet lorem
                                                                </li>--}}
                                                            </ul>
                                                        </li>
                                                        {{--<li class="mkdf-pt-button">
                                                            <a itemprop="url"
                                                               href="{{route('soluzione1')}}"
                                                               target="_self"
                                                               class="mkdf-btn mkdf-btn-medium mkdf-btn-simple mkdf-btn-icon mkdf-btn-icon-animate">
                                                                <span class="mkdf-btn-text">Approfondisci</span>
                                                                <i class="fas fa-search"></i></a>
                                                        </li>--}}
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mkdf-price-table mkdf-item-space ">
                                        <div class="mkdf-pt-inner ombra">
                                            <ul>
                                                <li class="mkdf-pt-title-holder" style="background: #95B9E0;">
                                                    <span class="mkdf-pt-title" style="font-size: 45px; font-family: 'Microsoft Yi Baiti'!important;">Soluzione nr.2</span>
                                                </li>
                                                <li class="mkdf-pt-content-bottom">
                                                    <ul>
                                                        {{--<li class="mkdf-pt-price-holder">
                                                            <span class="mkdf-pt-value">$</span>
                                                            <span class="mkdf-pt-price">220</span>
                                                        </li>--}}
                                                        <li class="mkdf-pt-content">

                                                            <ul>
                                                                <li>ADDETTI  N.1  (DITTA INDIVIDUALE SENZA DIPENDENTI)
                                                                </li>
                                                                <li>SOLO ARCHIVIO CARTACEO
                                                                </li>
                                                                {{--<li>Lorem ipsum dolor sit
                                                                    amett
                                                                </li>
                                                                <li>Dolor sit amet lorem
                                                                </li>--}}
                                                            </ul>
                                                        </li>
                                                        {{--<li class="mkdf-pt-button">
                                                            <a itemprop="url"
                                                               href="{{route('soluzione2')}}"
                                                               target="_self"
                                                               class="mkdf-btn mkdf-btn-medium mkdf-btn-simple mkdf-btn-icon mkdf-btn-icon-animate">
                                                                <span class="mkdf-btn-text">Approfondisci</span>
                                                                <i class="fas fa-search"></i></a>
                                                        </li>--}}
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mkdf-price-table mkdf-item-space ">
                                        <div class="mkdf-pt-inner ombra">
                                            <ul>
                                                <li class="mkdf-pt-title-holder" style="background: #95B9E0;">
                                                    <span class="mkdf-pt-title" style="font-size: 45px; font-family: 'Microsoft Yi Baiti'!important;">Soluzione nr.3</span>
                                                </li>
                                                <li class="mkdf-pt-content-bottom">
                                                    <ul>
                                                        {{--<li class="mkdf-pt-price-holder">
                                                            <span class="mkdf-pt-value">$</span>
                                                            <span class="mkdf-pt-price">600</span>
                                                        </li>--}}
                                                        <li class="mkdf-pt-content">

                                                            <ul>
                                                                <li>ADDETTI  N.1  (DITTA INDIVIDUALE CON DIPENDENTI)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                </li>
                                                                <li>ARCHIVIO INFORMATICO E CARTACEO
                                                                </li>
                                                                {{--<li>Lorem ipsum dolor sit
                                                                    amett
                                                                </li>
                                                                <li>Dolor sit amet lorem
                                                                </li>--}}
                                                            </ul>
                                                        </li>
                                                        {{--<li class="mkdf-pt-button">
                                                            <a itemprop="url"
                                                               href="{{route('soluzione3')}}"
                                                               target="_self"
                                                               class="mkdf-btn mkdf-btn-medium mkdf-btn-simple mkdf-btn-icon mkdf-btn-icon-animate">
                                                                <span class="mkdf-btn-text">Approfondisci</span>
                                                                <i class="fas fa-search"></i></a>
                                                        </li>--}}
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

    <div class="mkdf-row-grid-section-wrapper "
         style="background-color:rgba(194,170,128,0.08)">
        <div class="mkdf-row-grid-section">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1520416413881">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="mkdf-pricing-tables clearfix mkdf-three-columns mkdf-normal-space">
                                <div class="mkdf-pt-wrapper mkdf-outer-space">
                                    <div class="mkdf-price-table mkdf-item-space ">
                                        <div class="mkdf-pt-inner ombra">
                                            <ul>
                                                <li class="mkdf-pt-title-holder" style="background: #95B9E0;">
                                                    <span class="mkdf-pt-title" style="font-size: 45px; font-family: 'Microsoft Yi Baiti'!important;">Soluzione nr.4</span>
                                                </li>
                                                <li class="mkdf-pt-content-bottom">
                                                    <ul>
                                                        {{--<li class="mkdf-pt-price-holder">
                                                            <span class="mkdf-pt-value">$</span>
                                                            <span class="mkdf-pt-price">800</span>
                                                        </li>--}}
                                                        <li class="mkdf-pt-content">

                                                            <ul>
                                                                <li>ADDETTI DA 2 A 5 (DITTA INDIVIDUALE E SOCIETA’ CON DIPENDENTI)
                                                                </li>
                                                                <li>N.1 ARCHIVIO INFORMATICO E ARCHIVIO CARTACEO&nbsp;
                                                                </li>
                                                                {{--<li>Lorem ipsum dolor sit
                                                                    amett
                                                                </li>
                                                                <li>Dolor sit amet lorem
                                                                </li>--}}
                                                            </ul>
                                                        </li>
                                                        {{--<li class="mkdf-pt-button">
                                                            <a itemprop="url"
                                                               href="{{route('soluzione4')}}"
                                                               target="_self"
                                                               class="mkdf-btn mkdf-btn-medium mkdf-btn-simple mkdf-btn-icon mkdf-btn-icon-animate">
                                                                <span class="mkdf-btn-text">Approfondisci</span>
                                                                <i class="fas fa-search"></i></a>
                                                        </li>--}}
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mkdf-price-table mkdf-item-space ">
                                        <div class="mkdf-pt-inner ombra">
                                            <ul>
                                                <li class="mkdf-pt-title-holder" style="background: #95B9E0;">
                                                    <span class="mkdf-pt-title" style="font-size: 45px; font-family: 'Microsoft Yi Baiti'!important;">Soluzione nr.5</span>
                                                </li>
                                                <li class="mkdf-pt-content-bottom">
                                                    <ul>
                                                        {{--<li class="mkdf-pt-price-holder">
                                                            <span class="mkdf-pt-value">$</span>
                                                            <span class="mkdf-pt-price">1300</span>
                                                        </li>--}}
                                                        <li class="mkdf-pt-content">

                                                            <ul>
                                                                <li>ADDETTI DA 2 A 5 (DITTA INDIVIDUALE E SOCIETA’ CON DIPENDENTI)
                                                                </li>
                                                                <li>DA 2 A 5 ARCHIVI INFORMATICI E ARCHIVIO CARTACEO <br>
                                                                </li>
                                                                {{--<li>Lorem ipsum dolor sit
                                                                    amett
                                                                </li>
                                                                <li>Dolor sit amet lorem
                                                                </li>--}}
                                                            </ul>
                                                        </li>
                                                        {{--<li class="mkdf-pt-button">
                                                            <a itemprop="url"
                                                               href="{{route('soluzione5')}}"
                                                               target="_self"
                                                               class="mkdf-btn mkdf-btn-medium mkdf-btn-simple mkdf-btn-icon mkdf-btn-icon-animate">
                                                                <span class="mkdf-btn-text">Approfondisci</span>
                                                                <i class="fas fa-search"></i></a>
                                                        </li>--}}
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mkdf-price-table mkdf-item-space ">
                                        <div class="mkdf-pt-inner ombra">
                                            <ul>
                                                <li class="mkdf-pt-title-holder" style="background: #95B9E0;">
                                                    <span class="mkdf-pt-title" style="font-size: 45px; font-family: 'Microsoft Yi Baiti'!important;">Opzione</span>
                                                </li>
                                                <li class="mkdf-pt-content-bottom">
                                                    <ul>
                                                        {{--<li class="mkdf-pt-price-holder">
                                                            <span class="mkdf-pt-value">$</span>
                                                            <span class="mkdf-pt-price">1300</span>
                                                        </li>--}}
                                                        <li class="mkdf-pt-content">

                                                            <ul>
                                                                <li>COMPILAZIONE DOCUMENTI PER LA NOMINA DELLE FIGURE INCARICATE
                                                                </li>
                                                                <li>ELENCO ARCHIVI INFORMATICI E CARTACEI SENZA SOPRALLUOGO
                                                                </li>
                                                                {{--<li>Lorem ipsum dolor sit
                                                                    amett
                                                                </li>
                                                                <li>Dolor sit amet lorem
                                                                </li>--}}
                                                            </ul>
                                                        </li>
                                                        {{--<li class="mkdf-pt-button">
                                                            <a itemprop="url"
                                                               href="{{route('soluzione5')}}"
                                                               target="_self"
                                                               class="mkdf-btn mkdf-btn-medium mkdf-btn-simple mkdf-btn-icon mkdf-btn-icon-animate">
                                                                <span class="mkdf-btn-text">Approfondisci</span>
                                                                <i class="fas fa-search"></i></a>
                                                        </li>--}}
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div style="text-align: right">
                                        <button style="background-color: #95b9e0;" class="cornice mkdf-btn mkdf-btn-medium mkdf-btn-solid ombra" onclick="goBack()">Go Back</button>
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