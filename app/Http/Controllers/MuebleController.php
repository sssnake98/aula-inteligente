<?php

namespace App\Http\Controllers;

use App\Models\Mueble;
use Illuminate\Http\Request;

class MuebleController extends Controller
{
    public function index()
    {
        $muebles = Mueble::all();
        return view('muebles.index', compact('muebles'));
    }

    public function create()
    {
        return view('muebles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'nro_inventario' => 'required|string|unique:muebles,nro_inventario',
            'es_proyector' => 'boolean',
            'estado' => 'required|in:disponible,en_reparacion',
        ]);

        Mueble::create($request->all());

        return redirect()->route('muebles.index')->with('success', '✅ Mueble registrado exitosamente.');
    }

    public function show(Mueble $mueble)
    {
        return view('muebles.show', compact('mueble'));
    }

    public function edit(Mueble $mueble)
    {
        return view('muebles.edit', compact('mueble'));
    }

    public function update(Request $request, Mueble $mueble)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'nro_inventario' => 'required|string|unique:muebles,nro_inventario,' . $mueble->id,
            'es_proyector' => 'boolean',
            'estado' => 'required|in:disponible,en_reparacion',
        ]);

        $mueble->update($request->all());

        return redirect()->route('muebles.index')->with('success', '✅ Mueble actualizado.');
    }

    public function destroy(Mueble $mueble)
    {
        $mueble->delete();
        return redirect()->route('muebles.index')->with('success', '✅ Mueble eliminado.');
    }
}