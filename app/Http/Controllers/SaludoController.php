<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function saludoColor($color,$nombre)
    {
        return view('saludo2',['color'=>$color,'nombre'=>$nombre]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
