@extends('user.master')
@section('title')
    @lang('public.t_2_3')
@endsection
@section('title','Biografik ma\'lumotlar')
@section('content')

    <section class="header1 cid-t79Iiq92Sk mbr-parallax-background" id="header1-y">


        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(250, 250, 250);"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2">
                        <strong>
                            @lang('public.t_2_3')
                        </strong>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="features6 cid-t79IzvGdyH" id="features7-z">
        <!---->


        <div class="container">
            <div class="card-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="image-wrapper">
                            <img src="{{asset('front/assets/images/ab1.jpeg')}}" alt="Mobirise">
                        </div>
                    </div>
                    <div class="col-12 col-lg">
                        <div class="text-box">
                            <h5 class="mbr-title mbr-fonts-style display-7">
                                <strong>
                                    @lang('public.t_2_3')
                                </strong>
                            </h5>
                            <div style="font-size: 18px;">
                                {{--                                <p class="mbr-text mbr-fonts-style display-7">--}}

                                @if( $lang == "uz" )
                                    Ma`lumki, tazkira va majmualarda ijodkor shaxsi haqidagi biografik ma`lumotlarning
                                    muayyan oʻrni boʻlib, ular u yoki bu ijodkor xususidagi umumiy tasavvurni
                                    kengaytirishga xizmat qiladi. Shu jihatdan &ldquo;Haft shuaro&rdquo;ga kirgan
                                    shoirlar haqidagi ma`lumotlar ham ma`lum adabiy qimmatga ega. Tazkiralarda
                                    shoirlarning shaxs sifatidagi suratu siyrati, fe`l-atvori, umuman, xarakteri ochib
                                    berilsa, majmualarda ijodkor sifatidagi salohiyati, she`riyatdagi kuchli va zaif
                                    jihatlari aks etadi. Shu bois har bir shoir qiyofasida shaxs va ijodkor yaxlitligi
                                    mujassamlashgan boʻlib, ijodni baholashda buni nazarda tutish muhimdir. Zero, V.G.
                                    Belinskiy ta`kidlaganidek, &ldquo;shoir ijodiy faoliyatining manbai uning shaxsida
                                    ifodalangan ruhidadir. Binobarin, shoir ruhini, uning asarlari xarakterining
                                    dastlabki izohini uning shaxsidan qidirmoq kerak&rdquo;<a href="#_ftn1">
                                        <!--[if !supportFootnotes]-->[1]<!--[endif]--></a>.</p><p>&ldquo;Haft shuaro&rdquo;
                                        mualliflari xususidagi biografik ma`lumotlarning ahamiyati, avvalo, ana shu
                                        shoirlar &ldquo;shaxsidagi ruh&rdquo;ning she`rlardagi ifodasidadir.</p><p>
                                        Darhaqiqat, majmua va tazkiralardagi shahzoda shoirlar hayoti va asarlari
                                        xususidagi fakt va ma`lumotlar yaxlitlik kasb etib, ijodkorlar haqida davomli va
                                        batafsil fikrlashga imkon beradi. Bu hol hayot va ijod yoʻli koʻpchilikka
                                        noma`lum boʻlgan hamda ilk marta oʻrganilayotgan shoirlar haqidagi monografik
                                        tadqiqot uchun, ayniqsa, zarurdir.</p>
                                    <hr><p><!--[if !supportFootnotes]--></p><p>&nbsp;</p><p><!--[endif]--></p><p><a
                                            href="#_ftnref1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a>Белинский
                                        В.Г. Собрания сочинений в трёх томах. Ташкент: ИИИ.М.1971.С.374.
                                        @endif
                                        @if( $lang == "en" )
                                            It is known that biographies about the personality of the artist have a
                                            special place in tazkira and complexes, which serve to expand the general
                                            idea about this or that artist. In this regard, the information about the
                                            poets included in the &quot;Haft Shuaro&quot; has a certain literary value.
                                            While the tazkiras reveal the image of the poet as a person, his character
                                            and, in general, his character, the complexes reflect his potential as a
                                            creator, his strengths and weaknesses in poetry. Therefore, the image of
                                            each poet is a combination of personality and creativity, and it is
                                            important to keep this in mind when evaluating the work. Zero, V.G. As
                                            Belinsky noted, &ldquo;the source of the poet&#39;s creative activity is in
                                            the spirit expressed in his personality. Therefore, the soul of the poet,
                                            the first explanation of the character of his works should be sought in his
                                            personality<a href="#_ftn1"><!--[if !supportFootnotes]-->[1]
                                                <!--[endif]--></a>.</p><p>The importance of biographical information
                                        about the authors of &quot;Haft Shuaro&quot; is, first of all, in the expression
                                        of the &quot;soul&quot; in the poems of these poets.</p><p>In fact, the facts
                                        and information about the life and works of the prince in the complex and
                                        tazkiras are integrated and allow us to think continuously and in detail about
                                        the creators. This is especially important for a monographic study of poets
                                        whose lives and careers are unknown and who are being studied for the first
                                        time.</p>
                                    <hr><p><!--[if !supportFootnotes]--></p><p>&nbsp;</p><!--[endif]--><p><a
                                            href="#_ftnref1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a>Белинский
                                        В.Г. Собрания сочинений в трёх томах. Ташкент: ИИИ.М.1971.С.374.
                                        @endif
                                        @if( $lang == "ru" )
                                            Известно, что особое место в тезкирех и комплексах занимают биографии о
                                            личности художника, служащие расширению общего представления о том или ином
                                            художнике. В связи с этим сведения о поэтах, вошедшие в &laquo;Хафт Шуаро
                                            &raquo;, имеют определенную литературную ценность. Если тезкиры раскрывают
                                            образ поэта как личности, его характер и вообще его характер, то комплексы
                                            отражают его потенциал как творца, его сильные и слабые стороны в поэзии.
                                            Поэтому образ каждого поэта представляет собой сочетание личности и
                                            творчества, и это важно иметь в виду при оценке произведения. Зеро, В.Г. Как
                                            отмечал Белинский, &laquo;источник творческой активности поэта &mdash; в
                                            духе, выраженном в его личности. Поэтому душу поэта, первое объяснение
                                            характера его произведений следует искать в его личности.<a href="#_ftn1">
                                                <!--[if !supportFootnotes]-->[1]<!--[endif]--></a></p><p>Значение
                                        биографических сведений об авторах &laquo;Хафт Шуаро&raquo; заключается, прежде
                                        всего, в выражении &laquo;души&raquo; в стихах этих поэтов.</p><p>На самом деле
                                        факты и сведения о жизни и творчестве князя в комплексе и тезкирех интегрированы
                                        и позволяют непрерывно и подробно думать о создателях. Это особенно важно для
                                        монографического изучения поэтов, жизнь и творчество которых неизвестны и
                                        изучаются впервые.</p>
                                    <hr><p><!--[if !supportFootnotes]--></p><p>&nbsp;</p><!--[endif]--><p><a
                                            href="#_ftnref1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a>Белинский
                                        В.Г. Собрания сочинений в трёх томах. Ташкент: ИИИ.М.1971.С.374.
                                @endif

                                {{--                                </p>--}}
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content5 cid-t79INMiNr7" id="content5-10">


        <section class="content5 cid-t79JjzHzlL" id="content5-11">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-12" style="font-size: 18px;">


                        {{--                        <p class="mbr-text mbr-fonts-style display-7">--}}

                        @if( $lang == "uz" )
                            Darhaqiqat, majmua va tazkiralardagi shahzoda shoirlar hayoti va asarlari xususidagi fakt va
                            ma`lumotlar yaxlitlik kasb etib, ijodkorlar haqida davomli va batafsil fikrlashga imkon
                            beradi. Bu hol hayot va ijod yoʻli koʻpchilikka noma`lum boʻlgan hamda ilk marta
                            oʻrganilayotgan shoirlar haqidagi monografik tadqiqot uchun, ayniqsa, zarurdir.</p><p>
                                Adabiyotshunos I.Haqqulov e`tirof etganidek, &ldquo;ijodni shoir shaxsiyatidan ajralgan
                                bir holat deb boʻlmaydi, aksincha, uni shoir xarakteri, ruhiy ehtiyojlari va ma`naviy
                                imkoniyatlari bilan uzviy bogʻlash&rdquo; muhimdir<a href="#_ftn1">
                                    <!--[if !supportFootnotes]-->[1]<!--[endif]--></a>.</p><p>Zero, yuqorida qayd
                                etilgan tazkiralardagi &ldquo;shoir shaxsiyatiga&rdquo; oid ma`lumotlar &ldquo;Haft
                                shuaro&rdquo;ni tadqiq etishda qoʻshimcha materialdir.</p><p>Majmuada yetti nafar shoir
                                asarlaridan namunalar bilan birga, Sultoniy ijodi xususidagi ma`lumotlar hamda Farruxni
                                ulugʻlovchi boshlama joy olgan. Tazkiralarda esa ularga turlicha yondashilgan. Jumladan,
                                Laffasiy tazkirasida ular toʻliq saqlangan holda Tabibiy va Xodim tazkiralarida Murodiy
                                hamda Farruxga oid qismlar yoʻq. Shaxsan Feruz tavsiyasi va nazoratida tuzilgan bu
                                tazkiralarda shohning eng yaqin qarindoshlari &ndash; inisi hamda oʻgʻli asarlari va
                                ma`lumotlarining uchramasligi besabab emas. Nazarimizda, Murodiy va Farrux Tabibiy
                                tazkiralaridagi Feruz gʻazallariga payrav yozishmagan yoxud yozganlari yetarli boʻlmagan
                                koʻrinadi. Tabibiy qolgan besh nafar shoirning har biriga xos asosiy xususiyatlarni
                                koʻrsatib, shunday ta`riflaydi: &ldquo;maoniy durining gʻilofi&rdquo; Sultoniy, &ldquo;ulum
                                ichra monandi yoʻq&rdquo; Sodiq, &ldquo;gʻazal ahli shirin bayoni&rdquo; Sa`diy, &ldquo;xushfahmu
                                fozil, adibu komil&rdquo; Bayoniy, &ldquo;hamma nuktasi asru shirin&rdquo; Oqil va
                                ularning payrav gʻazallari oldidan bitgan ma`lumot - masnaviylarida bu fikrlar yanada
                                kengroq ifodalanadi.</p><p>&ldquo;Haft shuaro&rdquo;ning badiiy asarlar qismi
                                Murodiyning (1854-1908) yigirma gʻazali, besh muxammas, bir musaddas, bir qasida va bir
                                ruboiysi bilan boshlanadi. Turli janrdagi bu asarlar asl ismi Toʻramurod boʻlgan
                                Murodiyning ancha yetuk shoir ekanini koʻrsatadi. Shoir haqidagi bu fikrni Laffasiyning
                                tazkirasida keltirgan quyidagi mulohazalar ham isbotlaydi: &ldquo;Murodiyning she`rlari
                                ma`ni jihatdan bir daryoi ummon boʻlib, ilm gʻavvoslari durri javohir, la`li sadaf
                                ijrosidin hosil boʻlgani kabi, Murodiyning dil she`ridin yuzlarcha ma`ni mafgʻul hosil
                                qilur erdilar&rdquo;<a href="#_ftn2"><!--[if !supportFootnotes]-->[2]<!--[endif]--></a>.
                            </p><p>Muhammad Yusufbek Bayoniy bu fikrlarni yanada toʻldirib, &ldquo;Toʻramurod toʻrakim,
                                xon hazratlarining birodarlari erdilar, ellik toʻrt yoshlarida olami foniydin saroyi
                                boqiyga rihlat koʻrguzdilar. Ul hazratdin ikki oʻgʻil yodgor qoldi. Biri Rahmonquli
                                toʻra va biri Xudoyquli toʻradirlar&rdquo;, &ndash; deb yozadi va Murodiyga
                                bagʻishlangan gʻazalini keltiradi<a href="#_ftn3"><!--[if !supportFootnotes]-->[3]
                                    <!--[endif]--></a>.</p><p>Majmuadagi shoirlardan biri Farrux (1873-1918) boʻlib, u
                                Feruzning oʻgʻli Asfandiyordir. U haqda majmuada shunday soʻzlar bitilgan:</p><p>&ldquo;Bismillahir
                                rahmanir rahiym. Sayid Asfandiyor toʻra Zayd Umar mutaxallusi Farruxi valadi Sulaymon
                                nishon va Sayid Muhammad Rahim Bahodirxoni Soniy davom davlati va shavkati&rdquo;<a
                                    href="#_ftn4"><!--[if !supportFootnotes]-->[4]<!--[endif]--></a>.</p><p>Farrux
                                shaxsiyati va ijodi haqida kitobda boshqa ma`lumotlar yoʻq. Bu holni tushunish mumkin.
                                Nazarimizda, Bayoniy sanoqligina she`rlar yozgan valiahd &ldquo;shoir&rdquo;ni ortiqcha
                                maqtashdan koʻra, uning ijodi xususida sukut saqlashni ma`qul koʻrgan. Ba`zi
                                ma`lumotlarni shu davrdan 38 yil oʻtgach tuzilgan Laffasiy tazkirasida uchratamiz. Unda
                                Asfandiyor yoshligidan ancha bilimlarni egallagani, ma`rifatga intilgani va &ldquo;otasi
                                Muhammad Rahimxonga ma`qul boʻlmoqlik uchun Farrux taxallusi bilan she`r mashq qilib,
                                oshiqona abyotlar yozgani&rdquo; ta`kidlanib, shaxsiyati xususida yana quyidagilar
                                bitilgan: &ldquo;Xiva xonligi hukumatiga ega boʻlgach, ul (Asfandiyor &ndash; I.X)
                                oʻziga kibr paydo qilib, zolimona ishlar qilib, fuqarolarga jabr-sitamlar etib&rdquo;
                                &ndash; &ldquo;hamisha fikridir ishqi majoziy, parichehra gulandomlar birla soziy&rdquo;(B.30-31).
                                Bu oʻrinda Laffasiy Farrux xarakteri, xulq&ndash;atvoriga xolis yondashib, uning
                                shoirligi otasiga ma`qul boʻlish majburiyatining natijasi ekaniga alohida urgʻu
                                beradiki, bu fikr Farruxning 1906 yildan soʻng ijod qilmagani va avval muxtasar devon
                                tuzganiga (jami 17 gʻazal, 2 muxammas, 1 ruboiy) guvohlik beradi. Koʻpchilik she`rlarida
                                ham tor intim kechinmalarning talqini ustuvorligini &ldquo;Haft shuaro&rdquo;dagi
                                she`rlari koʻrsatib turibdi. Nazarimizda Asfandiyorxonning shoh va shoir sifatidagi
                                shaxsiyati juda murakkab. Keyingi davrlarda xon sifatida qoralangan Asfandiyorni shoir
                                Farrux sifatida e`tirof etish koʻzga tashlanmoqda. Ushbu tamoyilni adabiyotshunos
                                H.Abdullayev quyidagicha rad etadi: &ldquo;tarixda zolimligi bilan nom chiqargan, oʻnlab
                                norasida qizlarning hayotini xazon etgan xonning &ldquo;she`riyat&rdquo;ini nahotki
                                uning siyosati, axloqi va faoliyatidan ajratib boʻlsa? Zero, xon sifatida insonni
                                tahqirlagan shaxsni ayni paytda shoir sifatida insoniy muhabbatni ulugʻlashiga ishonib
                                boʻladimi?&rdquo;<a href="#_ftn5"><!--[if !supportFootnotes]-->[5]<!--[endif]--></a></p>
                            <p>Biroq 2006-yili chop etilgan &ldquo;Farrux. Yod etib mandin degil&rdquo;<a href="#_ftn6">
                                    <!--[if !supportFootnotes]-->[6]<!--[endif]--></a> nomli kitobda Asfandiyorxonning
                                shoh va shoir sifatidagi shaxsiyati yangi nuqtai nazardan ijobiy hamda xolis yoritilgan.
                                Adabiyotshunos olim N.Jumaxoʻjaning &ldquo;Bunyodkor inson, noziktab` shoir&rdquo;
                                sarlavhali soʻzboshisi hamda J.Joʻrayevning soʻngsoʻzida Asfandiyorxon &ndash;
                                Farruxning shaxsiyati, ijodiyoti atroflicha tahlil etilgan.</p><p>Darhaqiqat, ijodkor
                                asari uning shaxsi va dunyoqarashi mujassamining ifodasi ekanligi haqidagi adolatli
                                fikrni quvvatlaymiz.</p><p>O`z asarlari bilan majmuadan eng salmoqli oʻrin egallagan
                                shoir Sultoniydir (1889-1944). Feruzning sevimli nabirasi boʻlgan Said Nosir toʻraga bu
                                taxallusni bobosi bergan. Bayoniydan ta`lim olgan Sultoniy turli janrlarda ijod qilgan.
                                Majmuadagi Bayoniyning soʻzboshisida unga shunday ta`rif beriladi: &ldquo;Kim ushbu
                                shahzodayi mushorun ilayh chun podshohi oliyjoh atoullohu taolo umruhu va davlatuhu
                                nabiralari jumlalaridin erdilar. Soyai inoyatlarida ta`lim va tarbiyatlari birla
                                sarafroz boʻlib, ham ul turluk fazlu hunarlar birlakim, oning birlan el oralarida
                                mashhurdirlar, shuhrai ofoq boʻldilar. Ash`orlari el oralarida mutafarriq boʻlib, har
                                kimga taajjub yuzidan oning tamoshosiga shavq paydo boʻlur va har koʻngulga oning
                                ma`nolari andishasida va inbisot yuzlanur erdi&rdquo; (B.36).</p><p>&ldquo;Turli fazlu
                                hunarlar birla mashhur&rdquo;, &ldquo;ash`orlari el oralarida mutafarriq&rdquo; boʻlgan
                                Sultoniy haqida tazkiralarda ham yuqoridagi fikrga monand ancha batafsil ma`lumotlar
                                bor. Jumladan, Tabibiyda :</p><p>Chu Sultoniy xushfazl shoir erur,</p><p>Gʻazal degali
                                asru mohir erur (B.1675).</p><p>Laffasiyda: &ldquo;Sultoniy Feruzga payrav ancha
                                gʻazallar yozib turgʻonidan boshqa . . . bir devon asar ham yozadi. Sultoniyning
                                koʻpchilik gʻazallari oshiqona va falsafalardan iboratdur&rdquo; (B.32).</p><p>Xodimda:
                                &ldquo;Shoir Sultoniy &ndash; Nosir toʻra mansabdor boʻlgan emas. Yusufbek (Bayoniy
                                &ndash; I.X) unga yetti yoshidan boshlab she`r mashqi ta`limini bergan. Toʻra bitgan
                                she`rini oʻz qoʻli birla Muhammad Rahimxonga oʻzi kiritib berar edi&rdquo;
                                (B.31-32).</p><p>Turli davrlar mualliflariga mansub bu fikrlar Sultoniyning talantli
                                shahzoda shoirlardan biri va saroy adabiy muhitining faol vakili ekaniga dalildir.</p>
                            <p>She`rlari bilan majmuadan oʻrin olgan shoirlardan yana biri Sodiqdir (1860-1930). Uning
                                shaxsiyati va ijodi xususida tazkiralardagi ma`lumotlar diqqatga molikdir. Ulardan
                                ma`lum boʻlishicha, shoirning ismi Rahmonquli boʻlib, u shoir Murodiyning oʻgʻli, ya`ni
                                Feruzning jiyanidir. Fors, arab tillarini, adabiyotini, Xorazm tarixini puxta bilgan
                                Sodiq talantli tarjimon va hattot ham boʻlgan. Tabibiy uni:</p><p>&ldquo;Dagʻi Sodiq ul
                                sohibi ilmu hol,</p><p>Mudom etgusi ma`ni darsin xayol&rdquo; (B.1176),&ndash;</p><p>
                                deya ta`rif etsa, Laffasiy she`rlarini daryoi ummondagi durri javohirga qiyos kilar
                                ekan, yana bir iqtidori haqida yozadi: &ldquo;Sodiq fasohat lisonligʻidin ziyodatiy
                                xushxon boʻlganidek, xatti suls, xatti kufiy, xatti rayhoniy, xatti shikastalarni ham
                                ona tili kabi oʻqiganidek ham yozar erdi&rdquo; (B.34). Shuningdek, shoir Asfandiyor
                                davrida haqorat va xusumatlar tufayli xoʻrlangani ham qayd etiladi. Sodiqning tashqi va
                                ma`naviy qiyofasi esa Xodim tazkirasida yorqin aks etgan: &ldquo;Rahmonquli madrasada
                                oxun boʻlib, dars aytuvga ham kuchli edi. U qora soqol, uzun chechak yuzli, xushfe`l,
                                vijdonli odam edi. O`zi kambagʻal odam boʻlib, toʻralik dagʻdagʻasi yoʻq edi. Yuvosh,
                                lekin gʻoyat ishchan edi&rdquo; (B.34-35).</p><p>Manbalarda Sa`diy (vafoti 1937y)
                                taxallusli shoir shahzoda ijodkorlar orasida oʻziga xos jihatlari bilan ajralib turishi
                                bayon etiladi. Ta`kidlanishicha, uning asl ismi Sa`dulla boʻlib, u Feruzning oʻgʻli Said
                                Abdulloning farzandi, shohning nevarasidir. Feruz tarbiyasida kamol topgan, zullisonayn
                                shoir boʻlgan, devon tuzgan, Bayoniydan ta`lim olgan. Tazkiralarda uning shaxsiyati,
                                ijtimoiy ahvoli va iqtidori xususida faqat ijobiy fikrlarni uchratamiz. Jumladan,
                                Tabibiy Sa`diy haqida:</p><p>Durri bahri donish kalomi oning,</p><p>Ki Sa`dulla shahzoda
                                nomi oning (B.227), &ndash;</p><p>deb yozadi. Laffasiyda esa boshqa shaxsiy sifatlari
                                ham bayon qilingan. Chunonchi &ldquo;...ul yoshligʻidan jununta`b, koʻsa, qoʻtir, egni
                                qisiq hoʻkki boʻlib, anchalik ilm-fan egasi boʻladur, Feruzga payrav toʻrtlik abyotlar
                                yozadur. Sa`diyning asarlari tamomi bir shoʻx ma`shuqona boʻlsa-da, ma`ni jihatdan har
                                bir dona bayti bir gavhari yakto erdi&rdquo; (B.35-36).</p><p>Bu fikrlar Xodim talqinida
                                yanada kengayib, shoir xarakterining ayrim qirralari alohida qayd etiladi. Tazkirachi
                                yozadi: &ldquo;Sa`dulla toʻra Xivaning tashqari qal`asida, Nurullabek hovlisida
                                tugʻilgan. U juda zehni oʻtkir odam edi. Bir koʻrgan narsasini, xoh arabiy boʻlsin, xoh
                                forsiy boʻlsin, darrov yodlab olar edi. Sa`dulla toʻra mansabdor boʻlgan emas. Har bir
                                ishga mohir boʻlgani uchun Yusufbek Bayoniy ustodligi birla oʻzi ham ilmga chanqoq
                                odamligidan shoir boʻlgʻon, 60 yoshlarida vafot etgan&rdquo; (B.35-36).</p><p>
                                Shuningdek, Sa`diy zamondoshlari uni qiziqish doirasi keng shaxs, faol kitobxon va usta
                                shaxmatchi sifatida ham eslashadi.</p><p>Tazkiralarda qayd etilishicha, shahzoda
                                shoirlardan Oqil (1874-1929) oʻzining koʻp qirrali faoliyati bilan oʻzgachalik kasb
                                etgan ijodkordir. &ldquo;Oqil&rdquo; shoirning taxallusi boʻlib, asl ismi Otabek boʻlib,
                                Feruzning jiyani, ya`ni opasining oʻgʻlidir. Manbalarda Oqilni xarakterlovchi umumiy
                                yakdil fikr &ndash; uning yetuk shoir, san`atkor, musiqashunos, rassom, xattot va
                                saxovatpesha ekanligidir. Jumladan, Tabibiy Oqilning ijodiy iqtidorini yuksak
                                baholab:</p><p>Kelib Oqil ul hushmandu fahim,</p><p>Tabiat ango borho mustaqim (B.
                                1010-1053), &ndash;</p><p>desa, Laffasiy uning boshqa fazilatlarini kengroq aks
                                ettiradi. Jumladan, u yozadi: &ldquo;Oqil ersa uzun boʻylugʻ, chechak yuzli, sariq
                                mayiz, choʻqqi soqollik erdi, oning fazlini koʻrgan zamono Arastu &ndash; Aflotunlari
                                musallam qilur erdilar. Oqil doim jurnal, gazet oʻqib, dunyo siyosatidin boxabar boʻlib
                                turar erdi, oʻziga maxsus kitobxona &ndash; &ldquo;Xayriyoti kutub&rdquo; qilib, hamma
                                vaqtlar yetim oʻgʻlon, tul-bevalarni turlik ovqat va kiyimlar bilan shikasta dillarini
                                marhamat qilib turar erdi&rdquo; (B.38). Bu sifatlar Xodim tazkiralarida saqlangani
                                holda uning ijodiy qobiliyati va xulq-atvori ta`rifiga alohida urgʻu beradi: &ldquo;u
                                eski maktabni toʻliq bitkazgan, juda ham zehnli boʻlgan. Garchi madrasa ta`limini
                                olmagan boʻlsa ham, olimlar bilan koʻp suhbatlar qilgʻon. U turli ilmlar bilan tanish
                                edi, 25 yoshidan shoirlik bilan shugʻullana boshlagʻon, soz ilmidan olti yarim maqomni
                                ham bilar edi, ham tanbur, ham gʻijjak, ham doira, ham dutor cherta bilar, lekin ayta
                                bilmas edi. Otabek toʻra juda ham saxiy edi, uzun boʻyli, qora soqolli, xushbichim odam
                                edi, soʻzlari mazmunli, shirali edi&rdquo; (B.44).</p><p>Manbalardagi eng batafsil
                                adabiy ma`lumotlar Muhammad Yusufbek Bayoniyga (1840-1923) tegishlidir. Garchi Bayoniy
                                lirikasi adabiyotshunoslikda birmuncha oʻrganilgan, tarixiy asarlari chop etilgan boʻlsa
                                ham, u haqdagi tazkiralardagi ma`lumotlar, xususan, shaxsiyati bilan bogʻliq tafsilotlar
                                tahlil etilmay kelindi. Bu tabiiy. Chunki Bayoniy Feruzning eng yaqin doʻsti,
                                nevaralarining ustozi boʻlish bilan birga, adabiy muhitning yirik namoyandalaridan biri
                                va shohning yaqin maslakdoshi ham edi. Bu xususiyatlar uning barkamol inson va sermahsul
                                ijodkor sifatidagi shaxsiyatini el orasida mashhur qildi. Bu haqda tazkiralarda ham
                                ancha ma`lumotlar saqlanib qolgan. Tabibiy tazkirasida Bayoniy toʻgʻrisida quyidagi
                                masnaviyni oʻqiymiz:</p><p>Bayoniyki ul donish ogoh erur,</p><p>Gʻazal ahliga murshidi
                                roh erur (B.448).</p><p>Bu oʻrinda Bayoniyning shoirlikda yuksak mahorati ta`kidlansa,
                                boshqa manbalardagi talqinlar bir-birini toʻldirib, shoirning mukammal qiyofasini
                                gavdalantiradi. Laffasiy tazkirasining &ldquo;Bayoniykim Muhammad Yusufbek ahvoloti&rdquo;
                                qismida Bayoniyning forsiy, arab, turk tillarini bilgani, tarixchi, tarjimon,
                                ma`rifatparvarligi qayd etiladi va &ldquo;yoshligʻidan yaxshigina farosatligʻ, ziyrak
                                boʻlib, akasi Yaxshimuroddan ta`lim oladi, tanbur, gʻijjakka ham ma`rifatli boʻlib,
                                shaxmatda ham juda tez fahmlik usto boʻladur&rdquo;, &ndash; deyiladi (B.41).</p><p>
                                Xodim tazkirasida esa Bayoniy shaxsiyatining boshqa ibratli jihatlarga e`tibor berilgan.
                                U yozadi: &ldquo;Eski maktabni bitirgach, tabiblik ilmidan ancha xabardor boʻlgʻon,
                                madrasa ta`limini olib, ilmi oshib ketgan. Yusufbek Bayoniy mansabdor boʻlgʻon emas,
                                qoʻlining kuchi bilan kun kechirgan, olti yarim maqom sozni toʻliq bilar edi. U
                                koʻrinishdan uzun boʻyli, xushbichim, sariq soqol, kambagʻal odam edi. Shunday boʻlsa
                                ham, har bir kuni mehmonsiz oʻtmas edi, kiyimlarini toza tutar, oʻzi oʻta ketgan saxiy,
                                suhbati ma`noli, odatlari ham yaxshi, shirinsoʻz kishi edi&rdquo; (B.40-41).</p><p>
                                Diqqatga sazovor yana bir jihat shundaki, qayd etilgan tazkiralar va majmuada ikki
                                mushtarak fikr alohida ta`kidlanadi:</p><p>1. Shahzoda shoirlar nasl-nasabidan qat`i
                                nazar saroyda rasmiy mansab egallashmagan, ijodiy faoliyatga ragʻbat bildirishgan;</p>
                            <p>2. Adabiy muhit ijodkorlarining, jumladan, shahzoda shoirlarning taxalluslari shaxsan
                                Feruz tomonidan ma`qullangan yoxud taklif etilganki, bu ham shohning ijod ahliga befarq
                                emasligiga dalildir.</p><p>Shu bilan birga, Feruzning ijodkorlar homiysi sifatidagi
                                katta xizmatlarini baholashda xolislik tamoyiliga amal qilib, uning hukmdor va oʻz
                                davrining ilgʻor farzandi ekanligini unutmasligimiz zarur. Zero, Feruzning adabiyot
                                rivoji xususidagi gʻamxoʻrligida oʻz mavqeini mustahkamlash maqsadi koʻzlanganini ham
                                e`tirof etgan holda ayrim ijodkorlarga nisbatan jazo me`yorini oshirib yuborganligini
                                ham unutmaslik joiz. Chunonchi, Avazning ikki yuz darra bilan kaltaklanib xoʻrlanishi,
                                Masharif Tarro, Polli doʻzchi kabi san`atkorlarning qattiq jazolanishi, Palmin va Xonim
                                xalfalarning qopga solib, yuz darra urilishi kabi faktlarini ijobiy hodisa deb
                                boʻlmaydi. Nazarimizda, bu hodisalarda Feruzning hukmdorlik tabiati va xarakteridagi
                                murakkablik koʻproq namoyon boʻlganki, bularni ochiq aytish Feruz shaxsiga tabiiylik
                                bagʻishlaydi, uning taraqqiyparvar shoh sifatida shakllanish jarayoni real hayotiylikka
                                ega ekanidan darak beradi. Biroq Feruz shaxsidagi bu qusur uning ma`rifatparvarlik
                                faoliyati mohiyatini oʻzgartira olmaydi.</p><p>Yuqoridagi fikrlar bayon etilgan
                                tazkiralarning &ldquo;Haft shuaro&rdquo;ga munosabatida yana bir jihatni alohida
                                ta`kidlash joiz: tazkiralar mualliflari majmuaga kirgan shahzoda shoirlar bilan bir
                                vaqtda va bir adabiy muhitda yashab ijod etishgan ma`rifatli, ziyoli shoirlar boʻlib,
                                oʻzlari bilgan adabiy-tarixiy ma`lumotlarga asoslanishgan. Shunga qaramay, oʻsha davr
                                saroy sharoiti va sub`ektiv sabablarga koʻra ularning qarashlarida tarafkashlik yoki
                                faktlarni sharhlashda noaniqliklarga yoʻl qoʻyish mavjud. Chunonchi, Tabibiy tazkirasi
                                shahzoda shoirlarning hammasi hayotligi davrida Feruz nazoratida tuzilgani bois ular
                                sha`niga maqtov ohanglarining ustuvor boʻlishi tabiiydir. Laffasiy tazkirasi esa XX
                                asrning 40-yillarida yaratilgani sababli unda tanqidiy munosabat aks etadi. Jumladan,
                                Farruxning zolim va johilligi, Sultoniy xarakteridagi xasislik, Xodim tazkirasida Sa`diy
                                axloqidagi qusurlar qayd etiladi. Shuningdek, tazkirachining &ldquo;Bayoniy shoirlik
                                bilan 40 yoshlarida shugʻullangan boʻlsa, ehtimol&rdquo;, degan fikri shubhalidir.
                                Vaholanki, shoir bu yoshgacha qator she`rlar yozishga ulgurgan edi. Ayrim shoirlarning
                                tavallud va vafoti sanalari talqinida ham tafovutlar bor (Sodiq va Sa`diy). Bu oʻrinda
                                ta`kidlash kerakki, tazkiralardagi ma`lumotlarda tuzuvchilarning ayrim subyektiv
                                qarashlari, shaxsiy mayllari, turlicha yondashuvlari ham boʻlishi tabiiy. Buni Avaz
                                haqidagi ta`riflarda ham koʻrish mumkin. Jumladan, Laffasiy tazkirasida Avazning &ldquo;xalq
                                shikasta koʻngliga yaqin fikrda ekanligi&rdquo; ta`kidlansa, Xodim tazkirasida &ldquo;ogʻzi
                                juda beparovuz (shakkok) edi&rdquo;, &ndash; deyiladi. Shunga qaramay, har bir tazkira
                                fakt va ma`lumotlar xarakteriga koʻra muhim va oʻziga xosdir. Jumladan, Laffasiy
                                tazkirasida shahzoda shoirlarning har biri ahvoloti bayoniga alohida qism ajratilgan va
                                ularning she`rlari asosida &ldquo;Haft shuaro&rdquo; tuzilgani takror qayd etilsa, Xodim
                                tazkirasida Feruz vafotidan soʻng shoirlarning jafoli hayoti, Sultoniy va Sa`diyning
                                shoʻro qatagʻoniga uchrashi va keyingi qismati xususida zarur ma`lumotlar berilgan.</p>
                            <p>Umuman, tazkiralardagi ma`lumotlar &ldquo;Haft shuaro&rdquo;dagi asarlarning
                                mazmun-mohiyatini, ularda shoirlar shaxsiyati va dunyoqarashining aks etishini hamda
                                boshqa badiiy-estetik masalalarni izchil tadqiq etishga xizmat qiladi.</p>
                            <hr><p><!--[if !supportFootnotes]--></p><p>&nbsp;</p><!--[endif]--><p><a href="#_ftnref1">
                                    <!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Haqqulov I. She`riyat - ruhiy
                                munosabat. &ndash;T.: Adabiyot va san`at, 1990.- B 216.</p><p><a href="#_ftnref2">
                                    <!--[if !supportFootnotes]-->[2]<!--[endif]--></a> Laffasiy. Tazkirai shuaro.
                                Urganch: Xorazm, 1992- B 72. Bundan keyingi iqtiboslar olingan tazkira muallifi nomi
                                koʻrsatilib, qavs ichida sahifa raqami beriladi.</p><p><a href="#_ftnref3">
                                    <!--[if !supportFootnotes]-->[3]<!--[endif]--></a> Qarang: Bayoniy. Shajarai
                                xorazmshohiy. Nashrga tayyorlovchilar Jumaxoʻja N., Adizova I. Toshkent.: Adabiyot va
                                san`at, 1994 -B. 92-93.</p><p><a href="#_ftnref4"><!--[if !supportFootnotes]-->[4]
                                    <!--[endif]--></a> Haft shuaro-1906. OʻzRFAShI. Inv. 10374.- B.23</p><p><a
                                    href="#_ftnref5"><!--[if !supportFootnotes]-->[5]<!--[endif]--></a> Abdullayev H.
                                Soʻz sehri. Toʻplam.T.: TDPU, 2005.-B.</p><p><a href="#_ftnref6">
                                    <!--[if !supportFootnotes]-->[6]<!--[endif]--></a> Farrux. Yod etib mandin degil.
                                T.: Zarqalam, 2006. B.23.
                        @endif
                        @if( $lang == "en" )
                            <p>It is known that biographies about the personality of the artist have a special place in
                                tazkira and complexes, which serve to expand the general idea about this or that artist.
                                In this regard, the information about the poets included in the &quot;Haft Shuaro&quot;
                                has a certain literary value. While the tazkiras reveal the image of the poet as a
                                person, his character and, in general, his character, the complexes reflect his
                                potential as a creator, his strengths and weaknesses in poetry. Therefore, the image of
                                each poet is a combination of personality and creativity, and it is important to keep
                                this in mind when evaluating the work. Zero, V.G. As Belinsky noted, &ldquo;the source
                                of the poet&#39;s creative activity is in the spirit expressed in his personality.
                                Therefore, the soul of the poet, the first explanation of the character of his works
                                should be sought in his personality<a href="#_ftn1"><!--[if !supportFootnotes]-->[1]
                                    <!--[endif]--></a>.</p><p>The importance of biographical information about the
                                authors of &quot;Haft Shuaro&quot; is, first of all, in the expression of the &quot;soul&quot;
                                in the poems of these poets.</p><p>In fact, the facts and information about the life and
                                works of the prince in the complex and tazkiras are integrated and allow us to think
                                continuously and in detail about the creators. This is especially important for a
                                monographic study of poets whose lives and careers are unknown and who are being studied
                                for the first time.</p><p>As the literary critic I. Hakkulov admits, &quot;creativity is
                                not a state separated from the personality of the poet, on the contrary, it is important
                                to connect it with the character, spiritual needs and spiritual potential of the poet&quot;
                                <a href="#_ftn2"><!--[if !supportFootnotes]-->[2]<!--[endif]--></a>.</p><p>Indeed, the
                                information about the &quot;poet&#39;s personality&quot; in the above-mentioned
                                commentaries is additional material in the study of Haft Shuaro.</p><p>The collection
                                includes samples of the works of seven poets, information about the work of the Sultan
                                and a starting point in honor of Farrukh. In the Tazkirah, however, they are approached
                                differently. In particular, in Laffasi&#39;s tazkirah they are fully preserved, in
                                Tabibi&#39;s and Khadim&#39;s tazkirah there are no parts related to Murodi and Farrukh.
                                It is not without reason that the closest relatives of the king - his brother and son -
                                did not find the works and information in these tazkirs, which were compiled on the
                                advice and under the personal supervision of Feruz. In our opinion, Feruz&#39;s ghazals
                                in the treatises of Muradi and Farrukh Tabibi did not follow or did not suffice. The
                                doctor describes the main features of each of the other five poets as follows: &quot;The
                                sheath of the Maani duri&quot; Sultani, &quot;There is no monan in the world&quot;
                                Sadik, &quot;The sweet statement of the people of ghazal&quot; Saadi, , &quot;All points
                                are asru shirin&quot; The information that preceded the Akil and their ghazals is more
                                widely expressed in the Masnavi.</p><p>The artistic part of Haft Shuaro begins with
                                Muradi&#39;s (1854-1908) twenty ghazals, five muhammas, one musaddas, one qasida and one
                                rubai. These works of various genres show that Muradi, whose real name was Turamurod,
                                was a very mature poet. This opinion about the poet is confirmed by the following
                                comments made by Laffasi in his commentary: would produce&quot;<a href="#_ftn3">
                                    <!--[if !supportFootnotes]-->[3]<!--[endif]--></a>.</p><p>Muhammad Yusufbek Bayani
                                added, &ldquo;Turamurod torakim, the brother of Hazrat Khan, was fifty-four years old,
                                and his palace flourished forever. He is survived by two sons. One is Rahmonkuli Tora
                                and the other is Khudoykuli Tora, &rdquo;he wrote and quoted a ghazal dedicated to
                                Muradi<a href="#_ftn4"><!--[if !supportFootnotes]-->[4]<!--[endif]--></a>.</p><p>One of
                                the poets in the complex was Farrukh (1873-1918), who was Asfandiyor, Feruz&#39;s son.
                                The following words are written about him in the complex:</p><p>&ldquo;Bismillahir
                                rahmanir rahiym. Sayyid Asfandiyar tora Zayd Umar mutakhallusi Farruhi valadi Sulaymon
                                nishan and Sayyid Muhammad Rahim Bahodirkhani Soni continued state and honor&rdquo;<a
                                    href="#_ftn5"><!--[if !supportFootnotes]-->[5]<!--[endif]--></a>.</p><p>There is no
                                other information about Farrukh&#39;s personality and work in the book. This situation
                                is understandable. In our opinion, the caliph, who wrote only a few poems, preferred to
                                remain silent about his work, rather than praising the &quot;poet&quot; too much. We
                                find some information in the Laffasi tazkira, compiled 38 years later. It is said that
                                Asfandiyar acquired a great deal of knowledge from an early age, aspired to
                                enlightenment, and &quot;practiced poetry under the pseudonym Farrukh and wrote romantic
                                poems in order to please his father Muhammad Rahimkhan.&quot; , he (Asfandiyar - IX)
                                created arrogance, did cruel things and oppressed the citizens &rdquo;-&ldquo; love is
                                always a figurative idea, parichehra gulandomlar birla soziy &rdquo;(P.30-31). In this
                                context, Laffasi Farrukh emphasizes that his character is objective and that his poetry
                                is the result of his father&#39;s obligation to please him testifies. In many of his
                                poems, the poems in Haft Shuaro show the predominance of the interpretation of narrow
                                intimate experiences. In our opinion, Asfandiyarkhan&#39;s personality as a king and a
                                poet is very complex. In later times, Asfandiyor, who was condemned as a khan, was
                                recognized as a poet Farrukh. Literary critic H.Abdullayev rejects this principle as
                                follows: &quot;Is it possible to separate the&quot; poetry &quot;of the khan, who became
                                famous in history for his cruelty and ruined the lives of dozens of homeless girls, from
                                his politics, morals and activities?&quot; Is it possible to believe that a person who
                                insults a person as a khan at the same time glorifies human love as a poet?&rdquo;<a
                                    href="#_ftn6"><!--[if !supportFootnotes]-->[6]<!--[endif]--></a></p><p>However, it
                                was published in 2006 &ldquo;Farrux. Yod etib mandin degil&rdquo;<a href="#_ftn7">
                                    <!--[if !supportFootnotes]-->[7]<!--[endif]--></a> Asfandiyarkhan&#39;s personality
                                as a king and a poet is described in a positive and objective way from a new point of
                                view. Literary scholar N.Jumakhoja&#39;s foreword &quot;Bunyodkor inson, delictab` shoir&quot;
                                and J.Jorayev&#39;s concluding remarks provide a detailed analysis of the personality
                                and creativity of Asfandiyorkhon-Farrukh.</p><p>Indeed, we support the fair idea that a
                                creative work is an expression of his personality and worldview.</p><p>The most
                                important poet in the complex is Sultani (1889-1944). Said Nasir, Feruz&#39;s beloved
                                grandson, gave the nickname to Tora after his grandfather. Educated by Bayani, Sultani
                                created works in various genres. The foreword to the narration in the collection
                                describes him as follows: In Shadow&#39;s grace, his education and upbringing were
                                glorious, and his various professions were popular with him, and he became famous. His
                                poems were scattered among the people, and everyone was amazed by his mother&#39;s
                                spectacle, and his heart was filled with thoughts and insights of his meanings&rdquo;
                                (P.36).</p><p>The commentaries on Sultani, who was &quot;famous for different
                                professions&quot; and &quot;whose poetry is popular among the people,&quot; contain much
                                more detailed information in line with the above opinion. Including Tabibi:</p><p>Chu
                                Sultoniy xushfazl shoir erur,</p><p>Gʻazal degali asru mohir erur (P.1675).</p><p>In
                                Laffasi, he writes: . . he also writes a devon work. Many of Sultani&#39;s poems are
                                romantic and philosophical &rdquo;(P. 32).</p><p>The employee said: &ldquo;Poet
                                Sultani-Nasir was not an official. Yusufbek (Bayoniy - I.X) taught him poetry from the
                                age of seven. He used to submit his finished poem to Muhammad Rahimkhan with his own
                                hands &rdquo;(P.31-32).</p><p>These ideas, which belong to authors of different periods,
                                prove that Sultani was one of the talented prince poets and an active representative of
                                the literary environment of the palace.</p><p>Another poet whose works are included in
                                the collection is Sadik (1860-1930). The information about his personality and
                                creativity in the notes is noteworthy. According to them, the poet&#39;s name was
                                Rahmonkuli, the son of the poet Murodi, ie Feruz&#39;s nephew. Sadik was a talented
                                translator and calligrapher who was fluent in Persian, Arabic, literature and Khorezmian
                                history. The doctor said: &ldquo;Dagʻi Sodiq ul sohibi ilmu hol,</p><p>Mudom etgusi
                                ma`ni darsin xayol&rdquo; (P.1176),&ndash;</p><p>Comparing his poems to a pearl in a
                                river in the ocean, Laffasi writes about another of his talents:(B.34). It is also noted
                                that the poet was insulted and insulted during Asfandiyar&#39;s reign. Sadiq&#39;s
                                physical and spiritual appearance was vividly reflected in Khadim&#39;s commentary: He
                                was a black-bearded, long-haired, kind, conscientious man. He was a poor man and had no
                                choice. He was gentle, but very industrious&rdquo; (P.34-35).</p><p>Sources say that the
                                poet, nicknamed Sa`di (died 1937), stood out among the princes for his unique qualities.
                                It is said that his real name was Sadulla, the son of Feruz&#39;s son Said Abdullah, the
                                grandson of the king. He was brought up by Feruz, was a great poet, composed a devon,
                                and was educated by Bayani. In the notes, we find only positive opinions about his
                                personality, social status and ability. In particular, about Tabibi Sa`di:</p><p>Durri
                                bahri donish kalomi oning,</p><p>Ki Sa`dulla shahzoda nomi oning (P.227), &ndash;</p><p>
                                he writes. In Laffasi, other personal qualities are also described. For example, &ldquo;...
                                from a young age, he was a junt, a scab, a scab, a narrow-shouldered pig, he had a lot
                                of knowledge, and Feruz wrote four poems. Although Sa&#39;di&#39;s works were all
                                lovable, in essence, each byte was a single jewel &rdquo;(P. 35-36).</p><p>These ideas
                                are further expanded in the Interpretation of the Employee, with some aspects of the
                                poet&rsquo;s character highlighted. Tazkirachi writes: &ldquo;Sadulla Tora was born in
                                the outer fortress of Khiva, in the yard of Nurullabek. He was a very sharp man. He
                                would immediately remember what he saw, whether it was Arabic or Persian. Sadullah was
                                not an official. Yusufbek Bayani died at the age of 60. He was a poet because of his
                                mastery of everything.</p><p>Saadi&#39;s contemporaries also remember him as a person
                                with a wide range of interests, an active reader and a master chess player.</p><p>
                                According to the narrations, the prince Akil (1874-1929) was one of the most
                                distinguished poets in the world. &quot;Oqil&quot; is the poet&#39;s nickname, his real
                                name is Otabek, and he is Feruz&#39;s nephew, his sister&#39;s son. The general
                                consensus in the sources is that Akil is a great poet, artist, musicologist, painter,
                                calligrapher and philanthropist. In particular, praising the creative talent of the
                                Medical Wise:</p><p>Come, Wise, wise and understanding,</p><p>Nature ango borho mustaqim
                                (P. 1010-1053), -</p><p>says Laffasi, reflecting his other qualities more broadly. In
                                particular, he writes: &ldquo;The wise man was tall, with a flowery face, yellow
                                raisins, and a pointed beard. The wise man always read magazines and newspapers, was
                                well-versed in world politics, and had a special library, the Book of Goodwill, which
                                always blessed orphans and widows with all kinds of food and clothing (P.38). These
                                qualities, while preserved in the employee&#39;s memoirs, emphasize his creative ability
                                and character: &ldquo;He graduated from high school and was very intelligent. Although
                                he was not educated in a madrasa, he had many conversations with scholars. He was
                                acquainted with various sciences, began to write poetry at the age of 25, knew six and a
                                half stanzas of the word, and could play the tanbur, the gijjak, the doira, and the
                                dutar, but he could not say. Otabek Tora was very generous, tall, with a black beard,
                                handsome, and his words were meaningful and juicy &rdquo;(P.44).</p><p>The most detailed
                                literary information in the sources belongs to Muhammad Yusufbek Bayani (1840-1923).
                                Although Bayani&#39;s lyrics have been studied extensively in the field of literature
                                and his historical works have been published, the details of his commentaries, in
                                particular his personal details, have not been analyzed. This is natural. Because Bayani
                                was Feruz&#39;s best friend, a teacher of his grandchildren, one of the great
                                representatives of the literary world and a close colleague of the king. These qualities
                                made him popular among the people as a well-rounded man and a prolific artist. There is
                                a lot of information about this in the notes. In Tabibi&#39;s commentary, we read the
                                following Masnavi about Bayani:</p><p>Bayoniyki ul donish ogoh erur,</p><p>Gazal ahliga
                                murshidi roh erur (P.448).</p><p>While Bayani&#39;s mastery of poetry is emphasized
                                here, the interpretations in other sources complement each other and embody the poet&#39;s
                                perfect image. In the part of Laffasi&#39;s tazkiras &quot;Bayoniykim Muhammad Yusufbek
                                ahvoloti&quot; Bayani&#39;s knowledge of Persian, Arabic, Turkish languages, historian,
                                translator, enlightenment is mentioned, and from his youth he was well-educated and
                                learned from his brother Yahshimurod. He is also a master of chess very quickly &rdquo;(P.41).</p>
                            <p>The employee&#39;s commentary focuses on other exemplary aspects of Bayani&#39;s
                                personality. He writes: &ldquo;After graduating from the old school, he was well versed
                                in the science of medicine, received a madrasa education and increased his knowledge.
                                Yusufbek Bayani was not an official, he lived by the power of his hand, he knew six and
                                a half maqoms. He was a tall, handsome man with a blond beard and a poor man. However,
                                he did not spend every day without a guest, he kept his clothes clean, he was very
                                generous, his conversation was meaningful, his habits were good, and he was sweet
                                &rdquo;(P.40-41).</p><p>It is noteworthy that the above-mentioned notes and the complex
                                emphasize two common points:</p><p>1. Prince poets, regardless of their ancestry, did
                                not hold an official position in the palace, encouraged creative activity;</p><p>2. The
                                nicknames of the creators of the literary environment, including the princely poets,
                                were personally approved or proposed by Feruz, which also proves that the king was not
                                indifferent to the creative people.</p><p>At the same time, in evaluating Feruz&#39;s
                                great services as a patron of artists, we must follow the principle of objectivity and
                                keep in mind that he was a ruler and a progressive son of his time. It should be noted
                                that Feruz&#39;s concern for the development of literature was aimed at strengthening
                                his position, but he also increased the penalties for some writers. For example, the
                                fact that Avaz was beaten with two hundred lashes, artists such as Masharif Tarro and
                                Polly Dozchi were severely punished, and Palmin and Mrs. Khalfa were beaten and beaten
                                with a hundred lashes are not positive events. In our opinion, the nature and complexity
                                of Feruz&#39;s rule were more evident in these events, and to put it bluntly, Feruz&#39;s
                                personality is natural, and the process of his formation as a progressive king is real.
                                However, this flaw in Feruz&#39;s personality does not change the essence of his
                                enlightenment activity.</p><p>It is worth noting that the above-mentioned tazkirs are
                                related to Haft Shuaro: the authors of the tazkirs are enlightened, intelligent poets
                                who lived at the same time and in the same literary environment as the prince poets
                                included in the collection. based on data. However, due to the palace conditions of the
                                time and subjective reasons, their views were biased or ambiguous in their
                                interpretation of the facts. For example, since Tabibi&#39;s tazkira was composed by
                                Feruz during the lifetime of all the princely poets, it is natural that the melodies of
                                praise in their honor should be a priority. Laffasi&#39;s commentary, on the other hand,
                                is critical because it was written in the 1940s. In particular, Farrukh&#39;s tyranny
                                and ignorance, the greed of the Sultan&#39;s character, and the flaws in Sa&#39;di&#39;s
                                morality are mentioned in the Hadith. It is also doubtful that the narrator thought,
                                &quot;If Bayani had been engaged in poetry in his 40s.&quot; However, the poet had
                                already written a number of poems. There are also differences in the interpretation of
                                the dates of birth and death of some poets (Sadik and Sa`di). It should be noted that
                                the information in the notes should contain some subjective views, personal preferences,
                                and different approaches of the authors. This can also be seen in the descriptions of
                                Avaz. For example, Laffasi&#39;s commentary states that Avaz was &quot;close to the
                                hearts of the people,&quot; while Khadim&#39;s commentary states that &quot;his mouth
                                was very careless.&quot; Nevertheless, each statement is important and unique in the
                                nature of the facts and information. For example, in Laffasi&#39;s tazkirah there is a
                                separate section on the situation of each of the prince&#39;s poets and on the basis of
                                their poems &quot;Haft shuaro&quot; is written. information is given.</p><p>In general,
                                the information in the notes serves to study the content of the works in &quot;Haft
                                Shuaro&quot;, the reflection of the personality and worldview of the poets, as well as
                                other artistic and aesthetic issues.</p>
                            <hr><p><!--[if !supportFootnotes]--></p><p>&nbsp;</p><!--[endif]--><p><a href="#_ftnref1">
                                    <!--[if !supportFootnotes]-->[1]<!--[endif]--></a>Белинский В.Г. Собрания сочинений
                                в трёх томах. Ташкент: ИИИ.М.1971.С.374.</p><p><a href="#_ftnref2">
                                    <!--[if !supportFootnotes]-->[2]<!--[endif]--></a> Haqqulov I. She`riyat - ruhiy
                                munosabat. &ndash;T.: Adabiyot va san`at, 1990.- B 216.</p><p><a href="#_ftnref3">
                                    <!--[if !supportFootnotes]-->[3]<!--[endif]--></a> Laffasiy. Tazkirai shuaro.
                                Urganch: Xorazm, 1992- B 72. Bundan keyingi iqtiboslar olingan tazkira muallifi nomi
                                koʻrsatilib, qavs ichida sahifa raqami beriladi.</p><p><a href="#_ftnref4">
                                    <!--[if !supportFootnotes]-->[4]<!--[endif]--></a> Qarang: Bayoniy. Shajarai
                                xorazmshohiy. Nashrga tayyorlovchilar Jumaxoʻja N., Adizova I. Toshkent.: Adabiyot va
                                san`at, 1994 -B. 92-93.</p><p><a href="#_ftnref5"><!--[if !supportFootnotes]-->[5]
                                    <!--[endif]--></a> Haft shuaro-1906. OʻzRFAShI. Inv. 10374.- B.23</p><p><a
                                    href="#_ftnref6"><!--[if !supportFootnotes]-->[6]<!--[endif]--></a> Abdullayev H.
                                Soʻz sehri. Toʻplam.T.: TDPU, 2005.-B.</p><p><a href="#_ftnref7">
                                    <!--[if !supportFootnotes]-->[7]<!--[endif]--></a> Farrux. Yod etib mandin degil.
                                T.: Zarqalam, 2006. B.23.</p>
                        @endif
                        @if( $lang == "ru" )
                            "<p>Известно, что особое место в тезкирех и комплексах занимают биографии о личности
                                художника, служащие расширению общего представления о том или ином художнике. В связи с
                                этим сведения о поэтах, вошедшие в &laquo;Хафт Шуаро&raquo;, имеют определенную
                                литературную ценность. Если тезкиры раскрывают образ поэта как личности, его характер и
                                вообще его характер, то комплексы отражают его потенциал как творца, его сильные и
                                слабые стороны в поэзии. Поэтому образ каждого поэта представляет собой сочетание
                                личности и творчества, и это важно иметь в виду при оценке произведения. Зеро, В.Г. Как
                                отмечал Белинский, &laquo;источник творческой активности поэта &mdash; в духе,
                                выраженном в его личности. Поэтому душу поэта, первое объяснение характера его
                                произведений следует искать в его личности.<a href="#_ftn1">
                                    <!--[if !supportFootnotes]-->[1]<!--[endif]--></a></p><p>Значение биографических
                                сведений об авторах &laquo;Хафт Шуаро&raquo; заключается, прежде всего, в выражении
                                &laquo;души&raquo; в стихах этих поэтов.</p><p>На самом деле факты и сведения о жизни и
                                творчестве князя в комплексе и тезкирех интегрированы и позволяют непрерывно и подробно
                                думать о создателях. Это особенно важно для монографического изучения поэтов, жизнь и
                                творчество которых неизвестны и изучаются впервые.</p><p>Как признает литературовед И.
                                Хаккулов, &laquo;творчество не есть состояние, оторванное от личности поэта, наоборот,
                                важно связать его с характером, духовными потребностями и духовным потенциалом поэта&raquo;.
                                <a href="#_ftn2"><!--[if !supportFootnotes]-->[2]<!--[endif]--></a></p><p>Действительно,
                                сведения о &laquo;личности поэта&raquo; в упомянутых выше комментариях являются
                                дополнительным материалом в изучении Хафта Шуаро.</p><p>В сборник вошли образцы
                                произведений семи поэтов, сведения о творчестве султана и отправная точка в честь
                                Фарруха. Однако в Тезкире к ним подходят по-другому. В частности, в тезкире Лаффаси они
                                полностью сохранились, в тезкире Табиби и Хадима отсутствуют части, относящиеся к Муроди
                                и Фарруху. Недаром ближайшие родственники царя, его младший брат и сын, не нашли в этих
                                тезкирех сочинений и сведений, составленных по личной рекомендации и надзору Феруза. На
                                наш взгляд, газелей Феруза в трактатах Муради и Фарруха Табиби не последовало или не
                                хватило. Врач описывает основные черты каждого из оставшихся пяти поэтов следующим
                                образом: &laquo;Маони дурининг гилофи&raquo; Султани, &laquo;Нет ничего лучше смерти&raquo;
                                Садика, &laquo;Сладкое высказывание народа газели&raquo; Саади, &laquo;Хушфахму
                                фозил,адибу комил&raquo;. Эти идеи более подробно выражены в маснави, информации,
                                которая предшествовала Акилу и их газелям.</p><p>Художественная часть &laquo;Хафт Шуаро&raquo;
                                начинается с двадцати газелей Муради (1854&ndash;1908), пяти мухамм, одной мусадды,
                                одной касиды и одной рубаи. Эти разножанровые произведения показывают, что Муроди,
                                настоящее имя которого было Турамурод, был очень зрелым поэтом. Это мнение о поэте
                                подтверждается следующими замечаниями в комментарии Лаффази: произвел бы &quot;.<a
                                    href="#_ftn3"><!--[if !supportFootnotes]-->[3]<!--[endif]--></a></p><p>Мухаммад
                                Юсуфбек Баяни добавил: &laquo;Турамурод тораким, брат Хазрет-хана, был пятьдесят четыре
                                года, и его дворец процветал вечно. У него остались двое сыновей. Один &mdash;
                                Рахмонкули Тора, а другой &mdash; Худойкули Тора&raquo;, &mdash; написал он и
                                процитировал газель, посвященную Муроди.<a href="#_ftn4"><!--[if !supportFootnotes]-->
                                    [4]<!--[endif]--></a></p><p>Одним из поэтов комплекса был Фаррух (1873-1918),
                                Асфандиёр, сын Феруза. В комплексе о нем написаны следующие слова:</p><p>&laquo;Бисмиллахир
                                рахманир рахийм. Сайид Асфандияр тора Зайд Умар мутахаллуси Фаррухи валади Сулаймон
                                нишан и Сайид Мухаммад Рахим Баходирхани Сони продолжили состояние и честь&raquo;.<a
                                    href="#_ftn5"><!--[if !supportFootnotes]-->[5]<!--[endif]--></a></p><p>Других
                                сведений о личности и творчестве Фарруха в книге нет. Эта ситуация понятна. По нашему
                                мнению, халиф, написавший всего несколько стихов, предпочел умолчать о своем творчестве,
                                чем слишком расхваливать &laquo;поэта&raquo;. Некоторую информацию мы находим в тезкире
                                Лаффази, составленной 38 лет спустя. Отмечается, что Асфандиёр с ранних лет приобрел
                                много знаний, стремился к просвещению и &laquo;занимался поэзией под псевдонимом Фаррух
                                и писал романтические стихи, чтобы угодить своему отцу Мухаммаду Рахимхану&raquo;.
                                &quot;Когда он пришел к власти в Хивинском ханстве, он (Асфандиёр - И.Х.) возгордился,
                                творил жестокости и притеснял горожан&quot;. &ldquo;хамиша фикридир ишки мажозий,
                                паричехра гуландомлар бирла созий&rdquo;(Ст.30-31). В этом контексте Лаффази
                                подчеркивает, что характер Фарруха объективен и что его поэзия есть результат
                                обязательства отца доставить ему удовольствие. Во многих его стихах в стихах Хафт Шуаро
                                преобладает интерпретация узких интимных переживаний. На наш взгляд, личность
                                Асфандиярхана как царя и поэта очень сложна. Осужденный как хан Асфандиёр в более
                                поздние времена был признан поэтом Фаррухом. Литературовед Х.Абдуллаев отвергает этот
                                принцип следующим образом: Можно ли отделить &laquo;поэзию&raquo; хана, прославившегося
                                в истории своей жестокостью и загубившего жизни десятков бездомных девушек, от его
                                политики, нравов и деятельности? Можно ли верить, что человек, оскорбляющий человека как
                                хана, будет в то же время прославлять человеческую любовь как поэт?&raquo;<a
                                    href="#_ftn6"><!--[if !supportFootnotes]-->[6]<!--[endif]--></a></p><p>Однако в 2006
                                году &ldquo;Фаррух. Йод этиб мандин дегил &quot;<a href="#_ftn7">
                                    <!--[if !supportFootnotes]-->[7]<!--[endif]--></a> Положительно и объективно с новой
                                точки зрения описывается личность Асфандиярхана как царя и поэта. В предисловии
                                литературоведа Н. Джумаходжи &laquo;Бунёдкор инсон, нозиктаб шоир&raquo; и
                                заключительном слове Дж. Джораева дается подробный анализ личности и творчества
                                Асфандиёрхон-Фарруха.</p><p>Действительно, мы поддерживаем справедливое представление о
                                том, что творчество есть выражение его личности и мировоззрения.</p><p>Самым важным
                                поэтом комплекса является Султани (1889-1944). Саид Насир, любимый внук Феруза, дал Торе
                                прозвище в честь своего деда. Получив образование у Баяни, Султани создавал произведения
                                в разных жанрах. Преамбула к заявлению в сборнике описывает его следующим образом:
                                &laquo;Ким ушбу шахзодайи мушорун илайх чун подшохи олийжох атауллоху&nbsp; таолло
                                умруху ва давлвтуху&nbsp; набиралари жумлаларидан эрдилар. Сояи иноятларида таълим ва
                                тарбиялари бирла сарафроз булиб, хам ул турлук фазлу хунарлар бирлаким, онинг бирлан эл
                                ораларида машхурдирлар, шухраи офок булдилар. Ашорлари эл ораларида мутафаррик булиб,
                                хар кимга таажжуб юзидан онинг томошосига шавк пайдо булур ва хар кунгулга онинг
                                манолари&nbsp; андишасида ва инбисот юзланур эди&raquo; (с. 36).</p><p>Комментарии о
                                Султани, который был &laquo;известен разными профессиями&raquo; и &laquo;чья поэзия
                                популярна в народе&raquo;, содержат гораздо более подробные сведения в соответствии с
                                вышеизложенным мнением. В том числе Табиби:</p><p>Чу Султоний хушфазл шоир эрур,</p><p>
                                Газал дегали асру мохир эрур (С.1675).</p><p>В Лаффази он пишет: . . он также пишет
                                девонскую работу. Многие стихи Султани романтические и философские&raquo; (с. 32).</p>
                            <p>Сотрудник сказал: &laquo;Поэт Султани-Насир не был чиновником. Юсуфбек (Байоний - I.X)
                                обучал его поэзии с семилетнего возраста. Свое готовое стихотворение он собственноручно
                                подавал Мухаммаду Рахимхану&raquo; (С.31-32).</p><p>Эти идеи, принадлежащие авторам
                                разных периодов, доказывают, что Султани был одним из талантливых княжеских поэтов и
                                активным представителем литературной среды дворца. Еще один поэт, произведения которого
                                вошли в сборник, - Садык (1860-1930). Обращает на себя внимание информация о его
                                личности и творчестве в заметках. По их словам, поэта звали Рахмонкули, сын поэта
                                Муроди, т.е. племянник Феруза. Садык был талантливым переводчиком и каллиграфом, в
                                совершенстве владел персидским, арабским языками, литературой и историей Хорезма.
                                Табибий сказал:</p><p>&ldquo;Даги Содик ул сохиби илму хол,</p><p>Мудом этгуси ма`ни
                                дарсин хаёл&rdquo; (С.1176),&ndash;</p><p>если он описывает, Сравнивая свои стихи с
                                жемчужиной в реке в океане, Лаффази пишет о другом таланте: &laquo;Садик был так же
                                красноречив в своем красноречии, как и на своем родном языке&raquo; (С.34). Также
                                отмечается, что поэт подвергался оскорблениям и оскорблениям во время правления
                                Асфандияра. Внешний и духовный облик правоверных ярко отражен в Тезкире Хадим: &laquo;Рахмонкули
                                был топором в медресе, а также хорошо преподавал. Это был чернобородый, длинноволосый,
                                добрый, добросовестный человек. Он был бедняком, и у него не было выбора. Он был нежен,
                                но очень трудолюбив&raquo; (с. 34-35).</p><p>Источники сообщают, что поэт по прозвищу
                                Саади (умер в 1937 г.) выделялся среди поэтов своими уникальными качествами. Говорят,
                                что его настоящее имя было Садулла, сын сына Феруза Саида Абдуллы, внука короля. Он был
                                воспитан Ферузом, был великим поэтом, сочинил девон и получил образование у Баяни. В
                                заметках мы находим только положительные мнения о его личности, социальном статусе и
                                способностях. В частности, о Табиби Саади:</p><p>Дурри бахри дониш каломи онинг,</p><p>
                                Ки Са`дулла шахзода номи онинг (с.227), &ndash;</p><p>он написал. У Лаффази описываются
                                и другие личностные качества. Например, &laquo;&hellip;с юных лет он был хунтом,
                                паршивым, узкоплечим поросенком, знаний у него было много, и Феруз написал четыре стиха.
                                Хотя все произведения Саади были милы, в сущности, каждый байт был отдельной
                                драгоценностью&raquo; (стр. 35-36).</p><p>Эти идеи получили дальнейшее развитие в
                                &laquo;Интерпретации работника&raquo;, где выделены некоторые аспекты характера поэта.
                                Тезкиречи пишет: &laquo;Садулла Тора родился во внешней крепости Хивы, во дворе
                                Нуруллабека. Он был очень резким человеком. Он сразу же запоминал увиденное, будь то
                                арабское или персидское. Садулла не был чиновником. Юсуфбек Баяни стал поэтом благодаря
                                своему мастерству во всем, а также благодаря своему мастерству в науке. Он умер в
                                возрасте 60 лет&raquo; (С.35-36). Современники Саади помнят его и как человека с широким
                                кругозором, активного читателя и мастера шахмат.</p><p>Согласно повествованиям, князь
                                Акил (1874-1929) был одним из самых выдающихся поэтов мира. &laquo;Окил&raquo; &mdash;
                                прозвище поэта, его настоящее имя &mdash; Отабек, он племянник Феруза, сын его сестры.
                                По общему мнению источников, Акил - великий поэт, художник, музыковед, живописец,
                                каллиграф и филантроп. В частности, высоко оценивая творческий талант Медицинской
                                Мудрости:</p><p>&nbsp;Келиб Окил ул хушманду фахим,</p><p>Табиат анго борхо мустаким (.
                                1010-1053), &ndash;</p><p>&mdash; говорит Лаффази, более широко отражая другие его
                                качества. В частности, он пишет: &laquo;Мудрец был высокого роста, с цветистым лицом,
                                желтым изюмом и бородой, Аристотель-Платон, видевший свою фазу, принял ислам. Мудрец
                                всегда читал журналы и газеты, хорошо разбирался в мировой политике, имел особую
                                библиотеку - &quot;Ожидание милостыни&quot;, которая всегда благословляла сирот и вдов
                                разнообразной пищей и одеждой (С.38).. Эти качества, сохранившиеся в воспоминаниях
                                сотрудника, подчеркивают его творческие способности и характер: &laquo;Он окончил школу
                                и был очень интеллигентен. Хотя он не получил образования в медресе, у него было много
                                бесед с учеными. Он был знаком с разными науками, начал писать стихи в 25 лет, знал
                                шесть с половиной строф слова наука, умел играть на танбуре, гиджаке, дойре и дутаре, но
                                не умел говорить. Отабек Тора был очень щедр, высок, с черной бородой, красив, и слова
                                его были многозначительны и сочны&raquo; (С.44).</p><p>Наиболее подробные литературные
                                сведения в источниках принадлежат Мухаммаду Юсуфбеку Баяни (1840-1923). Хотя лирика
                                Баяни широко изучалась в области литературы, а его исторические труды были опубликованы,
                                детали его комментариев, в частности его личные данные, не анализировались. Это
                                естественно. Потому что Баяни был лучшим другом Феруза, учителем его внуков, одним из
                                великих представителей литературного мира и близким соратником царя. Эти качества
                                сделали его популярным в народе как разностороннего человека и плодовитого художника. В
                                примечаниях об этом много информации. В Табиби Тезкире мы читаем следующее Маснави о
                                Баяни:</p><p>Баёнийки ул дониш огох эрур,</p><p>Газал ахлига муршиди рох эрур
                                (С.448).</p><p>В то время как здесь подчеркивается поэтическое мастерство Баяни,
                                интерпретации в других источниках дополняют друг друга и воплощают совершенный образ
                                поэта. В части тезкиреса Лаффаси &laquo;Байонийким Мухаммад Юсуфбек ахволоти&raquo;
                                упоминается знание Баяни персидского, арабского, турецкого языков, историка,
                                переводчика, просветителя. Он также очень быстро мастерит шахматы&raquo; (С.41).</p><p>В
                                комментарии сотрудника основное внимание уделяется другим образцовым аспектам личности
                                Баяни. Он пишет: &laquo;Окончив старую школу, он хорошо разбирался в медицинских науках,
                                получил медресе образование и приумножил свои знания. Юсуфбек Баяни не был чиновником,
                                жил силой своей руки, знал шесть с половиной макомов. Он был высоким, красивым мужчиной
                                со светлой бородой и бедняком. Впрочем, он не каждый день проводил без гостя, одежду
                                свою содержал в чистоте, был весьма великодушен, разговор его многозначителен, привычки
                                хороши, и он был мил&raquo; (С.40-41).</p><p>Примечательно, что в вышеупомянутых
                                примечаниях и комплексе подчеркиваются два общих момента:</p><p>1. Княжеские поэты,
                                независимо от их происхождения, не занимали при дворе официального положения, поощряли
                                творческую деятельность;</p><p>2. Прозвища творцов литературной среды, в том числе и
                                княжеских поэтов, были лично утверждены или подсказаны Ферузом, что также доказывает
                                неравнодушие царя к творческим людям.</p><p>Вместе с тем, оценивая большие заслуги
                                Феруза как мецената, мы должны руководствоваться принципом объективности и иметь в виду,
                                что он был правителем и прогрессивным сыном своего времени. Следует отметить, что забота
                                Феруза о развитии литературы была направлена ​​на укрепление его положения, но он также
                                увеличил штрафы для некоторых писателей. Например, тот факт, что Аваз был избит двумя
                                сотнями плетей, такие артисты, как Машариф Тарро и Полли Дозчи, были жестоко наказаны, а
                                Пальмин и госпожа Хальфа избиты и избиты сотней плетей, не являются положительными
                                событиями. На наш взгляд, характер и сложность правления Феруза более ярко проявлялись в
                                этих событиях, и, говоря прямо, личность Феруза естественна, а процесс его становления
                                как прогрессивного царя реален. Однако этот недостаток личности Феруза не меняет сути
                                его просветительской деятельности.</p><p>Стоит отметить, что вышеперечисленные тезкиры
                                родственны Хафту Шуаро: авторы тезкиров - просвещенные, интеллигентные поэты, жившие в
                                то же время и в той же литературной среде, что и вошедшие в сборник поэты-князья. .
                                Однако в силу дворцовых условий того времени и субъективных причин их взгляды были
                                предвзятыми или двусмысленными в интерпретации фактов. Например, поскольку тезкире
                                Табиби была сочинена Ферузом еще при жизни всех княжеских поэтов, естественно, что
                                хвалебные мелодии в их честь должны быть в приоритете. Комментарий Лаффази, с другой
                                стороны, критически важен, поскольку он был написан в 1940-х годах. В частности, в
                                хадисе упоминаются тирания и невежество Фарруха, жадность характера султана и недостатки
                                нравственности Саади. Также сомнительно, чтобы рассказчик думал: &laquo;Если бы Баяни
                                занимался поэзией в свои 40 лет&raquo;. Однако поэт уже написал ряд стихотворений.
                                Существуют также различия в трактовке дат рождения и смерти некоторых поэтов (Садика и
                                Саади). Следует отметить, что информация в примечаниях должна содержать некоторые
                                субъективные взгляды, личные предпочтения и разные подходы. Это также можно увидеть в
                                описаниях Аваз. Например, в комментарии Лаффази говорится, что Аваз был &laquo;близок к
                                сердцу народа&raquo;, а в комментарии Хадима говорится, что &laquo;его рот был очень
                                неосторожным&raquo;. Тем не менее, каждое утверждение важно и уникально по характеру
                                фактов и информации. Например, в тезкирех Лаффази есть отдельный раздел о положении
                                каждого из княжеских поэтов и на основе их стихов упоминается &laquo;Хафт шуаро&raquo;,
                                дается информация.</p><p>В целом информация в примечаниях служит для изучения содержания
                                произведений в &laquo;Хафт шуаро&raquo;, отражения личности и мировоззрения поэтов, а
                                также других художественно-эстетических вопросов.</p>
                            <hr><p><!--[if !supportFootnotes]--></p><p>&nbsp;</p><p><!--[endif]--></p><p><a
                                    href="#_ftnref1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a>Белинский В.Г.
                                Собрания сочинений в трёх томах. Ташкент: ИИИ.М.1971.С.374.</p><p><a href="#_ftnref2">
                                    <!--[if !supportFootnotes]-->[2]<!--[endif]--></a> Хаккулов И. Поэзия &ndash; это
                                духовные отношения. &ndash;Т.: Литература и искусство, 1990..- С 216.</p><p><a
                                    href="#_ftnref3"><!--[if !supportFootnotes]-->[3]<!--[endif]--></a> Лаффасий.
                                Тазкирай шуаро. Ургенч: Хорезм, 1992- Б 72. Последующие цитаты включают имя автора
                                тазкира и номер страницы в скобках.</p><p><a href="#_ftnref4">
                                    <!--[if !supportFootnotes]-->[4]<!--[endif]--></a> Смотри описание. Шаджарай
                                Хорезмшахий. Подготовила Джумаходжа Н., Адизова И. Ташкент.: Литература и искусство,
                                1994 -С. 92-93.</p><p><a href="#_ftnref5"><!--[if !supportFootnotes]-->[5]
                                    <!--[endif]--></a> Хафт шуаро-1906. УЗРФАШИ. Инв.10374.- С.23</p><p><a
                                    href="#_ftnref6"><!--[if !supportFootnotes]-->[6]<!--[endif]--></a> Абдуллаев Х.
                                Магия слова. Сборник.Т.: ТДПУ, 2005..-С.</p><p><a href="#_ftnref7">
                                    <!--[if !supportFootnotes]-->[7]<!--[endif]--></a> Фаррук. Йод - это не мандин. Т.:
                                Заркалам, 2006. С.23.</p>
                        @endif

                        {{--                        </p>--}}

                    </div>
                </div>
            </div>
        </section>

@endsection
