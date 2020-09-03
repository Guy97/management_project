@extends('layouts.app')
@section('content')
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<div class="row" style="text-align: center;">
  <div class="col-md-6">
    <button id="createbut">Crea</button>
  </div>
  <div class="col-md-6">
    <button id="viewbut">Visualizza tutti</button>
  </div>
</div> 
<div class="container" id="create" style="display: none;">

<form class="confirm" action="/new_article" method="post" enctype="multipart/form-data">
      @csrf
      <div class = "companyInfoContainer">
      
      <div class="row">
        <div class="col form-group">
          <label for="companyName">Nome macchinario</label>
          <input name="name" type="text" class="form-control" id="companyName" required>
          @error('name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

      </div>

      <div class="row">
        <div class="col form-group">
          <label for="companyEmail">Codice</label>
          <input name="code" type="text" class="form-control" id="companyEmail" required>
          @error('code')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

      </div>

      <div class="row">
        <div class="col form-group">
          <label for="companyWeb">Prezzo</label>
          <input name="price" type="text" class="form-control" id="companyWeb">
          @error('price')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

      </div>

      <div class="row">
        <div class="col form-group">
          <label for="companyPhone">Prezzo montaggio</label>
          <input name="price_install" type="text" class="form-control" id="companyPhone">
          @error('price_install')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

      </div>
      </div>


      <div class="row">
        <div class="col form-group">
          <label for="adsTitle">Tempo d'installazione</label>
          <input name="time_install" type="text" class="form-control" id="adsTitle">
          @error('time_install')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>
      </div>

      

      
      <div class="row">
        <div class="col form-group">
          <label for="adsText">Prezzo di trasporto</label>
          <input name="price_transport" type="text" class="form-control" id="adsText">
          @error('price_transport')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

      </div>
      

      <div class="row" align="left">
        <div class="col">
          <div>Immagine articolo</div>
        </div>
      </div>
      <div class="row" align="left">
        <div class="col">
          <!-- <form action="/action_page.php"> -->
            <input type="file" id="myFile" name="image_prod">
            @error('image_prod')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
          <!-- </form> -->
        </div>
      </div><br>


      

      <div class="row rowCTA" align="center">
        <div class = "col"><button type="submit" name="submit" class="btn btn-primary">Invia annuncio</button></div>
      </div>
      </form>
    </div>

    <div class="container" id="viewall">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif
    <div class="row">
    @if (count($products) < 1)
      <h2>Non è stato caricato ancora nessun prodotto</h2>
    @endif
    @foreach ($products as $product)
      <div class="col-md-4">
      {{$product->name}}
      </div>
      <div class="col-md-4">
      {{$product->price}}
      </div>
      <div class="col-md-4">
      <img class="img-thumbnail" src="{{asset('/storage/products/' .$product->image_prod)}}" alt="Logo">
      </div>
    @endforeach
    </div>
    </div>
    <script>
$(document).ready(function(){
  $("#createbut").click(function(){
    $("#create").show();
    $("#viewall").hide();
  });
  $("#viewbut").click(function(){
    $("#create").hide();
    $("#viewall").show();
  });
});
</script>
@endsection