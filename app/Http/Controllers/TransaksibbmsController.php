<?php

namespace App\Http\Controllers;

use App\transaksibbms;
use DB;
use App\instansibbms;
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
        return view ('bbm.transaksiedit');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $insta = instansibbms::pluck('idinstansi','namaInstansi');
        return view ('bbm.transaksi',compact('insta'));
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
     * @param  \App\transaksibbms  $transaksibbms
     * @return \Illuminate\Http\Response
     */
    public function show(transaksibbms $transaksibbms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\transaksibbms  $transaksibbms
     * @return \Illuminate\Http\Response
     */
    public function edit(transaksibbms $transaksibbms)
    {
        //
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
