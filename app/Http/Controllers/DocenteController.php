<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index()
    {
        $docentes = Docente::all();
        return view('docentes.index', compact('docentes'));
    }

    public function create()
    {
        return view('docentes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'especialidad' => 'required|string|max:100',
            'dni' => 'required|string|max:20|unique:docentes,dni',
        ]);

        Docente::create($request->only(['nombre', 'especialidad', 'dni']));

        return redirect()->route('docentes.index')->with('success', '✅ Docente creado exitosamente.');
    }
}