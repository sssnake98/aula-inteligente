<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Muestra la lista de materias.
     */
    public function index()
    {
        $materias = Materia::all();
        return view('materias.index', compact('materias'));
    }

    /**
     * Muestra el formulario para crear una nueva materia.
     */
    public function create()
    {
        return view('materias.create');
    }

    /**
     * Almacena una nueva materia en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'carrera' => 'required|string|max:100',
            'tipo_cursado' => 'required|string|max:50',
        ]);

        Materia::create($request->all());

        return redirect()->route('materias.index')->with('success', '✅ Materia creada exitosamente.');
    }

    /**
     * Muestra los detalles de una materia específica.
     */
    public function show(Materia $materia)
    {
        return view('materias.show', compact('materia'));
    }

    /**
     * Muestra el formulario para editar una materia.
     */
    public function edit(Materia $materia)
    {
        return view('materias.edit', compact('materia'));
    }

    /**
     * Actualiza una materia en la base de datos.
     */
    public function update(Request $request, Materia $materia)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'carrera' => 'required|string|max:100',
            'tipo_cursado' => 'required|string|max:50',
        ]);

        $materia->update($request->all());

        return redirect()->route('materias.index')->with('success', '✅ Materia actualizada.');
    }

    /**
     * Elimina una materia de la base de datos.
     */
    public function destroy(Materia $materia)
    {
        $materia->delete();

        return redirect()->route('materias.index')->with('success', '✅ Materia eliminada.');
    }
}