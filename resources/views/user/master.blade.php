<!DOCTYPE html>
<html>
<head>
    <!-- Site made with Mobirise Website Builder v5.0.29, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.0.29, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="{{asset('front/assets/images/512x512-128x128.png')}}" type="image/x-icon">
    <meta name="description" content="">


    <title>@yield('title')</title>
    @yield('cs-css')

    <link rel="stylesheet" href="{{asset('front/assets/web/assets/mobirise-icons2/mobirise2.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/tether/tether.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/bootstrap/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/bootstrap/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/dropdown/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/animatecss/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/socicon/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/theme/css/style.css')}}">
    <link rel="preload" as="style" href="{{asset('front/assets/mobirise/css/mbr-additional.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/mobirise/css/mbr-additional.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('fr/assets/web/assets/mobirise-icons2/mobirise2.css')}}">
    <link rel="stylesheet" href="{{asset('fr/assets/tether/tether.min.css')}}">
    <link rel="stylesheet" href="{{asset('fr/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fr/assets/bootstrap/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('fr/assets/bootstrap/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('fr/assets/socicon/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('fr/assets/theme/css/style.css')}}">
    <link rel="preload" as="style" href="{{asset('fr/assets/mobirise/css/mbr-additional.css')}}">
    <link rel="stylesheet" href="{{asset('fr/assets/mobirise/css/mbr-additional.css')}}" type="text/css">
</head>
<body>
<section class="menu menu1 cid-t77D41zExz" once="menu" id="menu1-2">


    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">

                <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-7"
                                                     href="{{route('front.bosh_sahifa')}}">Haft shuaro</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
{{--                    <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-black display-4" href="#"--}}
{{--                                                     data-toggle="dropdown-submenu" aria-expanded="false">--}}
{{--                            @lang('public.bosh_sahifa')</a>--}}
{{--                        <div class="dropdown-menu"><a class="text-black dropdown-item text-primary display-4"--}}
{{--                                                      href="{{route('front.bosh_sahifa')}}" aria-expanded="false">--}}
{{--                                @lang('public.bosh_sahifa')</a>--}}
{{--                            <a class="dropdown-item text-black text-primary display-4"--}}
{{--                               href="{{route('front.muallif_haqida')}}">@lang('public.bosh_sahifa2')</a>--}}
{{--                            <a--}}
{{--                                class="dropdown-item text-black text-primary display-4"--}}
{{--                                href="{{route('front.fotogalereya')}}"--}}
{{--                                aria-expanded="false">@lang('public.bosh_sahifa3')</a></div>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link link dropdown-toggle text-black display-4" href="#"--}}
{{--                                                     data-toggle="dropdown-submenu"--}}
{{--                                                     aria-expanded="false">@lang('public.adabiy_muhit')</a>--}}
{{--                        <div class="dropdown-menu"><a class="text-black dropdown-item text-primary display-4"--}}
{{--                                                      href="{{route('front.adabiy_muhit')}}"--}}
{{--                                                      aria-expanded="false">@lang('public.adabiy_muhit')</a><a--}}
{{--                                class="dropdown-item text-black text-primary display-4"--}}
{{--                                href="{{route('front.badiiy_ijod')}}">@lang('public.adabiy_muhit2')</a><a--}}
{{--                                class="text-black dropdown-item text-primary display-4"--}}
{{--                                href="{{route('front.biografik')}}"--}}
{{--                                aria-expanded="false">@lang('public.adabiy_muhit3')</a><a--}}
{{--                                class="text-black dropdown-item text-primary display-4"--}}
{{--                                href="{{route('front.nusxalari')}}"--}}
{{--                                aria-expanded="false">@lang('public.adabiy_muhit4')</a></div>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="text-black dropdown-item text-primary display-4"
                           href="{{route('front.bosh_sahifa')}}"
                           aria-expanded="false">@lang('public.bosh_sahifa')</a>

                    </li>
                    <li class="nav-item">
                        <a class="text-black dropdown-item text-primary display-4"
                           href="{{route('front.tadqiqot')}}"
                           aria-expanded="false">@lang('public.menu_tad')</a>

                    </li>   <li class="nav-item">
                        <a class="text-black dropdown-item text-primary display-4"
                           href="{{route('front.ijodkorlar')}}"
                           aria-expanded="false">@lang('public.t_2_6')</a>

                    </li>
{{--                    <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-black display-4" href="#"--}}
{{--                                                     data-toggle="dropdown-submenu"--}}
{{--                                                     aria-expanded="false">@lang('public.gazallar')</a>--}}
{{--                        <div class="dropdown-menu"><a class="text-black dropdown-item text-primary display-4"--}}
{{--                                                      href="{{route('front.gazallar')}}"--}}
{{--                                                      aria-expanded="false">@lang('public.gazallar')</a><a--}}
{{--                                class="dropdown-item text-black text-primary display-4"--}}
{{--                                href="{{route('front.gazallar_tasnifi')}}">@lang('public.gazallar2')</a><a--}}
{{--                                class="text-black dropdown-item text-primary display-4"--}}
{{--                                href="{{route('front.sheriy_sanat')}}"--}}
{{--                                aria-expanded="false">@lang('public.gazallar3')</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link link dropdown-toggle text-black display-4" href="#"--}}
{{--                           data-toggle="dropdown-submenu" aria-expanded="false">@lang('public.sh_janr')</a>--}}
{{--                        <div class="dropdown-menu">--}}
{{--                            --}}{{--                            <a class="text-black dropdown-item text-primary display-4"--}}
{{--                            --}}{{--                                                      href="{{route('front.sheriy_janrlar')}}" aria-expanded="false">@lang('public.sh_janr')</a>--}}
{{--                            <a class="dropdown-item text-black text-primary display-4"--}}
{{--                               href="{{route('front.musammat')}}">@lang('public.sh_janr2')</a><a--}}
{{--                                class="text-black dropdown-item text-primary display-4"--}}
{{--                                href="{{route('front.boshqa_janrlar')}}"--}}
{{--                                aria-expanded="false">@lang('public.sh_janr3')</a></div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-black display-4" href="#"--}}
{{--                                                     data-toggle="dropdown-submenu"--}}
{{--                                                     aria-expanded="false">@lang('public.sheriyat')</a>--}}
{{--                        <div class="dropdown-menu"><a class="text-black dropdown-item text-primary display-4"--}}
{{--                                                      href="{{route('front.sheriyat')}}"--}}
{{--                                                      aria-expanded="false">@lang('public.sheriyat')</a>--}}
{{--                            @foreach($shoirlar as $sh)--}}
{{--                                <a--}}
{{--                                    class="dropdown-item text-black text-primary display-4"--}}
{{--                                    href="{{route('front.kimdir_ijodi',$sh->id)}}">{{$sh->name}}--}}
{{--                                    @lang('public.sheriyat2')</a>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </li>--}}
                    <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-black display-4" href="#"
                                                     data-toggle="dropdown-submenu"
                                                     aria-expanded="false">@lang('public.kutubxona')</a>
                        <div class="dropdown-menu"><a class="text-black dropdown-item text-primary display-4"
                                                      href="{{route('front.kutubxonam')}}"
                                                      aria-expanded="false">@lang('public.kutubxona')</a><a
                                class="dropdown-item text-black text-primary display-4"
                                href="{{route('front.durdona_toplamlar')}}">@lang('public.kutubxona2')</a><a
                                class="text-black dropdown-item text-primary display-4"
                                href="{{route('front.eng_sara')}}" aria-expanded="false">@lang('public.kutubxona3')</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="text-black dropdown-item text-primary display-4"
                           href="{{route('front.contact')}}"
                           aria-expanded="false">@lang('public.contact')</a>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link link text-black dropdown-toggle display-4" href="#"
                           aria-expanded="false" data-toggle="dropdown-submenu">
                            @if($lang=="uz")
                                <img src="uzb.png"
                                     style="width: 25px; height: 15px; display: inline-block ; margin-right: 2px;"
                                     alt="">
                            @endif
                            @if($lang=="ru")
                                <img src="rus.jpg"
                                     style="width: 25px; height: 15px; display: inline-block ; margin-right: 2px;"
                                     alt="">
                            @endif
                            @if($lang=="en")
                                <img src="eng.jpg"
                                     style="width: 25px; height: 15px; display: inline-block ; margin-right: 2px;"
                                     alt="">
                            @endif
                            @lang('public.local')</a>
                        <div class="dropdown-menu">
                            <a class="text-black dropdown-item display-4" href="locale/uz"
                               aria-expanded="false">

                                <img src="uzb.png" style="width: 35px; height: 21px; display: inline-block" alt="">
                                UZ</a>
                            <a class="text-black dropdown-item display-4" href="locale/ru"
                               aria-expanded="false">
                                <img src="rus.jpg" style="width: 35px; height: 21px; display: inline-block" alt="">
                                RU</a>
                            <a class="text-black dropdown-item display-4" href="locale/en" aria-expanded="false">
                                <img src="eng.jpg" style="width: 35px; height: 21px; display: inline-block" alt="">
                                EN</a>
                        </div>
                    </li>
                </ul>


            </div>
        </div>
    </nav>
</section>

@yield('content')
<section class="footer3 cid-toEbhyK0XN" once="footers" id="footer3-6">



    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(35, 35, 35);"></div>

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">





                    <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white" href="{{route('front.bosh_sahifa')}}" >@lang('public.bosh_sahifa')</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white" href="{{route('front.tadqiqot')}}" >@lang('public.t_2_5')</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white" href="{{route('front.ijodkorlar')}}" >@lang('public.t_2_6')</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white" href="{{route('front.kutubxonam')}}" >@lang('public.kutubxona')</a>
                    </li></ul>
            </div>

            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © @lang('public.footer_text')
                </p>
            </div>
            <br>
            <br>
            <br>
            <br>
            <span style="color: transparent">.</span>
        </div>
    </div>
</section>
@yield('cs-js')

<script src="{{asset('front/assets/web/assets/jquery/jquery.min.js')}}"></script>
<script src="{{asset('front/assets/popper/popper.min.js')}}"></script>
<script src="{{asset('front/assets/tether/tether.min.js')}}"></script>
<script src="{{asset('front/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/assets/smoothscroll/smooth-scroll.js')}}"></script>
<script src="{{asset('front/assets/dropdown/js/nav-dropdown.js')}}"></script>
<script src="{{asset('front/assets/dropdown/js/navbar-dropdown.js')}}"></script>
<script src="{{asset('front/assets/touchswipe/jquery.touch-swipe.min.js')}}"></script>
<script src="{{asset('front/assets/viewportchecker/jquery.viewportchecker.js')}}"></script>
<script src="{{asset('front/assets/parallax/jarallax.min.js')}}"></script>
<script src="{{asset('front/assets/theme/js/script.js')}}"></script>

<script src="{{asset('fr/assets/web/assets/jquery/jquery.min.js')}}"></script>
<script src="{{asset('fr/assets/popper/popper.min.js')}}"></script>
<script src="{{asset('fr/assets/tether/tether.min.js')}}"></script>
<script src="{{asset('fr/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('fr/assets/smoothscroll/smooth-scroll.js')}}"></script>
<script src="{{asset('fr/assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js')}}"></script>
<script src="{{asset('fr/assets/mbr-testimonials-slider/mbr-testimonials-slider.js')}}"></script>
<script src="{{asset('fr/assets/theme/js/script.js')}}"></script>
<style>
    p {
        font-size: 18px !important;
        font-style: normal;
        line-height: 1.6;
        text-align: justify;
    }
</style>

<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i
            class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
<input name="animation" type="hidden">
</body>
</html>
