<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SherModel extends Model
{
    use HasFactory;
    public function shoir(){
        return $this->belongsTo(ShoirModel::class,'shoir_id');
    }
    protected $fillable = [
        'title_uz','title_uz','title_uz',
        'matn_uz','matn_en','matn_ru',
        'shoir_id',

    ];
}
