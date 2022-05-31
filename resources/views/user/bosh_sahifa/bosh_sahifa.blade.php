@extends('user.master')
@section('title')
    @lang('public.t_1_1')
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

    <section class="features9 cid-t77Hy2O0rR" id="features10-3">
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

    <section class="features6 cid-t77Jr7nBOD" id="features7-5">
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
                                koʻrlik[2].<br><br>[1] Qadriyatlar va ijtimoiy taraqqiyot (ilmiy ishlar toʻplami).
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
                                [2].<br> <br> [1] Ценности и общественное развитие (Сборник научных трудов).
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
                                [2]. <br> <br> [1] Values ​​and Social Development (Collection of Scientific Works).
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

@endsection
