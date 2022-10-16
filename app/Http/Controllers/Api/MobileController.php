<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\KutubxonaResource;
use App\Http\Resources\SheriyatResource;
use App\Models\FotogaleriyaModel;
use App\Models\KutbxonaModel;
use App\Models\SherModel;
use App\Models\ShoirModel;

class MobileController extends Controller
{
    public function foto_galereya()
    {
        $data = FotogaleriyaModel::all('id','photo1','photo2');
        return response()->json($data);
    }
    public function sheriyat()
    {
        $sherlar = SheriyatResource::collection(SherModel::all());
        $shoirlar = ShoirModel::all();
        return response()->json(['sherlar'=>$sherlar,'shoirlar'=>$shoirlar]);
    }

    public function kimdir_ijodi($id)
    {
        $shoir = ShoirModel::findorFail($id);
        $sherlar = SheriyatResource::collection( SherModel::all()->where("shoir_id", $shoir->id));
        return response()->json(['shoir'=>$shoir,'sherlar'=>$sherlar]);
    }

    public function kutubxonam()
    {
        return response()->json(KutubxonaResource::collection(KutbxonaModel::all()->where("status", 0)));

    }

    public function durdona_toplamlar()
    {
        return response()->json(KutubxonaResource::collection(KutbxonaModel::all()->where("status", 1)));


    }

    public function eng_sara()
    {
        return response()->json(KutubxonaResource::collection(KutbxonaModel::all()->where("status", 2)));
    }
}
