<!DOCTYPE html>
<html lang="en-US">
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119522082-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119522082-3');
    </script>

    <meta charset="UTF-8"/>
    {{--<link rel="profile" href="http://gmpg.org/xfn/11"/>--}}

    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
    <title>@yield('titolo')</title>

    <meta name="description" content="Counseling - Privacy dati e sicurezza ICT">
    <meta name="keywords" content="GDPR Arezzo, GDPR consulenza Arezzo, Counseling, Counselingsrl, Counselingsrl.eu, GDPR, General Data Protection Regulation, Privacy, Arezzo, Toscana, Hardware, Software, Sicuerzza, ICT, Dati, Fattura Elettronica">

    <link rel='dns-prefetch' href='//maps.googleapis.com'/>
    <link rel='dns-prefetch' href='//fonts.googleapis.com'/>
    <link rel='dns-prefetch' href='//s.w.org'/>
    {{--<link rel="alternate" type="application/rss+xml" title="Anwalt &raquo; Feed" href="http://anwalt.mikado-themes.com/feed/" />--}}
    {{--<link rel="alternate" type="application/rss+xml" title="Anwalt &raquo; Comments Feed" href="http://anwalt.mikado-themes.com/comments/feed/" />--}}
    <script type="text/javascript">
       /* window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.4\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.4\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "http:\/\/anwalt.mikado-themes.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.4"}
        };*/
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
    @include('partials.links')

</head>

<body class="home page-template page-template-full-width page-template-full-width-php page page-id-13 anwalt-core-1.0 anwalt-ver-1.0 mkdf-smooth-page-transitions mkdf-smooth-page-transitions-preloader mkdf-grid-1300 mkdf-empty-google-api mkdf-sticky-header-on-scroll-down-up mkdf-dropdown-animate-height mkdf-header-standard mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-in-grid-border-disable mkdf-logo-area-border-disable mkdf-side-menu-slide-from-right mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-below-image mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header mkdf-header-top-enabled wpb-js-composer js-comp-ver-5.4.5 vc_responsive mkdf-search-covers-header"
      itemscope itemtype="">
{{--<div class="mkdf-smooth-transition-loader mkdf-mimic-ajax">
    <div class="mkdf-st-loader">
        <div class="mkdf-st-loader1">
            <div class="mkdf-reveal-image"><img
                        src="{{asset('img/logo2.png')}}"
                        alt="spinner"/>
                <div class="mkdf-spinner-revealer"><h2 style="font-family: 'Microsoft Yi Baiti'!important;">Loading...</h2></div>
            </div>
        </div>
    </div>
</div>--}}

<div class="mkdf-wrapper">
    <div class="mkdf-wrapper-inner">



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



    </div> <!-- close div.mkdf-wrapper-inner  -->
</div> <!-- close div.mkdf-wrapper -->

@include('partials.link2')

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


</body>
</html>