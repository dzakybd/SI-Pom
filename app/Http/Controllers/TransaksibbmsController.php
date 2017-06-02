<?php

namespace App\Http\Controllers;

use App\transaksibbms;
use DB;
use App\instansibbms;
use App\keteranganbbms;
use Illuminate\Http\Request;

class TransaksibbmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insta = instansibbms::all();
        return view ('bbm.transaksi',compact('insta'));
        //return view ('bbm.transaksiedit');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    public function hapusdatatransaksi($id)
    {
        $temp = transaksibbms::where('idtransaksi', $id)->pluck('instansit');
        $transaksibbms = new transaksibbms();
        $transaksibbms->destroy($id);
        return redirect('/input/'.$temp[0]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        transaksibbms::create($request->all());
        return redirect('/input/'.$request['instansit']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\transaksibbms  $transaksibbms
     * @return \Illuminate\Http\Response
     */
    public function show($transaksibbms)
    {
        $insta = instansibbms::all();
        $ketinsta = keteranganbbms::all()->where('instansi', '=' , $transaksibbms);
        $namainsta = instansibbms::where('idinstansi', '=', $transaksibbms)->first();
        $report = \DB::table('transaksibbms')->leftJoin('bbms', 'bbms.idbbms', '=', 'transaksibbms.bbmt')
                                                ->leftJoin('keteranganbbms', 'keteranganbbms.idketerangan', '=', 'transaksibbms.keterangant')
                                                ->get()->where('instansit', $transaksibbms);
        $jumlahpos = \DB::table('transaksibbms')->where('tipe', '=', 'Masuk', 'and', 'instansit', '=', $transaksibbms)->sum('jumlah');
        $jumlahneg = \DB::table('transaksibbms')->where('tipe', '=', 'Keluar', 'and', 'instansit', '=', $transaksibbms)->sum('jumlah');
        $jumlah = $jumlahpos - $jumlahneg;
        return view ('bbm.transaksishow',compact('insta', 'namainsta', 'ketinsta', 'report', 'jumlah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\transaksibbms  $transaksibbms
     * @return \Illuminate\Http\Response
     */
    public function edit(transaksibbms $transaksibbms)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\transaksibbms  $transaksibbms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaksibbms $transaksibbms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\transaksibbms  $transaksibbms
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaksibbms $transaksibbms)
    {
        //
    }
}
