{{--@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection--}}

        <!DOCTYPE html>
<html lang="en-US">
<head>

    <meta charset="UTF-8"/>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>

    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
    <title>@yield('titolo')</title>

    <meta name="description" content="Counseling - Privacy dati e sicurezza ICT">
    <meta name="keywords" content="GDPR, General Data Protection Regulation, Privacy, Arezzo, Toscana, Hardware, Software, Sicuerzza, ICT, Dati">

    <link rel='dns-prefetch' href='//maps.googleapis.com'/>
    <link rel='dns-prefetch' href='//fonts.googleapis.com'/>
    <link rel='dns-prefetch' href='//s.w.org'/>
    {{--<link rel="alternate" type="application/rss+xml" title="Anwalt &raquo; Feed" href="http://anwalt.mikado-themes.com/feed/" />--}}
    {{--<link rel="alternate" type="application/rss+xml" title="Anwalt &raquo; Comments Feed" href="http://anwalt.mikado-themes.com/comments/feed/" />--}}
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.4\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.4\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "http:\/\/anwalt.mikado-themes.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.4"}
        };
        !function (a, b, c) {
            function d(a, b) {
                var c = String.fromCharCode;
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0);
                var d = k.toDataURL();
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0);
                var e = k.toDataURL();
                return d === e
            }

            function e(a) {
                var b;
                if (!l || !l.fillText)return !1;
                switch (l.textBaseline = "top", l.font = "600 32px Arial", a) {
                    case"flag":
                        return !(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]), !b);
                    case"emoji":
                        return b = d([55357, 56692, 8205, 9792, 65039], [55357, 56692, 8203, 9792, 65039]), !b
                }
                return !1
            }

            function f(a) {
                var c = b.createElement("script");
                c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }

            var g, h, i, j, k = b.createElement("canvas"), l = k.getContext && k.getContext("2d");
            for (j = Array("flag", "emoji"), c.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, i = 0; i < j.length; i++)c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[j[i]]);
            c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function () {
                c.DOMReady = !0
            }, c.supports.everything || (h = function () {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function () {
                "complete" === b.readyState && c.readyCallback()
            })), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji), f(g.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css'
          href='http://anwalt.mikado-themes.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0.1'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='rs-plugin-settings-css'
          href='http://anwalt.mikado-themes.com/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.4.7.2'
          type='text/css' media='all'/>
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {
        }
    </style>
    <link rel='stylesheet' id='anwalt_mikado_default_style-css'
          href='http://anwalt.mikado-themes.com/wp-content/themes/anwalt/style.css?ver=4.9.4' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='anwalt_mikado_modules-css'
          href='http://anwalt.mikado-themes.com/wp-content/themes/anwalt/assets/css/modules.min.css?ver=4.9.4'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='mkdf_font_awesome-css'
          href='http://anwalt.mikado-themes.com/wp-content/themes/anwalt/assets/css/font-awesome/css/font-awesome.min.css?ver=4.9.4'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='mkdf_font_elegant-css'
          href='http://anwalt.mikado-themes.com/wp-content/themes/anwalt/assets/css/elegant-icons/style.min.css?ver=4.9.4'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='mkdf_ion_icons-css'
          href='http://anwalt.mikado-themes.com/wp-content/themes/anwalt/assets/css/ion-icons/css/ionicons.min.css?ver=4.9.4'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='mkdf_linea_icons-css'
          href='http://anwalt.mikado-themes.com/wp-content/themes/anwalt/assets/css/linea-icons/style.css?ver=4.9.4'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='mkdf_linear_icons-css'
          href='http://anwalt.mikado-themes.com/wp-content/themes/anwalt/assets/css/linear-icons/style.css?ver=4.9.4'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='mkdf_simple_line_icons-css'
          href='http://anwalt.mikado-themes.com/wp-content/themes/anwalt/assets/css/simple-line-icons/simple-line-icons.css?ver=4.9.4'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='mkdf_dripicons-css'
          href='http://anwalt.mikado-themes.com/wp-content/themes/anwalt/assets/css/dripicons/dripicons.css?ver=4.9.4'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='mediaelement-css'
          href='http://anwalt.mikado-themes.com/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.6-78496d1'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='wp-mediaelement-css'
          href='http://anwalt.mikado-themes.com/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=4.9.4'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='anwalt_mikado_woo-css'
          href='http://anwalt.mikado-themes.com/wp-content/themes/anwalt/assets/css/woocommerce.min.css?ver=4.9.4'
          type='text/css' media='all'/>
    <style id='anwalt_mikado_woo-inline-css' type='text/css'>
        .page-id-13.mkdf-boxed .mkdf-wrapper {
            background-attachment: fixed;
        }

        .page-id-13 .mkdf-page-header .mkdf-menu-area {
            background-color: rgba(255, 255, 255, 0);
        }

        .page-id-13 .mkdf-content .mkdf-content-inner > .mkdf-container > .mkdf-container-inner, .page-id-13 .mkdf-content .mkdf-content-inner > .mkdf-full-width > .mkdf-full-width-inner {
            padding: 0px;
        }

        .page-id-13 .mkdf-content .mkdf-content-inner > .mkdf-container > .mkdf-container-inner, .page-id-13 .mkdf-content .mkdf-content-inner > .mkdf-full-width > .mkdf-full-width-inner {
            padding: 0px;
        }
    </style>
    <link rel='stylesheet' id='anwalt_mikado_woo_responsive-css'
          href='http://anwalt.mikado-themes.com/wp-content/themes/anwalt/assets/css/woocommerce-responsive.min.css?ver=4.9.4'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='anwalt_mikado_style_dynamic-css'
          href='http://anwalt.mikado-themes.com/wp-content/themes/anwalt/assets/css/style_dynamic.css?ver=1522750081'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='anwalt_mikado_modules_responsive-css'
          href='http://anwalt.mikado-themes.com/wp-content/themes/anwalt/assets/css/modules-responsive.min.css?ver=4.9.4'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='anwalt_mikado_style_dynamic_responsive-css'
          href='http://anwalt.mikado-themes.com/wp-content/themes/anwalt/assets/css/style_dynamic_responsive.css?ver=1522750081'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='anwalt_mikado_google_fonts-css'
          href='http://fonts.googleapis.com/css?family=Lustria%3A300%2C300italic%2C400%2C400italic%7COpen+Sans%3A300%2C300italic%2C400%2C400italic&#038;subset=latin-ext&#038;ver=1.0.0'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='js_composer_front-css'
          href='http://anwalt.mikado-themes.com/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=5.4.5'
          type='text/css' media='all'/>
    <script type="text/javascript" src="http://anwalt.mikado-themes.com/wp-content/cache/minify/eff97.js"></script>


    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "http:\/\/anwalt.mikado-themes.com\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="http://anwalt.mikado-themes.com/wp-content/cache/minify/1fb96.js"></script>


    <script type='text/javascript'>
        var mejsL10n = {
            "language": "en",
            "strings": {
                "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
                "mejs.fullscreen-off": "Turn off Fullscreen",
                "mejs.fullscreen-on": "Go Fullscreen",
                "mejs.download-video": "Download Video",
                "mejs.fullscreen": "Fullscreen",
                "mejs.time-jump-forward": ["Jump forward 1 second", "Jump forward %1 seconds"],
                "mejs.loop": "Toggle Loop",
                "mejs.play": "Play",
                "mejs.pause": "Pause",
                "mejs.close": "Close",
                "mejs.time-slider": "Time Slider",
                "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
                "mejs.time-skip-back": ["Skip back 1 second", "Skip back %1 seconds"],
                "mejs.captions-subtitles": "Captions\/Subtitles",
                "mejs.captions-chapters": "Chapters",
                "mejs.none": "None",
                "mejs.mute-toggle": "Mute Toggle",
                "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
                "mejs.unmute": "Unmute",
                "mejs.mute": "Mute",
                "mejs.volume-slider": "Volume Slider",
                "mejs.video-player": "Video Player",
                "mejs.audio-player": "Audio Player",
                "mejs.ad-skip": "Skip ad",
                "mejs.ad-skip-info": ["Skip in 1 second", "Skip in %1 seconds"],
                "mejs.source-chooser": "Source Chooser",
                "mejs.stop": "Stop",
                "mejs.speed-rate": "Speed Rate",
                "mejs.live-broadcast": "Live Broadcast",
                "mejs.afrikaans": "Afrikaans",
                "mejs.albanian": "Albanian",
                "mejs.arabic": "Arabic",
                "mejs.belarusian": "Belarusian",
                "mejs.bulgarian": "Bulgarian",
                "mejs.catalan": "Catalan",
                "mejs.chinese": "Chinese",
                "mejs.chinese-simplified": "Chinese (Simplified)",
                "mejs.chinese-traditional": "Chinese (Traditional)",
                "mejs.croatian": "Croatian",
                "mejs.czech": "Czech",
                "mejs.danish": "Danish",
                "mejs.dutch": "Dutch",
                "mejs.english": "English",
                "mejs.estonian": "Estonian",
                "mejs.filipino": "Filipino",
                "mejs.finnish": "Finnish",
                "mejs.french": "French",
                "mejs.galician": "Galician",
                "mejs.german": "German",
                "mejs.greek": "Greek",
                "mejs.haitian-creole": "Haitian Creole",
                "mejs.hebrew": "Hebrew",
                "mejs.hindi": "Hindi",
                "mejs.hungarian": "Hungarian",
                "mejs.icelandic": "Icelandic",
                "mejs.indonesian": "Indonesian",
                "mejs.irish": "Irish",
                "mejs.italian": "Italian",
                "mejs.japanese": "Japanese",
                "mejs.korean": "Korean",
                "mejs.latvian": "Latvian",
                "mejs.lithuanian": "Lithuanian",
                "mejs.macedonian": "Macedonian",
                "mejs.malay": "Malay",
                "mejs.maltese": "Maltese",
                "mejs.norwegian": "Norwegian",
                "mejs.persian": "Persian",
                "mejs.polish": "Polish",
                "mejs.portuguese": "Portuguese",
                "mejs.romanian": "Romanian",
                "mejs.russian": "Russian",
                "mejs.serbian": "Serbian",
                "mejs.slovak": "Slovak",
                "mejs.slovenian": "Slovenian",
                "mejs.spanish": "Spanish",
                "mejs.swahili": "Swahili",
                "mejs.swedish": "Swedish",
                "mejs.tagalog": "Tagalog",
                "mejs.thai": "Thai",
                "mejs.turkish": "Turkish",
                "mejs.ukrainian": "Ukrainian",
                "mejs.vietnamese": "Vietnamese",
                "mejs.welsh": "Welsh",
                "mejs.yiddish": "Yiddish"
            }
        };
    </script>
    <script type="text/javascript" src="http://anwalt.mikado-themes.com/wp-content/cache/minify/864c2.js"></script>


    <script type='text/javascript'>
        /* <![CDATA[ */
        var _wpmejsSettings = {
            "pluginPath": "\/wp-includes\/js\/mediaelement\/",
            "classPrefix": "mejs-",
            "stretching": "responsive"
        };
        /* ]]> */
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link rel='https://api.w.org/' href='http://anwalt.mikado-themes.com/wp-json/'/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://anwalt.mikado-themes.com/xmlrpc.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
          href="http://anwalt.mikado-themes.com/wp-includes/wlwmanifest.xml"/>
    {{--    <meta name="generator" content="WordPress 4.9.4"/>
        <meta name="generator" content="WooCommerce 3.3.4"/>--}}
    <link rel="canonical" href="http://anwalt.mikado-themes.com/"/>
    <link rel='shortlink' href='http://anwalt.mikado-themes.com/'/>
    <link rel="alternate" type="application/json+oembed"
          href="http://anwalt.mikado-themes.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fanwalt.mikado-themes.com%2F"/>
    <link rel="alternate" type="text/xml+oembed"
          href="http://anwalt.mikado-themes.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fanwalt.mikado-themes.com%2F&#038;format=xml"/>
    <noscript>
        <style>.woocommerce-product-gallery {
                opacity: 1 !important;
            }</style>
    </noscript>
    {{--<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>--}}
    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css"
          href="http://anwalt.mikado-themes.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css"
          media="screen"><![endif]-->
    {{-- <meta name="generator"
           content="Powered by Slider Revolution 5.4.7.2 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface."/>--}}
    <link rel="icon" href="{{asset('img/icona.png')}}"
          sizes="32x32"/>
    <link rel="icon" href="{{asset('img/icona.png')}}"
          sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed"
          href="{{asset('img/icona.png')}}"/>
    <meta name="msapplication-TileImage"
          content="{{asset('img/icona.png')}}"/>
    <script type="text/javascript">function setREVStartSize(e) {
            try {
                e.c = jQuery(e.c);
                var i = jQuery(window).width(), t = 9999, r = 0, n = 0, l = 0, f = 0, s = 0, h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function (e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({height: f})
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };</script>
    <style type="text/css" id="wp-custom-css">
        #nav-menu-item-2552,
        #nav-menu-item-2553,
        #nav-menu-item-2554,
        #sticky-nav-menu-item-2552,
        #sticky-nav-menu-item-2553,
        #sticky-nav-menu-item-2554 {
            border-left: 0;
        }        </style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1520428609185 {
            padding-top: 100px !important;
            padding-bottom: 25px !important;
        }

        .vc_custom_1522659030108 {
            padding-top: 33px !important;
            padding-bottom: 58px !important;
        }

        .vc_custom_1522405812816 {
            padding-top: 120px !important;
            padding-bottom: 62px !important;
        }

        .vc_custom_1521814924146 {
            padding-bottom: 38px !important;
        }

        .vc_custom_1520421283539 {
            padding-top: 97px !important;
            padding-bottom: 33px !important;
        }

        .vc_custom_1521548298854 {
            padding-top: 78px !important;
            padding-bottom: 115px !important;
        }

        .vc_custom_1522405836034 {
            padding-top: 120px !important;
            padding-bottom: 62px !important;
        }

        .vc_custom_1520416183281 {
            padding-bottom: 140px !important;
        }

        .vc_custom_1522405848948 {
            padding-top: 120px !important;
            padding-bottom: 62px !important;
        }

        .vc_custom_1520416413881 {
            padding-bottom: 110px !important;
        }

        .vc_custom_1521709462158 {
            padding-top: 120px !important;
            padding-bottom: 41px !important;
        }

        .mkdf-pt-content{
            font-weight: bold;
        }

        .ombra{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .vc_custom_1520610634047 {
            padding-bottom: 104px !important;
        }</style>
    <noscript>
        <style type="text/css"> .wpb_animate_when_almost_visible {
                opacity: 1;
            }</style>
    </noscript>
</head>

<body class="home page-template page-template-full-width page-template-full-width-php page page-id-13 anwalt-core-1.0 anwalt-ver-1.0 mkdf-smooth-page-transitions mkdf-smooth-page-transitions-preloader mkdf-grid-1300 mkdf-empty-google-api mkdf-sticky-header-on-scroll-down-up mkdf-dropdown-animate-height mkdf-header-standard mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-in-grid-border-disable mkdf-logo-area-border-disable mkdf-side-menu-slide-from-right mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-below-image mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header mkdf-header-top-enabled wpb-js-composer js-comp-ver-5.4.5 vc_responsive mkdf-search-covers-header"
      itemscope itemtype="http://schema.org/WebPage">
<div class="mkdf-smooth-transition-loader mkdf-mimic-ajax">
    <div class="mkdf-st-loader">
        <div class="mkdf-st-loader1">
            <div class="mkdf-reveal-image"><img
                        src="{{asset('img/logo.png')}}"
                        alt="spinner"/>
                <div class="mkdf-spinner-revealer"></div>
            </div>
        </div>
    </div>
</div>

<div class="mkdf-wrapper">
    <div class="mkdf-wrapper-inner">


        @include('partials.navigazione')

        <a id='mkdf-back-to-top' href='#' >
                <span class="mkdf-icon-stack" style="background-color: #0077c0">
                     <span class="mkdf-icon-linear-icons lnr lnr-chevron-up fas fa-arrow-circle-up"></span>
                    <span style="background-color: #95b9e0"
                          class="mkdf-icon-linear-icons lnr lnr-chevron-up fas fa-arrow-circle-up" >
                    </span>
                </span>
        </a>

        <div class="mkdf-content" style="margin-top: -70px">
            <div class="mkdf-content-inner">
                <div class="mkdf-full-width">
                    <div class="mkdf-full-width-inner">
                        <div class="mkdf-grid-row">
                            <div class="mkdf-page-content-holder mkdf-grid-col-12">
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper" style="margin-top: 70px!important;">
                                                @yield('content')
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

        @include('partials.footer')

    </div> <!-- close div.mkdf-wrapper-inner  -->
</div> <!-- close div.mkdf-wrapper -->
<script type="text/javascript">
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    }
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {
        "apiSettings": {
            "root": "http:\/\/anwalt.mikado-themes.com\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
        }, "recaptcha": {"messages": {"empty": "Please verify that you are not a robot."}}, "cached": "1"
    };
    /* ]]> */
</script>


<script type="text/javascript" src="http://anwalt.mikado-themes.com/wp-content/cache/minify/6a817.js"></script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<script type="text/javascript" src="http://anwalt.mikado-themes.com/wp-content/cache/minify/63a69.js"></script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_0a1783b07f4e145ad773d45267e92259",
        "fragment_name": "wc_fragments_0a1783b07f4e145ad773d45267e92259"
    };
    /* ]]> */
</script>


<script type="text/javascript" src="http://anwalt.mikado-themes.com/wp-content/cache/minify/b5f3e.js"></script>

<script type='text/javascript' src='//maps.googleapis.com/maps/api/js?ver=4.9.4'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var mkdfGlobalVars = {
        "vars": {
            "mkdfAddForAdminBar": 0,
            "mkdfElementAppearAmount": -100,
            "mkdfAjaxUrl": "http:\/\/anwalt.mikado-themes.com\/wp-admin\/admin-ajax.php",
            "mkdfStickyHeaderHeight": 0,
            "mkdfStickyHeaderTransparencyHeight": 70,
            "mkdfTopBarHeight": 46,
            "mkdfLogoAreaHeight": 0,
            "mkdfMenuAreaHeight": 116,
            "mkdfMobileHeaderHeight": 70
        }
    };
    var mkdfPerPageVars = {
        "vars": {
            "mkdfMobileHeaderHeight": 70,
            "mkdfStickyScrollAmount": 890,
            "mkdfHeaderTransparencyHeight": 0,
            "mkdfHeaderVerticalWidth": 0
        }
    };
    /* ]]> */
</script>

<script>
    var windowWidth = jQuery(window).width();
    if (windowWidth < 600)
    {
        jQuery('#tit1').css('font-size',34);

        jQuery('#tit2').css('font-size',34);
        jQuery('#tit3').css('font-size',34);
    }

</script>

<script>
    function goBack() {
        window.history.back();
    }
</script>

@yield('fondo')

<script type="text/javascript" src="http://anwalt.mikado-themes.com/wp-content/cache/minify/48fcb.js"></script>

</body>
</html>
<!--
Performance optimized by W3 Total Cache. Learn more: https://www.w3-edge.com/products/

Object Caching 13710/0 objects using disk
Page Caching using disk: enhanced
Minified using disk

Served from: anwalt.mikado-themes.com @ 2018-04-29 11:38:43 by W3 Total Cache
-->