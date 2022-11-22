<?php

namespace App\Http\Controllers;

use App\Models\Guruh;
use App\Models\GuruhQabulPupils;
use App\Models\Qabul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class GuruhQabulPupilsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
  
    public function index($id)
    {
       // get the current time
       $current = Carbon::now();

        // add 30 days to the current time
        $trialExpires = $current->addhours();
        $guruh = Guruh::find($id);
        $qabulda = DB::table('qabuls')->join('kurs','kurs.id','=','qabuls.kurs')->get();
        return view('qabul.guruhQabulPupils',['guruh'=>$guruh,'qabul'=>$qabulda,'vaqt'=>$trialExpires]);
    }
    public function add(Request $request)
    {
        // dd($request->check);
        $value  = $request->input('check');
        
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GuruhQabulPupils  $guruhQabulPupils
     * @return \Illuminate\Http\Response
     */
    public function show(GuruhQabulPupils $guruhQabulPupils)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GuruhQabulPupils  $guruhQabulPupils
     * @return \Illuminate\Http\Response
     */
    public function edit(GuruhQabulPupils $guruhQabulPupils)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GuruhQabulPupils  $guruhQabulPupils
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GuruhQabulPupils $guruhQabulPupils)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuruhQabulPupils  $guruhQabulPupils
     * @return \Illuminate\Http\Response
     */
    public function destroy(GuruhQabulPupils $guruhQabulPupils)
    {
        //
    }
}