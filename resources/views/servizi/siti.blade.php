@extends('layouts.template2')
@section('titolo')
    Siti Web
@stop

@section('content')
    <div class="mkdf-content">
        <div class="mkdf-content-inner">
            <div class="mkdf-title-holder mkdf-centered-type mkdf-title-va-header-bottom mkdf-title-content-va-middle mkdf-preload-background mkdf-has-bg-image mkdf-bg-parallax"
                 style="height: 430px;background-color: rgba(194,170,128,0.08);background-image:url({{asset('img/06.jpg')}});"
                 data-height="430">
                <div class="mkdf-title-image">
                    <img itemprop="image"
                         src="{{asset('img/06.jpg')}}"
                         alt="k"/>
                </div>
                {{--<div class="mkdf-title-wrapper" style="height: 430px">
                    <div class="mkdf-title-inner">
                        <div class="mkdf-grid">
                            <h2 class="mkdf-page-title entry-title">Siti Web</h2>
                        </div>
                    </div>
                </div>--}}
            </div>

            <div class="mkdf-row-grid-section-wrapper mkdf-content-aligment-center">
                <div class="mkdf-row-grid-section">
                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1522075243296">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-8">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="mkdf-section-title-holder  "
                                         style="text-align: center">
                                        <div class="mkdf-st-inner">
                                            <h3 class="mkdf-st-title">
                                                <br> </h3>
                                            <div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
                                                <div class="mkdf-separator"
                                                     style="width: 143px;border-bottom-width: 2px"></div>
                                            </div>
                                            <h2 class="mkdf-st-title" style="font-family: 'Microsoft Yi Baiti'!important;">
                                                Non c'è evoluzione senza informazione </h2>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 52px"><span
                                                class="vc_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mkdf-full-width">
                <div class="mkdf-full-width-inner">
                    <div class="mkdf-grid-row">
                        <div class="mkdf-page-content-holder mkdf-grid-col-12">
                            <div class="mkdf-row-grid-section-wrapper ">
                                <div class="mkdf-row-grid-section">
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1522331941684">
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-12 vc_col-md-offset-0 vc_col-md-12 vc_col-sm-offset-0 vc_col-xs-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="mkdf-section-title-holder  "
                                                         style="text-align: center">
                                                        <div class="mkdf-st-inner">
                                                            <h4 class="mkdf-st-title" style="text-align:justify; font-family: 'Microsoft Yi Baiti'!important;">
                                                                Il sito web è oramai uno strumento di comunicazione fondamentale per ogni azienda: è infatti sempre più importante utilizzare le opportunità offerte dalla rete in modo ottimale per avere successo.
                                                                <br><br>
                                                                Internet consente di promuovere in modo efficace ed efficiente la propria attività e i propri prodotti.
                                                                <br>

                                                            </h4>

                                                        </div>
                                                    </div>

                                                    {{--<div class="item-hover circle effect16 left_to_right"><a href="#">
                                                            <div class="img"><img src="./img/f7.jpg" alt="img"></div>
                                                            <div class="info">
                                                                <h3>Heading here</h3>
                                                                <p>Description goes here</p>
                                                            </div></a></div>--}}

                                                    {{--<div class="mkdf-row-grid-section-wrapper ">
                                                        <div class="mkdf-row-grid-section">
                                                            <div class="vc_row wpb_row vc_row-fluid">
                                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                    <div class="vc_column-inner ">
                                                                        <div class="wpb_wrapper">
                                                                            <div id="sfere" style="margin-left: 90px" class="mkdf-elements-holder   mkdf-two-columns  mkdf-responsive-mode-1024 ">
                                                                                <div class="mkdf-eh-item     "
                                                                                     data-item-class="mkdf-eh-custom-7043"
                                                                                     data-1024-1366="140px 8%"
                                                                                     data-768-1024="70px 133px 140px"
                                                                                     data-680-768="70px 53px 140px"
                                                                                     data-680="70px 0% 140px">
                                                                                    <div class="mkdf-eh-item-inner">
                                                                                        <div class="mkdf-eh-item-content mkdf-eh-custom-7043"
                                                                                             style="padding: 140px 12%">
                                                                                            <div class="mkdf-single-image-holder   ">
                                                                                                <div class="mkdf-si-inner item-hover circle effect3 right_to_left">
                                                                                                    --}}{{--<img width="800" height="534"
                                                                                                         src="{{asset('img/visibilita.jpeg')}}"
                                                                                                         style="border: 1px solid #0777BB"
                                                                                                         class="attachment-full size-full ombra"
                                                                                                         alt="g"
                                                                                                         srcset="{{asset('img/visibilita.jpeg')}}"
                                                                                                         sizes="(max-width: 800px) 100vw, 800px"/>--}}{{--

                                                                                                    <a href="#sfere">
                                                                                                        <div class="img" style="width: 300px!important; height: 300px"><img  src="{{asset('img/visibilita.png')}}" alt="img"></div>
                                                                                                        <div class="info2" style="width: 300px!important; height: 300px">
                                                                                                            <h5 style="color: white">Visibilità</h5>
                                                                                                            <p style="font-size: 20px; margin-left: 80px; font-weight: 600!important; color: white">
                                                                                                                Essere visibili significa <br> poter far conoscere la propria azienda e i propri prodotti <br> al mercato nazionale ed internazionale
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </a>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mkdf-eh-item     "
                                                                                     data-item-class="mkdf-eh-custom-7043"
                                                                                     data-1024-1366="140px 8%"
                                                                                     data-768-1024="70px 133px 140px"
                                                                                     data-680-768="70px 53px 140px"
                                                                                     data-680="70px 0% 140px">
                                                                                    <div class="mkdf-eh-item-inner">
                                                                                        <div class="mkdf-eh-item-content mkdf-eh-custom-7043"
                                                                                             style="padding: 140px 12%">
                                                                                            <div class="mkdf-single-image-holder   ">
                                                                                                <div class="mkdf-si-inner item-hover circle effect3 left_to_right">
                                                                                                    --}}{{--<img width="800" height="534"
                                                                                                         src="{{asset('img/comunicazione.jpeg')}}"
                                                                                                         style="border: 1px solid #0777BB"
                                                                                                         class="attachment-full size-full ombra"
                                                                                                         alt="g"
                                                                                                         srcset="{{asset('img/comunicazione.jpeg')}}"
                                                                                                         sizes="(max-width: 800px) 100vw, 800px"/>--}}{{--
                                                                                                    <a href="#sfere">
                                                                                                        <div class="img" style="width: 300px!important; height: 300px"><img  src="{{asset('img/comunicazione.png')}}" alt="img"></div>
                                                                                                        <div class="info2" style="width: 300px!important; height: 300px">
                                                                                                            <h5 style="color: white">Comunicazione</h5>
                                                                                                            <p style="font-size: 20px; padding-right: 35px;  font-weight: 600!important; color: white">
                                                                                                                Tutti i prodotti trattati dall'azienda, possono essere pubblicati su Internet a qualsiasi<br> ora, in qualsiasi <br>momento e sottoforma <br>di qualsiasi formato.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </a>
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
                                                        </div>
                                                    </div>--}}

                                                    <div class="mkdf-section-title-holder  "
                                                         style="text-align: center">
                                                        <div class="mkdf-st-inner">
                                                            <div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
                                                                <div class="mkdf-separator"
                                                                     style="width: 143px;border-bottom-width: 2px"></div>
                                                            </div>
                                                            <h2 class="mkdf-st-title" style="font-family: 'Microsoft Yi Baiti'!important;">
                                                                Servizi Web
                                                            </h2>
                                                            <div class="mkdf-row-grid-section-wrapper mkdf-content-aligment-center">
                                                                <div class="mkdf-row-grid-section">
                                                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1522075243296">
                                                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-8">
                                                                            <div class="vc_column-inner ">
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="mkdf-section-title-holder  "
                                                                                         style="text-align: center">
                                                                                        <div class="mkdf-st-inner">
                                                                                            <h3 class="mkdf-st-title">
                                                                                                <br> </h3>
                                                                                            <div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
                                                                                                <div class="mkdf-separator"
                                                                                                     style="width: 143px;border-bottom-width: 2px; margin-top: -60px">
                                                                                                </div>
                                                                                            </div>
                                                                                            <h6 class="mkdf-st-text">
                                                                                                <br> </h6>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vc_empty_space" style="height: 2px"><span
                                                                                                class="vc_empty_space_inner"></span></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mkdf-row-grid-section-wrapper " style="margin-top: -80px">
                                                        <div class="mkdf-row-grid-section">
                                                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1520428609185">
                                                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-0 vc_col-lg-3 vc_col-md-offset-1 vc_col-md-5">
                                                                    <div class="vc_column-inner ">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="mkdf-iwt clearfix  mkdf-iwt-icon-top mkdf-iwt-icon-medium ">
                                                                                <div class="mkdf-iwt-icon">

					    <span class="mkdf-icon-shortcode mkdf-normal    mkdf-icon-medium">
        <span class="mkdf-icon-bckg-holder"></span>
                    <span style="font-size: 35px; color: #0077c0; font-weight: 900; text-shadow: 2px 2px #000000;">R</span>                    </span>

                                                                                </div>
                                                                                <div class="mkdf-iwt-content">
                                                                                    <h5 class="mkdf-iwt-title" style="margin-top: 9px;font-family: 'Microsoft Yi Baiti'!important; font-size: 22px">

                                                                                            <span class="mkdf-iwt-title-text">Sito Web con layout "responsive"</span>

                                                                                    </h5>
                                                                                    <p class="mkdf-iwt-text">

                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vc_empty_space" style="height: 58px"><span
                                                                                        class="vc_empty_space_inner"></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-5">
                                                                    <div class="vc_column-inner ">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="mkdf-iwt clearfix  mkdf-iwt-icon-top mkdf-iwt-icon-medium ">
                                                                                <div class="mkdf-iwt-icon">

					    <span class="mkdf-icon-shortcode mkdf-normal    mkdf-icon-medium">
        <span class="mkdf-icon-bckg-holder"></span>
                    <span style="font-size: 35px; color: #0077c0; font-weight: 900; text-shadow: 2px 2px #000000;">D</span>                    </span>

                                                                                </div>
                                                                                <div class="mkdf-iwt-content">
                                                                                    <h5 class="mkdf-iwt-title" style="margin-top: 9px;font-family: 'Microsoft Yi Baiti'!important; font-size: 22px">

                                                                                            <span class="mkdf-iwt-title-text">Dominio + Hosting + Mail Aziendali</span>

                                                                                    </h5>
                                                                                    <p class="mkdf-iwt-text">


                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vc_empty_space" style="height: 58px"><span
                                                                                        class="vc_empty_space_inner"></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-0 vc_col-lg-3 vc_col-md-offset-1 vc_col-md-5">
                                                                    <div class="vc_column-inner ">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="mkdf-iwt clearfix  mkdf-iwt-icon-top mkdf-iwt-icon-medium ">
                                                                                <div class="mkdf-iwt-icon">

					    <span class="mkdf-icon-shortcode mkdf-normal    mkdf-icon-medium">
        <span class="mkdf-icon-bckg-holder"></span>
                    <span style="font-size: 35px; color: #0077c0; font-weight: 900; text-shadow: 2px 2px #000000;">G</span>                   </span>

                                                                                </div>
                                                                                <div class="mkdf-iwt-content">
                                                                                    <h5 class="mkdf-iwt-title" style="margin-top: 9px;font-family: 'Microsoft Yi Baiti'!important; font-size: 22px">

                                                                                            <span class="mkdf-iwt-title-text">Gestione del tuo DataBase - Prodotti, Clienti, Fornitori</span>

                                                                                    </h5>
                                                                                    <p class="mkdf-iwt-text">

                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vc_empty_space" style="height: 58px"><span
                                                                                        class="vc_empty_space_inner"></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-5">
                                                                    <div class="vc_column-inner ">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="mkdf-iwt clearfix  mkdf-iwt-icon-top mkdf-iwt-icon-medium ">
                                                                                <div class="mkdf-iwt-icon">

					    <span class="mkdf-icon-shortcode mkdf-normal    mkdf-icon-medium">
        <span class="mkdf-icon-bckg-holder"></span>
                    <span style="font-size: 35px; color: #0077c0; font-weight: 900; text-shadow: 2px 2px #000000;">A</span>                   </span>

                                                                                </div>
                                                                                <div class="mkdf-iwt-content">
                                                                                    <h5 class="mkdf-iwt-title" style="margin-top: 9px;font-family: 'Microsoft Yi Baiti'!important; font-size: 22px">

                                                                                        <span class="mkdf-iwt-title-text">Creazione della tua app professionale Android o IOS</span>

                                                                                    </h5>
                                                                                    <p class="mkdf-iwt-text">

                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vc_empty_space" style="height: 58px"><span
                                                                                        class="vc_empty_space_inner"></span></div>
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
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div> <!-- close div.content_inner -->
    </div>  <!-- close div.content -->

    <div class="mkdf-row-grid-section-wrapper "
         >
        <div class="mkdf-row-grid-section">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1522405848948">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="mkdf-section-title-holder  "
                                 style="text-align: center">
                                <div class="mkdf-st-inner">
                                    <h2 class="mkdf-st-title" style="font-family: 'Microsoft Yi Baiti'!important;">
                                        Tabelle dei servizi Web</h2>
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

    <div class="mkdf-row-grid-section-wrapper "
         style="margin-top: -140px">
        <div class="mkdf-row-grid-section">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1522405848948">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="mkdf-section-title-holder  "
                                 style="text-align: center">
                                <div class="mkdf-st-inner" style="">
                                    <h3 class="mkdf-st-title" style="font-family: 'Microsoft Yi Baiti'!important;">
                                        Creazione Sito Web</h3>
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

    <div class="mkdf-row-grid-section-wrapper " style="margin-top: -60px">
        <div class="mkdf-row-grid-section">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1520416413881">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="mkdf-pricing-tables clearfix mkdf-three-columns mkdf-normal-space">
                                <div class="mkdf-pt-wrapper mkdf-outer-space">

                                    <div class="mkdf-item-space wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12">
                                        <div class="mkdf-pt-inner prova" style="background-color: #0177C1; border-radius: 25px;">
                                            <ul>
                                                <p class="mkdf-pt-title-holder" style="border-radius: 25px 25px 0 0;">
                                                    <span class="mkdf-pt-title" style="font-size: 45px; font-family: 'Microsoft Yi Baiti'!important;">&nbsp;</span>
                                                </p>

                                                <ul style="color: white; font-size: 24px; text-align: center">
                                                    <p>
                                                        1 pagina = a partire da €200
                                                    </p>
                                                    <p>
                                                        2 - 5 pagine = a partire da €500
                                                    </p>
                                                    <p>
                                                        più di 5 pagine = a partire da €800
                                                    </p>
                                                    <p>
                                                        &nbsp;
                                                    </p>
                                                    <p>
                                                        + Creazione DataBase = a partire da €500*
                                                    </p>
                                                    <p>
                                                        * = la creazione del Database può servire per prenotazioni, messaggistica, ecc
                                                    </p>
                                                    <p>
                                                        &nbsp;
                                                    </p>

                                                </ul>
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

    <div class="mkdf-row-grid-section-wrapper " style="margin-bottom: -50px; margin-top: -160px">
        <div class="mkdf-row-grid-section">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1522405848948">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="mkdf-section-title-holder  "
                                 style="text-align: center">
                                <div class="mkdf-st-inner" >
                                    <h3 class="mkdf-st-title" style="font-family: 'Microsoft Yi Baiti'!important;">
                                        Manutenzione Sito Web</h3>
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

    <div class="row" >
        <div class="col-1-of-2">
            <div class="card">
                <!--.card__side + TAB-->
                <div class="card__side card__side--front">
                    <!--.card__picture + TAB-->
                    <div class="card__picture card__picture--1">
                        &nbsp;
                    </div>
                    <!--.card__heading + TAB-->
                    <h4 class="card__heading">
                        <!--span.card__heading-span + TAB-->
                        <span class="card__heading-span card__heading-span--1">Minimo</span>
                    </h4>
                    <!--.card__details + TAB-->
                    <div class="card__details">
                        <!--ul>li*5 + TAB-->
                        <ul>
                            <li>Dominio + hosting</li>
                            <li>Backup giornaliero</li>
                            <li></li>

                        </ul>
                    </div>
                </div>
                <div class="card__side card__side--back card__side--back-1">
                    <div class="card__cta">
                        <!--.card__price-box + TAB-->
                        <div class="card__price-box">
                            <!--p.card__price-only + TAB-->
                            <p class="card__price-only"></p>
                            <!--p.card_price-value + TAB-->
                            <p class="card__price-value">€19 mese</p>
                        </div>
                        <!--a.btn + TAB-->
                        {{--<a href="#popup" class="btn btn--white">Book now!</a>--}}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-1-of-2">
            <div class="card">
                <!--.card__side + TAB-->
                <div class="card__side card__side--front">
                    <!--.card__picture + TAB-->
                    <div class="card__picture card__picture--4">
                        &nbsp;
                    </div>
                    <!--.card__heading + TAB-->
                    <h4 class="card__heading">
                        <!--span.card__heading-span + TAB-->
                        <span class="card__heading-span card__heading-span--4">Base</span>
                    </h4>
                    <!--.card__details + TAB-->
                    <div class="card__details">
                        <!--ul>li*5 + TAB-->
                        <ul>
                            <li>Dominio + hosting</li>
                            <li>Backup giornaliero</li>
                            <li>Gestione DB Clienti</li>
                            <li>1 mail aziendale</li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="card__side card__side--back card__side--back-4">
                    <div class="card__cta">
                        <!--.card__price-box + TAB-->
                        <div class="card__price-box">
                            <!--p.card__price-only + TAB-->
                            <p class="card__price-only"></p>
                            <!--p.card_price-value + TAB-->
                            <p class="card__price-value">€39 mese</p>
                        </div>
                        <!--a.btn + TAB-->
                        {{--<a href="#popup" class="btn btn--white">Book now!</a>--}}
                    </div>
                </div>
            </div>
        </div>

    </div>



    <div class="row">




        <div class="col-1-of-2">
            <div class="card">
                <!--.card__side + TAB-->
                <div class="card__side card__side--front">
                    <!--.card__picture + TAB-->
                    <div class="card__picture card__picture--2">
                        &nbsp;
                    </div>
                    <!--.card__heading + TAB-->
                    <h4 class="card__heading">
                        <!--span.card__heading-span + TAB-->
                        <span class="card__heading-span card__heading-span--2">Avanzato</span>
                    </h4>
                    <!--.card__details + TAB-->
                    <div class="card__details">
                        <!--ul>li*5 + TAB-->
                        <ul>
                            <li>Dominio + hosting</li>
                            <li>Backup giornaliero</li>
                            <li>Gestione DB Clienti</li>
                            <li>3 mail aziendale</li>
                            <li>Versione Mobile</li>
                            <li>2 modifiche annue</li>
                        </ul>
                    </div>
                </div>
                <div class="card__side card__side--back card__side--back-2">
                    <div class="card__cta">
                        <!--.card__price-box + TAB-->
                        <div class="card__price-box">
                            <!--p.card__price-only + TAB-->
                            <p class="card__price-only"></p>
                            <!--p.card_price-value + TAB-->
                            <p class="card__price-value">€49 mese</p>
                        </div>
                        <!--a.btn + TAB-->
                        {{--<a href="#popup" class="btn btn--white">Book now!</a>--}}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-1-of-2">
            <div class="card">
                <!--.card__side + TAB-->
                <div class="card__side card__side--front">
                    <!--.card__picture + TAB-->
                    <div class="card__picture card__picture--3">
                        &nbsp;
                    </div>
                    <!--.card__heading + TAB-->
                    <h4 class="card__heading">
                        <!--span.card__heading-span + TAB-->
                        <span class="card__heading-span card__heading-span--3">Completo</span>
                    </h4>
                    <!--.card__details + TAB-->
                    <div class="card__details">
                        <!--ul>li*5 + TAB-->
                        <ul>
                            <li>Dominio + hosting</li>
                            <li>Backup giornaliero</li>
                            <li>Gestione DB Clienti</li>
                            <li>5 mail aziendale</li>
                            <li>Versione Mobile + App</li>
                            <li>5 modifiche annue</li>
                        </ul>
                    </div>
                </div>
                <div class="card__side card__side--back card__side--back-3">
                    <div class="card__cta">
                        <!--.card__price-box + TAB-->
                        <div class="card__price-box">
                            <!--p.card__price-only + TAB-->
                            <p class="card__price-only"></p>
                            <!--p.card_price-value + TAB-->
                            <p class="card__price-value">€79 mese</p>
                        </div>
                        <!--a.btn + TAB-->
                        {{--<a href="#popup" class="btn btn--white">Book now!</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<div class="mkdf-row-grid-section-wrapper ">
        <div class="mkdf-row-grid-section">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1520416413881">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="mkdf-pricing-tables clearfix mkdf-three-columns mkdf-normal-space">
                                <div class="mkdf-pt-wrapper mkdf-outer-space">

                                    <div class="mkdf-item-space wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-5">
                                        <div class="mkdf-pt-inner prova" style="border-radius: 25px; background: linear-gradient(#bbbbbb, white);">
                                            <ul>
                                                <header style="position: relative">
                                                    <p class="mkdf-pt-title-holder" style="background: #95B9E0; border-radius: 25px 25px 0 0; height: 60px">
                                                    <div class="text-box">
                                                        <span class="mkdf-pt-title" style="color: black; font-size: 45px; font-family: 'Microsoft Yi Baiti'!important;">Minimo</span>
                                                    </div>
                                                    </p>
                                                </header>

                                                <ul style="color: black; font-size: 24px">
                                                    <p>
                                                        Dominio + hosting
                                                    </p>
                                                    <p>
                                                        Backup giornaliero
                                                    </p>
                                                    <p>
                                                        &nbsp;
                                                    </p>
                                                    <p>
                                                        &nbsp;
                                                    </p>
                                                    <p>
                                                        &nbsp;
                                                    </p>
                                                    <p>
                                                        &nbsp;
                                                    </p>
                                                    <p>
                                                        &nbsp;
                                                    </p>
                                                    <p style="font-size: 34px; margin: 34px 0; padding-bottom: 30px">
                                                        €19 mese
                                                    </p>

                                                </ul>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="mkdf-item-space wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-5">
                                        <div class="mkdf-pt-inner prova" style="border-radius: 25px; background: linear-gradient(#fed3fc, white);">
                                            <ul>
                                                <header style="position: relative">
                                                    <p class="mkdf-pt-title-holder" style="background: #95B9E0; border-radius: 25px 25px 0 0; height: 60px">
                                                    <div class="text-box">
                                                        <span class="mkdf-pt-title" style="color: black; font-size: 45px; font-family: 'Microsoft Yi Baiti'!important;">Base</span>
                                                    </div>
                                                    </p>
                                                </header>

                                                <ul style="color: black; font-size: 24px">
                                                    <p>
                                                        Dominio + hosting
                                                    </p>
                                                    <p>
                                                        Backup giornaliero
                                                    </p>
                                                    <p>
                                                        Gestione DB Clienti
                                                    </p>
                                                    <p>
                                                        1 mail aziendale
                                                    </p>
                                                    <p>
                                                        &nbsp;
                                                    </p>
                                                    <p>
                                                        &nbsp;
                                                    </p>
                                                    <p>
                                                        &nbsp;
                                                    </p>
                                                    <p style="font-size: 34px; margin: 34px 0; padding-bottom: 30px">
                                                        €39 mese
                                                    </p>

                                                </ul>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="mkdf-item-space wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-5">
                                        <div class="mkdf-pt-inner prova" style="border-radius: 25px; background: linear-gradient(#d7f1f1, white);">
                                            <ul>
                                                <header style="position: relative">
                                                    <p class="mkdf-pt-title-holder" style="background: #95B9E0; border-radius: 25px 25px 0 0; height: 60px">
                                                    <div class="text-box">
                                                        <span class="mkdf-pt-title" style="color: black; font-size: 45px; font-family: 'Microsoft Yi Baiti'!important;">Avanzato</span>
                                                    </div>
                                                    </p>
                                                </header>

                                                <ul style="color: black; font-size: 24px">
                                                    <p>
                                                        Dominio + hosting
                                                    </p>
                                                    <p>
                                                        Backup giornaliero
                                                    </p>
                                                    <p>
                                                        Gestione DB Clienti
                                                    </p>
                                                    <p>
                                                        3 mail aziendale
                                                    </p>
                                                    <p>
                                                        Versione Mobile
                                                    </p>
                                                    <p>
                                                        2 modifiche annue
                                                    </p>
                                                    <p>
                                                        &nbsp;
                                                    </p>
                                                    <p style="font-size: 34px; margin: 34px 0; padding-bottom: 30px">
                                                        €49 mese
                                                    </p>

                                                </ul>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="mkdf-item-space wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-5">
                                        <div class="mkdf-pt-inner prova quattro" style="border-radius: 25px; background: linear-gradient(#f3ff90, white);">
                                            <ul>
                                                <header style="position: relative">
                                                <p class="mkdf-pt-title-holder" style="background: #95B9E0; border-radius: 25px 25px 0 0; height: 60px">
                                                    <div class="text-box">
                                                        <span class="mkdf-pt-title" style="color: black; font-size: 45px; font-family: 'Microsoft Yi Baiti'!important;">Completo</span>
                                                    </div>
                                                </p>
                                                </header>
                                                    <ul style="color: black; font-size: 24px">
                                                        <p>
                                                            Dominio + hosting
                                                        </p>
                                                        <p>
                                                            Backup giornaliero
                                                        </p>
                                                        <p>
                                                            Gestione DB Clienti
                                                        </p>
                                                        <p>
                                                            5 mail aziendale
                                                        </p>
                                                        <p>
                                                            Versione Mobile
                                                        </p>
                                                        <p>
                                                            5 modifiche annue
                                                        </p>
                                                        <p>
                                                            App IOS e Android
                                                        </p>
                                                        <p style="font-size: 34px; margin: 34px 0; padding-bottom: 30px">
                                                            €79 mese
                                                        </p>

                                                    </ul>
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
    </div>--}}

    <div class="mkdf-row-grid-section-wrapper mkdf-content-aligment-center">
        <div class="mkdf-row-grid-section">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1522405812816">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper" style="margin-top: -150px">
                            <div class="mkdf-section-title-holder  "
                                 style="text-align: center; ">
                                <div class="mkdf-st-inner">

                                    <h4 class="mkdf-st-text" style="font-family: 'Microsoft Yi Baiti'!important;">
                                        <i><b>Il gusto è soggettivo, la qualità no!</b> </i></h4>

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

@stop

@section('fondo')
<script>
    var windowWidth = jQuery(window).width();
    //alert(windowWidth);

    if (windowWidth < 465)
    {
        jQuery('#sfere').css('margin-left',1);

    }

</script>
    @stop
