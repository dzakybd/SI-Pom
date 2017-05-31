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
/* The Modal (background) */
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
    background-color: #f2f2f2;
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
	  <div class="col-xs-12" style="margin-bottom:10px;">
	    <button id="myBtn" class="btn btn-default add-bbm" onclick=""><i class="fa fa-plus"></i> Tambah BBM</button>
	  </div>
	  <div class="bbm-here">
	  	<div class="col-xs-3">
			<div class="well">
				<h2>[001] <b>Pertalite</b></h2>
				<p>Harga : Rp 10.000.000,-</p>
				<button id="myBtnS" class="btn btn-primary" onclick="">Edit</button>
				<a href="#" class="btn btn-default" onclick="">Hapus</a>
			</div>
		</div>
	  </div>
	  
	</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>TAMBAH BBM :</h2>
    </div>
    <div class="modal-body">
	  <form action="/action_page.php">
	    <label for="fname">Nama BBM</label>
	    <input type="text" id="fname" name="firstname" placeholder="Isi Nama BBM..">

	    <label for="lname">Harga BBM</label>
	    <input type="text" id="lname" name="lastname" placeholder="Harga BBM..">

	    <label for="lname">Kode BBM</label>
	    <input type="text" id="lname" name="lastname" placeholder="Kode BBM..">
	  
	  </form>
    </div>
    <div class="modal-footer">
		<input type="submit" value="Submit">
    </div>
  </div>

</div>

<div id="myModalS" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>TAMBAH BBM :</h2>
    </div>
    <div class="modal-body">
	  <form action="/action_page.php">
	    <label for="fname">Nama BBM</label>
	    <input type="text" id="fname" name="firstname" placeholder="Isi Nama BBM..">

	    <label for="lname">Harga BBM</label>
	    <input type="text" id="lname" name="lastname" placeholder="Harga BBM..">

	    <label for="lname">Kode BBM</label>
	    <input type="text" id="lname" name="lastname" placeholder="Kode BBM..">
	  
	  </form>
    </div>
    <div class="modal-footer">
		<input type="submit" value="Submit">
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
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

var modal = document.getElementById('myModalS');

// Get the button that opens the modal
var btn = document.getElementById("myBtnS");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
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