<?php

namespace App\Http\Controllers;

use App\bbms;
use Illuminate\Http\Request;

class BbmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bbms = bbms::all();
        return view('bbm.data',compact('bbms'));
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

    public function hapusdatabbm($id)
    {
        $bbms = new bbms();
        $bbms->destroy($id);
        return redirect('/databbm');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        bbms::create($request->all());
        return redirect('/databbm');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bbms  $bbms
     * @return \Illuminate\Http\Response
     */
    public function show(bbms $bbms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bbms  $bbms
     * @return \Illuminate\Http\Response
     */
    public function edit($bbms)
    {
        $bbmss = bbms::findorfail($bbms);
        return view ('bbm.dataedit',compact('bbmss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bbms  $bbms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $bbms)
    {
        $bbmss = bbms::findorfail($bbms);
        $bbmss->update($request->all());
        return redirect('/databbm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bbms  $bbms
     * @return \Illuminate\Http\Response
     */
    public function destroy(bbms $bbms)
    {
        $bbmss = bbms::findorfail($bbms);
        $bbmss->delete();
        return redirect('/databbm');
    }
}
