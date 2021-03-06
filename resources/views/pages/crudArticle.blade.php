@extends('adminlte::page')

@section('title', 'AdminLTE')


@section('content')

    <h1>Create l'article</h1>


    <form action="/create-article" method="post" enctype="multipart/form-data">
        @csrf
        
       
       @if ($errors->any())
           <div class="alert alert-danger">
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif
        <div class="form-group">
        <label>Titre de l'article</label>
        <input name="titre" type="text" class="form-control"  placeholder="Ex : tome 83 One piece gold collect..." >
        </div>

        <div class="form-group">
        <label>Texte</label>
        <input name="texte" type="text" class="form-control" >
        </div>

        <div class="form-check bg-white border">
            @foreach ($user as $item)
                <div class="row pl-4 py-2">
                    <input class="form-check-input" type="radio" name='user_id' value='{{$item->id}}' id="{{$item->id}}">
                    <label class="form-check-label" for="{{$item->id}}" >
                    {{$item->name}}
                    </label>
                </div>
            @endforeach
        </div>

        <div class="form-group">
        <label>Photo de l'article</label>
        <input name="photo" type="file" class="form-control py-1" >
        </div>

        <button type="submit" class="btn btn-success">Creer un article</button>        
    </form>

@stop
