<?php

namespace App\Http\Controllers;

use App\Models\absen;
use App\Models\matakuliah;
use App\Models\user;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matakuliah=matakuliah::all();
        $mahasiswa=user::all();
        $absensi=absen::all();

        return view('absensi.absensi',compact('absensi','mahasiswa','matakuliah'));
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
        $absensi = new absen;
        $absensi->mahasiswa_id = $request->input('mahasiswa_id');
        $absensi->matakuliah_id = $request->input('matakuliah_id');
        $absensi->keterangan = $request->input('absensi');
        // dd($request->all());
        $absensi->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function show(absen $absen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function edit(absen $absen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, absen $absen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function destroy(absen $absen)
    {
        //
    }
}
