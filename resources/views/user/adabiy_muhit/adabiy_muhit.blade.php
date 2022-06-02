@extends('user.master')
@section('title')
    @lang('public.t_2_1')
@endsection
@section('content')

    <section class="header1 cid-t78NbNVdVU mbr-parallax-background" id="header1-k">


        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(250, 250, 250);"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">

                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2">
                        <strong>@lang('public.t_2_1')</strong>
                    </h1>


                </div>
            </div>
        </div>
    </section>

    <section class="features6 cid-t78NnUe9SK" id="features7-l">

        <div class="container">
            <div class="card-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="image-wrapper">

                            <img src="{{asset('front/assets/images/ab1.jpeg')}}" alt="foto">
                        </div>
                    </div>
                    <div class="col-12 col-lg">

                        @if($lang=="uz")
                            <p>Har bir xalqning oʻziga xos tarixiy
                                taraqqiyoti va asrlar davomida shakllangan qadriyatlari mavjud. Qadriyatlar
                                oʻtmishning
                                ajralmas qismini tashkil etadi. Zero, qadriyatlarda xalqning oʻziga xosligi,
                                urf-odatlari, ma`naviyati mujassamlanadi.
                                <br>“Qadriyat deyilganda, inson va insoniyat uchun ahamiyatli boʻlgan millat, elat
                                va
                                ijtimoiy guruhlarning manfaatlari va maqsadlariga xizmat qiladigan va ular tomonidan
                                baholanib, qadrlanadigan tabiat va jamiyat ne`matlari, hodisalari majmuini
                                tushunmogʻimiz lozim”[1].
                                <br>Ma`lumki, qadriyatlar umuminsoniy va milliy qadriyatlarga boʻlinadi.
                                <br>Gʻ.Gʻofurov tomonidan qadriyatlar va ularning turlari toʻgʻrisida mulohaza
                                yuritilganda, qadriyatlarning turlaridan biri sifatida ma`naviy qadriyatlar ajratib
                                koʻrsatiladi[2].
                                <br>Ma`naviy qadriyatlar shaxs va uning tarbiyasi, kamolotiga yetaklovchi asosiy
                                omillardan biridir. Bunday qadriyatlarning aksariyati qoʻlyozma va toshbosma shaklda
                                bizgacha yetib kelgan. Prezident Sh.Mirziyoev ta`kidlaganidek, “...oʻzbek mumtoz va
                                zamonaviy adabiyotini xalqaro miqyosda oʻrganish va targʻib qilish, bugungi kunda
                                dunyo
                                adabiy makonida yuz berayotgan eng muhim jarayonlar bilan uzviy bogʻliq holda tahlil
                                etib, zarur ilmiy-amaliy xulosalar chiqarish, katta ahamiyatga ega”[3].<br>
                            <hr>
                            [1] Qadriyatlar va ijtimoiy taraqqiyot (ilmiy
                            ishlar
                            toʻplami). –T; “Oʻzbekiston”, 1997. B.198; Komilov T., Abidova S. Milliy axloqiy qadriyatlar
                            va
                            ularning tarbiyaviy ahamiyati. OʻzR FA, “Fan”, 2000. B.20;
                            <br>Ortiqov N. Ma`naviyat: milliy va umuminsoniy qadriyatlar. - T; “Oʻzbekiston”,1997.B.48.
                            <br>[2] Gʻofurov Gʻ. Milliy an`analar//Xalq so`zi, 1993 yil. 11 fevral, B. 2
                            <br>[3] Mirziyoev.Sh.Niyati ulugʻ xalqning ishi ham ulugʻ, hayoti yorugʻ va kelajagi farovon
                            boʻladi.-T; “Oʻzbekiston”, 2019.339-b
                            </p>
                        @endif

                        @if($lang=="ru")
                            <p>
                                У каждого народа своя история
                                развитие и ценности, формировавшиеся веками. Ценности прошлого
                                является неотъемлемой частью. Ведь ценности - это личность народа,
                                традиции и духовность.
                                <br> «Ценность относится к нации, людям и людям, которые важны для человека и
                                человечества.
                                служение и служение интересам и целям социальных групп
                                совокупность событий и явлений природы и общества, которые ценятся и ценятся
                                нам нужно понять» [1].
                                <br> Известно, что ценности делятся на общечеловеческие и национальные ценности.
                                <br> Комментарий Г. Гафурова о ценностях и их типах
                                выделение духовных ценностей как одного из видов ценностей
                                показано в [2].
                                <br> Духовные ценности – основа человека и его воспитания, ведущие к зрелости
                                является одним из факторов. Многие из этих ценностей находятся в рукописном и
                                литографическом виде.
                                добрался до нас. Как отметил Президент Ш.Мирзиёев, «...узбекская классика и
                                Международное изучение и продвижение современной литературы в современном мире
                                анализ в тесной связи с важнейшими процессами, происходящими в литературном
                                пространстве
                                Важно сделать необходимые научные и практические выводы»[3].<br>
                            </p>
                            <hr>
                            <p>
                                [1] Ценности и общественное развитие (научная
                                работа
                                коллекция). –Т; «Узбекистан», 1997. С.198; Камилов Т., Абидова С. Национальные
                                нравственные
                                ценности и
                                их воспитательное значение. ФА УзР, «Веер», 2000. С.20;
                                <br> Артиков Н.В. Духовность: национальные и общечеловеческие ценности. - Т;
                                «Узбекистан»,
                                1997.Б.48.
                                <br> [2] Гофуров Г`. Национальные традиции // Халк сузи, 1993. 11 февраля, д. 2
                                <br> [3] Мирзиёев.Ш.
                                будет.-Т; «Узбекистан», 2019.339-с.
                            </p>
                        @endif

                        @if($lang=="en")
                            <p>
                                Each nation has its own history
                                development and values ​​formed over the centuries. Values ​​of the past
                                is an integral part. After all, the values ​​are the identity of the people,
                                traditions and spirituality.
                                <br> “Value refers to a nation, people, and people that are important to man and
                                humanity
                                serving and serving the interests and goals of social groups
                                a set of events and phenomena of nature and society that are valued and appreciated
                                we need to understand ”[1].
                                <br> It is known that values ​​are divided into universal and national values.
                                <br> G. Gafurov's commentary on values ​​and their types
                                distinguishing spiritual values ​​as one of the types of values
                                is shown in [2].
                                <br> Spiritual values ​​are the basis of a person and his upbringing, leading to
                                maturity
                                is one of the factors. Many of these values ​​are in manuscript and lithographic
                                form
                                reached us. As President Sh. Mirziyoyev noted, “... Uzbek is a classic and
                                International study and promotion of contemporary literature in the world today
                                analysis in close connection with the most important processes taking place in the
                                literary space
                                It is important to draw the necessary scientific and practical conclusions. ”[3].
                                <br>
                            <hr>

                            [1] Values and social development (scientific work
                            collection). –T; “Uzbekistan”, 1997. P.198; Kamilov T., Abidova S. National moral values and
                            their educational significance. UzR FA, “Fan”, 2000. B.20;
                            <br> Artikov N. Spirituality: national and universal values. - T; “Uzbekistan”, 1997.B.48.
                            <br> [2] Gʻofurov G`. National traditions // Xalq so'zi, 1993. February 11, B. 2
                            <br> [3] Mirziyoev.Sh.
                            will be.-T; “Uzbekistan”, 2019.339-p
                            </p>

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features9 cid-t78ORTdDTj" id="features10-n">
        <!---->


        <div class="container-fluid">

            <div class="row mt-4">
                <div class="card col-12">
                    <div class="card-wrapper">

                        <div class="bottom-line">
                            @if($lang=="uz")
                                <p class="mbr-text mbr-fonts-style display-7">
                                    Darhaqiqat, tarixiy taraqqiyot jarayonida
                                    ajdodlarimiz tomonidan yaratilgan milliy-ma`naviy qadriyatlarni oʻrganish, ularni
                                    joriy
                                    imloga oʻgirish va keng kitobxonlar ommasiga taqdim etish eng muhim masalalardan
                                    biridir.
                                    <br>
                                    <br>Shunday qadriyatlarimizning bir qismi XX asr boshlarida yaratilgan boʻlib, unda
                                    Xorazm adabiy muhiti alohida oʻrin tutadi. Bu muhitda asriy mumtoz an`analar davom
                                    ettirilib va boyitilib, oʻziga xos adabiy maktab vujudga keldi. Shoh va shoir Feruz
                                    (1844-1910) nomi bilan bogʻliq bu maktabda original va tarjima asarlar bilan birga,
                                    kitobat hamda uning targʻiboti keng oʻrin tutib, bayoz, devon, tazkira va majmualar
                                    tuzildi. Shulardan biri “Haft shuaro” majmuasi boʻlib, unda shahzoda shoirlarning
                                    she`rlari toʻplangan.
                                    <br>
                                    <br>Shoʻro davri mafkurasi adabiy merosga partiyaviylik va sinfiylik tamoyillari
                                    asosida
                                    yondashgani sababli, saroy muhiti bilan bogʻliq ijodkorlar va ularning asarlari,
                                    jumladan “Haft shuaro” ham oʻrganilmay kelindi. Vaholanki, bu majmuada XIX asrning
                                    oxiri, XX asrning boshida ijod qilgan va she`riyatda muayyan iz qoldirgan yetti
                                    nafar
                                    shoirning turli janrlardagi merosidan namunalar jamlangan. Undagi she`riy asarlar
                                    tarkibi, adabiy va biografik ma`lumotlar hozirga qadar ilmda yoritilmagan hamda oʻz
                                    bahosini olmagan. Lekin bu meros oʻsha davr adabiy jarayonida faol qatnashgan yangi
                                    ijodkorlarni kashf etishga, ular ijodini atroflicha tadqiq va targʻib qilishga hamda
                                    adabiy muhit tarixi tadqiqining boʻsh qolgan sahifalarini toʻldirishga xizmat
                                    qiladi. Bu
                                    esa Feruz davri adabiy muhiti, undagi badiiy ijodkorlik qirralari haqidagi mavjud
                                    tasavvurlarimizni kengaytiradi. Shuningdek, “Haft shuaro” XX asr boshidagi adabiy
                                    jarayonning oʻziga xos xususiyatlarini va Feruz shajarasiga mansub shoirlarning
                                    badiiy
                                    ijoddagi hissasini aniqlash hamda davr adabiy muhitini yaxlit, uyushgan hodisa
                                    sifatida
                                    tushunishga imkon beradi. Bu hol adabiyotshunoslikda xolislik tamoyili izchil amalga
                                    oshirilayotgan hozirgi kunda, ayniqsa, muhim boʻlib, ushbu tadqiqotning
                                    dolzarbligini
                                    belgilaydi.
                                    <br>
                                    <br>“Haft shuaro”ga munosabat dastlab shahzoda shoirlar zamondoshlarining asarlari
                                    va
                                    esdaliklaridan boshlangan. Jumladan, Hasanmurod Laffasiy (1880-1949) tazkirasidagi
                                    Murodiy, Farrux, Sultoniy, Sa`diy va Bayoniy haqidagi ma`lumotlarda ularning
                                    she`rlari
                                    Feruzga ma`qul boʻlgach, xon ularni “Haft shuaro”ga kiritishni Bayoniyga topshirgani
                                    qayd etiladi, lekin majmua haqida boshqa ma`lumotlar keltirilmaydi[1]. Bobojon
                                    Tarroh-Xodim (1878-1971) oʻz esdaliklarining yaratilishi haqida shunday yozadi: “Shu
                                    davrda boʻlgan butun shoirlarning nazmlarini Muhammad ikkinchiga oʻqib berar hamda
                                    nashr
                                    qilishga yordam berar edim. O`ttiz bir nafar shoirning butun ahvoli menga ma`lum
                                    boʻlgani uchun bu bayonotlarni oʻz qoʻlim, oʻz fikrim bilan yozib, sarhadiga
                                    yetkurdim”[1]. Muhimi shundaki, ana shu oʻttiz bir nafar shoir orasida “Haft
                                    shuaro”ga
                                    she`rlari kiritilgan Sultoniy, Sodiq, Sa`diy, Bayoniy va Oqil ham bor edi. Garchi
                                    Xodim
                                    “Haft shuaro”ni bevosita tilga olmasa ham, yuqoridagi shoirlar tarjimai holi va
                                    ijodining ayrim jihatlari xususida yangi ma`lumotni bayon etadi.
                                    <br>
                                    <br>“Haft shuaro” haqidagi fikrlar XX asrning 60-yillari boshidan qator maqola va
                                    risolalarda koʻrina boshlaydi va tabiiyki, ularda bu davrdagi taomilga koʻra saroy
                                    adabiy muhitiga, xususan, hukmdorlarga yaqin ijod ahli va ularning asarlariga salbiy
                                    munosabat ustuvorlik qilardi. Shundan keyin oʻtgan salkam yarim asrlik davrda ushbu
                                    majmuaga qiziqish davom etdi.
                                    <br>
                                    <br>Mazkur manbaning oʻrganilish davrini shartli ravishda ikki bosqichga ajratish
                                    mumkin: 1) 60-yillardan 90-yillargacha; 2) mustaqillik davri bosqichi. Adabiy
                                    merosga
                                    yondashuv xususiyatlari har bir bosqichda oʻziga xos ifodasini topdi. Birinchi
                                    bosqichda
                                    “Haft shuaro”ga kirgan shoirlardan faqat Bayoniy ijodiga nisbatan xolislik koʻringan
                                    boʻlsa, ikkinchi bosqichda yetti nafar shoir va ularning asarlari xususida ham
                                    muxtasar
                                    boʻlsa-da, ayrim fikrlar aytila boshlandi.
                                    <br>
                                    <br>Akademik V.Abdullayevning 80-yillardagi tadqiqotlarida shahzoda shoirlarning
                                    Navoiyga izdoshligi masalasiga doir fikrlar mavjud. Jumladan, adabiyotshunos “Navoiy
                                    va
                                    bir davrning ikki shoiri” maqolasida Farrux va Bayoniyning Navoiy an`analariga
                                    munosabatiga toʻxtalar ekan, Bayoniy dunyoqarashidagi nuqtai nazar va gʻoyaviy
                                    saviya
                                    koʻlamini alohida ta`kidlab, uni “bedorlik, hushyorlik, ma`nidorlik shoiri”,
                                    Navoiyning
                                    chinakam izdoshi sifatida ta`riflaydi[2]. “Navoiyga ijodiy izdoshlik mezoni haqida”
                                    sarlavhali maqolasida esa Sultoniyning ayrim tatabbu` gʻazallari va taxmislarini
                                    tahlil
                                    etib, unga “xalq hayoti, orzu-havasi bilan aloqador boʻlgan, Navoiydagi masalalarni
                                    chetlab oʻtgan va Navoiydagi dunyoviylik mezonini buzib, ilohiylikni boʻrttirgan”
                                    shoir
                                    sifatida ijodiga salbiy baho beradi[3].
                                    <br>
                                    <br>Adabiyotshunos N.Qobulov esa oʻzining “XIX asr oxiri va XX asr boshlarida
                                    Xorazmda
                                    madaniy va adabiy hayot” maqolasida shahzoda shoirlar ijodiga munosabat bildirib,
                                    “feodal saroy adabiyotining eng muhim belgilari taqlidchilik, shaklbozlik,
                                    payravchilik,
                                    madhiyabozlik avj olishi bilan xarakterlanadi” deb hukmron mafkuraga muvofiq
                                    tavsiflaydi
                                    va dalil sifatida Murodiy, Farrux, Sultoniy she`rlaridan ayrim parchalar
                                    keltiradi[4].
                                    <br>
                                    <br>90-yillarning boshidan mustaqillik mafkurasi tufayli yangilangan ilmiy
                                    tafakkurda
                                    adabiy merosga xolis yondashuv namunalari Feruz shajarasi shoirlarining ijodini
                                    oʻrganishda ham koʻrina boshladi. Bu sohada N.Jumaxoʻja, D.Rahim, Sh.Matrasul,
                                    I.Adizova, G.Ismoilovalarning risola va maqolalari alohida e`tiborga loyiqdir.
                                    Xususan,
                                    1991-1995 yillarda Feruzga bagʻishlab chop etilgan ommabop ikki kitobdagi
                                    tarixiy-badiiy
                                    lavhalarda shahzoda shoirlarning hayoti va ijodi toʻgʻrisida qimmatli ma`lumotlar
                                    bayon
                                    etilgan. Jumladan, birinchi kitobda Murodiy, Oqil, Sodiq, Sultoniy, Sa`diy tarjimai
                                    holi
                                    va asarlariga doir muxtasar faktlar bor[5]. Ikkinchi kitobda yuqoridagi fikrlar
                                    davom
                                    ettirilib va boyitilib, shahzoda shoirlar yetti nafarining ham badiiy merosi haqida
                                    fikr
                                    yuritiladi va ularning adabiy muhitdagi oʻrni umumiy tarzda ta`kidlanib, quyidagi
                                    asosli
                                    xulosaga kelinadi: “Haft shuaro” majmuasi ham Xorazm adabiy muhitini oʻrganishda
                                    muhim
                                    manbalardan biri, uni oʻrganish va targʻib qilishdan adabiyot foyda koʻrsa
                                    koʻradiki,
                                    aslo zarar koʻrmaydi. Shunday ekan, “Haft shuaro”, “Tazkirai si shuaroi Feruzshohiy”
                                    kabi asarlarni nashr etish, ularni kitobxonlarga yetkazish bugunning talabi boʻlib
                                    qolmoqda”[6].
                                    <br>
                                    <br>Adabiyotshunos G.Ismoilova bu fikrlarni quvvatlab, shunday yozadi: “Saroy
                                    maddohi”,
                                    “taqlidchi”, “ijodi payrav she`rlardangina iborat” deb talqin qilingan koʻpgina
                                    qalam
                                    ahlining she`rlarini sinchiklab kuzatsak, ularning zamona taqozosi bilan oʻz
                                    koʻnglidagi
                                    nozik hislarni, qalbidagi alam-dardlarni nechogʻlik ustalik bilan ifoda etganlariga
                                    guvoh boʻlamiz”[7].
                                    <br>
                                    <br>Shuningdek, saroy muhitidagi shoirlar ijodining adabiy-estetik qimmati va mumtoz
                                    she`riyatimizni boyitishdagi ulushi xususida boshqa qator tadqiqotlarda ham
                                    ahamiyatga
                                    molik fikrlar bayon etilgan[8].
                                    <br>
                                    <br>Koʻrinadiki, yuqorida qayd etilgan risola va maqolalarda “Haft shuaro”ni
                                    batafsil
                                    oʻrganish, undagi shoirlar hayoti va she`rlarini monografik yoʻnalishda maxsus
                                    tadqiq
                                    etish maqsadi qoʻyilmagan. Shu tufayli yangilangan davrda turli adabiy muhit va
                                    yoʻnalishlardan iborat yagona oʻzbek milliy adabiyotini yaxlit holda birlamchi
                                    manbalar
                                    asosida haqqoniy oʻrganish zaruriyati ham tadqiqot dolzarbligini oshiradi.
                                    <br></p>
                            @endif
                            @if($lang=="ru")
                                <p class="mbr-text mbr-fonts-style display-7">Ведь в процессе исторического развития
                                    Изучение национальных и духовных ценностей, созданных нашими предками, их приобщение
                                    Орфография и доведение ее до широкой аудитории – один из важнейших вопросов
                                    является одним.
                                    <br>
                                    <br> Некоторые из этих ценностей были созданы в начале ХХ века
                                    Литературная среда Хорезма занимает особое место. В этой среде продолжают
                                    существовать многовековые классические традиции.
                                    обогащалась и обогащалась, возникла уникальная литературная школа. Король и поэт
                                    Феруз
                                    (1844-1910) наряду с оригинальными и переводными работами в этой школе,
                                    Распространены книга и ее пропаганда, в том числе байоз, девон, тазкира, комплексы
                                    сформировался. Один из них – комплекс Хафт Шуаро, в котором живут поэты князя.
                                    были собраны стихи.
                                    <br>
                                    <br> Советская идеология основана на принципах партийности и классичности в
                                    литературном наследии
                                    художники и их произведения, связанные с дворцовой средой,
                                    в том числе Хафт Шуаро, не изучался. Однако в этом комплексе XIX в.
                                    наконец, семь творивших в начале ХХ века и оставивших определенный след в поэзии
                                    собраны образцы наследия поэта в различных жанрах. Поэтические произведения в нем
                                    Состав, литературно-биографические сведения еще не освещены наукой, а собственные
                                    цену не узнал. Однако это наследие является новым для литературного процесса того
                                    времени.
                                    открывать для себя художников, детально изучать и продвигать их работы;
                                    служит восполнению пробелов в изучении истории литературной среды. Этот
                                    и литературная среда ферузского периода, в которой есть аспекты художественного
                                    творчества
                                    расширяет наше воображение. Хафт Шуаро также является литературным произведением
                                    начала ХХ века.
                                    особенности процесса и творчества поэтов семьи Феруз
                                    определить вклад творчества и литературной среды периода в целом, организованного
                                    явления
                                    позволяет понять. При этом в литературе последовательно реализуется принцип
                                    объективности.
                                    Актуальность данного исследования особенно важна сегодня
                                    определяет
                                    <br>
                                    <br> Отношение к «Хафт Шуаро» изначально основывалось на произведениях современников
                                    князя поэтов и
                                    началось с воспоминаний. В частности, в воспоминаниях Хасанмурада Лаффаси
                                    (1880-1949)
                                    Их стихи в сведениях о Муради, Фаррухе, Султани, Саади и Баяни.
                                    Когда Феруз согласился, хан поручил Баяни включить их в состав Хафт Шуаро.
                                    записано, но никакой другой информации о комплексе не приводится [1]. Бободжон
                                    Таррох-Хадим (1878-1971) пишет о создании своих воспоминаний: «Этот
                                    Мухаммед читал и публиковал стихи всех поэтов того периода.
                                    Я бы помог сделать. Я знаю всю ситуацию тридцати одного поэта
                                    Эти заявления я написал собственноручно, своим умом и отправил на границу
                                    йеткурдым»[1]. Важно то, что Хафт Шуаро — один из этих тридцати одного поэта.
                                    Были также Султани, Садик, Сади, Баяни и Акил. Хотя сотрудник
                                    Хотя Хафт Шуаро прямо не упоминается, вышеупомянутые поэты являются биографическими
                                    и
                                    раскрывает новую информацию о некоторых аспектах его творчества.
                                    <br>
                                    <br> Мысли о Хафте Шуаро Ряд статей начала 1960-х и
                                    начинает появляться в памфлетах, и, конечно, в них, по обычаю того времени,
                                    дворцовая
                                    творческие люди, близкие к литературной среде, особенно правителям, и отрицательно
                                    относящиеся к их произведениям
                                    отношение преобладало. С тех пор так уже почти полвека
                                    интерес к комплексу сохранился.
                                    <br>
                                    <br> Условно разделите период изучения данного источника на два этапа
                                    возможно: 1) с 60-х по 90-е годы; 2) этап периода независимости. Литературное
                                    наследие
                                    Характеристики подхода были выражены на каждом этапе. На первом этапе
                                    Из поэтов, вошедших в Хафт Шуаро, только творчество Баяни тенденциозно.
                                    На втором этапе кратко рассказывается о семи поэтах и ​​их произведениях.
                                    Тем не менее, некоторые идеи начали появляться.
                                    <br>
                                    <br> Исследования академика В.Абдуллаева в 80-е годы
                                    Есть мнения по поводу следования за Навои. В частности, литературовед «Навои и
                                    В статье «Два поэта одного периода» к навоийским традициям Фарруха и Баяни
                                    Точка зрения и идейный уровень мировоззрения Баяни
                                    Подчеркивая масштаб Навои, его называли «поэтом зоркости, зоркости, смысла».
                                    описывает его как истинного последователя [2]. «О критериях творческого поиска
                                    Навои»
                                    В своей статье он анализирует некоторые султанские газели и тахми.
                                    Он рассказал ему о «вопросах в Навои, связанных с жизнью и мечтами народа».
                                    обходя и преувеличивая божественность Навои»
                                    дает отрицательную оценку своей работе как [3].
                                    <br>
                                    <br> Литературовед Н.Кобулов в своей книге «Хорезм в конце 19 – начале 20 вв.
                                    В статье «Культурно-литературная жизнь» князь прокомментировал творчество поэтов,
                                    «Важнейшими чертами феодальной придворной литературы являются подражание,
                                    формальность, покровительство,
                                    Характеризуется подъемом гимнов».
                                    и приводит в качестве доказательства отрывки из стихов Муради, Фарруха и Султани.
                                    <br>
                                    <br> В обновленном научном мышлении благодаря идеологии независимости с начала 90-х
                                    гг.
                                    Примерами объективного подхода к литературному наследию являются произведения поэтов
                                    родословной Феруз.
                                    стали появляться в кабинете. В этой области Н.Джумаходжа, Д.Рахим, Ш.Матрасул,
                                    Особого внимания заслуживают брошюры и статьи И.Адизовой, Г.Исмаиловой. Особенно,
                                    Историко-художественные произведения в двух популярных книгах, посвященных Ферузу в
                                    1991-1995 гг.
                                    Таблички содержат ценные сведения о жизни и творчестве княжеских поэтов.
                                    сообщил. В частности, первая книга содержит биографии Муроди, Акила, Садика,
                                    Султани, Саади.
                                    и краткие сведения о его работах [5]. Продолжите вышеизложенные идеи во второй
                                    книге.
                                    обогащаясь и обогащаясь, князь думает о творческом наследии всех семерых поэтов
                                    а их место в литературной среде обычно подчеркивается и основывается на следующих
                                    Делается вывод о важности комплекса Хафт Шуаро и в изучении хорезмийской
                                    литературной среды.
                                    Одним из источников является то, что литература получает пользу от ее изучения и
                                    популяризации.
                                    совсем не пострадает. Поэтому «Хафт Шуаро», «Тазкирай си Шуарой Ферузшахи»
                                    На сегодняшний день востребовано издание таких произведений, как
                                    остается» [6].
                                    <br>
                                    <br> Литературовед Г.Исмаилова поддерживает эти идеи и пишет: «Дворцовая
                                    субстанция»,
                                    Многие ручки трактуются как «подражатели», «его творчество состоит только из
                                    стихов».
                                    Если мы внимательно посмотрим на стихи людей, то увидим, что они были в их сердцах
                                    требованиями времени.
                                    как умело они выражали свои нежные чувства и душевные боли
                                    мы будем свидетелями» [7].
                                    <br>
                                    <br> Это также литературно-эстетическая ценность и классика творчества поэтов в
                                    дворцовой среде.
                                    его вклад в обогащение нашей поэзии важен и в ряде других исследований.
                                    сформулированы идеи свойств [8].
                                    <br>
                                    <br> Судя по всему, в вышеупомянутых памфлетах и ​​статьях подробно рассказывается о
                                    Хафте Шуаро.
                                    специальное исследование жизни и стихов поэтов в монографическом направлении
                                    Нет цели. В связи с этим иная литературная среда и в обновленный период
                                    Первоисточники единой узбекской национальной литературы в целом
                                    Потребность в объективных исследованиях также повышает актуальность исследований.
                                    <br></p>
                            @endif
                            @if($lang=="en")
                                <p class="mbr-text mbr-fonts-style display-7">
                                    Indeed, in the process of historical
                                    development
                                    The study of national and spiritual values ​​created by our ancestors, their
                                    introduction
                                    Spelling and making it available to a wide audience is one of the most important
                                    issues
                                    is one.
                                    <br>
                                    <br> Some of these values ​​were created in the early twentieth century
                                    The Khorezm literary environment has a special place. In this environment,
                                    centuries-old classical traditions continue
                                    enriched and enriched, a unique literary school emerged. King and poet Feruz
                                    (1844-1910) along with original and translated works in this school,
                                    The book and its propaganda are widespread, including bayoz, devon, tazkira, and
                                    complexes
                                    formed. One of them is the Haft Shuaro complex, which houses the prince's poets
                                    poems were collected.
                                    <br>
                                    <br> Soviet ideology is based on the principles of partisanship and classism in
                                    literary heritage
                                    artists and their works related to the palace environment,
                                    including Haft Shuaro, has not been studied. However, in this complex of the XIX
                                    century
                                    finally, seven who created in the early twentieth century and left a certain mark on
                                    poetry
                                    samples of the poet's legacy in various genres are collected. Poetic works in it
                                    The composition, literary and biographical information is not yet covered in
                                    science, and its own
                                    did not get the price. However, this legacy is new to the literary process of the
                                    time
                                    to discover artists, to study and promote their work in detail;
                                    serves to fill in the blanks of the study of the history of the literary
                                    environment. This
                                    and the literary environment of the Feruz period, in which there are aspects of
                                    artistic creativity
                                    expands our imagination. Haft Shuaro is also a literary work of the early twentieth
                                    century
                                    the peculiarities of the process and the art of the poets of the Feruz family
                                    to determine the contribution of creativity and the literary environment of the
                                    period as a whole, organized phenomenon
                                    allows you to understand. In this case, the principle of objectivity is consistently
                                    implemented in literature
                                    The relevance of this study is particularly important today
                                    defines
                                    <br>
                                    <br> The attitude to "Haft Shuaro" was originally based on the works of
                                    contemporaries of the prince poets and
                                    started from memories. In particular, in the memoirs of Hasanmurad Laffasi
                                    (1880-1949)
                                    Their poems in the information about Muradi, Farrukh, Sultani, Saadi and Bayani
                                    When Feruz agreed, the khan instructed Bayani to include them in the Haft Shuaro
                                    is recorded, but no other information about the complex is given [1]. Bobojon
                                    Tarroh-Khadim (1878-1971) writes about the creation of his memoirs: “This
                                    Muhammad recited and published the poems of all the poets of the period
                                    I would help to do. I know the whole situation of thirty-one poets
                                    I wrote these statements with my own hand, with my own mind, and sent them to the
                                    border
                                    yetkurdim ”[1]. What is important is that Haft Shuaro is one of those thirty-one
                                    poets
                                    There were also Sultani, Sadiq, Sa`di, Bayani and Aqil. Although Employee
                                    Although he does not mention Haft Shuaro directly, the above poets are biographical
                                    and
                                    reveals new information about some aspects of his work.
                                    <br>
                                    <br> Thoughts on Haft Shuaro A number of articles from the early 1960s and
                                    begins to appear in the pamphlets, and, of course, in them, according to the custom
                                    of the time, the palace
                                    creative people close to the literary environment, especially the rulers, and
                                    negative to their works
                                    attitude prevailed. This has been the case for almost half a century since then
                                    interest in the complex continued.
                                    <br>
                                    <br> Conditionally divide the study period of this source into two stages
                                    possible: 1) from the 60s to the 90s; 2) the stage of the independence period.
                                    Literary heritage
                                    The characteristics of the approach were expressed at each stage. In the first stage
                                    Of the poets included in the Haft Shuaro, only Bayani's work is biased
                                    In the second stage, it is brief on the seven poets and their works
                                    However, some ideas have begun to emerge.
                                    <br>
                                    <br> Academician V.Abdullayev's researches in the 80s
                                    There are opinions on the issue of following Navoi. In particular, the literary
                                    critic “Navoi and
                                    In the article "Two poets of the same period" to the Navoi traditions of Farrukh and
                                    Bayani
                                    The point of view and ideological level of the Bayani worldview
                                    Emphasizing the scale of Navoi, he was called a "poet of vigilance, vigilance,
                                    meaning."
                                    describes him as a true follower [2]. "On the criteria of creative pursuit of Navoi"
                                    In his article, he analyzes some of the sultans' ghazals and tahmis
                                    He told him about “issues in Navoi related to the life and dreams of the people
                                    bypassing and exaggerating the divinity of Navoi ”
                                    gives a negative assessment of his work as [3].
                                    <br>
                                    <br> Literary critic N.Kobulov wrote in his book “Khorezm in the late 19th and early
                                    20th centuries
                                    In the article "Cultural and literary life" the prince commented on the work of
                                    poets,
                                    “The most important features of feudal court literature are imitation, formality,
                                    patronage,
                                    It is characterized by the rise of hymns, ”according to the ruling ideology
                                    and cites excerpts from the poems of Muradi, Farrukh, and Sultani as evidence.
                                    <br>
                                    <br> In a renewed scientific thinking due to the ideology of independence since the
                                    early 90s
                                    Examples of an objective approach to literary heritage are the works of poets of the
                                    Feruz family tree
                                    began to appear in the study. In this field N.Jumahoja, D.Rahim, Sh.Matrasul,
                                    The brochures and articles of I.Adizova, G.Ismailova deserve special attention. In
                                    particular,
                                    Historical and artistic works in two popular books dedicated to Feruz in 1991-1995
                                    The plates contain valuable information about the life and work of the prince poets
                                    reported. In particular, the first book contains biographies of Murodi, Aqil, Sadiq,
                                    Sultani, Sa`di
                                    and there are brief facts about his works [5]. Continue the above ideas in the
                                    second book
                                    enriched and enriched, the prince thinks of the artistic heritage of all seven of
                                    the poets
                                    and their place in the literary environment is generally emphasized and based on the
                                    following
                                    It is concluded that the Haft Shuaro complex is also important in the study of the
                                    Khorezmian literary environment
                                    One of the sources is that literature benefits from its study and promotion.
                                    will not be harmed at all. Therefore, “Haft Shuaro”, “Tazkirai si Shuaroi
                                    Feruzshahi”
                                    Today's demand is to publish such works as
                                    remains ”[6].
                                    <br>
                                    Literary critic G.Ismailova supports these ideas and writes: "Palace substance",
                                    Many pens are interpreted as "imitators", "his work consists only of poems"
                                    If we look closely at the poems of the people, we can see that they are in line with
                                    the demands of the times
                                    how skillfully they expressed their tender feelings and heartaches
                                    we will witness ”[7].
                                    <br>
                                    <br> It is also a literary-aesthetic value and a classic of the poets' work in the
                                    palace environment
                                    its contribution to the enrichment of our poetry is also important in a number of
                                    other studies
                                    property ideas are stated [8].
                                    <br>
                                    <br> Apparently, the above-mentioned pamphlets and articles detail Haft Shuaro
                                    a special study of the lives and poems of poets in a monographic direction
                                    There is no goal. Due to this, the various literary environments and
                                    Primary sources of the single Uzbek national literature as a whole
                                    The need for objective research also increases the relevance of research.
                                    <br></p>
                            @endif
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="content5 cid-t78PejPEUl" id="content5-o">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">

                    @if($lang=="uz")
                        <p class="mbr-text mbr-fonts-style display-7">

                            [1] Bobojon Tarroh – Xodim. Xorazm
                            navozandalari.-T.:
                            Adabiyot va san`at, 1994- B.7-8.
                            <br>
                            <br> [2] Abdullayev V. Saylanma. –T.: Adabiyot va san`at, 1982 -B.228-230.
                            <br>
                            <br> [3] Abdullayev V. Oʻsha manba. -B.234.
                            <br>
                            <br>[4] Qobulov N., Moʻminova V., Haqqulov I. Avaz va uning adabiy muhiti –T.: Fan, 1987-
                            B.25-30
                            <br>
                            <br>[5] Rahim D., Matrasul Sh. Feruz. Shoh va shoir qismati. –T.: Adabiyot va san`at,
                            1991-B.78-85.
                            <br>
                            <br>[6] Rahim D., Matrasul Sh., Jumaxoʻja N. Feruz. Ikkinchi kitob. –T.: Oʻzbekiston,
                            1995-B.45.
                            <br>
                            <br>[7] Ismoilova G. Feruz davri Xorazm adabiy muhiti. Filol.fanlari.nomz. dissert. T.:TAI,
                            1995- B.31-32.
                            <br>
                            <br>[8] Jumaxoʻja N. Feruz madaniyat va san`at homiysi. –T.: Fan, 1996 -B.89. Oʻsha muallif.
                            Feruz.// Xalq soʻzi. 1992. 29 yanvar. Jumaxoʻja N. Adizova I. Soʻzdin baqoliroq yodgor
                            yoʻqdur–
                            T.: Oʻzbekiston, 1995 -B.150
                            <br>
                            <br>[1] Laffasiy H. Tazkirai shuaro. OʻzRFA Sharqshunoslik instituti qoʻlyozmalar fondi.
                            Inv.№
                            9494; Laffasiy H. Tazkirai shuaro. Urganch: Xorazm, 1992- 119-B.</p>
                    @endif
                    @if($lang=="ru")
                        <p class="mbr-text mbr-fonts-style display-7">

                            [1] Бободжон Таррох — Сотрудник. Хорезмские
                            музыканты.-Т.:
                            Литература и искусство, 1994- С.7-8.
                            <br>
                            <br> [2] Абдуллаев В. Отбор. –Т.: Литература и искусство, 1982. – С.228-230.
                            <br>
                            <br> [3] Абдуллаев В. Тот же источник. -В.234.
                            <br>
                            <br> [4] Кобулов Н., Муминова В., Хаккулов И. Аваз и его литературная среда - Т.: Наука,
                            1987-
                            Б.25-30
                            <br>
                            <br> [5] Рахим Д., Матрасул Ш. Феруз. Судьба короля и поэта. –Т.: Литература и искусство,
                            1991-Б.78-85.
                            <br>
                            <br> [6] Рахим Д., Матрасул Ш., Джумаходжа Н. Феруз. Вторая книга. –Т.: Узбекистон,
                            1995-С.45.
                            <br>
                            <br> [7] Исмаилова Г. Феруз периода Хорезмской литературной среды. Филол.фанлари.номз.
                            диссертация. Т.: ТАЙ,
                            1995- С.31-32.
                            <br>
                            <br> [8] Джумаходжа Н. Феруз – меценат культуры и искусства. –Т.: Фан, 1996 – С.89. Тот же
                            автор.
                            Феруз.// Народное слово. 1992. 29 января. Джумаходжа Н. Адизова И. Нет лучшего памятника
                            слову –
                            Т.: Узбекистан, 1995 - С.150.
                            <br>
                            <br> [1] Лаффасий Х. Тазкирай шуаро. Рукописный фонд Института востоковедения РАН. Инв.№
                            9494; Лаффасий Х. Тазкирай шуаро. Ургенч: Хорезм, 1992- 119-Б.</p>
                    @endif
                    @if($lang=="en")
                        <p class="mbr-text mbr-fonts-style display-7">

                            [1] Bobojon Tarroh - Employee. Khorezm
                            musicians.-T .:
                            Literature and Art, 1994- P.7-8.
                            <br>
                            <br> [2] Abdullayev V. Selection. –T .: Literature and art, 1982 -P.228-230.
                            <br>
                            <br> [3] Abdullayev V. The same source. -B.234.
                            <br>
                            <br> [4] Kobulov N., Muminova V., Hakkulov I. Avaz and its literary environment - T .:
                            Science, 1987-
                            B.25-30
                            <br>
                            <br> [5] Rahim D., Matrasul Sh. Feruz. The fate of the king and the poet. –T .: Literature
                            and art,
                            1991-B.78-85.
                            <br>
                            <br> [6] Rahim D., Matrasul Sh., Jumaxoʻja N. Feruz. The second book. –T .: O`zbekiston,
                            1995-B.45.
                            <br>
                            <br> [7] Ismailova G. Feruz period Khorezm literary environment. Filol.fanlari.nomz.
                            dissertation. T.:TAI,
                            1995- P.31-32.
                            <br>
                            <br> [8] Jumakhoja N. Feruz is a patron of culture and art. –T .: Fan, 1996 -P.89. The same
                            author.
                            Feruz.// People's word. 1992. 29 January. Jumakhoja N. Adizova I. There is no better
                            monument to the word–
                            T .: Uzbekistan, 1995 -P.150
                            <br>
                            <br> [1] Laffasiy H. Tazkirai shuaro. Manuscript fund of the Institute of Oriental Studies
                            of the Russian Academy of Sciences. Inv.№
                            9494; Laffasiy H. Tazkirai shuaro. Urgench: Khorezm, 1992- 119-B.</p>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="content2 cid-t79CXtsQCS" id="content2-p">


        <div class="container">

            <div class="row mt-4">

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
                            <a href="{{route('front.badiiy_ijod')}}" class="btn item-btn btn-primary display-7">

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
                            <a href="{{route('front.biografik')}}" class="btn item-btn btn-primary display-7">

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
                                class="btn btn-primary item-btn display-7">

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

    </section>

@endsection
