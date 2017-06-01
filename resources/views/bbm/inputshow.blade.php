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
			<div class="col-xs-11">
				<div class="form-group">
						<label for="instansi"> Cari Instansi</label>
						<select id="instansiPick" class="form-control" style="width: 100%;" name="instansi" onchange="link()">
						 	<option value=""></option>
							 @if($insta->count())
					          @foreach($insta as $m)
							  <option value="{{$m->idinstansi}}">{{$m->namaInstansi}}</option>
							  @endforeach
							 @endif
							</select>
					</div>
			</div>
			<div class="col-xs-1" style="top: 1.8em;">
					<div class="form-group">
						<a href="" id="editlink"><button class="btn btn-primary">Cari</button></a>
					</div>
				</div>
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

		  </tr>
		        {!! Form::open(array('url' => '/input')) !!}
		        <tr>
		        <td>
					{!! Form::text('tanggal',null, array('class' => 'form-control datepick','placeholder'=>'Tanggal')) !!}	
		        </td>
		        <td>
					{!! Form::select('keterangant', $ketinput ,null , array('class' => 'form-control whichKeterangan')) !!}	
		        </td>
		        <td>
					{!! Form::select('bbmt', $bbminput ,null , array('class' => 'form-control bbmPick')) !!}	
		        </td>
				<td>
					{!! Form::select('tipe', ['Keluar', 'Masuk'],null ,array('class' => 'form-control choice')) !!}
				</td>
				<td>
					{!! Form::text('jumlah',null, array('class' => 'form-control jumlah','placeholder'=>'Jumlah')) !!}
					<input type="text" name="jumlah" id="jumlah" class="form-control jumlah"> 
				</td>
				<td class="text-center">
					<a href="#" onclick=""><i class="fa fa-times"></i></a>
				</td>
			</tr>
		</tbody>
	</table>

	<a href="#" class="btn btn-primary text-center save-btn" style="width: 100%; margin-bottom: 10px;" onclick="">Save Transaksi BBM</a>
@endsection