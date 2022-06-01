<?php

namespace App\Http\Controllers;

use App\Models\FotogaleriyaModel;
use App\Models\KutbxonaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function bosh_sahifa(){
        $lang=Session::get('locale');
        $text1_uz="";
        $text1_ru="";
        $text1_en="";

        $text2_uz="KIRISH";
        $text2_ru="ВВЕДЕНИЕ";
        $text2_en="INTRODUCTION";

        $text3_uz="Har bir xalqning oʻziga xos tarixiy
                                taraqqiyoti va asrlar davomida shakllangan qadriyatlari mavjud. Qadriyatlar oʻtmishning
                                ajralmas qismini tashkil etadi. Zero, qadriyatlarda xalqning oʻziga xosligi,
                                urf-odatlari, ma`naviyati mujassamlanadi.

                                “Qadriyat deyilganda, inson va insoniyat uchun ahamiyatli boʻlgan millat, elat va
                                ijtimoiy guruhlarning manfaatlari va maqsadlariga xizmat qiladigan va ular tomonidan
                                baholanib, qadrlanadigan tabiat va jamiyat ne`matlari, hodisalari majmuini
                                tushunmogʻimiz lozim”[1].

                                Ma`lumki, qadriyatlar umuminsoniy va milliy qadriyatlarga boʻlinadi.

                                Gʻ.Gʻofurov tomonidan qadriyatlar va ularning turlari toʻgʻrisida mulohaza
                                yuritilganda, qadriyatlarning turlaridan biri sifatida ma`naviy qadriyatlar ajratib
                                koʻrsatiladi[2].[1] Qadriyatlar va ijtimoiy taraqqiyot (ilmiy ishlar toʻplami).
                                –T; “Oʻzbekiston”, 1997. B.198;
                                Komilov T., Abidova S. Milliy axloqiy qadriyatlar va ularning tarbiyaviy ahamiyati.
                                OʻzR FA, “Fan”, 2000. B.20;
                                Ortiqov N. Ma`naviyat: milliy va umuminsoniy qadriyatlar. - T; “Oʻzbekiston”,1997.B.48.
                                [2] Gʻofurov Gʻ. Milliy an`analar//Xalq so`zi, 1993 yil. 11 fevral, B. 2


                                ";
        $text3_ru="У каждого народа своя история
                                развитие и ценности, формировавшиеся веками. Ценности прошлого
                                является неотъемлемой частью. Ведь ценности - это личность народа,
                                традиции и духовность.

                                 «Ценность относится к нации, людям и людям, которые важны для человека и человечества.
                                служение и служение интересам и целям социальных групп
                                совокупность событий и явлений природы и общества, которые ценятся и ценятся
                                нам нужно понять» [1].

                                 Известно, что ценности делятся на общечеловеческие и национальные ценности.

                                 Комментарий Г. Гафурова о ценностях и их типах
                                выделение духовных ценностей как одного из видов ценностей
                                [2].
                                [1] Ценности и общественное развитие (Сборник научных трудов).
                                –Т; «Узбекистан», 1997. С.198;
                                 Камилов Т., Абидова С. Национальные нравственные ценности и их воспитательное значение.
                                ФА УзР, «Веер», 2000. С.20;
                                Артиков Н. Духовность: национальные и общечеловеческие ценности. - Т; «Узбекистан», 1997.Б.48.
                                 [2] Гофуров Г`. Национальные традиции // Халк сузи, 1993. 11 февраля, д. 2  ";

        $text3_en="Each nation has its own history
                                development and values formed over the centuries. Values ​​of the past
                                is an integral part. After all, the values ​​are the identity of the people,
                                traditions and spirituality.
                                <br>
                                <br> “Value refers to a nation, people, and people that are important to man and humanity
                                serving and serving the interests and goals of social groups
                                a set of events and phenomena of nature and society that are valued and appreciated
                                we need to understand ”[1].
                                <br>
                                <br> It is known that values ​​are divided into universal and national values.
                                <br>
                                <br> G. Gafurov's commentary on values ​​and their types
                                distinguishing spiritual values ​​as one of the types of values
                                [2]. <br> <br> [1] Values ​​and Social Development (Collection of Scientific Works).
                                –T; “Uzbekistan”, 1997. P.198;
                                <br> Kamilov T., Abidova S. National moral values ​​and their educational significance.
                                UzR FA, “Fan”, 2000. B.20;
                                Artikov N. Spirituality: national and universal values. - T; “Uzbekistan”, 1997.B.48.
                                <br> [2] Gʻofurov G`. National traditions // Xalq so'zi, 1993. February 11, B. 2
                                <br>
                                <br>
                                <br>";

        return view('user.bosh_sahifa.bosh_sahifa',[
            'text1_uz'=>$text1_uz,
            'text1_ru'=>$text1_ru,
            'text1_en'=>$text1_en,
            'text2_uz'=>$text2_uz,
            'text2_ru'=>$text2_ru,
            'text2_en'=>$text2_en,
            'text3_uz'=>$text3_uz,
            'text3_ru'=>$text3_ru,
            'text3_en'=>$text3_en,

            'lang'=>$lang
        ]);
    }
    public function muallif_haqida(){
        return view('user.bosh_sahifa.muallif_haqida');
    }
    protected function fotogalereya()
    {
        $data=FotogaleriyaModel::all();
        $lang=Session::get('locale');

        return view('user.bosh_sahifa.fotogalereya',[
            'data'=>$data,
            'lang'=>$lang,
        ]);
    }
    public function adabiy_muhit(){
        return view('user.adabiy_muhit.adabiy_muhit');
    }
    public function adabiy_ijod(){
        return view('user.adabiy_muhit.adabiy_ijod');
    }
    public function biografik(){
        return view('user.adabiy_muhit.biografik');
    }
    public function nusxalari(){
        return view('user.adabiy_muhit.nusxalari');
    }
    public function gazallar(){
        return view('user.gazallar.gazallar');
    }
    public function gazallar_tasnifi(){
        return view('user.gazallar.gazallar_tasnifi');
    }
    public function sheriy_sanat(){
        return view('user.gazallar.sheriy_sanat');
    }
    public function sheriy_janrlar(){
        return view('user.sheriy_janrlar.sheriy_janrlar');
    }
    public function musammat(){
        return view('user.sheriy_janrlar.musammat');
    }
    public function boshqa_janrlar(){
        return view('user.sheriy_janrlar.boshqa_janrlar');
    }
    public function sheriyat(){
        return view('user.sheriyat.sheriyat');
    }
    public function kimdir_ijodi(){
        return view('user.sheriyat.kimdir_ijodi');
    }
    public function kutubxonam(){
        $data = KutbxonaModel::orderBy('created_at', 'desc')->paginate(3);
        $lang=Session::get('locale');
        return view('user.kutubxona.kutubxona',[
            'data'=>$data,
            'lang'=>$lang,
        ]);
    }
    public function durdona_toplamlar(){
        $data = KutbxonaModel::orderBy('created_at', 'desc')->paginate(3);
        $lang=Session::get('locale');
        return view('user.kutubxona.durdona_toplamlar',[
            'data'=>$data,
            'lang'=>$lang,
        ]);

    }
    public function eng_sara(){
        $data = KutbxonaModel::orderBy('created_at', 'desc')->paginate(3);
        $lang=Session::get('locale');
        return view('user.kutubxona.eng_sara',[
            'data'=>$data,
            'lang'=>$lang,
        ]);
    }
}
