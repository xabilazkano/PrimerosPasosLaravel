<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel</title>      
    </head>
    <body>
    	@if(isset($color))
      		<span style="color:#{{$color}}">  Kaixo {{$nombre}}</span>
       		
      	@elseif(isset($nombre))
      		 Kaixo {{$nombre}}
      	@else
      		Kaixo!
      	@endif
      	<br><br><a href="{{route('welcome')}}">Itzuli</a>
    </body>
</html>
