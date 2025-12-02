<?php

namespace App\Http\Controllers;

use App\Models\Cortina;
use Illuminate\Http\Request;

class CortinaController extends Controller
{
    public function index()
    {
        $cortinas = Cortina::all();
        return view('cortinas.index', compact('cortinas'));
    }

    public function create()
    {
        return view('cortinas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ubicacion' => 'required|string|max:200',
            'estado' => 'required|in:abierta,cerrada',
        ]);

        Cortina::create($request->all());

        return redirect()->route('cortinas.index')->with('success', '✅ Cortina registrada.');
    }

    public function show(Cortina $cortina)
    {
        return view('cortinas.show', compact('cortina'));
    }

    public function edit(Cortina $cortina)
    {
        return view('cortinas.edit', compact('cortina'));
    }

    public function update(Request $request, Cortina $cortina)
    {
        $request->validate([
            'ubicacion' => 'required|string|max:200',
            'estado' => 'required|in:abierta,cerrada',
        ]);

        $cortina->update($request->all());

        return redirect()->route('cortinas.index')->with('success', '✅ Cortina actualizada.');
    }

    public function destroy(Cortina $cortina)
    {
        $cortina->delete();
        return redirect()->route('cortinas.index')->with('success', '✅ Cortina eliminada.');
    }
}