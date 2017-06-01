@extends('app')
@section('title')
    Data BBM
@endsection

@section('smallcontent-header')
    BBM / Data BBM
@endsection

@section('content-header')
    Data
@endsection

@section('content')

<style>

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 6%;
    background-color: #000000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div.ketceh{
    border-radius: 5px;
    background-color: #f2f2f2
    padding: 20px;
}
</style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/public/assets/css/stylems.css">
    <link rel="stylesheet" type="text/css" href="/public/assets/css/poi.css">
    <link rel="stylesheet" type="text/css" href="/public/assets/css/select2.css">
    <div class="data-message"> 
    </div>
    <div class="row">
      <input type="hidden" name="crumb" value="" id="crumb"/>
    
      {!! Form::model($bbmss,['method'=>'PATCH','action'=>['BbmsController@update',$bbmss->idbbms]]) !!}
        {!! Form::label('namaBBM', 'Nama BBM') !!}
        {!! Form::text('namaBBM',null, array('placeholder'=>'Nama BBM')) !!}
        {!! Form::label('harga', 'Harga') !!}
        {!! Form::text('harga',null, array('placeholder'=>'Harga')) !!}
        {!! Form::label('kode', 'Kode') !!}
        {!! Form::text('kode',null, array('placeholder'=>'Kode')) !!}
    {!! Form::button('Update', array('type' => 'submit'))!!}
    {!! Form::close()!!}
    </div>


@endsection
