@extends('layouts.app')

@section('content')

<h1 style="text-align:center;">Usuarios</h1>

<h4><a href="usuario/create">Agregar usuario</a></h3>

@if(count($usuarios) > 0)

  @foreach($usuarios as $usuario)

    <div class="card">
      <div class="card-body">
        <h3><a href="/usuario/{{$usuario->id}}">{{$usuario->nombre}}</a></h3>
      </div>
    </div>

  @endforeach

@endif

@endsection
