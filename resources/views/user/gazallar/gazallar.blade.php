@extends('user.master')
@section('title')
    @lang('public.gazallar')
@endsection
@section('content')

    <section class="header1 cid-t7cveZM88U mbr-parallax-background" id="header1-1a">


        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(250, 250, 250);"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2">
                        <strong>
                            @lang('public.gazallar')
                        </strong>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="features16 cid-t7cvqCZnoE" id="features17-1b">


        <div class="container">
            <div class="content-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="image-wrapper">
                            <img src="{{asset('front/assets/images/g1-454x696.jpg')}}" alt="foto">
                        </div>
                    </div>
                    <div class="col-12 col-lg">
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style display-7">
                                <strong>
                                    @if( $lang == "uz" )
                                        Gʻazallar tasnifi, gʻoya va mavzular talqini
                                    @endif
                                    @if( $lang == "en" )
                                        Classification of ghazals, interpretation of ideas and themes
                                    @endif
                                    @if( $lang == "ru" )
                                        Классификация газелей, интерпретация идей и тем
                                    @endif

                                </strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style mb-4 display-4">
                                @if( $lang == "uz" )
                                    “Haft shuaro”ga kirgan she`rlar asosan
                                    XIX asrning oxirgi choragi va XX asrning boshlarida yaratilgan. Shu tufayli ularda
                                    oʻsha
                                    davr adabiy muhiti va adabiy an`analariga xos yetakchi xususiyatlarning aks etishi
                                    tabiiydir. Ma`lumki, bu davr ijtimoiy-tarixiy sharoitida qator oʻzgarishlar,
                                    jumladan,
                                    milliy uygʻonishning boshlanishi, ma`rifat gʻoyalarining keng tarqalishi adabiyotda
                                    ham
                                    aks sado bera boshlagan edi. Lekin bu jarayonni toʻla anglash oson kechmadi: “Hatto
                                    bir
                                    vaqtlar bu davr nomsiz, otsiz edi.
                                    <br>
                                    <br>Adabiyot tarixi taraqqiyotida bu davr alohida bosqich sifatida ajralmas, alohida
                                    davr deb ham qaralmas edi. Soʻngroq bu davr nooʻrin ravishda mustamlaka davri
                                    adabiyoti
                                    (XIX asrning II yarmi va XX asrning boshlari) burjua jadid adabiyoti nomi bilan
                                    yuritila
                                    boshlandi”[1].
                                    <br>
                                    <br>Manbalarning guvohlik berishicha, aslida XX asrning 20- yillarigacha boʻlgan
                                    davrda
                                    jadid shoirlari bilan birga, diniy adabiyot va saroy adabiyoti vakillari ham
                                    faoliyat
                                    koʻrsatdilar. Feruz saroyidagi shahzoda shoirlarning “Haft shuaro”dagi she`rlari
                                    oʻsha
                                    davrdagi ijodiy jarayon yoʻnalishini yaqqol aks ettiradi. Ularda adabiy an`analar
                                    ustuvor boʻlsa ham, qator she`rlarda jamiyatda yetishib kelayotgan oʻzgarishlarni
                                    his
                                    qilishga, ma`rifatga, oʻzlikni anglashga intilish yorqin ifodalangan edi (Bayoniy,
                                    Oqil
                                    she`rlarida).
                                @endif
                                @if( $lang == "en" )
                                    Most of the poems included in the Haft Shuaro
                                    Created in the last quarter of the XIX century and the beginning of the XX century.
                                    That's why they have it
                                    reflection of the leading features of the literary environment and literary
                                    traditions of the period
                                    is natural. It is known that a number of changes in the socio-historical conditions
                                    of this period, including
                                    the beginning of the national awakening, the spread of enlightenment ideas in
                                    literature
                                    had begun to resonate. But it was not easy to fully understand the process: “Even
                                    one
                                    times this period was nameless, horseless.
                                    <br>
                                    <br> This period is an integral part of the development of the history of literature
                                    it was not even considered a period. Later, this period was incorrectly referred to
                                    as colonial literature
                                    (II half of the XIX century and the beginning of the XX century) is called bourgeois
                                    Jadid literature
                                    began ”[1].
                                    <br>
                                    <br> Sources testify that it was in the 1920s
                                    Along with Jadid poets, representatives of religious literature and palace
                                    literature also work
                                    showed. These are the poems of the prince in Feruz's palace in Haft Shuaro
                                    clearly reflects the direction of the creative process of the period. They have
                                    literary traditions
                                    Although a priority, in a number of poems he felt the changes taking place in
                                    society
                                    The desire to do, to enlighten, to understand oneself was vividly expressed (Bayani,
                                    Aqil
                                    in his poems).
                                @endif
                                @if( $lang == "ru" )
                                    Большинство стихотворений, включенных в Haft Shuaro
                                    Создан в последней четверти XIX века и начале XX века. Вот почему они имеют это
                                    отражение ведущих черт литературной среды и литературных традиций того периода
                                    естественно. Известно, что ряд изменений общественно-исторических условий этого
                                    периода, в том числе
                                    начало национального пробуждения, распространение просветительских идей в литературе
                                    начал резонировать. Но до конца понять процесс было непросто: «Даже один
                                    времена этот период был безымянным, безлошадным.
                                    <br>
                                    <br> Этот период является неотъемлемой частью развития истории литературы.
                                    это даже не считалось периодом. Позднее этот период ошибочно именовали колониальной
                                    литературой.
                                    (II половина XIX века и начало XX века) называется буржуазной джадидской
                                    литературой.
                                    началось»[1].
                                    <br>
                                    <br> Источники свидетельствуют, что это было в 1920-е гг.
                                    Наряду с джадидскими поэтами работают представители религиозной и дворцовой
                                    литературы.
                                    показал. Это стихи принца во дворце Феруза в Хафт Шуаро.
                                    ярко отражает направление творческого процесса того периода. У них есть литературные
                                    традиции.
                                    Хотя приоритетом, в ряде стихов он почувствовал изменения, происходящие в обществе.
                                    Ярко выражено стремление сделать, просветить, понять себя (Баяни, Акил
                                    в его стихах).
                                @endif


                            </p>
                            <div class="mbr-section-btn"><a class="btn btn-primary display-4"
                                                            href="{{route('front.gazallar_tasnifi')}}">
                                    <span class="mobi-mbri mobi-mbri-align-left mbr-iconfont mbr-iconfont-btn"></span>
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

    <section class="features18 cid-t7cvrrWear" id="features19-1c">


        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-12 col-lg">
                    <div class="card-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-4 display-7">
                            <strong>
                                @if( $lang == "uz" )
                                    Gʻazallarda she`riy san`atlarning qoʻllanishi
                                @endif
                                @if( $lang == "en" )
                                    THE USE OF POETIC ART IN GHAZALS
                                @endif
                                @if( $lang == "ru" )
                                    ИСПОЛЬЗОВАНИЕ ПОЭТИЧЕСКИХ ИСКУССТВ В ГАЗЕЛЯХ
                                @endif
                            </strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            @if( $lang == "uz" )
                                “Haft shuaro” majmuasidagi gʻazallar badiiy
                                jihatdan yetuk, sodda va ravondir. Majmuadagi gʻazallarning badiiy oʻziga xosligi,
                                avvalo,
                                ularning shakliy jihatlarida, bayt va misralarni she`r mazmuniga muvofiq qoʻllash
                                usullarida
                                koʻrinadi va an`anaviy gʻazal tuzilishiga amal qilinadi. Shayx Ahmad ibn Xudoydod
                                Taroziy
                                gʻazal tarkibi xususida toʻxtalar ekan: “gʻazalning aksari yigirma bayt boʻlur va aqalli
                                (kichigi – I.X.) besh bayt. Andin oʻksuk boʻlmas. Magar qofiya tabilmasa, toʻrt bayt
                                qilurlar. Ul ham zarurat hukmidin joizdir”, – deb yozgan edi[1]. Majmuada 5 baytli
                                gʻazallar
                                juda kam. Gʻazallarning uchdan ikki qismidan koʻprogʻi 7 va 9 baytli, qolganlari 10-11
                                baytli boʻlib, ramal va hazaj bahrlarida yozilgan. Ularning barchasida taxallus
                                qoʻllanilgan, kompozitsiyasiga ham alohida diqqat qaratilgan: yakpora va tadrijli
                                gʻazallarga keng oʻrin berilgan, bu hol muayyan she`rda faqat bir mavzuni chuqurroq
                                yoritishga harakat qilinganiga ishoradir. Bu jihatdan ishq mavzusida yakporalik ustunlik
                                qiladi.
                                <br>Gʻazallar badiiyatining bir qirrasi turli she`riy san`at va badiiy vositalardan
                                foydalanishda yorqin aks etgan. Buni bevosita har bir shoir ijodida kuzatish mumkin.
                                Jumladan, Murodiy gʻazallariga murojaat qilamiz:
                                <br>Aylaram la`li zuloli orzusin subhu shom,
                                <br>Qilmagʻil mahzun mani agʻyori badkor oldida (B-3).
                            @endif
                            @if( $lang == "en" )
                                The gazelles in the Haft Shuaro complex are artistic
                                is mature, simple and fluent. The artistic peculiarity of the gazelles in the complex
                                is, first of all,
                                in their formal aspects, in the ways of using bytes and verses in accordance with the
                                content of the poem
                                appears and follows the traditional ghazal structure. Sheikh Ahmad ibn Khudoydad Tarazi
                                Commenting on the composition of the gazelle, he said: “Most of the gazelles will be
                                twenty bytes long
                                (smallest - I.X.) five bytes. And there will be no shortage. Unless rhyme is found, four
                                bytes
                                they do. It is also permissible under the rule of necessity. ”[1] 5-byte gazelles in the
                                complex
                                very rare. More than two-thirds of the gazelles are 7 and 9 bytes long, and the rest are
                                10-11 bytes
                                It is written in bytes and is written in Ramal and Hazaj seas. Nicknames in all of them
                                Special attention is paid to the composition: single and gradual
                                gazelles are given a wide space, which only deepens one theme in a particular poem
                                is an attempt to illuminate. In this respect, the monopoly on the subject of love
                                prevails
                                does.
                                <br> One aspect of the art of gazelles is the use of various poetic arts and artistic
                                means
                                reflected in use. This can be directly observed in the work of every poet.
                                In particular, we refer to Murodi's gazelles:
                                <br> Aylaram la`li zuloli orzusin subhu sham,
                                <br> Don't be sad in front of a bad man (B-3).
                            @endif
                            @if( $lang == "ru" )
                                Газели в комплексе Хафт Шуаро артистичны.
                                является зрелым, простым и беглым. Художественное своеобразие газелей в комплексе
                                заключается, прежде всего, в
                                в их формальных аспектах, в способах использования байтов и стихов в соответствии с
                                содержанием стихотворения
                                появляется и следует традиционной структуре газелей. Шейх Ахмад ибн Худойдад Тарази
                                Комментируя состав газели, он сказал: «Большинство газелей будут иметь длину двадцать
                                байт.
                                (наименьший - I.X.) пять байт. И дефицита не будет. Если рифма не найдена, четыре байта
                                они делают. Дозволено и по правилу необходимости»[1]. 5-байтовые газели в комплексе
                                очень редко. Больше двух третей газелей имеют длину 7 и 9 байт, а остальные 10-11 байт
                                Он написан в байтах и ​​написан в морях Рамала и Хазаджа. Прозвища во всех них
                                Особое внимание уделяется композиции: единичной и постепенной.
                                газелям отводится широкое место, которое лишь углубляет одну тему в том или ином
                                стихотворении
                                это попытка осветить. В этом отношении преобладает монополия на тему любви.
                                делает.
                                <br> Одним из аспектов искусства газелей является использование различных поэтических
                                искусств и художественных средств.
                                отражается в использовании. Это можно непосредственно наблюдать в творчестве каждого
                                поэта.
                                В частности, мы имеем в виду газели Муроди:
                                <br> Айларам ла'ли зулоли орзусин субху шам,
                                <br> Не грусти перед плохим человеком (Б-3).
                            @endif


                        </p>

                        <div class="mbr-section-btn"><a class="btn btn-primary display-4"
                                                        href="{{route('front.sheriy_sanat')}}">
                                <span class="mobi-mbri mobi-mbri-align-left mbr-iconfont mbr-iconfont-btn"></span>
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
                        <br>
                        <br>
                        <span style="color: white">dsd</span>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="{{asset('front/assets/images/g2-1076x1473.jpg')}}" alt="Foto">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
