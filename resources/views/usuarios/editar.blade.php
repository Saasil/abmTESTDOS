@extends('layouts.app')

@section('content')
  <h1>Editar Usuario</h1>
  <a class="btn btn-default" href="/usuario/{{$usuario->id}}">Volver</a>

  {!! Form::open(['action' => ['UsuariosController@update', $usuario->id], 'method' => 'POST']) !!}
    {{Form::bsText('nombre', $usuario->nombre)}}
    {{Form::bsText('email', $usuario->email)}}
    {{Form::bsText('telefono', $usuario->telefono)}}
    {{Form::hidden('_method', 'PUT')}}
    {{Form::bsSubmit('Enviar', ['class' => 'btn btn-succes float-right'])}}
  {!! Form::close() !!}
@endsection
