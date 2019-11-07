<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel</title>      
    </head>
    <body>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <form action="{{route('store')}}" method="post">
        @csrf
        Nombre: <input type="text" name="nombre"><br><br>
        Apellido: <input type="text" name="apellido"><br><br>
        Email: <input type="text" name="email"><br><br>
        Teléfono: <input type="text" name="telefono"><br><br>
        <input type="submit" name="enviar" value="Enviar">
      </form>

    </body>
</html>
