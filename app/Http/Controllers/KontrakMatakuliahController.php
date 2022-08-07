<?php

namespace App\Http\Controllers;

use App\Models\kontrak_matakuliah;
use App\Models\User;
use App\Models\semester;
use Illuminate\Http\Request;

class KontrakMatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontrak=kontrak_matakuliah::all();
        $mahasiswa=user::all();
        $semester=semester::all();
        return view('kontrak.kontrak', compact('kontrak','mahasiswa','semester'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kontrak = new kontrak_matakuliah;
        $kontrak->mahasiswa_id = $request->input('mahasiswa_id');
        $kontrak->semester_id = $request->input('semester_id');
        // dd($request->all());
        $kontrak->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kontrak_matakuliah  $kontrak_matakuliah
     * @return \Illuminate\Http\Response
     */
    public function show(kontrak_matakuliah $kontrak_matakuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kontrak_matakuliah  $kontrak_matakuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(kontrak_matakuliah $kontrak_matakuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kontrak_matakuliah  $kontrak_matakuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kontrak_matakuliah $kontrak_matakuliah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kontrak_matakuliah  $kontrak_matakuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = kontrak_matakuliah::find($id);
        $data ->delete();
        return redirect()->back();
    }
}
