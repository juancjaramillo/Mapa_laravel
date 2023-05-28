<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ubicacion;

class MapController extends Controller
{
    public function mostrarMapa()
    {
        $ubicaciones = Ubicacion::all();

        return view('mapa', compact('ubicaciones'));
    }
}
