@extends('app')
@section('title')
	Input BBM
@endsection

@section('smallcontent-header')
	BBM / Input BBM
@endsection

@section('content-header')
	Input
@endsection

@section('content')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/public/assets/css/stylems.css">
	<link rel="stylesheet" type="text/css" href="/public/assets/css/poi.css">
	<link rel="stylesheet" type="text/css" href="/public/assets/css/select2.css">

	<style type="text/css">
		.add-table {
	        margin: 0px !important;
	        border: 2px dashed #bbb;
	        -moz-border-radius: 5px;
	        -webkit-border-radius: 5px;
	        border-radius: 5px;
	        padding: .3em;
	        text-align: center;
	    }

	    .add-table:hover {
	        margin: 0px !important;
	        border: 4px dashed black;
	        -moz-border-radius: 5px;
	        -webkit-border-radius: 5px;
	        border-radius: 5px;
	        padding: .3em;
	        text-align: center;
	        color: #bbb;
	    }

	    .add-table h2 a {
	    	color : #aaa;
	    }

	    .add-table h2 a:hover {
	    	color : black;
	    }
	</style>
	<div class="input-message"> 

	</div>

	<div class="form-group">
		<label for="instansi">Instansi</label>
		<select id="instansiPick" class="form-control" style="width: 100%;" name="instansi">
		</select>
	</div>

	<table class="table table-bordered" style="margin-bottom: 10px;">
		<thead>
			<tr>
				<th>Tanggal</th>
				<th>Keterangan</th>
				<th>jenisBBM</th>
				<th>Masuk/Keluar</th>
				<th>Jumlah</th>
				<th>Hapus</th>
			</tr>
		</thead>
		<tbody class="input-body">
			<tr class="empty-input">
				<td colspan="5" class="text-center"> Pilih Instansi Terlebih Dahulu </td>
			</tr>
		</tbody>
	</table>

	<input type="hidden" name="crumb" id="" value="">

	<a href="#" class="btn btn-primary text-center save-btn hidden" style="width: 100%; margin-bottom: 10px;" onclick="saveTransaksi()">Save Transaksi BBM</a>

	<div class="add-table text-center hidden">
		<h2><a href="#" class="plus-button" onclick="tambahInput()"><i class="fa fa-plus"></i></a></h2>
	</div>
@endsection