<?php

namespace App\Http\Controllers;

use App\keteranganbbms;
use Illuminate\Http\Request;

class KeteranganbbmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekap = \DB::table('transaksibbms')->leftJoin('bbms', 'bbms.idbbms', '=', 'transaksibbms.bbmt')
                                            ->leftJoin('keteranganbbms', 'keteranganbbms.idketerangan', '=', 'transaksibbms.keterangant')
                                            ->leftJoin('instansibbms', 'instansibbms.idinstansi', '=', 'transaksibbms.instansit')
                                            ->get();
        return view ('bbm.rekap',compact('rekap'));
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
        keteranganbbms::create($request->all());
        return redirect('/transaksibbm/'.$request["instansi"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\keteranganbbms  $keteranganbbms
     * @return \Illuminate\Http\Response
     */
    public function show(keteranganbbms $keteranganbbms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\keteranganbbms  $keteranganbbms
     * @return \Illuminate\Http\Response
     */
    public function edit(keteranganbbms $keteranganbbms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\keteranganbbms  $keteranganbbms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, keteranganbbms $keteranganbbms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\keteranganbbms  $keteranganbbms
     * @return \Illuminate\Http\Response
     */
    public function destroy(keteranganbbms $keteranganbbms)
    {
        //
    }
}
