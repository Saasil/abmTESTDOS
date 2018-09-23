<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Usuarios</title>
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">﻿
</head>
<body>

  <div class="container">

    @if(Session::has('success'))

      <div class="alert alert-success">

          {{ Session::get('success') }}

          @php

          Session::forget('success');

          @endphp

      </div>

    @endif

    @if(Session::has('editado'))

      <div class="alert alert-success">

          {{ Session::get('editado') }}

          @php

          Session::forget('editado');

          @endphp

      </div>

    @endif

    @yield('content')

  </div>

</body>
</html>
