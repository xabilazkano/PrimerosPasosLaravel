<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel</title>      
    </head>
    <body>
      		<span style="color:#{{$color}}">  Kaixo {{$nombre}}</span>
  
      	<br><br><a href="{{route('welcome')}}">Itzuli</a>
    </body>
</html>
