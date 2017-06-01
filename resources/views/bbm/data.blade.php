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
      <div class="col-xs-12" style="margin-bottom:10px;">
        <button id="myBtn" class="myBtnS btn btn-default add-bbm"><i class="fa fa-plus"></i> Tambah BBM</button>
      </div>
      @if($bbms->count())
        <?php $i = 0 ?>
        @foreach($bbms as $m)
        <?php $i++ ?>
          <div class="bbm-here">
            <div class="col-xs-3">
                <div class="well">
                    <h2>{{$i}} <b>{{$m->namaBBM}}</b></h2>
                    <p>Harga : Rp {{$m->harga}},-</p>
                    <button id="myBtnEdit" value="<?php echo $m->idbbms;?>" class="myBtnSEdit btn btn-primary">Edit</button>
                    <a href="/hapusdatabbm/{{$m->idbbms}}"><button type='submit' class="btn btn-default">Hapus</button></a>
                </div>
            </div>
          </div>
        @endforeach
      @endif
      
    </div>

<div id="myModalEdit" class="modal">

  <!-- Modal content -->
    <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Edit BBM :</h2>
    </div>
    <div class="modal-body">
      {!! Form::model($bbms[0],['method'=>'PATCH','action'=>['BbmsController@update',$bbms[0]->idbbms]]) !!}
        {!! Form::label('namaBBM', 'Nama BBM') !!}
        {!! Form::text('namaBBM',null, array('placeholder'=>'Nama BBM')) !!}
        {!! Form::label('harga', 'Harga') !!}
        {!! Form::text('harga',null, array('placeholder'=>'Harga')) !!}
        {!! Form::label('kode', 'Kode') !!}
        {!! Form::text('kode',null, array('placeholder'=>'Kode')) !!}
    </div>
    <div class="modal-footer">
    {!! Form::button('Update', array('type' => 'submit'))!!}
    {!! Form::close()!!}
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
      {!! Form::open(array('url' => '/databbm')) !!}
        {!! Form::label('namaBBM', 'Nama BBM') !!}
        {!! Form::text('namaBBM',null, array('placeholder'=>'Nama BBM')) !!}
        {!! Form::label('harga', 'Harga') !!}
        {!! Form::text('harga',null, array('placeholder'=>'Harga')) !!}
        {!! Form::label('kode', 'Kode') !!}
        {!! Form::text('kode',null, array('placeholder'=>'Kode')) !!}
    </div>
    <div class="modal-footer">
    {!! Form::button(' Submit', array('type' => 'submit'))!!}
    {!! Form::close()!!}
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
