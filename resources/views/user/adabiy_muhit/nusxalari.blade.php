@extends('user.master')
@section('title')
    @lang('public.t_2_4')
@endsection
@section('content')

    <section class="header1 cid-t79K6vt9WI mbr-parallax-background" id="header1-13">


        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(250, 250, 250);"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2">
                        <strong>
                            @lang('public.t_2_4')
                        </strong>
                    </h1>


                </div>
            </div>
        </div>
    </section>

    <section class="features6 cid-t79Ka8UaDn" id="features7-14">
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
                            <h5 class="mbr-title mbr-fonts-style display-7"><strong>
                                    @lang('public.t_2_4')
                                </strong></h5>
                            {{--                            <p class="mbr-text mbr-fonts-style display-7">--}}

                            @if( $lang == "uz" )
                                <p>&ldquo;Haft shuaro&rdquo;ning maydonga kelishi, yuqorida ta`kidlanganidek, XIX
                                    asrning II yarmidan shaxsan Feruz tashabbusi bilan keng avj olgan kitobat va badiiy
                                    asarlarni targʻib qilish, umuman, kitobxonlik miqyosining kengayishi kabi omillar
                                    bilan bogʻliqdir. Darhaqiqat, kitobxonlikni oʻsha davr sharoitida ma`rifat
                                    yoyishning muhim shakli deb bilgan Feruz oʻz hukmronligining dastlabki davridan
                                    boshlab, ijod ahlini ragʻbatlantirishga, ularning bayoz, devonlar tuzishiga, tarjima
                                    asarlarini koʻpaytirishga alohida e`tibor berdi. Bu oʻrinda, ustoz Ogahiy
                                    she`rlarini devon (&ldquo;Ta`viz ul-oshiqin&rdquo;) qilishda ham shaxsan Feruzning
                                    hissasi borligini aytish joizdir. Buni Ogahiyning oʻzi shunday e`tirof etadi:
                                    &ldquo;Va oning (Feruzning &ndash; I.X) malohatparvar tilidan necha nav` tahsin va
                                    ofarinlarni eshitib, nihoyatsiz shod va xurram boʻlur erdim va bir necha muddatdin
                                    soʻng bir kun faqirga inoyat nazari bila boqib, dilnavozlik yuzidin xitob qilib
                                    dedikim: &ldquo;Barcha musavvadalardagi, bayozlardagi va oʻzga yerlardagi parishon
                                    boʻlgan she`rlaringni jam` etib, devon suratida tartib bergil va onga debocha ham
                                    yosob, soʻngra aytilgʻon ash`oringni hamul devonda oʻz mahalida raqam silkiga gavhar
                                    yangligʻ tergil&rdquo;<a href="#_ftn1"><!--[if !supportFootnotes]-->[1]
                                        <!--[endif]--></a>.</p><p>Hukmdorning ijod ahliga nisbatan bunday saxovati va
                                    najotkorligi qalamkashlar va ularning asarlari sonining koʻpayishiga imkon yaratadi.
                                    Bu imkoniyatdan foydalanib, turli toifa vakillari boʻlgan ijodkorlar samarali ijod
                                    qilib, koʻplab nazm kitoblarini bunyod etdilar. Darhaqiqat, XIX asrning oxirida
                                    shoirlarning koʻpchiligi alohida devonlar tuzishga ulgurishdi. Bular orasida
                                    shahzodalar, ya`ni Feruz avlodi namoyandalaridan yigirmaga yaqin shoirlar bor edi.
                                    XX asrning boshiga kelib mavjud asarlarni oʻzgacha shakllari &ndash; nasliy
                                    mansublik asosidagi majmua va Feruz gʻazallariga payrav shakllari vujudga keldi.</p>
                                <hr><p><!--[if !supportFootnotes]--></p><p>&nbsp;</p><!--[endif]--><p><a
                                        href="#_ftnref1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Muhammad
                                    Rizo mirob Erniyozbek oʻgʻli Ogahiy. Asarlar. I jild. Devon. Nashrga tayyorlovchi
                                    Gʻ.Karimov. T.: Adabiyot va san`at, 1971- B. 44&ndash;45.</p>
                            @endif
                            @if( $lang == "en" )
                                <p>The emergence of Haft Shuaro, as noted above, is due to factors such as the promotion
                                    of books and works of art, which began in the second half of the XIX century at the
                                    initiative of Feruz, and the expansion of reading in general. In fact, Feruz, who
                                    considered reading to be an important form of enlightenment at that time, from the
                                    first period of his reign paid special attention to encouraging the creative people,
                                    creating their bayazs, devons, and increasing the number of translated works. It is
                                    worth mentioning that Feruz personally contributed to the compilation of Ogahi&#39;s
                                    poems. Agahi himself admits this: &ldquo;And when I heard so many praises and
                                    praises from his mother (Feruz - IX), I would be overjoyed and happy, and after a
                                    while I would look at the poor one with a look of grace and address him with
                                    kindness. I said: &quot;Collect all your poems, which have been abandoned in all the
                                    musawwads, bayazs and other places, and arrange them in the form of a devon, and
                                    give them a preface, and then recite your recited ash&#39;ar in the devon, and in
                                    due time number a pearl&quot;<a href="#_ftn1"><!--[if !supportFootnotes]-->[1]
                                        <!--[endif]--></a>.</p><p>Such generosity and salvation of the ruler to the
                                    creative people allowed to increase the number of writers and their works. Taking
                                    advantage of this opportunity, artists from different walks of life have created
                                    many books of poetry. Indeed, by the end of the 19th century, most poets had managed
                                    to create separate devons. Among them were princes, about twenty poets from the
                                    Feruz dynasty. By the beginning of the twentieth century, unique forms of existing
                                    works emerged - the complex based on heredity, and the following forms of Feruz&#39;s
                                    gazelles.</p><p><!--[if !supportFootnotes]--></p>
                                <hr><p>&nbsp;</p><!--[endif]--><p><a href="#_ftnref1"><!--[if !supportFootnotes]-->[1]
                                        <!--[endif]--></a> Muhammad Rizo mirob Erniyozbek oʻgʻli Ogahiy. Asarlar. I
                                    jild. Devon. Nashrga tayyorlovchi Gʻ.Karimov. T.: Adabiyot va san`at, 1971- B. 44&ndash;45.
                                </p>
                            @endif
                            @if( $lang == "ru" )
                                <p>Возникновение хафт шуаро, как отмечалось выше, обусловлено такими факторами, как
                                    популяризация книг и произведений искусства, начавшаяся во второй половине XIX века
                                    по инициативе Феруза, и распространение чтения в целом. На самом деле Феруз,
                                    считавший в то время чтение важной формой просвещения, с первого периода своего
                                    царствования уделял особое внимание поощрению творческих людей, созданию их баязов,
                                    девонов, увеличению числа переводных произведенийСтоит отметить, что Феруз лично
                                    участвовал в составлении стихов Огахи. Сам Агаи признается в этом: &laquo;И когда я
                                    слышал столько хвалебных слов и похвал от его матери (Феруза &mdash; I.X.), я был бы
                                    вне себя от радости и счастья, а через некоторое время взглянул бы на бедного
                                    взглядом благодати и обратился бы к нему с Я сказал: &quot;Собери все свои стихи,
                                    которые были заброшены во всех мусаввадах, баязах и других местах, и расположи их в
                                    форме девона, и дай им предисловие, а затем прочитай свой прочитанный аш&#39;ар в
                                    девон, а в свое время &mdash; жемчуг&raquo;.<a href="#_ftn1">
                                        <!--[if !supportFootnotes]-->[1]<!--[endif]--></a></p><p>Такая щедрость и
                                    спасение правителя к творческим людям позволили увеличить количество писателей и их
                                    произведений. Воспользовавшись этой возможностью, художники из разных слоев общества
                                    создали множество сборников стихов. Действительно, к концу 19 века большинство
                                    поэтов успели создать отдельные девоны. Среди них были князья, около двадцати поэтов
                                    из династии Феруз. К началу ХХ века возникли уникальные формы существующих
                                    произведений - комплекс, основанный на наследственности, и следующие формы газелей
                                    Феруза.</p><p>Это объединенные источники - комплекс &laquo;Хафт Шуаро&raquo; и
                                    созданные <!--[if !supportFootnotes]--></p>
                                <hr><p>&nbsp;</p><!--[endif]--><p><a href="#_ftnref1"><!--[if !supportFootnotes]-->[1]
                                        <!--[endif]--></a> Мухаммад Ризо мираб Эрниёзбек оглу Огахий. Работает. Я кожу.
                                    Девон. Подготовил Г. Каримов. Т.: Литература и искусство, 1971- С 44&ndash;45.</p>
                            @endif

                            {{--                            </p>--}}


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content5 cid-t79KozULu2" id="content5-15">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    {{--                    <p class="mbr-text mbr-fonts-style display-7">--}}

                    @if( $lang == "uz" )
                        <p>Bular jamlangan manbalar &ndash; &ldquo;Haft shuaro&rdquo; majmuasi va Tabibiyning &ldquo;Majmuai
                            si shuaroi payravi Feruzshohiy&rdquo; va &ldquo;Muxammasoti majmuat ush- shuaroi Feruzshohiy&rdquo;
                            tazkiralari Feruz tashabbusi bilan yaratildi. Ularning birinchisi 1906-yilda, ikkinchisi
                            1908-yilda, uchinchisi 1909-yilda tuzildi. Kuzatishlarimizcha, qisqa vaqtda vujudga kelgan
                            bu adabiy manbalarni oʻzaro bogʻlovchi ichki mantiqiy aloqadorlik mavjud. Jumladan, ular
                            oʻsha davr shoirlarining lirik she`rlarini toʻplam holida jamlashga qaratilgani tufayli
                            uchalasi ham umumiy nom bilan &ldquo;majmua&rdquo; deb atalgan. Ikkinchidan, manbalarning
                            asosi Feruz va uning shajarasi ijodkorlari asarlaridan iborat boʻlib, u mustaqil va payrav
                            she`rlar shakllarida ifodalangan. Ya`ni &ldquo;Haft shuaro&rdquo;da turli janrdagi she`rlar
                            mujassam boʻlsa, tazkiralarda she`rlar bilan birga, biografik va adabiy ma`lumotlar ham
                            berilgan. Uchinchidan, &ldquo;Haft shuaro&rdquo;dagi koʻpchilik shoir va she`rlar
                            tazkiralardan ham oʻrin olgan boʻlib, ular mualliflar shaxsiyati va ijodiga oid Tabibiy
                            bitgan masnaviy-ma`lumotlar bilan toʻldirilgan. Shu ma`noda tazkiralarni &ldquo;Haft shuaro&rdquo;ning
                            ma`lum darajada takomillashtirilgan davomi ham deyish mumkin. Binobarin, bu
                            ma`lumot-masnaviylar &ldquo;Haft shuaro&rdquo;dagi shoir va she`rlar haqidagi ma`lumotlarni
                            yangi fikrlar bilan boyitishga, ularni kengroq tasavvur etishga xizmat qiladi. Shu bois
                            tazkiralardagi adabiy va biografik ma`lumotlarga &ldquo;Haft shuaro&rdquo;ni oʻrganishda
                            bevosita aloqador boʻlgan muhim materiallar sifatida qarab, ulardan ham foydalanish maqsadga
                            muvofiqdir. Chunki shoirlar shaxsiyatiga oid tafsilotlar majmuadagi she`rlarni chuqurroq
                            tasavvur qilishga va ijtimoiy hamda hasbi hol motivlari uygʻunligini tadqiq etishga yordam
                            beradi.</p><p>Ta`kidlash kerakki, &ldquo;Haft shuaro&rdquo;ga she`rlari kirgan shahzoda
                            shoirlar haqidagi ma`lumotlar keyingi davrlarda vujudga kelgan Laffasiy va Xodim
                            tazkiralaridan ham keng oʻrin olgan. Bularning birinchisida Tabibiy tazkiralaridagiday har
                            bir shoir xususidagi ma`lumot va she`rlardan namunalar beriladi, ikkinchisida esa faqat
                            shaxsiyatiga doir ma`lumotlar keltirilib, ijodlari umumiy tarzda ta`riflanadi. Shu sababli
                            Xodim tazkirasidagi talqinlarni shoirlarning oʻziga xos adabiy portretlari yoki portretga
                            chizgilar deyish mumkin. &ldquo;Haft shuaro&rdquo; va tazkiralarning qisqa muddatda
                            yaratilishi hamda oʻzaro bogʻliqligiga shaxsan Feruz rahnamoligi asosiy omil boʻlgani,
                            shubhasiz. Shu bilan birga, nazarimizda, shohning qiziqishi va manfaatlari hal qiluvchi rol
                            oʻynagan boʻlsa-da, quyidagi jihatlarni ham qayd etish kerak:</p><p>1. Feruzning tabiatan
                            adabiyotga va san`atga cheksiz ishtiyoqi, mehri hamda yuksak badiiy did sohibi ekanligi;</p>
                        <p>2. Aksariyat xukmdorlar qatori badiiy ijod hamda uning targʻiboti orqali oʻz xukmronligi va
                            mavqeini mafkuraviy ta`minlashga erishish;</p><p>3. Shoir va san`at muhibi sifatida oʻzidan
                            ezgu nom qoldirish va mangulikka daxldorlik tuygʻusi;</p><p>4. Rossiyaga qaramlik sharoitida
                            ma`naviy-ma`rifiy taraqqiyotga intilish va akademik Oybek ta`kidlaganidek, Feruzning faqat
                            xalq uchun boʻlmasa-da, oʻz saroyi uchun madaniyat tusi berishga majbur boʻlishi.</p><p>
                            &ldquo;Haft shuaro&rdquo; majmuasi ana shu omillarning hosilasi va Feruzning avvalo, oʻz
                            muhitiga &ldquo;madaniyat tusi&rdquo; berishga intilishining dalilidir. Ikkinchidan,
                            tazkiraga faqat shohning doʻstu qarindoshlarining asarlari tanlab olinganida shaxsiy mayl
                            ustuvor boʻlib, Feruzning oʻz yaqinlariga gʻamxoʻrligi va ularning badiiy iqtidoriga
                            e`tibori kuchliligini koʻrsatish zaruriyati ham majmuani yaratishga turtki boʻlgan. Lekin
                            xolis hamda qattiqqoʻl shoh bu ishga jiddiy talab va mas`uliyat bilan yondashgan koʻrinadi.
                            Chunki oʻz avlodi shoirlarining koʻpchiligi ancha tanilgan va devonlar tuzgan boʻlishsa ham,
                            ulardan faqat yetti nafarining she`rlari majmua uchun tanlangan. Hatto unda Feruzning ancha
                            salmoqdor ijodkor inisi Komyob, shuningdek jiyanlari Gʻoziy va Asadlarning asarlari ham
                            uchramaydi. Nisbatan kamroq she`rlar yaratgan inisi Murodiy va oʻgʻli Farrux (Asfandiyor)
                            asarlari esa majmuaning dastlabki sahifalarini tashkil etadi. Demak, shoh majmuani tuzishni
                            niyat qilganda ijodkor qarindoshlarni va she`riy asarlarni tanlashda muayyan maqsadlarni
                            hisobga olgani, shubhasiz. Ammo majmuada faqat yetti nafar shoir she`rlari kiritilgani
                            sababi haqida ma`lumot berilmaydi. Nazarimizda, bunda birinchidan, bevosita Bayoniy ustozlik
                            qilgan va tavsiya etgan, ikkinchidan, she`rlari va shaxsiyati Feruzga ma`qul boʻlgan
                            shahzodalar tanlangan koʻrinadi. Majmua debochasining shaxsan Bayoniy tomonidan yozilgani
                            ham shunday fikrga asos beradi. Uchinchidan, majmuani tuzish va debocha yozishning Bayoniyga
                            topshirilishi ham tasodifiy boʻlmay, bunda uning ustozlik maqomi, yuksak tashkilotchilik
                            nufuzi va ilmiy-badiiy mahorati nazarda tutilib, uning maslahati ham inobatga olingan
                            boʻlishi mumkin. Binobarin, Bayoniy Feruzning nisbatan uzoqroq qarindoshi boʻlsa-da
                            (Eltuzarxonning nabirasi), uning she`rlariga katta oʻrin berilishi ham shunday fikr
                            tugʻdiradi.</p><p>Debocha shakli va mazmuni majmuaning ayrim oʻziga xos jihatlarini
                            kuzatishga imkon beradi. Avvalo, debocha an`anaviy usuldan farqli ravishda asarning boshida
                            emas, Sultoniy she`rlari oldida berilgan boʻlib, uch sahifadan iborat. Mazmuniga koʻra, u
                            ikki qismdan tashkil topgan: birinchi qism Feruzni madh etishga, ikkinchi qismi esa Sultoniy
                            ijodi ta`rifiga bagʻishlangan. Nasriy bayondan tashqari, unda 96 she`riy misra boʻlib, uning
                            42 tasi Feruz, 54 tasi Sultoniy haqidadir. Sultoniy ijodiga Feruz va Bayoniyning bunchalik
                            katta e`tibori tasodifiy emas, nazarimizda. Bunda Sultoniy Feruzga eng yaqin va ardoqli
                            nevara boʻlgani, unga Feruz ham, Bayoniy ham ustozlik qilgani, Sultoniy she`rlari ma`qul va
                            salmoqdor boʻlib, ularni devon qilishni bobosi maslahat bergani kabi omillar hal qiluvchi
                            rol oʻynagan koʻrinadi. Shu tufayli, bizningcha, &ldquo;Haft shuaro&rdquo; dastlab Sultoniy
                            asarlari asosida shakllanib, keyinchalik unga Feruz tavsiyasi bilan boshqa shahzodalar
                            she`rlari ham qoʻshilganini taxmin qilish mumkin. Debochaning faqat Sultoniy ijodiga oid
                            ekani xususidagi Bayoniy soʻzlari bu fikrimizga dalildir: &ldquo;ishorati oliy sudur
                            toptikim, ul ash`or va gʻazallarni jam` qilib, debocha yosab murattab etgayman&rdquo;.</p>
                        <p>Debocha &ldquo;Bismillahir rahmanir rahiym. Hamd ul suxanoro oligʻakim, qudrat komilasi bila
                            soʻz poyasin baland etib, ma`ni ahlin xiradpayvandlarga dilpisand etdi va shuaroi
                            fasohatbayonning guliston</p><p>tab`larin balogʻat joʻyboridin sarshor etib...&rdquo; kabi
                            hamdu sano soʻzlari bilan boщlanib, Feruzning shaxs va adolatli hukmdor sifatidagi
                            fazilatlari ulugʻlanadi.</p><p>Majmuadan, shuningdek, Feruzning nevaralari Sultoniy, Sa`diy,
                            jiyanlari Sodiq va Oqil she`rlari ham joy olgan. Darhaqiqat, ilmda e`tirof etilganidek,
                            &ldquo;Feruz shajarasiga daxldor adabiy muhitda bularning (shahzoda shoirlarning &ndash;
                            I.X) har biri oʻziga xos oʻrin va mavqega ega edi. Ularning yaxshigina she`rlar majmuasi oʻz
                            davrida &ldquo;Xiva shoir shahzodalarining kitobi&rdquo;, &ldquo;Haft shuaro&rdquo; nomlari
                            bilan xalq orasida tarqalgan. Bu adib va asarlar ham bizning milliy-madaniy boyligimiz&rdquo;<a
                                href="#_ftn1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a>.</p><p>&ldquo;Haft
                            shuaro&rdquo; majmuasining ikkita qoʻlyozma va oltita toshbosma nusxasi O`zR FA ShI
                            qoʻlyozmalar xazinasida saqlanmoqda.</p><p>39 va 40-raqamli nusxalar Qoʻqon qogʻoziga
                            nasta`liq xatida bitilgan. Hajmi 560 sahifa. Manbaning har bir sahifasida 18-19 yozuv yoʻli
                            bor. Nusxalar toʻliq emas. Ikkita nusxa deyarli bir xil. Manbaning Murodiy ijodiga
                            bagʻishlangan toʻrtta varagʻi yoʻqolgan. Majmua beshinchi varaqdan boshlanadi. Unda
                            Murodiyning oʻnta gʻazali mavjud. Manba Feruz saroyidagi tipografiyada bosilgan. She`rlar
                            ikki ustun shaklida berilgan. Sahifalar raqamlangan. 39-raqamli nusxa och yashil rangli,
                            40-raqamli nusxa esa toʻq jigar rangli qattiq qogʻoz bilan muqovalangan.</p><p>8725-raqamli
                            nusxa ancha mukammal boʻlib, dastlabki varagʻida &ldquo;Xorazm shahzodalarining devonlari&rdquo;
                            deb yozilgan.</p><p>Kitob toʻq yashil rangdagi qattiq qogʻoz bilan muqovalangan. Sahifalar
                            raqamlanmagan. Har bir varaqda 19-20 yozuv yoʻli bor. Ba`zi sahifalarning pastki qismi
                            yirtilgan. Manba unchalik yaxshi saqlanmagan. Ayrim varaqlar sargʻaygan. Bu toshbosma nusxa
                            boʻlib, xati oʻzbekcha, yozuvi O`rta Osiyo nasta`liq. She`rlar ikki ustun qilib berilgan.
                            Gʻazallar tartibsiz raqamlangan. Jumladan, manbaning Sultoniyga bagʻishlangan qismida ana
                            shunday holatga duch kelamiz. 35-varaqdan Sultoniy ijodi berilib, 117 gʻazali keltiriladi.
                            Gʻazallar 53-raqamdan boshlanib, 170-gʻazalda tugaydi. Soʻngra 207-gʻazal beriladi.</p><p>
                            Sultoniy ijodiga oid she`rlar orasida Oqil gʻazallari keltiriladi. Gʻazallar raqamlanmaydi.
                            Har biri &ldquo;Gʻazali Oqil&rdquo; deb beriladi. 83-84-varaqlarda Oqilning oltita gʻazali
                            berilgach, yana Sultoniy she`rlari keltiriladi. Shoir she`rlari 202&ndash;varaqda tugaydi.
                            Uning 356 ta gʻazali berilgan. Qolgan 99 gʻazal manbaga kiritilmagan.</p><p>10281- raqamli
                            toshbosma nusxa O`rta Osiyo nasta`liq xatida bitilgan. Hajmi 580 sahifa. Majmua 42-sahifadan
                            Bayoniy ijodi bilan boshlanadi. Dastlabki varaqlar yoʻqolgan. Sahifalar ikki martadan
                            raqamlangan boʻlib, raqamlar bir-biridan &ldquo; / &rdquo; belgisi bilan ajratilgan.
                            Bayoniyning 350 ta gʻazali beriladi. Qolgan 8 ta gʻazal Sodiq ijodidan soʻng keltirilgan. 59&ndash;varaqda
                            uch bayt, 101&ndash;varaqda bir bayt, 107-varaqda esa 12 misra, 409-varaqda 13 misra she`r
                            hoshiyaga bitilgan. Sultoniyning 358-gʻazali tugallanmay qolgan, uning davomi Sa`diy
                            gʻazallari orasida berilgan. Sa`diy she`riyati manbaning soʻnggi qismida keltirilib, shoirga
                            faqat sakkiz sahifa ajratilgan, xolos.</p><p>Toshbosma nusxalar orasida 8950-raqamli nusxa
                            ham mavjud, birinchi titul varagʻida:</p><p>Xiva noshiri: Muhammad Rahimxon Feruz.</p><p>
                            Haft shahzoda, &ndash;</p><p>deb yozilgan. Ikkinchi titul varagʻida Muhammad Yusufbek
                            Bayoniy &ndash; deb bitilgan. Manba oppoq fabrika qogʻoziga qora siyohda bitilgan. Uni ancha
                            mukammal nusxa sifatida qabul qilsak boʻladi. Majmua toʻq yashil rangdagi qattiq qogʻoz
                            bilan muqovalangan. Manba nasta`liq xatida bitilgan. She`rlar ikki ustun shaklida berilgan
                            boʻlib, har bir varaqda 19-20-21 yozuv yoʻli bor. Sahifalar raqamlanmagan, she`rlar tartib
                            raqami bilan belgilangan.</p><p>Har bir shoir ijodiga bagʻishlangan qism yakunida &ldquo;Soʻnggi
                            aytgʻon gʻazallari&rdquo; deb yana gʻazallar keltiriladi va ular yangidan raqamlanadi. Manba
                            yaxshi saqlangan.</p><p>Majmuaning 8929-raqamli nusxasi qoʻlyozma boʻlib, 602 sahifani
                            tashkil etadi. Manba qora siyohda, nasta`liq xatida sariq fabrika qogʻoziga bitilgan. Kitob
                            toʻq koʻk rangli qattiq qogʻoz bilan muqovalangan. Qoʻlyozmani Muhammad Sharif devon ibn
                            Ollohbergan devon koʻchirgan. Majmuaning dastlabki sahifasiga arab alifbosi harflari
                            yozilgan. 59-104-112&ndash;varaqlarning hoshiyasiga pushti rang siyohda ayrim baytlar
                            bitilgan. She`rlar ikki ustun qilib berilib, varaq oxiriga keyingi sahifaning birinchi soʻzi
                            yozilgan. Sahifalar raqamlangan, gʻazallar esa hoshiyalar bilan ajratilgan. Nusxa unchalik
                            yaxshi saqlanmagan boʻlib, ayrim sahifalarning pastki qismidagi yozuvlarni umuman oʻqib
                            boʻlmaydi. Har bir sahifada 20-21 yozuv yoʻli bor.</p><p>&ldquo;Haft shuaro&rdquo;
                            majmuasining yana bir qoʻlyozma nusxasi 14424 raqami bilan O`zR FA ShI qoʻlyozmalar
                            xazinasida saqlanmoqda. Qoʻlyozma 563 sahifadan iborat. Noma`lum kotib tomonidan
                            koʻchirilgan bu nusxa qora siyohda nasta`liq xatida koʻchirilgan. Sahifalar raqamlanmagan,
                            gʻazallar esa arab raqamlari bilan belgilangan. Gʻazallar ikki ustun shaklida berilgan.
                            Kotib Sultoniyning 18 gʻazalini Sa`diy gʻazallaridan soʻng keltiradi. Sa`diy qalamiga mansub
                            qasida tugallanmay qoladi. 67-sahifadan soʻng 112&ndash;sahifa keltiriladi. Bu kotibning
                            manbani koʻchirish jarayonida muayyan qoidaga amal qilmaganidan dalolatdir.</p><p>Majmuaning
                            yana ikkita toshbosma nusxasi mavjud boʻlib, ulardan biri f.f.n Sultonmirzo Rahimovning
                            shaxsiy kutubxonasida, ikkinchisi Xivaning Feruz muzeyida saqlanadi. Adabiyotshunos
                            Sultonmirzo Rahimov qoʻlidagi nusxa mukammal emas. Majmua 4-sahifadan boshlanadi. Manba qora
                            siyohda nasta`liq xatida bitilgan. Majmua Bayoniy she`rlari bilan boshlanadi. 44&ndash;sahifada
                            shoir she`rlari tugab, 207-231-sahifalarda davom etadi. 264-sahifada ham Bayoniy gʻazallari
                            keltiriladi.</p><p>45-84-varaqlarda Oqil she`rlari beriladi. 85-155-sahifalarda Sultoniy
                            qalamiga mansub she`rlar keltiriladi. Shuningdek, 231-238-265-353&ndash;varaqlarda ham
                            Sultoniy she`rlari berilgan.</p><p>156-205&ndash;varaqlarga Mirzo ijodiga mansub she`rlar
                            kiritilganki, bu holat boshqa nusxalarda uchramaydi. Mirzo ijodi aslida &ldquo;Haft shuaro&rdquo;
                            majmuasiga kiritilmagan boʻlib, bu holni koʻchiruvchining muayyan maqsadi bilan yoxud
                            tasodifiy fakt sifatida izohlash mumkin.</p><p>Manbaning qolgan qismida Sodiq va Sa`diy
                            she`rlari tartib bilan keltirilgan. Biroq Murodiy va Farrux ijodiga ajratilgan qismlar
                            yoʻqolgan. 59-71-72-101-107-409&ndash;varaqlarning hoshiyalariga ayrim baytlar bitilgan.</p>
                        <p>Majmuaning Xiva davlat muzeyida saqlanayotgan toshbosma nusxasi ham mukammal emas. Nusxa 257
                            varaqdan iborat boʻlib, 14-varaqdan 146-varaqqacha Sultoniy she`riyati beriladi. Unda
                            shoirning 268 gʻazali jamlangan boʻlib, majmua oxirida yana 36 gʻazali keltiriladi.</p><p>
                            147-210-varaqlarda Sa`diy she`riyati beriladi. (162 gʻazali bor). Soʻngra Mirzo va Gʻulomiy
                            she`rlari keltiriladi. Bayoniyning 301 gʻazali berilib, qolgan qismlarda saroyda Feruz
                            gʻazallariga bitilgan payravlardan namunalar keltiriladi.</p><p>Tadqiqotimizga majmuaning
                            10374 raqami bilan O`zR FA ShI qoʻlyozmalar xazinasida saqlanayotgan toshbosma nusxani asos
                            qilib oldik. Majmua och yashil rangdagi qattiq qogʻoz bilan muqovalangan boʻlib, dastlabki
                            varaq ochiq qolgan. Manba sargʻish Qoʻqon fabrika qogʻoziga qora siyohda nasta`liq xatida
                            bitilgan. Hajmi 18 x 32. Ikkinchi sahifada doira shaklidagi naqsh ichida majmuaga kiritilgan
                            shoirlarning nomlari taxallusi bilan keltiriladi. Sahifaning pastki qismida &ldquo;Muhammad
                            Rahimxon Bahodirxoni soniyning farmoni oliylari ila Xorazm matbaasida bosildi&rdquo;, deb
                            bitilgan. Shoirlarning nomlari keltirilgan dastlabki sahifa jigar rangga boʻyalgan.
                            Shuningdek, shu sahifaning oxirida hijriy 1325 raqami koʻrsatilgan boʻlib, bu milodiy 1906
                            yilga toʻgʻri keladi.</p><p>Majmuani tuzishda qat`iy qoidaga toʻliq rioya qilinmagan. Har
                            bir shoirga alohida qism ajratib, dastlab ularning gʻazallarini arab alifbosi qoidasi
                            asosida keltiriladi. Soʻngra muxammas va boshqa musammat janriga mansub she`rlar beriladi.
                            Majmuada har bir shoir ijodining yakunida ketma-ketlik buziladi. Ya`ni &ldquo;soʻnggi
                            aytgʻon gʻazallari&rdquo; deya yana gʻazallarni keltiradi. Majmuadagi janrlarni quyidagicha
                            tasniflash mumkin:</p><p><!--[if !supportFootnotes]--></p><p>&nbsp;</p><!--[endif]--><p><a
                                href="#_ftnref1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Jumayev.N. Feruz //
                            Xalq soʻzi.Toshkent., 1992.29-yanvar</p><p>&nbsp;</p>
                    @endif
                    @if( $lang == "en" )
                        <p>These are the combined sources - &quot;Haft Shuaro&quot; complex and Tabibi&#39;s &quot;Majmuai
                            si shuaroi payravi Feruzshahiy&quot; and &quot;Muhammasoti kompleksat ush- shuaroi
                            Feruzshahi&quot; tazkiras created on Feruz&#39;s initiative. The first of these was made in
                            1906, the second in 1908, and the third in 1909. As we have seen, there is an internal
                            logical connection between these short-lived literary sources. In particular, all three were
                            collectively referred to as &quot;complexes&quot; because they were intended as a collection
                            of lyrical poems by poets of the time. Secondly, the sources are based on the works of Feruz
                            and his family tree, which are expressed in the form of independent and follow-up poems. In
                            other words, Haft Shuaro contains poems of various genres, while tazkiras contain
                            biographical and literary information along with poems. Thirdly, many of the poets and poems
                            in Haft Shuaro are also included in the tazkiras, which are supplemented by Tabibi&#39;s
                            masnavi-information about the personalities and works of the authors. In this sense, the
                            tazkira can be considered a somewhat improved continuation of Haft Shuaro. Consequently,
                            these sources serve to enrich the information about the poets and poems in &quot;Haft Shuaro&quot;
                            with new ideas, to broaden them. Therefore, it is advisable to use the literary and
                            biographical information in the treatises as important materials that are directly related
                            to the study of Haft Shuaro. Because the details of the poets&#39; personalities help to get
                            a deeper idea of ​​the poems in the collection and to study the harmony of social and
                            emotional motives.</p><p>It should be noted that the information about the prince poets,
                            whose poems are included in the &quot;Haft Shuaro&quot;, is more extensive than the later
                            works of Laffasi and Khadim. In the first of them, as in Tabibi&#39;s tazkira, information
                            about each poet and samples of poems are given, and in the second, only information about
                            his personality is given and his works are described in general. For this reason, the
                            interpretations in the Staff Gazette can be called poetic literary portraits or portraits.
                            Undoubtedly, Feruz&#39;s personal leadership was a key factor in the short-term creation and
                            interdependence of Haft Shuaro and Tazkirah. At the same time, in our opinion, although the
                            interests and interests of the king played a decisive role, the following aspects should
                            also be noted:</p><p>1. Feruz by nature has a boundless passion for literature and art, love
                            and a high artistic taste;</p><p>2. Achieving ideological dominance and status through
                            artistic creation and its promotion, like most rulers;</p><p>3. A sense of belonging and
                            immortality as a poet and a lover of art;</p><p>4. Striving for spiritual and enlightenment
                            development in the conditions of dependence on Russia and, as academician Oybek noted, Feruz
                            was forced to give a cultural color not only to the people, but also to his palace.</p><p>
                            The Haft Shuaro complex is a product of these factors and is evidence of Feruz&#39;s desire
                            to give his environment a &quot;cultural hue.&quot; Second, only the works of the king&#39;s
                            friends and relatives were selected for the tazkira, and Feruz&#39;s care for his relatives
                            and his strong artistic talent were the impetus for the creation of the complex. But the
                            impartial and strict king seemed to approach the matter with serious demand and
                            responsibility. Although most of the poets of their generation were well-known and composed
                            of devons, the poems of only seven of them were selected for the collection. Not even the
                            works of Feruz&#39;s younger brother Komyob, as well as the works of his nephews Ghazi and
                            Assad. His younger brother Murodi and son Farrukh (Asfandiyor), who wrote relatively few
                            poems, are the first pages of the collection. This means that when the king intended to
                            create a complex, he took into account certain goals in the selection of creative relatives
                            and poetic works. However, the reason for the inclusion of only seven poems in the complex
                            is not specified. In our opinion, firstly, princes who were directly mentored and
                            recommended by Bayani, and secondly, whose poems and personality were pleasing to Feruz,
                            were selected. The fact that the preface of the complex was written by Bayani himself also
                            gives grounds for such an opinion. Thirdly, it is not accidental that the composition and
                            preface of the collection were entrusted to Bayani, given his status as a teacher, high
                            level of organization and scientific and artistic skills, as well as his advice. Therefore,
                            although Bayani is a relatively distant relative of Feruz (grandson of Eltuzarkhan), the
                            fact that his poems are given a prominent place also suggests the same.</p><p>The form and
                            content of the preface allow us to observe some peculiarities of the complex. First of all,
                            the preface, unlike the traditional method, is given at the beginning of the work, not in
                            front of the Sultan&#39;s poems, and consists of three pages. According to its content, it
                            consists of two parts: the first part is dedicated to the praise of Feruz, and the second
                            part is dedicated to the description of the Sultan&#39;s work. In addition to the prose
                            statement, it contains 96 verses, 42 of which are about Feruz and 54 about Sultani. It is
                            not accidental that Feruz and Bayani paid so much attention to the Sultan&#39;s work. The
                            fact that Sultani was the closest and most respected grandson to Feruz, that he was mentored
                            by both Feruz and Bayani, that the Sultan&#39;s poems were acceptable and weighty, and that
                            his grandfather advised him to write them, played a decisive role in this. Therefore, in our
                            opinion, Haft Shuaro was first formed on the basis of Sultan&#39;s works, and later, on the
                            recommendation of Feruz, the poems of other princes were added. The statement of the preface
                            that the preface refers only to the work of the Sultan is a proof of this opinion:</p><p>
                            Debocha &ldquo;Bismillahir rahmanir rahiym&rdquo;. Praise be to Allaah, the Most High, the
                            Most High, the Most High.</p><p>Feruz&#39;s qualities as a person and a just ruler are
                            glorified.</p><p>The collection also includes poems by Feruz&#39;s grandsons Sultani, Saadi,
                            nephews Sadik and Akil. Indeed, as science acknowledges, &ldquo;Each of these (princely
                            poets - I.X.) had a special place and position in the literary environment of the Feruz
                            family. Their well-known collection of poems was popularly known as the Book of Princes of
                            Khiva, Haft Shuaro. These writers and works are also our national and cultural heritage&rdquo;<a
                                href="#_ftn1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a>.</p><p>Two manuscripts
                            and six lithographs of the Haft Shuaro complex are kept in the Manuscripts Archive of the
                            Academy of Sciences of the Republic of Uzbekistan.</p><p>Copies Nos. 39 and 40 are written
                            on Kokand paper in Nasta&#39;lik script. Size 560 pages. There are 18-19 lines on each page
                            of the source. Copies are incomplete. The two copies are almost identical. Four pages of the
                            source dedicated to Murodi&#39;s work have been lost. The complex begins on the fifth page.
                            It contains ten ghazals by Murodi. The source is printed in the printing house of Feruz
                            Palace. The poems are presented in the form of two columns. Pages are numbered. Copy number
                            39 is covered with light green paper and copy number 40 is covered with dark brown
                            cardboard.</p><p>Copy number 8725 is more perfect, the first page says &quot;Devons of
                            Khorezm princes&quot;.</p><p>The book is covered with dark green cardboard. Pages are not
                            numbered. Each page has 19-20 lines of writing. The bottom of some pages is torn. The source
                            is not well preserved. Some leaves are yellow. It is a lithograph, the letter is in Uzbek,
                            the inscription is from Central Asia. The poems are presented in two columns. The gazals are
                            randomly numbered. In particular, we find such a situation in the part of the source
                            dedicated to the Sultan. On page 35, the Sultan&#39;s work is given and 117 ghazals are
                            quoted. Ghazals begin at 53 and end at 170. Then the 207th Ghazals is given.</p><p>Among the
                            poems of the sultan&#39;s work are the Wise Ghazals. Ghazals are not numbered. Each of them
                            is called &quot;Ghazali Akil&quot;. On pages 83-84, after the six ghazals of Akil, the
                            Sultan&#39;s poems are quoted again. The poet&#39;s poems end on page 202. He gave 356
                            ghazals. The remaining 99 gazals are not included in the source.</p><p>The lithograph number
                            10281 is written in the Central Asian Nasta&#39;liq letter. Size 580 pages. The collection
                            begins on page 42 with a statement. The first pages are missing. Pages are numbered twice,
                            separated by a &quot;/&quot; sign. 350 ghazals of Bayani will be given. The remaining 8
                            poems are quoted after Sadiq&#39;s work. There are three bytes on page 59, one byte on page
                            101, 12 lines on page 107, and 13 lines on page 409. Sultani&#39;s 358th ghazal is
                            incomplete, and its continuation is given among the Saadi ghazals. Saadi&#39;s poetry is
                            quoted in the last part of the source, and the poet is given only eight pages.</p><p>Among
                            the lithographs there is a copy number 8950, on the first title page:</p><p>Khiva publisher:
                            Muhammad Rahimxon Feruz.</p><p>Haft Prince, -</p><p>It is written. The second title page
                            reads Muhammad Yusufbek Bayani. The source is written in black ink on white factory paper.
                            We can accept it as a more perfect copy. The complex is covered with dark green cardboard.
                            The source is written in Nasta&#39;lik letter. The poems are presented in the form of two
                            columns, each page has 19-20-21 lines of writing. The pages are not numbered, the poems are
                            numbered sequentially.</p><p>At the end of the section dedicated to the work of each poet,
                            more poems are quoted as &quot;The Last Gazals&quot; and they are re-numbered. The source is
                            well preserved.</p><p>Copy 8929 of the collection is a manuscript of 602 pages. The source
                            is written in black ink, in a Nasta&#39;lik letter on yellow factory paper. The book is
                            covered with dark blue cardboard. The manuscript was copied by Muhammad Sharif devon ibn
                            Allahbergan devon. The first page of the complex contains the letters of the Arabic
                            alphabet. Pages 59-104-112 have some bytes in pink ink. The poems are given in two columns,
                            with the first word of the next page written at the end of the page. The pages are numbered,
                            and the gazelles are framed. The copy is not well preserved, and the captions at the bottom
                            of some pages are completely unreadable. There are 20-21 lines on each page.</p><p>Another
                            manuscript of the Haft Shuaro complex, number 14424, is kept in the Manuscripts Archive of
                            the Academy of Sciences of the Republic of Uzbekistan. The manuscript consists of 563 pages.
                            This copy, copied by an unknown secretary, was copied in black ink in a Nasta&#39;lik
                            letter. The pages are unnumbered, and the gazelles are marked with Arabic numerals. The
                            gazelles are presented in the form of two columns. The secretary quotes 18 of Sultani&#39;s
                            ghazals after Saadi&#39;s ghazals. The poem by Saadi is incomplete. Page 67 is followed by
                            page 112. This indicates that the secretary did not follow certain rules during the transfer
                            of the source.</p><p>There are two more lithographs in the complex, one in the personal
                            library of Ph.D. Sultanmirzo Rakhimov and the other in the Feruz Museum in Khiva. The copy
                            in the hands of literary critic Sultanmirzo Rakhimov is not perfect. The complex begins on
                            page 4. The source is written in black ink in a Nasta&#39;lik letter. The collection begins
                            with Bayani&#39;s poems. The poet&#39;s poems end on page 44 and continue on pages 207-231.
                            Page 264 also contains Bayani&#39;s gazelles.</p><p>On pages 45-84 the poems of the Wise are
                            given. On pages 85-155 there are poems by Sultan. Pages 231-238-265-353 also contain Sultan&#39;s
                            poems.</p><p>Pages 156-205 contain poems by Mirza, which is not the case in other copies.
                            Mirzo&#39;s work is not actually included in the Haft Shuaro complex, which can be explained
                            by the copyist&#39;s specific purpose or by chance.</p><p>In the rest of the source, the
                            poems of Sadik and Sa`di are quoted in order. However, parts of Murodi&#39;s and Farrukh&#39;s
                            works have been lost. 59-71-72-101-107-409 - some bytes are written in the margins of the
                            pages.</p><p>The lithographic copy of the complex kept in the Khiva State Museum is also not
                            perfect. The copy consists of 257 pages, from 14 to 146 pages of Sultan&#39;s poetry. It
                            contains 268 ghazals of the poet, and at the end of the complex another 36 ghazals are
                            quoted.</p><p>On pages 147-210, Saadi&#39;s poetry is given. (There are 162 gazelles). Then
                            the poems of Mirzo and Gulomi are quoted. Bayani&#39;s 301 ghazals are given, and the rest
                            are examples of passages written on Feruz&#39;s ghazals in the palace.</p><p>Our research is
                            based on a lithograph of the complex number 10374, which is stored in the manuscript
                            treasury of the Academy of Sciences of the Republic of Uzbekistan. The complex is covered
                            with light green cardboard, the first page is left open. The source is written in yellow ink
                            on Kokand factory paper in black ink. Size 18 x 32. On the second page, in a circular
                            pattern, the names of the poets included in the collection are given under their pseudonyms.
                            At the bottom of the page it is written: The first page of the poets&#39; names is painted
                            in brown. Also at the end of this page is the number 1325 AH, which corresponds to 1906
                            AD.</p><p>Strict rules were not followed in the construction of the complex. Each poet is
                            given a separate section, initially based on the rules of the Arabic alphabet. Then poems of
                            muhammas and other musammat genres are given. At the end of each poet&rsquo;s work in the
                            complex, the sequence is broken. That is to say, &quot;the last ghazals&quot; he quotes
                            again. The genres in the complex can be classified as follows:
                            <!--[if !supportFootnotes]--></p><p>&nbsp;</p><!--[endif]--><p><a href="#_ftnref1">
                                <!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Jumayev.N. Feruz // Xalq
                            soʻzi.Toshkent., 1992.29-yanvar</p><p>&nbsp;</p>
                    @endif
                    @if( $lang == "ru" )
                        <p>Это объединенные источники - комплекс &laquo;Хафт Шуаро&raquo; и созданные по инициативе
                            Феруза тезкиры &laquo;Маджмуай си шуарои пайрави Ферузшахы&raquo; Табиби и &laquo;Мухаммасоти
                            комплекст уш-шуарой Ферузшахи&raquo;. Первый из них был сделан в 1906 году, второй в 1908
                            году и третий в 1909 году. Как мы видели, между этими недолговечными литературными
                            источниками существует внутренняя логическая связь. В частности, все три вместе именовались
                            &laquo;комплексами&raquo;, поскольку задумывались как сборник лирических стихотворений
                            поэтов того времени. Во-вторых, источники основаны на произведениях Феруза и его
                            генеалогическом древе, которые выражены в виде самостоятельных и продолженных стихотворений.
                            Другими словами, хафт шуаро содержит стихи различных жанров, а тезкиры наряду со стихами
                            содержат биографические и литературные сведения. В-третьих, многие поэты и стихи Хафт Шуаро
                            также включены в тезкиры, которые дополняются маснави-сведениями Табиби о личностях авторов
                            и произведениях. В этом смысле тезкиру можно считать несколько улучшенным продолжением Хафта
                            Шуаро. Следовательно, эти источники служат обогащению сведений о поэтах и ​​стихах &laquo;Хафт
                            шуаро&raquo; новыми идеями, их расширению. Поэтому литературно-биографические сведения в
                            трактатах целесообразно использовать как важные материалы, имеющие непосредственное
                            отношение к изучению Хафта Шуаро. Это связано с тем, что детали личности поэтов помогают
                            глубже понять стихотворения сборника и исследовать гармонию социальных и эмоциональных
                            мотивов.</p><p>Следует отметить, что сведения о поэтах-князях, стихи которых вошли в &laquo;Хафт
                            Шуаро&raquo;, более обширны, чем более поздние произведения Лаффази и Хадима. В первом, как
                            и в тезкире Табиби, даются сведения о каждом поэте и образцы стихов, а во втором даются
                            только сведения о его личности и в целом описываются его произведения. По этой причине
                            интерпретации в Staff Gazette можно назвать поэтическими литературными портретами или
                            портретами. Несомненно, личное лидерство Феруза было ключевым фактором в краткосрочном
                            создании и взаимозависимости Хафта Шуаро и Тезкиры. При этом, на наш взгляд, хотя интересы и
                            интересы царя и играли решающую роль, следует также отметить следующие аспекты:</p><p>1.
                            Феруз от природы обладает безграничной страстью к литературе и искусству, любовью и высоким
                            художественным вкусом;</p><p>2. Достижение идеологического господства и статуса посредством
                            художественного творчества и его продвижения, как у большинства правителей;</p><p>3. Чувство
                            принадлежности и бессмертия как поэта и любителя искусства;</p><p>4. Стремление к
                            духовно-просветительскому развитию в условиях зависимости от России и, как отмечал академик
                            Ойбек, Феруз был вынужден придать культурную окраску не только народу, но и своему
                            дворцу.</p><p>Комплекс Хафт Шуаро является продуктом этих факторов и свидетельствует о
                            желании Феруза придать окружающей среде &laquo;культурный оттенок&raquo;. Во-вторых, для
                            тезкиры отбирались только произведения друзей и родственников царя, а забота Феруза о родных
                            и его сильный художественный талант также способствовали созданию комплекса. Но
                            беспристрастный и строгий царь, казалось, подошел к делу с серьезной требовательностью и
                            ответственностью. Хотя большинство поэтов своего поколения были хорошо известны и состояли
                            из девонов, для сборника были отобраны стихи только семи из них. Нет даже произведений
                            младшего брата Феруза Комьоба, а также произведений его племянников Гази и Асада. Его
                            младший брат Муроди и сын Фаррух (Асфандиёр), написавшие относительно немного стихов,
                            являются первыми страницами сборника. Это значит, что когда царь намеревался создать
                            комплекс, он учитывал определенные цели при подборе творческих родственников и поэтических
                            произведений. Однако причина включения в комплекс только семи стихотворений не уточняется.
                            По нашему мнению, отбирались, во-первых, князья, которых непосредственно наставлял и
                            рекомендовал Баяни, а во-вторых, чьи стихи и личность нравились Ферузу. Тот факт, что
                            предисловие к комплексу написал сам Баяни, также дает основания для такого мнения.
                            В-третьих, не случайно составление и предисловие к сборнику были поручены Баяни, учитывая
                            его педагогический статус, высокий организаторский авторитет и научно-художественные
                            способности, и его советы могли быть приняты во внимание. Поэтому, хотя Баяни и является
                            относительно дальним родственником Феруза (внука Эльтузархана), тот факт, что его стихам
                            отводится видное место, говорит о том же.</p><p>Форма и содержание предисловия позволяют
                            заметить некоторые особенности комплекса. Во-первых, предисловие, в отличие от традиционного
                            приема, дается в начале произведения, а не перед стихами султана, и состоит из трех страниц.
                            По своему содержанию он состоит из двух частей: первая часть посвящена восхвалению Феруза, а
                            вторая часть посвящена описанию работы султана. Помимо прозаического изложения, в нем
                            содержится 96 стихов, из которых 42 о Ферузе и 54 о Султани. Не случайно Феруз и Баяни
                            уделяли столько внимания творчеству султана. Решающую роль в этом сыграло то, что Султани
                            был самым близким и уважаемым внуком Феруза, что он был наставником и Феруза, и Баяни, что
                            стихи султана были приемлемыми и весомыми, и что его дед советовал ему писать их. Поэтому,
                            на наш взгляд, Хафт Шуаро сначала формировался на основе произведений Султана, а позже, по
                            рекомендации Феруза, были добавлены стихи других князей. Заявление предисловия о том, что
                            предисловие относится только к работе султана, является доказательством этого мнения.</p><p>
                            Дебоча &laquo;Бисмиллахир рахманир рахийм. Хвала Аллаху, Всевышнему, Всевышнему,
                            Всевышнему.</p><p>Прославлены качества Феруза как человека и справедливого правителя. В
                            сборник также вошли стихи внуков Феруза Султани, Саади, племянников Садика и Акила. Ведь,
                            как признает наука, &laquo;Каждый из этих (княжеских поэтов &mdash; И. X.) имел особое место
                            и положение в литературной среде рода Феруз. Их знаменитый сборник стихов был известен в
                            народе как Книга князей Хивинских Хафт Шуаро. Эти писатели и произведения также являются
                            нашим национальным и культурным достоянием&raquo;.<a href="#_ftn1">
                                <!--[if !supportFootnotes]-->[1]<!--[endif]--></a>.</p><p>Две рукописи и шесть
                            литографий комплекса Хафт Шуаро хранятся в Архиве рукописей Академии наук Республики
                            Узбекистан.</p><p>Экземпляры № 39 и 40 написаны на кокандской бумаге шрифтом насталик. Объем
                            560 страниц. На каждой странице источника 18-19 строк. Копии неполные. Оба экземпляра
                            практически идентичны. Четыре страницы источника, посвященного творчеству Муроди, утеряны.
                            Комплекс начинается на пятой странице. Он содержит десять газелей Муроди. Исходник отпечатан
                            в типографии Feruz Palace. Стихи представлены в виде двух колонок. Страницы пронумерованы.
                            Экземпляр № 39 светло-зеленый, а экземпляр № 40 обтянут темно-коричневым картоном.</p><p>
                            Копия № 8725 более совершенна, на первой странице написано &quot;Девоны хорезмских князей&quot;.</p>
                        <p>Книга обтянута темно-зеленым картоном. Страницы не нумеруются. На каждой странице 19-20
                            строк. Нижняя часть некоторых страниц порвана. Источник плохо сохранился. Некоторые листья
                            желтые. Это литография, письмо на узбекском языке, надпись из Средней Азии. Стихи
                            представлены в двух столбцах. Газели пронумерованы случайным образом. В частности, такую
                            ​​ситуацию мы находим в части источника, посвященной султану. На странице 35 приводится
                            работа Султана и цитируются 117 газелей. Газели начинаются с 53 и заканчиваются с 170. Потом
                            дается 207-я Газель.</p><p>Среди стихотворений султанского творчества &laquo;Мудрые газели&raquo;.
                            Газели не нумеруются. Каждый из них называется &laquo;Газали Акил&raquo;. На страницах
                            83-84, после того как даны шесть газелей Акила, снова цитируются стихи султана. Стихи поэта
                            заканчиваются на 202 странице. Он дал 356 газелей. Остальные 99 газелей не включены в
                            источник.</p><p>Литография № 10281 написана среднеазиатским письмом насталик. Объем 580
                            страниц. Сборник начинается на странице 42 с работы Баяни. Первые страницы отсутствуют.
                            Страницы пронумерованы дважды, разделены знаком &laquo;/&raquo;. Будет дано 350 газелей
                            Баяни. Остальные 8 стихотворений цитируются по произведению Садыка. На странице 59 три
                            байта, на странице 101 &mdash; один байт, на странице 107 &mdash; 12 строк, на странице 409
                            &mdash; 13 строк. 358-я газель Султани неполная, и ее продолжение дается среди газелей
                            Саади. Поэзия Саади цитируется в последней части источника, а поэту отведено всего восемь
                            страниц.</p><p>Среди литографий есть экземпляр № 8950, на первом титульном листе:</p><p>
                            Хивинское издательство: Мухаммад Рахимхон Феруз.</p><p>Хафт Принц, -</p><p>Это написано. На
                            втором титульном листе написано &laquo;Мухаммад Юсуфбек Баяни&raquo;. Исходник написан
                            черными чернилами на белой фабричной бумаге. Мы можем принять его как более совершенную
                            копию. Комплекс обтянут темно-зеленым картоном. Источник написан письмом насталик. Стихи
                            представлены в виде двух колонок, на каждой странице 19-20-21 строк написания. Страницы не
                            нумеруются, стихи нумеруются последовательно.</p><p>В конце раздела, посвященного творчеству
                            каждого поэта, стихи читаются как &laquo;Последние газели&raquo; и перенумеровываются.
                            Источник хорошо сохранился.</p><p>Копия 8929 сборника представляет собой рукопись объемом
                            602 страницы. Источник написан черными чернилами, письмом насталик на желтой фабричной
                            бумаге. Книга обтянута темно-синим картоном. Рукопись была скопирована Мухаммадом Шарифом
                            Девоном ибн Аллахберганом Девоном. Первая страница комплекса содержит буквы арабского
                            алфавита. На страницах 59-104-112 несколько байтов выделены розовыми чернилами. Стихи даются
                            в две колонки, причем первое слово следующей страницы пишется в конце страницы. Страницы
                            пронумерованы, а газели обрамлены. Копия плохо сохранилась, а подписи внизу некоторых
                            страниц вообще нечитаемы. На каждой странице 20-21 строка.</p><p>Еще одна рукопись комплекса
                            Хафт Шуаро под номером 14424 хранится в Архиве рукописей Академии наук Республики
                            Узбекистан. Рукопись состоит из 563 страниц. Эта копия, скопированная неизвестным
                            секретарем, была скопирована черными чернилами в письме насталика. Страницы не
                            пронумерованы, а газели отмечены арабскими цифрами. Газели представлены в виде двух колонн.
                            Секретарь цитирует 18 газелей Султани после газелей Саади. Поэма Саади неполная. За
                            страницей 67 следует страница 112. Это свидетельствует о том, что секретарь не соблюдал
                            определенные правила при передаче источника.</p><p>В комплексе есть еще две литографии, одна
                            в личной библиотеке доктора философии Султанмирзо Рахимова и другая в музее Феруз в Хиве.
                            Копия в руках литературоведа Султанмирзо Рахимова не идеальна. Комплекс начинается на
                            странице 4. Источник написан черными чернилами в письме насталика. Сборник начинается со
                            стихов Баяни. Стихи поэта заканчиваются на странице 44 и продолжаются на страницах 207-231.
                            Страница 264 также содержит газелей Баяни.</p><p>На страницах 45-84 даны стихи Мудрых. На
                            страницах 85-155 есть стихи Султана. Страницы 231-238-265-353 также содержат стихи
                            Султана.</p><p>Страницы 156-205 содержат стихи Мирзы, чего нет в других экземплярах. Работа
                            Мирзо фактически не входит в комплекс Хафт Шуаро, что можно объяснить конкретной целью
                            переписчика или случайностью.</p><p>В остальной части источника стихи Садика и Саади
                            цитируются по порядку. Однако части произведений Муроди и Фарруха утеряны.
                            59-71-72-101-107-409 &mdash; некоторые байты прописаны на полях страниц.</p><p>
                            Литографическая копия комплекса, хранящаяся в Хивинском государственном музее, также
                            несовершенна. Копия состоит из 257 страниц, от 14 до 146 страниц стихов Султана. Он содержит
                            268 газелей поэта, а в конце комплекса цитируются еще 36 газелей.</p><p>На страницах 147-210
                            приведены стихи Саади. (есть 162 газели). Затем цитируются стихи Мирзо и Гуломи. Дана 301
                            газель Баяни, а остальные являются примерами отрывков, написанных на газелях Феруза во
                            дворце.</p><p>Наше исследование основано на литографии комплекса № 10374, которая хранится в
                            рукописной сокровищнице Академии наук Республики Узбекистан. Комплекс обклеен светло-зеленым
                            картоном, первая страница оставлена ​​открытой. Источник написан желтыми чернилами на
                            кокандской фабричной бумаге письмом насталик. Размер 18 х 32. На второй странице по кругу
                            имена поэтов, вошедших в сборник, даны под их псевдонимами. Внизу страницы написано: Первая
                            страница с именами поэтов окрашена в коричневый цвет. Также в конце этой страницы находится
                            число 1325 AH, что соответствует 1906 году нашей эры.</p><p>При строительстве комплекса не
                            соблюдались строгие правила. Каждому поэту отводится отдельный раздел, изначально основанный
                            на правилах арабского алфавита. Затем даются стихи мухаммаса и других жанров мусаммат. В
                            конце произведения каждого поэта в комплексе последовательность нарушается. Другими словами,
                            снова цитируются &laquo;последние газели&raquo;. Жанры в комплексе можно классифицировать
                            следующим образом:</p><p><!--[if !supportFootnotes]--></p><p>&nbsp;</p><!--[endif]--><p><a
                                href="#_ftnref1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Джумаев.Н. Феруз //
                            Народная речь. Ташкент., 29 января 1992 г.</p><p>&nbsp;</p>
                    @endif

                    {{--                    </p>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="image3 cid-t79KU1Lxf8" id="image3-18">


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="image-wrapper">
                        {{--                        @if( $lang == "uz" )--}}

                        {{--                        @endif--}}
                        {{--                        @if( $lang == "en" )--}}

                        {{--                        @endif--}}
                        {{--                        @if( $lang == "ru" )--}}
                        {{--                           --}}
                        {{--                        @endif--}}

                        <img src="{{asset('front/assets/images/jad.png')}}" alt="Mobirise">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content5 cid-t79KP4S49r" id="content5-17">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">


                    {{--                    <p class="mbr-text mbr-fonts-style display-7">--}}

                    @if( $lang == "uz" )
                        <p>Jadvaldan koʻrinadiki, majmuaga kirgan she`rlar an`anaviy she`riyatning oʻn toʻrt janrida
                            yozilgan boʻlib, salmoq jihatdan gʻazallar asosiy oʻrin egallaydi. Soʻngra muxammas, ruboiy,
                            musaddas va boshqa she`riy shakllar keltiriladi. Ularning mualliflarga mansubligi jihatdan
                            Sultoniy birinchi oʻrinda (12 janr), Bayoniy ikkinchi oʻrinda (11 janr) turadi. Eng koʻp
                            gʻazal va muxammas ham Sultoniyga tegishli. Shuningdek, tarji`band, musamman va muammo
                            janrlaridagi she`rlarning faqat Sultoniy qalamiga oidligi ham majmuada uning alohida mavqei
                            borligidan dalolatdir.</p>
                    @endif
                    @if( $lang == "en" )
                        <p>The table shows that the poems included in the collection are written in fourteen genres of
                            traditional poetry, and ghazals play a key role in weight. Then there are muhammas, rubais,
                            musaddas and other poetic forms. In terms of their authorship, Sultani ranks first (12
                            genres) and Bayani ranks second (11 genres). Most of the ghazals and muhammas also belong to
                            the Sultan. Also, the fact that the poems in the genres of tarjiband, musamman and problem
                            belong only to the Sultan&#39;s pen, which indicates that he has a special place in the
                            complex.</p>
                    @endif
                    @if( $lang == "ru" )
                        <p>Из таблицы видно, что стихотворения, вошедшие в сборник, написаны в четырнадцати жанрах
                            традиционной поэзии, ключевую роль в весе играют газели. Затем идут мухаммы, рубаи, мусадды
                            и другие поэтические формы. По авторству первое место занимает &laquo;Султани&raquo; (12
                            жанров), а &laquo;Баяни&raquo; &mdash; второе (11 жанров). Большинство газелей и мухаммов
                            принадлежат султану. Также тот факт, что стихи в жанрах тарджибанд, мусамман и муамма
                            принадлежат только перу султана, что свидетельствует о том, что ему отводится особое место в
                            комплексе.</p><p>&nbsp;</p>
                    @endif



                    {{--                    </p>--}}
                </div>
            </div>
        </div>
    </section>

@endsection
