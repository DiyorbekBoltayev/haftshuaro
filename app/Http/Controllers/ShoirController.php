<?php

namespace App\Http\Controllers;

use App\Models\FotogaleriyaModel;
use App\Models\ShoirModel;
use Illuminate\Http\Request;

class ShoirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poets = ShoirModel::orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.shoir.index', [
            'poets' => $poets,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shoir.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ShoirModel();
        $data->name_uz = $request->name_uz;
        $data->name_ru = $request->name_ru;
        $data->name_en = $request->name_en;
        $data->save();
        return redirect()->route('admin.shoir.index');


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ShoirModel::find($id);
        return view('admin.shoir.edit', [
            'poet' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = ShoirModel::find($id);
        $data->name_uz = $request->name_uz;
        $data->name_ru = $request->name_ru;
        $data->name_en = $request->name_en;
        $data->save();
        return redirect()->route('admin.shoir.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ShoirModel::find($id);
        $data->delete();
        return redirect()->route('admin.shoir.index');
    }
}
