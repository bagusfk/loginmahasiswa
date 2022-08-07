<?php

namespace App\Http\Controllers;

use App\Models\semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semester=semester::all();
        // return view('semester/semester', compact('semester'));

        return response()->json([
            'semester'=> $semester
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        $semester = new semester;
        $semester->semester = $request->input('semester');
        // dd($semester);
        $semester->save();

        return redirect('/semester');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function show(semester $semester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function edit(semester $semester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        // dd($data);
        Semester::where(['id'=>$id])->update([
            'semester'=>$data['semester']
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Semester::find($id);
        $data ->delete();
        return redirect()->back();
    }
}
