@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center">Liste d'article</h1>
@stop

@section('content')

<div class="box-body">

    <div class="table-responsive">

      <table class="table no-margin text-center">
        <thead>
        <tr>
          <th>Order ID</th>
          <th>Titre</th>
          <th>Action</th>
        </tr>
        </thead>
        @foreach ($article as $item)
            <tbody>
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->titre}}</td>
                    <td>
                        <div class="row">
                            <a href="/show-article/{{$item->id}}">
                                <button class="btn btn-primary ">Infos</button>
                            </a>
                            <a href="/edit-article/{{$item->id}}">
                                <button class="btn btn-success  mx-2">Edit</button>
                            </a>
                            <form action="/delete-article/{{$item->id}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger  ">Enlever l'annonce</button>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
        @endforeach
        

      </table>
    </div>

</div>

@stop
