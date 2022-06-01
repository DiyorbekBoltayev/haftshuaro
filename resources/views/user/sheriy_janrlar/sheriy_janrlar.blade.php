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
                                “Haft shuaro” majmuasida gʻazaldan keyin boshqa
                                janrlardagi she`rlar ham salmoqli oʻrin egallaydi. Bular orasida musammat shakllari mavjud
                                boʻlib, ular 3510 misradan iborat murabba`, muxammas, musaddas, musabba`, musammanlardir.
                                Bular odatda ikki usul bilan yaratiladi.
                            @endif
                            @if( $lang == "en" )
                                Another after the gazelle in the Haft Shuaro complex
                                Poems in different genres also play an important role. These include forms of musammat
                                They are murabba, muhammas, musaddas, musabba, musamman, consisting of 3510 verses.
                                These are usually created in two ways.
                            @endif
                            @if( $lang == "ru" )
                                Другой после газели в комплексе Хафт Шуаро
                                Стихи разных жанров также играют важную роль. К ним относятся формы мусаммат
                                Это мурабба, мухаммас, мусаддас, мусабба, мусамман, состоящие из 3510 стихов.
                                Обычно они создаются двумя способами.
                            @endif

                            <br>
                            <br>

                                @if( $lang == "uz" )
                                    Adabiyotshunos A. Abdugʻafurov ta`kidlaganidek, “Biri – mustaqil musammatlar, ya`ni
                                    ijodkor oʻz she`rlarini zikr etilgan shakllarda yozadi. Ikkinchi usul shuki, ijodkor boshqa
                                    bir shoir yoki oʻzi oldin bitgan gʻazali baytlariga oʻsha mazmun, ruh, vazn va yoʻnalishda
                                    yangi misralarni qoʻshish orqali muxammas, musaddas, musammanlar shakliga keltiradi[1]”. Bu
                                    jihatdan majmuada mustaqil musammatlarga nisbatan ikkinchi usulda yozilgan musammatlar koʻp
                                    boʻlib, ular asosan boshqa shoirlar gʻazallari asosida bitilgan
                                @endif
                                @if( $lang == "en" )
                                    As the literary critic A. Abdugafurov noted, “One is independent musammats,
                                    the artist writes his poems in the above-mentioned forms. The second method is that the creator is different
                                    in the same content, spirit, weight, and direction to a poet or a ghazal verse he has previously written
                                    by adding new verses to the form of muhammas, musaddas, musammans [1] ”. This
                                    In terms of complexity, there are more second-order problems in the complex than independent problems
                                    They are mainly based on the poems of other poets
                                @endif
                                @if( $lang == "ru" )
                                    Как отмечал литературовед А. Абдугафуров, «Один мусаммат самостоятельный,
                                    художник пишет свои стихи в вышеупомянутых формах. Второй метод заключается в том, что создатель отличается
                                    в том же содержании, духе, весе и направлении к поэту или газельному стиху, который он ранее написал
                                    добавлением новых стихов в виде мухаммас, мусаддас, мусамманс[1]». Этот
                                    По сложности в комплексе больше задач второго порядка, чем самостоятельных задач.
                                    В основном они основаны на стихах других поэтов.
                                @endif

                        </p>
                        <div class="mbr-section-btn"><a class="btn btn-primary display-4" href="{{route('front.musammat')}}"><span
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
                                    Majmuadan gʻazal va musammatdan tashqari,
                                    yana bir necha janrlar oʻrin olgan. Hajm va janr xususiyatlariga koʻra, ularni
                                    quyidagicha guruhlash mumkin:
                                    <br>
                                    <br>1) nisbatan koʻlamdor janrlar: qasida va tarji`band, mustazod;
                                    <br>
                                    <br>2) kichik lirik janrlar: ruboiy, qit`a, muammo, masnaviy, ta`rix.
                                    <br>
                                    <br>Toʻgʻri, bular miqdor va salmoq nuqtai nazaridan majmuada katta mavqega ega emas.
                                    Lekin ular, nazarimizda, ikki jihatdan ahamiyatlidir: birinchidan, bu janrlar shahzoda
                                    shoirlarning badiiy qiziqish doirasi kengligidan dalolat bersa, ikkinchidan, ularning
                                    yaratilishi asriy adabiy an`ananing davomi sifatida shu davr adabiy muhitida
                                    ijodkorlikning janriy rang-barangligi va gʻoyaviy-badiiy takomillashuvini koʻrsatishi
                                    bilan diqqatga loyiqdir.
                                @endif
                                @if( $lang == "en" )
                                    In addition to ghazals and musammats from the complex,
                                    There are several other genres. According to the characteristics of size and genre, they
                                    can be grouped as follows:
                                    <br>
                                    <br> 1) relatively large genres: qasida and tarjiband, mustazod;
                                    <br>
                                    <br> 2) small lyrical genres: rubai, continent, problem, masnavi, history.
                                    <br>
                                    <br> It is true that they do not play a significant role in the complex in terms of quantity and weight.
                                    But they are, in our view, important in two respects: first, that these genres are princely
                                    secondly, their testimony to the breadth of the poets' artistic interest
                                    creation in the literary environment of this period as a continuation of the centuries-old literary tradition
                                    Demonstration of genre diversity and ideological and artistic perfection of creativity
                                    noteworthy with.
                                @endif
                                @if( $lang == "ru" )
                                    Помимо газелей и мусамматов из комплекса,
                                    Есть еще несколько жанров. По характеристикам размера и жанра они
                                    можно сгруппировать следующим образом:
                                    <br>
                                    <br> 1) относительно крупные жанры: касыда и тарджибанд, мустазод;
                                    <br>
                                    <br> 2) малые лирические жанры: рубаи, континент, проблема, маснави, история.
                                    <br>
                                    <br> Правда, они не играют существенной роли в комплексе по количеству и весу.
                                    Но они, на наш взгляд, важны в двух отношениях: во-первых, что эти жанры являются княжескими.
                                    во-вторых, их свидетельство широты художественного интереса поэтов
                                    творчество в литературной среде этого периода как продолжение многовековой литературной традиции
                                    Демонстрация жанрового разнообразия и идейно-художественного совершенства творчества
                                    примечательно с.
                                @endif


                            </p>
                            <div class="mbr-section-btn"><a class="btn btn-primary display-4" href="{{route('front.boshqa_janrlar')}}"><span
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
