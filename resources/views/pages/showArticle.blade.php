@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')



  <div class="row mx-auto container">
    <div class="col-6 ">
      <img src="{{asset('images/' . $article->photo)}}" height="420" width="327">
    </div>
    <div class="col-6">
      <div class="product-text">
      <h1>{{$article->titre}}</h1>
        <p>Oeuvre de Collectoon</p>
        <p>{{$article->texte}}</p>
      </div>
      <div class="product-price-btn">
        <p><span>78</span>$</p>
        <button type="button">buy now</button>
      </div>
    </div>
  </div>

@stop
