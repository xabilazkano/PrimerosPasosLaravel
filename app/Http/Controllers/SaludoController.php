<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Http\Requests\Validacion;
use App\Rules\Dni;

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
           'apellido' => 'required|string|min:2|max:20',
           'telefono' => 'regex:/^[679][0-9]{8}$/'

           
           
       ])->validate();
        return view('verFormulario',['nombre'=>$request->input('nombre'),'apellido'=>$request->input('apellido'),'email'=>$request->input('email'),'telefono'=>$request->input('telefono')]);
       
    }

     public function store2(Validacion $request)
    {
         
        return view('verFormulario',['nombre'=>$request->input('nombre'),'apellido'=>$request->input('apellido'),'email'=>$request->input('email'),'telefono'=>$request->input('telefono')]);
       
    }

     public function store3(Validacion $request)
    {

        $validatedData = $request->validate([
            'dni' => ['required',new Dni],
        ]);
        $validated = $request->validated();
         
        return view('verFormulario2',['nombre'=>$request->input('nombre'),'apellido'=>$request->input('apellido'),'email'=>$request->input('email'),'telefono'=>$request->input('telefono'),'dni' => $request->input('dni')]);
       
    }

   
}
