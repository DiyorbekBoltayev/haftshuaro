@extends('user.master')
@section('title')
    @lang('public.t_2_2')
@endsection
@section('content')
    <section class="header1 cid-t79FXPTzxw mbr-parallax-background" id="header1-r">


        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(250, 250, 250);"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2">
                        <strong>
                            @lang('public.t_2_5')
                        </strong>
                    </h1>


                </div>
            </div>
        </div>
    </section>
    <section class="content2 cid-t79CXtsQCS" id="content2-p">


        <div class="container">

            <div class="row mt-4 ">

                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">

                        <div class="item-img">
                            <img src="{{asset('front/assets/images/z1.png')}}" alt="" title="">
                        </div>

                        @if($lang=="uz")
                            <div class="item-content">

                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Adabiy muhit va badiiy
                                        ijod
                                        qirralari</strong></h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">Ma`lumki, Xorazm adabiy muhiti oʻzbek
                                    mumtoz adabiyotining yuksak darajada ravnaq topgan va ma`naviyatimiz takomilida
                                    oʻchmas
                                    iz qoldirgan markazlaridan biridir. Umumoʻzbek adabiyoti taraqqiyotining har bir
                                    ...</p>
                            </div>

                        @endif
                        @if($lang=="ru")
                            <div class="item-content">

                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Литературная
                                        среда и художественное творчество
                                        края</strong></h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">Известно, что литературная
                                    среда Хорезма узбекская.
                                    Высокий уровень развития классической литературы и бессмертие нашей
                                    духовности
                                    является одним из центров, оставивших свой след. Каждый шаг развития
                                    узбекской литературы...</p>
                            </div>
                        @endif
                        @if($lang=="en")
                            <div class="item-content">

                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Literary
                                        environment and artistic creation
                                        edges</strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">It is known that the
                                    literary environment of Khorezm is Uzbek
                                    The high level of development of classical literature and the
                                    immortality of our spirituality
                                    is one of the centers that left its mark. Every step of the
                                    development of Uzbek literature ...</p>
                            </div>

                        @endif

                        <div class="mbr-section-btn item-footer mt-2">
                            <a href="{{route('front.badiiy_ijod')}}" class="btn item-btn btn-outline-primary display-7">

                                @if( $lang == "uz" )
                                    Batafsil
                                @endif
                                @if( $lang == "en" )
                                    Read more
                                @endif
                                @if( $lang == "ru" )
                                    Читать далее
                                @endif
                                ➔
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{asset('front/assets/images/z2.jpg')}}" alt="" title="">
                        </div>

                        @if($lang=="uz")
                            <div class="item-content">

                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Manbalardagi
                                        biografik
                                        ma`lumotlarning adabiy qimmati</strong></h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">Ma`lumki, tazkira va
                                    majmualarda ijodkor
                                    shaxsi haqidagi biografik ma`lumotlarning muayyan oʻrni boʻlib, ular u
                                    yoki bu ijodkor
                                    xususidagi umumiy tasavvurni kengaytirishga xizmat qiladi...&nbsp;<br>
                                </p>
                            </div>
                        @endif

                        @if($lang=="en")
                            <div class="item-content">

                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">
                                    <strong>Biographical sources
                                        literary value of information</strong></h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">It is
                                    known that he is a creator of tazkira and complexes
                                    There is a certain place for biographical information
                                    about the person, who is this or that artist
                                    serves to expand the general idea about ...&nbsp;<br>
                                </p>
                            </div>
                        @endif

                        @if($lang=="ru")
                            <div class="item-content">

                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">
                                    <strong>Биографические
                                        источники
                                        литературная ценность информации</strong></h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">Известно,
                                    что он
                                    создатель тазкир и комплексов
                                    Определенное место отведено биографическим сведениям о
                                    человеке,
                                    которым является тот или иной художник.
                                    служит для расширения общего представления
                                    о...&nbsp;<br>
                                </p>
                            </div>
                        @endif

                        <div class="mbr-section-btn item-footer mt-2">
                            <a href="{{route('front.biografik')}}" class="btn item-btn btn-outline-primary display-7">

                                @if( $lang == "uz" )
                                    Batafsil
                                @endif
                                @if( $lang == "en" )
                                    Read more
                                @endif
                                @if( $lang == "ru" )
                                    Читать далее
                                @endif
                                ➔
                            </a>
                        </div>


                    </div>
                </div>
                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{asset('front/assets/images/z3.jpg')}}" alt="" title="">
                        </div>

                        @if($lang=="uz")
                            <div class="item-content">

                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">
                                    <strong>“Haft shuaro”ning
                                        yaratilishi, nusxalari va tuzilishi</strong></h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">“Haft
                                    shuaro”ning maydonga kelishi,
                                    yuqorida ta`kidlanganidek, XIX asrning II yarmidan shaxsan
                                    Feruz tashabbusi bilan keng
                                    avj olgan kitobat va badiiy asarlarni targʻib qilish,
                                    umuman, kitobxonlik miqyosining
                                    kengayishi...
                                </p>
                            </div>
                        @endif

                        @if($lang=="en")
                            <div class="item-content">

                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">
                                    <strong>Of Haft Shuaro
                                        creation, copies and structure</strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                    Formation of Haft Shuaro,
                                    As mentioned above, since the second half of
                                    the XIX century, on the initiative of Feruz
                                    personally
                                    The promotion of books and works of art in
                                    general, the scale of reading in general
                                    expansion ...</p>
                            </div>

                        @endif
                        @if($lang=="ru")
                            <div class="item-content">

                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">
                                    <strong>Хафт Шуаро
                                        создание, копии и структура</strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                    Формирование Хафт Шуаро,
                                    Как уже говорилось выше, со второй половины
                                    XIX века
                                    по инициативе лично Феруза
                                    Продвижение книг и произведений искусства в
                                    целом,
                                    масштабы чтения в целом
                                    расширение ...</p>
                            </div>
                        @endif

                        <div class="mbr-section-btn item-footer mt-2"><a
                                href="{{route('front.nusxalari')}}"
                                class="btn btn-outline-primary item-btn display-7">

                                @if( $lang == "uz" )
                                    Batafsil
                                @endif
                                @if( $lang == "en" )
                                    Read more
                                @endif
                                @if( $lang == "ru" )
                                    Читать далее
                                @endif
                                ➔
                            </a>
                        </div>
                    </div>
                </div>


                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{asset('front/assets/images/z3.jpg')}}" alt="" title="">
                        </div>

                        @if($lang=="uz")
                            <div class="item-content">

                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">
                                    <strong>@lang('public.gazallar2')</strong></h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">“Haft
                                    shuaro”ning maydonga kelishi,
                                    yuqorida ta`kidlanganidek, XIX asrning II yarmidan shaxsan
                                    Feruz tashabbusi bilan keng
                                    avj olgan kitobat va badiiy asarlarni targʻib qilish,
                                    umuman, kitobxonlik miqyosining
                                    kengayishi...
                                </p>
                            </div>
                        @endif

                        @if($lang=="en")
                            <div class="item-content">

                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">
                                    <strong>@lang('public.gazallar2')</strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                    Formation of Haft Shuaro,
                                    As mentioned above, since the second half of
                                    the XIX century, on the initiative of Feruz
                                    personally
                                    The promotion of books and works of art in
                                    general, the scale of reading in general
                                    expansion ...</p>
                            </div>

                        @endif
                        @if($lang=="ru")
                            <div class="item-content">

                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">
                                    <strong>@lang('public.gazallar2')</strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                    Формирование Хафт Шуаро,
                                    Как уже говорилось выше, со второй половины
                                    XIX века
                                    по инициативе лично Феруза
                                    Продвижение книг и произведений искусства в
                                    целом,
                                    масштабы чтения в целом
                                    расширение ...</p>
                            </div>
                        @endif

                        <div class="mbr-section-btn item-footer mt-2"><a
                                href="{{route('front.gazallar_tasnifi')}}"
                                class="btn btn-outline-primary item-btn display-7">

                                @if( $lang == "uz" )
                                    Batafsil
                                @endif
                                @if( $lang == "en" )
                                    Read more
                                @endif
                                @if( $lang == "ru" )
                                    Читать далее
                                @endif
                                ➔
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{asset('front/assets/images/z3.jpg')}}" alt="" title="">
                        </div>

                        @if($lang=="uz")
                            <div class="item-content">

                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">
                                    <strong>@lang('public.gazallar3')</strong></h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">“Haft
                                    shuaro”ning maydonga kelishi,
                                    yuqorida ta`kidlanganidek, XIX asrning II yarmidan shaxsan
                                    Feruz tashabbusi bilan keng
                                    avj olgan kitobat va badiiy asarlarni targʻib qilish,
                                    umuman, kitobxonlik miqyosining
                                    kengayishi...
                                </p>
                            </div>
                        @endif

                        @if($lang=="en")
                            <div class="item-content">

                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">
                                    <strong>@lang('public.gazallar3')</strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                    Formation of Haft Shuaro,
                                    As mentioned above, since the second half of
                                    the XIX century, on the initiative of Feruz
                                    personally
                                    The promotion of books and works of art in
                                    general, the scale of reading in general
                                    expansion ...</p>
                            </div>

                        @endif
                        @if($lang=="ru")
                            <div class="item-content">

                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">
                                    <strong>@lang('public.gazallar3')</strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                    Формирование Хафт Шуаро,
                                    Как уже говорилось выше, со второй половины
                                    XIX века
                                    по инициативе лично Феруза
                                    Продвижение книг и произведений искусства в
                                    целом,
                                    масштабы чтения в целом
                                    расширение ...</p>
                            </div>
                        @endif

                        <div class="mbr-section-btn item-footer mt-2"><a
                                href="{{route('front.sheriy_sanat')}}"
                                class="btn btn-outline-primary item-btn display-7">

                                @if( $lang == "uz" )
                                    Batafsil
                                @endif
                                @if( $lang == "en" )
                                    Read more
                                @endif
                                @if( $lang == "ru" )
                                    Читать далее
                                @endif
                                ➔
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{asset('front/assets/images/z3.jpg')}}" alt="" title="">
                        </div>

                        @if($lang=="uz")
                            <div class="item-content">

                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">
                                    <strong>@lang('public.sh_janr2')</strong></h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">“Haft
                                    shuaro”ning maydonga kelishi,
                                    yuqorida ta`kidlanganidek, XIX asrning II yarmidan shaxsan
                                    Feruz tashabbusi bilan keng
                                    avj olgan kitobat va badiiy asarlarni targʻib qilish,
                                    umuman, kitobxonlik miqyosining
                                    kengayishi...
                                </p>
                            </div>
                        @endif

                        @if($lang=="en")
                            <div class="item-content">

                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">
                                    <strong>@lang('public.sh_janr2')</strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                    Formation of Haft Shuaro,
                                    As mentioned above, since the second half of
                                    the XIX century, on the initiative of Feruz
                                    personally
                                    The promotion of books and works of art in
                                    general, the scale of reading in general
                                    expansion ...</p>
                            </div>

                        @endif
                        @if($lang=="ru")
                            <div class="item-content">

                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">
                                    <strong>@lang('public.sh_janr2')</strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                    Формирование Хафт Шуаро,
                                    Как уже говорилось выше, со второй половины
                                    XIX века
                                    по инициативе лично Феруза
                                    Продвижение книг и произведений искусства в
                                    целом,
                                    масштабы чтения в целом
                                    расширение ...</p>
                            </div>
                        @endif

                        <div class="mbr-section-btn item-footer mt-2"><a
                                href="{{route('front.musammat')}}"
                                class="btn btn-outline-primary item-btn display-7">

                                @if( $lang == "uz" )
                                    Batafsil
                                @endif
                                @if( $lang == "en" )
                                    Read more
                                @endif
                                @if( $lang == "ru" )
                                    Читать далее
                                @endif
                                ➔
                            </a>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </section>

@endsection
