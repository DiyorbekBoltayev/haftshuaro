@extends('user.master')
@section('title')
    @lang('public.sh_janr2')
@endsection
@section('content')

    <section class="header1 cid-t7cHtHdjWC mbr-parallax-background" id="header1-1s">


        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(250, 250, 250);"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2">
                        <strong>
                            @lang('public.sh_janr2')
                        </strong>
                    </h1>


                </div>
            </div>
        </div>
    </section>

    <section class="features18 cid-t7cHIu6mwO" id="features19-1t">


        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-12 col-lg">
                    <div class="card-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-4 display-7">
                            <strong>
                                @if( $lang == "uz" )
                                    3.1. Musammat shakllari: an`ana va ijodiy xoslik
                                @endif
                                @if( $lang == "en" )
                                    3.1. Positive forms: tradition and creativity
                                @endif
                                @if( $lang == "ru" )
                                    3.1. Позитивные формы: традиция и творчество
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
                        </p>

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

    <section class="content5 cid-t7cI0L6E58" id="content5-1u">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">


                    <p class="mbr-text mbr-fonts-style display-7">

                        @if( $lang == "uz" )
                            Adabiyotshunos A. Abdugʻafurov ta`kidlaganidek, “Biri
                            – mustaqil musammatlar, ya`ni ijodkor oʻz she`rlarini zikr etilgan shakllarda yozadi. Ikkinchi
                            usul shuki, ijodkor boshqa bir shoir yoki oʻzi oldin bitgan gʻazali baytlariga oʻsha mazmun,
                            ruh, vazn va yoʻnalishda yangi misralarni qoʻshish orqali muxammas, musaddas, musammanlar
                            shakliga keltiradi[1]”. Bu jihatdan majmuada mustaqil musammatlarga nisbatan ikkinchi usulda
                            yozilgan musammatlar koʻp boʻlib, ular asosan boshqa shoirlar gʻazallari asosida bitilgan.
                            Birinchi usulda esa musabba`, musammanlarni, ikkinchi usulda muxammas va besh murabbani
                            uchratamiz. Musammatlarda ham lirikadagi, xususan, gʻazallardagi kabi inson kechinmalari,
                            oshiqlikning zavqu iztiroblari, shodlik va gʻam motivlari, real voqelikka munosabat masalalari
                            aks etib, koʻpincha vafodor va hayotsevar oshiqning, lirik qahramonning jaholat va
                            adolatsizlikdan noroziligi va ezgulikka umidvorlik kayfiyati ohanglari kuylanadi. Musammatlar
                            tarkibida asosiy oʻrinda muxammaslar turadi va ularning asosini taxmislar tashkil etadi.
                            Ma`lumki, muxammas mumtoz adabiyotimizda keng tarqalgan boʻlib, fikr va his-tuygʻularni
                            ifodalashga qulay, gʻazal va ruboiy kabi mahsuldor janr sifatida asrlar osha takomillashib
                            kelgan. Ayniqsa, Xorazm adabiy muhitida alohida mavqega ega boʻlib, faqat muxammaslardan
                            tuzilgan bayoz va devonlar maydonga kelgan. XIV asrdan boshlangan muxammaschilik an`anasi XX asr
                            boshida ham Xorazm shoirlari ijodida mustahkam oʻrin oldi.
                            <br>
                            <br>Muxammas toʻgʻrisida shahzoda shoirlar zamondoshi Tabibiy oʻzining “Muxammasoti majmuat
                            ush-shuaroi Feruzshohiy” asarida shunday yozadi.
                            <br>
                            <br>Muxammas chu yaxshiroq ash`ordur,
                            <br>
                            <br>Tarixi hamaga namudordur.
                            <br>
                            <br>Qoʻshilganda chun iki shoir soʻzi,
                            <br>
                            <br>Malohatligʻ oʻlgʻusi nuqta koʻzi[2].
                            <br>
                            <br>Ogahiy taxmislarni oʻz devoni debochasida “shakarrez”, “bazmoro” deya ta`riflaydi[3].
                            <br>
                            <br>Ma`lumki, taxmis yaratishning asosiy sharti yangi she`r asliyat mazmuniga monand yoxud
                            yanada teranroq boʻlishidir. Shu jihatdan oʻzga gʻazalni taxmis qilish juda mas`uliyatli boʻlib,
                            buning uchun shoir ma`lum poetik mahoratni egallashi, mazkur baytning gʻoyaviy mazmunini davom
                            ettirishi, vazn, qofiya va radifni oʻz holicha saqlashi kerak. Xullas, taxmis tarzidagi
                            muxammaslarni yaratishni har bir ijodkor oʻziga bir sinov deb biladi.
                            <br>
                            <br>Adabiyotshunos N.Jumayev ta`kidlaganidek: “Ustozlar gʻazallariga muxammaslar bogʻlash
                            gʻazalchilikda mahorat qozonishning asosiy omillaridan biri boʻlgan, chunki nazira va
                            muxammaslar yozish original gʻazal yaratish yoʻlidagi oʻziga xos mashq, tayyorgarlik vazifasini
                            oʻtagan[4]”. Demak, taxmislar ikki ijodkorning ijodiy hamkorligi asosida maydonga keladi. Shu
                            bois uning misralari oʻrtasida mantiqiy bogʻliqlik, uygʻunlik boʻlishi shart. Bunday payvandlash
                            uchinchi misraga yuklanadi.
                            <br>
                            <br>“Haft shuaro” majmuasidan oʻrin olgan muxammaslar asosan Navoiy, Munis, Ogahiy, Feruz, Avaz
                            va Fuzuliy gʻazallariga bogʻlangandir.
                            <br>
                            <br>Sultoniy Navoiyning “Sahar xovar shahi charx uzrakim xayli hasham chekti” misrasi bilan
                            boshlanuvchi gʻazaliga muxammas bogʻlagan.
                            <br>
                            <br>Navoiy misralaridagi “fano dashti” insoniy sifatlar ilohiylashgan makon boʻlib, bu yerda
                            rahrav (sayr qiluvchi) abadiylikni anglab yetish, “mayi vahdat”ga,
                            <br>
                            <br>Olloh rahmatiga muyassar boʻlish uchun Haq jamoli fikriga choʻmib, yillar davomida qadam
                            bosgani talqin qilinar ekan, Sultoniy bu fikrni yanada davom ettirib, quyidagi beshlikni bitadi:
                            <br>
                            <br>Hazin Sultoniygʻa altofi haq doim qarib oʻlgʻay,
                            <br>
                            <br>Qiyomatda shafoatxohi oning ul habib oʻlgʻay,
                            <br>
                            <br>Bu matlab shohidi vasligʻa yoʻl topmoq ajib oʻlgʻay,
                            <br>
                            <br>Navoiy, shoyad ul rahravgʻa bu maqsad nasib oʻlgʻay,
                            <br>
                            <br>Ki bul dashti fano qat` etgali yillar qadam chekti (B-144).
                            <br>
                            <br>Sultoniy Navoiyga shunchaki ergashmaydi, ustoz fikrlarining muayyan qirralarini qator
                            mazmundor misralar bilan boyitishga intiladi, Navoiy misralarining asl mohiyatini teran tahlil
                            qiladi. Jumladan, uning fikricha, Olloh shafoat koʻrsatsagina, Yaratganning vasliga vosil
                            boʻlish mumkinligi alohida ta`kidlanadi. Sultoniyning Navoiyni “aylasa” radifli gʻazaliga
                            muxammasi ishqiy-falsafiy mazmun kasb etadi. Bu hol ustozning xalaf shoirga ijodiy ragʻbatining
                            natijasi boʻlib, undagi ijtimoiy mohiyat – sadoqat motivi yanada chuqurlashadi:
                            <br>
                            <br>Sayri gulni, doʻstlar, sarvi xiromonsiz netay,
                            <br>
                            <br>Gul yuzining yodida afgʻonim falakka yetkuray,
                            <br>
                            <br>Man nechuk huru parining vaslidin dam uray,
                            <br>
                            <br>O`zgalar vaslin tamanno aylasam navmid oʻlay,
                            <br>
                            <br>Har kishi hamkim saning vasling tamanno aylasa (B-139).
                            <br>
                            <br>Ushbu baytning dastlabki uch misrasi Navoiy gʻazalidagi fikrlar bilan uygʻunlashib, yaxlit
                            ohangni vujudga keltiradi va baytning boshlamasi sifatida ma`ni uzviyligiga xizmat qiladi.
                            Garchi Sultoniy Navoiy baytlaridagidek oʻta teran va original soʻz oʻyinlari yarata olmagan
                            boʻlsa-da, ustoz fikrlariga monandlik qila olgan. Navoiy gʻazalining har bir baytida takrir
                            san`atining goʻzal namunalarini koʻramiz. Shuningdek, shoir xalq orasidagi “koʻzi chiqsun”
                            iborasi orqali xalqchillikni oshiradi. Jumladan:
                            <br>
                            <br>O`zgalar husnin tamosho aylasa chiqsun koʻzum,
                            <br>
                            <br>O`zga har koʻz ham sening husning tamosho aylasa.
                            <br>
                            <br>Shoir har bir baytda oshiq va raqiblarga hukm chiqaradi. Sultoniy esa oshiqning dardu
                            iztiroblarini, alamlarini tasvirlaydi va bevosita Navoiy baytlaridagi mazmun va mohiyatni
                            saqlashga harakat qiladi. Oshiq va raqiblarni Navoiy misralaridagi hukmga tayyorlaydi. Ya`ni
                            hukmning sababini yoritib boradi. Buni har bir bandda uchratish mumkin:
                            <br>
                            <br>Gul yuzi shavqida afgʻon aylaram chun andalib,
                            <br>
                            <br>Holima kulgu qilurlar ta`n etib barcha raqib,
                            <br>
                            <br>Ishqida Majnun boʻlubman vaslidin istab nasib,
                            <br>
                            <br>Kelturung daf`i jununimgʻa parixon, yoʻq tabib,
                            <br>
                            <br>Kim ul ajabdur, pari har kimni shaydo aylasa (B-140).
                            <br>
                            <br>Darhaqiqat, Sultoniy misralarida oshiq yor ishqida Majnunlik darajasiga yetgan, Navoiy
                            baytida esa junungʻa tabib izlaydi. Ustoz shoirning fikricha, bu dardning tabibi husniga shaydo
                            qila olgan mahbubadir.
                            <br>
                            <br>Koʻrinadiki, muxammaslarning asosiy qismi Navoiy gʻazallariga bogʻlangan. Bu – ustozga
                            ergashish, undan fayz va ragʻbat olishga intilish ifodasi. Shu bilan birga, Navoiyning faqat
                            gʻazallarigina emas, balki musammatlari ham shahzoda shoirlarga ilhom manbai boʻlgan. Navoiy
                            muxammasning mustaqil (tab`i xud) va taxmis (oʻz gʻazali va boshqalar gʻazallariga bitilgan)
                            turlarini yaratgan boʻlsa, majmuada oʻz gʻazaliga yozilgan musammat uchramaydi. Lekin tayyor
                            gʻazallar asosidagi muxammaslarda ularga xos xususiyatlar saqlanadi. Ularda jumladan, “mavzu
                            chuqurroq ishlanadi, gʻazaldagi obrazlar qiyofasi, xatti-harakati, ruhiyati va kechinmalari
                            yangi-yangi qirralarda toʻlaroq ochiladi. Detallarda konkretlashtirish, mantiqiy dalillar bilan
                            asoslash kuchayadi”[5].
                            <br>
                            <br>Majmuada Sodiq Navoiyning “koshki” radifli gʻazaliga bogʻlagan taxmis ham bor. Aynan shu
                            gʻazalning tanlanishi tasodifiy boʻlmay, Navoiyning bu nodir gʻazali oʻz davridan boshlab el
                            orasida mashhur boʻlgani, hozirgacha kuyga solinib, zoʻr muvaffaqiyat bilan ijro etilayotgani
                            bilan bogʻliqdir. Bu haqda Navoiy “Xamsat ul-mutahayyirin” asarida “el orasida shuhrat tutub
                            erdi va podshoh hazratlarining suhbatlarida dogʻi koʻp oʻqilur erdi”, – deb yozadi[6].
                            <br>
                            <br>Ochmagay erding jamole olam oro koshki,
                            <br>
                            <br>Solmagay erding bori olamgʻa gʻavgʻo, koshki,-
                            <br>
                            <br>matlali bu gʻazaldagi mazmundorlik va uslubiy ravonlik taxmis yozishga da`vat etgan.
                            Taxmisda oshiqning umidsizlik holati tasvirlanadi. Oshiq mahbubani koʻrganidan, uning zulmidan,
                            olamga “rasvo” boʻlganidan iztirob chekadi. Zotan, yor vasliga agʻyor yetishi tabiiy. Taxmisda
                            bevafolik azobini boʻrttirish vazifasini toʻrt misrada takrorlanuvchi “bas ne foyda” radifi aks
                            ettiradi, yakuniy ma`no esa Navoiyga mansub oxirgi ikki misrada ifodalanadi:
                            <br>
                            <br>Javru zulm aylab dildor, bas ne foyda,
                            <br>
                            <br>Aylamas Sodiq lutf izhor, bas ne foyda,
                            <br>
                            <br>Yoʻl topibdur vasliga agʻyor, bas ne foyda,
                            <br>
                            <br>Ey Navoiy, bevafodur yor, bas ne foyda,
                            <br>
                            <br>Ganjkim desang agar boxud digar yo koshki (B-242).
                            <br>
                            <br>Sultoniy esa Navoiyning “Koʻngullar quvvati Shirin dostoning” misrasi bilan boshlanuvchi
                            olti baytli gʻazaliga muxammas bogʻlaydi. Unda ishqning sermashaqqat yoʻllari, oshiqlik dardu
                            iztiroblari tasvirlanadi. “Muhabbat ahlini izmiga egargan oshiq, ishq vodiysining xatarli
                            yoʻliga kirar ekan, unga haq ta`yid (madad) beradi”, shu tufayli bu yoʻlning shavqidan gullar
                            teradi:
                            <br>
                            <br>Navoiy ishq vodiysigʻa kirdi,
                            <br>
                            <br>Xatarliq yoʻldurur ahbobi boning (B-136).
                            <br>
                            <br>Bu xususiyatlar aks etgan chinakam muxammas shoirning iste`dodi, mahorati va mehnati bilan
                            yaratiladi. Mahorat esa ustozlar ijodidan bahra olmoq bilan shakllanadi.
                            <br>
                            <br>Munisning “Jonbaxsh labing uzra chiqmish xatti rayhoni” deb boshlanuvchi gʻazaliga Sultoniy
                            bogʻlagan muxammas ana shunday bahramandlik ifodasi boʻlib, ishq-muhabbat gʻoyalarini tarannum
                            etadi. Muxammas badiiyligini oshirish maqsadida shoir “Qoshing qilichi qasdi har lahza bagʻir
                            tilmak”, “Gulzori jamolingni koʻrgan boʻlur hayroni” kabi istiora va mubolagʻali misralarni
                            bitadi. Lirik qahramonning mahbubasi goʻzallik bobida beqiyos, uning ishqiga duchor boʻlgan
                            “devonaligʻ istaydur”.
                            <br>
                            <br>“Tabiat hamda jamiyat hodisalari bilan bogʻliq poetik ifodalar izlashda Ogahiyga Munis
                            mahorati ilhom va ibrat manbai boʻldi. Gʻuncha Munisning ham eng sevimli poetik obrazlaridan, –
                            deya tadqiq etadi adabiyotshunos olim N.Jumaxoʻja. Munis lirikasida gʻuncha obrazini poetik
                            tadqiq etishning original namunalari mavjud. Masalan, shoir asarlaridan birida jonlantirish
                            usulida gʻunchani ma`shuqa lablari bilan mubohasaga kiritadi. Tasvirlanishicha, oʻz haddini
                            bilmay, odobsizlik qilgan gʻuncha jangda yengiladi:
                            <br>
                            <br>Da`vogʻa ochib erdi lab ogʻzing ila gʻuncha,
                            <br>
                            <br>Ul tarki adabdindur ogʻzidin oqar qoni.
                            <br>
                            <br>Bunday poetik manzara yaratish orqali shoir ma`shuqa labi gʻunchadan koʻra goʻzal, tirik,
                            lazzatbaxsh ekanligini namoyish etadi. Ogahiy Munisning shu gʻazaliga yozgan muxammasida gʻuncha
                            obrazi bilan bogʻliq manzarani yanada kuchaytiradi, qilgan noma`qulchiligi uchun gʻunchaning
                            boplab ta`eiri berilganini detallashtirib tasvirlaydi. Natijada poetik fikrning ta`sirchanligi
                            ortadi:
                            <br>
                            <br>Ta`dib onga yetkurdi charx uyla tong otgʻuncha,
                            <br>
                            <br>Kim urdi sabo kojin ogʻzini qonatgʻuncha,
                            <br>
                            <br>Yetmak sababin soʻrsang bu zillat onga muncha,
                            <br>
                            <br>Da`vogʻa ochib erdi lab ogʻzing ila gʻuncha,
                            <br>
                            <br>Ul tarki adabdindur ogʻzidin oqar qoni”[7].
                            <br>
                            <br>Gʻuncha obrazining badiiy talqini an`anasida Sultoniyning quyidagicha ijobiy tajribasini
                            kuzatishimiz mumkin:
                            <br>
                            <br>Bogʻ gʻunchalari umri ermasdur ikki kuncha,
                            <br>
                            <br>Yuzingga barobarlik lofini urar muncha,
                            <br>
                            <br>Koʻr, gʻunchai sarkash koʻrdi alamin shuncha,
                            <br>
                            <br>Da`vogʻa ochib erdi lab ila ogʻzing gʻuncha,
                            <br>
                            <br>Bu tarki adabdandur, oqar ogʻzidin qoni (B-143).
                            <br>
                            <br>Ayrim oʻrinlarda Sultoniy Munis misralaridagi sinonimlarni ishlatadi. Bu esa Sultoniy
                            iste`dodining yuksalishida Munis ijodi ham alohida ahamiyatga molik boʻlganini koʻrsatadi. Zero,
                            Munis gʻazallarining muxammas bogʻlash uchun tanlanishi buning bevosita isbotidur:
                            <br>
                            <br>Sultoniygʻa bir dard-gʻam sabab ermaskim,
                            <br>
                            <br>Sansiz manga hech ishrat ayshu tarab ermaskim,
                            <br>
                            <br>Har necha zaxm ursang, jongʻa taab ermaskim,
                            <br>
                            <br>Payvasta yarolardin shukrim ajab ermaskim,
                            <br>
                            <br>Gulrang qabo tutmish Munis tani uryoni.
                            <br>
                            <br>Majmuadan Ogahiy gʻazallariga bogʻlangan muxammaslar ham oʻrin olgan. Manbalardan ma`lumki,
                            Ogahiy shahzoda shoirlarning ustozi boʻlgan. Shu boisdan ular Ogahiy asarlaridan ta`sirlanib
                            yoxud unga ergashib ijod qilishi tabiiy. Jumladan, Sodiq Ogahiyning Feruzga bagʻishlab yozgan
                            “boʻlmasun” radifli gʻazaliga muxammas bogʻlagan:
                            <br>
                            <br>Ey shahi Doronishon, v-ey Xusravi oliymaqom,
                            <br>
                            <br>Haq taolo aylasun iqboli johing mustadom,
                            <br>
                            <br>To mani lutfing bila Sodiq qildi shodkom,
                            <br>
                            <br>Ogahiy yigʻlab duoi davlating aylar mudom,
                            <br>
                            <br>Sidq eshigida zamone koʻzi benam boʻlmasun (B-246).
                            <br>
                            <br>Sodiq bu muxammasida Ogahiyning ezgu istaklarini oʻz tuygʻulari asosida davom qildiradi.
                            Ogahiy oʻz gʻazalida oʻsha davrdagi xalq farovon hayotining sababchisi Feruz ekanligini alohida
                            ta`kidlaydi. Sodiq esa Feruzni mashhur hukmdorlar – Doro va Xisravga qiyos qilib, talmeh
                            san`atidan foydalanadi va bu bilan uning adolatli ekaniga ishora qiladi.
                            <br>
                            <br>“Haft shuaro” majmuasidagi muxammaslarning aksariyati Feruz gʻazallariga bogʻlangan
                            taxmislardir. Bunday muxammaslar majmuadagi har bir shoir ijodida uchraydi. Adabiy tajribadan
                            ma`lumki, taxmislarda ham badiiy ijodga xos shakliy takrorda yangi mazmun ifodasi mavjud.
                            Chunonchi, takroriylik, avvalo, uning shakliy xususiyatlarida (beshlik, oxirgi ikki misraning
                            salaf shoirga mansubligi, an`anaviy obrazlar, taxalluslarining mavjudligi) aks etsa, betakrorlik
                            taxmisning ana shu unsurlarining yangi talqini, holat va ma`nolarida takrorlash orqali
                            yangi-yangi qirralarini kashf etishda koʻrinadi. Zero, “ijodkor voqelikka janr imkoniyatlari
                            nigohi bilan qarar ekan, shu jarayonda u voqelik tarkibini, uning mohiyatini ichki sezish
                            yordamida janr talablariga javob beradigan tartibda qayta joylashtira oladi”[8].
                            <br>
                            <br>Feruzning “qaydadur” radifli gʻazaliga bogʻlagan muxammasida esa Feruz xarakteridagi ibratli
                            qator xos fazilatlarni tasvirlaydi:
                            <br>
                            <br>Aylading Sultoniy har yongʻa nazar Feruzdek,
                            <br>
                            <br>Bahri dahr togʻidin aylab guzar Feruzdek,
                            <br>
                            <br>Istar erdim tinmayin shomu sahar Feruzdek,
                            <br>
                            <br>Topmadim ul gul visolidin asar Feruzdek,
                            <br>
                            <br>Ey sabo, bergil xabar, oromijonim qaydadur (B-147).
                            <br>
                            <br>Koʻrinadiki, har bir misrada Feruzga xos muayyan xislat (teranlik, bunyodkorlik, uygʻoqlik,
                            goʻzallikka oshnolik) aks etgan va toʻrtta misra oxirida “Feruzdek” soʻzining takrori ma`noni
                            kuchaytirib, obrazga diqqatni qaratadi.
                            <br>

                    //
                            <br>Sodiq ham Feruz gʻazallariga muxammas bogʻlaydi. Shoirning fikricha, oshiq kim boʻlishidan
                            qat`i nazar, u ishq oldida tengdir. Shu boisdan muxammasning yakuniy bandidagi Feruzning baytida
                            u yorga murojaat qilib, oldida bir banda ekanligini ta`kidlaydi. Gʻazal maqta`siga monand Sodiq
                            ham oʻziga xos sifatlarni oshiqqa koʻchiradi va oxirgi misrada ifodalangan “bandai
                            bee`tiboringman” fikriga qoʻshiladi:
                            <br>
                            <br>Erurman, Sodiqo, sardaftari ahli suxan lekin,
                            <br>
                            <br>Kalomedur nazokat ichra durri adan lekin
                            <br>
                            <br>Latofatda erur andogʻki, gulbargi chaman lekin,
                            <br>
                            <br>Agarki baxti Feruz ila olam shohiman, lekin,
                            <br>
                            <br>Sening, ey husn amiri, bandayi bee`tiboringman (B-244).
                            <br>
                            <br>Majmuada Oqilning Sultoniy gʻazaliga bogʻlagan muxammasi ham berilgan. “Etmish” radifli
                            gʻazaliga bogʻlangan bu muxammasda oshiqning sevgisi-yu mahbubaning bee`tiborligi tasvirlanadi.
                            Oshiqning oʻrtangan holatini yorqinroq ifodalash maqsadida Oqil “koʻzimni qilib tiyra holimni
                            xarob etmish”, “qilgʻon manga ahdini ham yodigʻa kelturmay” kabi betakror misralarni yaratadi:
                            <br>
                            <br>Koʻp boʻlmagʻil Oqildek hijronda san muntazir,
                            <br>
                            <br>Bazm ayshini soz etgil bu kechada sar to sar,
                            <br>
                            <br>Majlis aro kelturgil may ila ham sogʻar,
                            <br>
                            <br>Sultoniy tarab jomin ichgil bu tun, ey dilbar,
                            <br>
                            <br>Lutf ila karam aylab, bazminga shitob etmish (B-526).
                            <br>
                            <br>Majmuada mustaqil muxammaslar ham mavjud. Ma`lumki, muxammasning bu turi bir shoir qalamiga
                            mansub boʻlib, unda fikrlar erkin ifodalanadi. Zero, mavzu, gʻoya, qofiya va radif ham shoirning
                            oʻzi tomonidan tanlanadi. Bu jihatdan Murodiyning “sogʻindim” radifli muxammasi ahamiyatga molik
                            boʻlib, unda ishq mavzusi tarannum etiladi. Shoir ma`shuqaga xos sifatlarni keltirish bilan
                            oshiqning holatini yanada yorqinroq tasvirlaydi va tansiq as-sifat san`atini qoʻllaydi:
                            <br>
                            <br>Mani hajrdan ul oy husni gulzorimni istarman,
                            <br>
                            <br>Sochi sunbul, yuzi gul, chashmi xummorimni istarman
                            <br>
                            <br>Malohatligʻ yuzida mehri osorimni istarman
                            <br>
                            <br>Mani vaslini izlab zulfi totorimni istarman
                            <br>
                            <br>Latofat gulshanida mehru ruxsorimni sogʻindim (B-16).
                            <br>
                            <br>Shuningdek, Sultoniyning “Chaman sayrigʻa keldilar yorlar” misrasi bilan boshlanuvchi
                            muxammasida yor jafosining sabab va oqibatlari kashf etiladi. Jumladan, sochidagi zunnor
                            parishonlikka, mehrdan ayriliq gʻamga, raqib (agʻyor) borligi ozor chekishga sababdir. Shoir
                            muxammasning badiiyligini oshirish va asosiy ma`noni qabartib koʻrsatish maqsadida
                            “Jafokorlardur, jafokorlar”, “Bu dildorlardur, bu dildorlar” singari takrirlarni har bir band
                            oxirida keltiradi. Aynan shunday takrirlarni oʻzida mujassam qilgan misralarni biz Bayoniy
                            ijodida ham kuzatamiz. Bu esa Sultoniyning ustoz shoirlar ijodida uchraydigan radiflar yoxud
                            takrirlarga monand ravishda she`r bitishga intilishini koʻrsatadi:
                            <br>
                            <br>Parishonligʻim zulfi zunnoridin,
                            <br>
                            <br>Gʻamim furqati mehri ruxsoridin.
                            <br>
                            <br>Yetar tanga ishi hajring xoridin.
                            <br>
                            <br>Manga yetdi ozor agʻyoridin,
                            <br>
                            <br>Jafokorlardur, jafokorlar (B-138).
                            <br>

                        //
                            <br>“Haft shuaro” majmuasida musammat shakllaridan musaddaslar ham uchraydi. Garchi bu janrga
                            mansub she`rlar kam miqdorda boʻlsa-da, ular orqali shoirlar mahoratiga baho berish mumkin.
                            Manbada jami 10 ta musaddas mavjud boʻlib, ulardan 1 tasi Murodiy, 1 tasi Sultoniy, 2 tasi
                            Sodiq, 2 tasi Oqil va 4 tasi Bayoniy qalamiga mansubdir.
                            <br>
                            <br>Ma`lumki, musaddas – olti misradan iborat she`r shakli boʻlib, dastlabki bandi a-a-a-a-a-a
                            tarzida, keyingi bandlar esa b-b-b-b-a-a shaklida qofiyalanadi. Majmuada Sultoniyning besh
                            banddan iborat mustaqil musaddasi keltirilgan:
                            <br>
                            <br>Bazmima lutf ul shoʻxi suxandon kelsa,
                            <br>
                            <br>Nola qilma dilu jon ul gulixandon kelsa,
                            <br>
                            <br>Boʻlma Sultoniy ul oy vaslida giryon kelsa,
                            <br>
                            <br>Qolmagʻil mahv boʻlib husniga hayron kelsa,
                            <br>
                            <br>Orazi xoli ila koʻzi qarosini koʻrung,
                            <br>
                            <br>Jongʻa ahbob oning jabru jafosini koʻrung (B-149).
                            <br>
                            <br>Shoir har band oxirida soʻnggi ikki baytni takroran keltiradi. Musaddas ishq-muhabbat
                            mavzuida yozilgan. Unda ma`shuqaga xos sifatlarni keltirish bilan oshiqning holati aniqroq
                            tasvirlanadi.
                            <br>
                            <br>Shuningdek, manbada Oqil qalamiga mansub ikkita musaddas berilgan boʻlib, ulardan bittasi
                            Komil Xorazmiyning “Soʻyla, menga ey sanam, kimni sevar yorisan?” misrasi bilan mashhur boʻlgan
                            gʻazaliga nazira tarzida yaratilgan. Shoir Komil Xorazmiy fikrlari asosida oʻz kechinmalarini
                            bayon qiladi. Musaddasning dastlabki bandida fikrlar tajohuli orif va takrir san`atini
                            uygʻunlashtirgan holda ifodalanadi va har bir misrada mahbubaga xos xususiyatlar savol tarzida
                            beriladi:
                            <br>
                            <br>Qaysi husn mulkining, aytki, xoqonisan?
                            <br>
                            <br>Qaysi husn kishvarin, soʻylaki, sultonisan?
                            <br>
                            <br>Qaysi Adan bahrining gavhari gʻaltonisan?
                            <br>
                            <br>Qaysi mehrivorining mehri duraxshonisan?
                            <br>
                            <br>Qaysi latifu sharif jam`ini san jonisan?
                            <br>
                            <br>Rost degil, kimnisan noz ila jononisan? (B-532)
                            <br>
                            <br>Dastlabki besh misraning boshida “Qaysi” soʻzining keltirilishi ta`sirchanlikni oshirib,
                            ohangni kuchaytiradi. Har bir misrada mahbubaning bir sifati ritorik savol tarzida aks etadi
                            (Husn mulki xoqoni, husn kishvarida sulton, bahr (dengiz) gavhari va boshqalar).
                            <br>
                            <br>Manbada Oqil qalamiga mansub yana bir musaddas 11 banddan iborat. Bu musaddas dastlabkisidan
                            farqli oʻlaroq, har bir band oxirida:
                            <br>
                            <br>Soqiyo, kelturgil ishrat bodasini yoz erur,
                            <br>
                            <br>Shohi odil davridur, el barcha sarafroz erur,-
                            <br>
                            <br>bayti takrorlanib keladi. Musaddas tabiat tasviriga bagʻishlangan. Biroq shoir unda yozning
                            goʻzal manzarasiga monand holatda mahbuba husnining jozibasini tasvirlaydi. Jumladan, quyidagi
                            bandning dastlabki misrasida tajohuli orif san`atini tashbeh bilan uygʻunlashtiradi, ya`ni
                            mahbuba kokilini zulf va kamandga qiyos qiladi. Bu bejiz emas, zero, oʻsha kokillar oshiq
                            koʻnglini band etgan. Shu bois oshiq yordan iltifot kutadi. Ishq mayini tutib, oshiqlar ichra
                            mavqei oshishini soʻraydi:
                            <br>
                            <br>Ey pari, kokulmudur, yo zulf erurmu yo kamand,
                            <br>
                            <br>Aylading bu banda koʻnglum bu kamanding birla band,
                            <br>
                            <br>Lutf qil, ushshoq arosida boʻlay to sarbaland
                            <br>
                            <br>Soqiyo, kelturgil ishrat bodasini, yoz erur,
                            <br>
                            <br>Shohi odil davridur, el barcha sarafroz erur(B-81).
                            <br>
                            <br>Shoir oʻz fikrlarini banddan bandga rivojlantirib boradi. Bu esa oshiqning iztiroblari
                            yanada aniqroq tasvirlanishiga xizmat qiladi. Buning uchun Oqil turli badiiy vosita va
                            san`atlardan mohirona foydalanadi. “Orazing burji malohatda erur Kan`on mahi” yoki “Taxti husn
                            uzra erursan, barcha mahvashlar shahi” misralaridagi talmeh, istiora va mubolagʻaning
                            ifodalanishi yoxud “Hajr aro vasling tilar erdim tun-kun, ey sanam” misrasidagi tazod
                            san`atining qoʻllanishi fikrimizning dalilidir. Shuningdek, bandlarda “oromimiz, gulandomimiz,
                            jomimiz, ayyomimiz” soʻzlarining qofiya sifatida tanlanishi shoir mahoratining bir namunasidir:
                            <br>
                            <br>Bu kecha Oqil kibi gulshandadur oromimiz,
                            <br>
                            <br>Hamdamu hamrozimiz ul yori gulandomimiz,
                            <br>
                            <br>Obi hayvondek mayu getinamodek jomimiz,
                            <br>
                            <br>Xusravi Jamjoh zamonida bahor ayyomimiz.
                            <br>
                            <br>Soqiyo, kelturgil ishrat bodasini, yoz erur,
                            <br>
                            <br>Shohi odil davridur, el barcha sarafroz erur.
                            <br>
                            <br>“Haft shuaro” majmuasida Sodiq qalamiga mansub musaddas 9 banddan iborat. Musaddas
                            ishq-muhabbat mavzusida yozilgan. Har bir band oxirida dastlabki bandning oxirgi ikki misrasi
                            takrorlanadi. Oshiqning ishqdan oʻrtangan qalbi mahbubani jafokorlik va bevafolikda ayblaydi:
                            <br>
                            <br>Bu emas erdi maning sendin umidim, ey yor,
                            <br>
                            <br>Ki qilib hajr aro koʻnglum gʻamu mehnatga duchor,
                            <br>
                            <br>Gul yuzing hasratidin bagʻrima sanchding yuz xor,
                            <br>
                            <br>O`zgalar bazmini vasling bila qilding guluzor,
                            <br>
                            <br>Ey parivash, qani ahdingga vafo aylaganing,
                            <br>
                            <br>Sharbati vasl ila dardimga davo aylaganing (B-419).
                            <br>
                            <br>Umuman, she`rda shakl va mazmun uygʻunligi boʻlsa-da, ayrim bandlarda shakliy gʻalizlik
                            uchraydi, jumladan ba`zi qofiyadosh soʻzlar toʻla ohangdoshlik bermaydi. Ya`ni, musaddasning
                            uchinchi bandida “mango, ravo, sabo, aslo” soʻzlarini qofiya qilib keltiradi. Bu soʻzlar toʻliq
                            ohangdosh boʻlolmaydi:
                            <br>

            ////
                            <br>Avval aylab eding, ey shoʻx, nechuk ahd mango,
                            <br>
                            <br>Kel, deding: “Vasl aro qilgʻum bori komingni ravo”
                            <br>
                            <br>Emdikim, gʻayr ila suhbat tuzubon shomu sabo,
                            <br>
                            <br>Hech bu rozni yodinggʻa tushurmay sen aslo,
                            <br>
                            <br>Ey parivash, qani ahdingga vafo aylaganing,
                            <br>
                            <br>Sharbati vasl ila dardimga davo aylaganing.
                            <br>
                            <br>Yoxud musaddasning sakkizinchi bandida ham xuddi shunday holatga duch kelamiz. Qofiyadosh
                            soʻzlarning notoʻgʻri tanlanishi bandning oʻqilishi va ravonligini qiyinlashtiradi. Shuningdek,
                            bandning toʻrtinchi misrasi esa mazmun jihatdan yuqoridagi misralarga mos kelmaydi:
                            <br>
                            <br>San gulistoni malohatda erursan gar gul,
                            <br>
                            <br>Lek man bogʻi fasohatdadururman bulbul,
                            <br>
                            <br>Sidqu ixlos bila boʻlgʻon sanga oʻlmish noyil,
                            <br>
                            <br>Gar manga aylading lutf oʻzing, bil sogʻ ul,
                            <br>
                            <br>Ey parivash, qani ahdinggʻa vafo aylaganing,
                            <br>
                            <br>Sharbati vasl ila dardimga davo aylaganing (B-420).
                            <br>
                            <br>Musaddasning qolgan bandlarida bunday holat uchramaydi. Musaddasning boshidan to oxirigacha
                            oshiqning ma`shuqaga dashnomlari va oʻz navbatida yorning husni malohatda tengsizligi
                            ta`riflanadi. Oxirgi bandda oshiq bu yoʻlda “badnom” boʻlsa-da, “kom” topganligiga ishora
                            qilinadi.
                            <br>
                            <br>“Haft shuaro” majmuasidan oʻrin olgan Murodiy qalamiga mansub musaddasda ham muhabbat
                            gʻoyalari tarannum etiladi. Musaddas olti banddan iborat boʻlib, unda oshiqning ma`shuqaga oʻz
                            dardini izhor etuvchi murojaatlarini tasvirlaydi. Oshiq mahbuba iltifotiga umid bogʻlaydi, uning
                            vasliga vosil boʻlmoq ilinjida hijrondan shikoyatlar qiladi. Raqib oldida visoldan benasib
                            boʻlishni istamaydi. Shu boisdan har band yakunida:
                            <br>
                            <br>Koʻzdin solib agʻyor aro muncha gʻam etma,
                            <br>
                            <br>Ey shohi jahonim, manga muncha sitam etma (B-18),–
                            <br>
                            <br>bayti keltiriladi va unda asosiy ma`noga urgʻu beriladi. Misralrda ayrim soʻzlar notoʻgʻri
                            tanlangan. Yuqoridagi baytning oʻzida mazmunga yetarlicha e`tibor berilmagan. Murodiy uchun
                            lirik qahramonning kechinmalarini ifodalash muhim. Shoir vazn va qofiya talablariga deyarli
                            e`tibor bermaydi, murakkab obrazli vositalardan foydalanmaydi. Aniq va ravon fikrlar orqali
                            oshiq holatini yoritishga harakat qiladi:
                            <br>
                            <br>Ey yori jafokash, desam man sanga bir soʻz,
                            <br>
                            <br>Vaslingni tamannosi erur kecha-kunduz,
                            <br>
                            <br>Xurshid kabi sayr etibon yakka, yolgʻiz,
                            <br>
                            <br>Bir kecha kelib kulbam aro bazmi tarab tuz,
                            <br>
                            <br>Koʻzdin solib agʻyor aro muncha gʻam etma,
                            <br>
                            <br>Ey shohi jahonim, manga muncha sitam etma (B-18).
                            <br>
                            <br>Mahbuba shoirning ta`biricha, “sarvi qadu gʻuncha dahan, orazi chun gul”, hatto “zulfingni
                            asiri boʻlubon bogʻ aro sunbul” darajasida goʻzaldir. Musaddasning oxirgi bandida Murodiy oʻz
                            taxallusini keltiradi:
                            <br>
                            <br>Sensan bu jahon ichra sevikli dildor,
                            <br>
                            <br>Hamsuhbat oʻlurgʻa aylama mandin or.
                            <br>
                            <br>Har qayda gul oʻlsa bordurur yonida xor,
                            <br>
                            <br>Javringni Murodiygʻa bas aylab, ey yor,
                            <br>
                            <br>Koʻzdin solib agʻyor aro muncha gʻam etma,
                            <br>
                            <br>Ey shohi jahonim, manga muncha sitam etma (B-19).
                            <br>
                            <br>Majmuada musammat shakllaridan musabba` janriga mansub toʻrtta she`r berilgan, ulardan
                            bittasi Sultoniy, ikkitasi Sa`diy, bittasi Bayoniy ijodiga mansubdir.
                            <br>
            /////
                            <br>Musabba` – mumtoz she`riyatda har bandi yetti misradan tashkil topadigan she`r shakli
                            boʻlib, dastlabki bandning hamma misralari oʻzaro qofiyadosh: a-a-a-a-a-a-a; qolgan bandlarda
                            esa besh misra oʻzaro, oxirgi ikki misra alohida qofiyalanadi: b-b-b-b-b-a-a. Har bir band
                            oxirida birinchi bandning oxirgi ikki misrasi takror qoʻllanadi.
                            <br>
                            <br>Sultoniy she`riyatiga oid musabba` 11 banddan iborat boʻlib, Feruz madhiga bagʻishlangan.
                            Shoir Feruzning marhamati bilan Xorazm jannatmakon diyorga aylanganini ta`kidlaydi. Musabba`ning
                            dastlabki bandida Ollohdan Feruzga omonlik tilab, oʻz istaklarini bayon etadi. Feruzning
                            adolatliligi bois “koʻnglimizda zarradek armonimiz” yoʻq, deb uqtiradi. Shoir hukmdordan
                            minnatdor. Zero, Feruz uni oʻz tarbiyasiga olib, homiylik qilgan. O`z navbatida, Sultoniy
                            boshqalarga murojaat etib, “Yor ila suhbat tutub, majlis tuzing misli jinon”, “Koʻrmagan boʻlsun
                            oningdek bazmni Noʻshiravon”, – deya Feruzni ulugʻlaydi. Bu oʻrinda shoir tashbeh va talmeh
                            san`atini qoʻllaydi. U davrning, saroydagi ijtimoiy muhitning shodligini ifodalash maqsadida har
                            bir band oxirida:
                            <br>
                            <br>Shoh bizning shohimiz, davron bizing davronimiz,
                            <br>
                            <br>Davr bizning davrimiz, davron bizing davronimiz,
                            <br>
                            <br>baytini takror qoʻllaydi. Shoir musabba`da davlatdagi, hayotdagi har bir ijobiy
                            oʻzgarishlarga Feruzni rahnamo qilib koʻrsatadi. Bu bevosita oʻsha davr bilan bogʻliq. Bunday
                            madhiyaga Sultoniyning shahzodaligi ham sabab boʻlgani aniq:
                            <br>
                            <br>Yo rab, etgil taxti davlatda omon xoqonimiz,
                            <br>
                            <br>Lutfi aqshomidindur toʻla paymonimiz,
                            <br>
                            <br>Ayshu ishrat qilgʻali omodadur somonimiz,
                            <br>
                            <br>Yoʻqturur gʻam, koʻnglimizda zarradek armonimiz,
                            <br>
                            <br>Davlati umrin tilarmiz tanda bordur jonimiz
                            <br>
                            <br>Shoh bizning shohimiz, davron bizing davronimiz,
                            <br>
                            <br>Davr bizning davrimiz, davron bizing davronimiz (B-462).
                            <br>
                            <br>Musabba`ning toʻqqizinchi bandida esa she`r xonning buyrugʻi asosida yozilganini
                            ta`kidlaydi. Bu esa she`rga Feruz madhi nima uchun asos boʻlganiga oydinlik kiritadi:
                            <br>
                            <br>Bu musabba`ni buyurgʻon hazrati xoqon erur,
                            <br>
                            <br>Demayin xoqon ani, jondan aziz jonon erur,
                            <br>
                            <br>Zulmu bid`at dofe`i xoni azimushshon erur,
                            <br>
                            <br>Xusravi Doronishon Muhammad sulton erur,
                            <br>
                            <br>Xohlasa she`ring sango in`omi bepoyon erur,
                            <br>
                            <br>Shoh bizning shohimiz, davron bizing davronimiz,
                            <br>
                            <br>Davr bizning davrimiz, davron bizing davronimiz (B-463).
                            <br>
                            <br>Hatto mahbubaning oshiqdan xabar olishi ham xoqon tufayli ekanini ta`kidlaydi. Bu esa
                            qaysidir ma`noda Feruzga e`tiqod yoki hukmdor shaxsiga hurmatning nishonasidir.
                            <br>
                            <br>Manbadagi yana bir musabba` Sa`diy qalamiga mansub boʻlib, oʻn banddan tarkib topgan. Sa`diy
                            bevosita Sultoniy fikrlarini davom qildiradi. Aniqrogʻi, oʻz dunyoqarashi nuqtai nazaridan uni
                            rivojlantiradi. Sa`diy Feruz madhiga bagʻishlangan fikrlar bilan xonni jahonda nom qozongan
                            hukmdorlar bilan bir qatorda qoʻyadi. Bu musabba`da ham har bir band oxirida Sultoniy qoʻllagan:
                            <br>
            ////
                            <br>Shoh bizning shohimiz, sulton bizing sultonimiz,
                            <br>
                            <br>Davr bizning davrimiz, davron bizing davronimiz, –
                            <br>
                            <br>bayti takrorlanadi. Shoir xonni hatto chahoryorlarga qiyos qilib, talmeh va oʻxshatish
                            san`atini qoʻllaydi, ya`ni oʻtmishdagi tarixiy shaxslarga nazar solish bilan Feruzning
                            fazilatlarini aniqroq tasvirlaydi. Jumladan, uni “rostgoʻylikda Abu Bakrga, adolatda Umarga,
                            hilmda (halimlikda) Usmoni Zunnuraynga, shijoatda Ali Murtazoga” mengzaydi.
                            <br>
                            <br>Umuman, shoir Feruzni ideal darajada mubolagʻali ta`riflagan. Sa`diyning xondan koʻrgan
                            marhamatlari evaziga bunday misralar yaratgani tabiiy. Zero, Sa`diy “yoshligʻidin jununtab`,
                            koʻsa, qoʻtir, egni qisiq hoʻkki boʻlib, otasi Sayyid Abdullo anga marhamat nazari bilan boqmay,
                            Feruzning tarbiyasi bilan kamolga yetishdi”[9]. Qolaversa, shoir saroydagi mavqeini
                            mustahkamlash maqsadida hukmdorni olqishlovchi misralar yaratgan boʻlishi mumkin. Musabba`ning
                            ikkinchi bandida Feruzning ismiga izoh beradi va yanada yuksak sifatlar bilan ulugʻlab “haqiqiy
                            podshoh” deya xulosa qiladi:
                            <br>
                            <br>Boshimizga soyai Subhondur ul zarrinkuloh,
                            <br>
                            <br>Qadrdek farruxliqou faqrgʻa pushti panoh.
                            <br>
                            <br>Nom oʻlgʻon onga ikki nomdur, qilgʻil nigoh,
                            <br>
                            <br>Nomi avval anga boʻlmish nomi mahbubi iloh,
                            <br>
                            <br>Soʻnggʻi ismin anglasang nomi haqiqiy podshoh,
                            <br>
                            <br>Shoh bizning shohimiz, sulton bizing sultonimiz,
                            <br>
                            <br>Davr b ning davrimiz, davron bizing davronimiz (B-461).
                            <br>
                            <br>Toʻgʻri, adolatli va ma`rifatli hukmdorlarni ulugʻlash mumtoz adabiyotimizdagi an`analardan
                            biridir. Unda muallifning shaxsiy mayli muhim omil boʻlsa ham, real haqiqat unsurlari
                            mavjudligidan koʻz yumib boʻlmaydi. Shu jihatdan yuqoridagi boʻrttirishda Feruzning odil shoh va
                            ma`naviyat homiysi sifatidagi amaliy faoliyati nazarda tutilgan.
                            <br>
                            <br>“Haft shuaro” majmuasidagi musamman janriga mansub bitta she`r Sultoniy qalamiga mansubdir.
                            <br>
                            <br>Mumtoz adabiyotda har bandi sakkiz misradan iborat she`r shakli –musamman bu oʻrinda Komil
                            Xorazmiyning “Soʻyla manga, ey sanam, kimni sevar yorisan?” misrasi bilan mashhur gʻazaliga
                            tazmin tarzida yozilgan. U ayrim jihatlari bilan yuqorida qayd etilgan Oqilning shu gʻazalga
                            bogʻlagan musaddasiga hamohang boʻlsa ham, mohiyatan yangi, oʻziga xos asardir. Shoir dastlabki
                            bandning yetti misrasida “qaysi” soʻzini takror qoʻllash bilan takrir san`atini vujudga
                            keltiradi. Aynan shu bandning har bir misrasida tajohuli orif san`atiga murojaat qiladi. O`zini
                            ataylab bilib bilmaslikka oladi va bilgan narsalarini savol tarzida ifodalaydi:
                            <br>
                            <br>Qaysi shabistonni san sham`i puranvorisan?
                            <br>
                            <br>Qaysi jahon bogʻining lolai gulnorisan?
                            <br>
                            <br>Qaysi Adan bahrining gavhari shahvorisan?
                            <br>
                            <br>Qaysi Xoʻtan baldasin shohidi ayyorisan?
                            <br>
                            <br>Qaysi gulistonni san sarvi sipahdorisan?
                            <br>
                            <br>Qaysi chamanzorning bir guli bexorisan?
                            <br>
                            <br>Qaysi dilafgorning la`li shakarborisan?
                            <br>
                            <br>Bizga bayon qil, nigor, kimni sevar yorisan? (B-454)
                            <br>
                            <br>Musammanda xalqona ohang, oshiqning samimiy va sodda tuygʻulari mujassamligi bois u xalq
                            orasida qoʻshiq qilib aytiladi. She`rda fikr aniq va loʻnda ifodalangan boʻlib, uslubi ravon,
                            ifoda quvnoq va yengildir, har bir misrasida savolga uygʻun holatda yorning bir xususiyati ochib
                            boriladi.
                            <br>
                            <br>Sultoniy musammanidagi mahbuba shu qadar goʻzalki, u yuzidagi niqobini olib boqqa kirsa,
                            gʻuncha uyalganidan hasrat oʻtida yonib, kabob boʻladi. Shoir har bir bandni majoziy ma`noda
                            mubolagʻa san`ati asosida yaratadiki, bu misralarning badiiyati va oʻqimishliligini oshiradi.
                            Xalqona ohang, xalqchillik, sodda va ravon tashbehlar musammanning mashhur boʻlishiga olib
                            keladi. Mumtoz adabiyotdagi “gul, bulbul, durji dahan, bagʻri figor” yangligʻ tayyor
                            tashbehlardan oʻrinli foydalanadi. Sultoniy Komil Xorazmiy fikrlarini oʻz kechinmalari asosida
                            rivojlantiradi. Har bir bandda mahbubaning husnu latofatiga alohida urgʻu bergan holda oshiqning
                            iztirobini, ohu figʻonini boʻrttiradi:
                            <br>
            ////
                            <br>Hech kishi yoʻq husnunga oshiqi zor oʻlmagʻan,
                            <br>
                            <br>Xanjari nozing ila bagʻri figor oʻlmagʻan,
                            <br>
                            <br>Ikki qoshing shavqida zori nizor oʻlmagʻan,
                            <br>
                            <br>Dardu balo xayligʻa hamdamu yor oʻlmagʻan,
                            <br>
                            <br>Koʻzini lochinigʻa joni shikor oʻlmagʻan,
                            <br>
                            <br>Jomi visolinggʻa ham asru xumor oʻlmagʻan,
                            <br>
                            <br>Ishqiga olam aro bormu duchor oʻlmagʻan,
                            <br>
                            <br>Bizga bayon qil, nigor, kimni sevar yorisan?
                            <br>
                            <br>Darhaqiqat, mahbuba, Sultoniy ta`rificha, rahmdil. Uning mehri oldida quyosh sharmanda
                            boʻlishi aniq. Yoki shamshod goʻzallikda uning qaddiga banda boʻladi, hatto gʻuncha lablariga
                            hayron qoladi. Shoir bu oʻxshatishlar bilan qanoatlanmaydi, ya`ni “Borcha jahon xoʻblarin sensan
                            zebandasi” – deya yorni koʻklarga koʻtaradi. Ma`lum ma`noda ruju` san`atiga murojaat qiladi.
                            Shoirning lirik qahramoni oshiqlik bobida yagona. U ishqdan shu qadar mast boʻlganki, hatto
                            ma`shuqa ta`rifiga loyiq soʻz topishga ojizdir. Mazkur misralar oʻz-oʻzidan paydo boʻlgan emas,
                            uni ishq, oshiqlik yaratgan:
                            <br>
                            <br>Burqa` olib oy yuzing aylasang, ey gul, ayon,
                            <br>
                            <br>Volau shaydo boʻlur husninga ahli jahon...
                            <br>
                            <br>Oy-kun ermas saning husnungi monandasi.
                            <br>
                            <br>“Haft shuaro” majmuasidagi janrlardan yana biri murabbadir. Garchi unda murabba` kam
                            miqdorda boʻlsa ham, janrlar turfaligini va shoirlar salohiyatini koʻrsatishi jihatdan ma`lum
                            ahamiyat kasb etadi. Darhaqiqat, “Xorazm adabiy muhitida bu she`r turi (murabba`–I.X) birinchi
                            marta Ogahiy ijodida uchraydi. Murabba` janri X1X asr ikkinchi yarmi oʻzbek adabiyotida esa ikki
                            yoʻl bilan – xalq ijodining ta`siri va XVI asrdan Muhammad Fuzuliy ijodining ta`siri orqali
                            rivojlangan”[10]. Bu an`anani Feruz davri adabiy muhiti shoirlari davom ettirganlar. Manbada
                            musammatning murabba` shakliga mansub beshta she`r berilgan boʻlib, uchtasi Sultoniy, bittasi
                            Sodiq va bittasi Bayoniy qalamiga mansubdir.
                            <br>
                            <br>Ma`lumki, murabba`– har bir bandi toʻrt misradan iborat she`r shaklidir. U a-a-a-a, b-b-b-a,
                            v-v-v-a tarzida qofiyalanadi. Dastlabki bandning oxirgi misrasi har bir band oxirida
                            takrorlanadi. Sultoniyning “Husn shohining mudom koʻnglumda ishqi dogʻidur” misrasi bilan
                            boshlanuvchi murabbasi e`tiborga molikdir. Murabbada ishq-muhabbat mavzusi ilgari surilgan. Unda
                            shoirning lirik qahramoni oshiqdir. U tunu kun hijronda oʻrtanadi. Biroq bundan afsuslanmaydi,
                            chunki uning mahbubasi goʻzallikda tengi yoʻq:
                            <br>
                            <br>Husn shohining mudom koʻnglumda ishqi dogʻidur,
                            <br>
                            <br>Yufqaroq gul bargidan, yoqutdek dudogʻidur,
                            <br>
                            <br>Oy yuzidin majlisim bu kecha jannat bogʻidur,
                            <br>
                            <br>Soqiyo, gulgun qadah tutki, ishrat chogʻidur (B-145).
                            <br>
                            <br>Garchi mahbuba goʻzal boʻlsa-da, uning tashrifidan “gʻam lashkari” oshiq qalbiga yurish
                            qiladi. Biroq yorning oy yuzi oshiqning tiyra shomini munavvar qilarkan, buni shoir tazod
                            san`ati orqali tasvirlaydi. Garchi oshiq gʻamu iztiroblarga giriftor boʻlsa ham, mahbuba tufayli
                            oshiqning maskani jannatdek, yor esa jannatdagi huru parilar kabidir. Bunday ta`rifu tavsiflarni
                            shoir tashbeh va istiora orqali tasvirlaydi. Keyingi baytlarda esa talmeh san`atini qoʻllab,
                            tarixdagi afsonaviy oshiqlar nomini tilga oladi:
                            <br>
                            <br>Mutribedur bu kecha dilbari Uzromisol,
                            <br>
                            <br>Xushnavoligʻ bobida goʻyo erur Isomaqol
                            <br>
                            <br>Yoxud boshqa misrasida:
                            <br>
                            <br>Vaslini bu kun manga qildi muyassar Zuljalol,–
                            <br>
                            <br>singari ixcham va teran fikrlar shoir salohiyatini namoyon qiladi.
                            <br>
                            <br>Murabba` yakunida oshiq mahbubadan xursand kayfiyatda tasvirlanadi. Mahbuba gulga qiyos
                            qilinadi. U oshiqning maskaniga tashrif buyurganda, bu gal agʻyorlarning yoʻqligidan lirik
                            qahramon shoddir. Bu holat murabba` oxirigacha saqlanadi. Hatto, mahbuba vafodor yorga aylanadi,
                            u hijron oʻqidan yaralangan oshiq qalbini visol bilan davolaydi:
                            <br>
            ////
                            <br>Yuz ado birla bu kun shoʻxi yaktoyi jahon,
                            <br>
                            <br>Manzilim ichra kelib, guldek boʻlub tutdi makon,
                            <br>
                            <br>Bazmgohim ichra yoʻq agʻyordin nomu nishon,
                            <br>
                            <br>Soqiyo, gulgun qadah tutki, ishrat chogʻidur.
                            <br>
                            <br>Aylabon Sultoniygʻa behad karam ul mahliqo,
                            <br>
                            <br>Hajr oʻqining zaxmigʻa vasli bila qildi davo.
                            <br>
                            <br>Bazm elini shod qilgʻil, Mutribo, chertib navo,
                            <br>
                            <br>Soqiyo, gulgun qadah tutki, ishrat chogʻidur (B-143).
                            <br>
                            <br>Sultoniy murabba`sidagi mahbubaning fe`l-atvori murakkab boʻlib, oshiqni zulm oʻtkazish
                            bilan qanchalik ranjitsa, visol nash`asi bilan shunchalik davolaydi ham.
                            <br>
                            <br>Sodiqning oʻn bir toʻrtlikdan iborat murabbasi ham ishqiy mavzuda bitilgan. Ammo u Sultoniy
                            murabbasidan qator jihatlari bilan farqlanadi. Birinchidan, Sultoniy talqinida soqiyga murojaat
                            va ma`shuqa tashrifi orqali oshiq qalbidagi botiniy evrilishlar aks etsa, Sodiq murabbasida
                            “labi – kavsar, xatti – rayhon, xoli – mushki” ma`shuqaning ta`rifi asnosida oshiqlik sinoatlari
                            tarannum etiladi. Ikkinchidan, she`rlarning ilk toʻrtliklari a-a-a-a shaklida qofiyalangan
                            boʻlsa ham, keyingi bandlar oxiri birinchisida “Soqiyo, gulgun qadah tutki, ishrat chogʻidur”
                            misrasi bilan, ikkinchi murabbada esa “Habibim, gʻamgusorim, mushfiqim, yoru vafodorim” misrasi
                            bilan yakunlanadi. Sultoniy she`ri 14, Sodiq she`ri esa 16 hijolidir.
                            <br>
                            <br>Sodiq murabbasidagi qahramon – ma`shuqani behad sevgan, lekin visol yoʻlidagi sinovlarga
                            duchor oshiq. U ma`shuqani “jahon bogʻida sumanbar gul”, oʻzini esa shu “gul koʻyida
                            kecha-kunduz afgʻon chekan bulbul” va “ishq yoʻlidagi qul” deb his etar ekan, qalb tugʻyonini,
                            ruhiyatini shunday ifodalaydi:
                            <br>
                            <br>Hamul kundinki, men ishqing gʻamiga oshno boʻldim,
                            <br>
                            <br>Firoqing mehnatidin aqlu hushimdin judo boʻldim,
                            <br>
                            <br>Yonib hajr oʻtigʻa boshdan oyoq butkul ado boʻldim,
                            <br>
                            <br>Habibim, gʻamgusorim, mushfiqim, yoru vafodorim (B-418).
                            <br>
                            <br>Lekin firoq zahmati va hajr oʻti qanchalik iztirobli boʻlmasin, mahzun oshiq sobit va
                            sabrlidir. Garchi u yorning “quyoshoso yuzini koʻrmasa qarorini (oʻzligini), hijron tufayli aqlu
                            ixtiyorini yoʻqotsa” ham, ishq maqsadi yoʻlidan qaytmaydi va ma`shuqa marhamatiga umid bilan
                            yashaydi, undan qanchalik jafo koʻrsa ham, ma`shuqani butun “jahon ahli uning jamoliga oshiq
                            boʻlishga loyiq” deb biladi va unga xoliqdan (yaratuvchidan) karam soʻraydi. Shunga qaramay,
                            lirik qahramon ma`shuqaga oʻzidek chinakam oshiq topilmasligini ham alohida ta`kidlaydi:
                            <br>
                            <br>Vale topilmagʻay mendek senga bir oshiqi Sodiq,
                            <br>
                            <br>Habibim, gʻamgusorim, mushfiqim, yoru vafodorim.
                            <br>
                            <br>Bu oʻrinda “Sodiq” soʻzi orqali iyhom san`atiga murojaat qiladi. Zohiriy ma`nosi taxallus,
                            botiniy ma`nosi esa yorga sadoqatdir. Ikkinchi misra ayrim she`riy bandlarga xos refren
                            (takrorlanuvchi)dir. U she`rdagi asosiy fikrni, bosh gʻoyani, ma`noni ta`kidlashga,
                            ohangdorlikda muayyan ritmni kuchaytirishga xizmat qiladi.
                            <br>
                            <br>
                            <br>
                            <br>[1] Abdugʻafurov A. Alisher Navoiy musammatlari // Oʻzbek tili va adabiyoti.T., 1978. -№1-
                            B.27.
                            <br>
                            <br>[2] Tabibiy A. Muxammasoti majmua ush-shuaroi Feruzshohiy qoʻlyozma. OʻzRFAShI inv. 1134.
                            <br>
                            <br>[3] Ogahiy. Ta`vizul-oshiqin. Devon.OʻZRFAShI fondi. inv. 938 -B.96
                            <br>
                            <br>[4] Jumayev N. Ustoz ijodi – mahorat maktabi. //Adabiy meros. T.,1985. -№3 -B. 8.
                            <br>
                            <br>[5] Abdugʻafurov A. Koʻrastilgan asar. -B.32
                            <br>
                            <br>[6] Alisher Navoiy. Asarlar. 14-tom. T., 1967- B.59.
                            <br>
                            <br>[7] Jumaxoʻja N. Munis gʻazaliyoti. T.: Adabiyot va san`at, 1991.–B. 149-150.
                            <br>
                            <br>[8] Boltayeva I. Takroriylikda betakrorlik // Oʻzbek tili va adabiyoti.T., 2005.- №1.- B.82.
                            <br>
                            <br>[9] Laffasiy. Tazkirai shuaro. Urganch: Xorazm, 1992- B.57.
                            <br>
                            <br>[10]Qobulov N., Moʻminova V., Haqqulov I. Avaz va uning adabiy muhiti – T.: Fan, 1987.
                            -B.146.
                            <br>
                            <br>
                            <br>

                        @endif

                        @if( $lang == "en" )
                                As the literary critic A. Abdugafurov noted, “One
                                - independent musammats, ie the artist writes his poems in the mentioned forms. The second
                                the method is that the creator uses the same content in another poet's or ghazal verse that he has already written,
                                muhammas, musaddas, musammans by adding new verses in spirit, weight and direction
                                forms [1] ”. In this respect it is in the second way in relation to the independent musams in the complex
                                There are many poems written on the basis of ghazals of other poets.
                                In the first method, musabba, musammans, in the second method, muhammas and five murabbans
                                we meet. In musammats, as in lyric poetry, especially in ghazals, human experiences,
                                the joys and sorrows of love, the motives of joy and sorrow, the attitude to reality
                                on the contrary, it is often the ignorance of the faithful and life-loving lover, the lyrical protagonist, and
                                tones of dissatisfaction with injustice and hope for goodness are sung. Musammatlar
                                The main part of the composition is muhammas and is based on tahmis.
                                It is well known that muhammas are widely used in our classical literature to express thoughts and feelings
                                It has been developed over the centuries as a productive genre, such as ghazal and rubai
                                from In particular, Khorezm has a special place in the literary environment, and is one of the only muhammas
                                formed bayoz and devons. The tradition of muhammas, which began in the XIV century, dates back to the XX century
                                In the beginning, it took a strong place in the works of Khorezm poets.
                                <br>
                                <br> About Muhammas Tabibi, a contemporary of the prince poets, wrote in his book “Muhammasoti complex
                                ush-shuaroi Feruzshahi ”.
                                <br>
                                <br> Muhammas chu is a better ash'ar,
                                <br>
                                <br> Its history is unique to all.
                                <br>
                                <br> When added, two poetic words,
                                <br>
                                <br> Malohatlig` is the point of death [2].
                                <br>
                                <br> Ogahi describes the assumptions in his preface as "sugarcane" and "bazmoro".
                                <br>
                                <br> It is known that the main condition for the creation of a guess is that the new poem does not correspond to the original content.
                                deeper. In this regard, it is very responsible to guess another gazelle.
                                To do this, the poet acquires a certain poetic skill, continuing the ideological content of this verse
                                weight, rhyme, and rhyme. So, it's like a guess
                                Every artist sees the creation of muhammas as a test.
                                <br>
                                As the literary critic N.Jumaev noted:
                                was one of the main factors in gaining mastery in ghazalism, as nazira and
                                Writing muhammas is a unique exercise in the preparation of an original ghazal
                                past [4] ”. So, the speculations are based on the creative collaboration of the two creators. That's it
                                therefore, there must be a logical connection between his verses. Such welding
                                loaded on the third line.
                                <br>
                                <br> Muhammas from the Haft Shuaro complex are mainly Navoi, Munis, Ogahi, Feruz, Avaz.
                                and Fuzuli's gazelles.
                                <br>
                                <br> With the verse of Sultan Navoi "Sahar khovar shahi charkh uzrakim hayli hasham chekti"
                                muhammas to the beginning ghazal.
                                <br>
                                <br> The "fano dashti" in Navoi's poems is a place where human qualities are deified.
                                rahrav (traveling) to realize eternity, to "may unity",
                                <br>
                                <br> In order to gain Allah's mercy,
                                The Sultani continues this idea, ending the following five:
                                <br>
                                <br> Hazin Sultani'ga altofi haq will always grow old,
                                <br>
                                <br> On the Day of Judgment, his intercessor will die.
                                <br>
                                <br> It is wonderful to find a way to the guardianship of this witness,
                                <br>
                                <br> Navoi, may he succeed in this goal,
                                <br>
                                <br> This steppe has been in existence for many years (B-144).
                                <br>
                                <br> Sultani does not just follow Navoi, he lists certain aspects of the master's thoughts
                                seeks to enrich it with meaningful verses, an in-depth analysis of the essence of Navoi's poems
                                does. In particular, he believes that only through the intercession of Allah can one be a guardian of the Creator
                                The possibility of To the radiant ghazal of the sultan "circling" Navoi
                                the muhammad has a romantic-philosophical content. This is the teacher's creative stimulus to the successor poet
                                As a result, the social essence - the motive of devotion - deepens:
                                <br>
                                <br> Sayri gulni, dostlar, sarvi hiromonsiz netay,
                                <br>
                                <br> In the memory of Rose's face, my Afghan will reach the sky,
                                <br>
                                <br> Man nechuk huru parinin vaslidin dam uray,
                                <br>
                                <br> I wish others would be happy,
                                <br>
                                <br> Everyone wants your vaslin tamanno (B-139).
                                <br>
                                <br>
                                <br> The first three verses of this verse are in harmony with the ideas of Navoi's ghazal.
                                creates a melody and serves as a starting point of the byte.
                                Although the Sultan did not create as deep and original word games as in Navoi's bytes
                                however, he was able to follow the teacher's ideas. It is repeated in every byte of Navoi's ghazal
                                We see beautiful examples of art. Also, the poet's "eyes" among the people
                                increases popularism through the phrase. Including:
                                <br>
                                <br> Let others see my beauty,
                                <br>
                                <br> If only every other eye could see your beauty.
                                <br>
                                <br> The poet judges lovers and rivals in every byte. Sultani is the pain of the lover
                                describes their sufferings, pains, and directly the content and essence of the Navoi bytes
                                tries to save. It prepares lovers and rivals for judgment in Navoi's verses. That is
                                sheds light on the reason for the judgment. This can be found in every paragraph:
                                <br>
                                <br> In the light of the flower's face,
                                <br>
                                <br> Holima laughs and admits that all rivals,
                                <br>
                                <br> I'm crazy about my job
                                <br>
                                <br> Kelturung daf`i jununimga parixon, no doctor,
                                <br>
                                <br> Who is he who wonders everyone (B-140).
                                <br>
                                <br> Indeed, in the poems of the Sultan, the lover reached the level of Madness in love, Navoi
                                In the verse, he seeks a doctor for jununga. According to the master poet, the doctor of this disease is a martyr
                                is a lover who can do.
                                <br>
                                <br> It seems that the main part of muhammas is connected with Navoi's ghazals. This is the teacher
                                to follow, to seek grace and encouragement from. However, Navoi's only
                                Not only his poems, but also his poems were a source of inspiration for the prince's poets. Navoi
                                muhammas's independent (natural) and tahmis (based on his own ghazals and other ghazals)
                                There is no such thing as a ghazal in the complex. But ready
                                Gazelle-based muhammas retain their distinctive features. They include, among other things, “the subject
                                the image, behavior, psyche, and experiences of the characters in the gazelle
                                opens more fully on new edges. Concretization in detail, with logical arguments
                                the rationale is strengthened ”[5].
                                <br>
                                <br> There is a presumption in the complex that Sadiq Navoi connected with the radifi ghazal "I wish". That's it
                                The choice of the ghazal is not accidental.
                                It is still popular today and has been performed with great success
                                associated with Navoi wrote about this in his work "Khamsat ul-mutahayyirin"
                                and the stain was often read in the conversations of His Majesty the King. ”[6]
                                <br>
                                <br> I wish you hadn't opened the whole world,
                                <br>
                                <br> I wish the world would be noisy, -
                                <br>
                                The content and stylistic fluency of this ghazal encouraged him to write tahmis.
                                Tahmis describes the hopeless state of the lover. When a lover sees a lover, from his oppression,
                                suffers from "disgrace" to the world. After all, it is natural that it is difficult for a friend. Approximately
                                The task of exacerbating the pain of infidelity is reflected in the four-line “what is the use” radif
                                The final meaning is expressed in the last two verses of Navoi:
                                <br>
                                <br> Javru is a tyrant, so what is the use of oppression?
                                <br>
                                <br> Aylamas Sodiq lutf izhor, bas ne useful,
                                <br>
                                <br> It's hard to find a way, so what's the use,
                                <br>
                                <br> O Navoi, you are unfaithful, so what is the use of
                                <br>
                                <br> Ganjkim desang agar boxud digar yo koshki (B-242).
                                <br>
                                <br> Sultani begins with Navoi's poem "The power of the heart is the sweet epic"
                                muhammas to a six-byte ghazal. In it the hard ways of love, the pain of love
                                suffering is described. “A lover who follows in the footsteps of the people of love is dangerous in the valley of love
                                When he enters the path, he will be supported by the truth. ”
                                types:
                                <br>
                                <br> Navoi entered the valley of love,
                                <br>
                                <br> Dangerous is the way of the bonbon (B-136).
                                <br>
                                <br> With the talent, skill and hard work of a true muhammas poet, which reflects these qualities
                                is created. Mastery, on the other hand, is formed by enjoying the creativity of teachers.
                                <br>
                                <br>
                                The muhammas that bind him are an expression of such enjoyment, and I sing the ideas of love.
                                reaches In order to enhance Muhammas's art, the poet wrote:
                                metaphor and eloquent verses such as "Tilmak"
                                ends. The lyrical protagonist's lover is unique in the field of beauty and falls in love with her.
                                "He wants madness."
                                <br>
                                <br> “In search of poetic expressions related to natural and social phenomena, Ogahiyga Munis
                                His skill was a source of inspiration and example. One of the favorite poetic images of Guncha Munis, -
                                Literary scholar N.Jumahoja studies. In Munis's lyrics the image of a bud is poetic
                                there are original examples of the study. For example, animation in one of the poet’s works
                                He argues with the lips of his lover. It is described as self-limiting
                                Unknowingly, he commits obscenity and is defeated in battle:
                                <br>
                                <br> He opened the lawsuit with his lips to his mouth,
                                <br>
                                <br> He left adabdindur with blood flowing from his mouth.
                                <br>
                                <br> By creating such a poetic landscape, the poet's lover's lips are more beautiful, alive,
                                demonstrates that it is delicious. In the muhammas written by Agahi Munis for this ghazal
                                intensifies the landscape associated with the image of the bud for its unpopularity
                                describes in detail the effect of As a result, the effectiveness of poetic thought
                                increases:
                                <br>
                                <br> Ta'dib reached him before dawn,
                                <br>
                                <br> Who hit Sabo Kojin until he was satisfied,
                                <br>
                                <br> If you ask him the reason for his arrival, he will be humiliated.
                                <br>
                                <br> He opened the lawsuit with his lips to his mouth,
                                <br>
                                <br> He left adabdindur with white blood in his mouth ”[7].
                                <br>
                                <br> In the tradition of artistic interpretation of the image of Guncha, Sultani's positive experience is as follows
                                we can observe:
                                <br>
                                <br> Garden buds do not last for two days,
                                <br>
                                <br> The equality loaf hits your face,
                                <br>
                                <br> Blind, gunchai sarkash saw so much pain,
                                <br>
                                <br> He opened the lawsuit with his lips and mouth,
                                <br>
                                <br> This is polite, white blood from the mouth (B-143).
                                <br>
                                <br> In some places, Sultan Munis uses synonyms in his poems. This is Sultani
                                Munis's work also played an important role in the development of his talent. Zero,
                                The fact that Munis's ghazals were chosen for muhammas is a direct proof of this:
                                <br>
                                <br> I don't want to cause the Sultan any trouble,
                                <br>
                                <br> I don't want to eat anything without you,
                                <br>
                                <br> No matter how much you hurt, I won't fight,
                                <br>
                                <br> I'm not surprised, thank you,
                                <br>
                                <br> Munis tani uryoni holding a pink bowl.
                                <br>
                                <br> The complex also includes muhammas related to the Agahi ghazals. It is known from sources that
                                The Agahi prince was a teacher of poets. Therefore, they were influenced by Agahi's works
                                or it is natural for him to follow and create. In particular, Sadiq Agahi wrote about Feruz
                                Muhammas linked the radifi ghazal "let it not be":
                                <br>
                                <br> O shahi Doronishon, v-ey Khusravi olimaqom,
                                <br>
                                <br> May Allah be pleased with you,
                                <br>
                                <br> To mani lutfing bila Sadiq edi shodkom,
                                <br>
                                <br> Ogahiy cried and prayed for months,
                                <br>
                                <br> Do not let the eyes of the time be blind at the door of Sidq (B-246).
                                <br>
                                In this muhammad, Sadiq continues Ogahi's good wishes based on his feelings.
                                In his ghazal, Agahi emphasizes that Feruz was the cause of the prosperous life of the people at that time
                                emphasizes. Sadiq compared Feruz to the famous rulers Darius and Khisrav
                                uses his art to show that he is fair.
                                <br>
                                <br> Most of the muhammads in the Haft Shuaro complex are associated with Feruz's ghazals
                                are assumptions. Such muhammas are found in the works of every poet in the complex. From literary experience
                                It is known that in tahmis there is a new meaning in the formal repetition of artistic creation.
                                Repetition, for example, is primarily in its formal features (five, the last two verses
                                belonging to the predecessor poet, the presence of traditional images, nicknames), uniqueness
                                by repeating in a new interpretation, situation and meaning of these elements of the tahmis
                                appears in the discovery of new facets. After all, “genre opportunities for creative reality
                                In the process, he has an inner perception of the content of reality, its essence
                                can be repositioned in a way that meets the requirements of the genre ”[8].
                                <br>
                                <br> In Feruz's muhammad, which is connected to the radif ghazal "Qayadur", Feruz's character is exemplary.
                                describes a number of unique qualities:
                                <br>
                                <br> Aylading Sultani looks at every fire like Feruz,
                                <br>
                                <br> Bahri dahr togidin aylab guzar Feruzdek,
                                <br>
                                <br> I wish I didn't stop, Feruzdek,
                                <br>
                                <br> I did not find ul gul visolidin asar Feruzdek,
                                <br>
                                <br> O Saba, give me the message, where is my rest (B-147).
                                <br>
                                <br> It seems that in each verse there is a certain quality of Feruz (depth, creativity, alertness,
                                acquaintance with beauty) and at the end of four verses the meaning of the word "Feruzdek" is repeated.
                                enhances and draws attention to the image.
                                <br>


                        @endif

                        @if( $lang == "ru" )
                                Как отмечал литературовед А. Абдугафуров, «Один
                                - самостоятельные мусамматы, т.е. художник пишет свои стихи в указанных формах. Секунда
                                метод заключается в том, что создатель использует то же содержание в стихотворении другого поэта или газели, которое он уже написал,
                                muhammas, musaddas, musammans, добавляя новые стихи по духу, весу и направлению
                                формы [1]». В этом отношении он находится во втором плане по отношению к самостоятельным мусам в комплексе.
                                Есть много стихотворений, написанных на основе газелей других поэтов.
                                В первом методе мусабба, мусамманы, во втором методе мухаммас и пять мураббанов
                                мы встретились. В мусамматах, как и в лирике, особенно в газелях, человеческие переживания,
                                радости и печали любви, мотивы радости и печали, отношение к действительности
                                напротив, часто это невежество верного и жизнелюбивого любовника, лирического героя, и
                                поются тона недовольства несправедливостью и надежды на добро. Мусамматлар
                                Основная часть композиции составляет мухаммас и основана на тахмисе.
                                Хорошо известно, что мухаммы широко используются в нашей классической литературе для выражения мыслей и чувств.
                                Он развивался на протяжении веков как продуктивный жанр, такой как газель и рубаи.
                                из В частности, Хорезм занимает особое место в литературной среде и является одним из немногих мухаммасов.
                                образовались байозы и девоны. Традиция мухаммаса, зародившаяся в XIV веке, восходит к XX веку.
                                Вначале она занимала прочное место в творчестве хорезмских поэтов.
                                <br>
                                <br> О Мухаммасе Табиби, современнике князя-поэте, писал в своей книге «Комплекс Мухаммасоти
                                уш-шуарой Ферузшахи».
                                <br>
                                <br> Мухаммас чу лучший ашар,
                                <br>
                                <br> Его история уникальна для всех.
                                <br>
                                <br> Когда добавлены слова двух поэтов,
                                <br>
                                <br> Малохатлыг – точка смерти [2].
                                <br>
                                <br> Огахи описывает предположения в своем предисловии как «сахарный тростник» и «базморо».
                                <br>
                                <br> Известно, что главным условием создания догадки является несоответствие нового стихотворения первоначальному содержанию.
                                Глубже. В связи с этим очень ответственно угадать очередную газель.
                                Для этого поэт приобретает определенный поэтический навык, продолжая идейное содержание этого стиха.
                                вес, рифма и рифма. Так что это как догадка
                                Каждый художник смотрит на создание мухаммаса как на испытание.
                                <br>
                                Как отмечал литературовед Н. Джумаев:
                                был одним из главных факторов в овладении газельством, как назира и
                                Написание мухаммаса — уникальное упражнение в подготовке оригинальной газели.
                                прошлое [4]». Итак, предположения основаны на творческом сотрудничестве двух создателей. Вот и все
                                следовательно, между его стихами должна быть логическая связь. Такая сварка
                                загружается на третьей строке.
                                <br>
                                <br> Мухаммады в комплексе Хафт Шуаро - это в основном Навои, Мунис, Огахи, Феруз, Аваз.
                                и газели Физули.
                                <br>
                                <br> Со стихом Султана Навои «Сахар ховар шахи чарх узраким хайли хашам чекти»
                                Мухаммас к началу газели.
                                <br>
                                <br> «Фано дашти» в поэмах Навои – это место, где обожествляются человеческие качества.
                                рахрав (путешествие), чтобы осознать вечность, «может быть единство»,
                                <br>
                                <br> Чтобы снискать милость Аллаха,
                                Султани заключает следующие пять:
                                <br>
                                <br> Хазин Султани'га альтофи хак всегда будет стареть,
                                <br>
                                <br> В Судный день его заступник умрет.
                                <br>
                                <br> Замечательно найти путь к опеке этого свидетеля,
                                <br>
                                <br> Навои, да преуспеет он в этой цели,
                                <br>
                                <br> Эта степь существует уже много лет (B-144).
                                <br>
                                <br> Султани не просто следует за Навои, он перечисляет отдельные аспекты мысли мастера
                                стремится обогатить его содержательными стихами, глубоким анализом сущности стихов Навои
                                делает. В частности, он считает, что только через заступничество Аллаха можно быть хранителем Творца.
                                Возможность На лучезарную газель султана «кружит» Навои
                                Мухаммад имеет романтико-философское содержание. Это творческий стимул учителя к поэту-преемнику.
                                В результате социальная сущность - мотив преданности - углубляется:
                                <br>
                                <br> Сайри гулни, достлар, сарви хиромонсиз нетай,
                                <br>
                                <br> В память о лице Роуз мой афган дотянется до неба,
                                <br>
                                <br> Ман нечук хуру паринин васлидин дам урай,
                                <br>
                                <br> Я хочу, чтобы другие желали мне удачи,
                                <br>
                                <br> Все хотят ваш vaslin tamanno (B-139).
                                <br>
                                <br>
                                <br> Первые три строфы этого стиха созвучны идеям газели Навои.
                                создает мелодию и служит отправной точкой байта.
                                Хотя султан не создавал столь глубоких и оригинальных игр слов, как в байтах Навои
                                однако он смог следовать идеям учителя. Это повторяется в каждом байте газели Навои.
                                Мы видим прекрасные образцы искусства. Также «глаза» поэта среди людей
                                повышает популярность фразы. Включая:
                                <br>
                                <br> Пусть другие видят мою красоту,
                                <br>
                                <br> Если бы только каждый второй глаз мог видеть твою красоту.
                                <br>
                                <br> Поэт судит о любовниках и соперниках по каждому байту. Султани - боль любовника
                                описывает свои страдания, боли и непосредственно содержание и суть навоийских байтов
                                пытается спасти. В стихах Навои готовит к суду влюбленных и соперников. То есть
                                проливает свет на причину приговора. Это можно найти в каждом абзаце:
                                <br>
                                <br> В свете лика цветка,
                                <br>
                                <br> Холима смеется и признается, что все соперники,
                                <br>
                                <br> Я без ума от своей работы
                                <br>
                                <br> Kelturung daf`i jununimga parixon, не врач,
                                <br>
                                <br> Кто тот, кто всех удивляет (B-140).
                                <br>
                                Ведь в стихах Султана влюбленный достиг уровня Безумия в любви, Навои
                                В стихе он ищет врача для Джунунги. По словам мастера-поэта, врач от этой болезни — мученик.
                                это любовник, который может сделать.
                                <br>
                                <br> Представляется, что основная часть мухаммасов связана с газелями Навои. это учитель
                                следовать, искать благодати и ободрения. Однако только Навои
                                Не только его стихи, но и его поэмы были источником вдохновения для княжеских поэтов. Навои
                                независимый (естественный) и тахмис мухаммаса (написанный его собственными газелями и другими газелями)
                                Газели в комплексе нет. Но готов
                                Мухаммы на основе газелей сохраняют свои отличительные черты. К ним относятся, среди прочего, «предмет
                                образ, поведение, психика и переживания персонажей газели
                                раскрывается полнее на новых краях. Конкретизация в деталях, с логическими аргументами
                                обоснование усилено» [5].
                                <br>
                                <br> В комплексе есть предположение, что Садык Навои связан с газелью Радифи «Желаю». Вот и все
                                Выбор газели не случаен.
                                Он до сих пор популярен и исполняется с большим успехом.
                                связана с Об этом писал Навои в своем труде «Хамсат ул-мутахайирин».
                                и пятно часто читалось в разговорах Его Величества Короля».[6]
                                <br>
                                <br> Лучше бы ты не открывал весь мир,
                                <br>
                                <br> Я бы хотел, чтобы мир был шумным, -
                                <br>
                                Содержание и стилистическая беглость этой газели побудили его написать тахмыс.
                                Тахмис описывает безнадежное состояние влюбленного. Когда любовник видит любовника, от его угнетения,
                                страдает от «позора» перед миром. Ведь естественно, что другу трудно. Примерно
                                Задача обострения боли измены отражена в четырехстрочном радифе «какая польза»?
                                Окончательный смысл выражен в двух последних стихах Навои:
                                <br>
                                <br> Джавру - тиран, так что толку от угнетения?
                                <br>
                                <br> Айламас Содик лутф ижор, баз не полезно,
                                <br>
                                <br> Трудно найти способ, так что толку,
                                <br>
                                <br> О Навои, ты неверен, так что толку от
                                <br>
                                <br> Ganjkim desang agar boxud digar yo koshki (B-242).
                                <br>
                                <br> Султани начинается со стихотворения Навои "Сила сердца - сладкий эпос"
                                мухаммас в шестибайтную газель. В нем тяжелые пути любви, боль любви
                                описаны страдания. «Влюбленный, который следует по стопам людей любви, опасен в долине любви.
                                Когда он вступит на путь, его поддержит истина».
                                типы:
                                <br>
                                <br> Навои вошел в долину любви,
                                <br>
                                <br> Опасен путь конфетки (B-136).
                                <br>
                                <br> С талантом, мастерством и трудолюбием настоящего поэта-мухаммаса, отражающего эти качества
                                создано. Мастерство, с другой стороны, формируется благодаря наслаждению творчеством учителей.
                                <br>
                                <br>
                                Мухаммы, связывающие его, являются выражением такого наслаждения, и я воспеваю идеи любви.
                                достигает Чтобы улучшить искусство Мухаммаса, поэт написал:
                                метафора и красноречивые стихи, такие как «Тилмак»
                                заканчивается. Возлюбленный лирического героя уникален в области красоты и влюбляется в нее.
                                «Он хочет безумия».
                                <br>
                                <br> «В поисках поэтических выражений, связанных с природными и социальными явлениями, Огахийга Мунис
                                Его мастерство было источником вдохновения и примера. Один из любимых поэтических образов Гунча Муниса, -
                                Учится литературовед Н.Джумаходжа. В лирике Муниса образ бутона поэтичен.
                                есть оригинальные примеры исследования. Например, анимация в одном из произведений поэта
                                Он спорит с губами своего возлюбленного. Он описывается как самоограничивающийся
                                По незнанию он совершает непристойности и терпит поражение в бою:
                                <br>
                                <br> Он открыл иск губами ко рту,
                                <br>
                                <br> Он покинул адабдиндур с кровью, текущей изо рта.
                                <br>
                                <br> Создавая такой поэтический пейзаж, губы возлюбленной поэта становятся более красивыми, живыми,
                                показывает, что это вкусно. В мухаммах, написанных Агахи Мунисом для этой газели
                                усиливает пейзаж, связанный с образом бутона своей непопулярностью
                                подробно описывает эффект В результате эффективность поэтической мысли
                                увеличивается:
                                <br>
                                <br> Та'диб добрался до него до рассвета,
                                <br>
                                <br> Кто бил Сабо Коджина, пока не был удовлетворен,
                                <br>
                                <br> Если вы спросите его о причине его прибытия, он будет унижен.
                                <br>
                                <br> Он открыл иск губами ко рту,
                                <br>
                                <br> Он ушел из адабдиндура с белой кровью во рту»[7].
                                <br>
                                <br> В традиции художественной интерпретации образа Гунчи положительный опыт Султани выглядит следующим образом.
                                мы можем наблюдать:
                                <br>
                                <br> Садовые почки двух дней не живут,
                                <br>
                                <br> Буханка равенства бьет вас по лицу,
                                <br>
                                <br> Слепой, гунчай саркаш видел столько боли,
                                <br>
                                <br> Он открыл иск губами и ртом,
                                <br>
                                <br> Это вежливо, белая кровь изо рта (B-143).
                                <br>
                                <br> В некоторых местах Султан Мунис использует в своих стихах синонимы. Это Султани
                                Работа Муниса также сыграла важную роль в развитии его таланта. Нуль,
                                Тот факт, что газели Муниса были выбраны для мухаммаса, является прямым доказательством этого:
                                <br>
                                <br> Я не хочу причинять султану неприятности,
                                <br>
                                <br>Я не хочу ничего есть без тебя,
                                <br>
                                <br> Как бы тебе не было больно, я драться не буду,
                                <br>
                                <br> Я не удивлен, спасибо,
                                <br>
                                <br> Мунис тани урйони держит розовую миску.
                                <br>
                                <br> В комплекс входят также мухаммы, связанные с газелями Агахи. Из источников известно, что
                                Князь Агахи был учителем поэтов. Поэтому на них повлияли произведения Агахи.
                                или для него естественно следовать и творить. В частности, Садик Агахи писал о Феруз
                                Мухаммас связал газель Радифи «да не будет»:
                                <br>
                                <br> О шахи Доронишон, в-ей Хусрави олимаком,
                                <br>
                                <br> Да будет доволен вами Аллах,
                                <br>
                                <br> То мани лутфинг била Садык эди сходком,
                                <br>
                                <br> Огаий месяцами плакал и молился,
                                <br>
                                <br> Пусть глаза времени не ослепнут у дверей Сидка (B-246).
                                <br>
                                В этом мухаммаде Садик продолжает добрые пожелания Огахи, основанные на его чувствах.
                                В своей газели Агахи подчеркивает, что Феруз был причиной зажиточной жизни народа в то время.
                                подчеркивает. Садик сравнил Феруза со знаменитыми правителями Дарием и Хисравом.
                                использует свое искусство, чтобы показать, что он справедлив.
                                <br>
                                <br> Большинство мухаммадов в комплексе Хафт Шуаро связаны с газелями Феруза
                                являются предположениями. Такие мухаммы встречаются в произведениях каждого поэта комплекса. Из литературного опыта
                                Известно, что в тахмисе появляется новый смысл в формальном повторении художественного творчества.
                                Повторение, например, прежде всего в своих формальных признаках (пять, два последних стиха
                                принадлежность поэту-предшественнику, наличие традиционных образов, прозвищ), уникальность
                                повторяя в новой интерпретации положение и значение этих элементов тахмиса
                                проявляется в открытии новых граней. Ведь «жанровые возможности творческой реальности
                                В процессе у него происходит внутреннее восприятие содержания действительности, ее сущности.
                                можно перепозиционировать так, чтобы это отвечало требованиям жанра» [8].
                                <br>
                                <br> В мухаммаде Феруза, который связан с радиф газелем «Гаядур», образ Феруза является образцовым.
                                описывает ряд уникальных качеств:
                                <br>
                                <br> Айладинг Султани смотрит на каждый огонь, как Феруз,
                                <br>
                                <br> Бахри дахр тогидин айлаб гузар Феруздек,
                                <br>
                                <br> Хотел бы я не останавливаться, Феруздек,
                                <br>
                                <br> я не нашел ул гуль висолидин асар феруздек,
                                <br>
                                <br> О Саба, дай мне сообщение, где мой покой (B-147).
                                <br>
                                <br> Создается впечатление, что в каждом стихе присутствует определенное качество Феруза (глубина, творчество, настороженность,
                                знакомство с красотой) и в конце четырех стихов повторяется значение слова «феруздек».
                                усиливает и привлекает внимание к изображению.
                                <br>


                        @endif


                    </p>



                </div>
            </div>
        </div>
    </section>
@endsection
