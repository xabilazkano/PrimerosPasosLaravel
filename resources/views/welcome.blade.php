<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel</title>      
    </head>
    <body>
       <a href="{{route('contacto')}}">Contacto</a><br>
       <a href="{{route('blog',1)}}">Blog</a><br>
       <a href="{{route('blog1',[6,'Xabi'])}}">Blog1</a>
    </body>
</html>
