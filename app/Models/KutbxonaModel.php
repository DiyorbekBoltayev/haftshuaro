<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KutbxonaModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_uz','name_en','name_ru',
        'desc_uz','desc_en','desc_ru',
        'outor_uz','outor_uz','outor_uz',
        'photo',
        'file',
        'status',
    ];
}
