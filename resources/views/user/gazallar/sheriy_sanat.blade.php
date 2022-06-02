@extends('user.master')
@section('title')
    @lang('public.gazallar3')
@endsection
@section('content')

    <section class="header1 cid-t7cC5YZxTG mbr-parallax-background" id="header1-1j">


        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(250, 250, 250);"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2"><strong>
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
                    </h1>


                </div>
            </div>
        </div>
    </section>

    <section class="features6 cid-t7cCrJ9UdF" id="features7-1k">
        <!---->


        <div class="container">
            <div class="card-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="image-wrapper">

                            <img src="{{asset('front/assets/images/g2-1076x1473.jpg')}}" alt="Mobirise">

                        </div>
                    </div>
                    <div class="col-12 col-lg">
                        <div class="text-box">
                            <h5 class="mbr-title mbr-fonts-style display-7">
                                <strong>

                                    @if( $lang == "uz" )
                                        Gʻazallarda she`riy san`atlarning qoʻllanishi
                                    @endif
                                    @if( $lang == "en" )
                                        The use of poetic arts in ghazals
                                    @endif
                                    @if( $lang == "ru" )
                                        Использование поэтических искусств в газелях
                                    @endif

                                </strong>
                            </h5>


                            @if( $lang == "uz" )
                                <p>&ldquo;Haft shuaro&rdquo; majmuasidagi gʻazallar badiiy jihatdan yetuk, sodda va
                                    ravondir. Majmuadagi gʻazallarning badiiy oʻziga xosligi, avvalo, ularning shakliy
                                    jihatlarida, bayt va misralarni she`r mazmuniga muvofiq qoʻllash usullarida
                                    koʻrinadi va an`anaviy gʻazal tuzilishiga amal qilinadi. Shayx Ahmad ibn Xudoydod
                                    Taroziy gʻazal tarkibi xususida toʻxtalar ekan: &ldquo;gʻazalning aksari yigirma
                                    bayt boʻlur va aqalli (kichigi &ndash; I.X.) besh bayt. Andin oʻksuk boʻlmas. Magar
                                    qofiya tabilmasa, toʻrt bayt qilurlar. Ul ham zarurat hukmidin joizdir&rdquo;,
                                    &ndash; deb yozgan edi<a href="#_ftn1"><!--[if !supportFootnotes]-->[1]
                                        <!--[endif]--></a>. Majmuada 5 baytli gʻazallar juda kam. Gʻazallarning uchdan
                                    ikki qismidan koʻprogʻi 7 va 9 baytli, qolganlari 10-11 baytli boʻlib, ramal va
                                    hazaj bahrlarida yozilgan. Ularning barchasida taxallus qoʻllanilgan,
                                    kompozitsiyasiga ham alohida diqqat qaratilgan: yakpora va tadrijli gʻazallarga keng
                                    oʻrin berilgan, bu hol muayyan she`rda faqat bir mavzuni chuqurroq yoritishga
                                    harakat qilinganiga ishoradir. Bu jihatdan ishq mavzusida yakporalik ustunlik
                                    qiladi.</p><p>Gʻazallar badiiyatining bir qirrasi turli she`riy san`at va badiiy
                                    vositalardan foydalanishda yorqin aks etgan. Buni bevosita har bir shoir ijodida
                                    kuzatish mumkin. Jumladan, Murodiy gʻazallariga murojaat qilamiz:</p><p>Aylaram
                                    la`li zuloli orzusin subhu shom,</p><p>Qilmagʻil mahzun mani agʻyori badkor oldida
                                    (B-3).</p><p><!--[if !supportFootnotes]--></p>
                                <!--[endif]--><p><a
                                        href="#_ftnref1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Shayx Ahmad
                                    ibn Xudoydod Taroziy. Funun ul-balog`a // Oʻzbek tili va adabiyoti.Toshkent., 2002.-
                                    №3 &ndash;B. 75.</p> ◀"
                            @endif
                            @if( $lang == "en" )
                                <p>The gazelles in the Haft Shuaro complex are artistically mature, simple and fluent.
                                    The artistic originality of the ghazals in the collection is reflected, first of
                                    all, in their formal aspects, in the ways in which the bytes and verses are used in
                                    accordance with the content of the poem, and the traditional ghazal structure is
                                    followed. Shaykh Ahmad ibn Khudaydad al-Tarazi commented on the composition of the
                                    ghazal: And there will be no shortage. If they can&#39;t find a rhyme, they make
                                    four bytes. He is also permissible under the rule of necessity&rdquo;<a
                                        href="#_ftn1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a>. There are very
                                    few 5-byte ghazals in the complex. More than two-thirds of the ghazals are 7 and 9
                                    bytes long, and the rest are 10-11 bytes long, written in Ramallah and Hajj. All of
                                    them use nicknames, and special attention is paid to their composition: single and
                                    gradual poems are widely used, which indicates that in a particular poem there is an
                                    attempt to shed more light on one topic. In this respect, monopoly prevails in the
                                    subject of love.</p><p>One aspect of the art of ghazals is reflected in the use of
                                    various poetic arts and artistic means. This can be directly observed in the work of
                                    every poet. In particular, we refer to Murodi&#39;s ghazals:</p><p>Aylaram la`li
                                    zuloli orzusin subhu shom,</p><p>Qilmagʻil mahzun mani agʻyori badkor oldida
                                    (P-3).</p><p><!--[if !supportFootnotes]--></p><p>&nbsp;</p>

                                    <hr>
                                    <!--[endif]--><p><a
                                        href="#_ftnref1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Shayx Ahmad
                                    ibn Xudoydod Taroziy. Funun ul-balog`a // Oʻzbek tili va adabiyoti.Toshkent., 2002.-
                                    №3 &ndash;B. 75.</p>
                            @endif

                            @if( $lang == "ru" )
                                <p>Газели в комплексе Хафт Шуаро художественно зрелые, простые и беглые. Художественное
                                    своеобразие газелей в сборнике проявляется, прежде всего, в их формальных аспектах,
                                    в способах использования байтов и стихов в соответствии с содержанием стихотворения,
                                    соблюдении традиционной газельной структуры. Шейх Ахмад ибн Худайдад ат-Тарази
                                    прокомментировал состав газели: И дефицита не будет. Если они не могут найти рифму,
                                    они составляют четыре байта. Он также дозволен по правилу необходимости&raquo;<a
                                        href="#_ftn1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a>. В комплексе
                                    очень мало 5-байтных газелей. Более двух третей газелей имеют длину 7 и 9 байт, а
                                    остальные - 10-11 байт, написанные в Рамаллахе и Хадже. Все они используют прозвища,
                                    и особое внимание уделяется их композиции: широко используются одиночные и
                                    постепенные стихотворения, что свидетельствует о том, что в том или ином
                                    стихотворении есть попытка пролить больше света на одну тему. В этом отношении в
                                    предмете любви преобладает монополия.</p><p>Один из аспектов искусства газелей
                                    находит отражение в использовании различных поэтических приемов и художественных
                                    средств. Это можно непосредственно наблюдать в творчестве каждого поэта. В
                                    частности, мы имеем в виду газели Муроди:</p><p>Айларам лали зулоли орзусин субху
                                    шом,</p><p>Килмагил махзун мани агёри вадкор олдида (С-3).</p><p>
                                <hr>
                                </p><!--[endif]--><p><a
                                        href="#_ftnref1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Шейх Ахмад
                                    ибн Худойдад Тарази. Фунун ул-балог`а // Узбекский язык и литература.Ташкент.,
                                    2002.- №3-С. 75.</p>
                                <br>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content5 cid-t7cDk8i2ZU" id="content5-1m">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">

                    @if($lang=="uz")
                        <p>Hijronda oʻrtangan oshiq mahbubaga oʻtinadi. U raqibi oldida gʻamdan qiynalgan holatini
                            namoyon qilishni istamaydi. Shoir oshiqning gʻamgin holatini, tunu kun iztirob
                            chekayotganini ifodalash maqsadida tazod san`atidan foydalanadi.</p><p>Ma`lumki, mumtoz
                            adabiyotda tazod san`ati ikki usulda qoʻlaniladi. Birinchi usulda tazod gʻazalning ayrim
                            baytlaridagina keltirilsa, ikkinchidan, gʻazal boshdan-oxirigacha tazod san`ati asosiga
                            quriladi. Jumladan, Murodiy &ldquo;koʻrub&rdquo; radifli gʻazalida tazodning birinchi
                            usuliga murojaat qiladi va ikki baytda bu san`atdan unumli foydalanadi. Dastlabki baytda
                            bevosita oʻz fikrini davom qildirib, gʻamgin koʻngil oy yuzli parini koʻrgach, dard bu
                            xursandchilikdan uyaladi. Bir baytning oʻzida shoir tazod va tashbeh san`atlarini
                            uygʻunlikda qoʻllaydi:</p><p>Mahzun koʻngul shod oʻlgʻusi ul mohitobonin koʻrub,</p><p>
                            Goʻyoki dard ahli boʻlur masrur darmonin koʻrub (B-6).</p><p>Keyingi baytda shoir tazod
                            san`atini bevosita harakat va holat zidligi asosida yaratadi. Ma`shuqaning zulfi
                            parishonligiga monand ravishda oshiqning koʻngli ham xotirjam emas:</p><p>Man zorgʻa har tun
                            agar boʻlsa muyassar orazi,</p><p>Jam` aylay olmon koʻnglumi zulfi parishonin koʻrub.</p><p>
                            Shoir ma`shuqaning goʻzalligini ifodalash uchun an`anaviy &ldquo;tovus&rdquo; obrazidan
                            foydalandi. Ma`lumki, bu obraz mumtoz adabiyotimizda yorning yurishiga qiyos qilinadi. Biroq
                            Murodiy gʻazalidagi tovus mahbubaning raftorini koʻrgach, xijolatdan yuziga chodir tortadi.
                            Shuningdek, yorni koʻrgach, gʻuncha tabassum qilishdan bosh tortganidek, nargis mahbubaning
                            koʻzlaridan uyaladi. Yorning koʻzlari fitnakor, ular oshiqning koʻnglini notinch qilishga
                            ham erishadi. Shoir buni tashbeh, istiora va mubolagʻa san`atlari orqali tasvirlaydi:</p><p>
                            Gʻuncha tabassumdin qolur gar koʻrsa sayri bogʻ aro,</p><p>Nargisga xijlatdur base ul
                            chashmi fattonin koʻrub</p><p>Tovus tortar boshigʻa sharmi xijolat chodirin,</p><p>Gar jilva
                            qilsa ul pari sarvi xiromonin koʻrub (B-6).</p><p>Shoirning ta`biricha, ma`shuqaning yuzu
                            koʻzi nuridan tunu kun nurafshon, biroq bu nurning parvonasi kimligi shoirga noma`lum.
                            Toʻgʻrirogʻi, u baytda tajohuli orif san`atini qoʻllab, bilib bilmaslikka oladi. Baytning
                            badiiyligini oshirish maqsadida tazodning goʻzal namunasini yaratadi:</p><p>Ravshan edikim,
                            yuz koʻzi birla tun-kun,</p><p>Oyo, bu kecha sham`igʻa parvona kim erkan?</p><p>Ya`qubsifat
                            kecha-kunduz chekarman oh,</p><p>Bildirguchi holim mahi Kan`ona kim erkan?</p><p>Ma`lumki,
                            parvona &ndash; oshiq, u yorning atrofida girdikapalak boʻlsa-da, vasliga yetolmaydi. Bu
                            baytlarda shoir tashbeh, tazod, talmeh san`atlaridan mohirona foydalanadi. Ya`qub va Yusufi
                            Kan`on obrazlariga murojaat qilib, oshiqning iztirobiyu, ma`shuqaning husnu latofatini
                            kengroq ifodalaydi. Ya`ni oshiq Ya`qubdek hijronda oʻrtanadi. Ma`lumki, iztirob, gʻam-alam,
                            farzand dogʻi Ya`qubning koʻzlarini ojiz qiladi. Yusufi Kan`on goʻzallikda tengi yoʻq
                            paygʻambar, goʻzallik timsolidir. Oshiq ham mahbuba koʻyida oʻrtanadi, oh chekadi. Biroq yor
                            bundan bexabar, unga kimdir ma`lum qilishi lozim.</p><p>Murodiyning Feruzga bagʻishlangan
                            gʻazallarida talmehning goʻzal namunalarini koʻramiz. Talmeh orqali shoir oʻz fikrini
                            moʻ`jaz ifodalashga erishadi. Ya`ni &ldquo;bu shoirga bir ishora bilan chuqur ma`no
                            ifodalash imkonini beruvchi san`atdir&rdquo;<a href="#_ftn1"><!--[if !supportFootnotes]-->
                                [1]<!--[endif]--></a>. Murodiy jahonga mashhur hukmdorlarning nomini keltirish bilan
                            Feruzga boʻlgan hurmatini ifodalaydi:</p><p>Meni dagʻi yuz ming nasr ojiz ila arz
                            aylayin,</p><p>Ey Iskandar, Jamshid, Xisravi Doro agʻniyo (B-15).</p><p>Garchi bu oʻrinda
                            shoir mubolagʻa san`atiga murojaat qilgan boʻlsa-da, Feruz shahzodalarga ham homiy, ham
                            murabbiy sifatida qadrli ekanligi bizga ma`lum.</p><p>Murodiy baytlarining badiiy yetukligi
                            uning ijodiy salohiyatidan, iqtidoridan dalolatdir.</p><p>&ldquo;Haft shuaro&rdquo;
                            majmuasidagi gʻazallar orasida Sultoniy gʻazaliyoti badiiyati va mazmuni bilan oʻziga
                            xoslikka ega. Shoirning Feruzga payrav tarzida bitilgan &ldquo;mening&rdquo; radifli
                            gʻazalining dastlabki baytida tansiq-us-sifot san`ati mohirona qoʻllanadi. Bu maqsadning
                            toʻliqroq roʻyobga chiqishiga xizmat qilgan. Yorning gul sayriga kelmasligi besabab emas.
                            Uning har bir sifati gullarni uyaltirishga qodir:</p><p>Kelmadi gul sayriga shoʻxi parizodim
                            mening,</p><p>Sochi sunbul, yuzi gul, ul qaddi shamshodim mening (B-48).</p><p>Shoir
                            gʻazalda boshdan-oxirigacha mubolagʻa san`atini qoʻllab, oshiqning iztiroblarini toʻliq
                            ifodalashga harakat qiladi. Ma`shuqaning sochi sunbulga, yuzi gulga, qaddi esa shamshod
                            daraxtiga qiyos qilinadi, ya`ni Sultoniy mumtoz adabiyotdagi tayyor tashbehlardan ijodiy
                            foydalanadi. Mubolagʻali tarzda oshiqning ohlari falakkacha yetadi:</p><p>Mehri ruxsori
                            firoqida chekarman oʻtligʻ oh,</p><p>Yetgusi soʻyi samoga ohu faryodim mening.</p><p>
                            Ma`lumki, mehr &ndash; quyosh, issiqlik va yorugʻlik manbai ma`nosida qoʻllaniladi. Baytning
                            dastlabki misrasida shoir istioraga murojaat qilib, yorning ruxsorini mehrga qiyos qiladi.
                            Gʻazal maqtasida esa talmeh san`atini qoʻllab, Feruz misralaridan deyarli koʻchiradi. Chunki
                            Feruz ham &ldquo;aylading&rdquo; radifli gʻazalni Ogahiyga payrav tarzida bitarkan, maqtani
                            shunday yaratadi:</p><p>Komil ersam nazm aro Feruzdek, ermas ajab,</p><p>Ogahiydur she`r
                            mashq aylarda ustodim mening<a href="#_ftn2"><!--[if !supportFootnotes]-->[2]
                                <!--[endif]--></a>.</p><p>Sultoniyda esa misralar quyidagicha hamohang tarzda
                            bitiladi:</p><p>Tong emas, she`ringga tahsin qilsa xalq, Sultoniyo,</p><p>Mashqi she`r
                            aylardadur Feruz ustodim mening.</p><p>Sultoniy &ndash; Ogahiy poetik mahoratidan bahramand
                            boʻlgan shoir. Quyidagi baytlarda u Ogahiy fikrini davom qildirib, tashbeh, mubolagʻa,
                            talmeh san`atlarini uygʻunlikda qoʻllaydi:</p><p>Oydek yuzing anvoridin ravshan erur jumla
                            jahon,</p><p>Bu husningu diydoringga olam gado, men ham gado (B-37).</p><p>Keyingi baytda
                            oʻz nafasi bilan oʻlikka jon bagʻishlagan Iso haqidagi an`anaviy qarashni takrorlaydi.
                            Gʻazal radifi ham oʻziga xos boʻlib, besh soʻzdan tarkib topib, tayanch soʻz &ldquo;gado&rdquo;dir.</p>
                        <p>Misralarda fikr ixcham va ravon ifodalangan boʻlib, badiiy vositalarga boy. &ldquo;O`lgan
                            badan&rdquo;, &ldquo;shirin soʻz&rdquo;, &ldquo;Isosifat guftor&rdquo;, &ldquo;ravshan erur&rdquo;,
                            kabi sifatlashlar gʻazalning ta`sirchanligini oshiradi. Gʻazalda &ldquo;raftor, ruxsor,
                            gulzor, diydor, guftor&rdquo; kabi soʻzlarning ohangdosh boʻlib kelishi an`anaviylikka amal
                            qilishdan dalolatdir. Goʻzallikda beqiyos mahbuba latofatiga olam gado boʻlgach, oshiq gado
                            boʻlmasinmi? Uning birgina shirin soʻzi oʻlikka jon bagʻishlaydi.</p><p>Sultoniy har bir
                            gʻazalida yangicha ifoda yaratishga, mazmundor fikrlar aytishga harakat qilgan. Bayoniy
                            ta`biri bilan aytganda:</p><p>Oningtek she`r uslubida mohir,</p><p>Mohir boʻlubdurlar bu
                            sirru zohir.</p><p>Darhaqiqat, badiiy vositalarga boy misralar buni bevosita isbotlaydi.
                            Shoirning asosiy qahramoni oshiqdir. U &ldquo;mahliqo jonon&rdquo;ni koʻrganda, lutfiga umid
                            bogʻlaganidek, mahbuba uni koʻrganda sitamlarga mubtalo qilishga odatlangan:</p><p>Qolgʻaymu
                            sabru toqat ila jahonda ahbob,</p><p>Ul shoʻx mahliqodin nozu adoni koʻrgach (B-46).</p><p>
                            Baytdagi &ldquo;shoʻx mahliqo&rdquo; sifatlashi orqali ta`sirchanlik ifodalanadi. Gʻazalning
                            keyingi baytida shoir talmeh va tazod san`atlarini qoʻllaydi. Oshiq yor ishqida &ldquo;Majnunshior&rdquo;
                            boʻlgani bois &ldquo;kecha-kunduz&rdquo; alamlarga giriftor:</p><p>Majnunshior boʻlubdur
                            ishqida kecha-kunduz,</p><p>Sultoniy ul parivash qoshi qaroni koʻrgach (B-46).</p><p>
                            Shoirning har bir gʻazalida ishqning yangi qirralari kashf etiladi. &ldquo;Kuydi jonim ul
                            pari oraz namoyon aylagach&rdquo; deb boshlanuvchi gʻazalida Sultoniy ma`shuqa goʻzalligini
                            ta`rif etadi. Mazkur gʻazalda shoir matladan to maqtagacha badiiy vositalardan unumli
                            foydalanadiki, bu gʻazalning mazmun va ta`sirchanligini oshiradi:</p><p>Kuydi jonim ul pari
                            oraz namoyon aylagach,</p><p>Husnidin gulshanni rashki bogʻi rizvon aylagach (B-47).</p><p>
                            Mahbubaning ruxsorini bir koʻrgan oshiqning joni oʻt boʻlib yonadi. Bu xuddi gulshan uning
                            husnini rashk qilganiga oʻxshaydi. Zero, mahbuba ruxsori oldida gulshan oddiy bir narsadir.
                            Istioraning goʻzal namunasini yaratgan shoir soʻnggi baytlarda fikrini bevosita davom
                            ettiradi. &ldquo;Sarv xijlat ichra qoldi qaddi zebosin koʻrub&rdquo;, &ldquo;Gul niqobin
                            chok etib, bagʻrin toʻla qon ayladi&rdquo; kabi tashxislarni mubolagʻali tarzda qoʻllab,
                            ixcham fikr aytishga intiladi. Qomatining goʻzalligidan sarv uyalganidek, gul
                            sharmandalikdan niqobini chok qilgani bois bagʻri qonga toʻladi. Bu oʻrinda shoir tashxisga
                            husni ta`lil san`atini uygʻunlashtirib, oʻz fikrini chiroyli dalillashga intiladi.
                            Shuningdek, yorning zulfi gul yuzining ustida parishon aylasa, &ldquo;Aqlu hushu sabru toqat
                            barchasi firor&rdquo; qiladi. Demak, oshiqning mahbubasi &ndash; goʻzallikda tengi yoʻq
                            malak. Biroq u &ldquo;Koʻz uchidin bir nigah ul la`li xandon aylagach&rdquo; Sultoniy (lirik
                            qahramon) oshiqlar qatorida boʻlishi mumkin singari istiora bilan shoir gʻazalni yakunlaydi.
                            Shu birgina gʻazalning oʻzi shoirning iste`dodini koʻrsatadi.</p><p>Sultoniy gʻazaliyotining
                            aksariyat qismini muhabbatni madh etuvchi she`rlar tashkil etadi. Ularning har birida
                            oshiqning dardlari, ma`shuqaning qiliqlari yangilanadi. Jumladan, quyidagi baytda husni
                            ta`lil san`atiga murojaat qilib, oʻz fikrini chiroyli dalillaydi. Oshiqning yorni koʻrgach,
                            oh chekishi bulbullar xonishiga oʻxshaydi:</p><p>Navolar tortaram ul gul yuzi to oshkor
                            oʻlgʻach,</p><p>Hazin bulbullar aylar nola chun fasli bahor oʻlgʻach (B-47).</p><p>Shoir
                            nafaqat she`riy san`atlarni qoʻllashga, balki badiiy vositalar, qofiya va radiflarga ham
                            alohida e`tibor beradi. &ldquo;Hazin bulbullar&rdquo;, &ldquo;Sabrim uyi vayron boʻlib&rdquo;
                            kabi sifatlash va istiora, mubolagʻali misralar yoxud &ldquo;oshkor, bahor, yor, tor-tor,
                            gul`uzor, barqaror, zebonigor, beixtiyor&rdquo; singari soʻzlarning qofiya sifatida
                            tanlanishi fikrimizni isbotlaydi. Shuningdek,</p><p>Mani Majnun deb ayb aylama, ey zohidi
                            xudbin,</p><p>Qolarmu aqlu hushim bir pari ruxsora yor oʻlgʻach,</p><p>tarzidagi misralarda
                            talmehning ifodalanishi yoki:</p><p>Ochar majlis aro ruxsori gulzorin base gullar,</p><p>
                            Icharga la`lgun may mashomidin dil ul zebo nigor oʻlgʻach,</p><p>kabi baytda tashxis va
                            mubolagʻaning uygʻunlashtirilishi gʻazalning badiiy yetuk va ta`sirchanligini ta`minlaydi.
                            O`z navbatida, bu baytlar orqali kitobxon mahbuba goʻzalligini toʻliqroq tasavvur qila
                            oladi.</p><p>Sultoniy ham gʻazallarida oʻzbek mumtoz adabiyotida an`anaga aylangan &ldquo;gul&rdquo;
                            obraziga murojaat qilib, goʻzallik va nafosat timsoli gulga mahbubani qiyos qiladi.
                            Shoirning &ldquo;gul&rdquo; radifli gʻazali bunga misol boʻladi:</p><p>Boʻldi koʻrgach
                            orazing devona gul,</p><p>Sham`i ruxsoringga chun parvona gul.</p><p>Jilva qilsang bogʻ aro,
                            ey guluzor,</p><p>Sadqa boʻlgʻay boshinga aylona gul (B- 62).</p><p>Anglashiladiki, gulning
                            oʻzi jozibador boʻlsa-da, u inson goʻzalligiga oshiq. Gʻazal baytlari uchun shoir istiora
                            san`atini tanlagan. Ya`ni, &ldquo;gul&rdquo; timsolini shoir omonatga oladi va u orqali
                            yorning goʻzalligini ochib beradi. Gul goʻzallikdan devona boʻlish bilan birga, yorning
                            chehrasiga parvona hamdir. Bu bilan she`rda dunyoning oʻtkinchiligiga ishora qilinadi.
                            Parvona ishq yoʻlida halok boʻlsa, sham` yonib tugaydi. Yorning bir jilvasiga gul boshidan
                            aylanib sadqa boʻlishi tabiiy. &ldquo;Gul&rdquo; obraziga murojaat qilish xalq ogʻzaki
                            ijodidan boshlangan boʻlib, yozma adabiyotda ham keng qoʻllaniladi. Navoiy gʻazaliyotida
                            uning ajoyib namunalari mavjud. Sultoniy she`riyatining takomilida Navoiy ijodining ta`siri
                            seziladi. Navoiy ijodidagi:</p><p>Orazingni bogʻ aro chun koʻrdi, hayron boʻldi gul,</p><p>
                            Bargsiz qoldi, nedinkim, bas parishon boʻldi gul,<a href="#_ftn3">
                                <!--[if !supportFootnotes]-->[3]<!--[endif]--></a> -</p><p>kabi baytlar shoirga ilhom
                            manbai boʻlgani shubhasiz. Shoir Navoiydan ijodiy ta`lim olib, &ldquo;gul&rdquo; obrazining
                            yangi qiyofasini ochib beradi. Shu bois u gʻazal maqta`sida yorni guldan ham rashk qiladi.
                            Shoir gʻazalning deyarli barcha baytlarida tashxis va mubolagʻa san`atini qoʻllagan. Maqtada
                            esa tazodga murojaat qiladi:</p><p>Rashkdin Sultoniy tun-kun oʻrtanur,</p><p>Ilkiga olsa
                            agar jonona gul.</p><p>&ldquo;Gul&rdquo; radifli gʻazalni mumtoz adabiyotda koʻplab
                            shoirlar, jumladan Ogahiy, Feruz, Avaz ijodida ham uchratamiz.</p><p>Shoirning &ldquo;Kelib
                            kulbam aro bir kecha qilgʻil&rdquo; deb boshlanuvchi gʻazalida esa oshiqning gʻam-anduhlari
                            cheksizligini afsonaviy oshiqlar obrazi orqali tasvirlashga erishgan:</p><p>Oy yuzidin
                            majlisim bu kecha jannat bogʻidur,</p><p>Mutribimdur bu kecha bir dilbari Uzro misol
                            (B-64).</p><p>yoxud keyingi baytning &ldquo;Kel, ey Laylivashim, lutf aylabon bazmim aro bir
                            kun&rdquo; misrasidagi afsonaviy ma`shuqa obrazlari talmehning yorqin namunasidir.</p><p>
                            Sultoniy she`riyatida nafaqat ishq mavzusi, balki islom dini aqidalariga amal qilish,
                            Ollohga itoat gʻoyalari ham ancha salmoqli. Zero, shoir din va uning shartlarini bilgan
                            e`tiqodi mustahkam shaxs boʻlgan. Ijodda muayyan yutuqlarga erishmoq ilinjida Ollohdan madad
                            soʻraydi va tashbeh san`ati orqali oʻzini bulbulga qiyos qiladi hamda takrirdan foydalanadi.
                            Baytda yuklama takriri orqali ma`no boʻrttiriladi:</p><p>Ajab sone` erursen, zotinga xayli
                            bashar qilsa,</p><p>Tafakkur har necha, ne ibtido, ne intiho paydo.</p><p>Sultoniy
                            gʻazaliyotida takrirning birikma tarzidagi takroriga ham namunalarni uchratishimiz mumkin.
                            Ma`lumki, takrir san`ati Yo. Ishoqov ta`kidlaganidek: &ldquo;Takrirning mazmun jihatdan ikki
                            tipi mavjud: bu leksik takror va frazeologik takrordir. Frazeologik takror ibora va soʻz
                            birikmasi shaklidagi takrorni oʻz ichiga oladi&rdquo;<a href="#_ftn4">
                                <!--[if !supportFootnotes]-->[4]<!--[endif]--></a>. Sultoniy ijodida takrirning har
                            ikkala turini ham kuzatish mumkin. Yuqoridagi baytda leksik takror bir misraning oʻziga
                            singdirilgan. &ldquo;Bir taraf&rdquo; radifli gʻazalida esa frazeologik takrir she`rning har
                            bir baytida qoʻllangan:</p><p>Boʻston aro gul bir taraf, bechora bulbul bir taraf,</p><p>
                            Faryodi gʻulgʻul bir taraf, hadsiz tagʻoful bir taraf (B-277).</p><p>Aynan shunday radifli
                            gʻazalni Bayoniy va Avaz she`riyatida ham uchratamiz. Sultoniy misralari Avaz gʻazaliga
                            hamohang boʻlgani bois qiyos uchun ustoz shoir gʻazalidan bir bayt keltiramiz. Bu esa Avaz
                            she`riyati ham shahzoda shoirlarga ustozlik vazifasini oʻtaganligini bildiradi:</p><p>
                            Gulshan aro gul bir taraf, ul yuzi anvar bir taraf,</p><p>Ishq ichra bulbul bir taraf, man
                            zori muztar bir taraf<a href="#_ftn5"><!--[if !supportFootnotes]-->[5]<!--[endif]--></a>.
                        </p><p>&nbsp;Majmuadan oʻrin olgan Sodiq she`riyati ham oʻziga xos uslub va mavqega ega. Sodiq
                            adabiy an`analarni davom qildirgani holda badiiy san`at va tasviriy vositalarni oʻz
                            gʻazallarida mohirona qoʻllaydi:</p><p>Karam aylab birovga sarvi guldek qiymati ruxsor,</p>
                        <p>Birovga ayladi qumriyu bulbuldek figʻon paydo (B-155).</p><p>Bir baytning oʻzida &ldquo;sarvi
                            guldek&rdquo;, &ldquo;qumriyu bulbuldek&rdquo; deya tashbeh qoʻllash shoirning mahoratidan
                            darak beradi. &ldquo;Nedur&rdquo; radifli gʻazalida mahbubani bevosita gulga qiyos qilib,
                            istioradan oʻrinli foydalanadi. Shoir gʻazallarida ham oʻzbek mumtoz adabiyotimizdagi
                            an`anaviy uch obraz - oshiq, mahbuba va raqib uchraydi:</p><p>Javru zulmlar man zorga, ey
                            gul, ayon etmak nedur,</p><p>Kim gʻami hajring bila bagʻrimni qon etmak nedur (B-194).</p>
                        <p>Mahbuba misoli bir gul boʻlsa-da, maqsadi oshiqqa azob berish, uni hijron azobida oʻrtashdan
                            iborat. Shoir fikrini davom qildirib, oshiq qalbiga ogʻriq beruvchi savollarga yana murojaat
                            qiladi. Gʻazalda &ldquo;bulbul kabi ohu figʻon etmak&rdquo;ni odat qilgan, &ldquo;falakka
                            oʻz ahvolidin&rdquo; shikoyatlar etayotgan oshiq dardini yorqin tasvirlab beradi.</p><p>
                            Ogahiyga payrav tarzida bitilgan &ldquo;Otashin ruxsorin ul oy ochsa bazm aro&rdquo; deb
                            boshlanuvchi gʻazalida oshiq yordan madad kutadi. Dastlabki misraning oʻzidayoq istiora va
                            sifatlashga duch kelamiz. &ldquo;Otashin ruxsor&rdquo; sifatlashini &ldquo;ul oy&rdquo;
                            istiorasiga bogʻlaydi. Yoxud keyingi baytlardagi &ldquo;toza jon&rdquo;, &ldquo;la`li labi&rdquo;
                            sifatlashlari shoirning badiiy vositalardan oʻrinli foydalanganidan dalolatdir. Gʻazal
                            aruzning yengil, oʻynoqi vazni ramali musammani maqsur bahrida yozilgan:</p><p>Koʻzi
                            oʻltursa agar, gʻam yoʻqki, topgum toza jon,</p><p>Aylasa la`li labidin bir boʻsa ehsongina
                            (B-154).</p><p>Shuningdek, Sodiq gʻazallarida saboga murojaat qilish an`anasi ham uchraydi.
                            Bir gʻazalning oʻzida shoir oshiqning iztiroblarini aniqroq tasvirlash maqsadida &ldquo;sabo&rdquo;ga
                            ketma-ket murojaat qiladi. &ldquo;Sabo&rdquo; &ndash; oshiq dardini mahbubaga yetkazuvchi
                            vosita. &ldquo;Ey sabo, mandin salom ul sarvari xoʻbona ayt&rdquo;, &ldquo;Ey sabo, rahm
                            aylabon ul ofati davrona ayt&rdquo;, &ldquo;Ey sabo, yigʻlab sanga arzini der, Sodiq gʻarib&rdquo;
                            misralari fikrimizni bevosita tasdiqlaydi. Sodiq sabo obrazi orqali nido san`atini qoʻllagan
                            boʻlsa, mazkur misrasida mubolagʻai igʻroqqa murojaat qiladi: &ldquo;Furqatida qolgʻonim yuz
                            ming tuman armon aro&rdquo;, &ndash; deya aqlan ishonish mumkin boʻlsa-da, oshiq dardini
                            hayotda yuz berishi mumkin boʻlmaydigan darajada kuchaytiradiki, bu gʻazalning
                            ta`sirchanligini oshiradi. Keyingi baytda ma`shuqaga xos sifatlarni ketma-ket sanab, tansiq
                            us-sifot san`atini qoʻllaydi:</p><p>Vasling istab koʻzlarim doim sirishkafshonligʻ,</p><p>Ul
                            yuzi gul, sochi sunbul, koʻzlari mastona ayt.</p><p>Garchi oshiq shu qadar ayriliqu
                            hijronlarga giriftor qolgan boʻlsa-da, &ldquo;va`dasi yolgʻon mohitobon&rdquo;, &ldquo;ofati
                            davron mahliqo jonon&rdquo;, toʻgʻrirogʻi, &ldquo;ul rahmsiz sulton&rdquo;ning vasliga vosil
                            boʻlmoq istaydi.</p><p>Sodiq she`riyatida &ldquo;ne sud&rdquo;, &ldquo;hanuz&rdquo;, &ldquo;istamas&rdquo;,
                            &ldquo;arzimas&rdquo; radifli badiiy ta`sirchan gʻazallarni uchratish mumkin. Ularning har
                            birida lirik qahramon ruhiy olamining muayyan qirrasi yoritiladi. Bu olamda oshiqning
                            iztiroblari, ma`shuqaning &ldquo;makru hiylalari&rdquo; turlicha namoyon boʻladi. Shoir bir
                            gʻazalida husni ta`lil san`ati orqali oʻz fikrini chiroyli dalillaydi. Uning fikricha,
                            falakdagi oy ma`shuqaning ruxsori bilan goʻzallik borasida bahsga kirishganda,
                            sharmandalarcha magʻlub boʻladi. Quyosh yor mehri yangligʻ issiqlik baxsh etolmaganidek,
                            sochlarini koʻrgach, sunbul qiynaladi. Bu bilan shoir mubolagʻa san`atini ham ishga
                            soladi:</p><p>Oy chekib sharmandaligʻ, mehring nuridin oftob,</p><p>Voy, soching savdosi
                            solmish sunbul a`zosiga tob (B-158).</p><p>&nbsp;Koʻrib turganingizdek, shoir oy, oftob,
                            sunbul timsollarini yor goʻzalligi bilan qiyoslaydi. Yana bir gʻazalida esa tansiq
                            us-sifotga murojaat qilib, yorga xos xususiyatlarni ketma-ket sanaydi:</p><p>Oldi koʻnglumni
                            mani bir tiflvash jonongina,</p><p>Qoshi yo, kipriklari oʻq, koʻzlari fattongina
                            (B-156).</p><p>&nbsp;Baytdagi qoshni yoy, kiprikni oʻq, koʻzlarni fitna soluvchiga
                            oʻxshatish mumtoz adabiyotda Sodiqqacha boʻlgan an`anadir. Shoir gʻazallarida soʻz
                            oʻyinlari, ma`no nozikliklari bir-biridan goʻzal tasvirlanadi. Mazkur baytda misralarni
                            bir-biriga zid keltirish orqali muqobala san`atining namunasini yaratadi:</p><p>Baski,
                            noshod aylading Sodiqni hijroning aro,</p><p>Xushturur emdi visoling ichra boʻlsa komyob
                            (B-158).</p><p>Yoxud boshqa bir baytida tazod san`ati orqali oshiqning gʻam-alamini
                            tasvirlab, yordan shafqat soʻraydi:</p><p>Jabri bedoding chekarman kecha-kunduz, ey
                            pari,</p><p>Bermagil tangri uchun men zorga muncha azob.</p><p>Shoir gʻazallarida oshiq
                            dardi-yu mahbuba goʻzalligi mubolagʻali tarzda tasvirlanadi. Ma`lumki, mubolagʻada oshiqning
                            gʻamlarini boʻrttirib, yorning goʻzalligini yanada goʻzalroq tasvirlashga erishadi:</p><p>
                            Orazin koʻrgan kishi xurshidi raxshon istamas,</p><p>Koʻyida tutgan makon firdavsi rizvon
                            istamas (B-183).</p><p>Yorning orazi quyoshdan afzal boʻlganidek, ishqida oʻrtanmoqlik
                            jannatdan yaxshiroqdir. Yoxud &ldquo;qaddi raftorigʻa&rdquo; koʻngil qoʻygan kishi &ldquo;sarvi
                            xiromon istamas&rdquo; yangligʻ bir-biriga qiyosan olingan misralarda istiora, mubolagʻa
                            san`atlarini uygʻunlikda ifodalagan. Shoir tansiq us-sifot san`atini gʻazal boʻylab davom
                            ettiradi. Yorning har bir fazilatini tabiatning bir moʻ`jizasiga qiyos qiladi. Jumladan,
                            &ldquo;xoli xatti&rdquo; anbaru rayhonga, &ldquo;labining shahdi&rdquo; obi hayvonga
                            oʻxshatilishi yoki &ldquo;qoshi yoy, koʻzi fatton, kiprigi paykon&rdquo; singari istioralar
                            bilan maqtalgan pari lirik qahramon uchun huru gʻilmondan afzaldir. Shuningdek, Sodiq
                            she`riyatida Avaz gʻazallariga hamohanglik mavjud boʻlib, uni bevosita &ldquo;hanuz&rdquo;
                            radifli gʻazalida uchratishimiz mumkin. Sodiq shoir gʻazallaridagi ayrim soʻzlarning
                            sinonimlarini qoʻllaydi. Jumladan, Avaz gʻazalining dastlabki misrasidagi &ldquo;Bir nozanin
                            ishqi aro shaydovu maftunman hanuz<a href="#_ftn6"><!--[if !supportFootnotes]-->[6]
                                <!--[endif]--></a>&rdquo; misrasi Sodiqda &ldquo;Bir pari sham`i ruxi hajrida koʻz
                            giryon hanuz&rdquo; tarzida qoʻllaniladi. Keyingi misralarda esa Avaz gʻazalidagi &ldquo;ey
                            rafiq&rdquo; murojaati oʻrnida Sodiq &ldquo;ey doʻstlar&rdquo; tarzidagi sinonimni
                            keltiradi. Gʻazal aruzning ramali musammani mahzuf vaznida yozilgan boʻlib, misralar sodda
                            va ravondir. Sodiq gʻazal baytlarida an`anaviy lirikadagi jam` va tafriq san`atiga murojaat
                            qiladi:</p><p>Doʻstu dushman ishq aro ahvoli zorimni koʻrub,</p><p>Biri nolondur holimgʻa,
                            biri xandondur hanuz (B-194).</p><p>Bayoniy gʻazaliyotidagi badiiy mahoratning salmoqli
                            qismi san`atlarni hamda shiru shakar uslubini keng qoʻllashda namoyon boʻladi. Quyida
                            shulardan ayrim namunalar keltiramiz:</p><p>Talmeh, qaytariq:</p><p>Majnun Bayoniydek nechun
                            majnunshior oʻlmas gahi,</p><p>Yurmas junun dashtidagi anduh sahrosi aro (B-528).</p><p>
                            Savol-javob va shiru shakar:</p><p>Dedi: ul oy, ne kora sen, guftam havodori shumo.</p><p>
                            Dedi: nedur matlab sango, guftamki diydori shumo (B-532).</p><p>Qaytariq va xitob:</p><p>
                            Rangi ma`ni boʻldi chun nayrangi ma`nidin ayon,</p><p>Urma nayrang ila hifzi lofi
                            ma`nidorliq (B-545).</p><p>&ldquo;Haft shuaro&rdquo; majmuasida iste`dodli shahzoda shoir
                            Sa`diy she`riyati e`tiborga molikdir. Shoir gʻazallarida goʻzal va ta`sirchan tashbehlar,
                            ohang va badiiyat unsurlari mujassam. Ogahiy gʻazaliga payrav tarzida bitilgan &ldquo;ustina&rdquo;
                            radifli gʻazalida fikrlar sodda va ravon ifodalangan boʻlib, unda tashbeh, tazod va talmeh
                            san`atlarini ikki baytda mujassamlashtirib, fikrni mubolagʻali tasvirlasa, boshqa gʻazalida
                            badiiy san`atlarni ketma-ket qoʻllaydi.</p><p>Shoirning lirik qahramoni ham oshiqdir. U
                            &ldquo;roʻzu shab&rdquo; yor ishqida &laquo;nolai afgʻon&raquo; qilganidan ayanchli ahvolga
                            tushgan. Bir baytning oʻzida tazod, tashbeh, istiora san`atlari, sifatlash vositasini
                            mujassam qiladiki, bu gʻazalning badiiyligini oshiradi:</p><p>Nolai afgʻon qilurman roʻzu
                            shab bulbul kabi,</p><p>Gul yuzining furqati ichra boʻlub holim xarob (B-255).</p><p>Shoir
                            hijronni dashtga qiyos qiladi va istioraning goʻzal namunasini yaratadi. Bu dashtda
                            tashnalikka mubtalo boʻlgan oshiq yorga tomon intiladi. Bu holatdan oshiqni qutqarmoq uchun
                            jomi visol lozim. Aks holda, dashti hijronda oshiqning &ldquo;bagʻri kabob&rdquo; boʻlishi
                            tabiiy:</p><p>Tashnadurman dashti hijroning aro, ey nozanin,</p><p>Lutf aylab jomi vasling
                            birla qilgʻil komyob.</p><p>&ldquo;Laziz&rdquo; radifli gʻazalida esa oshiq yorning qoʻlidan
                            zahar ichishga ham tayyor. O`zgalarning izzatidan ma`shuqaning jabru jafolari afzal:</p><p>
                            Zahrni ichsamki dastingdan sani,</p><p>Ul asalni noʻsh qilgʻondin laziz (B-272).</p><p>
                            Shoirning fikricha, yorning goʻzalligidan uyalgan quyosh botib ketishni afzal koʻradi. Tun
                            bagʻrini yorib turgan oy esa yor bilan goʻzallik borasida bahslasha olmaganidan tong qa`riga
                            yashirinadi. Bu yangligʻ goʻzallik uchun oshiq &ldquo;izzati dunyoi dun&rdquo;dan kechib,
                            firoqu ayriliq azoblariga ham rozi boʻladi.</p><p>Sa`diy &ldquo;Boʻlub ul moh mening qatlim
                            uchun bogʻladi bel&rdquo;, &ldquo;Xurshidi ruxsoring kelur&rdquo; misralarida istiora,
                            &ldquo;Ul qilib javru sitam, soʻng aylabon lutfu karam&rdquo; kabi satrlarda tazod orqali
                            oshiq-ma`shuqlar ishqini tasvirlaydi. Shuningdek, talmeh san`atini tansiq us-sifot bilan
                            uygʻunlikda qoʻllaydi:</p><p>Vomiqu Farhod ila Majnun hadisi shoʻxdin,</p><p>Dam urargʻa
                            muttasil bu oshiqi zor ollida (B-253).</p><p>Shoir she`rlarida &ldquo;Lutf etibon, ey sabo,
                            arzim degil yor ollida&rdquo; singari nido, &ldquo;Aylagil bir-bir bayon ul mohi ruxsor
                            ollida&rdquo; kabi mukarrarlar bisyordir. Bunday san`atlar qoʻllanishi misralar badiiyligini
                            oshirishga xizmat qiladi. Shoirning lirik qahramoni tunning intihosini koʻrish ilinjida
                            yashaydi. Uning nazarida, tong visol bilan barobar. Sa`diy she`rlari Laffasiy ta`biri bilan
                            aytganda: &ldquo;ma`ni jihatdan har bir bayti bir gavhari yakto erdi&rdquo;.</p><p>
                            Sa`diyning &ldquo;yigit&rdquo; radifli gʻazalida badiiyatning goʻzal namunalari
                            berilgan:</p><p>Aylamish aqlim adam bir masti beparvo yigit,</p><p>Gul yuzigʻa bulbuli
                            koʻnglumni ham shaydo yigit, &ndash;</p><p>kabi tashbeh san`ati yoki &ldquo;Koshki bu tiyra
                            kulbam ravshan etsa gul yuzi&rdquo; tarzidagi tazodga murojaat fikrimizni isbotlaydi.
                            Shuningdek, shoir &ldquo;Misli Majnun kezdiribon koʻchai furqat aro&rdquo;, &ldquo;Olam
                            ahligʻa boʻlmish dami Iso&rdquo; kabi talmehlardan oʻrinli foydalanadi. Keyingi baytdagi
                            muqobala san`ati esa shoir fikrini rivojlantirib, ziddiyatni yuzaga keltiradi:</p><p>Shod
                            etib man notavon koʻnglumni yolgʻon ahd ila,</p><p>Gʻamligʻ etdi boʻlmay ahdida qadampaymo
                            yigit.</p><p>&ldquo;Haft shuaro&rdquo; majmuasidagi iqtidorli ijodkorlardan biri Otabek
                            toʻra Oqildir. Oqil she`rlarida badiiyat rang-barang shakllarda namoyon boʻladi. Shoir oʻz
                            gʻazallarida oshiq iztirobi, yorning jozibasini tarannum etadi. Oshiqning fikricha,
                            ma`shuqaning goʻzalligi oldida quyosh bir zarradek deya mubolagʻai gʻuluvni tashbeh bilan
                            uygʻunlashtiradi:</p><p>Mahjabinimning jabinidin xijil ming mohtob,</p><p>Orazi oʻtrusida
                            bir zarra yangligʻ oftob (B-476).</p><p>Yoxud gʻazalning keyingi misralarida tansiq us-sifot
                            san`atini tashbihi mafruq bilan birga qoʻllaydi. Ya`ni, yorga xos xususiyatlarni ketma-ket
                            keltirib, ularni oʻzaro farqli ravishda alohida-alohida narsalarga qiyos qiladi. Bayda shoir
                            an`anaviy tashbehlardan oʻrinli foydalanadi:</p><p>Xatti rayhon, zulfi sunbul, qomati sarvi
                            sihi,</p><p>La`li jonbaxshu koʻzi qotil, soʻzi durri xushob.</p><p>Gʻazalning har bir bayti
                            badiiylik kasb etadi. Misralarda fikr aynan takrorlanmaydi. Balki yorning yangi sifatlari
                            ochilib boradi:</p><p>Noz raxshin sekretib, maydonda boʻlsa jilvagar,</p><p>Rashk oʻtigʻa
                            mahliqolar jonini qilgʻay kabob.</p><p>Yorning nozu ishvalarini raxshga &ndash; otga
                            oʻxshatadi va istiora san`atini qoʻllaydi. Mahbuba shu darajada goʻzalki, mahliqolar ham
                            rashkdan oʻt boʻlib yonadi.</p><p>Oqil har bir gʻazalida tashbehning yangi qirralarini kashf
                            etadi:</p><p>Boshima har balo ishqing aro bitsa gar.</p><p>Qaytmagʻum hargiz raqib ahlidek
                            aylab shitob (B-477).</p><p>Oshiq ishq dardidan qanchalik oʻrtansa ham, bu yoʻldan
                            qaytmaydi. Ishq yoʻli mangulik, undan qaytmoq mushkuldir. Keyingi baytda istiora va
                            tashbehni uygʻunlikda qoʻllaydi:</p><p>Bormagʻil, ey gul, raqib ahlini bazmi sori,</p><p>Man
                            kabi qilgʻil oni furqat oʻtigʻa kabob.</p><p>Shoir baytlarida mukarrar san`atiga ham
                            murojaat qiladi:</p><p>Ayladim onlarga arz ishqida shaydo erkanim,</p><p>Bir-biridin
                            qildilar lutfni bisyor shoʻx (B-487).</p><p>Oqil, ayniqsa, tajohuli orif san`atining
                            ustasidir. Atoulloh Husayniyning ta`kidlashicha, &ldquo;tajohuli orif andin iboratturkim,
                            soʻzlaguvchi bir nimani bilur, ammo bir nuqta bilan oʻzini bilmaganidek koʻrsatur<a
                                href="#_ftn7"><!--[if !supportFootnotes]-->[7]<!--[endif]--></a>&rdquo;. Bu san`atga xos
                            lirik qahramon ruhiyatidagi vazminlik, hayratomuz teranlik va ta`sirchan joziba Oqil
                            gʻazallarida ham yorqin ifodalangan. Buni ritorik savol tarzidagi quyidagi gʻazalning toʻla
                            tahlili asosida dalillaymiz:</p><p>Aqlim olgʻon gul va yo sarvi sanubarmu ekan?</p><p>Yoʻqsa
                            bir zebo qadu gul yuzli dilbarmu ekan? (B-496)</p><p>Oqil mumtoz adabiyotimizda an`anaga
                            aylangan tashbehlardan oʻrinli foydalanadi va uni tajohuli orif zamiriga singdiradi:</p><p>
                            Lablarida zohir oʻlgʻon xatti anbarmudurur,</p><p>La`l uza yoxud zumurrad birla zevarmu
                            ekan?</p><p>Yorning ta`rifiga til ojiz, u har qanday maqtovga loyiq, keyingi baytda fikrini
                            davom qildirib, tansiq us-sifot va talmeh san`atlarini birgalikda qoʻllaydi:</p><p>
                            Musotakallum, mohyuz, anbarxatu ham mushkboʻ,</p><p>Oshiqkushu jallodxoʻ yori jafokoring
                            kelur.</p><p>Shoir &ldquo;bir boqishda muhabbat&rdquo; aqidasiga amal qilgan holda oʻz
                            fikrini rivojlantiradi va bevosita takrir san`atini qoʻllaydi:</p><p>Ishq aro oshiq anga man
                            zordek yoʻqtur vale,</p><p>Garchi oshiqlar ango bisyordur, bisyordur (B-483).</p><p>Shoir
                            ta`biricha, yorning oshiqlari koʻp boʻlsa-da, bu borada lirik qahramon oʻzini tanhodek his
                            qiladi. Ollohning ta`rifiga bagʻishlangan &ldquo;paydo&rdquo; radifli gʻazalida esa amr va
                            nahiy usulini qoʻllab, Ollohga oʻz qalb kechinmalarini bayon qiladi. O`z navbatida,
                            Tangridan istigʻfor soʻraydi:</p><p>O`tib soʻzi xatosin, yo rab arzini qabul etkil,</p><p>
                            Senga loyiq sipos ayturgʻa yoʻq Oqilgʻa had paydo.</p><p>Oqil gʻazaliyoti badiiylikda
                            san`atlar va tasviriy vositalarni birga mujassam etganligi bilan alohida ajralib turadi.
                            Quyidagi baytlar bunga dalildir:</p><p>Vasl eli har dam topar ermish labidin toza jon,</p>
                        <p>Bilmon ul obi baqomu yoʻqsa kavsarmu ekan?</p><p>Ne boʻlur Oqil kibi arzimni izhor
                            aylasam,</p><p>Boqmagʻudek holima ham yori kofirmu ekan?</p><p>Bu gʻazal ramali musammani
                            mahzuf vaznida boʻlib, taqtesi quyidagicha: - V- - -V - - - V - - - V - . Ishqiy mavzudagi
                            mazkur gʻazal mahbubaning ta`rif-tavsifiga bagʻishlanadi. Payrav boshdan-oxir tajohuli orif
                            san`atiga asoslanib yaratilgan. &ldquo;Bilib turib bilmaslikka olish&rdquo; ma`nosini
                            ifodalovchi ushbu she`riy san`at shoirning baytda aks ettirilayotgan biron obrazli iborani
                            aniq aytmasdan oʻzini bilib bilmaslikka olgandek koʻrsatishni nazarda tutadi.</p><p>
                            Gʻazalning birinchi baytida lirik qahramon aqlimni olgan gulmi yoki sarvi sanuvbarmi yoxud
                            zebo qad, gul yuzli dilbarmu deya sevgilisi ruxsorini gulga, qaddini sarvi sanuvbarga
                            oʻxshatadi. Bunda yuz bilan gul, qad bilan sarv va sanuvbar oʻrtasida qiyosiy munosabatni
                            bilib-bilmaslikka olish shaklida ifodalash natijasida tajohuli orif san`ati hosil qilingan.
                            Ayni shu baytda jam` san`ati ham mavjud. &ldquo;Jam` narsa va tushunchalarni biron belgi
                            boʻyicha baytda jamlab, ular oʻrtasidagi munosabat asosida biron obrazli fikrni ifodalash
                            san`atidir<a href="#_ftn8"><!--[if !supportFootnotes]-->[8]<!--[endif]--></a>&rdquo;. Mazkur
                            baytda mahbuba obrazi bilan gul rang belgisi boʻyicha, qomati bilan sarv va sanuvbar tiklik
                            belgisi boʻyicha jamlanib, ular oʻrtasidagi oʻxshashlik munosabati asosida ta`sirchan badiiy
                            fikr ifodalashga erishilgan.</p><p>Uchinchi baytda ham tajohuli orif san`ati orqali mahbuba
                            labi jon bagʻishlashda obi baqo (mangu tiriklik suvi) va kavsar (jannat bulogʻi)ga oʻxshashi
                            ta`kidlanadi. Gʻazal maqta`sida ham savol vositasida mahbuba goʻzalligini ta`sirchan
                            ifodalash koʻzga tashlanadi.</p><p>Koʻrinadiki, gʻazalning har bir baytida biron oʻxshatish
                            keltirilgan boʻlib, shoirning oʻzini bilib bilmaslikka solishi misralar jozibadorligini
                            ta`minlagan.</p><p>Oqil ham Sodiq va Sultoniy kabi Avaz ijodidan bevosita ilhomlanib ijod
                            qilgan boʻlib, buni shoirning &ldquo;bila&rdquo; radifli gʻazalida koʻrishimiz mumkin.
                            Jumladan, Avaz ijodida:</p><p>Ey kim, tamanno aylama bazm etmak ul jonon bila,</p><p>Kim uns
                            tutgʻaymu pari suhbat tuzub inson bila<a href="#_ftn9"><!--[if !supportFootnotes]-->[9]
                                <!--[endif]--></a>.</p><p>Oqilda:</p><p>Bu kecha bazm etdi kim, bilmon bizi jonon
                            bila.</p><p>Kim oʻturdi kechani to tonggʻacha afgʻon bila (B-64).</p><p>Oqil gʻazalning har
                            bir misrasi boshida &ldquo;Kim&rdquo; soʻzini qoʻllash bilan leksik takror namunasini
                            yaratadi .</p><p>Gʻazallar badiiyligini oshirish maqsadida shoirlar qofiya, radif san`ati
                            qoidalariga e`tibor qilishadi. Jumladan, Sa`diyning &ldquo;oqibat&rdquo; radifli gʻazalida
                            &ldquo;parishon, giryon, farovon, oh-afgʻon, pushaymon, shodu xandon&rdquo; soʻzlari qofiya
                            sifatida tanlangan. Bu qofiyadosh soʻzlarda &ldquo;n&rdquo; undoshi raviydir. Raviy harfi
                            qoidaga koʻra qofiyalanuvchi soʻzlar tarkibida aynan takrorlanib kelgan.</p><p>Sodiqning
                            &ldquo;istamas&rdquo; radifli gʻazalida esa qofiyaning zulqofiyatayn &ndash; misralarda ikki
                            soʻz ohangdoshligidan foydalanilgan:</p><p>Kom topmoq orzu qilgʻon labining shahdidin</p><p>
                            Ranj chekmas, zulmat ichra obi hayvon istamas.</p><p>Qoshi yoyigʻa nedin mujgon oʻqi
                            solmishdurur,</p><p>Qatliom etmak gar ul chashmi fatton istamas(B-364).</p><p>Sultoniyning
                            &ldquo;koʻzing&rdquo; radifli gʻazalining bir baytida esa sajli qofiya qoʻllanadi:</p><p>
                            Behad sitam uzra sitamlar aylabon hajr oʻtigʻa</p><p>Yoqdi mani subhu maso, ey dilbar siymo,
                            koʻzing(B-282).</p><p>Shoirning &ldquo;koʻrgach&rdquo; radifli gʻazalida qofiyaning musajja
                            turini uchratamiz:</p><p>Ma`shuqi qilsa bedod, oshiq boʻlur base shod,</p><p>Oyo, ne holat
                            boʻlgʻay ondin davoni koʻrgach.</p><p>Sodiqning &ldquo;hanuz&rdquo; radifli gʻazalida ham
                            sajli qofiya mavjud:</p><p>Doʻstu dushman ishq aro ahvoli zorimni koʻrub,</p><p>Biri
                            nolondur holima, biri xandondur hanuz(B-357).</p><p>Bu baytda laff va nashr san`atini ham
                            qoʻllab, misralar ohangdorligini oshirishga erishadi. Ya`ni &ldquo;doʻst &ndash; nolon&rdquo;,
                            &ldquo;dushman&ndash; xandon&rdquo; sifatida tasvirlanadi.</p><p>Oqil gʻazallari badiiyati
                            tamomila oʻzgachalik kasb etadi. Shoir &ldquo;Bir boqib olgʻon mani aqlimni ul dildordur&rdquo;
                            misrasi bilan boshlanuvchi gʻazalining baytlarida qofiyani takror qoʻllash orqali ta`kidni
                            kuchaytiradi:</p><p>Husn aro guldek yuziga bulbuloso zorman,</p><p>Ul pari ruxsori chun
                            gulzordur, gulzor.</p><p>&ldquo;Bila&rdquo; radifli gʻazalida qofiyadosh soʻzlarni raviy
                            sifatida &ldquo;n&rdquo; undoshi birlashtiradi. Baytlarda &ldquo;jonon, afgʻon, qon, jon,
                            ehson, hijron, mahitobon, xandon, giryon, nolon&rdquo; kabi asosiy ma`no qirralarini
                            boʻrttiruvchi soʻzlar qofiyadosh boʻlib kelgan. Shuningdek, &ldquo;Kim&rdquo; soʻzi har
                            misra boshida qoʻllanib, takrir san`atini vujudga keltiradi:</p><p>Kim qolib ul oydin ayru
                            zulmati hijron aro,</p><p>Kim qilur bazmini ravshan ul mahitobon bila(B-64).</p><p>Shu bilan
                            birga, ayrim gʻazallarda qofiyadosh soʻzlarning nomuvofiqligi ham uchraydi. Sa`diyning ba`zi
                            gʻazallaridagi fe`l soʻz turkumiga mansub ayrim soʻzlar toʻliq ohangdosh boʻlolmaydi. Bunday
                            soʻzlarga mayl, shaxs-son yoki zamon qoʻshimchalari qoʻshilib, qisman ohangdoshdek
                            koʻrinadi, xolos. Biroq bu qoʻshimchalarni soʻzdan soqit qilsak, hech qanday qofiyadoshlik
                            boʻlmaydi. Qofiyaning bunday nomuvofiqligi <strong>iyto</strong> deb yuritiladi<a
                                href="#_ftn10"><!--[if !supportFootnotes]-->[10]<!--[endif]--></a>.</p><p>Bevafogʻa
                            koʻngul <strong>oldurmagʻil</strong> hech,</p><p>Xudo yodin qoʻlingdan
                            <strong>bermagʻil</strong> hech(B-447).</p><p>Yoxud keyingi misralardagi &ldquo;yolbormagʻil,
                            kirmagʻil, doʻndirmagʻil, toydurmagʻil&rdquo; kabi qofiyadosh soʻzlar bevosita<strong>
                                iyto</strong>ni vujudga keltirgan.</p><p>Sa`diyning &ldquo;abas&rdquo; radifli gʻazalida
                            ham iyto hodisasi mavjud. Fe`l turkumiga mansub soʻzlar harakat nomi shaklida
                            qoʻllanilgan:</p><p>Beibodat umr <strong>oʻtkarmak</strong> abas,</p><p>Dilga gʻayri Olloh
                            <strong>kelturmak</strong> abas(B-498).</p><p>Shuningdek, qolgan oʻrinlarda &ldquo;demak&rdquo;
                            soʻzlari har ikki baytda qofiya sifatida tanlanadi:</p><p>Haqni zikri har soʻzingda
                            boʻlmasa,</p><p>Ul soʻzing jumlasin demak abas.</p><p>&hellip; Sa`diyo, boʻlmasang omil
                            oʻzing,</p><p>Bu soʻzingni xalqgʻa demak abas.</p><p>Qolgan ikki baytda esa &ldquo;etmak&rdquo;
                            soʻzi qofiyadosh boʻlib kelgan.</p><p><!--[if !supportFootnotes]--></p><p>&nbsp;</p>
                        <!--[endif]--><p><a href="#_ftnref1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Ishoqov
                            Yo. Soʻz san`ati soʻzligi. T.: Zarqalam, 2007.- B. 70.</p><p><a href="#_ftnref2">
                                <!--[if !supportFootnotes]-->[2]<!--[endif]--></a> Feruz. Elga shohu ishqqa qul. T.:
                            Adabiyot va san`at, 1994. &ndash;B.57.</p><p><a href="#_ftnref3">
                                <!--[if !supportFootnotes]-->[3]<!--[endif]--></a> Navoiy A. Qora koʻzum. &ndash;T.:
                            Adabiyot va san`at, 1988. -B.434.</p><p><a href="#_ftnref4"><!--[if !supportFootnotes]-->[4]
                                <!--[endif]--></a> Ishoqov Yo. Soʻz san`ati soʻzligi. T.: Zarqalam, 2006. -B.112.</p><p>
                            <a href="#_ftnref5"><!--[if !supportFootnotes]-->[5]<!--[endif]--></a> Avaz Oʻtar. Tanlangan
                            asarlar. T.: Oʻzbekiston, 1956- B.213.</p><p><a href="#_ftnref6">
                                <!--[if !supportFootnotes]-->[6]<!--[endif]--></a> Avaz Oʻtar. Tanlangan asarlar.
                            T.:Oʻzbekiston, 1956- B.97.</p><p>&nbsp;</p><p><a href="#_ftnref7">
                                <!--[if !supportFootnotes]-->[7]<!--[endif]--></a> Husayniy Atoulloh. Badoyi`
                            us-sanoye`. T., 1981. -B.83.</p><p><a href="#_ftnref8"><!--[if !supportFootnotes]-->[8]
                                <!--[endif]--></a> Hojiahmedov A. Mumtoz badiiyat malohati. T.: Sharq, 1999. - B.35.</p>
                        <p><a href="#_ftnref9"><!--[if !supportFootnotes]-->[9]<!--[endif]--></a> Avaz Oʻtar. Tanlangan
                            asarlar. T.: Oʻzbekiston, 1956- B.56.</p><p>&nbsp;</p><p><a href="#_ftnref10">
                                <!--[if !supportFootnotes]-->[10]<!--[endif]--></a> Is&rsquo;hoqov Yo. Soʻz san`ati
                            soʻzligi. T.: Zarqalam, 2006. &ndash;B.109.</p>

                    @endif

                    @if($lang=="en")
                        <p>In exile, the lover begs for a lover. He does not want to show his grief to his opponent. The
                            poet uses the art of tazad to express the sad state of the lover, his suffering day and
                            night.</p><p>It is known that in classical literature the art of tazod is used in two ways.
                            In the first method, the tazad is quoted only in a few verses of the ghazal, and in the
                            second, the ghazal is based on the art of tazad from beginning to end. In particular, Murodi
                            uses the first method of tazad in his ghazal &quot;seeing&quot; and uses this art
                            effectively in two verses. In the first verse, when he continues his thoughts and sees a
                            pair of sad-faced moons, the pain is ashamed of this joy. In one verse, the poet uses the
                            art of metaphor and allegory in harmony:</p><p>Mahzun koʻngul shod oʻlgʻusi ul mohitobonin
                            koʻrub,</p><p>Goʻyoki dard ahli boʻlur masrur darmonin koʻrub (P-6).</p><p>In the next
                            verse, the poet creates the art of tazod on the basis of a direct contradiction of action
                            and situation. The lover&#39;s heart is not at peace, as in the case of his mistress&#39;s
                            despair:</p><p>Man zorgʻa har tun agar boʻlsa muyassar orazi,</p><p>Jam` aylay olmon
                            koʻnglumi zulfi parishonin koʻrub.</p><p>The poet used the traditional image of a peacock to
                            express the beauty of his mistress. It is known that this image is compared to the march in
                            our classical literature. However, when the peacock in Muradi&#39;s ghazal saw the lover&#39;s
                            behavior, he put a tent on his face in embarrassment. Nargis is also ashamed of her lover&#39;s
                            eyes, as if she refused to smile when she saw him. Yor&#39;s eyes are seductive, and they
                            can make a lover uneasy. The poet describes it through the art of allegory, allegory and
                            rhetoric:</p><p>Gʻuncha tabassumdin qolur gar koʻrsa sayri bogʻ aro,</p><p>Nargisga
                            xijlatdur base ul chashmi fattonin koʻrub</p><p>Tovus tortar boshigʻa sharmi xijolat
                            chodirin,</p><p>Gar jilva qilsa ul pari sarvi xiromonin koʻrub (P-6).</p><p>According to the
                            poet, the lover&#39;s face shines day and night, but the poet does not know who the
                            butterfly is. Rather, he uses the art of tajahuli arif in a byte and ignores it. In order to
                            enhance the artistry of the byte, he creates a beautiful example of contrast:</p><p>Ravshan
                            edikim, yuz koʻzi birla tun-kun,</p><p>Oyo, bu kecha sham`igʻa parvona kim erkan?</p><p>
                            Ya`qubsifat kecha-kunduz chekarman oh,</p><p>Bildirguchi holim mahi Kan`ona kim erkan?</p>
                        <p>It is known that the propeller is in love, and although it has a butterfly around it, it
                            cannot reach the vassal. In these verses, the poet skillfully uses the art of tasbeh, tazad,
                            talmeh. Referring to the images of Jacob and Joseph Canaan, he more broadly expresses the
                            suffering of the lover and the beauty of the lover. In other words, the lover is like Haqq
                            in Hijrah. It is well known that suffering, grief, and childbirth make Jacob&#39;s eyes
                            weak. Joseph Canaan is a prophet in beauty, a symbol of beauty. The lover also sighs and
                            sighs. But the friend is unaware of this, someone has to tell him.</p><p>In Muradi&#39;s
                            ghazals dedicated to Feruz, we see beautiful examples of talmeh. Through Talmeh, the poet
                            manages to express his thoughts in a concise way. That is, &quot;it is an art that allows
                            the poet to express a deep meaning with a single gesture.&quot; Murodi pays homage to Feruz
                            by naming world-famous rulers:</p><p>Meni dagʻi yuz ming nasr ojiz ila arz aylayin,</p><p>Ey
                            Iskandar, Jamshid, Xisravi Doro agʻniyo (P-15).</p><p>Garchi bu oʻrinda shoir mubolagʻa
                            san`atiga murojaat qilgan boʻlsa-da, Feruz shahzodalarga ham homiy, ham murabbiy sifatida
                            qadrli ekanligi bizga ma`lum.</p><p>The artistic maturity of Murodi&#39;s verses is a
                            testament to his creative potential.</p><p>Among the ghazals in the Haft Shuaro complex, the
                            Sultan&#39;s ghazal is unique in its art and content. In the first verse of the poet&#39;s
                            ghazal &quot;mine&quot;, written in the style of Feruz, the art of tansiq-us-sifat is
                            skillfully used. This served to make the goal more complete. There is no reason why fiancee
                            should not come for a flower walk. Each of its qualities is able to embarrass the
                            flowers:</p><p>Kelmadi gul sayriga shoʻxi parizodim mening,</p><p>Sochi sunbul, yuzi gul, ul
                            qaddi shamshodim mening (P-48).</p><p>In the poem, the poet uses the art of rhetoric from
                            beginning to end, trying to fully express the suffering of the lover. The lover&#39;s hair
                            is compared to a sunflower, his face to a flower, and his waist to a sesame tree, which
                            means that the Sultan creatively uses ready-made metaphors in classical literature.
                            Exaggeratedly, the lover&#39;s sighs reach the sky:</p><p>Mehri ruxsori firoqida chekarman
                            oʻtligʻ oh,</p><p>Yetgusi soʻyi samoga ohu faryodim mening.</p><p>It is known that kindness
                            is used in the sense of the sun, the source of heat and light. In the first stanza of the
                            verse, the poet refers to the metaphor and compares the permission of the yar to mercy. In
                            Ghazal&#39;s praise, he uses the art of talmeh and almost copies Feruz&#39;s verses. Because
                            Feruz also creates praise when he ends the ghazal with the verse &quot;Aylading&quot; in the
                            form of a passage to Ogahi:</p><p>Komil ersam nazm aro Feruzdek, ermas ajab,</p><p>Ogahiydur
                            she`r mashq aylarda ustodim mening<a href="#_ftn1"><!--[if !supportFootnotes]-->[1]
                                <!--[endif]--></a>.</p><p>Sultoniyda esa misralar quyidagicha hamohang tarzda
                            bitiladi:</p><p>Tong emas, she`ringga tahsin qilsa xalq, Sultoniyo,</p><p>Mashqi she`r
                            aylardadur Feruz ustodim mening.</p><p>Sultani is a poet who enjoyed Ogahi&#39;s poetic
                            skills. In the following verses, he continues Ogahi&#39;s thought and uses the arts of
                            tasbeh, eloquence, and talmeh in harmony.:</p><p>Oydek yuzing anvoridin ravshan erur jumla
                            jahon,</p><p>Bu husningu diydoringga olam gado, men ham gado (P-37).</p><p>In the next
                            verse, he repeats the traditional view of Jesus, who gave his life for the dead with his own
                            breath. The ghazal radifi is also unique, consisting of five words, the base word being
                            &quot;gado&quot;.</p><p>The verses are concise and fluent, rich in artistic means.
                            Adjectives such as &quot;dead body&quot;, &quot;sweet word&quot;, &quot;Isosifat guftor&quot;,
                            &quot;ravshan erur&quot; increase the effectiveness of the ghazals. The fact that words such
                            as &quot;raftor, rukhsor, gulzor, diydor, guftor&quot; are harmonized in the ghazal is a
                            sign of adherence to tradition. Shouldn&#39;t a lover be a begger when the world begs for
                            the beauty of an incomparable lover? His one sweet word gives life to the dead.</p><p>In
                            each of his ghazals, the sultan tried to create a new expression, to express meaningful
                            ideas. In the words of the narrator:</p><p>Oningtek she`r uslubida mohir,</p><p>Mohir
                            boʻlubdurlar bu sirru zohir.</p><p>Indeed, verses rich in artistic means prove it directly.
                            The main protagonist of the poet is in love. He is accustomed to being oppressed when he
                            sees a &quot;creature,&quot; as if he hopes for his grace:</p><p>Qolgʻaymu sabru toqat ila
                            jahonda ahbob,</p><p>Ul shoʻx mahliqodin nozu adoni koʻrgach (P-46).</p><p>Impressions are
                            gained in a fluid, global, diffused way. In the next verse of the ghazal, the poet uses the
                            arts of talmeh and tazod. Being in love with a lover &quot;Majnunshior&quot; is a
                            nightmare:</p><p>Majnunshior boʻlubdur ishqida kecha-kunduz,</p><p>Sultoniy ul parivash
                            qoshi qaroni koʻrgach (P-46).</p><p>In each of the poet&#39;s poems, new aspects of love are
                            discovered. In his ghazal, which begins, &quot;Kuydi jonim ul pari oraz namolan aydagach&quot;,
                            the Sultan describes the beauty of his mistress. In this ghazal, the poet makes effective
                            use of artistic means from mat to praise, which increases the content and effectiveness of
                            the ghazal:</p><p>Kuydi jonim ul pari oraz namoyon aylagach,</p><p>Husnidin gulshanni rashki
                            bogʻi rizvon aylagach (P-47).</p><p>The soul of a lover who sees the permission of his
                            beloved burns like fire. It was as if Gulshan was jealous of her beauty. After all, a flower
                            in front of a lover&#39;s permission is a simple thing. The poet, who created a beautiful
                            example of the metaphor, continues his thoughts in the last verses. He tries to make a
                            concise statement by exaggerating the diagnosis such as &quot;Sarv was embarrassed when he
                            saw the beautiful woman&quot;, &quot;The flower mask was sewn and the stomach was full of
                            blood&quot;. As if ashamed of the beauty of her body, the flower was covered with blood as
                            she sewed her mask out of shame. At this point, the poet tries to prove his point in a
                            beautiful way, combining the art of analysis with the diagnosis. Also, if the zulfi of the
                            yar is scattered on the face of the flower, &quot;Mind, patience and endurance will all
                            escape.&quot; So, the lover&#39;s lover is an angel who has no equal in beauty. However, the
                            poet concludes the ghazal with a metaphor, such as &quot;After the marriage from the tip of
                            the eye turns into a lali khandon&quot;, the Sultan (lyrical hero) may be among the lovers.
                            This single ghazal itself shows the poet&#39;s talent.</p><p>Most of the sultan&#39;s
                            ghazals are poems praising love. In each of them the pains of the lover, the deeds of the
                            lover are renewed. In particular, in the following verse, Husni refers to the art of
                            analysis and beautifully proves his point. When a lover sees his wounds, he sighs like a
                            nightingale:</p><p>Navolar tortaram ul gul yuzi to oshkor oʻlgʻach,</p><p>Hazin bulbullar
                            aylar nola chun fasli bahor oʻlgʻach (P-47).</p><p>The poet pays special attention not only
                            to the use of poetic arts, but also to artistic means, rhymes and rhymes. The choice of
                            adjectives and metaphors, such as &quot;Hazin bulbullar&quot;, &quot;Sabrim uyi voyron bolup&quot;
                            or &quot;oshkor, bahor, yor, tor-tor, guluzor, stable, zebonigor, beikhtiyor&quot; as a
                            rhyme proves our point. Also,</p><p>Mani Majnun deb ayb aylama, ey zohidi xudbin,</p><p>
                            Qolarmu aqlu hushim bir pari ruxsora yor oʻlgʻach,</p><p>tarzidagi misralarda talmehning
                            ifodalanishi yoki:</p><p>Ochar majlis aro ruxsori gulzorin base gullar,</p><p>Icharga
                            la`lgun may mashomidin dil ul zebo nigor oʻlgʻach,</p><p>The combination of diagnosis and
                            eloquence in such a byte ensures the artistic maturity and effectiveness of the ghazal. In
                            turn, through these bytes the reader can more fully imagine the beauty of the beloved.</p>
                        <p>In his poems, Sultani also refers to the image of &quot;flower&quot;, which has become a
                            tradition in Uzbek classical literature, and likens the lover to a symbol of beauty and
                            elegance. An example of this is the poet&#39;s &quot;flower&quot; ghazal:</p><p>Boʻldi
                            koʻrgach orazing devona gul,</p><p>Sham`i ruxsoringga chun parvona gul.</p><p>Jilva qilsang
                            bogʻ aro, ey guluzor,</p><p>Sadqa boʻlgʻay boshinga aylona gul (P- 62).</p><p>It is clear
                            that although the flower itself is attractive, it is in love with human beauty. For ghazal
                            verses, the poet chose the art of metaphor. In other words, the poet entrusts the image of a
                            &quot;flower&quot; and uses it to reveal the beauty of the land. The flower is not only
                            crazy about beauty, but also a propeller on the face of the earth. In this way, the poem
                            refers to the transience of the world. When Parvana dies in love, the candle burns. It is
                            natural for a flower to turn into the loyalty. The reference to the image of the &quot;flower&quot;
                            began with folklore and is widely used in written literature. There are wonderful examples
                            of this in Navai&#39;s ghazals. The influence of Navai&#39;s work is felt in the development
                            of Sultan&#39;s poetry. In the works of Navai:</p><p>Orazingni bogʻ aro chun koʻrdi, hayron
                            boʻldi gul,</p><p>Bargsiz qoldi, nedinkim, bas parishon boʻldi gul,<a href="#_ftn2">
                                <!--[if !supportFootnotes]-->[2]<!--[endif]--></a> -</p><p>Such verses are undoubtedly a
                            source of inspiration for the poet. The poet received a creative education from Navai and
                            revealed a new image of the &quot;flower&quot;. That is why he is jealous of the flower in
                            his ghazal praise. The poet used the art of diagnosis and rhetoric in almost all the verses
                            of the ghazal. Praise, on the other hand, appeals to the opposite:</p><p>Rashkdin Sultoniy
                            tun-kun oʻrtanur,</p><p>Ilkiga olsa agar jonona gul.</p><p>We can find the ghazal with the
                            line &quot;Flower&quot; in the classical literature in the works of many poets, including
                            Ogahiy, Feruz, Avaz.</p><p>In the poem of the poet, which begins with &quot;Come and spend a
                            night in my hut&quot;, he manages to depict the infinity of the sorrows of the lover through
                            the image of the legendary lovers:</p><p>Oy yuzidin majlisim bu kecha jannat bogʻidur,</p>
                        <p>Mutribimdur bu kecha bir dilbari Uzro misol (P-64).</p><p>or the images of the legendary
                            mistress in the next verse, &quot;Come, O Laylivashim, please, one day between my feasts,&quot;
                            are a shining example of talmeh.</p><p>In Sultan&#39;s poetry, not only the theme of love,
                            but also the idea of following the teachings of Islam and obedience to Allah are very
                            important. After all, the poet was a strong man who knew the religion and its conditions. In
                            order to achieve certain success in creation, he seeks Allah&#39;s help and, through the art
                            of tasbeeh, compares himself to a nightingale and uses repetition. The byte is exaggerated
                            by repeating the load:</p><p>Ajab sone` erursen, zotinga xayli bashar qilsa,</p><p>Tafakkur
                            har necha, ne ibtido, ne intiho paydo.</p><p>In the Sultan&#39;s ghazal, we can also find
                            examples of the repetition of takrir in the form of a compound. It is known that the art of
                            repetition as Ishakov noted: &ldquo;There are two types of repetition in terms of content:
                            lexical repetition and phraseological repetition. Phraseological repetition includes
                            repetition in the form of a phrase or phrase&rdquo;<a href="#_ftn3">
                                <!--[if !supportFootnotes]-->[3]<!--[endif]--></a>. Both types of taqrir can be observed
                            in the sultan&#39;s work. In the above byte, the lexical repetition is embedded in the verse
                            itself. In the ghazal &quot;One side&quot; the phraseological repetition is used in each
                            byte of the poem:</p><p>Boʻston aro gul bir taraf, bechora bulbul bir taraf,</p><p>Faryodi
                            gʻulgʻul bir taraf, hadsiz tagʻoful bir taraf (P-277).</p><p>We find the same radiant ghazal
                            in the poetry of Bayani and Avaz. Since the sultan&#39;s verses are in harmony with the
                            ghazal of Avaz, we will quote a verse from the ghazal of the master poet for comparison.
                            This means that Avaz&#39;s poetry also served as a mentor to the prince&#39;s poets:</p><p>
                            Gulshan aro gul bir taraf, ul yuzi anvar bir taraf,</p><p>Ishq ichra bulbul bir taraf, man
                            zori muztar bir taraf<a href="#_ftn4"><!--[if !supportFootnotes]-->[4]<!--[endif]--></a>.
                        </p><p>&nbsp;Sadiq&#39;s poetry, which is included in the collection, also has its own style and
                            position. Continuing the faithful literary tradition, he skillfully uses the arts and visual
                            aids in his ghazals.:</p><p>Karam aylab birovga sarvi guldek qiymati ruxsor,</p><p>Birovga
                            ayladi qumriyu bulbuldek figʻon paydo (P-155).</p><p>The poet&#39;s skill in using the
                            metaphor in one verse, &quot;like a cypress flower,&quot; &quot;like a nightingale,&quot;
                            shows the poet&#39;s skill. In his radiant ghazal &quot;Nedur&quot; he likens the lover
                            directly to a flower and uses a metaphor. In the poems of the poet there are three
                            traditional images of our Uzbek classical literature - the lover, the lover and the
                            rival:</p><p>Javru zulmlar man zorga, ey gul, ayon etmak nedur,</p><p>Kim gʻami hajring bila
                            bagʻrimni qon etmak nedur (P-194).</p><p>Although the example of a lover is a flower, its
                            purpose is to torment the lover, to make him suffer in the torment of hijrah. Continuing his
                            thoughts, the poet addresses again the questions that hurt the heart of the lover. In the
                            ghazal, he vividly describes the pain of a lover who is accustomed to &quot;singing like a
                            nightingale&quot; and complaining of &quot;his condition to the sky.&quot;</p><p>Agahi is
                            waiting for help from a lover in his ghazal, which begins in the form of a poem, &quot;Otashin
                            ruhsorin ul ay ochsa bazm ara.&quot; In the very first verse we find metaphors and
                            adjectives. He connects the adjective &quot;fiery ruler&quot; with the metaphor of &quot;that
                            month&quot;. Or the adjectives &quot;pure soul&quot; and &quot;labi labi&quot; in the
                            following verses indicate that the poet used artistic means appropriately. The ghazal is
                            written in the light, playful weight of the dream:</p><p>Koʻzi oʻltursa agar, gʻam yoʻqki,
                            topgum toza jon,</p><p>Aylasa la`li labidin bir boʻsa ehsongina (P-154).</p><p>There is also
                            a tradition of addressing saba in Sadik&#39;s ghazals. In one of the poems, the poet
                            repeatedly addresses the &quot;sabo&quot; in order to more accurately describe the
                            sufferings of the lover. &quot;Sabo&quot; is a means of conveying the pain of love to a
                            loved one. The verses &ldquo;O Saba, mandin salom ul sarvari khobona ayt&rdquo;, &ldquo;O
                            sabo, rahm aylabon ul ofati davrona ayt&rdquo;, directly confirm our opinion. While Sadik
                            used the art of shouting through the image of &lsquo;Sabo&rsquo;, in this verse he uses the
                            phrase: Increases mystery. In the next verse, he enumerates the qualities of a lover and
                            uses the art of familiarity:</p><p>Vasling istab koʻzlarim doim sirishkafshonligʻ,</p><p>Ul
                            yuzi gul, sochi sunbul, koʻzlari mastona ayt.</p><p>Although the lover is in such a state of
                            separation, he wants to be the guardian of the &quot;slanderous sultan&quot;.</p><p>In Sadik&#39;s
                            poetry one can find such influential artistic ghazals as &quot;ne sud&quot;, &quot;hanuz&quot;,
                            &quot;istamas&quot;, &quot;arzimas&quot;. Each of them highlights a specific aspect of the
                            lyrical hero&rsquo;s spiritual world. In this world, the sufferings of the lover, the &quot;tricks&quot;
                            of the lover are manifested in different ways. In one of his poems, the poet beautifully
                            proves his point through the art of analysis. According to him, the moon in the sky, with
                            the permission of his mistress, is embarrassingly defeated when arguing over beauty. As if
                            the sun did not give her warmth, the sunbul struggled when she saw her hair. In this way,
                            the poet uses the art of rhetoric:</p><p>Oy chekib sharmandaligʻ, mehring nuridin oftob,</p>
                        <p>Voy, soching savdosi solmish sunbul a`zosiga tob (P-158).</p><p>&nbsp;As you can see, the
                            poet compares the symbols of the moon, the sun and the girl with the beauty of the land. In
                            another of his poems, he refers to the familiar and enumerates the characteristics of the
                            fiancee:</p><p>Oldi koʻnglumni mani bir tiflvash jonongina,</p><p>Qoshi yo, kipriklari oʻq,
                            koʻzlari fattongina (P-156).</p><p>&nbsp;It is a pre-Sadik tradition in classical literature
                            to make the eyebrows, the eyelashes, and the eyes look like a conspirator. In the poems of
                            the poet, word games and subtleties of meaning are beautifully described. In this byte, he
                            creates an example of the art of confrontation by contrasting the verses:</p><p>Baski,
                            noshod aylading Sodiqni hijroning aro,</p><p>Xushturur emdi visoling ichra boʻlsa komyob
                            (P-158).</p><p>Or in another verse, he uses the art of tazad to describe the love of a lover
                            and asks for help:</p><p>Jabri bedoding chekarman kecha-kunduz, ey pari,</p><p>Bermagil
                            tangri uchun men zorga muncha azob.</p><p>In the poems of the poet, the beauty of love and
                            affection is described in an exaggerated way. It is known that in the exaggeration they
                            exaggerate the sorrows of the lover and make the beauty of the land more beautiful:</p><p>
                            Orazin koʻrgan kishi xurshidi raxshon istamas,</p><p>Koʻyida tutgan makon firdavsi rizvon
                            istamas (P-183).</p><p>Better a poor horse than no horse at all. Or a person who cares about
                            &quot;qaddi raftori&quot; expresses the art of metaphor and rhetoric in harmony in the
                            verses &quot;sarvi xiromon istamas&quot;. The poet continues the art of familiarity through
                            ghazals. He compares each quality of the earth to a miracle of nature. For example, a pari
                            lyric protagonist is better than a huru gilmon, who is praised for his metaphors such as
                            &quot;holi hatti&quot; anbaru rayhanga, &quot;labini shahdi&quot; obi beast &quot;or&quot;
                            eyebrow bow, eye fatton, eyelash curler. &quot; There is also a harmony in Sadik&#39;s
                            poetry with Avaz&#39;s ghazals, which can be found directly in the radif ghazal &quot;still&quot;.
                            The faithful poet uses synonyms for some words in his poems. For example, in the first verse
                            of Avaz&#39;s ghazal, &ldquo;I am still fascinated by the love between a beauty <a
                                href="#_ftn5"><!--[if !supportFootnotes]-->[5]<!--[endif]--></a>&rdquo; The verse is
                            used in Sadik as &quot;An eye is still in the pilgrimage of the spirit of a fairy candle&quot;.
                            In the following verses, Sadik quotes a synonym in the form of &quot;O friends&quot; instead
                            of &quot;O friend&quot; in the Avaz ghazal. The frame of the ghazal is written in the weight
                            of the musammani mahzuf, and the verses are simple and fluent. In his verses, Sadik refers
                            to the art of summation and division in traditional lyric poetry:</p><p>Doʻstu dushman ishq
                            aro ahvoli zorimni koʻrub,</p><p>Biri nolondur holimgʻa, biri xandondur hanuz (P-194).</p>
                        <p>A significant part of the artistic skill in the Bayani ghazal is reflected in the widespread
                            use of art and the sugar cane style. Below are some examples of these:</p><p>Talmeh,
                            qaytariq:</p><p>Majnun Bayoniydek nechun majnunshior oʻlmas gahi,</p><p>Yurmas junun
                            dashtidagi anduh sahrosi aro (P-528).</p><p>Savol-javob va shiru shakar:</p><p>Dedi: ul oy,
                            ne kora sen, guftam havodori shumo.</p><p>Dedi: nedur matlab sango, guftamki diydori shumo
                            (P-532).</p><p>Qaytariq va xitob:</p><p>Rangi ma`ni boʻldi chun nayrangi ma`nidin ayon,</p>
                        <p>Urma nayrang ila hifzi lofi ma`nidorliq (P-545).</p><p>In the complex &quot;Haft Shuaro&quot;
                            the poetry of the talented prince Saadi is noteworthy. The poet&#39;s poems are full of
                            beautiful and touching metaphors, melodies and artistic elements. In the ghazal &quot;Ustina&quot;,
                            which is written in the form of a passage, the ideas are expressed in a simple and fluent
                            way.</p><p>The poet&rsquo;s lyrical protagonist is also in love. He was saddened by the
                            &quot;nolai afghan&quot; in the work of &quot;rozu shab&quot;. In one verse, the art of
                            metaphor, allegory, metaphor, and adjective is combined, which enhances the artistry of the
                            ghazal:</p><p>Nolai afgʻon qilurman roʻzu shab bulbul kabi,</p><p>Gul yuzining furqati ichra
                            boʻlub holim xarob (P-255).</p><p>The poet compares hijra to the steppe and creates a
                            beautiful example of metaphor. In this steppe, the thirsty lover strives for the land. To
                            save the lover from this situation, you need &lsquo;visol&rsquo;. Otherwise, it is natural
                            for the lover to have a &quot;bagri kebab&quot; in the steppe:</p><p>Tashnadurman dashti
                            hijroning aro, ey nozanin,</p><p>Lutf aylab jomi vasling birla qilgʻil komyob.</p><p>In the
                            ghazal &quot;Laziz&quot; he is ready to drink poison from the hands of his lover. The
                            suffering of a lover is better than the honor of others:</p><p>Zahrni ichsamki dastingdan
                            sani,</p><p>Ul asalni noʻsh qilgʻondin laziz (P-272).</p><p>According to the poet, ashamed
                            of the beauty of the land, he prefers to set the sun. The moon, which shines in the middle
                            of the night, hides in the depths of the dawn because it can&#39;t argue with its beauty.
                            For the sake of this new beauty, the lover gives up the &quot;world of glory&quot; and
                            agrees to the pain of separation.</p><p>In verses such as &quot;Bolub ul moh tied my waist
                            for my slaughter&quot;, &quot;Khurshidi ruhsoring kelur&quot;, &quot;Ul ki javru sitam,
                            aylabon lutfu karam&quot;, he describes the love of lovers through tazod. He also uses the
                            art of talmeh in harmony with the familiar &lsquo;us-sifat&rsquo;:</p><p>Vomiqu Farhod ila
                            Majnun hadisi shoʻxdin,</p><p>Dam urargʻa muttasil bu oshiqi zor ollida (P-253).</p><p>In
                            the poems of the poet there are such inevitable cries as &quot;Lutf etibon, ey sabo, arzim
                            degil yor ollida&quot;, The use of such arts serves to enhance the art of the poems. The
                            poet&#39;s lyrical protagonist lives to see the end of the night. In his view, the morning
                            is equal to the visor. In Laffasi&#39;s words, Saadi&#39;s poems say&rdquo;.</p><p>Saadi&#39;s
                            &quot;young&quot; radifi ghazal gives beautiful examples of art:</p><p>Aylamish aqlim adam
                            bir masti beparvo yigit,</p><p>Gul yuzigʻa bulbuli koʻnglumni ham shaydo yigit, &ndash;</p>
                        <p>The art of allegory, such as &quot;I wish this hut was bright, the face of a flower&quot;
                            proves our point. The poet also makes appropriate use of such metaphors as &quot;Misli
                            Majnun kezdiribon kochai furqat aro&quot;, &quot;Jesus for the people of the world&quot;.
                            The art of confrontation in the next verse develops the poet&#39;s thought and creates a
                            contradiction:</p><p>Shod etib man notavon koʻnglumni yolgʻon ahd ila,</p><p>Gʻamligʻ etdi
                            boʻlmay ahdida qadampaymo yigit.</p><p>Otabek Tora Akil is one of the talented artists in
                            the Haft Shuaro complex. In the poems of the wise, art is expressed in various forms. In his
                            poems, the poet sings about the pain of love and the charm of love. According to the lover,
                            the exaggeration that the sun is like a particle in the face of the beauty of the lover is
                            combined with a metaphor:</p><p>Mahjabinimning jabinidin xijil ming mohtob,</p><p>Orazi
                            oʻtrusida bir zarra yangligʻ oftob (P-476).</p><p>Or, in the following verses of the ghazal,
                            he uses the art of familiar &lsquo;us-sifat&rsquo; together with &lsquo;tasbihi mafruk&rsquo;.
                            In other words, he cites the characteristics of the yorga in succession and compares them to
                            each other in different ways. In the line, the poet makes appropriate use of traditional
                            metaphors:</p><p>Xatti rayhon, zulfi sunbul, qomati sarvi sihi,</p><p>La`li jonbaxshu koʻzi
                            qotil, soʻzi durri xushob.</p><p>Each verse of the ghazal is artistic. The idea is not
                            exactly repeated in the verses. Maybe the new qualities of the yard will be revealed:</p><p>
                            Noz raxshin sekretib, maydonda boʻlsa jilvagar,</p><p>Rashk oʻtigʻa mahliqolar jonini
                            qilgʻay kabob.</p><p>He likens Yor&#39;s nozu ishva to a rakhsh - a horse, and uses the art
                            of metaphor. The lover is so beautiful that even the creatures burn with jealousy.</p><p>
                            Oqil har bir gʻazalida tashbehning yangi qirralarini kashf etadi:</p><p>Boshima har balo
                            ishqing aro bitsa gar.</p><p>Qaytmagʻum hargiz raqib ahlidek aylab shitob (P-477).</p><p>No
                            matter how much a lover suffers from love, he will not turn back. The path of love is
                            eternal, it is difficult to return from it. In the next byte, he uses metaphor and allegory
                            in harmony:</p><p>Bormagʻil, ey gul, raqib ahlini bazmi sori,</p><p>Man kabi qilgʻil oni
                            furqat oʻtigʻa kabob.</p><p>The poet also refers to the inevitable art in the verses:</p><p>
                            Ayladim onlarga arz ishqida shaydo erkanim,</p><p>Bir-biridin qildilar lutfni bisyor shoʻx
                            (P-487).</p><p>Akil, in particular, is a master of the art of tajohuli arif. According to
                            Atoullah Husseini, &quot;the tajahuli arif andin consists of a speaker who knows something,
                            but at one point pretends that he does not know himself.&quot; The calmness, astonishing
                            depth and impressive charm of the lyrical protagonist of this art are also vividly expressed
                            in the poems of Akil. We prove this on the basis of a full analysis of the following
                            rhetorical question:</p><p>Aqlim olgʻon gul va yo sarvi sanubarmu ekan?</p><p>Yoʻqsa bir
                            zebo qadu gul yuzli dilbarmu ekan? (P-496)</p><p>The mind makes appropriate use of the
                            metaphors that have become a tradition in our classical literature and incorporates it into
                            the background:</p><p>Lablarida zohir oʻlgʻon xatti anbarmudurur,</p><p>La`l uza yoxud
                            zumurrad birla zevarmu ekan?</p><p>There is no language to describe fiancee:</p><p>
                            Musotakallum, mohyuz, anbarxatu ham mushkboʻ,</p><p>Oshiqkushu jallodxoʻ yori jafokoring
                            kelur.</p><p>Following the principle of &quot;love in one feeding&quot;, the poet develops
                            his ideas and directly uses the art of repetition:</p><p>Ishq aro oshiq anga man zordek
                            yoʻqtur vale,</p><p>Garchi oshiqlar ango bisyordur, bisyordur (P-483).</p><p>According to
                            the poet, although there are many lovers in the world, the lyrical protagonist feels lonely.
                            In the ghazal &quot;Appearance&quot; devoted to the description of Allah, he uses the method
                            of command and prohibition to express his feelings to Allah. In turn, he asks God for
                            forgiveness:</p><p>O`tib soʻzi xatosin, yo rab arzini qabul etkil,</p><p>Senga loyiq sipos
                            ayturgʻa yoʻq Oqilgʻa had paydo.</p><p>The ghazal of the mind is distinguished by the fact
                            that it combines art and visual aids in art. The following bytes are proof of this:</p><p>
                            Vasl eli har dam topar ermish labidin toza jon,</p><p>Bilmon ul obi baqomu yoʻqsa kavsarmu
                            ekan?</p><p>Ne boʻlur Oqil kibi arzimni izhor aylasam,</p><p>Boqmagʻudek holima ham yori
                            kofirmu ekan?</p><p>This ghazal is in the weight of a ram with a frame, and the board is as
                            follows: - V- - -V - - - V - - - V -. This romantic poem is dedicated to the description of
                            the beloved. From the very beginning, Payrav was based on the art of tajohuli arif. This art
                            of poetry, which means &quot;knowingly or unknowingly&quot;, means that the poet pretends
                            not to know without clearly stating any figurative phrase in the verse.</p><p>In the first
                            verse of the ghazal, the lyrical protagonist likens his lover&#39;s permission to a flower
                            and his stature to a cypress tree, whether it is a flower or a cypress tree that captures my
                            mind, or a beautiful, flower-faced charm. The art of tajohuli arif was created as a result
                            of expressing the comparative relationship between the face and the flower, the qad and the
                            cypress and the sanuvbar in the form of knowing or not knowing. There is also the art of
                            collective in this byte. &ldquo;The art of summarizing objects and concepts in a byte and
                            expressing a figurative idea based on the relationship between them.<a href="#_ftn6">
                                <!--[if !supportFootnotes]-->[6]<!--[endif]--></a>&rdquo;. In this verse, the image of a
                            lover is combined with the image of a flower in color, and the stature of a cypress and a
                            fig tree with a symbol of verticality.</p><p>The third verse also states that the water of
                            eternal love is like the water of eternal life and the spring of heaven. Ghazal praise also
                            expresses the beauty of the beloved through questions.</p><p>Apparently, each verse of the
                            ghazal contains some analogies, and the poet&#39;s ignorance of himself makes the verses
                            attractive.</p><p>Like Sadik and Sultani, Akil was directly inspired by Avaz&#39;s work,
                            which can be seen in the poet&#39;s ghazal &quot;bila&quot;. In particular, in the work of
                            Avaz:</p><p>Ey kim, tamanno aylama bazm etmak ul jonon bila,</p><p>Kim uns tutgʻaymu pari
                            suhbat tuzub inson bila<a href="#_ftn7"><!--[if !supportFootnotes]-->[7]<!--[endif]--></a>.
                        </p><p>Oqilda:</p><p>Bu kecha bazm etdi kim, bilmon bizi jonon bila.</p><p>Kim oʻturdi kechani
                            to tonggʻacha afgʻon bila (P-64).</p><p>Each verse of the Wise Ghazal creates a lexical
                            repetition pattern by using the word &quot;Kim&quot; at the beginning.</p><p>In order to
                            enhance the art of ghazals, poets pay attention to the rules of rhyme and radif art. In
                            particular, in Saadi&#39;s ghazal &quot;consequence&quot; the words &quot;parishon, giryon,
                            farovon, oh-afghan, pushaymon, shodu khandon&quot; are chosen as rhymes. The consonant
                            &quot;n&quot; in these rhyming words is narrated. The letter Ravi is usually repeated in
                            rhyming words.</p><p>In Sadik&#39;s &quot;reluctant&quot; radif ghazal, the rhyme &lsquo;zulqofiyatayn&rsquo;
                            - two syllables are used in the verses:</p><p>Kom topmoq orzu qilgʻon labining shahdidin</p>
                        <p>Ranj chekmas, zulmat ichra obi hayvon istamas.</p><p>Qoshi yoyigʻa nedin mujgon oʻqi
                            solmishdurur,</p><p>Qatliom etmak gar ul chashmi fatton istamas(P-364).</p><p>In one of the
                            verses of the Sultani&#39;s radiant ghazal &quot;eye&quot; the rhyme is used:</p><p>Behad
                            sitam uzra sitamlar aylabon hajr oʻtigʻa</p><p>Yoqdi mani subhu maso, ey dilbar siymo,
                            koʻzing(P-282).</p><p>Shoirning &ldquo;koʻrgach&rdquo; radifli gʻazalida qofiyaning musajja
                            turini uchratamiz:</p><p>Ma`shuqi qilsa bedod, oshiq boʻlur base shod,</p><p>Oyo, ne holat
                            boʻlgʻay ondin davoni koʻrgach.</p><p>Sodiqning &ldquo;hanuz&rdquo; radifli gʻazalida ham
                            sajli qofiya mavjud:</p><p>Doʻstu dushman ishq aro ahvoli zorimni koʻrub,</p><p>Biri
                            nolondur holima, biri xandondur hanuz(P-357).</p><p>In this verse, they also use the art of
                            laff and printing to increase the melody of the verses. That is, it is described as &quot;friend
                            - zero&quot;, &quot;enemy - handon&quot;.</p><p>The art of the wise ghazals is completely
                            different. The poet reinforces the emphasis by repeating the rhyme in the verses of his
                            ghazal, which begins with the verse:</p><p>Husn aro guldek yuziga bulbuloso zorman,</p><p>Ul
                            pari ruxsori chun gulzordur, gulzor.</p><p>In the ghazal &quot;Bila&quot; the rhyming words
                            are combined by the consonant &quot;n&quot;. In the verses, words such as &quot;jonon, afg&rsquo;on,
                            qon, jon, ehshn, hijron, mahitobon, handon, giryon, nolon&quot; have been rhyming. Also, the
                            word &quot;Kim&quot; is used at the beginning of each verse to create the art of
                            repetition:</p><p>Kim qolib ul oydin ayru zulmati hijron aro,</p><p>Kim qilur bazmini
                            ravshan ul mahitobon bila(P-64).</p><p>At the same time, in some ghazals there is an
                            inconsistency of rhyming words. In some of Saadi&#39;s ghazals, some words belonging to the
                            group of verbs cannot be fully harmonized. Such words are composed of suffixes, personal
                            pronouns, or tenses, and appear only partially synonymous. However, if we remove these
                            suffixes from the word, there will be no rhyme. Such inconsistency of rhyme is called
                            &ldquo;Iyto&rdquo;<a href="#_ftn8"><!--[if !supportFootnotes]-->[8]<!--[endif]--></a>.</p>
                        <p>Bevafogʻa koʻngul <strong>oldurmagʻil</strong> hech,</p><p>Xudo yodin qoʻlingdan <strong>bermagʻil</strong>
                            hech(P-447).</p><p>Or the rhyming words in the following verses, such as &quot;do not beg,
                            do not enter, do not freeze, do not feed&quot; directly formed the idiom.</p><p>Saadi&#39;s
                            ghazal &quot;Abas&quot; also contains the phenomenon of ito. Words belonging to the verb
                            family are used in the form of action nouns:</p><p>Beibodat umr <strong>oʻtkarmak</strong>
                            abas,</p><p>Dilga gʻayri Olloh <strong>kelturmak</strong> abas(P-498).</p><p>Elsewhere, the
                            word &quot;means&quot; is chosen as a rhyme in both bytes:</p><p>Haqni zikri har soʻzingda
                            boʻlmasa,</p><p>Ul soʻzing jumlasin demak abas.</p><p>&hellip; Sa`diyo, boʻlmasang omil
                            oʻzing,</p><p>Bu soʻzingni xalqgʻa demak abas.</p><p>In the other two bytes, the word &quot;etmak&quot;
                            is a rhyme.</p><p><br/><!--[if !supportFootnotes]--></p><p>&nbsp;</p><!--[endif]--><p><a
                                href="#_ftnref1"><!--[if !supportFootnotes]-->[1]<!--[endif]--></a> Feruz. Elga shohu
                            ishqqa qul. T.: Adabiyot va san`at, 1994. &ndash;B.57.</p><p><a href="#_ftnref2">
                                <!--[if !supportFootnotes]-->[2]<!--[endif]--></a> Navoiy A. Qora koʻzum. &ndash;T.:
                            Adabiyot va san`at, 1988. -B.434.</p><p><a href="#_ftnref3"><!--[if !supportFootnotes]-->[3]
                                <!--[endif]--></a> Ishoqov Yo. Soʻz san`ati soʻzligi. T.: Zarqalam, 2006. -B.112.</p><p>
                            <a href="#_ftnref4"><!--[if !supportFootnotes]-->[4]<!--[endif]--></a> Avaz Oʻtar. Tanlangan
                            asarlar. T.: Oʻzbekiston, 1956- B.213.</p><p><a href="#_ftnref5">
                                <!--[if !supportFootnotes]-->[5]<!--[endif]--></a> Avaz Oʻtar. Tanlangan asarlar.
                            T.:Oʻzbekiston, 1956- B.97.</p><p>&nbsp;</p><p><a href="#_ftnref6">
                                <!--[if !supportFootnotes]-->[6]<!--[endif]--></a> Hojiahmedov A. Mumtoz badiiyat
                            malohati. T.: Sharq, 1999. - B.35.</p><p><a href="#_ftnref7"><!--[if !supportFootnotes]-->
                                [7]<!--[endif]--></a> Avaz Oʻtar. Tanlangan asarlar. T.: Oʻzbekiston, 1956- B.56.</p><p>
                            &nbsp;</p><p><a href="#_ftnref8"><!--[if !supportFootnotes]-->[8]<!--[endif]--></a> Is&rsquo;hoqov
                            Yo. Soʻz san`ati soʻzligi. T.: Zarqalam, 2006. &ndash;B.109.</p>
                    @endif

                    @if($lang=="ru")

                        <p>В изгнании любовник
                            умоляет любовника. Он не хочет показывать свое горе противнику. Поэт использует
                            искусство тазада, чтобы выразить печальное состояние влюбленного, его страдания днем
                            ​​и ночью.</p><p>Известно, что в классической литературе искусство тазода
                            используется двояко. В первом методе тазад цитируется только в нескольких стихах
                            газели, а во втором газель основана на искусстве тазада от начала до конца. В
                            частности, Муроди использует первый метод тазада в своей газели &laquo;видение&raquo;
                            и эффективно использует это искусство в двух стихах. В первом куплете, когда он
                            продолжает свои мысли и видит пару грустнолицых лун, боль стыдится этой радости. В
                            одном стихе поэт использует искусство метафоры и аллегории в сочетании:</p><p>Махзун
                            кунгул шод улгуси ул мохитобоним куруб,</p><p>Гуёки дард ахли булур масрур дармоним
                            куруб (С-6).</p><p><!--[if !supportFootnotes]--></p>В следующем стихе поэт создает искусство
                        тазода на основе прямого противоречия действия и
                        ситуации. Сердце влюбленного не спокойно, как в случае отчаяния его любовницы:</p><p>Ман
                            зорга хар тун агар булса муяссар орази,</p><p>Жам айлай олмон кунглуми зулфи паришоним
                            куруб.</p><p>Поэт использовал традиционный образ павлина, чтобы выразить красоту своей
                            возлюбленной. Известно, что этот образ сравнивают с маршем в нашей классической литературе.
                            Однако, когда павлин в газели Муради увидел поведение возлюбленного, он от смущения надел
                            ему на лицо палатку. Наргис также стыдится глаз своего возлюбленного, как будто отказывалась
                            улыбаться, увидев его. Глаза возлюбленного соблазнительны и могут смутить любовника. Поэт
                            описывает его через искусство аллегории, и риторики:</p><p>Гунча табассумдин колур гар курса
                            сайри бог аро,</p><p>Наргисга хижлатдур басе ул чашми фаттонин куруб</p><p>Товус тортар
                            бошлига шарми хижолат чодирин,</p><p>Гар жилва килса ул пари сарви хиромоним куруб
                            (С-6).</p><p>По словам поэта, лицо влюбленного сияет днем ​​и ночью, но поэт не знает, кто
                            такая бабочка. Скорее, он использует искусство таджахули ариф в байте, чтобы избежать
                            знания. Чтобы усилить художественность байта, он создает красивый пример контраста:</p><p>
                            Равшан эдиким, юз кузи бирла тун-кун,</p><p>Оё, бу кеча шамига парвона ким эркан?</p><p>
                            Якубсифат кеча-кундуз чекарман ох,</p><p>Билдиргувчи холим махи Канона ким эркан?</p><p>
                            Известно, что пропеллер влюблен, и хотя вокруг него бабочка, но до вассала добраться не
                            может. В этих стихах поэт умело использует искусство тасбе, тазад, талме. Обращаясь к
                            образам Иакова и Иосифа Ханаана, он шире выражает страдания влюбленного и красоту
                            влюбленного. Другими словами, любящий подобен Хакку в хиджре. Хорошо известно, что
                            страдания, горе и роды ослабляют глаза Иакова. Иосиф Ханаан &ndash; пророк красоты, символ
                            красоты. Любящий тоже вздыхает и вздыхает. Но друг об этом не знает, кто-то должен ему
                            сказать.</p><p>В газелях Муради, посвященных Ферузу, мы видим прекрасные образцы талме.
                            Через Талмех поэту удается лаконично излагать свои мысли. То есть &laquo;это искусство,
                            позволяющее поэту одним жестом выразить глубокий смысл&raquo;<a href="#_ftn1">
                                <!--[if !supportFootnotes]-->[1]<!--[endif]--></a>. Муроди отдает дань уважения Ферузу,
                            называя всемирно известных правителей:</p><p>Мени даги юз минг наср ожиз ила арз
                            айлайин,</p><p>Эй Искандар, Жамшид, Хисрави Доро агниё (С-15).</p><p>Хотя поэт прибегал к
                            искусству риторики, мы знаем, что Феруз ценился князьями и как покровитель, и как
                            тренер.</p><p>Художественная зрелость стихов Муроди свидетельствует о его творческом
                            потенциале.</p><p>Среди газелей комплекса Хафт Шуаро султанская газель уникальна по своему
                            искусству и содержанию. В первом стихе газели поэта &laquo;мой&raquo;, написанной в стиле
                            феруз, искусно использовано искусство тансик-ус-сифат. Это помогло сделать цель более
                            полной. Нет никаких причин, по которым возлюбленный не должен пойти на прогулку с цветами.
                            Каждое его качество способно смутить цветы:</p><p>Келмади гул сайрига шухи паризодим
                            менинг,</p><p>Сочи сунбул, юзи гул, ул кадди шамшодим менинг (С-48).</p><p>В поэме поэт
                            использует искусство риторики от начала до конца, стремясь в полной мере выразить страдания
                            возлюбленного. Волосы влюбленного сравнивают с подсолнухом, лицо &mdash; с цветком, а талию
                            &mdash; с шамшадным деревом, а значит, султан творчески использует готовые метафоры в
                            классической литературе. Преувеличенно вздохи любовника достигают неба:</p><p>Мехри рухсори
                            фирокида чекарман утлиг ох,</p><p>Етгуси суйи самога оху фарёдим менинг.</p><p>Известно, что
                            доброта употребляется в значении солнца, источника тепла и света. В первой строфе стиха поэт
                            обращается к метафоре и сравнивает позволение возлюбленного с милостью. В похвалу Газалю он
                            использует искусство талме и почти копирует стихи Феруза. Потому что Феруз тоже сочиняет
                            стихотворение со стихом &laquo;Айладинг&raquo; в виде стихотворения к Огахи:</p><p>Комил
                            эрсам назм аро Ферузбек, эрмас ажаб,</p><p>Огахийдур шеър машк айларда устодим менинг<a
                                href="#_ftn2"><!--[if !supportFootnotes]-->[2]<!--[endif]--></a>.</p><p>В Султанате
                            стихи пишутся синхронно следующим образом:</p><p>Тонг эмас, шеърингга тахсин килса халк,
                            Султани,</p><p>Машки шеър айлардадур Феруз устодим менинг.</p><p>Султани - поэт, которому
                            нравились поэтические способности Огахи. В следующих стихах он продолжает мысль Огахи и
                            гармонично использует искусство тасбе, мубалага и талме:</p><p>Ойбек юзинг анворидин равшан
                            эрур жумла жахон,</p><p>Бу хуснингу дийдорингга олам гадо,мен хам гадо (С-37).</p><p>В
                            следующем стихе он повторяет традиционное представление об Иисусе, который своим дыханием
                            отдал свою жизнь за мертвых. Газель радифи также уникальна и состоит из пяти слов, основное
                            из которых &mdash; &laquo;гадо&raquo;.</p><p>Стихи лаконичны и беглы, богаты художественными
                            средствами. Такие прилагательные, как &laquo;мертвое тело&raquo;, &laquo;сладкое слово&raquo;,
                            &laquo;исосифат гуфтор&raquo;, &laquo;равшан ерур&raquo; повышают эффективность газели. Тот
                            факт, что такие слова, как &laquo;рафтор, рухсор, гульзор, дийдор, гуфтор&raquo;
                            гармонизированы в газели, является признаком приверженности традиции. Разве любовник не
                            должен быть нищим, когда мир умоляет о красоте несравненной любовницы? Одно его сладкое
                            слово дает жизнь мертвым.</p><p>В каждой из своих газелей султан пытался создать новую
                            экспрессию, выразить осмысленные мысли. По словам рассказчика:</p><p>Онинг шеър услубида
                            мохир,</p><p>Мохир булубдурлар бу сирру зохир.</p><p>Действительно, стихи, богатые
                            художественными средствами, прямо доказывают это. Главный герой поэта влюблен. Когда он
                            видит &laquo;махлико жонон&raquo; и надеется на его милость, он привык угнетать влюбленного,
                            когда тот его видит:</p><p>Колгайму сабру токат ила жахонда ахбоб,</p><p>Ул шух махликодин
                            нозу адони кургач (С-46).</p><p>Впечатления получаются плавным, глобальным, рассеянным
                            способом. В следующем стихе газели поэт использует искусство талме и тазод. Быть влюбленным
                            &laquo;Мажнунширом&raquo; &mdash; это кошмар:</p><p>Мажнуншиор булубдур ишкида
                            кеча-кундуз,</p><p>Султани ул париваш коши карони кургач (С-46).</p><p>В каждом
                            стихотворении поэта открываются новые стороны любви. В своей газели, которая начинается
                            &laquo;Куйди жоним ул пари ораз намолан айдагач&raquo;, султан описывает красоту своей
                            возлюбленной. В этой газели поэт эффективно использует художественные средства от паспарту
                            до ваты, что увеличивает содержание и действенность газели:</p><p>Куйди жоним ул пари ораз
                            намоён айлагач,</p><p>Хуснидин гулшани рашки боги ризвон айлагач (С-47).</p><p>Душа
                            влюбленного, видящего позволение возлюбленной, горит, как огонь. Как будто Гюльшан
                            завидовала ее красоте. Ведь цветок с разрешения возлюбленного &ndash; вещь простая. Поэт,
                            создавший прекрасный образец метафоры, продолжает свои мысли в последних стихах. Он пытается
                            сделать краткое заявление, преувеличивая такие диагнозы, как &laquo;Сарв смутился, увидев
                            красивую женщину&raquo;, &laquo;Цветочная маска была сшита, а сердце налилось кровью&raquo;.
                            Словно стыдясь красоты своего тела, цветок был залит кровью, когда она от стыда сшила себе
                            маску. В этот момент поэт пытается красиво доказать свою точку зрения, сочетая искусство
                            анализа с диагностикой. Также, если зульфи яра разбросать по лицу цветка, &laquo;Ум,
                            терпение и выносливость все ускользнут&raquo;. Итак, возлюбленная влюбленного &ndash; это
                            ангел, которому нет равных по красоте. Однако поэт завершает газель метафорой о том, что
                            &laquo;когда женитьба становится жемчужиной в глазах&raquo;, султан (лирический герой) может
                            быть среди влюбленных. Сама эта единственная газель свидетельствует о таланте поэта.</p><p>
                            Большинство султанских газелей &mdash; это стихи, воспевающие любовь. В каждом из них
                            возобновляются боли влюбленного, дела влюбленного. В частности, в следующем стихе Хусни
                            обращается к искусству анализа и прекрасно доказывает свою точку зрения. Когда влюбленный
                            видит свои раны, он вздыхает, как соловей, поющий:</p><p>Наволар тортарам ул гул юзи то
                            ошкор улгач,</p><p>Хазин булбуллар айлар нола чун фасли бахор улгач (С-47).</p><p>Особое
                            внимание поэт уделяет не только использованию поэтического искусства, но и художественным
                            средствам, и рифмам. Выбор прилагательных и метафор, таких как &laquo;хазин бульбуллар&raquo;,
                            &laquo;сабрим уйи войрон болуп&raquo; или &laquo;ошкор, бахор, ёр, тор-тор, гулузор,
                            баркарор, зебонигор, бейхтиёр&raquo; в качестве рифмы, подтверждает нашу точку зрения.
                            Также</p><p>Мани Мажнун деб айлама, эй зохиди худбин,</p><p>Коларму аклу хушим бир пари
                            рухсора ёр улгач,</p><p>Выражение талме в стихах стиля или:</p><p>Очар мажлис аро рухсори
                            гулзорим басе гуллар,</p><p>Ичларга лалгун май машомидин дил ул зебо нигор улгач,</p><p>
                            Сочетание диагностики и красноречия в таком байте обеспечивает художественную зрелость и
                            действенность газели. В свою очередь, через эти байты читатель может полнее представить себе
                            красоту возлюбленной.</p><p>В своих стихах Султани также обращается к ставшему традицией в
                            узбекской классической литературе образу &laquo;цветка&raquo;, а влюбленного уподобляет
                            символу красоты и изящества. Примером тому является &laquo;цветочная&raquo; газель
                            поэта:</p><p>Булди кургач оразинг девона гул,</p><p>Шами рухсорингга чун парвона гул.</p><p>
                            Жилва килсанг бог аро, эй гулзор,</p><p>Садка булгай бошингга айлона гул (С- 62).</p><p>
                            Понятно, что хотя цветок сам по себе привлекателен, он влюблен в человеческую красоту. Для
                            стихов-газелей поэт избрал искусство метафоры. Иными словами, поэт доверяет образу &laquo;цветка&raquo;
                            и использует его для раскрытия красоты земли. Цветок не только без ума от красоты, но и
                            пропеллер на земле. Таким образом, в поэме говорится о быстротечности мира. Когда Парвана
                            умирает в любви, горит свеча. Для цветка естественно превращаться в садку и превращаться в
                            садку. Обращение к образу &laquo;цветка&raquo; началось с фольклора и широко используется в
                            письменной литературе. Прекрасные примеры тому есть в газелях Навои. Влияние творчества
                            Навои чувствуется в развитии поэзии Султана. В произведениях Навои:</p><p>Оразингни бог аро
                            чун курди, хайрон булди гул,</p><p>Баргсиз колди, нединким, бас паришон булди гул,<a
                                href="#_ftn3"><!--[if !supportFootnotes]-->[3]<!--[endif]--></a> -</p><p>Такие стихи,
                            несомненно, являются источником вдохновения для поэта. Поэт получил творческое образование у
                            Навои и раскрыл новый образ &laquo;цветка&raquo;. Вот почему он еще больше завидует цветку в
                            своей хвалебной газели. Искусство диагностики и риторики поэт использовал почти во всех
                            стихах газели. Хвала Аллаху:</p><p>Рашкдин Султани тун-кун уртанур,</p><p>Илкига олса агар
                            жонона гул.</p><p>Газель со строкой &laquo;Цветок&raquo; мы можем встретить в классической
                            литературе в творчестве многих поэтов, в том числе Огахия, Феруза, Аваза.</p><p>В
                            стихотворении поэта, которое начинается со слов &laquo;Приходи и проведи ночь между моими
                            хижинами&raquo;, ему удается через образ легендарных влюбленных описать бесконечность
                            печалей влюбленного:</p><p>Ой юзидин мажлисим бу кеча жаннат богидур,</p><p>Мутрибимдур бу
                            кеча бир дилбари Узро мисол (С-64).</p><p>или следующий байт &ldquo;Кел, эй Лайливашим, лутф
                            айлабон базмин аро бир кун&rdquo; Образы легендарной любовницы в поэме &mdash; яркий пример
                            талме.</p><p>В поэзии Султана очень важна не только тема любви, но и идея следования учению
                            ислама и покорности Аллаху. Ведь поэт был сильным человеком, знающим религию и ее условия.
                            Для достижения определенного успеха в творчестве он ищет помощи у Аллаха и посредством
                            искусства тасбиха сравнивает себя с соловьем и использует повторение. Смысл преувеличен
                            повторением байта в байте:</p><p>Ажаб соне эрурсен, зотинга хайли башар килса,</p><p>
                            Тафаккур хар неча, не ибтидо, не интихо пайдо.</p><p>В газели султана мы также можем найти
                            примеры повторения такрира в форме соединения. Известно, что искусство повторения Йо. Как
                            отмечал Исхаков: &laquo;Есть два вида повтора по содержанию: повтор лексический и повтор
                            фразеологический. Фразеологический повтор включает в себя повторение в виде словосочетания
                            или словосочетания&raquo;<a href="#_ftn4"><!--[if !supportFootnotes]-->[4]<!--[endif]--></a>.
                            Оба типа повторения можно наблюдать в творчестве султана. В приведенном выше байте
                            лексический повтор встроен в один стих. В газели &laquo;Одна сторона&raquo; в каждом байте
                            стихотворения используется фразеологический повтор:</p><p>Бустон аро гул бир тараф, бечора
                            булбул бир тараф,</p><p>Фарёди гулгул бир тараф, хадсиз тагофул бир тараф (С-277).</p><p>
                            Такую же лучезарную газель мы находим в поэзии Баяни и Аваз. Поскольку стихи султана
                            гармонируют с газелями Аваза, приведем для сравнения стих из газели мастера-поэта. Значит,
                            поэзия Аваза также служила наставником княжеским поэтам:</p><p>Гулшан аро гул бир тараф, ул
                            юзи анвар бир тараф,</p><p>Ишк ичра булбул бир тараф, ман зори музтар бир тараф<a
                                href="#_ftn5"><!--[if !supportFootnotes]-->[5]<!--[endif]--></a>.</p><p>Поэзия Садыка,
                            вошедшая в сборник, также имеет свой стиль и позицию. Продолжая верную литературную
                            традицию, он умело использует в своих газелях изобразительные и изобразительные
                            средства:</p><p>Карам айлаб бировга сарви гулдек киймати рухсор,</p><p>Бировга айлади кумрию
                            булбулдек фигон пайдо (С-155).</p><p>Умение поэта использовать в одном стихе метафору
                            &laquo;как цветок кипариса&raquo;, &laquo;как голубь и соловей&raquo; свидетельствует о его
                            мастерстве. В своей лучезарной газели &laquo;Недур&raquo; он уподобляет влюбленного прямо
                            цветку и использует метафору. В стихах поэта присутствуют три традиционных образа нашей
                            узбекской классической литературы - влюбленный, влюбленный и соперник:</p><p>Жавру зулмлар
                            ман зорга, эй гул, аён этмак недур,</p><p>Ким гами хажринг била багримни кон этмак недур
                            (С-194).</p><p>Хотя примером любящего является цветок, его цель &mdash; мучить любящего,
                            заставить его страдать в муках хиджры. Продолжая свои размышления, поэт снова обращается к
                            вопросам, ранившим сердце влюбленного. В Газели &ldquo;булбул каби оху фигон этмакни одат
                            килган&rdquo;, &ldquo;фалакка уз ахволидин&rdquo; ярко описывает боль любовника, который
                            жалуется.</p><p>Агахи ждет помощи от возлюбленной в своей газели, которая начинается в форме
                            стихотворения &laquo;Оташин рухсорин ул ай очса базм ара&raquo;. В самом первом стихе мы
                            находим метафоры и прилагательные. Он связывает прилагательное &laquo;огненный правитель&raquo;
                            с метафорой &laquo;того месяца&raquo;. Или прилагательные &laquo;чистая душа&raquo; и
                            &laquo;лаби лаби&raquo; в следующих стихах указывают на то, что поэт правильно использовал
                            художественные средства. Легкая, игривая тяжесть газели аруза написана в целевом море:</p>
                        <p>Кузи ултурса агар, гам йукки, топгум тоза жон,</p><p>Айласа лали лабидин бир буса эхсонгина
                            (С-154).</p><p>В газелях Садыка также существует традиция обращения к сабе. В одном из
                            стихотворений поэт неоднократно обращается к &laquo;сабо&raquo;, чтобы точнее описать
                            страдания влюбленного. &laquo;Сабо&raquo; &mdash; средство донесения боли любви до близкого
                            человека. &ldquo;Эй сабо, мандин салом ул сарвари хубона айт&rdquo;, &ldquo;Эй сабо, рахм
                            айлабон ул офати даврона айт&rdquo;, &ldquo;Эй сабо, йиглаб санга арзини бер, Садик гариб&rdquo;
                            стихи прямо подтверждают наше мнение. Если Садик использовал искусство крика через образ
                            Сабы, то в этом стихе он использует фразу: Если Садик использовал искусство крика через
                            образ Сабы, то в этом стихе он использует фразу: &ldquo;Фуркатида колгоним юз минг туман
                            армон аро&rdquo;, &ndash; Хотя правдоподобно полагать, что любовь усиливает боль любви
                            невозможным в жизни образом, она увеличивает эффективность газели. В следующем стихе он
                            перечисляет качества любовника и использует искусство фамильярности:</p><p>Васлинг истаб
                            кузларим доим сиришкафшолиг,</p><p>Ул юзи гул, сочи сунбул, кузлари мастона айт.</p><p>
                            Несмотря на то, что влюбленный находится в таком состоянии разлуки, он хочет быть опекуном
                            &laquo;клеветнического султана&raquo;, &laquo;того, кто обещает ложь&raquo;, &laquo;того,
                            кто страдает во время бедствия&raquo;, или, скорее, &laquo;тот, кто тот, кто безжалостен&raquo;.</p>
                        <p>В поэзии Садыка можно найти такие влиятельные художественные газели, как &laquo;не суд&raquo;,
                            &laquo;хануз&raquo;, &laquo;истамас&raquo;, &laquo;арзимас&raquo;. Каждая из них освещает
                            определенную сторону духовного мира лирического героя. В этом мире по-разному проявляются
                            страдания влюбленного, &laquo;проделки&raquo; любовника. В одном из своих стихотворений поэт
                            прекрасно доказывает свою точку зрения с помощью искусства анализа. По его словам, луна на
                            небе с разрешения своей любовницы смущенно проигрывает при споре о красоте. Словно солнце не
                            дало ей тепла, мучилась она, увидев свои волосы. Таким образом, поэт использует искусство
                            риторики:</p><p>Ой чекиб шармандалиг, мехринг нуридин офтоб,</p><p>Вой, сочинг савдоси
                            солмиш сунбул азосига тоб(С-158).</p><p>Как видите, поэт сравнивает символы луны, солнца и
                            солнечного быка с красотой земли. В другом своем стихотворении он обращается к знакомому
                            нам-сифату и перечисляет характеристики любовника:</p><p>Олди кунглимни мани бир тифлваш
                            жононгина,</p><p>Коши ё, киприклари ук, кузлари фаттогина (С-156).</p><p>&nbsp;В
                            классической литературе существует предсадикская традиция изображать брови, ресницы и глаза
                            как у заговорщика. В стихах поэта прекрасно описаны игры слов и тонкости смысла. В этом
                            стихе он создает пример искусства конфронтации, противопоставляя стихи:</p><p>Баски, ношод
                            айладинг Садикни хижронинг аро,</p><p>Хуштурур эмди висолинг ичра булса камёб (С-158).</p>
                        <p>Или в другом стихе он описывает горе любовника через искусство тазада и просит о пощаде:</p>
                        <p>Жабри бедодинг чекарман кеча-кундуз, эй пари,</p><p>Бермагил тангри учун мен зорга мунча
                            азоб.</p><p>В стихах поэта преувеличенно описывается красота любви и привязанности.
                            Известно, что в риторике преувеличивают горести влюбленного и лучше описывают красоту
                            земли:</p><p>Оразин курган киши хуршиди рахшон истамас,</p><p>Куйида тутган макон фирдавси
                            ризвон истамас (С-183).</p><p>Кто заботится о &laquo;кадди рафтори&raquo; в стихах &laquo;сарви
                            хиромон истамас&raquo; метафорически, выражает искусство метафоры и риторики в гармонии.
                            Искусство фамильярности поэт продолжает через газели. Каждое качество любовника он
                            сравнивает с чудом природы. В том числе, &ldquo;xоли хатти&rdquo; на базилик, &ldquo;лабинг
                            шахди&rdquo; напоминающий животное или &nbsp;&ldquo;коши ёй, кузи фаттон, киприги пайкон&rdquo;
                            воспетая за такие метафоры, пари лучше подходит лирическому герою, чем хуру гилмон. В поэзии
                            Садыка также есть гармония с газелями Аваз, которую можно найти непосредственно в газели
                            радифа &laquo;хануз&raquo;. Верный поэт использует синонимы для некоторых слов в своих
                            стихах. Например, в первой строфе газели Аваз &ldquo;Бир нозанин ишки аро&nbsp; шайдову
                            мафтунман хануз<a href="#_ftn6"><!--[if !supportFootnotes]-->[6]<!--[endif]--></a>&rdquo;
                            мисраси Садикда &ldquo;Бир пари шами рухи хажрида куз гирён хануз&rdquo; используется как. В
                            следующих стихах Садик цитирует синоним в форме &laquo;О друзья&raquo; вместо &laquo;О друг&raquo;
                            в газели Аваз. Каркас газели написан весом мусаммани махзуф, а стихи просты и беглы. В своих
                            стихах Садик обращается к искусству суммирования и разделения в традиционной лирической
                            поэзии:</p><p>Дусту душман ишк аро ахволи зоримни куруб,</p><p>Бири нолондур холимга, бири
                            хандондур хануз (С-194).</p><p>Значительная часть художественного мастерства в газели Баяни
                            отражена в широком использовании искусства и стиля сахарного тростника. Вот некоторые
                            примеры:</p><p>Талмех, кайтарик:</p><p>Мажнун Баянийдек нечун мажнуншиор улмас гахи,</p><p>
                            Юрмас жунун даштидаги андух сахроси аро (С-528).</p><p>Вопросы и ответы</p><p>Сказал: ул ой,
                            не кура сен, гуфтам хаводори шумо.</p><p>Сказал: недур матлаб санго, гуфтамки дийдори шумо
                            (С-532).</p><p>Кайтарик и хитоб:</p><p>Ранги мани булди чун найранги манидин аён,</p><p>Урма
                            найранг ила хифзи лофи манидорлик (С-545).</p><p>В комплексе &laquo;Хафт Шуаро&raquo;
                            примечательна поэзия талантливого принца Саади. Стихи поэта полны красивых и трогательных
                            метафор, мелодий и художественных элементов. В газели &laquo;Устина&raquo;, написанной в
                            виде отрывка, мысли выражены просто и бегло.</p><p>Влюблен и лирический герой поэта. Его
                            огорчил &quot;нолай афган&quot; в произведении &quot;розу шаб&quot;. В одном стихе
                            сочетается искусство метафоры, аллегории, метафоры и прилагательного, что усиливает
                            артистичность газели:</p><p>Нолаи афгон килурман рузу шаб булбул каби,</p><p>Гул юзининг
                            фуркати ичра булуб холим хароб (С-255).</p><p>Поэт сравнивает хиджру со степью и создает
                            прекрасный образец метафоры. В этой степи жаждущий влюбленный стремится к земле. Чтобы
                            спасти возлюбленного от этой ситуации, вам понадобится визол для варенья. В противном случае
                            для любителя &quot;багри-кебаба&quot; в степи естественно:</p><p>Ташнадурман дашти хижронинг
                            аро, эй нозанин,</p><p>Лутф айлаб жоми васлинг бирла килгил комёб.</p><p>&ldquo;В газели
                            &laquo;Лазиз&raquo; он готов выпить яд из рук возлюбленной. Страдания влюбленного лучше
                            чести других:</p><p>Захрини ичсамки дастингдан сани,</p><p>Ул асални нуш килгондин
                            лазиз(С-272)</p><p>По словам поэта, стыдясь красоты земли, он предпочитает закат. Луна,
                            сияющая посреди ночи, прячется в глубине зари, потому что не может поспорить с ее красотой.
                            Ради этой новой красоты влюбленный отказывается от &laquo;мира славы&raquo; и соглашается на
                            боль разлуки.</p><p>Сади Sa`diy &ldquo;Булуб ул мох менинг катлим учун боглади бел&rdquo;,
                            &ldquo;Хуршиди рухсоринг келур&rdquo; метафора в стихах, &ldquo;Ул килиб жавру ситам, сунг
                            айлабон лутфу карам&rdquo; В таких строках он описывает любовь влюбленных через контраст. Он
                            также использует искусство талме в гармонии со знакомым ун-сифот:</p><p>Вомику Фарход ила
                            Мажнун хадиси шухдин,</p><p>Дам урарга муттасил бу ошики зор оллида (С-253).</p><p>В стихах
                            поэта &ldquo;Лутф этибон, эй сабо, арзим дегил ёр оллида&rdquo; как возглас, &ldquo;Айлагил
                            бир-бир баён ул мохи рухсор оллида&rdquo; такие как неизбежные много. Использование таких
                            искусств служит для повышения искусства стихов. Лирический герой поэта живет надеждой
                            увидеть конец ночи. По его мнению, утро равно забралу. По словам Саади в стихах Лаффази:</p>
                        <p>&ldquo;Мани жихатдан хар бир байти бир гавхари якто эрди&rdquo;.</p><p>&laquo;Молодая&raquo;
                            газель радифи Саади дает прекрасные образцы искусства:Айламиш аклим адам бир масти бепарво
                            йигит,</p><p>Гул юзига булбули кунглумни хам шайдо йигит, &ndash;</p><p>например, искусство
                            метафоры или &ldquo;Кошки бу тийра кулбам равшан этса гул юзи&rdquo; обращение к
                            противоречию в стиле доказывает нашу точку зрения. Он также поэт &ldquo;Мисли Мажнун
                            кездирибон кучаи фуркат аро&rdquo;, &ldquo;Олам ахлига булмиш дами Исо &rdquo;правильно
                            использует такие талме. Искусство противостояния в следующем стихе развивает мысль поэта и
                            создает противоречие:</p><p>Шод этиб ман нотавон кунглумни ёлгон ахд ила,</p><p>Гамлиг этди
                            булмай ахлида кадампаймо йигит.</p><p>Отабек Тора Окил &mdash; один из талантливых
                            художников комплекса Хафт Шуаро. В стихах мудрецов искусство выражается в различных формах.
                            В своих стихах поэт воспевает боль любви и прелесть любви. По словам влюбленного, в
                            присутствии красоты возлюбленного солнце подобно частице, что сочетается с метафорой:</p><p>
                            Махжабинимнинг жабинидин хижил минг мохтоб,</p><p>Орази утрусида бир зарра янглиг офтоб
                            (С-476).</p><p>Или, в следующих стихах газели, он использует искусство знакомого нам-сифата
                            вместе с тасбихи мафрук. Другими словами, он последовательно приводит характеристики
                            возлюбленного и по-разному сравнивает их друг с другом. В стихотворении поэт использует
                            традиционные метафоры:</p><p>Хатти райхон, зулфи сунбул, комати сарви сихи,</p><p>Лали
                            жонбахшу кузи котил, сузи дурри хушоб.</p><p>Каждый стих газели художественный. Идея не
                            совсем точно повторяется в стихах. Может быть, раскроются новые свойства любовника:</p><p>
                            Ноз рахшин секретиб, майдонда булса жилвагар,</p><p>Рашк утига махликолар жонини килгай
                            кабоб.</p><p>Он уподобляет нежность возлюбленного к рахшу &ndash; лошади, и использует
                            искусство метафоры. Возлюбленный так прекрасен, что даже существа сгорают от зависти. В
                            каждом из своих стихотворений Акил открывает новые аспекты аллегории:</p><p>Бошима хар бало
                            ишкинг аро битса гар.</p><p>Кайтмагум харгиз ракиб ахлидек айлаб шитоб (С-477).</p><p>Как бы
                            ни страдал влюбленный от любви, он не повернется назад. Путь любви вечен, с него трудно
                            вернуться. В следующем байте он использует комбинацию метафоры и аллегории:</p><p>Бормагил,
                            эй гул, ракиб ахлини базми сори,</p><p>Ман каби килгил они фуркат утига кабоб.</p><p>Поэт
                            также обращается к неизбежному искусству в стихах:</p><p>Айладим онларга арз ишкига шайдо
                            эрканим,</p><p>Бир-бирин килдилар лутфни бисёр шух (С-487).</p><p>Акил, в частности,
                            является мастером таджохули ариф. По словам Атуллы Хусейни: Рассказчик что-то знает, но в
                            какой-то момент делает вид, что сам не знает.<a href="#_ftn7"><!--[if !supportFootnotes]-->
                                [7]<!--[endif]--></a> Спокойствие, удивительная глубина и впечатляющее обаяние
                            лирического героя этого искусства также ярко выражены в стихах Акила. Докажем это на основе
                            полного анализа следующего риторического вопроса:</p><p>Аклим олгон гул ва ё сарви санубарму
                            экан?</p><p>Йукса бир зебо каду гул юзли дилбарму эркан? (С-496)</p><p>Разум уместно
                            использует метафоры, ставшие традицией в нашей классической литературе, и включает их в фон
                            таджахули ариф:</p><p>Лабларида зохир улгон хатти анбармудурур,</p><p>Лал уза ёхуд зумрад
                            бирла&nbsp; зеварму экан?</p><p>Нет языка, чтобы описать его возлюбленного, он заслуживает
                            любой похвалы, он продолжает свою мысль в следующем стихе и использует искусство тансик
                            ус-сифат и талме вместе:</p><p>Мусотакаллум, мохюз, анбархату хам мушкбо,</p><p>Ошиккушу
                            жаллодхуёри жафокоринг келур.</p><p>Следуя учению о &laquo;любви в одного взгляда&raquo;,
                            поэт развивает свое мышление и непосредственно использует искусство повторения:</p><p>Ишк
                            аро ошик анга ман зордек йуктур вале,</p><p>Гарчи ошиклар анго бисёрдур, бисёрдур
                            (С-483).</p><p>По словам поэта, хотя в мире много влюбленных, лирический герой чувствует
                            себя одиноким. В своей газели &laquo;Явление&raquo;, посвященной описанию Аллаха, он
                            использует метод повеления и запрета для выражения своих чувств к Аллаху. В свою очередь, он
                            просит у Бога прощения:</p><p>Утиб сузи хатосин, ёраб арзини кабул эткил,</p><p>Сенга лойик
                            сипос айтурга йук Акилга хад пайдо.</p><p>Газель ума отличается тем, что сочетает в себе
                            искусство и наглядные пособия в искусстве. Следующие байты являются доказательством
                            этого:</p><p>Васл эли хар дам топар эрмиш лабидин тоза жон,</p><p>Билмон ул оби бакому йукса
                            кавсарму экан?</p><p>Не булур Акил киби арзхимни изхор айласам,</p><p>Бокмагудек холима хам
                            ёри кофирму экан?</p><p>Эта газель в весе барана с рамой, а борт такой: - В- - -В - - - В -
                            - - В -. Это романтическое стихотворение посвящено описанию возлюбленной. С самого начала
                            Пайрав был основан на искусстве таджохули ариф. Это искусство поэзии, которое означает
                            &laquo;сознательно или неосознанно&raquo;, означает, что поэт делает вид, что не знает, не
                            указывая ясно ни одной образной фразы в стихе.</p><p>В первой строфе газели лирический герой
                            уподобляет разрешение возлюбленной цветку, а свою фигуру &mdash; кипарису, будь то цветок
                            или кипарис, пленяющий мой разум, или прекрасный цветок с прекрасным лицом. Искусство
                            таджохули ариф было создано в результате выражения сравнительного отношения между лицом и
                            цветком, кадом и кипарисом и санувбаром в форме знания или незнания. В этом байте есть и
                            искусство коллектива.&ldquo; Искусство суммировать предметы и понятия в байте и выражать
                            образную идею на основе соотношения между ними<a href="#_ftn8"><!--[if !supportFootnotes]-->
                                [8]<!--[endif]--></a>&rdquo;. В этом стихе образ влюбленного сочетается с изображением
                            цветка по цвету, а рост кипариса и смоковницы с символом вертикальности.</p><p>В третьем
                            стихе также упоминается, что вода вечной любви подобна воде вечной жизни и небесному
                            источнику в преданности уст возлюбленного посредством искусства таджахули ариф. Восхваление
                            газелей также выражает красоту возлюбленного с помощью вопросов.</p><p>По-видимому, каждый
                            стих газели содержит ряд аналогий, а незнание поэтом самого себя делает стихи
                            привлекательными.</p><p>Подобно Садыку и Султани, Акил был непосредственно вдохновлен
                            творчеством Аваза, что можно увидеть в газели поэта &laquo;била&raquo;. В частности, в
                            работе Аваз:</p><p>Эй ким, таманно айлама базм этмак ул жонон била,</p><p>Ким унс тутгайму
                            пари сухбат тузуб инсон била<a href="#_ftn9"><!--[if !supportFootnotes]-->[9]
                                <!--[endif]--></a>.</p><p>В работе Акил:</p><p>Бу кеча базм этди ким, билмон бизи жонон
                            била.</p><p>Ким утурди кечани то тонггача афгон била (С-64).</p><p>Каждая строка&nbsp;
                            газели Акила создает образец лексического повторения, используя в начале слово &laquo;Ким&raquo;.</p>
                        <p>Чтобы повысить искусство газелей, поэты обращают внимание на правила рифмовки и радифа. В
                            частности, в газели Саади с радифом &laquo;окибат&raquo; в качестве рифмы были выбраны слова
                            &laquo;паришон, гирйон, фаровон, о-афган, пушаймон, шоду хандон&raquo;. Согласная &laquo;н&raquo;
                            в этих рифмующихся словах проговаривается. Буква Рави обычно повторяется в рифмующихся
                            словах.</p><p>В газели Садыка &laquo;истамас&raquo; рифма использует два слога в стихах:</p>
                        <p>Ком топмок орзу килгон лабининг шахдидин</p><p>Ранж чекмас, зулмат ичра оби хайвон
                            истамас.</p><p>Коши ёйига недин мужгон уки солмишдурур,</p><p>Катлиом этмак гар ул чашми
                            фаттон истамас(С-364).</p><p>В одном из стихов лучезарной газели Султани &laquo;кузинг&raquo;
                            используется рифма:</p><p>Бехад ситам узра ситамлар айлабон хажр утига</p><p>Ёкди мани субху
                            масо, эй дилбар сиймо, кузинг(С-282).</p><p>В газели поэта &laquo;кургач&raquo; мы находим
                            тип рифмы:</p><p>Машуки килса бедод,ошик булур басе шод,</p><p>Оё, не холат булгай ондин
                            давони кургач .</p><p>В газели Садика &laquo;хануз&raquo; есть рифма:</p><p>Дусту душман ишк
                            аро ахволи зоримни куруб,</p><p>Бири нолондур холима, бири хандондур хануз (С-357).</p><p>В
                            этом стихе они также используют искусство лафа и печати, чтобы увеличить мелодичность
                            стихов. То есть описывается как &quot;друг - нолон&quot;, &quot;враг - хандон&quot;.</p><p>
                            Искусство &nbsp;газелей Акила совсем другое. Поэт усиливает ударение, повторяя рифму в
                            стихах своей газели, которая начинается со стиха:</p><p>Хусн аро гулдек юзида булбулосо
                            зорман,</p><p>Ул пари рухсори чун гулзордур,гулзор.</p><p>В газели &laquo;Била&raquo;
                            рифмующиеся слова объединяются согласной &laquo;н&raquo;. В стихах такие слова, как &laquo;джонон,
                            афган, кан, джан, эхсан, хиджран, махитобон, хандон, гирйон, нолон&raquo; являются
                            рифмующимися словами, подчеркивающими основные значения. Кроме того, слово &laquo;Ким&raquo;
                            используется в начале каждого стиха, чтобы создать искусство повторения:</p><p>Ким колуб ул
                            ойдин айру зулмати хижрон аро,</p><p>Ким килур базмини равшан ул мохитобон била(С-64).</p>
                        <p>В то же время в некоторых газелях наблюдается несогласованность рифмованных слов. В некоторых
                            газелях Саади некоторые слова, принадлежащие к группе глаголов, не могут быть полностью
                            согласованы. Такие слова состоят из суффиксов, личных местоимений или времен и лишь частично
                            кажутся синонимами. Однако если убрать из слова эти суффиксы, рифмы не будет. Такое
                            несоответствие рифмы называется ийто<a href="#_ftn10"><!--[if !supportFootnotes]-->[10]
                                <!--[endif]--></a>.</p><p>Бевафога кунгул олдурмагил хеч,</p><p>Худо ёдин кулингдан
                            бермагил хеч(С-447).</p><p>Или рифмующиеся слова в следующих стихах, такие как &laquo;не
                            просить, не входить, не замораживать, не кормить&raquo; непосредственно образовали
                            фразеологизм.</p><p>Газель Саади &laquo;Абас&raquo; также содержит феномен ийто. Слова,
                            принадлежащие к семейству глаголов, используются в форме существительных действия:</p><p>
                            Беибодат умр уткармак абас,</p><p>Дилга гайри Оллох келтурмак абас(С-498).</p><p>В другом
                            месте слово &laquo;демак&raquo; выбрано как рифма в обоих байтах:</p><p>Хакни зикри хар
                            сузингда булмаса,</p><p>Ул сузинг жумласин демак абас.</p><p>&hellip; Садиё, булмасанг омил
                            узинг,</p><p>Бу сузингни халкка демак абас.</p><p><!--[if !supportFootnotes]--></p><p>
                            &nbsp;</p><!--[endif]--><p><a href="#_ftnref1"><!--[if !supportFootnotes]-->[1]
                                <!--[endif]--></a> Исхаков Йо. Словарь искусства слова. Т.: Заркалам, 2007.- 70 с..</p>
                        <p><a href="#_ftnref2"><!--[if !supportFootnotes]-->[2]<!--[endif]--></a> Феруз. Король Эльги
                            &mdash; раб любви. Т.: Литература и искусство, 1994. &ndash;С.57.</p><p><a href="#_ftnref3">
                                <!--[if !supportFootnotes]-->[3]<!--[endif]--></a> Навои А. Мой черный глаз. &ndash;Т.:
                            Литература и искусство, 1988. &ndash;С.434.</p><p><a href="#_ftnref4">
                                <!--[if !supportFootnotes]-->[4]<!--[endif]--></a> Исхаков Йо. Словарь искусства слова.
                            Т.: Заркалам, 2006. -С.112.</p><p><a href="#_ftnref5"><!--[if !supportFootnotes]-->[5]
                                <!--[endif]--></a> Аваз Отар. Избранные произведения. Т.: Узбекистон, 1956-С.213.</p><p>
                            <a href="#_ftnref6"><!--[if !supportFootnotes]-->[6]<!--[endif]--></a> Аваз Отар. Избранные
                            произведения. Т.: Узбекистан, 1956- С.97.</p><p>&nbsp;</p><p><a href="#_ftnref7">
                                <!--[if !supportFootnotes]-->[7]<!--[endif]--></a> Хусейни Атулла. Бадойи`ус-саное`. Т.,
                            1981.-С.83.</p><p><a href="#_ftnref8"><!--[if !supportFootnotes]-->[8]<!--[endif]--></a>
                            Ходжиахмедов А. Шедевр классического искусства. Т.: Шарк, 1999. - С.35.</p><p><a
                                href="#_ftnref9"><!--[if !supportFootnotes]-->[9]<!--[endif]--></a> Аваз Отар. Избранные
                            произведения. Т.: Узбекистан, 1956- С.56.</p><p><a href="#_ftnref10">
                                <!--[if !supportFootnotes]-->[10]<!--[endif]--></a> Исхаков Йо. Словарь искусства слова.
                            Т.: Заркалам, 2006. &ndash;С 109.</p>

                    @endif

                </div>
            </div>
        </div>
    </section>
@endsection
