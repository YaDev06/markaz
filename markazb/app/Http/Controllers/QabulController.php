<?php

namespace App\Http\Controllers;

use App\Models\Qabul;
use App\Models\Kurs;
use App\Http\Requests\StoreQabulRequest;
use App\Http\Requests\UpdateQabulRequest;
use App\Models\kursKun;
use App\Models\kursVaqt;

class QabulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurs = Kurs::all();
        $kursVaqt = kursVaqt::all();
        $kursKun = kursKun::all();
        $qabul = Qabul::all();
        return view('qabul.index',['kurs'=>$kurs]);
        // return $qabul; 
        // qoganlariyam kk
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
     * @param  \App\Http\Requests\StoreQabulRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQabulRequest $request)
    {
        Qabul::create([
            'name'=> $request->name,
            'tel1'=> $request->tel1,
            'tel2'=> $request->tel2,
            'kurs'=> $request->kurs,
            'vaqt'=> $request->vaqt,
            'izoh'=> $request->izoh,
            'admin_id'=> $request->admin_id,
        ]);
        return response()->json('succesfully');
    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Qabul  $qabul
     * @return \Illuminate\Http\Response
     */
    public function show(Qabul $qabul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Qabul  $qabul
     * @return \Illuminate\Http\Response
     */
    public function edit(Qabul $qabul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQabulRequest  $request
     * @param  \App\Models\Qabul  $qabul
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQabulRequest $request, Qabul $qabul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Qabul  $qabul
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qabul $qabul)
    {
        //
    }
}