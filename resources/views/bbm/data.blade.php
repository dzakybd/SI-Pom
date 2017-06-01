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
        <button id="myBtn" class="btn btn-default add-bbm"><i class="fa fa-plus"></i> Tambah BBM</button>
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
                    <a href="/dataedit/{{$m->idbbms}}"><button class="btn btn-primary">Edit</button></a>
                    <a href="/hapusdatabbm/{{$m->idbbms}}"><button type='submit' class="btn btn-default">Hapus</button></a>
                </div>
            </div>
          </div>
        @endforeach
      @endif
      
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
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").show();
    });
    $(".close").click(function(){
        $("#myModal").hide();
    });
    $(window).click(function(event){
        if (event.target == $("#myModal")) {
            $("#myModal").hide();
        }
    });
});

</script>
@endsection
