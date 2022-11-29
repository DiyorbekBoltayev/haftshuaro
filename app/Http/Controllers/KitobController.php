<?php

namespace App\Http\Controllers;

use App\Models\KutbxonaModel;
use App\Models\ShoirModel;
use Illuminate\Http\Request;

class KitobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=KutbxonaModel::paginate(20);

        return view('admin.kitob.index',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $poets =ShoirModel::all();
        return view('admin.kitob.create',['poets'=>$poets]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new KutbxonaModel();

        $data->name_uz=$request->name_uz;
        $data->name_en=$request->name_en;
        $data->name_ru=$request->name_ru;
        $data->outor_uz=$request->outor_uz;
        $data->outor_en=$request->outor_en;
        $data->outor_ru=$request->outor_ru;

        $image=$request->photo;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->photo->move('kutubxona',$imagename);
        $data->photo=$imagename;

        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('kutubxona',$imagename);
        $data->file=$imagename;

        $data->shoir_id=$request->shoir_id;
        $data->save();
        return redirect()->route('admin.kitob.index');
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
    {   $poets =ShoirModel::all();
        $data = KutbxonaModel::find($id);
        return view('admin.kitob.edit',[
            'data'=>$data
            ,'poets'=>$poets
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

        $data =  KutbxonaModel::find($id);
        $data->name_uz=$request->name_uz;
        $data->name_en=$request->name_en;
        $data->name_ru=$request->name_ru;
        $data->outor_uz=$request->outor_uz;
        $data->outor_en=$request->outor_en;
        $data->outor_ru=$request->outor_ru;


        if($request->photo!=null) {
            $image=$request->photo;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->photo->move('kutubxona',$imagename);
            $data->photo=$imagename;
        }
        if($request->file!=null) {
            $image=$request->file;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('kutubxona',$imagename);
            $data->file=$imagename;
        }
        $data->shoir_id=$request->shoir_id;
        $data->save();
        return redirect()->route('admin.kitob.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=KutbxonaModel::find($id);

        $data->delete();

        return redirect()->route('admin.kitob.index');
    }
}
