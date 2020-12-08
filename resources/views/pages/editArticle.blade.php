@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')

    <h1>Modifier l'article</h1>

    <form action="/update-article/{{$article->id}}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
        <label>Titre de l'article</label>
        <input name="titre" type="text" class="form-control" value="{{$article->titre}}">
        </div>
        <div class="form-group">
        <label>Texte</label>
        <input name="texte" type="text" class="form-control" value="{{$article->texte}}">
        </div>
        <label>Votre utilisateur</label>
        <div class="form-check bg-white border">
            
            @foreach ($user as $item)
                <div class="row pl-4 py-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="{{$item->id}}">
                    <label class="form-check-label" name='user_id' for="{{$item->id}}">
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
