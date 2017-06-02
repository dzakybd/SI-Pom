<?php

namespace App\Http\Controllers;

use App\instansibbms;
use App\keteranganbbms;
use App\transaksibbms;
use App\bbms;
use Illuminate\Http\Request;

class InstansibbmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insta = instansibbms::all();
        return view ('bbm.input',compact('insta'));
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
        $instansibbm = new instansibbms;
        $instansibbm->namaInstansi = $request['namaInstansi'];
        $instansibbm->save();
        return redirect('/transaksibbm');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\instansibbms  $instansibbms
     * @return \Illuminate\Http\Response
     */
    public function show($instansibbms)
    {
        $insta = instansibbms::all();
        $ketinput = keteranganbbms::all()->where('instansi', $instansibbms)->pluck('ket', 'idketerangan');
        $bbminput = bbms::all()->pluck('namaBBM', 'idbbms');
        $transinput = \DB::table('transaksibbms')->leftJoin('bbms', 'bbms.idbbms', '=', 'transaksibbms.bbmt')
                                                ->leftJoin('keteranganbbms', 'keteranganbbms.idketerangan', '=', 'transaksibbms.keterangant')
                                                ->get()->where('instansit', $instansibbms);
        $namainsta = instansibbms::all()->where('idinstansi',$instansibbms)->pluck('namaInstansi');
        return view ('bbm.inputshow',compact('insta', 'ketinput', 'bbminput', 'instansibbms', 'transinput', 'namainsta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\instansibbms  $instansibbms
     * @return \Illuminate\Http\Response
     */
    public function edit(instansibbms $instansibbms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\instansibbms  $instansibbms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, instansibbms $instansibbms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\instansibbms  $instansibbms
     * @return \Illuminate\Http\Response
     */
    public function destroy(instansibbms $instansibbms)
    {
        //
    }
}
