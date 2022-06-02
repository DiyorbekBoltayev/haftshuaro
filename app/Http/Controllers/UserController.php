<?php

namespace App\Http\Controllers;

use App\Models\FotogaleriyaModel;
use App\Models\KutbxonaModel;
use App\Models\SherModel;
use App\Models\ShoirModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function getDownload($id)
    {
        //PDF file is stored under project/public/download/info.pdf

        $file = KutbxonaModel::find($id);
        $path = public_path("kutubxona/$file->file");
        return response()->download($path);
    }

    public function bosh_sahifa()
    {
        $shoirlar = ShoirModel::all();
        $lang = Session::get('locale');

        return view('user.bosh_sahifa.bosh_sahifa', [
            'lang' => $lang,
            'shoirlar' => $shoirlar
        ]);
    }

    public function muallif_haqida()
    {
        $shoirlar = ShoirModel::all();
        $lang = Session::get('locale');
        return view('user.bosh_sahifa.muallif_haqida', [
            'lang' => $lang,
            'shoirlar' => $shoirlar
        ]);
    }

    protected function fotogalereya()
    {
        $shoirlar = ShoirModel::all();
        $data = FotogaleriyaModel::all();
        $lang = Session::get('locale');

        return view('user.bosh_sahifa.fotogalereya', [
            'data' => $data,
            'lang' => $lang,
            'shoirlar' => $shoirlar
        ]);
    }

    public function adabiy_muhit()
    {
        $shoirlar = ShoirModel::all();
        $lang = Session::get('locale');
        return view('user.adabiy_muhit.adabiy_muhit', [
            'lang' => $lang,
            'shoirlar' => $shoirlar
        ]);
    }

    public function adabiy_ijod()
    {
        $shoirlar = ShoirModel::all();
        $lang = Session::get('locale');
        return view('user.adabiy_muhit.adabiy_ijod', [
            'lang' => $lang,
            'shoirlar' => $shoirlar
        ]);
    }

    public function biografik()
    {
        $shoirlar = ShoirModel::all();
        $lang = Session::get('locale');
        return view('user.adabiy_muhit.biografik', [
            'lang' => $lang,
            'shoirlar' => $shoirlar
        ]);
    }

    public function nusxalari()
    {
        $shoirlar = ShoirModel::all();
        $lang = Session::get('locale');
        return view('user.adabiy_muhit.nusxalari', [
            'lang' => $lang,
            'shoirlar' => $shoirlar
        ]);
    }

    public function gazallar()
    {
        $shoirlar = ShoirModel::all();
        $lang = Session::get('locale');
        return view('user.gazallar.gazallar', [
            'lang' => $lang,
            'shoirlar' => $shoirlar
        ]);
    }

    public function gazallar_tasnifi()
    {
        $shoirlar = ShoirModel::all();
        $lang = Session::get('locale');
        return view('user.gazallar.gazallar_tasnifi', [
            'lang' => $lang,
            'shoirlar' => $shoirlar
        ]);
    }

    public function sheriy_sanat()
    {
        $shoirlar = ShoirModel::all();
        $lang = Session::get('locale');
        return view('user.gazallar.sheriy_sanat', [
            'lang' => $lang,
            'shoirlar' => $shoirlar
        ]);
    }

    public function sheriy_janrlar()
    {
        $shoirlar = ShoirModel::all();
        $lang = Session::get('locale');
        return view('user.sheriy_janrlar.sheriy_janrlar', [
            'lang' => $lang,
            'shoirlar' => $shoirlar
        ]);
    }

    public function musammat()
    {
        $shoirlar = ShoirModel::all();
        $lang = Session::get('locale');
        return view('user.sheriy_janrlar.musammat', [
            'lang' => $lang,
            'shoirlar' => $shoirlar
        ]);
    }

    public function boshqa_janrlar()
    {
        $shoirlar = ShoirModel::all();
        $lang = Session::get('locale');
        return view('user.sheriy_janrlar.boshqa_janrlar', [
            'lang' => $lang,
            'shoirlar' => $shoirlar

        ]);
    }

    public function sheriyat()
    {
        $sherlar = SherModel::all();
        $shoirlar = ShoirModel::all();
        $lang = Session::get('locale');
        return view('user.sheriyat.sheriyat', [
            'lang' => $lang,
            'shoirlar' => $shoirlar,
            'sherlar' => $sherlar
        ]);
    }

    public function kimdir_ijodi($id)
    {
        $shoir = ShoirModel::find($id);
        $shoirlar = ShoirModel::all();
        $sherlar = SherModel::all()->where("shoir_id", $shoir->id);
        $lang = Session::get('locale');
        return view('user.sheriyat.kimdir_ijodi', [
            'lang' => $lang,
            'shoirlar' => $shoirlar,
            'shoir' => $shoir,
            'sherlar' => $sherlar
        ]);
    }

    public function kutubxonam()
    {
        $shoirlar = ShoirModel::all();
        $data = KutbxonaModel::orderBy('created_at', 'desc')->paginate(3);
        $lang = Session::get('locale');
        return view('user.kutubxona.kutubxona', [
            'data' => $data,
            'lang' => $lang,
            'shoirlar' => $shoirlar
        ]);
    }

    public function durdona_toplamlar()
    {
        $shoirlar = ShoirModel::all();
        $data = KutbxonaModel::orderBy('created_at', 'desc')->paginate(3);
        $lang = Session::get('locale');
        return view('user.kutubxona.durdona_toplamlar', [
            'data' => $data,
            'lang' => $lang,
            'shoirlar' => $shoirlar
        ]);

    }

    public function eng_sara()
    {
        $shoirlar = ShoirModel::all();
        $data = KutbxonaModel::orderBy('created_at', 'desc')->paginate(3);
        $lang = Session::get('locale');
        return view('user.kutubxona.eng_sara', [
            'data' => $data,
            'lang' => $lang,
            'shoirlar' => $shoirlar
        ]);
    }
}
