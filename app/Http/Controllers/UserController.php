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

    public function tadqiqot()
    {
        $shoirlar = ShoirModel::all();
        $lang = Session::get('locale');

        return view('user.v2.tadqiqot', [
            'lang' => $lang,
            'shoirlar' => $shoirlar
        ]);
    }

    public function ijodkorlar()
    {
        $shoirlar = ShoirModel::all();
        $lang = Session::get('locale');

        return view('user.v2.ijodkorlar', [
            'lang' => $lang,
            'shoirlar' => $shoirlar
        ]);
    }

    public function contact()
    {
        $lang = Session::get('locale');

        return view('user.v2.contact', [
            'lang' => $lang,
        ]);
    }

    public function bosh_sahifa()
    {
        $azo_uz = [
            [
                'ism' => "Xajiyeva Iroda Adambayevna",
                'lavozim' => 'Loyiha rahbari',
                'rasm' => 'iroda.jpg'
            ],
            [
                'ism' => "Taxirova Gulhayo Sardorbekovna",
                'lavozim' => 'Stajyor-tadqiqotchi, talaba',
                'rasm' => 'gulhayo.jpg'
            ],
            [
                'ism' => "Xujaniyozova Go'zal Yuldashevna",
                'lavozim' => 'Kichik ilmiy xodim',
                'rasm' => 'guzal.jpg'
            ],
            [
                'ism' => "Sapayeva Feruza Norboyevna",
                'lavozim' => 'Kichik ilmiy xodim',
                'rasm' => 'feruza.jpg'
            ], [
                'ism' => "Abdullayeva Shoxidaxon Davronbekovna",
                'lavozim' => 'Katta ilmiy xodim',
                'rasm' => 'shoxida.jpg'
            ], [
                'ism' => "Matyozova Nilufar Sabirovna",
                'lavozim' => 'Katta ilmiy xodim',
                'rasm' => 'nilufar.jpg'
            ], [
                'ism' => "Adambayeva Feruza Rustambekovna",
                'lavozim' => 'Kichik ilmiy xodim',
                'rasm' => 'feruzar.jpg'
            ], [
                'ism' => "Yusupova Shoxida Botirboyevna",
                'lavozim' => 'Katta ilmiy xodim',
                'rasm' => 'shoxidab.jpg'
            ],


        ];
        $azo_en = [
            [
                'ism' => "Xajiyeva Iroda Adambayevna",
                'lavozim' => 'Project leader',
                'rasm' => 'iroda.jpg'
            ],
            [
                'ism' => "Taxirova Gulhayo Sardorbekovna",
                'lavozim' => 'Trainee-researcher, student',
                'rasm' => 'gulhayo.jpg'
            ],
            [
                'ism' => "Xujaniyozova Go'zal Yuldashevna",
                'lavozim' => 'Junior researcher',
                'rasm' => 'guzal.jpg'
            ],
            [
                'ism' => "Sapayeva Feruza Norboyevna",
                'lavozim' => 'Junior researcher',
                'rasm' => 'feruza.jpg'
            ], [
                'ism' => "Abdullayeva Shoxidaxon Davronbekovna",
                'lavozim' => 'Senior researcher',
                'rasm' => 'shoxida.jpg'
            ], [
                'ism' => "Matyozova Nilufar Sabirovna",
                'lavozim' => 'Senior researcher',
                'rasm' => 'nilufar.jpg'
            ], [
                'ism' => "Adambayeva Feruza Rustambekovna",
                'lavozim' => 'Junior researcher',
                'rasm' => 'feruzar.jpg'
            ], [
                'ism' => "Yusupova Shoxida Botirboyevna",
                'lavozim' => 'Senior researcher',
                'rasm' => 'shoxidab.jpg'
            ],


        ];
        $azo_ru = [
            [
                'ism' => "Хажиева Ирода Адамбаевна",
                'lavozim' => 'Лидер проектов',
                'rasm' => 'iroda.jpg'
            ],
            [
                'ism' => "Тахирова Гулхае Сардорбековна",
                'lavozim' => 'Стажер-исследователь, студент',
                'rasm' => 'gulhayo.jpg'
            ],
            [
                'ism' => "Хужаниязова Гузал Юлдашевна",
                'lavozim' => 'Младший научный сотрудник',
                'rasm' => 'guzal.jpg'
            ],
            [
                'ism' => "Сапаева Феруза Норбоевна",
                'lavozim' => 'Младший научный сотрудник',
                'rasm' => 'feruza.jpg'
            ], [
                'ism' => "Абдуллаева Шохидахон Давронбековна",
                'lavozim' => 'Старший научный сотрудник',
                'rasm' => 'shoxida.jpg'
            ], [
                'ism' => "Матязова Нилуфар Сабировна",
                'lavozim' => 'Старший научный сотрудник',
                'rasm' => 'nilufar.jpg'
            ], [
                'ism' => "Адамбаева Феруза Рустамбековна",
                'lavozim' => 'Младший научный сотрудник',
                'rasm' => 'feruzar.jpg'
            ], [
                'ism' => "Юсупова Шохида Ботирбоевна",
                'lavozim' => 'Старший научный сотрудник',
                'rasm' => 'shoxidab.jpg'
            ],


        ];
        $azz = [];
        $shoirlar = ShoirModel::all();
        $lang = Session::get('locale');
        if ($lang == 'uz')
            $azz = $azo_uz;
        elseif ($lang == 'ru')
            $azz = $azo_ru;
        else
            $azz = $azo_en;

        $photos = FotogaleriyaModel::all();

        return view('user.bosh_sahifa.bosh_sahifa', [
            'lang' => $lang,
            'shoirlar' => $shoirlar,
            'photos' => $photos,
            'azolar' =>$azz
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
        $data = KutbxonaModel::all()->where("status", 0);
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
        $data = KutbxonaModel::all()->where("status", 1);
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
        $data = KutbxonaModel::all()->where("status", 2);
        $lang = Session::get('locale');
        return view('user.kutubxona.eng_sara', [
            'data' => $data,
            'lang' => $lang,
            'shoirlar' => $shoirlar
        ]);
    }
}
