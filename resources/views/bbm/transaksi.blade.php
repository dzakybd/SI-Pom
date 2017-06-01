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

		.modal {
		    display: none; /* Hidden by default */
		    position: fixed; /* Stay in place */
		    z-index: 1; /* Sit on top */
		    padding-top: 100px; /* Location of the box */
		    left: 0;
		    top: 0;
		    width: 100%; /* Full width */
		    height: 100%; /* Full height */
		    overflow: auto; /* Enable scroll if needed */
		    background-color: rgb(0,0,0); /* Fallback color */
		    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
		    position: relative;
		    background-color: #fefefe;
		    margin: auto;
		    padding: 0;
		    border: 1px solid #888;
		    width: 80%;
		    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
		    -webkit-animation-name: animatetop;
		    -webkit-animation-duration: 0.4s;
		    animation-name: animatetop;
		    animation-duration: 0.4s
		}

		/* Add Animation */
		@-webkit-keyframes animatetop {
		    from {top:-300px; opacity:0} 
		    to {top:0; opacity:1}
		}

		@keyframes animatetop {
		    from {top:-300px; opacity:0}
		    to {top:0; opacity:1}
		}

		/* The Close Button */
		.close {
		    color: white;
		    float: right;
		    font-size: 28px;
		    font-weight: bold;
		}

		.close:hover,
		.close:focus {
		    color: #000;
		    text-decoration: none;
		    cursor: pointer;
		}

		.modal-header {
		    padding: 2px 16px;
		    background-color: #FFFFFF;
		    color: black;
		}

		.modal-body {padding: 2px 16px;}

		.modal-footer {
		    padding: 2px 16px;
		    background-color: #FFFFFF;
		    color: black;
		}

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
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">


	<div class="bbm-message alert-dismissible"> 

	</div>
	<input type="hidden" name="crumb" id="" value="" />
	<div class="row">
		<div class="col-xs-8">
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
		<div class="col-xs-3 text-right" style="top: 1.8em;">
			<button id="myBtn" class="btn btn-default tambah-btn" style="width: 100%;">Tambah Instansi</button>
		</div>
	</div>

	<div class="row kosong instansi-kosong">
	    <h2>Detail Keterangan akan terlihat di sini</h2>
	</div>


	<div class="row keterangan-action hidden">
		
	</div>

	<div id="myModal" class="modal">

  <!-- Modal content -->
	  <div class="modal-content">
		    <div class="modal-header">
		      <span class="close">&times;</span>
		      <h2>TAMBAH Instansi :</h2>
		    </div>
		    <div class="modal-body">
			  	{!! Form::open(array('url' => '/instansi')) !!}
			        {!! Form::label('namaInstansi', 'Nama Instansi') !!}
			        {!! Form::text('namaInstansi',null, array('placeholder'=>'Nama Instansi')) !!}
		    </div>
		    <div class="modal-footer">
				    {!! Form::button(' Submit', array('type' => 'submit'))!!}
			    {!! Form::close()!!}
		    </div>
	  </div>

	</div>
	<script>
		function link() {	
		 var selectedInstansi = document.getElementById('instansiPick');
		 var selected = selectedInstansi.options[selectedInstansi.selectedIndex].value;
		 document.getElementById("editlink").href = "/transaksibbm/"+selected;
		}
	</script>
<script>
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");
	var $lba = document.getElementsByClassName("myBtnS");
	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal 
	btn.onclick = function() {
	    modal.style.display = "block";
	}
	// You nice function:
	function myPopup() {
	    modal.style.display = "block";
	}

	// Assign a click event handler to every element:
	for(var i=0; i<$lba.length; i++) {
	    $lba[i].onclick = myPopup;
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	    modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}
</script>
@endsection