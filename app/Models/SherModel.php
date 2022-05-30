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
        'title_uz','title_en','title_ru',
        'matn_uz','matn_en','matn_ru',
        'shoir_id',

    ];
}
