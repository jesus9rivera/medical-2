<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Cliente;
use App\Usuario;

class Clientes extends Controller
{
    public function crear (Request $request){
       
        $datos = new Usuario();
        $datos->correo = $request->input('correo');
        $datos->contraseña = $request->input('contraseña');
        $datos->privilegios_id = 1; 
        $datos->save();
        
        $datosUsu = DB::table('usuarios')
            ->where('correo',$request->input('correo'))
            ->get();

        $d = new Cliente();
        $d->nombre = $request->input('nombre');
        $d->apellidos = $request->input('apellidos');
        $d->usuarios_id = $datosUsu[0]->id;
        $d->save();


        return view('registro-exitoso');
   }
}
