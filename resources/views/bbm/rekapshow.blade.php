@extends('app')
@section('title')
	Rekap BBM
@endsection

@section('smallcontent-header')
	BBM / Rekap BBM
@endsection

@section('content-header')
	Rekap
@endsection

@section('content')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/public/assets/css/stylems.css">
	<link rel="stylesheet" type="text/css" href="/public/assets/css/poi.css">
	<link rel="stylesheet" type="text/css" href="/public/assets/css/select2.css">

	<style type="text/css">
		.ui-datepicker-calendar {
			display: none;
		}
		.ui-datepicker-month, .ui-datepicker-year{
			color:black;
		}

		@media print{
			.search-bar{
				display: none;
			}
		}
	</style>
	<h2 class="tanggal-rekap"></h2>
	<div class="row search-bar" style="margin-bottom: 10px;">
	<input type="hidden" name="crumb" id="" value="">
		<form action="/action_page.php">
			<div class="col-xs-3">
				<input name="startDate" id="startDate" class="mypicker form-control" placeholder="Pilih Bulan" />
			</div>
			<div class="col-xs-3">
				<select id="instansiPick" class="form-control" style="width: 100%;" name="instansi">
				</select>
			</div>
			<div class="col-xs-3">
				<select class="form-control" id="">
					<!-- Diisi Jenis BBM!-->
				</select>
			</div>
			<div class="col-xs-1">
				<div class="form-group">
					<button class="btn btn-primary">Cari</button>
				</div>
			</div>
		</form>
	</div>

	<div class="rekap-result">
		<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Instansi</th>
				<th>Keterangan</th>
				<th>BBM</th>
				<th>Masuk/Keluar</th>
				<th>Saldo</th>
			</tr>
		</thead>
		<tbody class="body-rekap">
      		<tr>
			<td>0</td>
			<td>1 Mei 2017</td>
			<td>Polisi</td>
			<td>Brimob</td>
			<td>Pertalite</td>
			<td>Keluar</td>
			<td>100.000</td>
		</tr>
		<tr>
			<td>1</td>
			<td>1 Mei 2017</td>
			<td>Polisi</td>
			<td>Brimob</td>
			<td>Pertalite</td>
			<td>Masuk</td>
			<td>10.000</td>
		</tr>
	<tr>
			<td colspan="6">Jumlah</td>
			<td>208.700</td>
		</tr>

	</tbody>
	</table>
	</div>
@endsection