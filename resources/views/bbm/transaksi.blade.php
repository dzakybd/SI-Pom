@extends('app')
@section('title')
	Transaksi BBM
@endsection

@section('smallcontent-header')
	BBM / Transaksi BBM
@endsection

@section('content-header')
	Transaksi
@endsection

@section('content')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/public/assets/css/stylems.css">
	<link rel="stylesheet" type="text/css" href="/public/assets/css/poi.css">
	<link rel="stylesheet" type="text/css" href="/public/assets/css/select2.css">
	<style type="text/css">
		.keterangan-h2{
			margin :0px !important;
			font-size: 20px;
		}
		.kosong {
	        margin: 0px !important;
	        border: 2px dashed #bbb;
	        -moz-border-radius: 5px;
	        -webkit-border-radius: 5px;
	        border-radius: 5px;
	        padding: 9em;
	        text-align: center;
	        color: #bbb;
	        height: 55vh;
	    }

	    .search-keterangan{
	    	height: 23em;
	    	overflow-y: scroll;
	    }

	    .jumlah{
	    	font-size: 30px;
	    	margin-top: 5px !important;
	    	margin-bottom: 10px !important;
	    }
	</style>
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">

	<div class="bbm-message alert-dismissible"> 

	</div>
	<input type="hidden" name="crumb" id="" value="" />
	<div class="row">
		<div class="col-xs-9">
			<div class="form-group">
				<label for="instansi">Instansi</label>
				<select id="instansiPick" class="form-control" style="width: 100%;" name="instansi">	
				</select>
			</div>
		</div>

		<div class="col-xs-3 text-right" style="top: 1.8em;">
			<a href="#" class="btn btn-default tambah-btn" style="width: 100%;">Tambah Instansi</a>
		</div>
	</div>

	<div class="row kosong instansi-kosong">
	    <h2>Detail Keterangan akan terlihat di sini</h2>
	</div>


	<div class="row keterangan-action hidden">
		
	</div>
@endsection