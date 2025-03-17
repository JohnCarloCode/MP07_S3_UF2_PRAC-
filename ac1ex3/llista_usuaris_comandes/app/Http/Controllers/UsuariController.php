<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
class UsuariController extends Controller
{
    public function index()
    {
        $usuaris = Usuari::has('comandas')->withCount('comandas')->get();
        return view('usuaris.index', compact('usuaris'));
    }
}
