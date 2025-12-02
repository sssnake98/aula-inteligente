<?php

namespace App\Http\Controllers;

use App\Models\Disponibilidad;
use App\Models\Aula;
use Illuminate\Http\Request;

class DisponibilidadController extends Controller
{
    /**
     * Muestra la lista de disponibilidades.
     */
    public function index()
    {
        $disponibilidades = Disponibilidad::with('aula')->get();
        return view('disponibilidades.index', compact('disponibilidades'));
    }

    /**
     * Muestra el formulario para crear una nueva disponibilidad.
     */
    public function create()
    {
        $aulas = Aula::all();
        return view('disponibilidades.create', compact('aulas'));
    }

    /**
     * Almacena una nueva disponibilidad en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'hora' => 'required',
            'aula_id' => 'required|exists:aulas,id',
            'estado' => 'required|in:libre,ocupado',
        ]);

        Disponibilidad::create($request->all());

        return redirect()->route('disponibilidades.index')->with('success', '✅ Disponibilidad registrada.');
    }

    /**
     * Muestra los detalles de una disponibilidad específica.
     */
    public function show($id)
    {
        $disponibilidad = Disponibilidad::with('aula')->findOrFail($id);
        return view('disponibilidades.show', compact('disponibilidad'));
    }

    /**
     * Muestra el formulario para editar una disponibilidad.
     */
    public function edit($id)
    {
        $disponibilidad = Disponibilidad::findOrFail($id);
        $aulas = Aula::all();
        return view('disponibilidades.edit', compact('disponibilidad', 'aulas'));
    }

    /**
     * Actualiza una disponibilidad en la base de datos.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fecha' => 'required|date',
            'hora' => 'required',
            'aula_id' => 'required|exists:aulas,id',
            'estado' => 'required|in:libre,ocupado',
        ]);

        $disponibilidad = Disponibilidad::findOrFail($id);
        $disponibilidad->update($request->all());

        return redirect()->route('disponibilidades.index')->with('success', '✅ Disponibilidad actualizada.');
    }

    /**
     * Elimina una disponibilidad de la base de datos.
     */
    public function destroy($id)
    {
        $disponibilidad = Disponibilidad::findOrFail($id);
        $disponibilidad->delete();

        return redirect()->route('disponibilidades.index')->with('success', '✅ Disponibilidad eliminada.');
    }
}