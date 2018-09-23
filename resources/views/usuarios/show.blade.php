<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Usuarios</title>
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">﻿
</head>
<body>

  <div class="container">

    <ul>
      <li>Nombre: {{$usuario->nombre}}</li>
      <li>Telefono: {{$usuario->telefono}}</li>
      <li>Email: {{$usuario->email}}</li>
    </ul>

    <h8><a href="/usuario/{{$usuario->id}}/editar">Editar</a></h3>

      {!! Form::open(['action' => ['UsuariosController@destroy', $usuario->id], 'method' => 'POST']) !!}
        {{Form::bsSubmit('Borrar', ['class' => 'btn btn-succes float-right'])}}
        {{Form::hidden('_method', 'DELETE')}}
      {!! Form::close() !!}

  </div>

</body>
</html>
