<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel</title>      
    </head>
    <body>

      		 Kaixo {{$nombre}}
      	
      	<br><br><a href="{{route('welcome')}}">Itzuli</a>
    </body>
</html>
