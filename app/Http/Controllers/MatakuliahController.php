<?php

namespace App\Http\Controllers;

use App\Models\matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matakuliah=matakuliah::all();

        return view('matakuliah.matakuliah', compact('matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matakuliah = new matakuliah;
        $matakuliah->name = $request->input('matakuliah');
        $matakuliah->sks = $request->input('sks');
        $matakuliah->dosen = $request->input('dosen');
        // dd($matakuliah);
        $matakuliah->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function show(matakuliah $matakuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(matakuliah $matakuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        // dd($data);
        Matakuliah::where(['id'=>$id])->update([
            'name'=>$data['name'],
            'sks'=>$data['sks'],
            'dosen'=>$data['dosen'],
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Matakuliah::find($id);
        $data ->delete();
        return redirect()->back();
    }
}
