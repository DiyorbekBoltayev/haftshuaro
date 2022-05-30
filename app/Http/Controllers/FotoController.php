<?php

namespace App\Http\Controllers;

use App\Models\FotogaleriyaModel;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foto = FotogaleriyaModel::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.photos.index', [
            'fotos'=>$foto,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new FotogaleriyaModel();

        $data->header_uz = $request->header_uz;
        $data->header_en = $request->header_en;
        $data->header_ru = $request->header_ru;

        $data->text_uz = $request->text_uz;
        $data->text_en = $request->text_en;
        $data->text_ru = $request->text_ru;

        $image=$request->photo1;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->photo1->move('photo1',$imagename);
        $data->photo1=$imagename;


        $data->outor1_uz = $request->outor1_uz;
        $data->outor1_en = $request->outor1_en;
        $data->outor1_ru = $request->outor1_ru;

        $image=$request->photo2;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->photo2->move('photo2',$imagename);
        $data->photo2=$imagename;


        $data->outor2_uz = $request->outor2_uz;
        $data->outor2_en = $request->outor2_en;
        $data->outor2_ru = $request->outor2_ru;

        $data->save();
        return redirect()->route('admin.photos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = FotogaleriyaModel::find($id);
        return view('admin.photos.edit',[
            'foto'=>$data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data =  FotogaleriyaModel::find($id);

        $data->header_uz = $request->header_uz;
        $data->header_en = $request->header_en;
        $data->header_ru = $request->header_ru;

        $data->text_uz = $request->text_uz;
        $data->text_en = $request->text_en;
        $data->text_ru = $request->text_ru;

    if($request->photo1!=null) {
        $image = $request->photo1;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->photo1->move('photo1', $imagename);
        $data->photo1 = $imagename;
    }


        $data->outor1_uz = $request->outor1_uz;
        $data->outor1_en = $request->outor1_en;
        $data->outor1_ru = $request->outor1_ru;

    if($request->photo2!=null) {
        $image = $request->photo2;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->photo2->move('photo2', $imagename);
        $data->photo2 = $imagename;
    }

        $data->outor2_uz = $request->outor2_uz;
        $data->outor2_en = $request->outor2_en;
        $data->outor2_ru = $request->outor2_ru;

        $data->save();
        return redirect()->route('admin.photos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = FotogaleriyaModel::find($id);
        $data->delete();
        return redirect()->route('admin.photos.index');

    }
}
