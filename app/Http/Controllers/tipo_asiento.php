<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class tipo_asiento extends Controller
{
    public function agregar(Request $request) {
        $tipo_asiento = $request->input("Description");
        $tipo_asiento = $request->input("Precio");
        $tipo_asiento = $request->input("Estado");
    }

    public function eliminar(Request $request) {
        $
    }
}
