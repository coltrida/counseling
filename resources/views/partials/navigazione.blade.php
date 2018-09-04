<section class="mkdf-side-menu">
    <div class="mkdf-close-side-menu-holder">
        <a class="mkdf-close-side-menu mkdf-close-side-menu-icon-pack" href="#">
            <span class="mkdf-icon-linear-icons lnr lnr-cross "><i class="fas fa-times"></i></span> </a>
    </div>
    <div class="mkdf-widget-title-holder"><h4 style="color: white" class="mkdf-widget-title">Login</h4></div>

    <div class="widget mkdf-separator-widget">
        <div class="mkdf-separator-holder clearfix  mkdf-separator-left mkdf-separator-normal"
             style="margin-top: -18px;margin-bottom: 26px">
            <div class="mkdf-separator"
                 style="border-color: #ffffff;border-style: solid;width: 145px;border-bottom-width: 2px"></div>
        </div>
    </div>

    <div id="text-10" class="widget mkdf-sidearea widget_text">
        {{--<div class="mkdf-widget-title-holder"><h5 class="mkdf-widget-title">London Office</h5></div>--}}
        <form method="POST" action="{{ route('login') }}">
            @csrf
                <label for="email" class="" style="font-size: 30px">{{ __('E-Mail') }}</label>

                <div class="">
                    <input id="email" style="border-color:darkgray; border-radius: 5px; color: black; font-size: 20px; width: 250px" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>


                <label for="password" class="" style="font-size: 30px">{{ __('Password') }}</label>

                <div class="">
                    <input id="password" style="border-color:darkgray; border-radius: 5px; color: black; font-size: 20px; width:250px" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>



                <div class="">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>



                <div class="">
                    <button type="submit" class="cornice mkdf-btn mkdf-btn-medium mkdf-btn-solid ombra" style="background-color: #95b9e0">
                        {{ __('Login') }}
                    </button>
                    <br><br>
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>

        </form>
    </div>

    <div class="widget mkdf-separator-widget">
        <div class="mkdf-separator-holder clearfix  mkdf-separator-left mkdf-separator-normal"
             style="margin-top: -18px;margin-bottom: 26px">
            <div class="mkdf-separator"
                 style="border-color: #ffffff;border-style: solid;width: 145px;border-bottom-width: 2px"></div>
        </div>
    </div>

    <div id="text-11" class="widget mkdf-sidearea widget_text">
        <div class="mkdf-widget-title-holder"><h5 class="mkdf-widget-title">Non Sei ancora Registrato?</h5></div>
        <div class="textwidget">
            <p>
                <a href="{{ route('register') }}" class="cornice mkdf-btn mkdf-btn-medium mkdf-btn-solid ombra" style="padding: 10px; border-radius: 5px; background-color: #95b9e0; text-align: center">
                    Registrati per accedere ai servizi riservati
                </a>
            </p>
        </div>
    </div>
</section>


<header class="mkdf-page-header">


    <div class="mkdf-menu-area mkdf-menu-left" style="height: 120px!important;">


        <div class="mkdf-vertical-align-containers">
            <div class="mkdf-position-left"><!--
				 -->
                <div class="mkdf-position-left-inner">


                    <div class="mkdf-logo-wrapper" style="margin-top: -20px!important;">
                        <a class=""
                           href="{{route('index')}}">
                            <h1><img style="width: 300px; margin-top: -20px"
                                 src="{{asset('img/logo4.png')}}"
                                 alt="www.counselingsrl.eu"/>
                            </h1>
                        </a>
                    </div>


                    <nav class="mkdf-main-menu mkdf-drop-down mkdf-default-nav">
                        <ul id="menu-main-menu-navigation" class="clearfix">
                            <li id="nav-menu-item-58"
                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children has_sub wide mkdf-wide-menu-centered">
                                <a href="{{route('index')}}" class=" current "><span class="item_outer"><span class=""
                                                                                                              style="font-size: 40px!important; font-family: 'Microsoft Yi Baiti'!important; ">Home</span><i
                                                class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                            </li>
                            <li id="nav-menu-item-59"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                <a href="{{route('chisiamo')}}" class=""><span class="item_outer"><span
                                                class=""
                                                style="font-size: 40px!important; font-family: 'Microsoft Yi Baiti'!important;">Chi siamo</span><i
                                                class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                            </li>
                            <li id="nav-menu-item-61"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                <a href="#" class=""><span class="item_outer"><span
                                                class=""
                                                style="font-size: 40px!important; font-family: 'Microsoft Yi Baiti'!important;">Servizi</span><i
                                                class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                <div class="second">
                                    <div class="inner">
                                        <ul>
                                            <li id="nav-menu-item-1420"
                                                class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                <a href="{{route('fatturazione')}}"
                                                   class=""><span class="item_outer"><span class="item_text"
                                                                                           style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">Fattura Elettronica</span></span></a>
                                            </li>
                                            <li id="nav-menu-item-1420"
                                                class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                <a href="{{route('privacy')}}"
                                                   class=""><span class="item_outer"><span class="item_text"
                                                                                           style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">Privacy</span></span></a>
                                            </li>
                                            <li id="nav-menu-item-1451"
                                                class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                <a href="{{route('formazione')}}"
                                                   class=""><span class="item_outer"><span class="item_text"
                                                                                           style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">Formazione</span></span></a>
                                            </li>
                                            <li id="nav-menu-item-1450"
                                                class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                <a href="{{route('temporary')}}"
                                                   class=""><span class="item_outer"><span class="item_text"
                                                                                           style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">Temporary Office</span></span></a>
                                            </li>
                                            <li id="nav-menu-item-1450"
                                                class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                <a href="{{route('web')}}"
                                                   class=""><span class="item_outer"><span class="item_text"
                                                                                           style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">Siti Web</span></span></a>
                                            </li>
                                            <li id="nav-menu-item-1450"
                                                class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                <a href="{{route('equitalia')}}"
                                                   class=""><span class="item_outer"><span class="item_text"
                                                                                           style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">SOS Indebitati</span></span></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </li>


                            <li id="nav-menu-item-63"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub wide mkdf-wide-menu-centered">
                                <a href="{{route('contatti')}}" class=""><span class="item_outer"><span
                                                class=""
                                                style="font-size: 40px!important; font-family: 'Microsoft Yi Baiti'!important;">Contatti</span><i
                                                class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                            </li>


                            @auth
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                    <a id="navbarDropdown" class="">
                                        <span class="item_outer">
                                            <span class=""
                                                  style="font-size: 40px!important; font-family: 'Microsoft Yi Baiti'!important;">
                                                {{ Auth::user()->name }}
                                            </span>
                                        </span>
                                    </a>
                                    <div class="second">
                                        <div class="inner">
                                            <ul>
                                                <li id="nav-menu-item-1450"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                    <a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                                       href="{{ route('logout') }}" class="">
                                                        <span class="item_outer">
                                                            <span class="item_text"
                                                                  style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">
                                                                {{ __('Logout') }}
                                                            </span>
                                                        </span>
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                          style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                                <li id="nav-menu-item-1450"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                    <a target="_blank" href="http://portale.bluenext.it"
                                                       class=""><span class="item_outer" style="padding: 0;"><span class="item_text"
                                                                                                                   style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">Portale Servizi B2B<i style="margin-left: 5px" class="fas fa-arrow-alt-circle-right"></i></span></span></a>
                                                </li>
                                                <li id="nav-menu-item-1450"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                    <a target="_blank" href="https://login.sonoincloud.it/cas-web/login?service=http%3A%2F%2Fdef.sonoincloud.it%2Fdef%2F"
                                                       class=""><span class="item_outer" style="padding: 0;"><span class="item_text"
                                                                                                                   style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">Fatture Online<i style="margin-left: 5px" class="fas fa-arrow-alt-circle-right"></i></span></span></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                @endauth


                        </ul>
                    </nav>

                </div>
            </div>
            @guest
            <div class="mkdf-position-right"><!--
				 -->
                <div class="mkdf-position-right-inner">

                    <a class="mkdf-side-menu-button-opener mkdf-icon-has-hover mkdf-side-menu-button-opener-icon-pack"
                       href="javascript:void(0)">
						<span class="mkdf-side-menu-icon" style="display: flex;">
				<span class="mkdf-icon-linear-icons lnr lnr-menu " style="display: inline-block">Entra</span><span><i
                                        style="display: inline-block;transform: scale(0.5); padding-top: 5px"
                                        class="fas fa-user"></i></span>            </span>
                    </a>
                </div>
            </div>
            @endguest
        </div>

    </div>


    <div class="mkdf-sticky-header">
        <div class="mkdf-sticky-holder mkdf-menu-left">
            <div class="mkdf-vertical-align-containers">
                <div class="mkdf-position-left"><!--
                 -->
                    <div class="mkdf-position-left-inner">


                        <div class="mkdf-logo-wrapper">
                            <a class=""
                               href="{{route('index')}}">
                                <h2><img style="width: 200px; margin-top: -20px"
                                     src="{{asset('img/logo2.png')}}"
                                     alt="Privacy dati, GDPR, sicurezza ICT e siti Web"/></h2>
                            </a>
                        </div>


                        <nav class="mkdf-main-menu mkdf-drop-down mkdf-sticky-nav">
                            <ul id="menu-main-menu-navigation-1" class="clearfix">
                                <li id="sticky-nav-menu-item-58"
                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children mkdf-active-item has_sub wide mkdf-wide-menu-centered">
                                    <a href="{{route('index')}}" class=" current "><span class="item_outer"><span
                                                    class=""
                                                    style="font-size: 28px!important; font-family: 'Microsoft Yi Baiti'!important; ">Home</span><span
                                                    class="plus"></span><i
                                                    class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                                </li>
                                <li id="sticky-nav-menu-item-59"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                    <a href="{{route('chisiamo')}}" class=""><span class="item_outer"><span
                                                    class=""
                                                    style="font-size: 28px!important; font-family: 'Microsoft Yi Baiti'!important; ">Chi siamo</span><span
                                                    class="plus"></span><i
                                                    class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                                </li>
                                <li id="sticky-nav-menu-item-61"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                    <a href="#" class=""><span class="item_outer"><span class=""
                                                                                        style="font-size: 28px!important; font-family: 'Microsoft Yi Baiti'!important; ">Servizi</span><span
                                                    class="plus"></span><i
                                                    class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                    <div class="second">
                                        <div class="inner">
                                            <ul>
                                                <li id="sticky-nav-menu-item-1420"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                    <a href="{{route('fatturazione')}}"
                                                       class=""><span class="item_outer"><span
                                                                    class="item_text"
                                                                    style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">Fattura Elettronica</span><span
                                                                    class="plus"></span></span></a></li>
                                                <li id="sticky-nav-menu-item-1420"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                    <a href="{{route('privacy')}}"
                                                       class=""><span class="item_outer"><span
                                                                    class="item_text"
                                                                    style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">Privacy</span><span
                                                                    class="plus"></span></span></a></li>
                                                <li id="sticky-nav-menu-item-1451"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                    <a href="{{route('formazione')}}"
                                                       class=""><span class="item_outer"><span
                                                                    class="item_text"
                                                                    style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">Formazione</span><span
                                                                    class="plus"></span></span></a></li>
                                                <li id="sticky-nav-menu-item-1450"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                    <a href="{{route('temporary')}}"
                                                       class=""><span class="item_outer"><span
                                                                    class="item_text"
                                                                    style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">Temporary Office</span><span
                                                                    class="plus"></span></span></a></li>
                                                <li id="sticky-nav-menu-item-1450"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                    <a href="{{route('web')}}"
                                                       class=""><span class="item_outer"><span
                                                                    class="item_text"
                                                                    style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">Siti Web</span><span
                                                                    class="plus"></span></span></a></li>
                                                <li id="sticky-nav-menu-item-1450"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                    <a href="{{route('equitalia')}}"
                                                       class=""><span class="item_outer"><span
                                                                    class="item_text"
                                                                    style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">SOS Indebitati</span><span
                                                                    class="plus"></span></span></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>


                                <li id="sticky-nav-menu-item-63"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub wide mkdf-wide-menu-centered">
                                    <a href="{{route('contatti')}}" class=""><span class="item_outer"><span class=""
                                                                                                            style="font-size: 28px!important; font-family: 'Microsoft Yi Baiti'!important; ">Contatti</span><span
                                                    class="plus"></span><i
                                                    class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                                </li>

                                @auth
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                    <a id="navbarDropdown" class="">
                                        <span class="item_outer">
                                            <span class=""
                                                  style="font-size: 28px!important; font-family: 'Microsoft Yi Baiti'!important;">
                                                {{ Auth::user()->name }}
                                            </span>
                                        </span>
                                    </a>
                                    <div class="second">
                                        <div class="inner">
                                            <ul>
                                                <li id="nav-menu-item-1450"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                    <a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                                       href="{{ route('logout') }}" class="">
                                                        <span class="item_outer">
                                                            <span class="item_text"
                                                                  style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">
                                                                {{ __('Logout') }}
                                                            </span>
                                                        </span>
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                          style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                                <li id="nav-menu-item-1450"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                    <a target="_blank" href="http://portale.bluenext.it"
                                                       class=""><span class="item_outer" style="padding: 0;"><span class="item_text"
                                                                                                                   style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">Portale Servizi B2B<i style="margin-left: 5px" class="fas fa-arrow-alt-circle-right"></i></span></span></a>
                                                </li>
                                                <li id="nav-menu-item-1450"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                    <a target="_blank" href="https://login.sonoincloud.it/cas-web/login?service=http%3A%2F%2Fdef.sonoincloud.it%2Fdef%2F"
                                                       class=""><span class="item_outer" style="padding: 0;"><span class="item_text"
                                                                                                                   style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">Fatture Online<i style="margin-left: 5px" class="fas fa-arrow-alt-circle-right"></i></span></span></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                @endauth

                            </ul>
                        </nav>

                    </div>
                </div>
                @guest
                <div class="mkdf-position-right"><!--
				 -->
                    <div class="mkdf-position-right-inner">

                        <a class="mkdf-side-menu-button-opener mkdf-icon-has-hover mkdf-side-menu-button-opener-icon-pack"
                           href="javascript:void(0)">
						<span class="mkdf-side-menu-icon" style="display: flex;">
				<span class="mkdf-icon-linear-icons lnr lnr-menu " style="display: inline-block">Entra</span><span><i
                                        style="display: inline-block;transform: scale(0.5); padding-top: 5px"
                                        class="fas fa-user"></i></span>            </span>
                        </a>
                    </div>
                </div>
                @endguest
            </div>
        </div>
    </div>


    <form action="" class="mkdf-search-cover" method="get">
        <div class="mkdf-container">
            <div class="mkdf-container-inner clearfix">
                <div class="mkdf-form-holder-outer">
                    <div class="mkdf-form-holder">
                        <div class="mkdf-form-holder-inner">
                            <input type="text" placeholder="Search" name="s" class="mkdf_search_field"
                                   autocomplete="off"/>
                            <a class="mkdf-search-close mkdf-search-close-icon-pack" href="#">
                                <span class="mkdf-icon-linear-icons lnr lnr-cross "></span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</header>

<header class="mkdf-mobile-header">

    <div class="mkdf-mobile-header-inner">
        <div class="mkdf-mobile-header-holder">
            <div class="mkdf-grid">
                <div class="mkdf-vertical-align-containers">
                    <div class="mkdf-vertical-align-containers">
                        <div class="mkdf-mobile-menu-opener mkdf-mobile-menu-opener-icon-pack">
                            <a href="javascript:void(0)">
									<span class="mkdf-mobile-menu-icon">
										<span class="fas fa-bars ">{{--<i class="fas fa-bars"></i>--}}</span>									</span>
                            </a>
                        </div>
                        <div class="mkdf-position-center"><!--
						 -->
                            <div class="mkdf-position-center-inner">


                                <div class="mkdf-mobile-logo-wrapper">
                                    <a itemprop="url" href="{{route('index')}}"
                                       style="height: 54px">
                                        <img itemprop="image"
                                             src="{{asset('img/logo4.png')}}"
                                             alt="Mobile Logo"/>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="mkdf-position-right"><!--
						 -->
                            <div class="mkdf-position-right-inner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="mkdf-mobile-nav">
            <div class="mkdf-grid">
                <ul id="menu-mobile-menu" class="">
                    <li id="mobile-menu-item-3088"
                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children mkdf-active-item has_sub">
                        <a href="{{route('index')}}" class=" current  mkdf-mobile-no-link">
                            <span style="font-size: 22px!important; font-family: 'Microsoft Yi Baiti'!important; ">
                                Home
                            </span>
                        </a>

                    </li>
                    <li id="mobile-menu-item-3096"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub">
                        <a href="{{route('chisiamo')}}" class=" mkdf-mobile-no-link">
                            <span style="font-size: 22px!important; font-family: 'Microsoft Yi Baiti'!important; ">
                                Chi siamo
                            </span>
                        </a>
                    </li>
                    <li id="mobile-menu-item-3103"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub">
                        <a href="#" class=" mkdf-mobile-no-link"><span
                                    style="font-size: 22px!important; font-family: 'Microsoft Yi Baiti'!important; ">Servizi</span></a><span
                                class="mobile_arrow"><i class="mkdf-sub-arrow fa fa-angle-right"></i><i
                                    class="fa fa-angle-down"></i></span>
                        <ul class="sub_menu">
                            <li id="mobile-menu-item-3104"
                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                        href="{{route('fatturazione')}}"
                                        class=""><span
                                            style="font-size: 22px!important; font-family: 'Microsoft Yi Baiti'!important; ">Fattura Elettronica</span></a>
                            </li>
                            <li id="mobile-menu-item-3104"
                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                        href="{{route('privacy')}}"
                                        class=""><span
                                            style="font-size: 22px!important; font-family: 'Microsoft Yi Baiti'!important; ">Privacy</span></a>
                            </li>
                            <li id="mobile-menu-item-3105"
                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                        href="{{route('formazione')}}"
                                        class=""><span
                                            style="font-size: 22px!important; font-family: 'Microsoft Yi Baiti'!important; ">Formazione</span></a>
                            </li>
                            <li id="mobile-menu-item-3106"
                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                        href="{{route('temporary')}}"
                                        class=""><span
                                            style="font-size: 22px!important; font-family: 'Microsoft Yi Baiti'!important; ">Temporary Office</span></a>
                            </li>
                            <li id="mobile-menu-item-3106"
                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                        href="{{route('web')}}"
                                        class=""><span
                                            style="font-size: 22px!important; font-family: 'Microsoft Yi Baiti'!important; ">Siti Web</span></a>
                            </li>
                            <li id="mobile-menu-item-3106"
                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                        href="{{route('equitalia')}}"
                                        class=""><span
                                            style="font-size: 22px!important; font-family: 'Microsoft Yi Baiti'!important; ">SOS Indebitati</span></a>
                            </li>

                        </ul>
                    </li>
                    <li style="display: none" id="mobile-menu-item-3121"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub">
                        <a href="#" class=" mkdf-mobile-no-link"><span>Pacchetti</span></a><span
                                class="mobile_arrow"><i class="mkdf-sub-arrow fa fa-angle-right"></i><i
                                    class="fa fa-angle-down"></i></span>
                        <ul class="sub_menu">
                            <li id="mobile-menu-item-3122"
                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                        href="#"
                                        class=""><span>Soluzione1</span></a></li>
                            <li id="mobile-menu-item-3123"
                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                        href="#"
                                        class=""><span>Soluzione2</span></a></li>
                            <li id="mobile-menu-item-3124"
                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                        href="#"
                                        class=""><span>Soluzione3</span></a></li>
                            <li id="mobile-menu-item-3124"
                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                        href="#"
                                        class=""><span>Soluzione4</span></a></li>
                            <li id="mobile-menu-item-3124"
                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                        href="#"
                                        class=""><span>Soluzione5</span></a></li>
                            <li id="mobile-menu-item-3124"
                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                        href="#"
                                        class=""><span>Opzione</span></a></li>

                        </ul>
                    </li>

                    <li id="mobile-menu-item-3143"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub">
                        <a href="{{route('contatti')}}" class=" mkdf-mobile-no-link"><span
                                    style="font-size: 22px!important; font-family: 'Microsoft Yi Baiti'!important; ">Contatti</span></a>

                    </li>

                    @guest
                    <li id="mobile-menu-item-3453"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub">
                        <a href="#" class=" mkdf-mobile-no-link"><span
                                    style="font-size: 22px!important; font-family: 'Microsoft Yi Baiti'!important; ">Entra</span></a><span
                                class="mobile_arrow"><i class="mkdf-sub-arrow fa fa-angle-right"></i><i
                                    class="fa fa-angle-down"></i></span>
                        <ul class="sub_menu">
                            <li id="mobile-menu-item-3104"
                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                        href="{{ route('login') }}"
                                        class=""><span
                                            style="font-size: 22px!important; font-family: 'Microsoft Yi Baiti'!important; ">Login</span></a>
                            </li>
                            <li id="mobile-menu-item-3105"
                                class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                        href="{{ route('register') }}"
                                        class=""><span
                                            style="font-size: 22px!important; font-family: 'Microsoft Yi Baiti'!important; ">Registrati</span></a>
                            </li>

                        </ul>
                    </li>
                    @else
                        <li id="mobile-menu-item-3453"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub">
                            <a href="#" class=" mkdf-mobile-no-link"><span
                                        style="font-size: 22px!important; font-family: 'Microsoft Yi Baiti'!important; ">{{ Auth::user()->name }}</span></a><span
                                    class="mobile_arrow"><i class="mkdf-sub-arrow fa fa-angle-right"></i><i
                                        class="fa fa-angle-down"></i></span>
                            <ul class="sub_menu">
                                <li id="mobile-menu-item-3104"
                                    class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                            href="{{ route('logout') }}"
                                            class=""><span
                                                style="font-size: 22px!important; font-family: 'Microsoft Yi Baiti'!important; ">{{ __('Logout') }}</span></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                <li id="nav-menu-item-1450"
                                    class="menu-item menu-item-type-post_type menu-item-object-page ">
                                    <a target="_blank" href="http://portale.bluenext.it"
                                       class=""><span class="item_outer" style="padding: 0;"><span class="item_text"
                                                                                                   style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">Portale Servizi B2B<i style="margin-left: 5px" class="fas fa-arrow-alt-circle-right"></i></span></span></a>
                                </li>
                                <li id="nav-menu-item-1450"
                                    class="menu-item menu-item-type-post_type menu-item-object-page ">
                                    <a target="_blank" href="https://login.sonoincloud.it/cas-web/login?service=http%3A%2F%2Fdef.sonoincloud.it%2Fdef%2F"
                                       class=""><span class="item_outer" style="padding: 0;"><span class="item_text"
                                                                                                   style="font-size: 20px!important; font-family: 'Microsoft Yi Baiti'!important;">Fatture Online<i style="margin-left: 5px" class="fas fa-arrow-alt-circle-right"></i></span></span></a>
                                </li>
                            </ul>
                        </li>
                    @endguest

                </ul>
            </div>
        </nav>

    </div>


</header>