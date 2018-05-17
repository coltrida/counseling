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
    <title>Counseling</title>

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
    <link rel="icon" href="{{asset('img/icona2.png')}}"
          sizes="32x32"/>
    <link rel="icon" href="{{asset('img/icona2.png')}}"
          sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed"
          href="{{asset('img/icona2.png')}}"/>
    <meta name="msapplication-TileImage"
          content="{{asset('img/icona2.png')}}"/>
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

        .ombra{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        #info {
            height: 35px;
            position: fixed!important;
            bottom:0%!important;
            width:60%!important;
            background-color: #393838!important;
            opacity: 0.7!important;
            z-index: 999999;
        }

        body {
            font-family: 'Microsoft Yi Baiti'!important;
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
                        src="{{asset('img/logo2.png')}}"
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



        <div class="mkdf-content" style="margin-top: -120px">
            <div class="mkdf-content-inner">
                <div class="mkdf-full-width">
                    <div class="mkdf-full-width-inner">
                        <div class="mkdf-grid-row">
                            <div class="mkdf-page-content-holder mkdf-grid-col-12">
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_revslider_element wpb_content_element">
                                                    <link href="http://fonts.googleapis.com/css?family=Lustria:400%7COpen+Sans:300"
                                                          rel="stylesheet" property="stylesheet" type="text/css"
                                                          media="all">
                                                    <div id="rev_slider_2_1_wrapper"
                                                         class="rev_slider_wrapper fullwidthbanner-container"
                                                         data-source="gallery"
                                                         style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                                        <!-- START REVOLUTION SLIDER 5.4.7.2 fullwidth mode -->
                                                        <div id="rev_slider_2_1" class="rev_slider fullwidthabanner"
                                                             style="display:none;" data-version="5.4.7.2">
                                                            <ul>    <!-- SLIDE  -->
                                                                <li data-index="rs-2" data-transition="slideremoveleft"
                                                                    data-slotamount="default" data-hideafterloop="0"
                                                                    data-hideslideonmobile="off" data-easein="default"
                                                                    data-easeout="default" data-masterspeed="default"
                                                                    data-thumb="{{asset('img/prima.jpg')}}"
                                                                    data-rotate="0" data-fstransition="fade"
                                                                    data-fsmasterspeed="300" data-fsslotamount="7"
                                                                    data-saveperformance="off" data-title="Slide"
                                                                    data-param1="" data-param2="" data-param3=""
                                                                    data-param4="" data-param5="" data-param6=""
                                                                    data-param7="" data-param8="" data-param9=""
                                                                    data-param10="" data-description="">
                                                                    <!-- MAIN IMAGE -->
                                                                    <img src="{{asset('img/prima.jpg')}}"
                                                                         alt="i" title="prima"
                                                                         width="1920" height="790"
                                                                         data-bgposition="center center"
                                                                         data-bgfit="cover" data-bgrepeat="no-repeat"
                                                                         data-bgparallax="8" class="rev-slidebg"
                                                                         data-no-retina>
                                                                    <!-- LAYERS -->

                                                                    <!-- LAYER NR. 1 -->
                                                                    <div class="tp-caption   tp-resizeme"
                                                                         id="slide-2-layer-3"
                                                                         data-x="['left','left','left','left']"
                                                                         data-hoffset="['0','0','0','15']"
                                                                         data-y="['middle','middle','middle','middle']"
                                                                         data-voffset="['-143','-131','-127','-203']"
                                                                         data-width="none"
                                                                         data-height="none"
                                                                         data-whitespace="nowrap"
                                                                         data-visibility="['on','on','on','off']"

                                                                         data-type="image"
                                                                         data-responsive_offset="on"

                                                                         data-frames='[{"delay":700,"speed":800,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Circ.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 5;">{{--<img
                                                                                src="http://anwalt.mikado-themes.com/wp-content/uploads/2018/03/h1-slider1-img-1.png"
                                                                                alt="i"
                                                                                data-ww="['216px','191px','191px','216px']"
                                                                                data-hh="['51px','45px','45px','51px']"
                                                                                width="216" height="51" data-no-retina>--}}
                                                                    </div>

                                                                    <!-- LAYER NR. 2 -->
                                                                    <div class="tp-caption   tp-resizeme"
                                                                         id="slide-2-layer-1"
                                                                         data-x="['left','left','left','left']"
                                                                         data-hoffset="['0','0','0','15']"
                                                                         data-y="['middle','middle','middle','middle']"
                                                                         data-voffset="['-52','-51','-48','-112']"
                                                                         data-fontsize="['80','70','60','45']"
                                                                         data-lineheight="['110','90','80','55']"
                                                                         data-width="['none','none','none','303']"
                                                                         data-height="['none','none','none','111']"
                                                                         data-whitespace="['nowrap','nowrap','nowrap','normal']"

                                                                         data-type="text"
                                                                         data-responsive_offset="on"

                                                                         data-frames='[{"delay":900,"speed":800,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Circ.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 6; white-space: nowrap; font-size: 80px; line-height: 110px; font-weight: 400; color: #0077c0; letter-spacing: 0px;font-family:Lustria;">
                                                                        <span id="tit1" style="font-size: 48px; font-family: 'Microsoft Yi Baiti'!important;">GDPR</span>
                                                                    </div>

                                                                    <!-- LAYER NR. 3 -->
                                                                    <div class="tp-caption   tp-resizeme"
                                                                         id="slide-2-layer-2"
                                                                         data-x="['left','left','left','left']"
                                                                         data-hoffset="['0','0','0','15']"
                                                                         data-y="['middle','middle','middle','middle']"
                                                                         data-voffset="['43','36','37','10']"
                                                                         data-fontsize="['21','21','16','16']"
                                                                         data-lineheight="['30','30','26','26']"
                                                                         data-width="['689','689','476','270']"
                                                                         data-height="['61','61','64','none']"
                                                                         data-whitespace="normal"

                                                                         data-type="text"
                                                                         data-responsive_offset="on"

                                                                         data-frames='[{"delay":1100,"speed":800,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Circ.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="margin-bottom:20px;z-index: 7; min-width: 689px; max-width: 689px; max-width: 61px; max-width: 61px; white-space: normal; font-size: 21px; line-height: 30px; font-weight: 300; color: #4e4e4e; letter-spacing: 0px;font-family:Open Sans;">
                                                                        Il GDPR sarà pienamente operativo dal 25 Maggio 2018, termine entro il quale tutte le aziende europee devono adottare le misure adeguate in base al nuovo Regolamento Europeo EU-GDPR 2016/679
                                                                    </div>

                                                                    <!-- LAYER NR. 4 -->
                                                                    <div class="tp-caption  "
                                                                         id="slide-2-layer-4"
                                                                         data-x="['left','left','left','left']"
                                                                         data-hoffset="['1','0','0','14']"
                                                                         data-y="['middle','middle','middle','middle']"
                                                                         data-voffset="['182','128','122','122']"
                                                                         data-width="none"
                                                                         data-height="none"
                                                                         data-whitespace="nowrap"

                                                                         data-type="text"
                                                                         data-responsive_offset="on"
                                                                         data-responsive="off"
                                                                         data-frames='[{"delay":1300,"speed":800,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Circ.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 8; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #000000; letter-spacing: 0px;">
                                                                        <a itemprop="url" href="{{route('gdpr')}}" target="_self"
                                                                           class="mkdf-btn mkdf-btn-medium mkdf-btn-solid ombra" style="background-color: #95b9e0;">
                                                                            <span class="mkdf-btn-text">Approfondisci</span>
                                                                        </a></div>

                                                                    <!-- LAYER NR. 5 -->
                                                                    {{--<div class="tp-caption  "
                                                                         id="slide-2-layer-5"
                                                                         data-x="['left','left','left','left']"
                                                                         data-hoffset="['205','210','210','15']"
                                                                         data-y="['middle','middle','middle','middle']"
                                                                         data-voffset="['142','128','122','180']"
                                                                         data-width="none"
                                                                         data-height="none"
                                                                         data-whitespace="nowrap"
                                                                         data-visibility="['on','on','on','off']"

                                                                         data-type="text"
                                                                         data-responsive_offset="on"
                                                                         data-responsive="off"
                                                                         data-frames='[{"delay":1300,"speed":800,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Circ.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 9; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #000000; letter-spacing: 0px;">
                                                                        <a itemprop="url"
                                                                           href="https://themeforest.net/item/anwalt-a-lawyer-and-law-office-theme/21707963?ref=Mikado-Themes"
                                                                           target="_blank"
                                                                           class="mkdf-btn mkdf-btn-medium mkdf-btn-outline">
                                                                            <span class="mkdf-btn-text">Purchase</span>
                                                                        </a></div>--}}
                                                                </li>
                                                                <!-- SLIDE  -->
                                                                <li data-index="rs-5" data-transition="slideremoveleft"
                                                                    data-slotamount="default" data-hideafterloop="0"
                                                                    data-hideslideonmobile="off" data-easein="default"
                                                                    data-easeout="default" data-masterspeed="default"
                                                                    data-thumb="{{asset('img/terza.jpg')}}"
                                                                    data-rotate="0" data-saveperformance="off"
                                                                    data-title="Slide" data-param1="" data-param2=""
                                                                    data-param3="" data-param4="" data-param5=""
                                                                    data-param6="" data-param7="" data-param8=""
                                                                    data-param9="" data-param10="" data-description="">
                                                                    <!-- MAIN IMAGE -->
                                                                    <img src="{{asset('img/terza.jpg')}}"
                                                                         alt="i" title="terza"
                                                                         width="1920" height="790"
                                                                         data-bgposition="center center"
                                                                         data-bgfit="cover" data-bgrepeat="no-repeat"
                                                                         data-bgparallax="8" class="rev-slidebg"
                                                                         data-no-retina>
                                                                    <!-- LAYERS -->

                                                                    <!-- LAYER NR. 6 -->
                                                                    <div class="tp-caption   tp-resizeme"
                                                                         id="slide-5-layer-1"
                                                                         data-x="['left','left','left','left']"
                                                                         data-hoffset="['0','0','0','15']"
                                                                         data-y="['middle','middle','middle','middle']"
                                                                         data-voffset="['-143','-131','-127','-203']"
                                                                         data-width="none"
                                                                         data-height="none"
                                                                         data-whitespace="nowrap"
                                                                         data-visibility="['on','on','on','off']"

                                                                         data-type="image"
                                                                         data-responsive_offset="on"

                                                                         data-frames='[{"delay":700,"speed":800,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Circ.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 5;">{{--<img
                                                                                src="http://anwalt.mikado-themes.com/wp-content/uploads/2018/03/h1-slider1-img-1.png"
                                                                                alt="i"
                                                                                data-ww="['216px','191','191px','216px']"
                                                                                data-hh="['51px','45px','45px','51px']"
                                                                                width="216" height="51" data-no-retina>--}}
                                                                    </div>

                                                                    <!-- LAYER NR. 7 -->
                                                                    <div class="tp-caption   tp-resizeme"
                                                                         id="slide-5-layer-2"
                                                                         data-x="['left','left','left','left']"
                                                                         data-hoffset="['0','0','0','15']"
                                                                         data-y="['middle','middle','middle','middle']"
                                                                         data-voffset="['-52','-51','-48','-112']"
                                                                         data-fontsize="['80','70','60','45']"
                                                                         data-lineheight="['110','90','80','55']"
                                                                         data-width="['none','none','none','303']"
                                                                         data-height="['none','none','none','111']"
                                                                         data-whitespace="['nowrap','nowrap','nowrap','normal']"

                                                                         data-type="text"
                                                                         data-responsive_offset="on"

                                                                         data-frames='[{"delay":900,"speed":800,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Circ.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 6; white-space: nowrap; font-size: 80px; line-height: 110px; font-weight: 400; color: #0077c0; letter-spacing: 0px;font-family:Lustria;">
                                                                        <span id="tit2" style="font-family: 'Microsoft Yi Baiti'!important; font-size: 48px">FORMAZIONE</span>
                                                                    </div>

                                                                    <!-- LAYER NR. 8 -->
                                                                    <div class="tp-caption   tp-resizeme"
                                                                         id="slide-5-layer-3"
                                                                         data-x="['left','left','left','left']"
                                                                         data-hoffset="['0','0','0','15']"
                                                                         data-y="['middle','middle','middle','middle']"
                                                                         data-voffset="['43','36','37','10']"
                                                                         data-fontsize="['21','21','16','16']"
                                                                         data-lineheight="['30','30','26','26']"
                                                                         data-width="['689','689','489','270']"
                                                                         data-height="['61','61','64','none']"
                                                                         data-whitespace="normal"

                                                                         data-type="text"
                                                                         data-responsive_offset="on"

                                                                         data-frames='[{"delay":1100,"speed":800,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Circ.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 7; min-width: 689px; max-width: 689px; max-width: 61px; max-width: 61px; white-space: normal; font-size: 21px; line-height: 30px; font-weight: 300; color: #4e4e4e; letter-spacing: 0px;font-family:Open Sans;">
                                                                         Adeguata istruzione a chi dovrà trattare i dati
                                                                    </div>

                                                                    <!-- LAYER NR. 9 -->
                                                                    <div class="tp-caption  "
                                                                         id="slide-5-layer-4"
                                                                         data-x="['left','left','left','left']"
                                                                         data-hoffset="['0','0','0','15']"
                                                                         data-y="['middle','middle','middle','middle']"
                                                                         data-voffset="['142','128','122','122']"
                                                                         data-width="none"
                                                                         data-height="none"
                                                                         data-whitespace="nowrap"

                                                                         data-type="text"
                                                                         data-responsive_offset="on"
                                                                         data-responsive="off"
                                                                         data-frames='[{"delay":1300,"speed":800,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Circ.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 8; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #000000; letter-spacing: 0px;">
                                                                        <a itemprop="url" href="{{route('formazione')}}" target="_self"
                                                                           class="mkdf-btn mkdf-btn-medium mkdf-btn-solid" style="background-color: #95b9e0;">
                                                                            <span class="mkdf-btn-text">Approfondisci</span>
                                                                        </a></div>

                                                                    <!-- LAYER NR. 10 -->
                                                                    {{--<div class="tp-caption  "
                                                                         id="slide-5-layer-5"
                                                                         data-x="['left','left','left','left']"
                                                                         data-hoffset="['205','210','210','15']"
                                                                         data-y="['middle','middle','middle','middle']"
                                                                         data-voffset="['142','128','122','180']"
                                                                         data-width="none"
                                                                         data-height="none"
                                                                         data-whitespace="nowrap"
                                                                         data-visibility="['on','on','on','off']"

                                                                         data-type="text"
                                                                         data-responsive_offset="on"
                                                                         data-responsive="off"
                                                                         data-frames='[{"delay":1300,"speed":800,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Circ.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 9; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #000000; letter-spacing: 0px;">
                                                                        <a itemprop="url"
                                                                           href="https://themeforest.net/item/anwalt-a-lawyer-and-law-office-theme/21707963?ref=Mikado-Themes"
                                                                           target="_blank"
                                                                           class="mkdf-btn mkdf-btn-medium mkdf-btn-outline">
                                                                            <span class="mkdf-btn-text">Purchase</span>
                                                                        </a></div>--}}
                                                                </li>
                                                                <!-- SLIDE  -->
                                                                <li data-index="rs-6" data-transition="slideremoveleft"
                                                                    data-slotamount="default" data-hideafterloop="0"
                                                                    data-hideslideonmobile="off" data-easein="default"
                                                                    data-easeout="default" data-masterspeed="default"
                                                                    data-thumb="{{asset('img/seconda.jpg')}}"
                                                                    data-rotate="0" data-saveperformance="off"
                                                                    data-title="Slide" data-param1="" data-param2=""
                                                                    data-param3="" data-param4="" data-param5=""
                                                                    data-param6="" data-param7="" data-param8=""
                                                                    data-param9="" data-param10="" data-description="">
                                                                    <!-- MAIN IMAGE -->
                                                                    <img src="{{asset('img/seconda.jpg')}}"
                                                                         alt="i" title="seconda"
                                                                         width="1920" height="790"
                                                                         data-bgposition="center center"
                                                                         data-bgfit="cover" data-bgrepeat="no-repeat"
                                                                         data-bgparallax="8" class="rev-slidebg"
                                                                         data-no-retina>
                                                                    <!-- LAYERS -->

                                                                    <!-- LAYER NR. 11 -->
                                                                    <div class="tp-caption   tp-resizeme"
                                                                         id="slide-6-layer-1"
                                                                         data-x="['left','left','left','left']"
                                                                         data-hoffset="['0','0','0','15']"
                                                                         data-y="['middle','middle','middle','middle']"
                                                                         data-voffset="['-143','-131','-127','-203']"
                                                                         data-width="none"
                                                                         data-height="none"
                                                                         data-whitespace="nowrap"
                                                                         data-visibility="['on','on','on','off']"

                                                                         data-type="image"
                                                                         data-responsive_offset="on"

                                                                         data-frames='[{"delay":700,"speed":800,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Circ.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 5;">{{--<img
                                                                                src="http://anwalt.mikado-themes.com/wp-content/uploads/2018/03/h1-slider1-img-1.png"
                                                                                alt="i"
                                                                                data-ww="['216px','191px','191','216px']"
                                                                                data-hh="['51px','45px','45px','51px']"
                                                                                width="216" height="51" data-no-retina>--}}
                                                                    </div>

                                                                    <!-- LAYER NR. 12 -->
                                                                    <div class="tp-caption   tp-resizeme"
                                                                         id="slide-6-layer-2"
                                                                         data-x="['left','left','left','left']"
                                                                         data-hoffset="['0','0','0','15']"
                                                                         data-y="['middle','middle','middle','middle']"
                                                                         data-voffset="['-52','-51','-48','-112']"
                                                                         data-fontsize="['80','70','60','45']"
                                                                         data-lineheight="['110','90','80','55']"
                                                                         data-width="['none','none','none','303']"
                                                                         data-height="['none','none','none','111']"
                                                                         data-whitespace="['nowrap','nowrap','nowrap','normal']"

                                                                         data-type="text"
                                                                         data-responsive_offset="on"

                                                                         data-frames='[{"delay":900,"speed":800,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Circ.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 6; white-space: nowrap; font-size: 80px; line-height: 110px; font-weight: 400; color: #0077c0; letter-spacing: 0px;font-family:Lustria;">
                                                                        <span id="tit3" style="font-family: 'Microsoft Yi Baiti'!important; font-size: 48px">SOS Indebitati</span>
                                                                    </div>

                                                                    <!-- LAYER NR. 13 -->
                                                                    <div class="tp-caption   tp-resizeme"
                                                                         id="slide-6-layer-3"
                                                                         data-x="['left','left','left','left']"
                                                                         data-hoffset="['1','0','0','15']"
                                                                         data-y="['middle','middle','middle','middle']"
                                                                         data-voffset="['42','36','37','10']"
                                                                         data-fontsize="['21','21','16','16']"
                                                                         data-lineheight="['30','30','26','26']"
                                                                         data-width="['689','689','470','270']"
                                                                         data-height="['61','61','64','none']"
                                                                         data-whitespace="normal"

                                                                         data-type="text"
                                                                         data-responsive_offset="on"

                                                                         data-frames='[{"delay":1100,"speed":800,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Circ.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 7; min-width: 689px; max-width: 689px; max-width: 61px; max-width: 61px; white-space: normal; font-size: 21px; line-height: 30px; font-weight: 300; color: #4e4e4e; letter-spacing: 0px;font-family:Open Sans;">
                                                                        Anatocismo, usura e cartelle ex Equitalia
                                                                    </div>

                                                                    <!-- LAYER NR. 14 -->
                                                                    <div class="tp-caption  "
                                                                         id="slide-6-layer-4"
                                                                         data-x="['left','left','left','left']"
                                                                         data-hoffset="['1','0','0','15']"
                                                                         data-y="['middle','middle','middle','middle']"
                                                                         data-voffset="['142','128','122','122']"
                                                                         data-width="none"
                                                                         data-height="none"
                                                                         data-whitespace="nowrap"

                                                                         data-type="text"
                                                                         data-responsive_offset="on"
                                                                         data-responsive="off"
                                                                         data-frames='[{"delay":1300,"speed":800,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Circ.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 8; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #000000; letter-spacing: 0px;">
                                                                        <a itemprop="url" href="{{route('equitalia')}}" target="_self"
                                                                           class="mkdf-btn mkdf-btn-medium mkdf-btn-solid" style="background-color: #95b9e0;">
                                                                            <span class="mkdf-btn-text">Approfondisci</span>
                                                                        </a></div>

                                                                    <!-- LAYER NR. 15 -->
                                                                    {{--<div class="tp-caption  "
                                                                         id="slide-6-layer-5"
                                                                         data-x="['left','left','left','left']"
                                                                         data-hoffset="['205','210','210','15']"
                                                                         data-y="['middle','middle','middle','middle']"
                                                                         data-voffset="['142','128','122','180']"
                                                                         data-width="none"
                                                                         data-height="none"
                                                                         data-whitespace="nowrap"
                                                                         data-visibility="['on','on','on','off']"

                                                                         data-type="text"
                                                                         data-responsive_offset="on"
                                                                         data-responsive="off"
                                                                         data-frames='[{"delay":1300,"speed":800,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Circ.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 9; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #000000; letter-spacing: 0px;">
                                                                        <a itemprop="url"
                                                                           href="https://themeforest.net/item/anwalt-a-lawyer-and-law-office-theme/21707963?ref=Mikado-Themes"
                                                                           target="_blank"
                                                                           class="mkdf-btn mkdf-btn-medium mkdf-btn-outline">
                                                                            <span class="mkdf-btn-text">Purchase</span>
                                                                        </a></div>--}}
                                                                </li>
                                                            </ul>
                                                            <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                                                var htmlDivCss = "";
                                                                if (htmlDiv) {
                                                                    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                                } else {
                                                                    var htmlDiv = document.createElement("div");
                                                                    htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                                                    document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                                                }
                                                            </script>
                                                            <div class="tp-bannertimer tp-bottom"
                                                                 style="visibility: hidden !important;"></div>
                                                        </div>
                                                        <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                                            var htmlDivCss = "";
                                                            if (htmlDiv) {
                                                                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                            } else {
                                                                var htmlDiv = document.createElement("div");
                                                                htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                                                document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                                            }
                                                        </script>
                                                        <script type="text/javascript">
                                                            if (setREVStartSize !== undefined) setREVStartSize(
                                                                {
                                                                    c: '#rev_slider_2_1',
                                                                    responsiveLevels: [1920, 1441, 1025, 480],
                                                                    gridwidth: [1300, 1100, 600, 300],
                                                                    gridheight: [760, 500, 550, 450],
                                                                    sliderLayout: 'fullwidth'
                                                                });

                                                            var revapi2,
                                                                tpj;
                                                            (function () {
                                                                if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad); else onLoad();
                                                                function onLoad() {
                                                                    if (tpj === undefined) {
                                                                        tpj = jQuery;
                                                                        if ("off" == "on") tpj.noConflict();
                                                                    }
                                                                    if (tpj("#rev_slider_2_1").revolution == undefined) {
                                                                        revslider_showDoubleJqueryError("#rev_slider_2_1");
                                                                    } else {
                                                                        revapi2 = tpj("#rev_slider_2_1").show().revolution({
                                                                            sliderType: "standard",
                                                                            jsFileLocation: "//anwalt.mikado-themes.com/wp-content/plugins/revslider/public/assets/js/",
                                                                            sliderLayout: "fullwidth",
                                                                            dottedOverlay: "none",
                                                                            delay: 7000,
                                                                            navigation: {
                                                                                keyboardNavigation: "on",
                                                                                keyboard_direction: "horizontal",
                                                                                mouseScrollNavigation: "off",
                                                                                mouseScrollReverse: "default",
                                                                                onHoverStop: "off",
                                                                                /*arrows: {
                                                                                    style: "anwalt-navigation",
                                                                                    enable: true,
                                                                                    hide_onmobile: true,
                                                                                    hide_under: 1025,
                                                                                    hide_onleave: false,
                                                                                    tmp: '',
                                                                                    left: {
                                                                                        h_align: "left",
                                                                                        v_align: "center",
                                                                                        h_offset: 20,
                                                                                        v_offset: 0
                                                                                    },
                                                                                    right: {
                                                                                        h_align: "right",
                                                                                        v_align: "center",
                                                                                        h_offset: 20,
                                                                                        v_offset: 0
                                                                                    }
                                                                                }
                                                                                ,*/
                                                                                bullets: {
                                                                                    enable: true,
                                                                                    hide_onmobile: false,
                                                                                    style: "anwalt-navigation",
                                                                                    hide_onleave: false,
                                                                                    direction: "horizontal",
                                                                                    h_align: "center",
                                                                                    v_align: "bottom",
                                                                                    h_offset: 0,
                                                                                    v_offset: 20,
                                                                                    space: 15,
                                                                                    tmp: ''
                                                                                }
                                                                            },
                                                                            viewPort: {
                                                                                enable: true,
                                                                                outof: "wait",
                                                                                visible_area: "99%",
                                                                                presize: false
                                                                            },
                                                                            responsiveLevels: [1920, 1441, 1025, 480],
                                                                            visibilityLevels: [1920, 1441, 1025, 480],
                                                                            gridwidth: [1300, 1100, 600, 300],
                                                                            gridheight: [760, 500, 550, 450],
                                                                            lazyType: "none",
                                                                            parallax: {
                                                                                type: "mouse",
                                                                                origo: "enterpoint",
                                                                                speed: 400,
                                                                                speedbg: 0,
                                                                                speedls: 0,
                                                                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                                                                            },
                                                                            shadow: 0,
                                                                            spinner: "off",
                                                                            stopLoop: "off",
                                                                            stopAfterLoops: -1,
                                                                            stopAtSlide: -1,
                                                                            shuffle: "off",
                                                                            autoHeight: "off",
                                                                            disableProgressBar: "on",
                                                                            hideThumbsOnMobile: "off",
                                                                            hideSliderAtLimit: 0,
                                                                            hideCaptionAtLimit: 0,
                                                                            hideAllCaptionAtLilmit: 0,
                                                                            debugMode: false,
                                                                            fallbacks: {
                                                                                simplifyAll: "off",
                                                                                nextSlideOnWindowFocus: "off",
                                                                                disableFocusListener: false,
                                                                            }
                                                                        });
                                                                    }
                                                                    ;
                                                                    /* END OF revapi call */

                                                                };
                                                                /* END OF ON LOAD FUNCTION */
                                                            }());
                                                            /* END OF WRAPPING FUNCTION */
                                                        </script>
                                                        <script>
                                                            var htmlDivCss = unescape("%23rev_slider_2_1%20.anwalt-navigation.tparrows%20%7B%0A%20%20width%3A%2040px%3B%0A%20%20height%3A%2040px%3B%0A%20%20line-height%3A%2040px%3B%0A%20%20background%3A%20transparent%3B%0A%20%7D%0A%20%23rev_slider_2_1%20.anwalt-navigation.tparrows%3Abefore%20%7B%0A%20color%3A%20%23000%3B%0A%20font-size%3A36px%3B%0A%20font-family%3A%20%22Linearicons-Free%22%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%23rev_slider_2_1%20.anwalt-navigation.tparrows%3Ahover%3Abefore%20%7B%0A%20%20color%3A%20%23aa9166%3B%0A%7D%0A%20%20%0A%23rev_slider_2_1%20.anwalt-navigation.tparrows.tp-leftarrow%3Abefore%7B%0A%20%20content%3A%20%22%5Ce875%22%3B%0A%7D%0A%0A%23rev_slider_2_1%20.anwalt-navigation.tparrows.tp-rightarrow%3Abefore%7B%0A%20%20content%3A%20%22%5Ce876%22%3B%0A%7D%0A%23rev_slider_2_1%20.anwalt-navigation%20.tp-bullet%7B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20width%3A%2010px%3B%0A%20%20height%3A%2010px%3B%0A%20%20margin%3A%200%204px%3B%0A%20%20border-radius%3A%203em%3B%0A%20%20background-color%3A%20transparent%3B%0A%20%20border%3A%202px%20solid%20%23c2aa80%3B%0A%20%20box-sizing%3A%20border-box%3B%0A%20%20-webkit-transition%3A%20background-color%20.2s%20ease-out%2Cborder%20.2s%20ease-out%3B%0A%20%20-moz-transition%3A%20background-color%20.2s%20ease-out%2Cborder%20.2s%20ease-out%3B%0A%20%20transition%3A%20background-color%20.2s%20ease-out%2Cborder%20.2s%20ease-out%3B%0A%7D%0A%23rev_slider_2_1%20.anwalt-navigation%20.tp-bullet.selected%2C%0A%23rev_slider_2_1%20.anwalt-navigation%20.tp-bullet%3Ahover%20%7B%0A%20%20background-color%3A%20%23c2aa80%3B%0A%7D%0A");

                                                            var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                                            if (htmlDiv) {
                                                                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                            }
                                                            else {
                                                                var htmlDiv = document.createElement('div');
                                                                htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                                                document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                                            }
                                                        </script>
                                                    </div><!-- END REVOLUTION SLIDER --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mkdf-row-grid-section-wrapper ">
                                    <div class="mkdf-row-grid-section">
                                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1520428609185">
                                            <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-0 vc_col-lg-3 vc_col-md-offset-1 vc_col-md-5">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="mkdf-iwt clearfix  mkdf-iwt-icon-top mkdf-iwt-icon-medium ">
                                                            <div class="mkdf-iwt-icon">
                                                                <a itemprop="url" href="{{route('general')}}" target="_self">
					    <span class="mkdf-icon-shortcode mkdf-normal    mkdf-icon-medium">
        <span class="mkdf-icon-bckg-holder"></span>
                    <span style="font-size: 35px; color: #0077c0; font-weight: 900; text-shadow: 2px 2px #000000;">G</span>                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="mkdf-iwt-content">
                                                                <h5 class="mkdf-iwt-title" style="margin-top: 9px">
                                                                    <a itemprop="url" href="{{route('general')}}" target="_self">
                                                                        <span class="mkdf-iwt-title-text" style="">GENERAL</span>
                                                                    </a>
                                                                </h5>
                                                                <p class="mkdf-iwt-text" style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">
                                                                    Le parti in gioco
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
                                                                <a itemprop="url" href="{{route('data')}}" target="_self">
					    <span class="mkdf-icon-shortcode mkdf-normal    mkdf-icon-medium">
        <span class="mkdf-icon-bckg-holder"></span>
                    <span style="font-size: 35px; color: #0077c0; font-weight: 900; text-shadow: 2px 2px #000000;">D</span>                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="mkdf-iwt-content">
                                                                <h5 class="mkdf-iwt-title" style="margin-top: 9px">
                                                                    <a itemprop="url" href="{{route('data')}}" target="_self">
                                                                        <span class="mkdf-iwt-title-text">DATA</span>
                                                                    </a>
                                                                </h5>
                                                                <p class="mkdf-iwt-text" style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">
                                                                    Cosa intendiamo per dati personali?

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
                                                                <a itemprop="url" href="{{route('protection')}}" target="_self">
					    <span class="mkdf-icon-shortcode mkdf-normal    mkdf-icon-medium">
        <span class="mkdf-icon-bckg-holder"></span>
                    <span style="font-size: 35px; color: #0077c0; font-weight: 900; text-shadow: 2px 2px #000000;">P</span>                   </span>
                                                                </a>
                                                            </div>
                                                            <div class="mkdf-iwt-content">
                                                                <h5 class="mkdf-iwt-title" style="margin-top: 9px">
                                                                    <a itemprop="url" href="{{route('protection')}}" target="_self">
                                                                        <span class="mkdf-iwt-title-text">PROTECTION</span>
                                                                    </a>
                                                                </h5>
                                                                <p class="mkdf-iwt-text" style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">
                                                                    Cosa è il diritto alla protezione dei dati personali?
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
                                                                <a itemprop="url" href="{{route('regulation')}}" target="_self">
					    <span class="mkdf-icon-shortcode mkdf-normal    mkdf-icon-medium">
        <span class="mkdf-icon-bckg-holder"></span>
                    <span style="font-size: 35px; color: #0077c0; font-weight: 900; text-shadow: 2px 2px #000000;">R</span>                   </span>
                                                                </a>
                                                            </div>
                                                            <div class="mkdf-iwt-content">
                                                                <h5 class="mkdf-iwt-title" style="margin-top: 9px">
                                                                    <a itemprop="url" href="{{route('regulation')}}" target="_self">
                                                                        <span class="mkdf-iwt-title-text">REGULATION</span>
                                                                    </a>
                                                                </h5>
                                                                <p class="mkdf-iwt-text" style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">
                                                                    Trattametno dei dati
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
                                <div class="vc_row wpb_row vc_row-fluid call-us vc_custom_1522659030108 mkdf-content-aligment-center"
                                     style="background-color:#95B9E0">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">

                                                        {{--<div id="info">
                                                            @include('cookieConsent::index')
                                                        </div>--}}

                                                        <h4><span style="font-size:50px; font-family: 'Microsoft Yi Baiti'!important;color: #ffffff;">Protezione dei Dati o GDPR? Contattaci <br> </span>
                                                            <div style="" class="wpb_wrapper">
                                                            <div style="font-size:50px; font-family: 'Microsoft Yi Baiti'!important; text-align: left; margin: 0 auto; width: 400px;">
                                                                <a href="tel:+390575353609">+39 0575 353609</a> <br> <a href="tel:+39057524468">+39 0575 24468</a>
                                                            </div>
                                                            </div>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mkdf-row-grid-section-wrapper ">
                                    <div class="mkdf-row-grid-section">
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="mkdf-elements-holder   mkdf-two-columns  mkdf-responsive-mode-1024 ">
                                                            <div class="mkdf-eh-item     "
                                                                 data-item-class="mkdf-eh-custom-6260"
                                                                 data-1024-1366="0% 7% 4.4% 8% "
                                                                 data-768-1024="103px 133px 0px"
                                                                 data-680-768="103px 53px 0px" data-680="101px 0% 0px">
                                                                <div class="mkdf-eh-item-inner">
                                                                    <div class="mkdf-eh-item-content mkdf-eh-custom-6260"
                                                                         style="padding: 0 12% 4% 12%">

                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                            <div class="wpb_wrapper">
                                                                                <h4 style="font-size: 40px; font-family: 'Microsoft Yi Baiti'!important;">Siamo qui per voi</h4>

                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_empty_space" style="height: 7px">
                                                                            <span class="vc_empty_space_inner"></span>
                                                                        </div>

                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                            <div class="wpb_wrapper">
                                                                                <p style="text-align: justify; font-size: 26px">Da oltre 35 anni il nostro team  si occupa di gestione dei dati aziendali, concentrandosi sulla fornitura di servizi di qualità dando valore ai nostri Clienti. Raggiungiamo questo obiettivo attraverso soluzioni pratiche e innovative che aiutano i nostri clienti.</p>

                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_empty_space"
                                                                             style="height: 23px"><span
                                                                                    class="vc_empty_space_inner"></span>
                                                                        </div>
                                                                        <div class="mkdf-single-image-holder   ">
                                                                            <div class="mkdf-si-inner">
                                                                                <img width="216" height="51"
                                                                                     src="http://anwalt.mikado-themes.com/wp-content/uploads/2018/03/h1-custom-icon-img-1.png"
                                                                                     class="attachment-full size-full"
                                                                                     alt="f"/></div>
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
                                                                            <div class="mkdf-si-inner">
                                                                                <img width="800" height="534"
                                                                                     src="{{asset('img/sede.jpeg')}}"
                                                                                     class="attachment-full size-full ombra"
                                                                                     alt="g"
                                                                                     srcset="{{asset('img/sede.jpeg')}}"
                                                                                     sizes="(max-width: 800px) 100vw, 800px"/>
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
                                <div class="mkdf-row-grid-section-wrapper mkdf-content-aligment-center"
                                     style="background-color:rgba(194,170,128,0.08)">
                                    <div class="mkdf-row-grid-section">
                                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1522405812816">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="mkdf-section-title-holder  "
                                                             style="text-align: center">
                                                            <div class="mkdf-st-inner">
                                                                <h3 class="mkdf-st-title" style="font-size:62px; font-family: 'Microsoft Yi Baiti'!important;">
                                                                    I nostri servizi </h3>
                                                                <div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
                                                                    <div class="mkdf-separator"
                                                                         style="width: 143px;border-bottom-width: 2px"></div>
                                                                </div>
                                                                <h5 class="mkdf-st-text" style="font-family: 'Microsoft Yi Baiti'!important;">
                                                                   <i> "Chi continua ad imparare, giorno dopo giorno, resta giovane.
                                                                    La cosa migliore da fare nella vita è mantenere la propria mente giovane ed aperta."
                                                                    <br>Henry Ford (Industriale)</i> </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mkdf-row-grid-section-wrapper mkdf-content-aligment-center"
                                     style="background-color:rgba(194,170,128,0.08)">
                                    <div class="mkdf-row-grid-section">
                                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1521814924146">
                                            <div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-1 vc_col-lg-2 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="mkdf-single-image-holder   ">
                                                            <div class="mkdf-si-inner">
                                                               <a href="{{route('privacy')}}"> <img width="800" height="492"
                                                                     src="{{asset('img/privacy.jpg')}}"
                                                                     class="attachment-full size-full ombra" alt="i"
                                                                     srcset="{{asset('img/privacy.jpg')}}"
                                                                     sizes="(max-width: 800px) 100vw, 800px"/>
                                                               </a>
                                                            </div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 37px"><span
                                                                    class="vc_empty_space_inner"></span></div>
                                                        <div class="mkdf-section-title-holder  "
                                                             style="padding: 0 6%;text-align: center">
                                                            <div class="mkdf-st-inner">
                                                                <h5 class="mkdf-st-title">
                                                                    Privacy </h5>
                                                                <p class="mkdf-st-text" style="margin-top: 9px;font-size: 18px!important; font-family: 'Microsoft Yi Baiti'!important;">
                                                                    Adeguati alle normative privacy</p>
                                                            </div>
                                                        </div>
                                                        <div class="mkdf-separator-holder clearfix  mkdf-separator-center "
                                                             style="margin-top: 23px">
                                                            <div class="mkdf-separator"
                                                                 style="border-color: #c2aa80;width: 100px;border-bottom-width: 2px"></div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 60px"><span
                                                                    class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-0 vc_col-lg-2 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="mkdf-single-image-holder   ">
                                                            <div class="mkdf-si-inner">
                                                                <a href="{{route('formazione')}}"> <img width="800" height="492"
                                                                                                       src="{{asset('img/Formazione.jpg')}}"
                                                                                                       class="attachment-full size-full ombra" alt="i"
                                                                                                       srcset="{{asset('img/Formazione.jpg')}}"
                                                                                                       sizes="(max-width: 800px) 100vw, 800px"/>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 37px"><span
                                                                    class="vc_empty_space_inner"></span></div>
                                                        <div class="mkdf-section-title-holder  "
                                                             style="padding: 0 6%;text-align: center">
                                                            <div class="mkdf-st-inner">
                                                                <h5 class="mkdf-st-title">
                                                                    Formazione </h5>
                                                                <p class="mkdf-st-text" style="font-size: 18px!important; font-family: 'Microsoft Yi Baiti'!important; margin-top: 9px">
                                                                    Adeguata istruzione a chi dovrà trattare i dati  </p>
                                                            </div>
                                                        </div>
                                                        <div class="mkdf-separator-holder clearfix  mkdf-separator-center "
                                                             style="margin-top: 23px">
                                                            <div class="mkdf-separator"
                                                                 style="border-color: #c2aa80;width: 100px;border-bottom-width: 2px"></div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 60px"><span
                                                                    class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-0 vc_col-lg-2 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="mkdf-single-image-holder   ">
                                                            <div class="mkdf-si-inner">
                                                                <a href="{{route('temporary')}}"> <img width="800" height="492"
                                                                                                        src="{{asset('img/office.jpg')}}"
                                                                                                        class="attachment-full size-full ombra" alt="i"
                                                                                                        srcset="{{asset('img/office.jpg')}}"
                                                                                                        sizes="(max-width: 800px) 100vw, 800px"/>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 37px"><span
                                                                    class="vc_empty_space_inner"></span></div>
                                                        <div class="mkdf-section-title-holder  "
                                                             style="padding: 0 6%;text-align: center">
                                                            <div class="mkdf-st-inner">
                                                                <h5 class="mkdf-st-title">
                                                                    Temporary Office </h5>
                                                                <p class="mkdf-st-text" style="font-size: 18px!important; font-family: 'Microsoft Yi Baiti'!important; margin-top: 9px">
                                                                    Un ufficio senza i costi dell’Ufficio </p>
                                                            </div>
                                                        </div>
                                                        <div class="mkdf-separator-holder clearfix  mkdf-separator-center "
                                                             style="margin-top: 23px">
                                                            <div class="mkdf-separator"
                                                                 style="border-color: #c2aa80;width: 100px;border-bottom-width: 2px"></div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 60px"><span
                                                                    class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-0 vc_col-lg-2 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="mkdf-single-image-holder   ">
                                                            <div class="mkdf-si-inner">
                                                                <a href="{{route('web')}}">
                                                                    <img width="800" height="492"
                                                                               src="{{asset('img/siti.jpg')}}"
                                                                               class="attachment-full size-full ombra" alt="i"
                                                                               srcset="{{asset('img/siti.jpg')}}"
                                                                               sizes="(max-width: 800px) 100vw, 800px"/>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 37px"><span
                                                                    class="vc_empty_space_inner"></span></div>
                                                        <div class="mkdf-section-title-holder  "
                                                             style="padding: 0 6%;text-align: center">
                                                            <div class="mkdf-st-inner">
                                                                <h5 class="mkdf-st-title">
                                                                    Siti Web </h5>
                                                                <p class="mkdf-st-text" style="font-size: 18px!important; font-family: 'Microsoft Yi Baiti'!important; margin-top: 9px">
                                                                    La tua azienda subito online </p>
                                                            </div>
                                                        </div>
                                                        <div class="mkdf-separator-holder clearfix  mkdf-separator-center "
                                                             style="margin-top: 23px">
                                                            <div class="mkdf-separator"
                                                                 style="border-color: #c2aa80;width: 100px;border-bottom-width: 2px"></div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 60px"><span
                                                                    class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-0 vc_col-lg-2 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="mkdf-single-image-holder   ">
                                                            <div class="mkdf-si-inner">
                                                                <a href="{{route('equitalia')}}"> <img width="800" height="492"
                                                                          src="{{asset('img/consulenza.jpg')}}"
                                                                          class="attachment-full size-full ombra" alt="i"
                                                                          srcset="{{asset('img/consulenza.jpg')}}"
                                                                          sizes="(max-width: 800px) 100vw, 800px"/>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 37px"><span
                                                                    class="vc_empty_space_inner"></span></div>
                                                        <div class="mkdf-section-title-holder  "
                                                             style="padding: 0 6%;text-align: center">
                                                            <div class="mkdf-st-inner">
                                                                <h5 class="mkdf-st-title">
                                                                    SOS Indebitati </h5>
                                                                <p class="mkdf-st-text" style="font-size: 18px!important; font-family: 'Microsoft Yi Baiti'!important; margin-top: 9px">
                                                                    Anatocismo, usura e cartelle ex Equitalia
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="mkdf-separator-holder clearfix  mkdf-separator-center "
                                                             style="margin-top: 23px">
                                                            <div class="mkdf-separator"
                                                                 style="border-color: #c2aa80;width: 100px;border-bottom-width: 2px"></div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 60px"><span
                                                                    class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mkdf-row-grid-section-wrapper ">
                                    <div class="mkdf-row-grid-section">
                                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1520421283539">


                                            <div class="mkdf-row-grid-section">
                                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1522405848948">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="mkdf-section-title-holder  "
                                                                     style="text-align: center">
                                                                    {{--<div class="mkdf-st-inner">
                                                                        <h3 class="mkdf-st-title">
                                                                            Tabelle dei servizi Privacy</h3>
                                                                        <div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
                                                                            <div class="mkdf-separator"
                                                                                 style="width: 143px;border-bottom-width: 2px"></div>
                                                                        </div>
                                                                        <h6 class="mkdf-st-text">
                                                                            Vi siete adeguati? contattateci </h6>
                                                                    </div>--}}
                                                                    <div >
                                                                        <div style="font-weight: 900;
                                                                            font-size: 55px;

                                                                            color: black;"
                                                                             class="mkdf-st-inner" id="conto">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
                                                                        <div class="mkdf-separator"
                                                                             style="width: 143px;border-bottom-width: 2px"></div>
                                                                    </div>
                                                                    <h6 class="mkdf-st-text">
                                                                       <span id="adeguati" style="font-size: 26px"> </span> <a href="{{route("contatti")}}" style="color: red; font-size: 26px">contattateci</a> </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mkdf-row-grid-section-wrapper mkdf-parallax-row-holder mkdf-content-aligment-center"
                                     data-parallax-bg-image="{{asset('img/palazzihome.jpg')}}"
                                     data-parallax-bg-speed=1>
                                    <div class="mkdf-row-grid-section">
                                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1521548298854">
                                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-1 vc_col-lg-10 vc_col-md-12 vc_col-xs-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="mkdf-testimonials-holder mkdf-testimonials-standard  clearfix">
                                                            <div class="mkdf-testimonials mkdf-owl-slider"
                                                                 data-number-of-items="1" data-enable-loop="yes"
                                                                 data-enable-autoplay="yes" data-slider-speed="10000"
                                                                 data-slider-speed-animation="600"
                                                                 data-enable-navigation="no"
                                                                 data-enable-pagination="yes">
                                                                <div class="mkdf-testimonial-content"
                                                                     id="mkdf-testimonials-485">
                                                                    <div class="mkdf-testimonial-text-holder">
                                                                        <h3 itemprop="name"
                                                                            class="mkdf-testimonial-title entry-title" style="font-family: 'Microsoft Yi Baiti'!important;">
                                                                            Normativa e documentazione</h3>
                                                                        <div class="mkdf-separator-holder clearfix mkdf-separator-center">
                                                                            <div class="mkdf-separator"></div>
                                                                        </div>
                                                                        <h6 class="mkdf-testimonial-text">
                                                                            <a target="_blank" href="{{asset('pdf/dirittiericorsodomande.pdf')}}" style="color: blue">Esercizio dei diritti e ricorso</a>
                                                                        </h6>
                                                                        <span class="mkdf-testimonial-author">
				<span class="mkdf-testimonials-author-name" style="font-family: 'Microsoft Yi Baiti'!important;">Fonte: http://www.garanteprivacy.it</span>
							</span>
                                                                    </div>
                                                                </div>
                                                                <div class="mkdf-testimonial-content"
                                                                     id="mkdf-testimonials-174">
                                                                    <div class="mkdf-testimonial-text-holder">
                                                                        <h3 itemprop="name"
                                                                            class="mkdf-testimonial-title entry-title" style="font-family: 'Microsoft Yi Baiti'!important;">
                                                                            Normativa e documentazione</h3>
                                                                        <div class="mkdf-separator-holder clearfix mkdf-separator-center">
                                                                            <div class="mkdf-separator"></div>
                                                                        </div>
                                                                        <h6 class="mkdf-testimonial-text">
                                                                            <a target="_blank" href="{{asset('pdf/compitigarante.pdf')}}" style="color: blue">Compiti del Garante</a>
                                                                        </h6>
                                                                        <span class="mkdf-testimonial-author">
				<span class="mkdf-testimonials-author-name" style="font-family: 'Microsoft Yi Baiti'!important;">Fonte: http://www.garanteprivacy.it</span>
							</span>
                                                                    </div>
                                                                </div>
                                                                <div class="mkdf-testimonial-content"
                                                                     id="mkdf-testimonials-173">
                                                                    <div class="mkdf-testimonial-text-holder">
                                                                        <h3 itemprop="name"
                                                                            class="mkdf-testimonial-title entry-title" style="font-family: 'Microsoft Yi Baiti'!important;">
                                                                            Normativa e documentazione</h3>
                                                                        <div class="mkdf-separator-holder clearfix mkdf-separator-center">
                                                                            <div class="mkdf-separator"></div>
                                                                        </div>
                                                                        <h6 class="mkdf-testimonial-text">
                                                                            <a target="_blank" href="{{asset('pdf/modelloeserciziodiritti.pdf')}}" style="color: blue">Modello Esercizio dei diritti</a>
                                                                        </h6>
                                                                        <span class="mkdf-testimonial-author">
				<span class="mkdf-testimonials-author-name" style="font-family: 'Microsoft Yi Baiti'!important;">Fonte: http://www.garanteprivacy.it</span>
							</span>
                                                                    </div>
                                                                </div>
                                                                <div class="mkdf-testimonial-content"
                                                                     id="mkdf-testimonials-173">
                                                                    <div class="mkdf-testimonial-text-holder">
                                                                        <h3 itemprop="name"
                                                                            class="mkdf-testimonial-title entry-title" style="font-family: 'Microsoft Yi Baiti'!important;">
                                                                            Normativa e documentazione</h3>
                                                                        <div class="mkdf-separator-holder clearfix mkdf-separator-center">
                                                                            <div class="mkdf-separator"></div>
                                                                        </div>
                                                                        <h6 class="mkdf-testimonial-text">
                                                                            <a target="_blank" href="{{asset('pdf/ricorsoalgarante.pdf')}}" style="color: blue">Ricorso al Garante</a>
                                                                        </h6>
                                                                        <span class="mkdf-testimonial-author">
				<span class="mkdf-testimonials-author-name" style="font-family: 'Microsoft Yi Baiti'!important;">Fonte: http://www.garanteprivacy.it</span>
							</span>
                                                                    </div>
                                                                </div>
                                                                <div class="mkdf-testimonial-content"
                                                                     id="mkdf-testimonials-173">
                                                                    <div class="mkdf-testimonial-text-holder">
                                                                        <h3 itemprop="name"
                                                                            class="mkdf-testimonial-title entry-title" style="font-family: 'Microsoft Yi Baiti'!important;">
                                                                            Normativa e documentazione</h3>
                                                                        <div class="mkdf-separator-holder clearfix mkdf-separator-center">
                                                                            <div class="mkdf-separator"></div>
                                                                        </div>
                                                                        <h6 class="mkdf-testimonial-text">
                                                                            <a target="_blank" href="{{asset('pdf/glossario.pdf')}}" style="color: blue">Glossario</a>
                                                                        </h6>
                                                                        <span class="mkdf-testimonial-author">
				<span class="mkdf-testimonials-author-name" style="font-family: 'Microsoft Yi Baiti'!important;">Fonte: http://www.garanteprivacy.it</span>
							</span>
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
        jQuery('#conto').css('font-size',30);
        jQuery('#tit2').css('font-size',34);
        jQuery('#tit3').css('font-size',34);
        jQuery('.mkdf-testimonial-title').css('font-size',24);
        jQuery('.mkdf-testimonial-author').css('font-size',14);

        /*jQuery('#info').css('height',120);*/

    }

</script>


<script type="text/javascript" src="http://anwalt.mikado-themes.com/wp-content/cache/minify/48fcb.js"></script>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("May 25, 2018 00:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Find the distance between count down date and now
        var distance2 = now - countDownDate;

        // Time calculations for days, hours, minutes and seconds
        var days2 = Math.floor(distance2 / (1000 * 60 * 60 * 24));
        var hours2 = Math.floor((distance2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes2 = Math.floor((distance2 % (1000 * 60 * 60)) / (1000 * 60));
        var seconds2 = Math.floor((distance2 % (1000 * 60)) / 1000);

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        if (distance > 0) {
            document.getElementById("conto").innerHTML = "Il GDPR scade tra <br><br>" + days + " giorni " + hours + " ore "
                + minutes + " minuti " + seconds + " secondi ";
            document.getElementById("adeguati").innerHTML = "Vi siete adeguati?";
        } else {
            document.getElementById("conto").innerHTML = "Il GDPR è scaduto da <br><br>" + days2 + " giorni " + hours2 + " ore "
                + minutes2 + " minuti " + seconds2 + " secondi ";
            document.getElementById("adeguati").innerHTML = "Vi siete adeguati? Per evitare le <b>pesanti</b> sanzioni, ";
        }
    }, 1000);

</script>

</body>
</html>
<!--
Performance optimized by W3 Total Cache. Learn more: https://www.w3-edge.com/products/

Object Caching 13710/0 objects using disk
Page Caching using disk: enhanced
Minified using disk

Served from: anwalt.mikado-themes.com @ 2018-04-29 11:38:43 by W3 Total Cache
-->