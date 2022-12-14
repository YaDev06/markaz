<?php

namespace App\Http\Controllers;

use App\Models\Guruh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GuruhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('guruh.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guruh  $guruh
     * @return \Illuminate\Http\Response
     */
    public function show(Guruh $guruh)
    {
        $g = DB::table('guruhs')->join('teachers','teachers.id','=','guruhs.g_teacher')->join('kurs','kurs.id','=','guruhs.kurs_id')->join('kurs_kuns','kurs_kuns.id','=','guruhs.g_kun')->join('kurs_vaqts','kurs_vaqts.k_id','=','guruhs.g_vaqt'  )->where('guruhs.id','=',$guruh->id)->first();
        // return view('guruh.index',['guruh'=>$guruh]);
        // $p = DB::table('')
        return view('guruh.show',['guruh'=>$g]);
       
    }
    public function gSalbiy()
    {
        $qabulda = DB::table('qabuls')->join('kurs','kurs.id','=','qabuls.kurs')->where('qabuls.status','=',2)->get();
        return response()->json(['salbiy'=>$qabulda]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guruh  $guruh
     * @return \Illuminate\Http\Response
     */
    public function edit(Guruh $guruh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guruh  $guruh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guruh $guruh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guruh  $guruh
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guruh $guruh)
    {
        //
    }
}