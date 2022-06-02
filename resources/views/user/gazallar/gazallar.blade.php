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
                                <p>&ldquo;Haft shuaro&rdquo; majmuasidagi gʻazallar badiiy jihatdan yetuk, sodda va ravondir. Majmuadagi gʻazallarning badiiy oʻziga xosligi, avvalo, ularning shakliy jihatlarida, bayt va misralarni she`r mazmuniga muvofiq qoʻllash usullarida koʻrinadi va an`anaviy gʻazal tuzilishiga amal qilinadi. Shayx Ahmad ibn Xudoydod Taroziy gʻazal tarkibi xususida toʻxtalar ekan: &ldquo;gʻazalning aksari yigirma bayt boʻlur va aqalli (kichigi &ndash; I.X.) besh bayt. Andin oʻksuk boʻlmas. Magar qofiya tabilmasa, toʻrt bayt qilurlar. Ul ham zarurat hukmidin joizdir&rdquo;, &ndash; deb yozgan edi<a href="#_ftn1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a>. Majmuada 5 baytli gʻazallar juda kam. Gʻazallarning uchdan ikki qismidan koʻprogʻi 7 va 9 baytli, qolganlari 10-11 baytli boʻlib, ramal va hazaj bahrlarida yozilgan. Ularning barchasida taxallus qoʻllanilgan, kompozitsiyasiga ham alohida diqqat qaratilgan: yakpora va tadrijli gʻazallarga keng oʻrin berilgan, bu hol muayyan she`rda faqat bir mavzuni chuqurroq yoritishga harakat qilinganiga ishoradir. Bu jihatdan ishq mavzusida yakporalik ustunlik qiladi.</p><p><!--[if !supportFootnotes]--></p><p>&nbsp;</p><!--[endif]--><p><a href="#_ftnref1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Shayx Ahmad ibn Xudoydod Taroziy. Funun ul-balog`a // Oʻzbek tili va adabiyoti.Toshkent., 2002.- №3 &ndash;B. 75.</p>
                                @endif
                                @if( $lang == "en" )
                                <p>The poems included in the Haft Shuaro were written mainly in the last quarter of the 19th century and the beginning of the 20th century. As a result, they naturally reflect the leading features of the literary environment and literary traditions of the time. It is known that a number of changes in the socio-historical conditions of this period, including the beginning of the national awakening, the spread of enlightenment ideas began to resonate in the literature. However, it was not easy to fully understand the process: &ldquo;Once upon a time, this period was nameless. In the development of the history of literature, this period was inseparable as a separate stage, and could not be considered as a separate period. Later, this period was incorrectly referred to as the bourgeois Jadid literature of the colonial period (second half of the 19th century and the beginning of the 20th century)&rdquo;<a href="#_ftn1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a>.</p><p><!--[if !supportFootnotes]--></p><p>&nbsp;</p><!--[endif]--><p><a href="#_ftnref1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Milliy uygʻonish va oʻzbek filologiyasi masalalari.-T.: Universitet, 1993.-B.4-6</p>                            @endif
                                @if( $lang == "ru" )
                                <p>Стихи, вошедшие в &laquo;Хафт шуаро&raquo;, написаны в основном в последней четверти 19 века и начале 20 века. В результате они органично отражают ведущие черты литературной среды и литературных традиций того времени. Известно, что ряд изменений общественно-исторических условий этого периода, в том числе начало национального пробуждения, распространение просветительских идей, стали находить отклик в литературе. Однако до конца понять процесс было непросто: Давным-давно этот период был безымянным. В развитии истории литературы этот период был неотделим как отдельный этап и не мог рассматриваться как отдельный период. Позднее этот период ошибочно именовали буржуазной джадидской литературой колониального периода (вторая половина 19 &mdash; начало 20 вв.)<a href="#_ftn1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a>.</p><p><!--[if !supportFootnotes]--></p><p>&nbsp;</p><!--[endif]--><p><a href="#_ftnref1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Вопросы национального возрождения и узбекской филологии.-Т.: Университет, 1993.-С.4-6</p>
                            @endif



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
                            <p>&ldquo;Haft shuaro&rdquo; majmuasidagi gʻazallar badiiy jihatdan yetuk, sodda va ravondir. Majmuadagi gʻazallarning badiiy oʻziga xosligi, avvalo, ularning shakliy jihatlarida, bayt va misralarni she`r mazmuniga muvofiq qoʻllash usullarida koʻrinadi va an`anaviy gʻazal tuzilishiga amal qilinadi. Shayx Ahmad ibn Xudoydod Taroziy gʻazal tarkibi xususida toʻxtalar ekan: &ldquo;gʻazalning aksari yigirma bayt boʻlur va aqalli (kichigi &ndash; I.X.) besh bayt. Andin oʻksuk boʻlmas. Magar qofiya tabilmasa, toʻrt bayt qilurlar. Ul ham zarurat hukmidin joizdir&rdquo;, &ndash; deb yozgan edi<a href="#_ftn1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a>. Majmuada 5 baytli gʻazallar juda kam. Gʻazallarning uchdan ikki qismidan koʻprogʻi 7 va 9 baytli, qolganlari 10-11 baytli boʻlib, ramal va hazaj bahrlarida yozilgan. Ularning barchasida taxallus qoʻllanilgan, kompozitsiyasiga ham alohida diqqat qaratilgan: yakpora va tadrijli gʻazallarga keng oʻrin berilgan, bu hol muayyan she`rda faqat bir mavzuni chuqurroq yoritishga harakat qilinganiga ishoradir. Bu jihatdan ishq mavzusida yakporalik ustunlik qiladi.</p><p><!--[if !supportFootnotes]--></p><p>&nbsp;</p><p><!--[endif]--></p><p><a href="#_ftnref1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Shayx Ahmad ibn Xudoydod Taroziy. Funun ul-balog`a // Oʻzbek tili va adabiyoti.Toshkent., 2002.- №3 &ndash;B. 75.</p>
                            @endif
                            @if( $lang == "en" )
                            <p>The gazelles in the Haft Shuaro complex are artistically mature, simple and fluent. The artistic originality of the ghazals in the collection is reflected, first of all, in their formal aspects, in the ways in which the bytes and verses are used in accordance with the content of the poem, and the traditional ghazal structure is followed. Shaykh Ahmad ibn Khudaydad al-Tarazi commented on the composition of the ghazal: And there will be no shortage. If they can&#39;t find a rhyme, they make four bytes. He is also permissible under the rule of necessity&rdquo;<a href="#_ftn1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a>. There are very few 5-byte ghazals in the complex. More than two-thirds of the ghazals are 7 and 9 bytes long, and the rest are 10-11 bytes long, written in Ramallah and Hajj. All of them use nicknames, and special attention is paid to their composition: single and gradual poems are widely used, which indicates that in a particular poem there is an attempt to shed more light on one topic. In this respect, monopoly prevails in the subject of love.</p><p><!--[if !supportFootnotes]--></p><p>&nbsp;</p><!--[endif]--><p><a href="#_ftnref1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Shayx Ahmad ibn Xudoydod Taroziy. Funun ul-balog`a // Oʻzbek tili va adabiyoti.Toshkent., 2002.- №3 &ndash;B. 75.</p>

                        @endif
                            @if( $lang == "ru" )
                            <p>Газели в комплексе Хафт Шуаро художественно зрелые, простые и беглые. Художественное своеобразие газелей в сборнике проявляется, прежде всего, в их формальных аспектах, в способах использования байтов и стихов в соответствии с содержанием стихотворения, соблюдении традиционной газельной структуры. Шейх Ахмад ибн Худайдад ат-Тарази прокомментировал состав газели: И дефицита не будет. Если они не могут найти рифму, они составляют четыре байта. Он также дозволен по правилу необходимости&raquo;<a href="#_ftn1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a>. В комплексе очень мало 5-байтных газелей. Более двух третей газелей имеют длину 7 и 9 байт, а остальные - 10-11 байт, написанные в Рамаллахе и Хадже. Все они используют прозвища, и особое внимание уделяется их композиции: широко используются одиночные и постепенные стихотворения, что свидетельствует о том, что в том или ином стихотворении есть попытка пролить больше света на одну тему. В этом отношении в предмете любви преобладает монополия.</p><p><!--[if !supportFootnotes]--></p><p>&nbsp;</p><!--[endif]--><p><a href="#_ftnref1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Шейх Ахмад ибн Худойдад Тарази. Фунун ул-балог`а // Узбекский язык и литература.Ташкент., 2002.- №3-С. 75.</p>

                            @endif




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
