<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;

class SaludoController extends Controller
{
    public function saludo()
    {
        return view('saludo',['saludo'=>'Kaixo!']);
    }

   
    public function saludo1($nombre)
    {
        return view('saludo1',['nombre'=>$nombre]);
    }

    public function saludoColor($color,$nombre="anonimo")
    {
        return view('saludo2',['color'=>$color,'nombre'=>$nombre]);
    }

  
    public function store(Request $request)
    {
         $validator = Validator::make($request->all(), [
           'email' => 'required|email',
           'nombre' => 'required|string|min:2|max:15',
           'apellido' => 'required|string|min:2|max:20'

           
           
       ])->validate();
        return view('welcome');
       
    }

   
}
