<?php

namespace App\Http\Controllers;

use App\Models\Tolov;
use Illuminate\Http\Request;

class TolovController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tolov.index');
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
     * @param  \App\Models\Tolov  $tolov
     * @return \Illuminate\Http\Response
     */
    public function show(Tolov $tolov)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tolov  $tolov
     * @return \Illuminate\Http\Response
     */
    public function edit(Tolov $tolov)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tolov  $tolov
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tolov $tolov)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tolov  $tolov
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tolov $tolov)
    {
        //
    }
}