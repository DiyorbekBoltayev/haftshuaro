@extends('user.master')
@section('title')
   Haft shuaro
@endsection
@section('content')
    <section class="header1 cid-t77BG6a9x3 mbr-fullscreen mbr-parallax-background" id="header1-1">


        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(250, 250, 250);"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2"><strong>@lang('public.t_1_1')</strong></h1>


                </div>
            </div>
        </div>
    </section>

    <section style='background-image: url("{{asset('fr/rfon.png')}}")' class="features9 cid-t77Hy2O0rR" id="features10-3">
        <!---->


        <div class="container">

            <div class="row mt-4">
                <div class="card col-12">
                    <div class="card-wrapper">

                        <div class="bottom-line">

                                @if($lang=="uz")
                                <p class="mbr-text mbr-fonts-style display-5">
                                    Ushbu sayt “Haft shuaro” majmuasini o'rganish
                                    orqali XIX asr Xorazm vohasining milliy-ma'naviy merosini tadqiq qilish va (o'zbek, rus,
                                    ingliz tillarida) elektron ilovasini yaratish” nomli O'zbekiston Respublikasi
                                    Innovatsion rivojlanish vazirligi tomonidan moliyalashtirilgan IL-402104155 shifrli
                                    grant asosida yaratilgan .
                                    <br>
                                </p>
                                @endif
                                @if($lang=="ru")
                                        <p class="mbr-text mbr-fonts-style display-5">Этот сайт исследует комплекс Хафт Шуаро.
                                            изучить национальное и духовное наследие Хорезмского оазиса XIX века и (узбекский, русский,
                                            по-английски)
                                            Код ИЛ-402104155 финансируется Министерством инновационного развития
                                            создан на безвозмездной основе.
                                            <br>
                                        </p>
                                    @endif
                                @if($lang=="en")
                                        <p class="mbr-text mbr-fonts-style display-5">This site explores the Haft Shuaro complex
                                            to study the national and spiritual heritage of the Khorezm oasis of the XIX century and (Uzbek, Russian,
                                            in English)
                                            Code IL-402104155 funded by the Ministry of Innovation Development
                                            created on a grant basis.
                                            <br>
                                        </p>
                                    @endif


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section  class="features6 cid-t77Jr7nBOD" id="features7-5">
        <!---->


        <div class="container">
            <div class="card-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="image-wrapper">
                            <img src="{{asset('front/assets/images/rrrrr.png')}}" alt="Mobirise">
                        </div>
                    </div>
                    <div class="col-12 col-lg">
                        <div class="text-box">
                            <h5 class="mbr-title mbr-fonts-style display-5">
                                @if($lang=="en")<strong>
                                    INTRODUCTION
                                </strong> @endif
                                @if($lang=="uz")<strong>
                                        KIRISH
                                    </strong> @endif
                                @if($lang=="ru") <strong>
                                        ВВЕДЕНИЕ
                                    </strong>@endif

                            </h5>

                            @if($lang=="uz")<p class="mbr-text mbr-fonts-style display-7">
                                Har bir xalqning oʻziga xos tarixiy
                                va asrlar asosi shakllangan taraqqiyot manbalari mavjud. Qadriyatlar oʻtmishning
                                ajralmas tashkil qiladi. Zero qadriyatlarda xalqning oʻziga xosligi,
                                urf-odatlari, ma`naviyati mujassamlanadi.
                                <br>
                                <br>“Qadriyat deyilganda, inson va insoniyat uchun ahamiyatli boʻlgan millat, elat va
                                ijtimoiyning yordamlariga va ularga xizmat ko'rsatishga va ularga yordam beradi
                                baholanib, qadr tabiat va jamiyat ne`matlari, hodisalari majmuini
                                tushunmogʻimiz lozim”[1].
                                <br>
                                <br>Ma`lumki, xalqlar umuminsoniy va milliy qadriyatlarga bo`linadi.
                                <br>
                                <br>Gʻ.Gʻofurov koʻrsatkichlari va boshqaruv turlari toʻgʻrisida mulohaza
                                yuritilganda, qadriyatlarning turlaridan biri sifatida ma`naviy qadriyatlar ajratiladi
                                koʻrlik[2].

                                <hr >
                                <br>[1] Qadriyatlar va ijtimoiy taraqqiyot (ilmiy ishlar toʻplami).
                                –T; “Oʻzbekiston”, 1997. B.198;
                                <br>Komilov T., Abidova S. Milliy axloqiy qadriyatlar va sifat tarbiyaviy ahamiyati.
                                OʻzR FA, “Muxlis”, 2000. B.20;
                                Ortiqov N. Ma`naviyat: milliy va umuminsoniy qadriyatlar. - T; “Oʻzbekiston”, 1997.B.48.
                                <br>[2] Gʻofurov Gʻ. Milliy an`analar//Xalq so`zi, 1993 yil. 11 fevral, B. 2
                                <br>
                                <br>
                                <br>
                            </p> @endif
                            @if($lang=="ru")<p class="mbr-text mbr-fonts-style display-7">
                                У каждого народа своя история
                                развитие и ценности, формировавшиеся веками. Ценности прошлого
                                является неотъемлемой частью. Ведь ценности - это личность народа,
                                традиции и духовность.
                                <br>
                                <br> «Ценность относится к нации, людям и людям, которые важны для человека и человечества.
                                служение и служение интересам и целям социальных групп
                                совокупность событий и явлений природы и общества, которые ценятся и ценятся
                                нам нужно понять» [1].
                                <br>
                                <br> Известно, что ценности делятся на общечеловеческие и национальные ценности.
                                <br>
                                <br> Комментарий Г. Гафурова о ценностях и их типах
                                выделение духовных ценностей как одного из видов ценностей
                                [2].
                                 <hr>
                                <br> [1] Ценности и общественное развитие (Сборник научных трудов).
                                –Т; «Узбекистан», 1997. С.198;
                                <br> Камилов Т., Абидова С. Национальные нравственные ценности и их воспитательное значение.
                                ФА УзР, «Веер», 2000. С.20;
                                Артиков Н. Духовность: национальные и общечеловеческие ценности. - Т; «Узбекистан», 1997.Б.48.
                                <br> [2] Гофуров Г`. Национальные традиции // Халк сузи, 1993. 11 февраля, д. 2
                                <br>
                                <br>
                                <br>
                            </p> @endif
                            @if($lang=="en")<p class="mbr-text mbr-fonts-style display-7">
                                Each nation has its own history
                                development and values ​​formed over the centuries. Values ​​of the past
                                is an integral part. After all, the values ​​are the identity of the people,
                                traditions and spirituality.
                                <br>
                                <br> “Value refers to a nation, people, and people that are important to man and humanity
                                serving and serving the interests and goals of social groups
                                a set of events and phenomena of nature and society that are valued and appreciated
                                we need to understand ”[1].
                                <br>
                                <br> It is known that values ​​are divided into universal and national values.
                                <br>
                                <br> G. Gafurov's commentary on values ​​and their types
                                distinguishing spiritual values ​​as one of the types of values
                                [2].

                                 <hr>
                                <br> [1] Values ​​and Social Development (Collection of Scientific Works).
                                –T; “Uzbekistan”, 1997. P.198;
                                <br> Kamilov T., Abidova S. National moral values ​​and their educational significance.
                                UzR FA, “Fan”, 2000. B.20;
                                Artikov N. Spirituality: national and universal values. - T; “Uzbekistan”, 1997.B.48.
                                <br> [2] Gʻofurov G`. National traditions // Xalq so'zi, 1993. February 11, B. 2
                                <br>
                                <br>
                                <br>
                            </p> @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section   class="content2 cid-t79CXtsQCS" id="content2-p">


        <div class="container">
            <div class="mbr-section-head">
                                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>@lang('public.menu_tad')</strong></h4>

                            </div>
            <div class="row mt-4 ">

                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div style="box-shadow: 0px 0px 10px 10px #d3dade" class="item-wrapper">

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
                    <div style="box-shadow: 0px 0px 10px 10px #d3dade" class="item-wrapper">
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
                    <div style="box-shadow: 0px 0px 10px 10px #d3dade" class="item-wrapper">
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


            </div>
            <div class="row w-100 mt--5">
                                    <div class="d-flex justify-content-end w-100">

                                    <a href="{{route('front.tadqiqot')}}" class="btn btn-outline-success display-3 ">@lang('public.see_all') ➔</a>
                                    </div>
                                </div>
        </div>

    </section>
    <section  class="content2 cid-t79CXtsQCS" id="content2-p">


        <div class="container">
            <div class="mbr-section-head">
                                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>@lang('public.t_2_6')</strong></h4>

                            </div>
            <div class="row mt-4 ">
                @foreach($shoirlar as $k=>$shoir)
                    @if($k==3) @break @endif
                <div  class="item features-image сol-12 col-md-6 col-lg-4">
                    <div style="box-shadow: 0px 0px 10px 10px #d3dade" class="item-wrapper">

                        <div class="item-img">
                            <img src='{{asset("photo/$shoir->photo")}}' alt="Haft shuaro" title="">
                        </div>


                            <div class="item-content">

                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>{{$shoir->name}}</strong></h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                    {!! substr($shoir['title_'.$lang],0,200) !!}
                                    ...</p>
                            </div>



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
                @endforeach

            </div>
            <div class="row w-100 mt--5">
                                    <div class="d-flex justify-content-end w-100">

                                    <a href="{{route('front.ijodkorlar')}}" class="btn btn-outline-success display-3 ">@lang('public.see_all') ➔</a>
                                    </div>
                                </div>
        </div>

    </section>
    <section  class="testimonails3 carousel slide testimonials-slider cid-toDxvNICcJ" data-interval="false" id="testimonials3-5">





        <div class="text-center container">
            <h3 class="mb-4 mbr-fonts-style display-2">
                <strong>@lang('public.j_azo')</strong>
            </h3>

            <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="8000">
                <div class="carousel-inner">


                    <div class="carousel-item">
                        <div class="user col-md-8">
                            <div class="user_image">
                                <img src="{{asset('fr/assets/images/team3.jpg')}}">
                            </div>
                            <div class="user_text mb-4">
                                <p class="mbr-fonts-style display-7">
                                    Themes in the Mobirise website builder offer multiple blocks: intros, sliders, galleries, forms, articles, and so on. Start a project and click on the red plus buttons to see the blocks available for your theme.
                                </p>
                            </div>
                            <div class="user_name mbr-fonts-style mb-2 display-7">
                                <strong>Alexa</strong>
                            </div>
                            <div class="user_desk mbr-fonts-style display-7">
                                DESIGNER
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="user col-md-8">
                            <div class="user_image">
                                <img src="{{asset('fr/assets/images/team2.jpg')}}">
                            </div>
                            <div class="user_text mb-4">
                                <p class="mbr-fonts-style display-7">
                                    Themes in the Mobirise website builder offer multiple blocks: intros, sliders, galleries, forms, articles, and so on. Start a project and click on the red plus buttons to see the blocks available for your theme.
                                </p>
                            </div>
                            <div class="user_name mbr-fonts-style mb-2 display-7">
                                <strong>Linda</strong>
                            </div>
                            <div class="user_desk mbr-fonts-style display-7">
                                DEVELOPER
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="user col-md-8">
                            <div class="user_image">
                                <img src="{{asset('fr/assets/images/team1.jpg')}}">
                            </div>
                            <div class="user_text mb-4">
                                <p class="mbr-fonts-style display-7">
                                    Themes in the Mobirise website builder offer multiple blocks: intros, sliders, galleries, forms, articles, and so on. Start a project and click on the red plus buttons to see the blocks available for your theme.
                                </p>
                            </div>
                            <div class="user_name mbr-fonts-style mb-2 display-7">
                                <strong>Linda</strong>
                            </div>
                            <div class="user_desk mbr-fonts-style display-7">
                                DEVELOPER
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-controls">
                    <a class="carousel-control-prev" role="button" data-slide="prev">
                        <span aria-hidden="true" class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" role="button" data-slide="next">
                        <span aria-hidden="true" class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
{{--    <section class="content2 cid-tozLAqHuGh" id="content2-0">--}}


{{--        <div class="container">--}}
{{--            <div class="mbr-section-head">--}}
{{--                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Tadqiqotlar</strong></h4>--}}

{{--            </div>--}}
{{--            <div class="row mt-4">--}}
{{--                <div class="mb-2 item features-image сol-12 col-md-6 col-lg-4">--}}
{{--                    <div class="item-wrapper">--}}
{{--                        <div class="item-img" >--}}
{{--                            <img style="border-radius: 10px;" src="{{asset('front/i1.png')}}" alt="" title="">--}}
{{--                        </div>--}}
{{--                        <div class="item-content p-1">--}}
{{--                            <h5 class="item-title mbr-fonts-style display-5"><a href="#top" class="text-primary">Easy and Simple</a></h5>--}}
{{--                            <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">--}}
{{--                                <strong>John Smith</strong><em> 10-10-2025</em></h6>--}}
{{--                            <p class="mbr-text mbr-fonts-style mt-3 display-7">Mobirise Page Maker is a free and simple--}}
{{--                                website builder - just drop site blocks to your page, add content and style it!</p>--}}
{{--                        </div>--}}
{{--                        <div class="mbr-section-btn item-footer mt-2">--}}
{{--                            <a href="" class="btn item-btn btn-outline-primary display-8" >--}}
{{--                                Batafsil ➔--}}
{{--                                </a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="mb-2 item features-image сol-12 col-md-6 col-lg-4">--}}
{{--                    <div class="item-wrapper">--}}
{{--                        <div class="item-img" >--}}
{{--                            <img style="border-radius: 10px;" src="{{asset('front/i2.png')}}" alt="" title="">--}}
{{--                        </div>--}}
{{--                        <div class="item-content p-1">--}}
{{--                            <h5 class="item-title mbr-fonts-style display-5"><a href="#top" class="text-primary">Easy and Simple</a></h5>--}}
{{--                            <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">--}}
{{--                                <strong>John Smith</strong><em> 10-10-2025</em></h6>--}}
{{--                            <p class="mbr-text mbr-fonts-style mt-3 display-7">Mobirise Page Maker is a free and simple--}}
{{--                                website builder - just drop site blocks to your page, add content and style it!</p>--}}
{{--                        </div>--}}
{{--                        <div class="mbr-section-btn item-footer mt-2">--}}
{{--                            <a href="" class="btn item-btn btn-outline-primary display-8" >--}}
{{--                                Batafsil ➔--}}
{{--                                </a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="mb-2 item features-image сol-12 col-md-6 col-lg-4">--}}
{{--                    <div class="item-wrapper">--}}
{{--                        <div class="item-img" >--}}
{{--                            <img style="border-radius: 10px;" src="{{asset('front/i3.png')}}" alt="" title="">--}}
{{--                        </div>--}}
{{--                        <div class="item-content p-1">--}}
{{--                            <h5 class="item-title mbr-fonts-style display-5"><a href="#top" class="text-primary">Easy and Simple</a></h5>--}}
{{--                            <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">--}}
{{--                                <strong>John Smith</strong><em> 10-10-2025</em></h6>--}}
{{--                            <p class="mbr-text mbr-fonts-style mt-3 display-7">Mobirise Page Maker is a free and simple--}}
{{--                                website builder - just drop site blocks to your page, add content and style it!</p>--}}
{{--                        </div>--}}
{{--                        <div class="mbr-section-btn item-footer mt-2">--}}
{{--                            <a href="" class="btn item-btn btn-outline-primary display-8" >--}}
{{--                                Batafsil ➔--}}
{{--                                </a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="row w-100">--}}
{{--                    <div class="d-flex justify-content-end w-100">--}}

{{--                    <a href="" class="btn btn-outline-success display-3 ">Barchasini ko'rish ➔</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--        </div>--}}
{{--    </section>--}}


{{--    //--}}
{{--    //--}}
{{--    //--}}
{{--    //--}}

    {{--    <section class="content5 cid-t79GjoiokT" id="content5-u">--}}

{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-12 col-lg-12">--}}


{{--                    --}}{{--                    <p class="mbr-text mbr-fonts-style display-7"><br>--}}


{{--                    @if($lang=="uz")--}}
{{--                        <p>Ma`naviy qadriyatlar shaxs va uning tarbiyasi, kamolotiga yetaklovchi asosiy omillardan biridir. Bunday qadriyatlarning aksariyati qoʻlyozma va toshbosma shaklda bizgacha yetib kelgan. Prezident Sh.Mirziyoev ta`kidlaganidek, &ldquo;...oʻzbek mumtoz va zamonaviy adabiyotini xalqaro miqyosda oʻrganish va targʻib qilish, ...bugungi kunda dunyo adabiy makonida yuz berayotgan eng muhim jarayonlar bilan uzviy bogʻliq holda tahlil etib, zarur ilmiy-amaliy xulosalar chiqarish, ... katta ahamiyatga ega&rdquo;<a href="#_ftn1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a>.</p><p>Darhaqiqat, tarixiy taraqqiyot jarayonida ajdodlarimiz tomonidan yaratilgan milliy-ma`naviy qadriyatlarni oʻrganish, ularni joriy imloga oʻgirish va keng kitobxonlar ommasiga taqdim etish eng muhim masalalardan biridir.</p><p>Shunday qadriyatlarimizning bir qismi XX asr boshlarida yaratilgan boʻlib, unda Xorazm adabiy muhiti alohida oʻrin tutadi. Bu muhitda asriy mumtoz an`analar davom ettirilib va boyitilib, oʻziga xos adabiy maktab vujudga keldi. Shoh va shoir Feruz (1844-1910) nomi bilan bogʻliq bu maktabda original va tarjima asarlar bilan birga, kitobat hamda uning targʻiboti keng oʻrin tutib, bayoz, devon, tazkira va majmualar tuzildi. Shulardan biri &ldquo;Haft shuaro&rdquo; majmuasi boʻlib, unda shahzoda shoirlarning she`rlari toʻplangan.</p><p>Shoʻro davri mafkurasi adabiy merosga partiyaviylik va sinfiylik tamoyillari asosida yondashgani sababli, saroy muhiti bilan bogʻliq ijodkorlar va ularning asarlari, jumladan &ldquo;Haft shuaro&rdquo; ham oʻrganilmay kelindi. Vaholanki, bu majmuada XIX asrning oxiri, XX asrning boshida ijod qilgan va she`riyatda muayyan iz qoldirgan yetti nafar shoirning turli janrlardagi merosidan namunalar jamlangan. Undagi she`riy asarlar tarkibi, adabiy va biografik ma`lumotlar hozirga qadar ilmda yoritilmagan hamda oʻz bahosini olmagan. Lekin bu meros oʻsha davr adabiy jarayonida faol qatnashgan yangi ijodkorlarni kashf etishga, ular ijodini atroflicha tadqiq va targʻib qilishga hamda adabiy muhit tarixi tadqiqining boʻsh qolgan sahifalarini toʻldirishga xizmat qiladi. Bu esa Feruz davri adabiy muhiti, undagi badiiy ijodkorlik qirralari haqidagi mavjud tasavvurlarimizni kengaytiradi. Shuningdek, &ldquo;Haft shuaro&rdquo; XX asr boshidagi adabiy jarayonning oʻziga xos xususiyatlarini va Feruz shajarasiga mansub shoirlarning badiiy ijoddagi hissasini aniqlash hamda davr adabiy muhitini yaxlit, uyushgan hodisa sifatida tushunishga imkon beradi. Bu hol adabiyotshunoslikda xolislik tamoyili izchil amalga oshirilayotgan hozirgi kunda, ayniqsa, muhim boʻlib, ushbu tadqiqotning dolzarbligini belgilaydi.</p><p>&ldquo;Haft shuaro&rdquo;ga munosabat dastlab shahzoda shoirlar zamondoshlarining asarlari va esdaliklaridan boshlangan. Jumladan, Hasanmurod Laffasiy (1880-1949) tazkirasidagi Murodiy, Farrux, Sultoniy, Sa`diy va Bayoniy haqidagi ma`lumotlarda ularning she`rlari Feruzga ma`qul boʻlgach, xon ularni &ldquo;Haft shuaro&rdquo;ga kiritishni Bayoniyga topshirgani qayd etiladi, lekin majmua haqida boshqa ma`lumotlar keltirilmaydi<a href="#_ftn2"><!--[if !supportFootnotes]-->[2]<!--[endif]--></a>. Bobojon Tarroh-Xodim (1878-1971) oʻz esdaliklarining yaratilishi haqida shunday yozadi: &ldquo;Shu davrda boʻlgan butun shoirlarning nazmlarini Muhammad ikkinchiga oʻqib berar hamda nashr qilishga yordam berar edim. O`ttiz bir nafar shoirning butun ahvoli menga ma`lum boʻlgani uchun bu bayonotlarni oʻz qoʻlim, oʻz fikrim bilan yozib, sarhadiga yetkurdim&rdquo;<a href="#_ftn3"><!--[if !supportFootnotes]-->[3]<!--[endif]--></a>. Muhimi shundaki, ana shu oʻttiz bir nafar shoir orasida &ldquo;Haft shuaro&rdquo;ga she`rlari kiritilgan Sultoniy, Sodiq, Sa`diy, Bayoniy va Oqil ham bor edi. Garchi Xodim &ldquo;Haft shuaro&rdquo;ni bevosita tilga olmasa ham, yuqoridagi shoirlar tarjimai holi va ijodining ayrim jihatlari xususida yangi ma`lumotni bayon etadi.</p><p>&ldquo;Haft shuaro&rdquo; haqidagi fikrlar XX asrning 60-yillari boshidan qator maqola va risolalarda koʻrina boshlaydi va tabiiyki, ularda bu davrdagi taomilga koʻra saroy adabiy muhitiga, xususan, hukmdorlarga yaqin ijod ahli va ularning asarlariga salbiy munosabat ustuvorlik qilardi. Shundan keyin oʻtgan salkam yarim asrlik davrda ushbu majmuaga qiziqish davom etdi.</p><p>Mazkur manbaning oʻrganilish davrini shartli ravishda ikki bosqichga ajratish mumkin: 1) 60-yillardan 90-yillargacha; 2) mustaqillik davri bosqichi. Adabiy merosga yondashuv xususiyatlari har bir bosqichda oʻziga xos ifodasini topdi. Birinchi bosqichda &ldquo;Haft shuaro&rdquo;ga kirgan shoirlardan faqat Bayoniy ijodiga nisbatan xolislik koʻringan boʻlsa, ikkinchi bosqichda yetti nafar shoir va ularning asarlari xususida ham muxtasar boʻlsa-da, ayrim fikrlar aytila boshlandi.</p><p>Akademik V.Abdullayevning 80-yillardagi tadqiqotlarida shahzoda shoirlarning Navoiyga izdoshligi masalasiga doir fikrlar mavjud. Jumladan, adabiyotshunos &ldquo;Navoiy va bir davrning ikki shoiri&rdquo; maqolasida Farrux va Bayoniyning Navoiy an`analariga munosabatiga toʻxtalar ekan, Bayoniy dunyoqarashidagi nuqtai nazar va gʻoyaviy saviya koʻlamini alohida ta`kidlab, uni &ldquo;bedorlik, hushyorlik, ma`nidorlik shoiri&rdquo;, Navoiyning chinakam izdoshi sifatida ta`riflaydi<a href="#_ftn4"><!--[if !supportFootnotes]-->[4]<!--[endif]--></a>. &ldquo;Navoiyga ijodiy izdoshlik mezoni haqida&rdquo; sarlavhali maqolasida esa Sultoniyning ayrim tatabbu` gʻazallari va taxmislarini tahlil etib, unga &ldquo;xalq</p><p>hayoti, orzu-havasi bilan aloqador boʻlgan, Navoiydagi masalalarni chetlab oʻtgan va Navoiydagi dunyoviylik mezonini buzib, ilohiylikni boʻrttirgan&rdquo; shoir sifatida ijodiga salbiy baho beradi<a href="#_ftn5"><!--[if !supportFootnotes]-->[5]<!--[endif]--></a>.</p><p>Adabiyotshunos N.Qobulov esa oʻzining &ldquo;XIX asr oxiri va XX asr boshlarida Xorazmda madaniy va adabiy hayot&rdquo; maqolasida shahzoda shoirlar ijodiga munosabat bildirib, &ldquo;feodal saroy adabiyotining eng muhim belgilari taqlidchilik, shaklbozlik, payravchilik, madhiyabozlik avj olishi bilan xarakterlanadi&rdquo; deb hukmron mafkuraga muvofiq tavsiflaydi va dalil sifatida Murodiy, Farrux, Sultoniy she`rlaridan ayrim parchalar keltiradi<a href="#_ftn6"><!--[if !supportFootnotes]-->[6]<!--[endif]--></a>.</p><p>90-yillarning boshidan mustaqillik mafkurasi tufayli yangilangan ilmiy tafakkurda adabiy merosga xolis yondashuv namunalari Feruz shajarasi shoirlarining ijodini oʻrganishda ham koʻrina boshladi. Bu sohada N.Jumaxoʻja, D.Rahim, Sh.Matrasul, I.Adizova, G.Ismoilovalarning risola va maqolalari alohida e`tiborga loyiqdir. Xususan, 1991-1995 yillarda Feruzga bagʻishlab chop etilgan ommabop ikki kitobdagi tarixiy-badiiy lavhalarda shahzoda shoirlarning hayoti va ijodi toʻgʻrisida qimmatli ma`lumotlar bayon etilgan. Jumladan, birinchi kitobda Murodiy, Oqil, Sodiq, Sultoniy, Sa`diy tarjimai holi va asarlariga doir muxtasar faktlar bor<a href="#_ftn7"><!--[if !supportFootnotes]-->[7]<!--[endif]--></a>. Ikkinchi kitobda yuqoridagi fikrlar davom ettirilib va boyitilib, shahzoda shoirlar yetti nafarining ham badiiy merosi haqida fikr yuritiladi va ularning adabiy muhitdagi oʻrni umumiy tarzda ta`kidlanib, quyidagi asosli xulosaga kelinadi: &ldquo;Haft shuaro&rdquo; majmuasi ham Xorazm adabiy muhitini oʻrganishda muhim manbalardan biri, uni oʻrganish va targʻib qilishdan adabiyot foyda koʻrsa koʻradiki, aslo zarar koʻrmaydi. Shunday ekan, &ldquo;Haft shuaro&rdquo;, &ldquo;Tazkirai si shuaroi Feruzshohiy&rdquo; kabi asarlarni nashr etish, ularni kitobxonlarga yetkazish bugunning talabi boʻlib qolmoqda&rdquo;<a href="#_ftn8"><!--[if !supportFootnotes]-->[8]<!--[endif]--></a>.</p><p>Adabiyotshunos G.Ismoilova bu fikrlarni quvvatlab, shunday yozadi: &ldquo;Saroy maddohi&rdquo;, &ldquo;taqlidchi&rdquo;, &ldquo;ijodi payrav she`rlardangina iborat&rdquo; deb talqin qilingan koʻpgina qalam ahlining she`rlarini sinchiklab kuzatsak, ularning zamona taqozosi bilan oʻz koʻnglidagi nozik hislarni, qalbidagi alam-dardlarni nechogʻlik ustalik bilan ifoda etganlariga guvoh boʻlamiz&rdquo;<a href="#_ftn9"><!--[if !supportFootnotes]-->[9]<!--[endif]--></a>.</p><p>Shuningdek, saroy muhitidagi shoirlar ijodining adabiy-estetik qimmati va mumtoz she`riyatimizni boyitishdagi ulushi xususida boshqa qator tadqiqotlarda ham ahamiyatga molik fikrlar bayon etilgan<a href="#_ftn10"><!--[if !supportFootnotes]-->[10]<!--[endif]--></a>.</p><p>Koʻrinadiki, yuqorida qayd etilgan risola va maqolalarda &ldquo;Haft shuaro&rdquo;ni batafsil oʻrganish, undagi shoirlar hayoti va she`rlarini monografik yoʻnalishda maxsus tadqiq etish maqsadi qoʻyilmagan. Shu tufayli yangilangan davrda turli adabiy muhit va yoʻnalishlardan iborat yagona oʻzbek milliy adabiyotini yaxlit holda birlamchi manbalar asosida haqqoniy oʻrganish zaruriyati ham tadqiqot dolzarbligini oshiradi.</p><p><!--[if !supportFootnotes]--></p><p>&nbsp;</p><p><!--[endif]--></p><p><a href="#_ftnref1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Mirziyoev.Sh.Niyati ulugʻ xalqning ishi ham ulugʻ, hayoti yorugʻ va kelajagi farovon boʻladi.-T; &ldquo;Oʻzbekiston&rdquo;, 2019.339-b</p><p><a href="#_ftnref2"><!--[if !supportFootnotes]-->[2]<!--[endif]--></a> Laffasiy H. Tazkirai shuaro. OʻzRFA Sharqshunoslik instituti qoʻlyozmalar fondi. Inv.№ 9494; Laffasiy H. Tazkirai shuaro. Urganch: Xorazm, 1992- 119-B.</p><p><a href="#_ftnref3"><!--[if !supportFootnotes]-->[3]<!--[endif]--></a> Bobojon Tarroh &ndash; Xodim. Xorazm navozandalari.-T.: Adabiyot va san`at, 1994- B.7-8.</p><p>&nbsp;</p><p><a href="#_ftnref4"><!--[if !supportFootnotes]-->[4]<!--[endif]--></a> Abdullayev V. Saylanma. &ndash;T.: Adabiyot va san`at, 1982 -B.228-230.</p><p>&nbsp;</p><p><a href="#_ftnref5"><!--[if !supportFootnotes]-->[5]<!--[endif]--></a> Abdullayev V. Oʻsha manba. -B.234.</p><p><a href="#_ftnref6"><!--[if !supportFootnotes]-->[6]<!--[endif]--></a> Qobulov N., Moʻminova V., Haqqulov I. Avaz va uning adabiy muhiti &ndash;T.: Fan, 1987- B.25-30</p><p><a href="#_ftnref7"><!--[if !supportFootnotes]-->[7]<!--[endif]--></a> Rahim D., Matrasul Sh. Feruz. Shoh va shoir qismati. &ndash;T.: Adabiyot va san`at, 1991-B.78-85.</p><p><a href="#_ftnref8"><!--[if !supportFootnotes]-->[8]<!--[endif]--></a> Rahim D., Matrasul Sh., Jumaxoʻja N. Feruz. Ikkinchi kitob. &ndash;T.: Oʻzbekiston, 1995-B.45.</p><p><a href="#_ftnref9"><!--[if !supportFootnotes]-->[9]<!--[endif]--></a> Ismoilova G. Feruz davri Xorazm adabiy muhiti. Filol.fanlari.nomz. dissert. T.:TAI, 1995- B.31-32.</p><p><a href="#_ftnref10"><!--[if !supportFootnotes]-->[10]<!--[endif]--></a> Jumaxoʻja N. Feruz madaniyat va san`at homiysi. &ndash;T.: Fan, 1996 -B.89. Oʻsha muallif. Feruz.// Xalq soʻzi. 1992. 29 yanvar. Jumaxoʻja N. Adizova I. Soʻzdin baqoliroq yodgor yoʻqdur&ndash; T.: Oʻzbekiston, 1995 -B.150</p>--}}
{{--                    @endif--}}
{{--                    @if($lang=="ru")--}}
{{--                        <p>Духовные ценности являются одним из основных факторов, ведущих к развитию личности и ее воспитанию. Многие из этих ценностей дошли до нас в рукописном и литографическом виде. Как отметил Президент Ш.Мирзиёев, &laquo;&hellip;изучение и популяризация узбекской классической и современной литературы на международном уровне,&hellip;анализ важнейших процессов, происходящих сегодня в мировом литературном пространстве, необходимые научные и практические выводы , ... имеет большое значение&rdquo;.<a href="#_ftn1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a></p><p>Ведь в процессе исторического развития одним из важнейших вопросов является изучение национальных и духовных ценностей, созданных нашими предками, их перевод в современную орфографию и представление широкому кругу читателей.</p><p>Некоторые из этих ценностей были созданы в начале ХХ века, в котором хорезмская литературная среда занимает особое место. В этой среде были продолжены и обогащены многовековые классические традиции, создана уникальная литературная школа. Названная в честь царя и поэта Феруза (1844-1910), школа, наряду с оригинальными и переводными произведениями, широко использовалась в качестве книги и ее пропаганды, а также баяза, девона, тезкиры, комплексов. Одним из них является комплекс Хафт Шуаро, в котором собраны стихи принца.</p><p>Из-за партийно-классового подхода к литературному наследию советской эпохи художники и их произведения, связанные с дворцовой средой, в том числе Хафт Шуаро, не изучались. Однако в этом комплексе собраны образцы наследия семи поэтов разных жанров, творивших в конце XIX и начале XX веков и оставивших определенный след в поэзии. Композиция его поэтических произведений, литературно-биографические сведения до сих пор не освещены в науке и не получили своей оценки. Однако это наследие служит для открытия новых писателей, активно участвовавших в литературном процессе того времени, для детального изучения и популяризации их творчества, восполнения пробелов в изучении истории литературной среды. Это расширяет имеющиеся у нас представления о литературной среде ферузского периода, аспектах художественного творчества в ней. Хафт Шуаро также позволяет выявить специфику литературного процесса начала ХХ века и вклад поэтов семьи Феруз в художественное творчество, а также понять литературную среду периода как единое, организованное явление. Это особенно важно в условиях, когда в литературе последовательно применяется принцип объективности, что и определяет актуальность данного исследования.</p><p>Отношение к Хафту Шуаро началось с произведений и воспоминаний современников князя. В частности, сведения о Мураде, Фаррухе, Султани, Саади и Баяни в мемуарах Хасана Мурада Лаффаси (1880-1949) гласят, что, когда Ферузу понравились их стихи, хан поручил Баяни включить их в Хафт Шуаро, но комплекс Иная информация не предоставляется <a href="#_ftn2"><!--[if !supportFootnotes]-->[2]<!--[endif]--></a>. Бабаджан Таррох-Хадим (1878-1971) пишет о создании своих мемуаров: &laquo;Мухаммад читал и помогал издавать стихи всех поэтов того периода. Так как я знал все положение тридцати одного поэта, я своими руками, своими мыслями написал эти высказывания и довел их до границы&raquo;.<a href="#_ftn3"><!--[if !supportFootnotes]-->[3]<!--[endif]--></a> Важно отметить, что среди этих тридцати одного поэта были Султани, Садик, Сади, Баяни и Акил, чьи стихи вошли в &laquo;Хафт Шуаро&raquo;. Хотя Хадим не упоминает Хафта Шуаро напрямую, это дает новые сведения о биографии и некоторых аспектах творчества вышеперечисленных поэтов.</p><p>Мнения о Хафт Шуаро стали появляться в ряде статей и брошюр в начале 1960-х годов, и они, естественно, доминировали в литературной среде дворца, особенно в близкой к правителям и их произведениям. После этого интерес к комплексу сохранялся почти полвека.</p><p>Период изучения этого источника можно разделить на два этапа: 1) с 60-х по 90-е годы; 2) этап периода независимости. Особенности подхода к литературному наследию находили свое выражение на каждом этапе. На первом этапе из поэтов, вошедших в хафт шуаро, беспристрастными считались только произведения Баяни, тогда как на втором этапе высказывались некоторые мнения, хотя и кратко, о семи поэтах и ​​их произведениях.</p><p>Исследования академика В.Абдуллаева 80-х годов содержат идеи по вопросу о княжеских сторонниках Навои. В частности, литературовед в своей статье &laquo;Навои и два поэта одного периода&raquo; акцентирует внимание на отношении Фарруха и Баяни к навоийским традициям, подчеркивая масштабность и идейный уровень мировоззрения Баяни, называя его &laquo;поэтом зоркости, бдительность, смысл.&quot; описывает как последователь<a href="#_ftn4"><!--[if !supportFootnotes]-->[4]<!--[endif]--></a>. В статье &laquo;О критериях творческого продолжения Навои&raquo;.</p><p>отрицательно оценивал его творчество как поэта, жизнь которого была связана с его мечтами, который обходил вопросы Навои и нарушал критерии светскости в Навои и преувеличивал божественность. <a href="#_ftn5"><!--[if !supportFootnotes]-->[5]<!--[endif]--></a></p><p>Литературовед Н. Кабулов в своей статье &laquo;Культурно-литературная жизнь Хорезма в конце XIX и начале XX веков&raquo; комментирует творчество княжеских поэтов, говоря, что и приводит в качестве доказательства отрывки из поэм Муроди, Фарруха, Султани.<a href="#_ftn6"><!--[if !supportFootnotes]-->[6]<!--[endif]--></a>.</p><p>С начала 1990-х годов в изучении творчества ферузских поэтов в обновленном научном мышлении, обусловленном идеологией независимости, стали просматриваться примеры объективного подхода к литературному наследию. Особого внимания в этой области заслуживают брошюры и статьи Н. Джумаходжи, Д. Рахима, Ш. Матрасул, И. Адизовой, Г. Исмаиловой. В частности, историко-художественные таблички двух популярных книг, посвященных Ферузу, изданных в 1991-1995 годах, содержат ценные сведения о жизни и творчестве поэтов-князей. В частности, первая книга содержит краткие сведения о биографии и творчестве Муроди, Акила, Садика, Султани, Саади.<a href="#_ftn7"><!--[if !supportFootnotes]-->[7]<!--[endif]--></a> Во второй книге названные идеи продолжены и обогащены, рассмотрено художественное наследие всех семи княжеских поэтов, в целом подчеркнуто их место в литературной среде, и сделаны следующие обоснованные выводы: Комплекс Хафт Шуаро является одним из важнейших источников в изучении хорезмийской литературной среды. Поэтому издание таких произведений, как &laquo;Хафт шуаро&raquo;, &laquo;Тезкиреи си шуарои Ферузшахи&raquo; и доведение их до читателей, остается требованием сегодняшнего дня.&rdquo;<a href="#_ftn8"><!--[if !supportFootnotes]-->[8]<!--[endif]--></a>.</p><p>Литературовед Г.Исмаилова поддерживает эти идеи и пишет: Мы видим, как умело они выражают свою боль&rdquo;<a href="#_ftn9"><!--[if !supportFootnotes]-->[9]<!--[endif]--></a></p><p>Имеется также ряд других исследований о литературно-эстетической ценности произведений поэтов дворцовой среды и их вкладе в обогащение нашей классической поэзии. <a href="#_ftn10"><!--[if !supportFootnotes]-->[10]<!--[endif]--></a></p><p>По-видимому, упомянутые выше брошюры и статьи не преследуют цели подробного изучения &ldquo;Хафта Шуаро&rdquo;, изучения жизни и стихов поэтов в виде монографии. В связи с этим необходимость целостного изучения единой узбекской национальной литературы, состоящей из разных литературных сред и направлений в обновленный период, на основе первоисточников повышает актуальность исследования.</p><!--[endif]--><p><a href="#_ftnref1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Мирзиёев Ш. Велик и труд народа с великим намерением, жизнь его светла и будущее благополучно.-Т; &laquo;Узбекистан&raquo;, 2019.339-с.</p><p><a href="#_ftnref2"><!--[if !supportFootnotes]-->[2]<!--[endif]--></a> Лаффасий Х. Тазкирай шуаро. Рукописный фонд Института востоковедения РАН. Инв.№ 9494; Лаффасий Х. Тазкирай шуаро. Ургенч: Хорезм, 1992- 119-С.</p><p><a href="#_ftnref3"><!--[if !supportFootnotes]-->[3]<!--[endif]--></a> Бободжон Таррох - Сотрудник. Хорезмские музыканты.-Т.: Литература и искусство, 1994- С.7-8.</p><p><a href="#_ftnref4"><!--[if !supportFootnotes]-->[4]<!--[endif]--></a> Абдуллаев В. Отбор. &ndash;Т.: Литература и искусство, 1982. &ndash; С.228-230..</p><p>&nbsp;</p><p><a href="#_ftnref5"><!--[if !supportFootnotes]-->[5]<!--[endif]--></a> Абдуллаев В. Тот же источник. -С.234.</p><p><a href="#_ftnref6"><!--[if !supportFootnotes]-->[6]<!--[endif]--></a> Кобулов Н., Муминова В., Хаккулов И. Аваз и его литературная среда - Т.: Наука, 1987- С.25-30</p><p><a href="#_ftnref7"><!--[if !supportFootnotes]-->[7]<!--[endif]--></a> Рахим Д., Матрасул Ш. Феруз. Судьба короля и поэта. &ndash;Т.: Литература и искусство, 1991-С.78-85..</p><p><a href="#_ftnref8"><!--[if !supportFootnotes]-->[8]<!--[endif]--></a> Рахим Д., Матрасул Ш., Джумаходжа Н. Феруз. Вторая книга. &ndash;Т.: Узбекистон, 1995-С.45.</p><p><a href="#_ftnref9"><!--[if !supportFootnotes]-->[9]<!--[endif]--></a> Исмаилова Г. Феруз периода Хорезмской литературной среды. Филол.фанлари.номз. диссертация. Т.: ТАИ, 1995- С.31-32.</p><p>&nbsp;</p><p><!--[if !supportFootnotes]-->[10]<!--[endif]--> Джумаходжа Н. Феруз &ndash; меценат культуры и искусства. &ndash;Т.: Наука, 1996 &ndash; С.89. Тот же автор. Феруз.// Народное слово. 1992. 29 января. Джумаходжа Н. Адизова И. Нет лучшего памятника, чем слово &ndash; Т.: &nbsp;&nbsp;&nbsp;Узбекистан, 1995 &ndash; С.150</p><p>&nbsp;</p>--}}
{{--                    @endif--}}
{{--                    @if($lang=="en")--}}
{{--                        <p>Spiritual values are one of the main factors leading to the development of the individual and his upbringing. Many of these values have come down to us in manuscript and lithographic form. As noted by President Sh. Mirziyoyev, &ldquo;... the study and promotion of Uzbek classical and modern literature at the international level, ... the analysis of the most important processes taking place in the world literary space today, the necessary scientific and practical conclusions , ... is of great importance &rdquo;<a href="#_ftn1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a>.</p><p>Indeed, in the process of historical development, one of the most important issues is to study the national and spiritual values created by our ancestors, to translate them into the current spelling and present them to a wide readership.</p><p>Some of these values were created in the early twentieth century, in which the Khorezm literary environment has a special place. In this environment, the centuries-old classical traditions were continued and enriched, and a unique literary school was created. Named after the king and poet Feruz (1844-1910), the school, along with original and translated works, was widely used as a book and its propaganda, as well as bayaz, devon, tazkira, and complexes. One of them is the &ldquo;Haft Shuaro&rdquo; complex, which contains poems by the prince.</p><p>Due to the partisan and class approach to the literary heritage of the Soviet era, the artists and their works related to the palace environment, including Haft Shuaro, were not studied. However, this complex contains samples of the heritage of seven poets of different genres, who created in the late XIX and early XX centuries and left a certain mark on poetry. The composition of his poetic works, literary and biographical information has not yet been covered in science and has not received its assessment. However, this legacy serves to discover new writers who were active in the literary process of the time, to study and promote their work in detail, and to fill in the blanks of the study of the history of the literary environment. This expands our existing understanding of the literary environment of the Feruz period, the aspects of artistic creativity in it. Haft Shuaro also allows us to identify the specifics of the literary process of the early twentieth century and the contribution of poets of the Feruz family to the artistic creation, as well as to understand the literary environment of the period as a single, organized phenomenon. This is especially important at a time when the principle of objectivity is being consistently applied in literature, which determines the relevance of this study.</p><p>The attitude to &ldquo;Haft Shuaro&rdquo; began with the works and memoirs of the prince&#39;s contemporaries. In particular, the information about Murad, Farrukh, Sultani, Saadi and Bayani in the memoirs of Hasan Murad Laffasi (1880-1949) states that when Feruz liked their poems, the khan instructed Bayani to include them in the &ldquo;Haft Shuaro&rdquo;, but the complex No other information is provided<a href="#_ftn2"><!--[if !supportFootnotes]-->[2]<!--[endif]--></a>. Babajan Tarroh-Khadim (1878-1971) writes about the creation of his memoirs: &ldquo;Muhammad used to read and help to publish the poems of all the poets of that period. Since I knew the whole situation of thirty-one poets, I wrote these statements with my own hands, with my own thoughts, and brought them to the border. &quot;<a href="#_ftn3"><!--[if !supportFootnotes]-->[3]<!--[endif]--></a>. Importantly, among these thirty-one poets were Sultani, Sadik, Sa`di, Bayani and Akil, whose poems were included in the Haft Shuaro. Although the employee does not directly mention the Haft Shuaro, it provides new information about the biography and some aspects of the work of the above poets.</p><p>Opinions about Haft Shuaro began to appear in a number of articles and pamphlets in the early 1960s, and they naturally dominated the literary environment of the palace, especially those close to the rulers and their works. After that, interest in the complex continued for almost half a century.</p><p>The period of study of this source can be divided into two stages: 1) from the 60s to the 90s; 2) the stage of the independence period. The features of the approach to literary heritage have found their own expression at each stage. In the first stage, the poets included in the Haft Shuaro were impartial, but in the second stage, some opinions were expressed about the seven poets and their works, although they were brief.</p><p>Academician V.Abdullaev&#39;s research in the 80s contains ideas on the issue of the prince&#39;s followers to Navoi. In particular, the literary critic in his article &quot;Navoi and two poets of the same period&quot; focuses on the attitude of Farrukh and Bayani to the Navai traditions, emphasizing the scale and ideological level of Bayani&#39;s worldview, calling him a &quot;poet of vigilance, vigilance, meaning.&quot; describes as a follower<a href="#_ftn4"><!--[if !supportFootnotes]-->[4]<!--[endif]--></a>. In the article &quot;On the criteria of creative follow-up to Navai&quot; negatively evaluates his work as a poet, whose life is connected with his dreams, who bypasses the issues of Navai and violates the criteria of secularism in Navai and exaggerates the divinity<a href="#_ftn5"><!--[if !supportFootnotes]-->[5]<!--[endif]--></a>.</p><p>Literary critic N. Kabulov, in his article &quot;Cultural and literary life in Khorezm in the late XIX and early XX centuries&quot; commented on the work of prince poets, saying that and cites excerpts from the poems of Muradi, Farrukh, Sultani as evidence<a href="#_ftn6"><!--[if !supportFootnotes]-->[6]<!--[endif]--></a>.</p><p>From the beginning of the 1990s, examples of an objective approach to literary heritage began to be seen in the study of the works of Feruz poets in the renewed scientific thinking due to the ideology of independence. The pamphlets and articles of N.Jumakhoja, D.Rahim, Sh.Matrasul, I.Adizova, G.Ismailova deserve special attention in this field. In particular, the historical and artistic plates of two popular books dedicated to Feruz, published in 1991-1995, contain valuable information about the life and work of the prince poets. In particular, the first book contains brief facts about the biography and works of Murodi, Akil, Sadik, Sultani, Sa`di <a href="#_ftn7"><!--[if !supportFootnotes]-->[7]<!--[endif]--></a>. In the second book, the above ideas are continued and enriched, the artistic heritage of all seven princes is considered, and their role in the literary environment is emphasized in general, and the following conclusion is made: If literature benefits from study and advocacy, it will not suffer at all. Therefore, the publication of works such as &quot;Haft Shuaro&quot;, &quot;Tazkirai shuaroi Feruzshahi&quot; and their delivery to readers remains a requirement of today&quot;<a href="#_ftn8"><!--[if !supportFootnotes]-->[8]<!--[endif]--></a>.</p><p>Literary critic G.Ismailova supports these ideas and writes: We see how skillfully they express their pain&rdquo;<a href="#_ftn9"><!--[if !supportFootnotes]-->[9]<!--[endif]--></a>.</p><p>There are also a number of other studies on the literary and aesthetic value of the works of poets in the palace environment and their contribution to the enrichment of our classical poetry<a href="#_ftn10"><!--[if !supportFootnotes]-->[10]<!--[endif]--></a>.</p><p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Apparently, the above-mentioned pamphlets and articles do not aim to study Haft Shuaro in detail, or to study the life and poems of the poets in a monograph. As a result, the need for a holistic study of the single Uzbek national literature, consisting of different literary environments and trends in the modern period, based on primary sources, increases the relevance of the research.</strong><!--[if !supportFootnotes]--></p><p>&nbsp;</p><!--[endif]--><p><a href="#_ftnref1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Mirziyoev.Sh.Niyati ulugʻ xalqning ishi ham ulugʻ, hayoti yorugʻ va kelajagi farovon boʻladi.-T; &ldquo;Oʻzbekiston&rdquo;, 2019.339-b</p><p><a href="#_ftnref2"><!--[if !supportFootnotes]-->[2]<!--[endif]--></a> Laffasiy H. Tazkirai shuaro. OʻzRFA Sharqshunoslik instituti qoʻlyozmalar fondi. Inv.№ 9494; Laffasiy H. Tazkirai shuaro. Urganch: Xorazm, 1992- 119-B.</p><p><a href="#_ftnref3"><!--[if !supportFootnotes]-->[3]<!--[endif]--></a> Bobojon Tarroh &ndash; Xodim. Xorazm navozandalari.-T.: Adabiyot va san`at, 1994- B.7-8.</p><p>&nbsp;</p><p><a href="#_ftnref4"><!--[if !supportFootnotes]-->[4]<!--[endif]--></a> Abdullayev V. Saylanma. &ndash;T.: Adabiyot va san`at, 1982 -B.228-230.</p><p>&nbsp;</p><p><a href="#_ftnref5"><!--[if !supportFootnotes]-->[5]<!--[endif]--></a> Abdullayev V. Oʻsha manba. -B.234.</p><p><a href="#_ftnref6"><!--[if !supportFootnotes]-->[6]<!--[endif]--></a> Qobulov N., Moʻminova V., Haqqulov I. Avaz va uning adabiy muhiti &ndash;T.: Fan, 1987- B.25-30</p><p><a href="#_ftnref7"><!--[if !supportFootnotes]-->[7]<!--[endif]--></a> Rahim D., Matrasul Sh. Feruz. Shoh va shoir qismati. &ndash;T.: Adabiyot va san`at, 1991-B.78-85.</p><p><a href="#_ftnref8"><!--[if !supportFootnotes]-->[8]<!--[endif]--></a> Rahim D., Matrasul Sh., Jumaxoʻja N. Feruz. Ikkinchi kitob. &ndash;T.: Oʻzbekiston, 1995-B.45.</p><p><a href="#_ftnref9"><!--[if !supportFootnotes]-->[9]<!--[endif]--></a> Ismoilova G. Feruz davri Xorazm adabiy muhiti. Filol.fanlari.nomz. dissert. T.:TAI, 1995- B.31-32.</p><p><a href="#_ftnref10"><!--[if !supportFootnotes]-->[10]<!--[endif]--></a> Jumaxoʻja N. Feruz madaniyat va san`at homiysi. &ndash;T.: Fan, 1996 -B.89. Oʻsha muallif. Feruz.// Xalq soʻzi. 1992. 29 yanvar. Jumaxoʻja N. Adizova I. Soʻzdin baqoliroq yodgor yoʻqdur&ndash; T.: Oʻzbekiston, 1995 -B.150</p>--}}
{{--                    @endif--}}


{{--                    --}}{{--                       </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
<br>
<br>
<br>

@endsection
