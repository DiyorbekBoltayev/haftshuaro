<?php

namespace App\Http\Controllers;

use App\Models\FotogaleriyaModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function bosh_sahifa(){
        return view('user.bosh_sahifa.bosh_sahifa');
    }
    public function muallif_haqida(){
        return view('user.bosh_sahifa.muallif_haqida');
    }
    protected function fotogalereya()
    {
        $data=FotogaleriyaModel::all();

        return view('user.bosh_sahifa.fotogalereya',[
            'data'=>$data
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
        return view('user.kutubxona.kutubxona');
    }
    public function durdona_toplamlar(){
        return view('user.kutubxona.durdona_toplamlar');
    }
    public function eng_sara(){
        return view('user.kutubxona.eng_sara');
    }
}
