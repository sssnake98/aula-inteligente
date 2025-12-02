<?php
namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Aula;
use App\Models\Materia;
use App\Models\Docente;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::with(['aula', 'materia', 'docente'])->get();
        return view('reservas.index', compact('reservas'));
    }

    public function create()
    {
        $aulas = Aula::all();
        $materias = Materia::all();
        $docentes = Docente::all();
        return view('reservas.create', compact('aulas', 'materias', 'docentes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'hora_inicio' => 'required',
            'hora_fin' => 'required|after:hora_inicio',
            'aula_id' => 'required|exists:aulas,id',
            'materia_id' => 'required|exists:materias,id',
            'docente_id' => 'required|exists:docentes,id',
        ]);

        Reserva::create($request->all());

        return redirect()->route('reservas.index')->with('success', '✅ Reserva creada exitosamente.');
    }

    public function show(Reserva $reserva)
    {
        return view('reservas.show', compact('reserva'));
    }

    public function edit(Reserva $reserva)
    {
        $aulas = Aula::all();
        $materias = Materia::all();
        $docentes = Docente::all();
        return view('reservas.edit', compact('reserva', 'aulas', 'materias', 'docentes'));
    }

    public function update(Request $request, Reserva $reserva)
    {
        $request->validate([
            'fecha' => 'required|date',
            'hora_inicio' => 'required',
            'hora_fin' => 'required|after:hora_inicio',
            'aula_id' => 'required|exists:aulas,id',
            'materia_id' => 'nullable|exists:materias,id',
            'docente_id' => 'nullable|exists:docentes,id',
            'tipo_origen' => 'required|string',
        ]);

        $reserva->update($request->all());

        return redirect()->route('reservas.index')->with('success', '✅ Reserva actualizada.');
    }

    public function destroy(Reserva $reserva)
    {
        $reserva->delete();
        return redirect()->route('reservas.index')->with('success', '✅ Reserva eliminada.');
    }
}