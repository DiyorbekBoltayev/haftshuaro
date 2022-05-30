<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoirModel extends Model
{
    use HasFactory;
    public function sher(){
        return $this->hasMany(SherModel::class);
    }
    protected $fillable = [
      'name_uz','name_en','name_ru',
      'title-uz','title-en','title-ru',
      'photo'
    ];
}
