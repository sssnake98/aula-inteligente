<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Muestra la lista de docentes.
     */
    public function index()
    {
        $docentes = Docente::all();
        return view('docentes.index', compact('docentes'));
    }

    /**
     * Muestra el formulario para crear un nuevo docente.
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Almacena un nuevo docente en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'especialidad' => 'required|string|max:100',
            'dni' => 'required|string|max:20|unique:docentes,dni',
        ]);

        Docente::create($request->all());

        return redirect()->route('docentes.index')->with('success', '✅ Docente creado exitosamente.');
    }

    /**
     * Muestra los detalles de un docente específico.
     */
    public function show(Docente $docente)
    {
        return view('docentes.show', compact('docente'));
    }

    /**
     * Muestra el formulario para editar un docente.
     */
    public function edit(Docente $docente)
    {
        return view('docentes.edit', compact('docente'));
    }

    /**
     * Actualiza un docente en la base de datos.
     */
    public function update(Request $request, Docente $docente)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'especialidad' => 'required|string|max:100',
            'dni' => 'required|string|max:20|unique:docentes,dni,' . $docente->id,
        ]);

        $docente->update($request->all());

        return redirect()->route('docentes.index')->with('success', '✅ Docente actualizado.');
    }

    /**
     * Elimina un docente de la base de datos.
     */
    public function destroy(Docente $docente)
    {
        $docente->delete();

        return redirect()->route('docentes.index')->with('success', '✅ Docente eliminado.');
    }
}