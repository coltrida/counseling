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
                                    <h3 class="mkdf-st-title">
                                        Tabelle dei servizi Privacy</h3>
                                    <div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
                                        <div class="mkdf-separator"
                                             style="width: 143px;border-bottom-width: 2px"></div>
                                    </div>
                                    <h6 class="mkdf-st-text">
                                        Scegli il servizio di cui hai bisogno e ti aiuteremo </h6>
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
                                                    <span class="mkdf-pt-title">Soluzione nr.1</span>
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
                                                    <span class="mkdf-pt-title">Soluzione nr.2</span>
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
                                                    <span class="mkdf-pt-title">Soluzione nr.3</span>
                                                </li>
                                                <li class="mkdf-pt-content-bottom">
                                                    <ul>
                                                        {{--<li class="mkdf-pt-price-holder">
                                                            <span class="mkdf-pt-value">$</span>
                                                            <span class="mkdf-pt-price">600</span>
                                                        </li>--}}
                                                        <li class="mkdf-pt-content">

                                                            <ul>
                                                                <li>ADDETTI  N.1  (DITTA INDIVIDUALE CON DIPENDENTI)
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
                                                    <span class="mkdf-pt-title">Soluzione nr.4</span>
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
                                                                <li>N.1 ARCHIVIO INFORMATICO E ARCHIVIO CARTACEO<br><br>
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
                                                    <span class="mkdf-pt-title">Soluzione nr.5</span>
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
                                                                <li>DA 2 A 5 ARCHIVI INFORMATICI E ARCHIVIO CARTACEO <br><br>
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
                                                    <span class="mkdf-pt-title">Soluzione nr.5</span>
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
                                                                <li>ELENCO ARCHIVI SIA INFORMATICI CHE CARTACEI SENZA SOPRALLUOGO E SENZA CONSULENZA
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
                                        <button style="background-color: #95b9e0;" class="mkdf-btn mkdf-btn-medium mkdf-btn-solid ombra" onclick="goBack()">Go Back</button>
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