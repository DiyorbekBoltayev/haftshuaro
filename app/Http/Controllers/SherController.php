<?php

namespace App\Http\Controllers;

use App\Models\SherModel;
use App\Models\ShoirModel;
use Illuminate\Http\Request;

class SherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poems = SherModel::orderBY('created_at', 'DESC')->paginate(5);
        $poets = ShoirModel::all();
        return view('admin.sher.index', [
            'poems' => $poems,
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
        $poets = ShoirModel::all();
        return view('admin.sher.create', [
            'poets' => $poets,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SherModel::create($request->all());
        return redirect()->route('admin.sher.index');
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
        $poets = ShoirModel::all();
        $poem= SherModel::find($id);
        return view('admin.sher.edit', [
            'poem'=>$poem,
            'poets' => $poets,
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
        SherModel::create($request->all());
        return redirect()->route('admin.sher.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = SherModel::find($id);
        $data->delete();
        return redirect()->route('admin.sher.index');
    }
}
