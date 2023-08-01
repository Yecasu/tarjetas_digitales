<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function obtenerUsuarioPorCedula($cedula)
    {
        // Buscar al usuario por su cédula
        $usuario = Personal::where('cedula', $cedula)->first();

        // Verificar si se encontró el usuario
        if (!$usuario) {
            return view('usuarios')->with('mensaje', 'Personal operativo no encontrado');
        }

        // Mostrar la información del usuario en la vista
        return view('usuarios')->with('usuario', $usuario);
    }
}
