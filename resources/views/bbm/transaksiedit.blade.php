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
		<form action="/action_page.php">
		<div class="col-xs-8">
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
		<div class="col-xs-3 text-right" style="top: 1.8em;">
			<button id="myBtn" class="btn btn-default tambah-btn" style="width: 100%;">Tambah Instansi</button>
		</div>
	</div>

	<div class="row keterangan-action">
    	<style type="text/css">
			.activewell{
				background-color: #337ab7;
			}

			.activewell h2 a, .activewell p{
				color: white;
			}
		</style>

		<div class="col-xs-3">
			<input type="hidden" id="jumlahhidden" value="Rp. 0,-">
			<button id="myBtnEdit" class="myBtnSEdit btn-primary" style="width: 100%;margin-bottom: 1em;">Tambah Keterangan</button>
			<div class="search-keterangan">

				<div class="well well-pick activewell" style="padding: 0.6em !important; margin-bottom:5px !important;">
					<h2 class="keterangan-h2" style="color:white;">Report Polisi</h2>
				</div>

				<div class="well" style="padding: 0.6em !important; margin-bottom:5px !important;">
					<h2 class="keterangan-h2">Brimob</h2>
					<p style="font-size:11px;">Ada 2 Transaksi</p>
				</div>
				<div class="well" style="padding: 0.6em !important; margin-bottom:5px !important;">
					<h2 class="keterangan-h2">Satpol PP</h2>
					<p style="font-size:11px;">Ada 5 Transaksi</p>
				</div>


			</div>
		</div>

		<div class="col-xs-9">
			<div class="detail-keterangan">
				<h2 class="text-center">Report BBM</h2>
					<div class="col-xs-12">
						<br>
					</div>
					<div class="col-xs-4">
						<div class="well text-center">
							<h2><b>Pertalite</b></h2>
							<h3>208.700 Liter</h3>
						</div>
					</div>
			</div>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="detail">
					<table class="table table-bordered">
						<thead>
							<tr><th class="text-center" style="width:">
								Tanggal
							</th>
							<th class="text-center" style="width:">
								Jenis BBM
							</th>
							<th class="text-center" style="width:">
								Keterangan
							</th>
							<th class="text-center" style="width:">
								Jumlah
							</th>
						</tr></thead>
						<tbody class="filter-here">
							<tr>
								<td>1 Mei 2017</td>
								<td>Pertalite</td>
								<td>Brimob</td>
								<td>
									- 100.000
							</td>
						</tr>
							<tr>
								<td>1 Mei 2017</td>
								<td>Pertalite</td>
								<td>Satpol PP</td>
								<td>
									+ 10.000
							</td>
						</tr>
						<tr>
							<td colspan="3">Jumlah</td>
							<td>-90.000</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div id="myModal" class="modal">

  <!-- Modal content -->
	  <div class="modal-content">
		    <div class="modal-header">
		      <span class="close">&times;</span>
		      <h2>TAMBAH Instansi :</h2>
		    </div>
		    <div class="modal-body">
			  <form action="/action_page.php">
			    <label for="fname">Nama Instansi</label>
			    <input type="text" id="fname" name="firstname" placeholder="Isi Nama Instansi..">
			  </form>
		    </div>
		    <div class="modal-footer">
				<input type="submit" value="Save">
		    </div>
	  </div>

	</div>

	<div id="myModalEdit" class="modal">

  <!-- Modal content -->
	  <div class="modal-content">
		    <div class="modal-header">
		      <span class="close">&times;</span>
		      <h2>TAMBAH Keterangan :</h2>
		    </div>
		    <div class="modal-body">
			  <form action="/action_page.php">
			    <label for="fname">Nama Keterangan</label>
			    <input type="text" id="fname" name="firstname" placeholder="Isi Keterangan..">
			  </form>
		    </div>
		    <div class="modal-footer">
				<input type="submit" value="Save">
		    </div>
	  </div>

	</div>
<script>
	// Get the modal
	var modal = document.getElementById('myModal');
	var modaledit = document.getElementById('myModalEdit');

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");
	var $lba = document.getElementsByClassName("myBtnS");
	var btnedit = document.getElementById("myBtnEdit");
	var $lbaedit = document.getElementsByClassName("myBtnSEdit");
	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal 
	btn.onclick = function() {
	    modal.style.display = "block";
	}
	btnedit.onclick = function() {
	    modaledit.style.display = "block";
	}
	// You nice function:
	function myPopup() {
	    modal.style.display = "block";
	}
	function myPopupEdit() {
	    modaledit.style.display = "block";
	}

	// Assign a click event handler to every element:
	for(var i=0; i<$lba.length; i++) {
	    $lba[i].onclick = myPopup;
	}
	for(var i=0; i<$lbaedit.length; i++) {
	    $lbaedit[i].onclick = myPopupEdit;
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	    modal.style.display = "none";
	    modaledit.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == modal || event.target == modaledit) {
	        modal.style.display = "none";
	        modaledit.style.display = "none";
	    }
	}
</script>
@endsection