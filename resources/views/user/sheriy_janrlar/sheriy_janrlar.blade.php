@extends('user.master')
@section('title')
    @lang('public.sh_janr')
@endsection
@section('content')

    <section class="header1 cid-t7cENTozNI mbr-parallax-background" id="header1-1o">


        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(250, 250, 250);"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2">
                        <strong>
                            @lang('public.sh_janr')
                        </strong>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="features18 cid-t7cFeCmTw2" id="features19-1p">


        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-12 col-lg">
                    <div class="card-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-4 display-7">
                            <strong>
                                @if( $lang == "uz" )
                                    Musammat shakllari: an`ana va ijodiy xoslik
                                @endif
                                @if( $lang == "en" )
                                    Positive forms: tradition and creativity
                                @endif
                                @if( $lang == "ru" )
                                    Позитивные формы: традиция и творчество
                                @endif
                            </strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                        @if( $lang == "uz" )
                            <p>&ldquo;Haft shuaro&rdquo; majmuasida gʻazaldan keyin boshqa janrlardagi she`rlar ham
                                salmoqli oʻrin egallaydi. Bular orasida musammat shakllari mavjud boʻlib, ular 3510
                                misradan iborat murabba`, muxammas, musaddas, musabba`, musammanlardir. Bular odatda
                                ikki usul bilan yaratiladi.</p><p>Adabiyotshunos A. Abdugʻafurov ta`kidlaganidek,
                                &ldquo;Biri &ndash; mustaqil musammatlar, ya`ni ijodkor oʻz she`rlarini zikr etilgan
                                shakllarda yozadi. Ikkinchi usul shuki, ijodkor boshqa bir shoir yoki oʻzi oldin bitgan
                                gʻazali baytlariga oʻsha mazmun, ruh, vazn va yoʻnalishda yangi misralarni qoʻshish
                                orqali muxammas, musaddas, musammanlar shakliga keltiradi<a href="#_ftn1">
                                    <!--[if !supportFootnotes]-->[1]<!--[endif]--></a>&rdquo;.
                                <!--[if !supportFootnotes]--></p><p>&nbsp;</p><!--[endif]--><p><a href="#_ftnref1">
                                    <!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Abdugʻafurov A. Alisher Navoiy
                                musammatlari // Oʻzbek tili va adabiyoti.T., 1978. -№1- B.27.</p>
                        @endif
                        @if( $lang == "en" )
                            <p>After the ghazal, poems of other genres also occupy a significant place in the Haft
                                Shuaro complex. Among them are the forms of musammat, consisting of 3,510 verses:
                                murabba, muhammas, musaddas, musabba, musamman. These are usually created in two
                                ways.</p><p>As the literary critic A. Abdugafurov noted, &ldquo;One is independent
                                musammats, that is, the creator writes his poems in the mentioned forms. The second
                                method is to add new verses in the same content, spirit, weight, and direction to the
                                poems of another poet or ghazal that he has already written, in the form of muhammas,
                                musaddas, musammans.<a href="#_ftn1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a>&rdquo;.
                                <!--[if !supportFootnotes]--></p><p>&nbsp;</p><!--[endif]--><p><a href="#_ftnref1">
                                    <!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Abdugʻafurov A. Alisher Navoiy
                                musammatlari // Oʻzbek tili va adabiyoti.T., 1978. -№1- B.27.</p>
                        @endif
                        @if( $lang == "ru" )
                            <p>После газели значительное место в комплексе Хафт Шуаро занимают и стихотворения других
                                жанров. Среди них формы мусаммат, состоящие из 3510 стихов: мурабба, мухаммас, мусаддас,
                                мусабба, мусамман. Обычно они создаются двумя способами.</p><p>Как отмечал литературовед
                                А.Абдугафуров, &ldquo;Одним из них являются самостоятельные мусамматы, т.е. художник
                                пишет свои стихи в указанных формах. Второй способ заключается в добавлении новых стихов
                                того же содержания, духа, веса и направленности к уже написанным им стихам другого поэта
                                или газели, в виде мухаммасов, мусаддов, мусамманов<a href="#_ftn1">
                                    <!--[if !supportFootnotes]-->[1]<!--[endif]--></a>&rdquo;.
                                <!--[if !supportFootnotes]--></p><p>&nbsp;</p><!--[endif]--><p><a href="#_ftnref1">
                                    <!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Абдугафуров А. Мусамматлари
                                Алишера Навои // Узбекский язык и литература. Т., 1978. -№1- С.27.</p>
                        @endif


                        <div class="mbr-section-btn"><a class="btn btn-primary display-4"
                                                        href="{{route('front.musammat')}}"><span
                                    class="mobi-mbri mobi-mbri-align-left mbr-iconfont mbr-iconfont-btn"></span>
                                @if( $lang == "uz" )
                                    Batafsil
                                @endif
                                @if( $lang == "en" )
                                    Read more
                                @endif
                                @if( $lang == "ru" )
                                    Читать далее
                                @endif

                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="{{asset('front/assets/images/m1-640x400.jpg')}}" alt="Mobirise">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features16 cid-t7cFf4uDcN" id="features17-1q">


        <div class="container">
            <div class="content-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="image-wrapper">
                            <img src="{{asset('front/assets/images/m2-736x386.jpg')}}" alt="Mobirise">
                        </div>
                    </div>
                    <div class="col-12 col-lg">
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style display-7">
                                <strong>
                                    @if( $lang == "uz" )
                                        Majmuadagi boshqa janrlar xususiyatlari
                                    @endif
                                    @if( $lang == "en" )
                                        Features of other genres in the complex
                                    @endif
                                    @if( $lang == "ru" )
                                        Особенности других жанров в комплексе
                                    @endif

                                </strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style mb-4 display-4">

                            @if( $lang == "uz" )
                                <p>Majmuadan gʻazal va musammatdan tashqari, yana bir necha janrlar oʻrin olgan. Hajm va
                                    janr xususiyatlariga koʻra, ularni quyidagicha guruhlash mumkin:</p><p>
                                    <!--[if !supportLists]-->1)&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->nisbatan koʻlamdor
                                    janrlar: qasida va tarji`band, mustazod;</p><p><!--[if !supportLists]-->2)&nbsp;&nbsp;&nbsp;&nbsp;
                                    <!--[endif]-->kichik lirik janrlar: ruboiy, qit`a, muammo, masnaviy, ta`rix.</p><p>
                                    Toʻgʻri, bular miqdor va salmoq nuqtai nazaridan majmuada katta mavqega ega emas.
                                    Lekin ular, nazarimizda, ikki jihatdan ahamiyatlidir: birinchidan, bu janrlar
                                    shahzoda shoirlarning badiiy qiziqish doirasi kengligidan dalolat bersa,
                                    ikkinchidan, ularning yaratilishi asriy adabiy an`ananing davomi sifatida shu davr
                                    adabiy muhitida ijodkorlikning janriy rang-barangligi va gʻoyaviy-badiiy
                                    takomillashuvini koʻrsatishi bilan diqqatga loyiqdir.</p>
                            @endif
                            @if( $lang == "en" )
                                <p>In addition to ghazals and musammats, the collection includes several other genres.
                                    According to size and genre, they can be grouped as follows:</p><p>
                                    <!--[if !supportLists]-->1)&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->nisbatan koʻlamdor
                                    janrlar: qasida va tarji`band, mustazod;</p><p><!--[if !supportLists]-->2)&nbsp;&nbsp;&nbsp;&nbsp;
                                    <!--[endif]-->kichik lirik janrlar: ruboiy, qit`a, muammo, masnaviy, ta`rix.</p><p>
                                    It is true that they do not play a significant role in the complex in terms of
                                    quantity and weight. However, they are important in two respects: firstly, these
                                    genres testify to the wide range of artistic interests of princely poets, and
                                    secondly, their creation as a continuation of the centuries-old literary tradition
                                    reflects the diversity of genres and ideological and artistic perfection of
                                    creativity in this period. deserves.</p><p>&nbsp;</p>
                            @endif
                            @if( $lang == "ru" )
                                <p>Помимо газелей и мусамматов, в сборник вошли еще несколько жанров. В зависимости от
                                    размера и жанра их можно сгруппировать следующим образом:</p><p>1) относительно
                                    крупные жанры: касыда и тарджибанд, мустазод;</p><p>2) малые лирические жанры:
                                    рубаи, китъа, муаммо, маснави, история.</p><p>Правда, существенной роли в комплексе
                                    по количеству и весу они, правда, не играют. Однако они важны в двух отношениях:
                                    во-первых, эти жанры свидетельствуют о широком круге художественных интересов
                                    княжеских поэтов, во-вторых, их творчество как продолжение многовековой литературной
                                    традиции отражает многообразие жанров и идейно-художественного совершенство
                                    творчества в этот период заслуживает.</p><p>&nbsp;</p>
                                @endif


                                </p>
                                <div class="mbr-section-btn"><a class="btn btn-primary display-4"
                                                                href="{{route('front.boshqa_janrlar')}}"><span
                                            class="mobi-mbri mobi-mbri-align-left mbr-iconfont mbr-iconfont-btn"></span>
                                        @if( $lang == "uz" )
                                            Batafsil
                                        @endif
                                        @if( $lang == "en" )
                                            Read more
                                        @endif
                                        @if( $lang == "ru" )
                                            Читать далее
                                        @endif

                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
