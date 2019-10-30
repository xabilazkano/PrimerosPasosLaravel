<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel</title>      
    </head>
    <body>
       Este es el articulo numero {{$id}}<br><br>
       <a href="{{route('welcome')}}">Itzuli</a>
    </body>
</html>
