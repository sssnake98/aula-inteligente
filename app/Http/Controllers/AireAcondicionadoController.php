<?php

namespace App\Http\Controllers;

use App\Models\AireAcondicionado;
use Illuminate\Http\Request;

class AireAcondicionadoController extends Controller
{
    public function index()
    {
        $aires = AireAcondicionado::all();
        return view('aires.index', compact('aires'));
    }

    public function create()
    {
        return view('aires.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'estado' => 'required|in:encendido,apagado',
            'mantenimiento' => 'nullable|string',
        ]);

        AireAcondicionado::create($request->all());

        return redirect()->route('aires.index')->with('success', '✅ Aire acondicionado registrado.');
    }

    public function show(AireAcondicionado $aire)
    {
        return view('aires.show', compact('aire'));
    }

    public function edit(AireAcondicionado $aire)
    {
        return view('aires.edit', compact('aire'));
    }

    public function update(Request $request, AireAcondicionado $aire)
    {
        $request->validate([
            'estado' => 'required|in:encendido,apagado',
            'mantenimiento' => 'nullable|string',
        ]);

        $aire->update($request->all());

        return redirect()->route('aires.index')->with('success', '✅ Aire actualizado.');
    }

    public function destroy(AireAcondicionado $aire)
    {
        $aire->delete();
        return redirect()->route('aires.index')->with('success', '✅ Aire eliminado.');
    }
}