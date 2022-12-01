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

    <section  class="features9 cid-t77Hy2O0rR" id="features10-3">
        <!---->


        <div  class="container">

            <div class="row mt-4">
                <div class="card col-12">
                    <div style="box-shadow: 0px 0px 5px 5px #d4dff4"  class="card-wrapper">

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

                                    <a href="{{route('front.tadqiqot')}}" class="btn btn-outline-primary display-3 ">@lang('public.see_all') ➔</a>
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

                                    <a href="{{route('front.ijodkorlar')}}" class="btn btn-outline-primary display-3 ">@lang('public.see_all') ➔</a>
                                    </div>
                                </div>
        </div>

    </section>


    <section class="image4 cid-t78KjRV1zs" id="image4-f">
        <div class="mbr-section-head m-4">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>@lang('public.bosh_sahifa3')</strong></h4>

        </div>

            <div class="container">
                @foreach($photos as $k=>$photo)
                    @if($k==2) @break @endif
                <div class="row mt-3">


                    <div class="col-12 col-lg-6">

                        <img style="box-shadow: 0px 0px 5px 5px #c6c6f4; height: 300px;" class=" w-100 img-fluid img-thumbnail " src="photo2/{{$photo->photo2}}" alt="haftshuaro">
                        {{--                    <p class="mbr-text mbr-fonts-style mt-2 align-center display-4">--}}
                        {{--                        @if($lang=="ru") {{$d->outor2_ru}}@endif--}}
                        {{--                        @if($lang=="uz") {{$d->outor2_uz}}@endif--}}
                        {{--                        @if($lang=="en") {{$d->outor2_en}}@endif--}}
                        {{--                        </p>--}}

                    </div>
                    <div class="col-12 col-lg-6">

                        <img style="box-shadow: 0px 0px 5px 5px #c6c6f4; height: 300px;" class=" w-100 img-fluid img-thumbnail" src="photo1/{{$photo->photo1}}" alt="haftshuaro">
                        {{--                    <p class="mbr-description mbr-fonts-style mt-2 align-center display-4">--}}
                        {{--                        @if($lang=="ru") {{$d->outor1_ru}}@endif--}}
                        {{--                        @if($lang=="uz") {{$d->outor1_uz}}@endif--}}
                        {{--                        @if($lang=="en") {{$d->outor1_en}}@endif</p>--}}
                        {{--                </div>--}}

                    </div>
                </div>
                @endforeach
                    <div class="row w-100 mt-4">
                        <div class="d-flex justify-content-end w-100">

                            <a href="{{route('front.fotogalereya')}}" class="btn btn-outline-primary display-3 ">@lang('public.see_all') ➔</a>
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

                    @foreach($azolar as $azo)
                    <div class="carousel-item">
                        <div class="user col-md-8">
                            <div class="user_image">
                                <img src='{{asset("fr/jamoa/".$azo['rasm'])}}' alt="{{$azo['ism']}}">
                            </div>
                            <div class="user_text mb-4">

                            </div>
                            <div class="user_name mbr-fonts-style mb-2 display-7">
                                <strong>{{$azo['ism']}}</strong>
                            </div>
                            <div class="user_desk mbr-fonts-style display-7">
                                {{$azo['lavozim']}}
                            </div>
                        </div>
                    </div>
                    @endforeach
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

<br>
<br>
<br>

@endsection


