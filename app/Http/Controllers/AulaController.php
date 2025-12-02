<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function index()
    {
        $aulas = Aula::all();
        return view('aulas.index', compact('aulas'));
    }

    public function create()
    {
        return view('aulas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'curso_anio' => 'required|string|max:50',
            'capacidad' => 'required|integer|min:1',
        ]);

        Aula::create([
            'nombre' => $request->nombre,
            'ubicacion' => $request->curso_anio,
            'capacidad' => $request->capacidad,
        ]);

        return redirect()->route('aulas.index')->with('success', '✅ Aula creada exitosamente.');
    }


public function show(Aula $aula)
{
    return view('aulas.show', compact('aula'));
}

public function edit(Aula $aula)
{
    return view('aulas.edit', compact('aula'));
}

public function update(Request $request, Aula $aula)
{
    $request->validate([
        'nombre' => 'required|string|max:100',
        'curso_anio' => 'required|string|max:50',
        'capacidad' => 'required|integer|min:1',
    ]);

    $aula->update([
        'nombre' => $request->nombre,
        'ubicacion' => $request->curso_anio,
        'capacidad' => $request->capacidad,
    ]);

    return redirect()->route('aulas.index')->with('success', '✅ Aula actualizada.');
}

public function destroy(Aula $aula)
{
    $aula->delete();
    return redirect()->route('aulas.index')->with('success', '✅ Aula eliminada.');
}
}