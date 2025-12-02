<?php

namespace App\Http\Controllers;

use App\Models\Foco;
use Illuminate\Http\Request;

class FocoController extends Controller
{
    public function index()
    {
        $focos = Foco::all();
        return view('focos.index', compact('focos'));
    }

    public function create()
    {
        return view('focos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|string|unique:focos,codigo',
            'tipo' => 'required|string|max:50',
            'intensidad' => 'required|integer|min:0|max:100',
            'ubicacion' => 'required|string|max:200',
        ]);

        Foco::create($request->all());

        return redirect()->route('focos.index')->with('success', '✅ Foco registrado.');
    }

    public function show(Foco $foco)
    {
        return view('focos.show', compact('foco'));
    }

    public function edit(Foco $foco)
    {
        return view('focos.edit', compact('foco'));
    }

    public function update(Request $request, Foco $foco)
    {
        $request->validate([
            'codigo' => 'required|string|unique:focos,codigo,' . $foco->id,
            'tipo' => 'required|string|max:50',
            'intensidad' => 'required|integer|min:0|max:100',
            'ubicacion' => 'required|string|max:200',
        ]);

        $foco->update($request->all());

        return redirect()->route('focos.index')->with('success', '✅ Foco actualizado.');
    }

    public function destroy(Foco $foco)
    {
        $foco->delete();
        return redirect()->route('focos.index')->with('success', '✅ Foco eliminado.');
    }
}