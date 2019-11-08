<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Laravel</title>      
</head>
<body>

    <form action="{{route('store3')}}" method="post">
        @csrf
        Nombre: <input type="text" name="nombre" value="{{old('nombre')}}">
        @if ($errors->has('nombre'))
        <b>{{$errors->first('nombre')}}</b>
        @endif <br><br>
        Apellido: <input type="text" name="apellido" value="{{old('apellido')}}">
        @if ($errors->has('apellido'))
        <b>{{$errors->first('apellido')}}</b>
        @endif <br><br>
        Email: <input type="text" name="email" value="{{old('email')}}">
        @if ($errors->has('email'))
        <b>{{$errors->first('email')}}</b>
        @endif <br><br>
        Teléfono: <input type="text" name="telefono" value="{{old('telefono')}}">
        @if ($errors->has('telefono'))
        <b>{{$errors->first('telefono')}}</b>
        @endif <br><br>
        DNI: <input type="text" name="dni" value="{{old('dni')}}">
        @if ($errors->has('dni'))
        <b>{{$errors->first('dni')}}</b>
        @endif <br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>

</body>
</html>
