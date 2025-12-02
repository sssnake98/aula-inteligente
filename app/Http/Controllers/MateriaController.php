<?php

namespace App\Http\Controllers;

use App\Models\Materia; // ✅ Solo importar
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index()
{
    $materias = Materia::all();
    return view('materias.index', compact('materias'));

    
}
public function create()
{
    return view('materias.create');
}
}