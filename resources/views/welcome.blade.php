<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel</title>      
    </head>
    <body>
       <a href="{{route('contacto')}}">Contacto</a><br>
       <a href="{{route('blog',1)}}">Blog</a><br>
       <a href="{{route('blog1',[6,'Xabi'])}}">Blog1</a><br>
       <a href="{{route('saludo')}}">Saludo</a><br>
       <a href="{{route('saludo1','Xabi')}}">Saludo1</a><br>
       <a href="{{route('saludoColor',['eb34d2'])}}">Saludo2</a><br>
       <a href="{{route('validacion')}}">Formulario validado</a><br>
       <a href="{{route('validacion2')}}">Formulario validado2</a><br>
       <a href="{{route('validacion3')}}">Formulario validado3</a><br>

    </body>
</html>
