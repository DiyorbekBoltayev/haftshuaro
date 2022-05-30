<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotogaleriyaModel extends Model
{
    use HasFactory;
    protected $fillable= [

        'header_uz',  'header_en',  'header_ru',
        'text_uz',  'text_en',  'text_ru',
        'photo1',
        'outor1_uz', 'outor1_en',  'outor1_ru',
        'photo2',
        'outor2_uz',  'outor2_en', 'outor2_ru',
        ];
}
