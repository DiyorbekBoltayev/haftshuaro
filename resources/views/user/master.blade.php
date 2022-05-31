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
                    <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-black display-4" href="#"
                                                     data-toggle="dropdown-submenu" aria-expanded="false">
                            @lang('public.bosh_sahifa')</a>
                        <div class="dropdown-menu"><a class="text-black dropdown-item text-primary display-4"
                                                      href="{{route('front.bosh_sahifa')}}" aria-expanded="false">
                                @lang('public.bosh_sahifa')</a><a class="dropdown-item text-black text-primary display-4"
                                             href="{{route('front.muallif_haqida')}}">@lang('public.bosh_sahifa2')</a><a
                                class="dropdown-item text-black text-primary display-4"
                                href="{{route('front.fotogalereya')}}"
                                aria-expanded="false">@lang('public.bosh_sahifa3')</a></div>
                    </li>

                    <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-black display-4" href="#"
                                                     data-toggle="dropdown-submenu" aria-expanded="false">@lang('public.adabiy_muhit')</a>
                        <div class="dropdown-menu"><a class="text-black dropdown-item text-primary display-4"
                                                      href="{{route('front.adabiy_muhit')}}" aria-expanded="false">@lang('public.adabiy_muhit')</a><a
                                class="dropdown-item text-black text-primary display-4"
                                href="{{route('front.badiiy_ijod')}}">@lang('public.adabiy_muhit2')</a><a class="text-black dropdown-item text-primary display-4"
                                                           href="{{route('front.biografik')}}" aria-expanded="false">@lang('public.adabiy_muhit3')</a><a class="text-black dropdown-item text-primary display-4"
                                                  href="{{route('front.nusxalari')}}" aria-expanded="false">@lang('public.adabiy_muhit4')</a></div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-black display-4" href="#"
                                                     data-toggle="dropdown-submenu" aria-expanded="false">@lang('public.gazallar')</a>
                        <div class="dropdown-menu"><a class="text-black dropdown-item text-primary display-4"
                                                      href="{{route('front.gazallar')}}"
                                                      aria-expanded="false">@lang('public.gazallar')</a><a
                                class="dropdown-item text-black text-primary display-4"
                                href="{{route('front.gazallar_tasnifi')}}">@lang('public.gazallar2')</a><a class="text-black dropdown-item text-primary display-4"
                                              href="{{route('front.sheriy_sanat')}}" aria-expanded="false">@lang('public.gazallar3')</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-black display-4" href="#"
                                                     data-toggle="dropdown-submenu" aria-expanded="false">@lang('public.sh_janr')</a>
                        <div class="dropdown-menu"><a class="text-black dropdown-item text-primary display-4"
                                                      href="{{route('front.sheriy_janrlar')}}" aria-expanded="false">@lang('public.sh_janr')</a><a class="dropdown-item text-black text-primary display-4"
                                              href="{{route('front.musammat')}}">@lang('public.sh_janr2')</a><a
                                class="text-black dropdown-item text-primary display-4" href="{{route('front.boshqa_janrlar')}}"
                                aria-expanded="false">@lang('public.sh_janr3')</a></div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-black display-4" href="#"
                                                     data-toggle="dropdown-submenu" aria-expanded="false">@lang('public.sheriyat')</a>
                        <div class="dropdown-menu"><a class="text-black dropdown-item text-primary display-4"
                                                      href="{{route('front.sheriyat')}}"
                                                      aria-expanded="false">@lang('public.sheriyat')</a><a
                                class="dropdown-item text-black text-primary display-4" href="{{route('front.kimdir_ijodi','Murodiy')}}">Murodiy
                                @lang('public.sheriyat2')</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-black display-4" href="#"
                                                     data-toggle="dropdown-submenu" aria-expanded="false">@lang('public.kutubxona')</a>
                        <div class="dropdown-menu"><a class="text-black dropdown-item text-primary display-4"
                                                      href="{{route('front.kutubxonam')}}"
                                                      aria-expanded="false">@lang('public.kutubxona')</a><a
                                class="dropdown-item text-black text-primary display-4" href="{{route('front.durdona_toplamlar')}}">@lang('public.kutubxona2')</a><a class="text-black dropdown-item text-primary display-4"
                                                href="{{route('front.eng_sara')}}" aria-expanded="false">@lang('public.kutubxona3')</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link link text-black dropdown-toggle display-4" href="#"
                                                     aria-expanded="false" data-toggle="dropdown-submenu"><span
                                class="mobi-mbri mobi-mbri-globe-2 mbr-iconfont mbr-iconfont-btn"></span>@lang('public.local')</a>
                        <div class="dropdown-menu">
                            <a class="text-black dropdown-item display-4" href="locale/uz"
                                                      aria-expanded="false"><span
                                    class="mobi-mbri mobi-mbri-globe-2 mbr-iconfont mbr-iconfont-btn"></span>UZ</a>
                            <a class="text-black dropdown-item display-4" href="locale/ru"
                               aria-expanded="false"><span
                                    class="mobi-mbri mobi-mbri-globe-2 mbr-iconfont mbr-iconfont-btn"></span>RU</a>
                            <a class="text-black dropdown-item display-4" href="locale/en" aria-expanded="false"><span
                                    class="mobi-mbri mobi-mbri-globe-2 mbr-iconfont mbr-iconfont-btn"></span>EN</a>
                        </div>
                    </li>
                </ul>


            </div>
        </div>
    </nav>
</section>

@yield('content')

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


<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i
            class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
<input name="animation" type="hidden">
</body>
</html>
