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

        return view('user.bosh_sahifa.bosh_sahifa',[
            'lang'=>$lang
        ]);
    }
    public function muallif_haqida(){
        $lang=Session::get('locale');
        return view('user.bosh_sahifa.muallif_haqida',[
            'lang'=>$lang
        ]);
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
        $lang=Session::get('locale');
        return view('user.adabiy_muhit.adabiy_muhit',[
            'lang'=>$lang
        ]);
    }
    public function adabiy_ijod(){
        $lang=Session::get('locale');
        return view('user.adabiy_muhit.adabiy_ijod',[
            'lang'=>$lang
        ]);
    }
    public function biografik(){
        $lang=Session::get('locale');
        return view('user.adabiy_muhit.biografik',[
            'lang'=>$lang
        ]);
    }
    public function nusxalari(){
        $lang=Session::get('locale');
        return view('user.adabiy_muhit.nusxalari',[
            'lang'=>$lang
        ]);
    }
    public function gazallar(){
        $lang=Session::get('locale');
        return view('user.gazallar.gazallar',[
            'lang'=>$lang
        ]);
    }
    public function gazallar_tasnifi(){
        $lang=Session::get('locale');
        return view('user.gazallar.gazallar_tasnifi',[
            'lang'=>$lang
        ]);
    }
    public function sheriy_sanat(){
        $lang=Session::get('locale');
        return view('user.gazallar.sheriy_sanat',[
            'lang'=>$lang
        ]);
    }
    public function sheriy_janrlar(){
        $lang=Session::get('locale');
        return view('user.sheriy_janrlar.sheriy_janrlar',[
            'lang'=>$lang,
        ]);
    }
    public function musammat(){
        $lang=Session::get('locale');
        return view('user.sheriy_janrlar.musammat',[
            'lang'=>$lang,
        ]);
    }
    public function boshqa_janrlar(){
        $lang=Session::get('locale');
        return view('user.sheriy_janrlar.boshqa_janrlar',[
            'lang'=>$lang,

        ]);
    }
    public function sheriyat(){
        $lang=Session::get('locale');
        return view('user.sheriyat.sheriyat',[
            'lang'=>$lang
        ]);
    }
    public function kimdir_ijodi(){
        $lang=Session::get('locale');
        return view('user.sheriyat.kimdir_ijodi',[
            'lang'=>$lang
        ]);
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
