@extends('user.master')
@section('title')
    @lang('public.t_2_2')
@endsection
@section('content')
    <section class="header1 cid-t79FXPTzxw mbr-parallax-background" id="header1-r">


        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(250, 250, 250);"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2"><strong>@lang('public.t_2_2')</strong></h1>


                </div>
            </div>
        </div>
    </section>

    <section class="features6 cid-t79G8qfLaI" id="features7-s">
        <!---->


        <div class="container">
            <div class="card-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-5">
                        <div class="image-wrapper">
                            <img src="{{asset('front/assets/images/rrrrr.png')}}" alt="foto">
                        </div>
                    </div>
                    <div class="col-12 col-lg">
                        <div class="text-box">
                            <h5 class="mbr-title mbr-fonts-style display-7"><strong>1.1. @lang('public.t_2_2')</strong></h5>
                            @if($lang=="uz")
                            <p class="mbr-text mbr-fonts-style display-7">

                                Ma`lumki, Xorazm adabiy muhiti oʻzbek mumtoz
                                adabiyotining yuksak darajada ravnaq topgan va ma`naviyatimiz takomilida oʻchmas iz
                                qoldirgan markazlaridan biridir. Umumoʻzbek adabiyoti taraqqiyotining har bir bosqichida
                                bu muhit vakillarining oʻziga xos oʻrni, betakror ijodiy qiyofasi va nufuzi bor. Uzoq
                                tarixiy va adabiy jarayonda shakllangan hamda takomillashib borgan an`analar, badiiy
                                tafakkur tarzi, she`riyat, madaniyatga ixlosmandlik, boy adabiy manbalarning mavjudligi
                                vohada har jihatdan mukammal va qizgʻin ijodiy muhitni vujudga keltirdi.
                                <br>Bu muhit takomilining yuqori choʻqqisi XIX asrning ikkinchi yarmi va XX asr
                                boshidagi davr boʻldi. Shu bilan birga, bu yuksalishga zamin boʻlgan avvalgi
                                bosqichlardagi ijodiy yutuqlarni va adabiy an`analarning oʻrnini ham qayd etish zarur.
                                <br>Bunda, birinchi navbatda, Munis, Ogahiy va Feruzning tashabbuskorligi koʻzga yaqqol
                                tashlanadi.
                                <br>Bizningcha, bu tarixiy davr adabiy muhiti mohiyatini belgilashda XIX asrni tayanch
                                zamin sifatida e`tirof etish joiz. Chunki yuqorida nazarda tutilayotgan davr adabiy
                                muhitining asoschisi va tashkilotchisi Shermuhammad Munis (1778-1829) boʻlgan edi.
                                Ogahiy bu muhitga yanada keng qamrov va mazmun bagʻishladi, Feruz esa unga homiylik
                                qildi. Feruzning bu sohadagi tashabbuskorligi yaqin vaqtlargacha xolis e`tirof etilmagan
                                boʻlsa ham, adabiyotimiz jonkuyari, atoqli adib Abdulla Qahhor 1962 yildayoq bu xususda
                                haq gapni aytgan edi: “Feruz mashhur lirik shoir, musiqashunos, kompozitor, yaxshi
                                tarjimon, Umarxon singari oʻz zamonasining shoirlarini oʻrdasiga yiqqan, 1873 yilda
                                bosmaxona sotib olib, Xorazmda birinchi kitob bostirgan odam. Shu odamni yuz yildan
                                keyin qora kursiga oʻtqazib, sovet qonuni bilan sud qilishdan nima murod hosil boʻladi?
                                Koʻp xotin olish yolgʻiz Feruzning aybi emas, balki butun feodal jamiyatning illatidir.
                                O`sha jamiyatda koʻp xotin olish gunoh hisoblangan emas”[1].
                                <br>
                                <br>
                                <br>
                            </p>
                            @endif
                            @if($lang=="ru")
                            <p class="mbr-text mbr-fonts-style display-7">Известно, что литературная среда Хорезма является узбекской классикой.
                                Литература высокоразвита и неизгладимый след в развитии нашей духовности
                                остался один из центров. На каждом этапе развития узбекской литературы
                                Представители этой среды обладают особым положением, неповторимым творческим имиджем и авторитетом. Длинная
                                традиции складывались и совершенствовались в историко-литературном процессе, художественном
                                образ мышления, поэзия, культура, богатые литературные источники
                                создали идеальную и живую творческую атмосферу в оазисе.
                                <br> Пик этой среды пришелся на вторую половину 19 века и 20 век.
                                было начало ХХ века. В то же время именно предыдущий привел к подъему
                                Также важно отметить творческие достижения этапов и место литературных традиций.
                                <br> В этом, прежде всего, очевидна инициатива Муниса, Огахи и Феруза.
                                отброшен.
                                <br> На наш взгляд, этот исторический период является основой XIX века в определении сущности литературной среды.
                                как грунт. Поскольку упомянутый выше период является литературным
                                Шермухаммад Мунис (1778-1829) был основоположником и организатором среды.
                                Огахи придал среде больше размаха и содержания, а Феруз спонсировал ее.
                                делал. До недавнего времени инициатива Феруза в этой сфере объективно не признавалась.
                                Однако известный писатель Абдулла Каххор является поклонником нашей литературы.
                                Он был прав: «Феруз — известный лирик, музыковед, композитор, хороший
                                В 1873 году переводчик собрал поэтов своего времени, таких как Умархан
                                Он купил типографию и издал первую книгу в Хорезме. Этот человек сто лет
                                Какой смысл шантажировать и судить по советским законам?
                                В полигамии виноват не только Феруз, а вина всего феодального общества.
                                В том обществе многоженство не было грехом».[1]
                                <br>
                                <br>
                                <br></p>
                            @endif
                            @if($lang=="en")
                            <p class="mbr-text mbr-fonts-style display-7">It is known that the literary environment of Khorezm is Uzbek classic
                                The literature is highly developed and an indelible mark on the development of our spirituality
                                is one of the centers left. At every stage of the development of Uzbek literature
                                Representatives of this environment have a special place, a unique creative image and prestige. Long
                                traditions formed and improved in the historical and literary process, art
                                way of thinking, poetry, culture, rich literary sources
                                created a perfect and lively creative atmosphere in the oasis.
                                <br> The peak of this environment was in the second half of the 19th century and the 20th century
                                was the beginning of the twentieth century. At the same time, it is the previous one that led to the rise
                                It is also important to note the creative achievements of the stages and the place of literary traditions.
                                <br> In this, first of all, the initiative of Munis, Ogahi and Feruz is obvious.
                                discarded.
                                <br> In our opinion, this historical period is the basis of the XIX century in defining the essence of the literary environment
                                as a ground. Because the period referred to above is literary
                                Shermuhammad Munis (1778-1829) was the founder and organizer of the environment.
                                Ogahi gave the environment more scope and content, and Feruz sponsored it
                                did. Until recently, Feruz's initiative in this area was not objectively recognized
                                However, Abdullah Qahhor, a well-known writer and a fan of our literature, wrote about it in 1962.
                                He was right: “Feruz is a famous lyric poet, musicologist, composer, good
                                In 1873, the translator brought together poets of his time, such as Umarkhan
                                He bought a printing house and published the first book in Khorezm. This man for a hundred years
                                What is the point of being blackmailed and tried under Soviet law?
                                Polygamy is not Feruz's fault alone, but the fault of the whole feudal society.
                                In that society, polygamy was not a sin. ”[1]
                                <br>
                                <br>
                                <br></p>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content5 cid-t79GjoiokT" id="content5-u">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">


                    <p class="mbr-text mbr-fonts-style display-7"><br>
                        @if($lang=="uz")
                            <br>Feruz nomi bilan bogʻliq XX asr boshidagi (birinchi choragidagi) adabiy muhit qator oʻziga
                            xosliklarga ega. Unda, bir tomondan, koʻp asrlik adabiy an`analar davom ettirilib, ustuvorlik
                            qilayotgan boʻlsa, ikkinchi tomondan, zamonaviy yangicha qarashlar, ma`rifatparvarlik gʻoyalari
                            tobora kengayib borayotgan edi. Badiiy ijodda she`riyat salmoqli oʻringa ega boʻlib, uning
                            mazmunini ishqiy-axloqiy motivlar tashkil etardi. Shu bilan birga, adabiy jarayondagi jonlanish
                            an`anaviy mavzularning yanada boyishida, janrlarning shakliy rang-baranglashuvi, umuman, badiiy
                            ijod ijtimoiy-estetik ahamiyatining oshishida koʻrinadi.Bu davrda mumtoz lirikadagi yetakchi
                            janr – gʻazalning mavzu doirasi ancha kengaydi. Unda kuylanib kelingan muhabbat mavzusiga
                            ijtimoiy-siyosiy va ma`rifiy fikrlar qoʻshildi, qisman shakliy oʻzgarishlar yuz berdi.
                            <br>
                            <br>Tabiiyki, adabiy muhitning harakatlantiruvchi kuchi ijodkorlardir. Bu jihatdan Feruz
                            muhitining uyushganlik xarakterini alohida ta`kidlash kerak. Muhimi shundaki, bu muhitdagi
                            ellikka yaqin ijodkorlar turli ijtimoiy toifa, kasb va millatga mansubligidan qat`i nazar
                            muayyan darajada badiiy iqtidorga ega boʻlishgan, turli janrlarda asarlar yaratishgan. Ularni
                            shartli ravishda quyidagicha guruhlarga ajratish mumkin:
                            <br>
                            <br>1. Feruz shajarasiga mansub ijodkorlar (Murodiy, Komyob, Farrux, Sultoniy, Sodiq, Sa`diy,
                            Oqil, Bayoniy va boshqalar);
                            <br>
                            <br>2. Feruz tomonidan bevosita saroy xizmatiga jalb etilgan ijodkorlar (Tabibiy, Komil, Doiy,
                            Devoniy, Mirzo, Habibiy, Xodim va boshqalar);
                            <br>
                            <br>3. Rasmiy ravishda saroy xizmatida boʻlmasa-da, Feruz nazarida boʻlgan va adabiy muhitda
                            sezilarli iz qoldirgan ijodkorlar (Avaz, Niyoziy, Mutrib, Faqiriy, Soʻfi va boshqalar).
                            <br>
                            <br>Feruzning ijodkorlarga munosabatida ularning badiiy salohiyati asosiy mezon edi. Shunday
                            boʻlsa ham, barcha shoirlarning ijodiy qobiliyati, mahoratlari bir xil darajada yuksak emasdi.
                            Ayrimlari koʻp hollarda an`ana doirasidan chiqolmagan. Lekin adabiy muhitning tabiiy manzarasini
                            yaxlit tasavvur qilish, ayrim qirralarini aniqlash va ijodiy jarayonning bir qolipdagi hodisa
                            emasligini anglashda ular ijodining ham muayyan oʻrni bor.
                            <br><br>XX asr boshidagi Xorazm adabiy muhitining asosiy xususiyatlari davrdagi ijtimoiy-siyosiy
                            oʻzgarishlar, milliy uygʻonish tuygʻusining kuchayishi, badiiy ijodda an`ana va yangilanishning
                            uygʻunlashuvi kabi omillar bilan bogʻliqdir. Bu xususiyatlarni asosan quyidagilarda koʻramiz:
                            <br>
                            <br>a) adabiy muhit boy va tarixan uzoq adabiy tajribalarga suyangan holda ularning yangi
                            asrdagi davomi sifatida shakllandi va oʻzbek mumtoz adabiyotining soʻngi, yangi davr
                            adabiyotining esa boshlanish bosqichi boʻldi;
                            <br>
                            <br>b) adabiy muhit vakillarining aksariyati bevosita, bir qismi esa saroy bilan bilvosita
                            bogʻlangan boʻlsa ham, Feruz shoh sifatida ularning umumiy homiysi va muhit tashkilotchisi,
                            shoir sifatida ijodkor hamkori edi;
                            <br>
                            <br>v) ijodkorlarning asosiy adabiy mahsuli boʻlgan lirik she`riyatdan tashqari, qator epik,
                            tarjima va tarixiy asarlarning yaratilgani adabiy muhit xususiyatlaridan biridir. Bu borada
                            Tabibiy dostonlari, Otaniyoz Niyoziy, Mirzo tarjimalari, Bayoniyning “Shajarai xorazmshohiy”,
                            “Xorazm tarixi”, Komyobning “Tavorix ul-xavonin”, “Muntaxab ul-voqeot” tarixiy asarlari va
                            boshqalarni koʻrsatish mumkin;
                            <br>
                            <br>g) adabiy muhitga xos jihatlardan yana biri lirik janrlar rang-barangligi. Bu sohada
                            yigirmaga yaqin janr va shakllarda ijod etgan ustoz Ogahiy an`anasi davom ettirildi va
                            shoirlarning ayrimlari oʻn toʻrtta janrda ijod etishdi. Tabiiyki, bular orasida gʻazal va
                            muxammaslar asosiy oʻrin tutadi;
                            <br>
                            <br>d) adabiy muhit namoyandalarining ijodiy takomilida Navoiy, Fuzuliy, Munis va Ogahiy
                            dahosidan bahramandlik, shuningdek, zullisonaynlik an`anasi ham muhim omil boʻldi. Ustozlarga
                            izdoshlik asosan ijodiylik kasb etdi, oʻzbek va fors tillarida ijod qilish esa har bir shoirga
                            xos xususiyat edi;
                            <br>
                            <br>e) muhim jihatlardan yana biri shundaki, shoirlar ijodi koʻp qirrali edi. Ular adabiy
                            ijoddan tashqari, xattot, musiqashunos, tarjimon, tarixnavis ham boʻlganlari bois bu ijod
                            qorishiq xarakter kasb etdi;
                            <br>
                            <br>j) adabiy muhitning oʻziga xosligini ifodalovchi asosiy xususiyatlardan biri – badiiy
                            asarlarning kitobat – devon, bayoz, tazkira, majmua shakliga keltirilishi va targʻib qilinishida
                            namoyon boʻladi. Xususan, tazkiralarda oʻsha davr ijodkorlari, jumladan, “Haft shuaro”ga kirgan
                            shahzoda shoirlar biografiyasi va ijodiy faoliyati haqida qimmatli ma`lumotlar mavjud.
                            <br>
                            <br>Umuman, bu xususiyatlar madaniyat va san`at sohasidagi rivojlanishga, adabiy jarayonning
                            qizgʻin xarakter kasb etishiga, ijodkorlar faolligining oshishiga, adabiy janrlar, xususan,
                            she`riyatning mavzu va gʻoyaviy koʻlamdorligiga, an`anaviylikning yangicha shakl va mazmun bilan
                            boyishiga hamda kitobat ishlarining keng yoʻlga qoʻyilishiga imkon yaratdi. Zero, bu davrda
                            Feruz saroyida va undan tashqarida yashab ijod etgan shoirlar tomonidan koʻplab asarlar
                            yaratilgani, deyarli har shoirning bir yoxud ikkitadan devon tuzgani ularni ommaga yetkazish,
                            targʻib qilish, kitobxonlikni kengaytirishni taqozo qilardi. Natijada, shaxsan Feruz tashabbusi
                            va homiyligi bilan badiiy va adabiy-tarixiy asarlarni qoʻlyozmadan tashqari, bosma usulda
                            koʻpaytirish maqsadida XIX asrning saksoninchi yillaridan boshlab litografiyadan foydalanish
                            joriy etildi.
                            <br><br>Darhaqiqat, toshbosmaning yoʻlga qoʻyilishi adabiy muhitdagi jonlanishning kuchayishiga,
                            ijodkorlar ragʻbatini oshirishga va kitob holidagi manbalar sonining tez koʻpayishiga imkon
                            berdi. Turli bayoz, majmua, tazkiralar tuzishning nisbatan tezlashuvida ushbu omillar sezilarli
                            rol oʻynadi. Ammo bu hol qoʻlyozma amaliyotini butunlay siqib chiqarolmadi. Bu sohada Mulla
                            Boltaniyoz, Mulla Karimbergan, Mulla Qurbonniyoz, Muhammad Panoh Xudaybergan, Matyoqub va
                            Muhammad Yusuf hamda boshqa devon va kotiblarning xizmatlari katta boʻldi.
                            <br>
                            <br>Xorazm adabiy muhitida muhim oʻrin egallagan bayozlar Sharq adabiyotiga xos bayozchilik
                            an`anasining asosiy xususiyatlarini aks ettirish bilan birga, muayyan oʻziga xoslikka ham ega.
                            Bu hol bayozlarning janriy va mavzu jihatdan tabaqalashuvi hamda zullisonaynligida koʻrinadi.
                            Jumladan, Feruz davrida tuzilgan “Bayozi majmuai ash`or” va “Bayozi ash`or” turli lirik
                            janrlardagi she`rlardan tuzilgan boʻlib, ishq mavzusini tarannum etsa, “Bayozi musaddasot”,
                            “Bayozi muxammasot”lar faqat musammat shakllari, “Bayozi ruboiyot” esa birgina ruboiy janri
                            namunalaridan iborat boʻlib, ham ishqiy, ham ijtimoiy-falsafiy mavzularga bagʻishlangan.
                            <br>
                            <br>Shuningdek, bir va bir necha shoirlar asarlaridan bayoz tuzish ham keng tarqalib, bulardan
                            ikkinchisi salmoqlidir. Binobarin, “bayozlar erkin ravishda tuzilib, turli davr shoirlarining
                            rang-barang she`rlarini oʻzida mujassamlashtirgan toʻplam sifatida ular tarkibida ba`zan mashhur
                            shoirlarning devonlarida ham mavjud ayrim she`rlarning uchrashi”[2] bayozchilikka xos tipologik
                            xususiyat boʻlgani holda, ayrim Xorazm bayozlari tuzuvchi xohishi asosida, koʻpincha, Feruz
                            topshirigʻi bilan tuzilgan.
                            <br>
                            <br>Tabiiyki, ularda “Bayoz tuzishga farmon bergan shaxs va tuzuvchining shoir haqidagi
                            sub`ektiv tushuncha hamda tuygʻulari bayoz tarkibidagi she`rlarning gʻoyaviy mazmuni orqali
                            ifodalanadi”[3]. Feruz farmoniga muvofiq, shoirlar gʻazallari asosidagi ashulalardan ham maxsus
                            bayozlar tuzilgani Xorazm bayozchiligining yana bir xususiyatidir[4].
                            <br>
                            <br>Xorazm adabiy kitobatchiligi silsilasida majmualar ham muayyan mavqega ega boʻlib, mumtoz
                            ijodiy merosning ancha qismini oʻzida mujassam etadi. Ularning tuzilishi tuzuvchining maqsadiga,
                            dunyoqarashi va shaxsiy mayliga hamda mavjud an`analarga rioya qilishiga bogʻliq boʻlib,
                            majmualar bayozlardan farqli oʻlaroq, maxsus tanlangan she`rlar asosida mavzu va gʻoya
                            yoʻnalishiga koʻra bunyod etiladi. Chunonchi, “Haft shuaro” majmuasidagi she`rlarda
                            ishqiy-ma`rifiy mavzu, “Yugʻurum” (1923) majmuasidagi she`rlarda esa inqilobiy mavzu
                            yetakchidir. Shu bilan birga, ularda shoirlar ijodi xususidagi ayrim ma`lumotlar ham uchraydi.
                            Mulla Bekjon tomonidan nashr etilgan “Yugʻurum” majmuasining bu jihatini adabiyotshunos
                            A.Abdugʻafurov alohida ta`kidlab yozgan edi:
                            <br> <br>“Mulla Bekjon” toʻplamidagi boshqa asarlar qatorida, ularning (Bayoniy, Mutrib, Safo
                            Mugʻanniy she`rlari – I.X) har biriga kichik-kichik izohlar beradi, qachon yozilgani va qaysi
                            manbadan olib chop etilayotganligini aniq koʻrsatadiki, bu davr adabiy jarayonini hamda konkret
                            ijodkor merosini oʻrganishda, uning gʻoyaviy-badiiy evolyusiyasini belgilashda muhim ahamiyat
                            kasb etadi”[5].
                            <br>
                            <br>Ikkinchidan, majmualarda she`r mualliflari toʻgʻrisida, garchi qisqa boʻlsa-da, biografik
                            ma`lumotlar uchraydi. Shu jihatdan aksariyat majmualar oʻzida asosan badiiy asarlarni jamlagani
                            sababli bayozga, qisman shoirlar haqidagi muxtasar ma`lumotlarni aks ettirgani bois tazkiraga
                            xos xususiyatlarga ham ega boʻladi. Shuningdek, majmualar har bir shoirning faqat saylanma
                            she`rlaridan ham tuzilishi mumkin, bayozlarda esa, odatda, she`riy parchalar cheklanmaydi,
                            ularni qat`iy davrlashtirish tamoyiliga hamisha amal qilinmaydi.
                            <br>
                            <br>Xorazm adabiy muhiti xususidagi qimmatli ma`lumotlarning muayyan qismi tazkiralarda mujassam
                            boʻlib, u Sharq mumtoz adabiyotshunosligida salmoqli oʻringa egadir*.
                            <br>
                            <br>Tazkira, odatda, muayyan tarixiy davrga mansub adabiy-tanqidiy qarashlarni, bir yoxud turli
                            davrlar shoirlar hayoti va ijodini yorituvchi an`anaviy janr sifatida oʻzbek
                            adabiyotshunosligida ham mavjud edi.
                            <br>
                            <br>Tom ma`noda oʻzbek tilidagi ilk tazkira Navoiyning “Majolis un-nafois”idan boshlangan
                            tazkirachilik mezonlari tamoyillari keyingi davrlar uchun asosiy yoʻl-yoʻriq boʻldi. Bu asarda
                            tazkirada ikki qirra – matn (she`riy parchalar) va ijodkor hayoti hamda asarlari haqidagi
                            ma`lumotlar talqini mavjudligi tazkiraning tub xususiyati ekanini koʻrsatdi va Xorazm
                            tazkirachiligi uchun ham ilhom va ragʻbat manbai boʻldi.
                            <br><br>Toʻgʻri, Xorazmda XX asrgacha mumtoz tazkirachilik namunalari yaratilmadi. Ammo bu hol
                            adabiy muhitning qusuri emas, balki oʻziga xosligi boʻlib, asosiy diqqat original badiiy
                            asarlar, adabiy-tarixiy solnomalar, shuningdek, tarjima asarlar yaratishga qaratilgani bilan
                            izohlanadi. Shunday boʻlsa-da, XX asrgacha yozilgan qator asarlarda tazkiraga xos ayrim unsurlar
                            – muayyan davr adabiy muhiti, shoirlar hayoti va ijodiga oid muxtasar ma`lumotlar uchraydi. Bu
                            jihatdan Munis (1778-1829) va Ogahiy (1809-1874) asarlari xarakterli boʻlib, ularda XVIII-XIX
                            asrlar adabiy hayotiga doir qimmatli faktlar muayyan munosabat bilan bayon etiladi. Buni
                            adabiyotshunos B.Valixoʻjayev alohida ta`kidlab, shunday yozgan edi: “Munis Xorazmiyning bu
                            asarida (“Firdavs ul-iqbol” – I. X) Xorazm diyoridagi tarixiy, madaniy, adabiy muhit, uning
                            ayrim namoyandalari haqida qimmatli ma`lumotlar keltirilgan. Xuddi shu manba tufayli adabiyot
                            tarixi uchun Mavlono Vafo, Pahlavonquli Ravnaq, Muzaffarxoʻja Kiromiyga oʻxshash qalamkashlar
                            kashf etildi”[6]. Shuningdek, Ogahiy oʻzining “Riyoz ud-davla”, “Gulshani davlat”, “Shohidi
                            iqbol” va boshqa tarixiy asarlarida ham oʻtmishda yashagan yoxud oʻziga zamondosh boʻlgan
                            ijodkorlar haqida muhim faktlarni qayd etadi. Jumladan, u “Riyoz ud-davla” asarida mashhur
                            donishmand shoir va kurashchi Pahlavon Mahmud (1247-1326) fazilatlarini loʻnda va aniq
                            ta`riflaydi:
                            <br>
                            <br>“Firdavsbahr shahri Xivaqda qudvat ul-avliyo, murshid ul-atqiyo maxsusi borgohi mulki vadud
                            hazrati Pahlavon Mahmud quddisa sirruhu”[7].
                            <br>
                            <br>Bundan tashqari, bu asarida Ogahiy oʻz ahvoli, ruhiyati, adabiy laqabi va olimu shoirlar
                            bilan muloqoti xususida ham ma`lumotlar berib, jumladan, uning hasbi hol yoʻnalishidagi sakkiz
                            misra masnaviysini keltiradi. “Gulshani davlat” asarida esa Xivadagi adabiy jarayon va uning
                            vakillari Muhammad Nazar, Pahlavon Niyozboy va Xolis haqida ma`lumotlar beradi[8].
                            <br>
                            <br>Yuqorida qayd etilgan adabiy qarashlar Xorazm tazkirachiligi uchun gʻoyaviy asos boʻlib
                            xizmat qildi va bu tazkirachilik tobora takomillashib, kitobxonlik hamda badiiy asarlarga
                            qiziqish zamirida shakllandi. Zero, “shunday asarlar toʻplamlari ilk tazkiralar edi”[9]. Demak,
                            mumtoz tazkiralarning tub asosi toʻplam (majmua) boʻlib, bora-bora ular adabiy-tanqidiy, hatto,
                            nazariy qarashlar bilan boyib, takomillashib borgan. Shu sababli tazkirada majmuaga xos adabiy
                            parchalarning boʻlishi janr talabiga xilof emas, balki uning xususiyatlaridan biridir. O`rta
                            asrlardan, xususan, XIX asrdan yirik madaniy–adabiy markazlardan biriga aylangan Xiva shahrida
                            badiiy asarlar yaratish, toʻplamlar tuzish, mutolaa qilish va targʻib etish ishlari kuchayib,
                            oʻsha asrning oxiridan XX asrning boshlarigacha boʻlgan Feruz davrida yanada keng qamrovlik kasb
                            etdi. Zero, mumtoz tazkirachilikning xuddi shu davrda yuzaga kelishi va qisqa vaqtda turli
                            xarakterdagi tazkiralarning tuzilishi ham ana shu omillar bilan dalillanadi. Toʻgʻri, bu davrda
                            Qoʻqon va Buxoro adabiy muhitlarida ham qator tazkiralar maydonga keldi (Fazliy, Pirmastiy
                            tazkiralari). Ularning Xorazm tazkirachiligi namunalari boʻlgan Ahmadjon Tabibiy tazkiralari
                            bilan mushtarak va farqli jihatlari (til, uslub, hajm, ifoda shakllari va boshqalar) haqida
                            adabiyotshunoslikda muayyan fikrlar aytilgan[10].
                            <br> <br>Tazkiraning tadrijiy takomili va janriy belgilariga asoslanib, adabiyotimiz bilimdonlaridan
                            biri shoir Maqsud Shayxzoda tazkira tarkibidagi quyidagi komponentlarga diqqat qaratadi: “a)
                            shoirning ismi, laqabi, qayerdanligi haqida qisqa ma`lumot; b) shoirning hayoti, xarakteri,
                            ba`zi xususiyatlari toʻgʻrisida qisqa ma`lumot; v) shoirning ijodi, asarlari, asarlaridagi
                            xususiyati, asarlarning oʻz davrida qay darajada shuhrat topganligi; g) bu shoirga tazkira
                            muallifining munosabati va yoki, aksincha, shoirning tazkirachiga nisbatan tutgan mavqei (bu
                            ma`lumot shoir bilan tazkirachi oʻrtasida shaxsiy tanishlik boʻlgan taqdirdagina beriladi); d)
                            shoir haqida xalq ogʻzida yoxud muallif xotirasida saqlangan biron qiziq voqea yoki latifa; e)
                            shoirning nazmidan biron misol (bu, odatda, gʻazal yo qasidaning matlai, biron masnaviy yoki
                            ruboiy va yoxud qit`a boʻladi); j) shoir umrining oxiri (agar oʻlgan boʻlsa, qayerda dafn
                            etilgani, albatta, koʻrsatiladi)”[11].
                            <br>
                            <br>Tom ma`nodagi mukammal tazkira uchun xarakterli boʻlgan bu shakl asosini ikki jihat –
                            shoirning ijodkor shaxs sifatidagi tavsifi va asarlarini baholash talqini tashkil etadi.
                            Tabiiyki, janr uchun umumiy bu tamoyillar barcha tazkiralarda birday namoyon boʻlmasligi mumkin.
                            Bu hol tazkira evolyusiyasidagi evrilishlar, har bir adabiy jarayonga xos xususiyatlar, lokal
                            an`analar, tazkirachining maqsadi va iqtidori kabi omillar bilan izohlanadi. Shu tufayli ayrim
                            tazkiralarda adabiy qarashlar, ba`zilarida shoirning nazmidan keltirilgan misollar haqidagi
                            fikrlar ustuvor boʻlishi tabiiy. Bu esa tazkirani guruhlashda ular yaratilgan adabiy davr
                            xususiyatlari bilan birga, janr takomilidagi struktural va mazmuniy oʻziga xoslikni ham nazarda
                            tutishni taqozo etadi. Bu tazkiralar nisbatan salmoqli boʻlgan XIX va XX asrlar tazkirachiligi
                            mohiyatini belgilashda, ayniqsa, muhimdir.
                            <br>
                            <br>Adabiyotshunos B.Valixoʻjayev tazkiralarni vaqt omili nuqtai nazaridan ikki guruhga
                            ajratadi: 1) tarixiy-zamonaviy (salaflar va zamondoshlar); 2) zamondoshlar haqidagi
                            tazkiralar[12]. Bularning har biriga xos jihatlarni batafsil tahlil etadi. Olim O`rta Osiyoda X
                            asrdan boshlangan tazkirachilik tarixini yoritar ekan, XX asr boshida oʻzbek tilida yaratilgan
                            tazkiralar, jumladan, Xorazm tazkirachiligiga (Tabibiy qalamiga mansub) ham muxtasar toʻxtab
                            oʻtadi hamda zamondoshlar haqidagi tazkiralar sifatida ayrim jihatlarni ta`kidlaydi.
                            <br>
                            <br>Shuni ta`kidlash kerakki, XX asrda Xorazm tazkirachiligida “Haft shuaro” va Laffasiy hamda
                            Xodim asarlari maydonga keldi. Afsuski, ular hozirgacha maxsus oʻrganilmay kelmoqda. (Laffasiy
                            tazkirasi S. Samandarova tomonidan qisman oʻrganilgan boʻlib, Xodim tazkirasi mustaqillik
                            yillarida chop etildi).
                            <br> <br>Biz Sharq tazkirachiligi xususiyatlarini hisobga olgan holda hamda yuqoridagi fikrlarga
                            tayanib, Xorazm tazkirachiligi namunalarini, shartli ravishda quyidagicha guruhlashni ma`qul
                            koʻrdik:
                            <br>
                            <br>1. An`anaviy tazkiralar – Tabibiyning “Majmuai si shuaroi payravi Feruzshohiy” va
                            “Muxammasoti majmuat ush-shuaroi Feruzshohiy”, Laffasiyning “Tazkirai shuaro” (“Xiva shoir va
                            adabiyotchilarining tarjimai hollari”).
                            <br>
                            <br>2. Tazkira-majmua – “Haft shuaro” (“Shahzoda shoirlar devoni”)
                            <br>
                            <br>3. Biografik-memuar tazkira (Xodimning “Xorazm navozandalari” esdaliklari).
                            <br>
                            <br>Bulardan Laffasiyning asari tazkiraning tarixiy-zamonaviy turiga (unda oʻtmishda yashagan
                            Munis va Ogahiy haqida ma`lumotlar mavjud), qolganlari esa zamondoshlar toʻgʻrisidagi tazkiraga
                            mansubdir.
                            <br>
                            <br>Xarakterli tomoni shundaki, Xorazm an`anaviy tazkiralari adabiy parchalarning janriy
                            mansubligi jihatidan ichki tabaqalanishga ham ega boʻlib, uni quyidagicha tasniflash mumkin:
                            <br>
                            <br>1) faqat gʻazal janridagi asarlarga yozilgan payravlardan tuzilgan (Tabibiyning birinchi
                            tazkirasi);
                            <br>
                            <br>2) musammat shakllari – muxammas va musaddaslardan tashkil topgan (Tabibiyning ikkinchi
                            tazkirasi);
                            <br>
                            <br>Bu tazkiralarning yana bir oʻziga xosligi shundaki, birinchisida payrav uchun bir shoir –
                            Feruz gʻazallari, ikkinchisida esa Feruz va Ogahiy gʻazallari asos-matn qilib tanlangan.
                            <br>
                            <br>3) aralash janrlardan – gʻazal, masnaviy, toʻrtlik (Laffasiy tazkirasi)dan tuzilgan.
                            <br>
                            <br>Albatta, tazkiralarda keltirilgan bu asarlarga munosabat bilan birga, shoirlar hayoti va
                            faoliyatiga oid ma`lumotlar ham bayon etilgan. Koʻrinadiki, tazkiralarda adabiy parcha (she`riy
                            matn) hamda shoir hayoti va ijodini baholash tipologik hodisadir. Ammo ayrim majmualarda muayyan
                            adabiy qarashlarning mavjudligi (garchi batafsil boʻlmasa ham) ularni tazkiraga yaqinlashtiradi.
                            Shuni hisobga olib, atoqli adabiyotshunos A.Hayitmetov Shayx Ahmad Taroziyning “Funun
                            ul-balogʻa”si oʻzbek tilidagi adabiyotning nazariy masalalari boʻyicha ilk mukammal qoʻllanma
                            boʻlishi bilan birga, she`riy tazkira xarakteridagi bir asar ham ekanini ta`kidlagan edi[13].
                            Bunda olim asardagi birgina Lutfiy tarjimai holiga oid tazkiraga xos ma`lumotlarni nazarda
                            tutgan. Shu qarashga asoslanib, biz “Haft shuaro”ni shartli ravishda tazkira-majmua deb atadik.
                            Chunki unda she`riy asarlardan tashqari, ikki shoir – Sultoniy va Farrux haqida nasriy
                            ma`lumotlar ham berilgan. Zero, “Haft shuaro” oʻzida asosan majmua, qisman tazkira xususiyatlari
                            sintezlashtirilgan adabiy manbadir.
                            <br><br>Tazkiralarning uchinchi guruhiga mansubi – shoh saroyida oʻn yil davomida shoirlar
                            nazoratchisi boʻlgan Bobojon Tarroh Azizov – Xodimning “Xorazm navozandalari” asari[14]. Unda
                            Feruz davri adabiy muhiti va uning shoirlari hayoti hamda ijodi haqida boy ma`lumotlar bayon
                            etiladi. Esdaliklar shaklidagi bu asar muallifi undagi fakt va lavhalarning bevosita guvohidir.
                            Asar mazmuni uni tazkira deyishga toʻla asos beradi, chunki “esdalik daftari ma`nosidagi tazkira
                            adabiy-tanqidiy qarashlarni ifoda etuvchi janrlardan biri boʻlib, unda adabiyot tarixi yoki
                            konkret davrning shoirlari hayoti va ijodi toʻgʻrisidagi qiziqarli ma`lumotlar keltiriladi”[15].
                            <br>
                            <br>Tazkirada muallif “oʻttiz bir nafar shoirning ahvoloti” yuzasidan oʻn uch savolga javob
                            yozgan.
                            <br>
                            <br>Bu savollar yuqorida M.Shayxzoda qayd etgan tazkira uzvlariga koʻp jihatdan mushtarak. Ammo
                            Xodim tazkirasi xotiralar asosida tuzilgani va biografik ma`lumotlardan iborat boʻlgani sababli
                            unda adabiy parchalar keltirilmay, har bir shoirning adabiy jarayondagi oʻrni muxtasar qayd
                            etilgan. Muhim jihati – shoirlar faoliyatidagi koʻp qirralilik ham aks etgan. Shuningdek, asar
                            Tabibiy va Laffasiy tazkiralaridagi, xususan, “Haft shuaro”dagi shoirlarning shaxs va ijodkor
                            sifatidagi qiyofasini kengroq gavdalantirishga, ular haqidagi mavjud biografik ma`lumotlarni
                            toʻldirish hamda yangi faktlar bilan boyitishga xizmat qiladi. Bu jihatdan asar tazkira bilan
                            adabiy portret janri oʻrtasida muayyan mushtarak xususiyatlar mavjudligini koʻrsatadi[16].
                            <br>
                            <br>Xorazm tarixiga oid XX asr solnomalarida ham tazkiraga xos adabiy ma`lumot va lavhalar hamda
                            ayrim she`r va shoir haqidagi fikrlar uchraydi. Bu jihatdan Bayoniyning “Shajarai xorazmshohiy”
                            asari xarakterlidir. Shu sababli adabiyotshunos G.Ismoilova uni Tabibiyning “Majmuat ush-
                            shuaro”si qatorida tazkira deb ataydi va “ular boʻyicha koʻplab ijodkorlar nomlari bilan
                            tanishishga muyassar boʻlamiz” deyish bilan cheklanadi[17].
                            <br>
                            <br>Adabiyotshunoslar N.Jumaxoʻja va I.Adizova esa “Shajarai xorazmshohiy”ning keng qamrovli
                            tarixiy-adabiy ahamiyatini alohida ta`kidlab, quyidagi asosli xulosaga kelishadi: “uning tazkira
                            tipidagi adabiy manbalardan farqi va afzalligi shundaki, u adabiy muhit manzaralari,
                            jarayonlarini, mafkuraviy hayotni tirikligicha, harakatda, ijtimoiy-siyosiy voqealar bilan
                            munosabatda tasvirlaydi”[18].
                            <br>
                            <br>Yuqoridagi fakt va dalillar XX asr boshidagi Xorazm adabiy muhitiga oid ma`lumotlar boy,
                            rang-barang ekanligini koʻrsatadi. Ularni birlamchi manbalar sifatida xolis hamda atroflicha
                            tadqiq va targʻib qilishga keyingi davrlardagina kirishilmoqda. Eng muhimi, bu toshbosma va
                            qoʻlyozma manbalarning ishonchli hamda koʻlamdor faktik materiallarga asoslanishidir. Zero, asl
                            matnning puxta va ishonchli boʻlishini ta`minlaydigan omillardan biri tadqiq etilayotgan
                            qoʻlyozmalarning koʻp boʻlishidir.
                            <br>
                            <br>Bu jihatdan Xorazm adabiy manbalarining katta qismi qoʻlyozmalar ekanligi xarakterli
                            faktdir. Bu haqda mashhur olim E.E.Bertelsning fikri alohida ahamiyat kasb etadi: “oʻqilgan
                            qoʻlyozmalar soni qancha koʻp boʻlsa, tuman shunchalik tarqalib, masala oydinlashib boradi.
                            Tadqiqotchining qoʻlidan yuzlab, minglab qoʻlyozmalar oʻtsa, ilgari amalga oshirib
                            boʻlmaydigandek tuyulgan masala oddiylashadi va oydinlashadi”[19]. Shunday yuzlab
                            qoʻlyozmalardan biri boʻlgan “Haft shuaro” tazkira- majmuasining monografik tadqiqi Feruz davri
                            adabiy muhitining hozirgacha kam oʻrganilgan jihatlarini “oydinlashtirish”ga imkon berishi bilan
                            qimmatlidir.
                            <br> <br>Umuman, majmua va tazkiralar “saroy adabiyoti” bahonasi bilan adabiyotshunoslikda yaqin
                            vaqtlargacha mavjud ayrim notoʻgʻri, bir tomonlama qarashlarni tuzatishga, badiiy asarlarning
                            ijodkorlarini ijtimoiy mavqei nuqtai nazardan talqin etishning xatoligini oydinlashtirishga,
                            qator shoirlar toʻgʻrisidagi tasavvurlarni kengaytirish va boyitishga, pirovardida, adabiy
                            muhitni yaxlit holda chuqurroq oʻrganish va yangi ilmiy tafakkur asosida haqqoniy baholashga
                            imkon beradi.
                            <br><br><br>[1] Qahhor A. Yoshlar bilan suhbat. –T.: Yosh gvardiya, 1968. B.102-103.
                            <br>
                            <br>[2] Собрание Восточных рукописей АН РУз. Т ИИ. Ташкент. 1954. -С. 11.
                            <br>
                            <br>[3] Hamidova M. Qoʻlyozma bayozlar – adabiy manba. T., 1981 -B.124.
                            <br>
                            <br>[4] Rahimov D., Matrasul Sh. Koʻrsatilgan asar.1991. T.: Adabiyot va san`at,- B. 88.
                            <br>
                            <br>[5] Abdugʻafurov A. “Yugʻurmiya” – oʻzbekcha inqilobiy she`rlar toʻplami // Oʻzbek tili va
                            adabiyoti.T., 1988. -№5 -B.3-10.
                            <br>
                            <br> * Xorazmda tazkiralarni majmua deb atashgan (I.X).
                            <br>
                            <br>[6] Valixoʻjayev B. Oʻzbek adabiyotshunosligi tarixi. X-XIX asrlar. –T.: Oʻzbekiston,
                            1993-B.118.
                            <br>
                            <br>[7]Ogahiy. Riyozud davla. OʻzFA Sharqshunoslik instituti fondi Inv. № 5364 II-B.374-a.
                            <br>
                            <br>[8] Ogahiy. Gulshani davlat. OʻzFA Sharqshunoslik instituti fondi Inv. №7572 -B 101-102.
                            <br>
                            <br>[9] Mallayev N. XV asr tazkiralarining tarixiy-adabiy ahamiyati // Oʻzbek adabiyoti
                            masalalari. Toʻplam. T.: 1959. – B.255.
                            <br>
                            <br>[10] Qarang: Valixoʻjayev.B. Koʻrsatilgan asar -B.175-176. Matkarimova S. Tazkirachilik
                            an`anasi: mushtaraklik va oʻziga xoslik // Badiiy tafakkur va adabiy jarayon. Toʻplam.-
                            Toshkent.2004.-B 43-46.
                            <br>
                            <br>[11] Shayxzoda M. Tazkirachilik tarixidan // Navoiyga armugʻon. Toʻplam. T., 1968- B. 49.
                            <br>
                            <br>[12] Valixoʻjayev B. Koʻrsatilgan asar .- B. 20-26.
                            <br>
                            <br>
                            <br>
                            <br>[13] Hayitmetov. A. Adabiyotdan turkiyda birinchi nazariy qoʻllanma // Oʻzbek tili va
                            adabiyoti.T., 2002.№ 1. -B.72.
                            <br>
                            <br>[14] Xodim. Xorazm navozandalari. – T.: Adabiyot va san`at, 1994. 96-b.
                            <br>
                            <br>[15] Valixoʻjayev B., Xolmatov.Sh. Oʻzbek adabiy tanqidi tarixi. 1-qism. Samarqand., 1983-B.
                            13.
                            <br>
                            <br>[16] Bu haqda qarang: Azimova X. Tazkira va adabiy portretlarning tipologik xususiyatlari//
                            Oʻzbek tili va adabiyoti. T.,2002. № 2. -B 21-24
                            <br>
                            <br>[17] Ismoilova G. Feruz davri Xorazm adabiy muhiti. Fil. fan.nomz. dissert. T.: Fan, 1995-
                            B. 25.
                            <br>
                            <br>[18] Jumaxoʻja N, Adizova I. Soʻzdin baqoliroq yodgor yoʻqdir.-T.: Oʻzbekiston, 1995- B. 148
                            <br>
                            <br>[19] Бертелс. Э.Е. Вопросы методики критических изданий классических памятников литературы
                            народов Ближнего и Среднего Востока// Материалы Всесоюзной конференсии востоковедов в Ташкенте.
                            – Т.: Изд.АН.РУз, 1957- С.237-238.<br>
                            <br>
                            <br>
                        @endif
                        @if($lang=="ru")
                            <br> Литературная среда начала ХХ века (первая четверть), связанная с именем Феруз, уникальна.
                            характеристики. С одной стороны, он продолжает и ставит во главу угла многовековые литературные традиции.
                            с другой стороны, современные инновации, идеи просветительства
                            расширялся. Поэзия занимает важное место в искусстве.
                            содержанием были романтически-нравственные мотивы. Однако оживление в литературном процессе
                            В дальнейшем обогащении традиционных тем формальное разнообразие жанров носит в целом художественный характер.
                            Это нашло отражение в возрастающей общественно-эстетической значимости произведения.
                            жанр - рамки поэмы гораздо шире. На тему любви воспетую в нем
                            Добавились общественно-политические и просветительские идеи, произошли некоторые формальные изменения.
                            <br>
                            <br> Естественно, движущей силой литературной среды являются творцы. В этом отношении Феруз
                            Необходимо подчеркнуть организованность среды. Главное, что в этой среде
                            Около пятидесяти художников, вне зависимости от социального положения, профессии и национальности.
                            Они обладали определенным уровнем художественного таланта и создавали произведения в различных жанрах. Их
                            можно условно разделить на следующие группы:
                            <br>
                            <br> 1. Художники, принадлежащие к семье Феруз (Муроди, Комьоб, Фаррух, Султани, Садик, Саади,
                            Мудрое, Заявление и др.);
                            <br>
                            <br> 2. Художники, непосредственно участвовавшие в дворцовой службе Ферузом (Табиби, Камиль, Дои,
                            Девани, Мирза, Хабиби, Хадим и др.);
                            <br>
                            <br> 3. Хотя официально он не находился на службе дворца, он находился в поле зрения Феруза и в литературной обстановке.
                            художники, оставившие значительный след (Аваз, Ниязи, Мутриб, Факири, Суфи и др.).
                            <br>
                            <br> Отношение Феруз к творцам было главным критерием их творческого потенциала. Вот так
                            Однако не все поэты были одинаково творческими.
                            Некоторые часто не выходили за рамки традиции. Но природный ландшафт литературной среды
                            представить себе целое, выделить отдельные аспекты и сформировать схему творческого процесса
                            Их работа также играет роль в понимании того, что
                            <br><br> Основными чертами литературной среды Хорезма начала ХХ века являются общественно-политический период
                            перемены, чувство национального пробуждения, традиция и обновление в искусстве
                            из-за таких факторов, как Мы видим эти особенности в основном в следующем:
                            <br>
                            <br> а) Литературная среда богата и исторически основана на длительном литературном опыте, их новом
                            сформировалась как продолжение ХХ века и является последним, новым периодом узбекской классической литературы
                            было началом его литературы;
                            <br>
                            <br> б) Большинство представителей литературной среды являются прямыми, а некоторые - косвенными с дворцовыми
                            Хотя и связанный, Феруз как король был их общим покровителем и организатором окружающей среды,
                            был творческим партнером поэта;
                            <br>
                            <br> в) Кроме лирической поэзии, являющейся основным литературным произведением творцов, ряд былин,
                            перевод и создание исторических произведений является одной из особенностей литературной среды. В этом отношении
                            Медицинские эпосы, переводы Отанияза Ниязи, Мирзо, «Шаджарай Хорезмшахий» Баяни,
                            «История Хорезма», исторические труды Комёба «Таворикс ул-Хаванин», «Мунтахаб ул-Ваджат» и
                            можно указать другие;
                            <br>
                            <br> г) Другой характеристикой литературной среды является разнообразие лирических жанров. В этом районе
                            Традиция учителя Агахи, творившего около двадцати жанров и форм, была продолжена и
                            Некоторые поэты писали в четырнадцати жанрах. Конечно, среди них газели и
                            мухаммы играют ключевую роль;
                            <br>
                            г) Навои, Физули, Мунис и Огахи в творческом развитии представителей литературной среды
                            Наслаждение гением, а также традиция зул-сунанизма были важным фактором. Учителям
                            Дальнейшее развитие было в основном творческим, и писать на узбекском и персидском языках было для каждого поэта
                            была своеобразной чертой;
                            <br>
                            <br> д) Еще одним важным аспектом является то, что творчество поэтов было многогранным. они литературные
                            Помимо своей работы, он также был каллиграфом, музыковедом, переводчиком и историком.
                            приобрел смешанный характер;
                            <br>
                            <br> к) Одной из главных особенностей литературной среды является искусство
                            в оформлении и продвижении работ в виде книг - девон, байоз, тазкира, комплекс
                            появляется. В частности, в число тазкиров входили художники того времени, в том числе Хафт Шуаро.
                            Имеются ценные сведения о биографии и творчестве князей-поэтов.
                            <br>
                            В целом эти черты способствуют развитию культуры и искусства, литературного процесса.
                            литературных жанров, в частности,
                            к тематическому и идейному масштабу поэзии, с новой формой и содержанием традиции
                            и обогатил книжный бизнес. До сих пор в этот период
                            Многие произведения поэтов, живших и работавших во дворце Феруз и за его пределами.
                            что почти каждый поэт создал один или два девона, чтобы донести до публики,
                            защита требовала расширения чтения. В результате Феруз лично инициировал
                            и спонсировал произведения искусства и литературы, помимо рукописей, в печати
                            использование литографии с 1980-х годов для репродукции
                            был представлен.
                            <br><br> Действительно, внедрение литографии способствовало возрождению литературной среды,
                            Можно повысить мотивацию создателей и увеличить количество источников в виде книг
                            дал. Эти факторы заметны в относительном ускорении образования различных байозов, комплексов, тазкиров.
                            сыграло свою роль. Однако это не полностью вытеснило практику рукописей. Мулла в этом поле
                            Болтанияз, Мулла Каримберган, Мулла Курбоннияз, Мухаммад Панох Худайберган, Матиокуб и
                            Услуги Мухаммада Юсуфа и других деванов и секретарей были велики.
                            <br>
                            <br> Байоз, сыгравший важную роль в хорезмийской литературной среде, является типичным для восточной литературы байозом
                            Помимо отражения основных черт традиции, она обладает еще и определенной уникальностью.
                            Это отражено в жанрово-тематической стратификации байоза, а также в зуллисонайне.
                            В частности, "Байози комплекс аш'ар" и "Байози аш'ор", сочиненные во времена Феруза, отличаются лирическими
                            Он составлен из стихов разных жанров и воспевает тему любви.
                            «Байози мухаммасот» — это только положительные формы, а «Байози рубойот» — это только один из жанров рубаи.
                            Он посвящен как романтической, так и социально-философской тематике.
                            <br>
                            <br> Также принято составлять байозы из произведений одного или нескольких поэтов.
                            последний весомый. Следовательно, «байозы свободно составлены из поэтов разных периодов
                            Иногда их называют сборником красочных стихов.
                            вхождение некоторых стихотворений в девоны поэтов»[2] типологические
                            Как особенность некоторые хорезмские байозы по просьбе составителя часто феруз
                            состоит из
                            <br>
                            <br> Естественно, говорят: «О человеке, заказавшем создание Баяза и поэте композитора
                            через идейное содержание стихов, в которых субъективное восприятие и чувства байоз
                            представляется» [3]. По указу Феруза стихи поэтов тоже особенные.
                            Еще одной особенностью Хорезмского байоза является формирование байоза [4].
                            <br>
                            <br> Комплексы также занимают особое место в ряду хорезмской литературной литературы.
                            содержит большую часть творческого наследия. Их структура зависит от цели компилятора,
                            в зависимости от его мировоззрения и личных склонностей и приверженности существующим традициям;
                            Сборники основаны на специально подобранных стихах, в отличие от байоз
                            строится по указанию Например, в стихах комплекса Хафт Шуаро
                            романтико-просветительская и революционная тема в стихах комплекса «Югурум» (1923).
                            является лидером. В то же время они содержат некоторую информацию о творчестве поэтов.
                            Этот аспект комплекса Югурум, опубликованный Муллой Бекджоном, является литературным критиком.
                            А.Абдугафуров с особым акцентом писал:
                            <br><br> Среди других работ в сборнике «Мулла Бекжон» их (Байоний, Мутриб, Сафо
                            Стихотворения Муганни - I.X) дает каждому небольшой комментарий о том, когда оно было написано и какое именно.
                            Из источника ясно, что этот период был периодом литературного процесса и конкретного
                            Имеет значение в изучении творческого наследия художника, в определении его идейно-художественной эволюции.
                            зарабатывает» [5].
                            <br>
                            <br> Во-вторых, в сборниках есть краткие биографические сведения об авторах стихов.
                            происходят данные. В этом смысле большинство коллекций в основном представляют собой произведения искусства.
                            из-за байоза, отчасти потому, что он отражает краткий рассказ о поэтах
                            также обладает уникальными свойствами. Также комплексы - это всего лишь подборка каждого поэта
                            также могут быть составлены из стихов, а в байозах, как правило, поэтические фрагменты не ограничиваются,
                            не всегда соблюдается принцип их строгой хронологии.
                            <br>
                            <br> Ценные сведения о литературной среде Хорезма содержатся в тазкирах.
                            Она занимает значительное место в классической литературе Востока.
                            <br>
                            <br> Тазкира обычно представляет собой литературный или критический взгляд на определенный исторический период.
                            Узбекский как традиционный жанр, освещающий жизнь и творчество поэтов того периода
                            присутствовал и в литературе.
                            <br>
                            <br> Первая тазкира на узбекском языке буквально началась с Навоийского меджлиса ун-нафойс
                            Принципы тазкиризма стали основным руководством для более поздних периодов. В этой игре
                            У тазкиры две стороны - текст (поэтические фрагменты) и жизнь и творчество художника
                            Существование интерпретации данных показало, что тазкира является фундаментальной особенностью Хорезма.
                            Он также был источником вдохновения и поддержки для своего тазкира.
                            <br><br> Правда, в Хорезме только в 20 веке были созданы классические образцы тазкиризма. Но это так
                            Это не дефект литературной среды, а ее самобытность, и основной упор делается на самобытное искусство.
                            произведения, литературно-исторические хроники, а также переводные произведения
                            объяснил. Однако некоторые элементы тазкиры присутствуют в ряде произведений, написанных до ХХ века.
                            - Краткие сведения о литературной среде определенного периода, жизни и творчестве поэтов. Этот
                            Характерны работы Муниса (1778-1829) и Огахи (1809-1874).
                            ценные факты из литературной жизни веков рассказываются с определенным настроем. Этот
                            Литературовед Б.Валиходжаев подчеркивал и писал: «Мунис Хорезми
                            ("Фирдавс уль-икбал" - I. X) историко-культурная, литературная среда Хорезма, его
                            ценные сведения о некоторых их представителях. Литература из того же источника
                            такие писатели, как Мавлоно Вафо, Пахлавонкули Равнак, Музаффарходжа Кироми
                            был обнаружен» [6]. Огахи также написал «Рияз уд-давла», «Гюльшани давлат» и «Шахиди».
                            икбол» и другие исторические труды
                            отмечает важные факты о создателях. В частности, он известен в «Рияз уд-давла».
                            Качества мудрого поэта и борца Пахлавона Махмуда (1247-1326) лаконичны и ясны.
                            описывает:
                            <br>
                            <br> «Город Фирдавсбахр в Хиве
                            Хазрат Пахлавон Махмуд куддиса сирруху»[7].
                            <br>
                            Кроме того, в этом произведении Огахи описывает свое состояние, психику, литературные прозвища, ученых и поэтов.
                            Он также предоставил информацию о своих беседах с
                            цитирует стих маснави. В «Гюльшани давлат» литературный процесс в Хиве и его
                            Мухаммад Назар, Пахлавон Ниязбой и Холис.
                            <br>
                            <br> Вышеперечисленные литературные воззрения являются идеологической основой Хорезм тазкира.
                            служил, и этот тазкиризм постепенно улучшался, до чтения и произведений искусства
                            формируется на основе интереса. Действительно, «такие сборники произведений были первыми тазкирами» [9]. Так,
                            Основу классических тазкирас составляет сборник, который постепенно становится литературно-критическим, даже,
                            обогащается и совершенствуется теоретическими знаниями. Вот почему тазкира является литературным комплексом.
                            Наличие фрагментов не противоречит требованиям жанра, а является одной из его особенностей. Середина
                            в городе Хиве, ставшим с 19 века одним из крупнейших культурных и литературных центров
                            создание произведений искусства, составление, чтение и продвижение
                            В период Феруз с конца того века до начала 20 века он получил более широкое распространение.
                            делал. Ведь классический тазкираизм происходит в тот же период и отличается коротким временем
                            структура тазкиров персонажа также подтверждается этими факторами. Правда, в этот период
                            Ряд комментариев появился также в литературных кругах Коканда и Бухары (Фазлий, Пирмастий
                            тазкиралари). Тазкира Ахмаджона Табиби, являющаяся примером хорезмской тазкиры
                            об общих чертах и ​​различиях (язык, стиль, размер, формы выражения и т. д.)
                            некоторые моменты были отмечены в литературе [10].
                            <br><br> Основываясь на эволюции тазкира и характеристиках жанра,
                            Один из них, поэт Максуд Шайхзода, акцентирует внимание на следующих компонентах тазкиры: «а)
                            краткие сведения об имени поэта, прозвище, местонахождении; б) жизнь, характер поэта,
                            краткая информация о некоторых особенностях; в) в произведениях, произведениях, произведениях поэта
                            степень известности произведений в свое время; ж) тазкира этому поэту
                            отношение автора и или, наоборот, позиция поэта по отношению к рассказчику (это
                            информация предоставляется только при наличии личного знакомства между поэтом и рассказчиком); г)
                            любой интересный рассказ или анекдот о поэте, сохранившийся в устах народа или в памяти автора; д)
                            пример из стихотворения поэта (обычно это газель или поэма, маснави или
                            рубаи и/или континент); к) конец жизни поэта (если он умер, то где похоронен?
                            конечно)»[11].
                            <br>
                            <br> Основа этой формы, которая характерна для совершенного тазкира в буквальном смысле, двояка.
                            характеристика поэта как творческой личности и интерпретация оценки его произведений.
                            Конечно, эти общие для жанра принципы не могут быть одинаковыми во всех комментариях.
                            Это эволюция тазкиры, эволюция, особенности каждого литературного процесса, локальные
                            традиции объясняются такими факторами, как цель и способности рассказчика. Из-за этого некоторые
                            о литературных взглядах в тазкирах, некоторые примеры из стихов поэта
                            Естественно, что идеи имеют приоритет. Это литературный период, когда они создали группировку тазкира.
                            Помимо своих особенностей, это предполагает и структурно-смысловую специфику в развитии жанра.
                            требует проведения. Эти тазкиры являются относительно значительными тазкирами 19 и 20 веков.
                            особенно важно при определении сущности.
                            <br>
                            <br> Литературовед Б.Валиходжаев разделил тазкиров на две группы по фактору времени.
                            различает: 1) историко-современное (предшественники и современники); 2) о современниках
                            тазкиралар [12]. Подробно анализируются особенности каждого из них. Ученый в Центральной Азии X
                            Написано на узбекском языке в начале 20 века.
                            тазкирасы, в том числе хорезмские тазкирачи (принадлежащие пера Табиби)
                            и как комментарий к современникам.
                            <br>
                            <br> Следует отметить, что в XX веке в Хорезме тазкир «хафт шуаро» и лаффази и
                            На первый план вышли труды сотрудников. К сожалению, они до сих пор специально не изучены. (Лаффасий
                            Частично тазкиру изучала С. Самандарова.
                            опубликовано в).
                            <br><br> Учитываем особенности восточного тазкиризма и до вышеуказанных пунктов
                            Образцы хорезмских тазкирачей рекомендуется условно группировать следующим образом.
                            мы видели:
                            <br>
                            <br> 1. Традиционные тазкиры - «Маджмуай си шуарой пайрави Ферузшахи» Табиби и
                            «Мухаммасоти комплекс уш-шуарои Ферузшахи», «Тазкирай шуаро» Лаффаси (Хивинский поэт и
                            биографии писателей»).
                            <br>
                            <br> 2. Тазкира-комплекс - «Хафт шуаро» («Княжеский кабинет поэтов»)
                            <br>
                            <br> 3. Биографически-мемуарная тазкира (Воспоминания сотрудника "Хорезмских музыкантов").
                            <br>
                            <br> Из них работа Лаффази представляет собой историко-современную версию тазкиры (в которой он жил в прошлом).
                            Есть сведения о Мунисе и Огахи), а остальное к комментарию современников.
                            принадлежит.
                            <br>
                            <br> Характерной чертой является то, что традиционные хорезмийские тазкиры представляют собой жанр литературных фрагментов.
                            Он также имеет внутреннюю стратификацию, которую можно классифицировать следующим образом:
                            <br>
                            <br> 1) состоит только из отрывков, написанных в произведениях жанра газели (первая
                            тазкираси);
                            <br>
                            <br> 2) Формы мусаммат - состоящие из мухаммаса и мусаддаса (второй Табиби)
                            тазкираси);
                            <br>
                            <br> Еще одна особенность этих тазкиров в том, что в первом есть поэт для пайрава -
                            В качестве основного текста были выбраны газели Феруза, а во втором газели Феруза и Огахи.
                            <br>
                            <br> 3) составлен из смешанных жанров - газель, маснави, квартет (лаффаси тазкираси).
                            <br>
                            <br> Конечно, наряду с упоминаемым в тазкире отношением к этим произведениям жизнь поэтов и
                            Информация о деятельности Судя по всему, тазкира содержит литературное произведение (поэтическое)
                            текст), а оценка жизни и творчества поэта - явление типологическое. Но уверен в некоторых комплексах
                            Наличие литературных видов (пусть и не детализированных) сближает их с тазкирах.
                            В связи с этим известный литературовед А. Хайитметов написал книгу под названием «Фунун
                            ул-балог'а - первый полный учебник по теоретическим вопросам узбекской литературы
                            Он также отметил, что это произведение поэтического характера.
                            В данном случае ученый ссылается только на тазкира-специфические сведения о биографии Лютфи в работе
                            держа Исходя из этого взгляда, мы условно назвали Хафт Шуаро тазкира-комплексом.
                            Потому что кроме стихов есть проза о двух поэтах - Султани и Фаррухе.
                            также предоставляется информация. Ведь сам хафт шуаро в основном сложная, отчасти тазкира черта
                            представляет собой синтезированный литературный источник.
                            <br><br> Третья группа тазкир - поэтов десять лет в царском дворце
                            Бободжон Таррох Азизов, который был куратором, писал хорезмских музыкантов. затем
                            Он содержит богатую информацию о литературной среде ферузского периода, жизни и творчестве его поэтов.
                            даны. Автор этого произведения в форме воспоминаний является непосредственным свидетелем фактов и табличек, содержащихся в нем.
                            Содержание работы дает полное основание называть ее тазкирой, ибо «тазкира в смысле тетради
                            — один из жанров литературной критики, в котором история литературы или
                            дает интересные сведения о жизни и творчестве поэтов того или иного периода» [15].
                            <br>
                            <br> В «Тазкире» автор отвечает на тринадцать вопросов о «состоянии тридцати одного поэта».
                            написал.
                            <br>
                            <br> Эти вопросы во многом являются общими для членов тазкира, упомянутых выше М. Шайхзода. Боеприпасы
                            Потому что резюме сотрудника основано на воспоминаниях и содержит биографические данные
                            Он не цитирует литературные отрывки, а кратко отмечает роль каждого поэта в литературном процессе.
                            сообщил. Что немаловажно, отражена и многогранность творчества поэтов. Также работа
                            Личность и творчество поэтов в комментариях Табиби и Лаффази, в частности в Хафт Шуаро
                            расширить представление о качестве, имеющиеся биографические сведения о них
                            дополнить и обогатить новыми фактами. В этом плане работа тазкира
                            показывает, что существуют определенные общие черты между жанрами литературного портрета [16].
                            <br>
                            <br> В летописях XX века по истории Хорезма
                            есть мысли о некоторых стихах и поэтах. В связи с этим «Шаджарай Хорезмшахы» Баяни
                            является характеристикой произведения. По этой причине литературовед Г.Исмаилова назвала его «Маджмуат уш-
                            шуаро» и с именами многих художников
                            Мы сможем познакомиться»[17].
                            <br>
                            <br> Литературоведы Н. Джумаходжа и И. Адизова
                            Подчеркивая историческую и литературную значимость, они приходят к следующему обоснованному выводу: «его тазкира
                            Отличие и преимущество этого вида литературного источника в том, что это взгляд на литературную среду,
                            процессы, идеологическая жизнь живая, в движении, с общественно-политическими событиями
                            описывает отношения» [18].
                            <br>
                            <br> Вышеприведенные факты и свидетельства богаты сведениями о литературной среде Хорезма начала ХХ века,
                            показывает, что он красочный. Они объективны и всеобъемлющи в качестве первоисточников.
                            исследования и пропаганда начались лишь недавно. Самое главное, это сыпь и
                            Рукописи основаны на достоверном и исчерпывающем фактическом материале. ноль, асл
                            Изучается один из факторов, обеспечивающих точность и достоверность текста.
                            обилие рукописей.
                            <br>
                            <br> В связи с этим большинство хорезмийских литературных источников являются рукописными
                            это факт. Особое значение имеет мнение известного ученого Э. Э. Бертельса: «читайте
                            Чем больше рукописей, тем шире распространяется район и проблема становится яснее.
                            Через руки исследователя прошли сотни и тысячи рукописей.
                            то, что кажется невозможным, будет упрощено и разъяснено» [19]. Сотни таких
                            Одна из рукописей, монографическое исследование тазкира-комплекса «Хафт Шуаро» ферузского периода.
                            позволяя «прояснить» малоизученные до сих пор аспекты литературной среды
                            ценный.
                            <br><br> В целом комплекс и тазкира близки к литературе под видом "дворцовой литературы".
                            исправить некоторые из существовавших до сих пор ошибочных, односторонних взглядов на произведения искусства
                            разъяснить ошибочность интерпретации создателей с точки зрения социального статуса,
                            расширить и обогатить представления ряда поэтов и, наконец, литературных
                            изучать окружающую среду в целом и объективно оценивать ее на основе нового научного мышления
                            позволяет.
                            <br> <br> <br> [1] Каххор А. Интервью с молодежью. –Т.: Молодая гвардия, 1968. С.102-103.
                            <br>
                            <br> [2] Собрание Восточных Рукописей АН РУз. Т II. Ташкент. 1954. -С. 11.
                            <br>
                            <br> [3] Гамидова М. Рукописи – литературный источник. Т., 1981 - Б.124.
                            <br>
                            <br> [4] Рахимов Д., Матрасул Ш. Показана работа.1991г. Т.: Литература и искусство, - С. 88.
                            <br>
                            <br> [5] Абдугафуров А. «Югурмия» - сборник узбекских революционных стихов // Узбекский язык и
                            литературы.Т., 1988. -№5 -С.3-10.
                            <br>
                            <br> * В Хорезме тазкиры назывались комплексными (I.X).
                            <br>
                            <br> [6] Валиходжаев Б. История узбекской литературы. X-XIX вв. –Т.: Узбекистон,
                            1993-Б.118.
                            <br>
                            <br> [7] Огаий. штат Риазуд. Фонд Института востоковедения АН РУз Инв. № 5364 II-В.374-а.
                            <br>
                            <br> [8] Огаий. Гульшанское государство. Фонд Института востоковедения АН РУз Инв. №7572-Б 101-102.
                            <br>
                            <br> [9] Маллаев Н. Историко-литературное значение тазкирас XV века // Узбекская литература.
                            вопросы. Коллекция. Т.: 1959. - С.255.
                            <br>
                            <br> [10] См.: Валиксоджаев.Б. Показанные работы -С.175-176. Маткаримова С. Тазкирачилик
                            традиция: общность и своеобразие // Художественное мышление и литературный процесс. Коллекция.-
                            Ташкент.2004.-Б 43-46.
                            <br>
                            <br> [11] Шайхзода М. Из истории тазкирачилика // Подарок Навои. Коллекция. Т., 1968- С. 49.
                            <br>
                            <br> [12] Валиходжаев Б. Представленная работа.- С. 20-26.
                            <br>
                            <br>
                            <br>
                            <br> [13] Хайитметов. А. Первое теоретическое пособие по литературе на турецком языке // Узбекский язык и
                            литературы.Т., 2002.№ 1. -С.72.
                            <br>
                            <br> [14] Сотрудник. Хорезмские музыканты. - Т.: Литература и искусство, 1994. 96-с.
                            <br>
                            <br> [15] Валиксоджаев Б., Холматов.Ш. История узбекского литературоведения. Часть 1. Самарканд., 1983-Б.
                            13.
                            <br>
                            <br> [16] См.: Азимова Х. Типологические особенности тазкиры и литературного портрета //
                            Узбекский язык и литература. Т., 2002. № 2. -Б 21-24
                            <br>
                            <br> [17] Исмаилова Г. Феруз периода Хорезмской литературной среды. Фил. фан.номз. диссертация. Т.: Фан, 1995-
                            Б. 25.
                            <br>
                            <br> [18] Джумаходжа Н., Адизова И. Памятника слову нет.-Т.: Узбекистан, 1995- С. 148
                            <br>
                            <br> [19] Бертельс. Э.Э. Вопросы методики критических изданий классической памяти литературы
                            народов Ближнего и Среднего Востока // Материалы Всесоюзной конференции востоковедов в Ташкенте.
                            - Т.: Изд.АН.РУз, 1957- С.237-238.<br>
                            <br>
                            <br>
                        @endif
                        @if($lang=="en")
                            <br> The literary environment of the early twentieth century (first quarter) associated with the name Feruz is unique
                            properties. On the one hand, it continues and prioritizes centuries-old literary traditions
                            On the other hand, modern innovations, ideas of enlightenment
                            was expanding. Poetry has a significant place in art
                            the content was romantic-moral motives. However, the revival in the literary process
                            In the further enrichment of traditional themes, the formal diversity of genres is, in general, artistic
                            This is reflected in the growing socio-aesthetic significance of the work
                            genre - the scope of the poem is much wider. On the theme of love sung in it
                            Socio-political and enlightenment ideas were added, and some formal changes took place.
                            <br>
                            <br> Naturally, the driving force of the literary environment is the creators. In this respect Feruz
                            It is necessary to emphasize the organized nature of the environment. The important thing is that in this environment
                            About fifty artists, regardless of social class, profession and nationality
                            They had a certain level of artistic talent and created works in various genres. Them
                            can be conditionally divided into the following groups:
                            <br>
                            <br> 1. Artists belonging to the family of Feruz (Murodi, Komyob, Farrukh, Sultani, Sadiq, Sa`di,
                            Wise, Statement, etc.);
                            <br>
                            <br> 2. Artists directly involved in the palace service by Feruz (Tabibi, Kamil, Doi,
                            Devani, Mirza, Habibi, Khadim, etc.);
                            <br>
                            <br> 3. Although not officially in the service of the palace, it was in Feruz's view and in a literary setting
                            artists who left a significant mark (Avaz, Niyazi, Mutrib, Faqiri, Sufi, etc.).
                            <br>
                            <br> Feruz's attitude to the creators was the main criterion of their artistic potential. That's right
                            However, not all poets were equally creative.
                            Some often did not go beyond tradition. But the natural landscape of the literary environment
                            to imagine the whole, to identify certain aspects, and to form a pattern of the creative process
                            Their work also has a role to play in understanding that
                            <br><br> The main features of the Khorezm literary environment of the early twentieth century are the socio-political period
                            changes, a sense of national awakening, tradition and renewal in art
                            due to factors such as We see these features mainly in the following:
                            <br>
                            <br> a) The literary environment is rich and historically based on long literary experiences, their new
                            was formed as a continuation of the twentieth century and is the last, new period of Uzbek classical literature
                            was the beginning of his literature;
                            <br>
                            <br> b) Most of the representatives of the literary environment are direct, and some are indirect with the palace
                            Although bound, Feruz as king was their general patron and organizer of the environment,
                            was a creative partner as a poet;
                            <br>
                            <br> c) In addition to lyrical poetry, which is the main literary product of the creators, a number of epics,
                            translation and the creation of historical works is one of the features of the literary environment. In this regard
                            Medical epics, translations by Otaniyaz Niyazi, Mirzo, Bayani's "Shajarai Khorezmshahiy",
                            “History of Khorezm”, Komyob's “Tavorix ul-Hawanin”, “Muntahab ul-Wajat” historical works and
                            others can be indicated;
                            <br>
                            <br> d) Another characteristic of the literary environment is the diversity of lyrical genres. In this area
                            The Agahi tradition of the teacher, who created in about twenty genres and forms, was continued and
                            Some of the poets wrote in fourteen genres. Of course, among them are gazelles and
                            muhammas play a key role;
                            <br>
                            d) Navoi, Fuzuli, Munis and Ogahi in the creative development of the representatives of the literary environment
                            The enjoyment of genius, as well as the tradition of Zul-Sunanism, was an important factor. To teachers
                            Follow-up was mainly creative, and writing in Uzbek and Persian was for each poet
                            was a peculiar feature;
                            <br>
                            <br> e) Another important aspect is that the work of poets was multifaceted. They are literary
                            In addition to his work, he was also a calligrapher, musicologist, translator, and historian.
                            acquired a mixed character;
                            <br>
                            <br> j) One of the main features of the literary environment is art
                            in the formulation and promotion of works in the form of books - devon, bayoz, tazkira, complex
                            appears. In particular, the tazkirs included artists of the time, including Haft Shuaro
                            There is valuable information about the biography and creative activity of the prince poets.
                            <br>
                            In general, these features contribute to the development of culture and art, the literary process
                            literary genres, in particular,
                            to the thematic and ideological scale of poetry, with a new form and content of tradition
                            and enriched the book business. So far, in this period
                            Many works by poets who lived and worked in Feruz Palace and beyond
                            that almost every poet has created one or two devons to convey to the public,
                            advocacy required the expansion of reading. As a result, Feruz personally initiated
                            and sponsored works of art and literature, in addition to manuscripts, in print
                            the use of lithography since the 1980s for reproduction
                            was introduced.
                            <br><br> Indeed, the introduction of lithography contributed to the revival of the literary environment,
                            It is possible to increase the motivation of creators and increase the number of sources in the form of books
                            gave. These factors are noticeable in the relative acceleration of the formation of various bayoz, complex, tazkira
                            played a role. However, this did not completely displace the practice of manuscripts. Mullah in this field
                            Boltaniyaz, Mulla Karimbergan, Mulla Qurbonniyaz, Muhammad Panoh Khudaybergan, Matyoqub and
                            The services of Muhammad Yusuf and other devans and secretaries were great.
                            <br>
                            <br> Bayoz, which played an important role in the Khorezmian literary environment, is a bayoz typical of Eastern literature
                            In addition to reflecting the main features of the tradition, it also has a certain uniqueness.
                            This is reflected in the genre and thematic stratification of the bayoz, as well as in the zullisonain.
                            In particular, "Bayozi complex ash'ar" and "Bayozi ash'or" composed in Feruz's time are different lyric
                            It is composed of poems of various genres and sings the theme of love.
                            "Bayozi muhammasot" are only positive forms, and "Bayozi ruboiyot" is the only rubai genre.
                            It is devoted to both romantic and socio-philosophical topics.
                            <br>
                            <br> It is also common to compose bayoz from the works of one or more poets
                            the latter is weighty. Consequently, “bayozs are freely composed of poets of different periods
                            They are sometimes known as a collection of colorful poems
                            the occurrence of some poems in the devons of poets ”[2] typological
                            As a feature, some Khorezm bayozs are, at the request of the compiler, often Feruz
                            compiled by order.
                            <br>
                            <br> Naturally, they say, “About the person who ordered the creation of Bayaz and the poet of the composer
                            through the ideological content of the poems in which the subjective perception and feelings are bayoz
                            is represented ”[3]. According to Feruz's decree, the poems of the poets are also special
                            The formation of bayoz is another feature of Khorezm bayoz [4].
                            <br>
                            <br> Complexes also have a special place in the series of Khorezm literary literature.
                            contains a large part of the creative heritage. Their structure depends on the purpose of the compiler,
                            depending on his worldview and personal inclinations and adherence to existing traditions;
                            The collections are based on specially selected poems, unlike the bayoz
                            is built according to the direction of For example, in the poems of the Haft Shuaro complex
                            romantic-enlightenment theme, and in the poems of the complex "Yugurum" (1923) a revolutionary theme
                            is the leader. At the same time, they contain some information about the work of poets.
                            This aspect of the "Yugurum" complex, published by Mulla Bekjon, is a literary critic
                            A. Abdugafurov wrote with special emphasis:
                            <br><br> Among other works in the collection "Mulla Bekjon", their (Bayoniy, Mutrib, Safo
                            Mughanni's Poems - I.X) gives each one a small comment, when it was written and which one
                            It is clear from the source that this period was a period of literary process and concrete
                            It is important in the study of the creative heritage of the artist, in determining its ideological and artistic evolution
                            earns ”[5].
                            <br>
                            <br> Secondly, there is a brief biographical account of the authors of the poems in the collections.
                            data occurs. In this sense, most of the collections are mainly works of art
                            due to the bayoz, partly because it reflects a brief account of the poets
                            also has unique properties. Also, the complexes are just a selection of each poet
                            can also be composed of poems, and in bayoz, as a rule, poetic fragments are not limited,
                            the principle of strict periodicity is not always followed.
                            <br>
                            <br> Some valuable information about the literary environment of Khorezm is contained in the tazkiras
                            It has a significant place in the classical literature of the East.
                            <br>
                            <br> Tazkira is usually a literary or critical view of a particular historical period.
                            Uzbek as a traditional genre that illuminates the life and work of poets of the period
                            was also present in literature.
                            <br>
                            <br> The first tazkira in the Uzbek language literally began with Navoi's Majlis un-nafois
                            The principles of tazkirism became the main guide for later periods. In this game
                            There are two sides to the tazkira - the text (poetic fragments) and the life and works of the artist
                            The existence of data interpretation has shown that tazkira is a fundamental feature of Khorezm
                            He was also a source of inspiration and encouragement for his tazkira.
                            <br><br> It is true that in Khorezm it was not until the 20th century that classical examples of tazkirism were created. But that's the case
                            It is not a defect of the literary environment, but its originality, and the main focus is on the original art
                            works, literary-historical chronicles, as well as translated works
                            explained. However, there are some elements of tazkira in a number of works written before the twentieth century
                            - Brief information about the literary environment of a certain period, the life and work of poets. This
                            The works of Munis (1778-1829) and Ogahi (1809-1874) are characteristic of
                            valuable facts about the literary life of centuries are narrated with a certain attitude. This
                            Literary critic B.Valikhojayev emphasized and wrote: “Munis Khorezmi's
                            ("Firdavs ul-iqbal" - I. X) historical, cultural, literary environment of Khorezm, its
                            valuable information about some of their representatives. Literature due to the same source
                            writers such as Mavlono Vafo, Pahlavonquli Ravnaq, Muzaffarhoja Kiromi
                            was discovered ”[6]. Ogahi also wrote "Riyaz ud-davla", "Gulshani davlat" and "Shahidi"
                            iqbol ”and other historical works
                            notes important facts about the creators. In particular, he is famous in "Riyaz ud-davla"
                            The qualities of the wise poet and wrestler Pahlavon Mahmud (1247-1326) are concise and clear.
                            describes:
                            <br>
                            <br> “The city of Firdavsbahr in Khiva
                            Hazrat Pahlavon Mahmud quddisa sirruhu ”[7].
                            <br>
                            In addition, in this work, Ogahi describes his condition, psyche, literary nicknames, and scholars and poets.
                            He also provided information about his conversations with
                            quotes the verse masnavi. In "Gulshani Davlat" the literary process in Khiva and its
                            Muhammad Nazar, Pahlavon Niyazboy and Kholis.
                            <br>
                            <br> The above-mentioned literary views are the ideological basis for Khorezm tazkira
                            served, and this tazkirism was gradually perfected into reading and works of art
                            formed on the basis of interest. Indeed, "such collections of works were the first tazkiras" [9]. So,
                            The basis of classical tazkiras is a collection, which is gradually becoming a literary-critical, even,
                            enriched and improved with theoretical insights. This is why the tazkira is a literary complex
                            The presence of fragments is not contrary to the requirements of the genre, but one of its features. Medium
                            In the city of Khiva, which has become one of the largest cultural and literary centers since the XIX century, in particular, from the XIX century
                            creation of works of art, compilation, reading and promotion
                            During the Feruz period from the end of that century to the beginning of the 20th century, it became more widespread
                            did. After all, classical tazkiraism occurs in the same period and is different in a short time
                            the structure of the tazkirs of the character is also proved by these factors. True, in this period
                            A number of commentaries also appeared in the literary circles of Kokand and Bukhara (Fazliy, Pirmastiy
                            tazkiralari). Ahmadjon Tabibi's tazkira, which are examples of Khorezm tazkira
                            about commonalities and differences (language, style, size, forms of expression, etc.)
                            certain points have been made in literature [10].
                            <br><br> Based on the evolution of tazkir and the characteristics of the genre,
                            One of them, the poet Maksud Shaikhzoda, focuses on the following components of tazkira: "a)
                            brief information about the poet's name, nickname, location; b) life, character of the poet,
                            brief information about some features; c) in the works, works, works of the poet
                            the degree of fame of the works in their time; g) tazkirah to this poet
                            the attitude of the author and, conversely, the position of the poet in relation to the narrator (this
                            information is provided only if there is a personal acquaintance between the poet and the narrator); G)
                            any interesting story or anecdote about the poet, preserved in the mouths of the people or in the memory of the author; e)
                            an example from a poet's poem (usually a ghazal or a poem, a masnavi or
                            rubaiyat and/or continent); j) the end of the poet's life (if he died, where is he buried?
                            of course)" [11].
                            <br>
                            <br> The basis of this form, which is characteristic of the perfect tazkir in the literal sense, is twofold.
                            characterization of the poet as a creative person and interpretation of the evaluation of his works.
                            Of course, these general principles for the genre cannot be the same in all comments.
                            This is the evolution of tazkira, evolution, the features of each literary process, local
                            traditions are explained by factors such as the purpose and ability of the storyteller. Because of this, some
                            about literary views in tazkirs, some examples from the poet's poems
                            Naturally, ideas take precedence. This is the literary period when they created the tazkir grouping.
                            In addition to its features, it also implies a structural and semantic specificity in the development of the genre.
                            needs to be carried out. These tazkirs are relatively significant tazkirs of the 19th and 20th centuries.
                            especially important when defining the essence.
                            <br>
                            <br> Literary critic B. Valikhodzhaev divided the tazkirs into two groups according to the time factor.
                            distinguishes: 1) historical-modern (predecessors and contemporaries); 2) about contemporaries
                            tazkiralar [12]. The features of each of them are analyzed in detail. Scientist in Central Asia X
                            Written in Uzbek at the beginning of the 20th century.
                            tazkiras, including the Khorezm tazkirachi (belonging to the pen of Tabibi)
                            and as a commentary to contemporaries.
                            <br>
                            <br> It should be noted that in the XX century in Khorezm tazkir "haft shuaro" and laffazi and
                            The work of the employees came to the fore. Unfortunately, they have not yet been specifically studied. (Laffasius
                            Partially tazkira was studied by S. Samandarova.
                            published in).
                            <br>
                            <br> We take into account the characteristics of Eastern tazkirism and to the above points
                            It is recommended to conditionally group the samples of Khorezm tazkirachi as follows
                            we saw:
                            <br>
                            <br> 1. Traditional tazkiras - Tabibi's "Majmuai si shuaroi payravi Feruzshahi" and
                            “Muhammasoti kompleksat ush-shuaroi Feruzshahi”, Laffasi's “Tazkirai shuaro” (Khiva poet and
                            biographies of writers ”).
                            <br>
                            <br> 2. Tazkira-complex - "Haft shuaro" ("Prince's office of poets")
                            <br>
                            <br> 3. Biographical-memoir tazkira (Memoirs of the employee "Khorezm musicians").
                            <br>
                            <br> Of these, Laffasi's work is a historical-modern version of tazkirah (in which he lived in the past).
                            There is information about Munis and Ogahi), and the rest to the commentary on contemporaries.
                            belongs to.
                            <br>
                            <br> The characteristic feature is that the traditional Khorezm tazkiras are a genre of literary fragments.
                            It also has an internal stratification, which can be classified as follows:
                            <br>
                            <br> 1) composed only of passages written in works of the ghazal genre (Tabibi's first
                            tazkirasi);
                            <br>
                            <br> 2) Musammat forms - consisting of muhammas and musaddas (Tabibi's second)
                            tazkirasi);
                            <br>
                            <br> Another peculiarity of these tazkirs is that in the first one there is a poet for payrav -
                            Feruz's gazelles, and in the second Feruz and Ogahi's gazelles were chosen as the main text.
                            <br>
                            <br> 3) composed of mixed genres - ghazal, masnavi, quartet (Laffasi tazkirasi).
                            <br>
                            <br> Of course, along with the attitude to these works mentioned in the tazkira, the life of the poets and
                            Information on the activities of Apparently, the tazkira contains a literary piece (poetic)
                            text) and the assessment of the poet's life and work is a typological phenomenon. But certain in some complexes
                            The existence of literary views (though not detailed) brings them closer to tazkirah.
                            In this regard, the famous literary critic A. Hayitmetov wrote a book entitled "Funun
                            ul-balog'a is the first complete textbook on theoretical issues of Uzbek literature
                            He also noted that it was a work of poetic tazkira.
                            In this case, the scholar refers only to the tazkira-specific information about Lutfi's biography in the work
                            holding Based on this view, we have conditionally called Haft Shuaro a tazkira-complex.
                            Because in addition to poetry, there is a prose about two poets - Sultani and Farrukh
                            information is also provided. After all, Haft Shuaro itself is mainly a complex, partly tazkira feature
                            is a synthesized literary source.
                            <br><br> A third group of Tazkiras - poets for ten years in the royal palace
                            Bobojon Tarroh Azizov, who was the supervisor, wrote Khorezm musicians. Then
                            It contains rich information about the literary environment of the Feruz period and the life and work of its poets
                            are given. The author of this work in the form of memoirs is a direct witness to the facts and plates in it.
                            The content of the work gives full grounds to call it tazkira, because “tazkira in the sense of a notebook
                            is one of the genres of literary criticism, in which the history of literature or
                            provides interesting information about the life and work of poets of a particular period ”[15].
                            <br>
                            <br> In the Tazkirah, the author answers thirteen questions on the "condition of thirty-one poets."
                            wrote.
                            <br>
                            <br> These questions are in many respects common to the members of the tazkira mentioned above by M. Shaykhzoda. Ammo
                            Because the employee's resume is based on memories and contains biographical information
                            It does not quote literary passages, but briefly notes the role of each poet in the literary process
                            reported. Importantly, the versatility of the poets' work is also reflected. Also a work
                            The personality and creativity of the poets in Tabibi and Laffasi's commentaries, in particular in Haft Shuaro
                            to broaden the image of the quality, the available biographical information about them
                            to fill in and enrich with new facts. In this respect, the work is tazkira
                            shows that there are certain commonalities between the genres of literary portraiture [16].
                            <br>
                            <br> In the chronicles of the XX century on the history of Khorezm
                            there are thoughts about some poems and poets. In this regard, Bayani's "Shajarai Khorezmshahiy"
                            is characteristic of the work. For this reason, the literary critic G.Ismailova called it Tabibi's “Majmuat ush-
                            shuaro ”and with the names of many artists
                            We will be able to get acquainted. ”[17]
                            <br>
                            <br> Literary critics N.Jumakhoja and I.Adizova
                            Emphasizing the historical and literary significance, they come to the following reasonable conclusion: “his tazkira
                            The difference and advantage of this type of literary source is that it is a view of the literary environment,
                            processes, ideological life alive, in motion, with socio-political events
                            describes the relationship ”[18].
                            <br>
                            <br> The above facts and evidence are rich in information about the literary environment of Khorezm in the early twentieth century,
                            shows that it is colorful. They are objective and comprehensive as primary sources
                            research and advocacy have only recently begun. Most importantly, it is a rash and
                            Manuscripts are based on reliable and comprehensive factual material. Zero, asl
                            One of the factors that ensures the accuracy and reliability of the text is being studied
                            is the abundance of manuscripts.
                            <br>
                            <br> In this regard, most of the Khorezmian literary sources are manuscripts
                            is a fact. The opinion of the famous scientist E.E. Bertels is of special importance: “read
                            The greater the number of manuscripts, the more the district spreads and the problem becomes clearer.
                            Hundreds and thousands of manuscripts have passed through the hands of the researcher
                            what seems impossible will be simplified and clarified ”[19]. Hundreds of such
                            One of the manuscripts, the monograph study of the tazkira-complex "Haft Shuaro" Feruz period
                            by allowing to "clarify" aspects of the literary environment that have so far been little studied
                            valuable.
                            <br><br> In general, the complex and the tazkira are close to the literature under the pretext of "palace literature".
                            to correct some of the erroneous, one-sided views that have existed so far, of works of art
                            to clarify the error of interpreting the creators in terms of social status,
                            to expand and enrich the notion of a number of poets, and finally, literary
                            to study the environment as a whole and to evaluate it objectively on the basis of new scientific thinking
                            allows.
                            <br> <br> <br> [1] Qahhor A. Interview with young people. –T .: Young Guard, 1968. P.102-103.
                            <br>
                            <br> [2] Sobranie Vostochnyx rukopisey AN RUz. T II. Tashkent. 1954. -S. 11.
                            <br>
                            <br> [3] Hamidova M. Manuscripts are a literary source. T., 1981 -B.124.
                            <br>
                            <br> [4] Rahimov D., Matrasul Sh. Shown work.1991. T .: Literature and art, - P. 88.
                            <br>
                            <br> [5] Abdugafurov A. "Yugurmiya" - a collection of Uzbek revolutionary poems // Uzbek language and
                            literature.T., 1988. -№5 -P.3-10.
                            <br>
                            <br> * In Khorezm tazkiras were called complex (I.X).
                            <br>
                            <br> [6] Valikhojayev B. History of Uzbek literature. X-XIX centuries. –T .: O`zbekiston,
                            1993-B.118.
                            <br>
                            <br> [7] Ogahiy. Riyazud state. Fund of the Institute of Oriental Studies of the Uzbek Academy of Sciences Inv. № 5364 II-B.374-a.
                            <br>
                            <br> [8] Ogahiy. Gulshani state. Fund of the Institute of Oriental Studies of the Uzbek Academy of Sciences Inv. №7572 -B 101-102.
                            <br>
                            <br> [9] Mallayev N. Historical and literary significance of XV century tazkira // Uzbek literature
                            issues. Collection. T .: 1959. - B.255.
                            <br>
                            <br> [10] See: Valixoʻjayev.B. Shown work -P.175-176. Matkarimova S. Tazkirachilik
                            tradition: commonality and originality // Artistic thinking and literary process. Collection.-
                            Toshkent.2004.-B 43-46.
                            <br>
                            <br> [11] Shaykhzoda M. From the history of tazkirachilik // A gift to Navoi. Collection. T., 1968- B. 49.
                            <br>
                            <br> [12] Valikhojayev B. Presented work.- P. 20-26.
                            <br>
                            <br>
                            <br>
                            <br> [13] Hayitmetov. A. The first theoretical guide to literature in Turkish // Uzbek language and
                            literature.T., 2002.№ 1. -B.72.
                            <br>
                            <br> [14] Employee. Khorezm musicians. - T .: Literature and art, 1994. 96-p.
                            <br>
                            <br> [15] Valixoʻjayev B., Kholmatov.Sh. History of Uzbek literary criticism. Part 1. Samarkand., 1983-B.
                            13.
                            <br>
                            <br> [16] See: Azimova H. Typological features of tazkira and literary portraits //
                            Uzbek language and literature. T., 2002. № 2. -B 21-24
                            <br>
                            <br> [17] Ismailova G. Feruz period Khorezm literary environment. Phil. fan.nomz. dissertation. T .: Fan, 1995-
                            B. 25.
                            <br>
                            <br> [18] Jumakhoja N, Adizova I. There is no monument to the word.-T .: Uzbekistan, 1995- P. 148
                            <br>
                            <br> [19] Bertels. E.E. Voprosy metodiki kriticheskix izdaniy klassicheskix pamyatnikov literatury
                            narodov Blijnego i Srednego Vostoka // Materialy Vsesoyuznoy konferensii vostokovedov v Tashkente.
                            - T .: Izd.AN.RUz, 1957- S.237-238. <br>
                            <br>
                            <br>
                        @endif








                       </p>
                </div>
            </div>
        </div>
    </section>
@endsection
