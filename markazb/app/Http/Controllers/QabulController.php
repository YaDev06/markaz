<?php

namespace App\Http\Controllers;

use App\Models\Qabul;
use App\Models\Kurs;
use App\Http\Requests\StoreQabulRequest;
use App\Http\Requests\UpdateQabulRequest;
use App\Models\Guruh;
use App\Models\kursKun;
use App\Models\kursVaqt;
use GuzzleHttp\Psr7\Response;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;

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
    public function showPupils()
    {
        $pupils = DB::table('qabuls')->join('kurs','kurs.id','=','qabuls.kurs')
        
        ->get();
        // $pupils = Qabul::all();
        return view('qabul.showPupils',['pupils'=>$pupils]);
        
    }
    public function guruhQabul()
    {
        $qabul1 = Qabul::where('status','=',0)->where('kun')->get();
        $kun = kursKun::all();
        $guruh = DB::table('guruhs')->join('kurs_kuns','kurs_kuns.id','=','guruhs.g_kun')->get();
        return view('qabul.guruhQabul',['qabulTrue'=>$qabul1,'kunlar'=>$kun,'guruh'=>$guruh]);
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
     * @param  \App\Http\Requests\StoreQabulRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQabulRequest $request)
    {
       $kurs = $request->input('kurs_name');
        
        Qabul::create([
            'name'=> $request->ism,
            'tel1'=> $request->tel1,
            'tel2'=> $request->tel2,
            'kurs'=> $kurs[0],
            // 'kurs_1'=>$kurs[1],
            // 'kurs_2'=>$kurs[2],
            'vaqt'=>$request->kurs_vaqt,
            'kun'=>$request->kurs_kun,
            
            'izoh'=> $request->izoh,
            'admin_id'=> '1',
        ]);
        return back()->with('success','Muvaffaqiyatli!');
        // return response()->json('succesfully');
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
      
    }
    public function statusCheck($id)
    {
       
        $qabulid = DB::table('qabuls')->where('qabuls.qabul_id','=',$id);
        $qabulid->update([
           'status'=>0
        ]);
        return back();
    }
    public function statusFail($id)
    {
        $qabulid = DB::table('qabuls')->where('qabuls.qabul_id','=',$id);
        $qabulid->update([
           'status'=>2
        ]);
        return back();
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