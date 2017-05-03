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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/public/assets/css/stylems.css">
	<link rel="stylesheet" type="text/css" href="/public/assets/css/poi.css">
	<link rel="stylesheet" type="text/css" href="/public/assets/css/select2.css">

	<div class="data-message"> 

	</div>
	<div class="row">
	  <input type="hidden" name="crumb" value="" id="crumb"/>
	  <div class="col-xs-12" style="margin-bottom:10px;">
	    <a href="#" class="btn btn-default add-bbm" onclick="tambahBBM()"><i class="fa fa-plus"></i> Tambah BBM</a>
	  </div>
	  <div class="bbm-here">
	  
	  </div>
	  
	</div>
@endsection