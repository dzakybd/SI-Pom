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
		<div class="row">
			<form action="/action_page.php">
				<div class="col-xs-11">
					<div class="form-group">
						<label for="instansi"> Cari Instansi</label>
						<select id="instansiPick" class="form-control" style="width: 100%;" name="instansi">
						</select>
					</div>
				</div>
				<div class="col-xs-1" style="top: 1.8em;">
					<div class="form-group">
						<button class="btn btn-primary">Cari</button>
					</div>
				</div>
			</form>
		</div>
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
	      <tr>
				<td><input class="form-control datepick" type="text" name="datepick"></td>
				<td>
				<select class="form-control whichKeterangan" id="whichKeterangan">
						<option value="">Brimob</option>
						<option value="">Satpol PP</option>
				</select>
				</td>
				<td>
					<select class="form-control bbmPick" id="bbmPick">
							<option value="">Pertalite</option>
					</select>
				</td>
				<td>
					<select class="form-control choice" id="choice">
						<option value="keluar">Keluar</option>
						<option value="masuk">Masuk</option>
					</select>
				</td>
				<td>
					<input type="text" name="jumlah" id="jumlah" class="form-control jumlah"> 
				</td>
				<td class="text-center">
					<a href="#" onclick=""><i class="fa fa-times"></i></a>
				</td>
			</tr>
		</tbody>
	</table>
	<input type="hidden" name="crumb" id="" value="">

	<a href="#" class="btn btn-primary text-center save-btn" style="width: 100%; margin-bottom: 10px;" onclick="">Save Transaksi BBM</a>
@endsection