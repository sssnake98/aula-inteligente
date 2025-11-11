<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ReservaController extends Controller
{
    public function index() {
        return view('reservas.index', ['reservas' => []]);
    }
    public function create() {
        return view('reservas.create');
    }
    // Puedes dejar los demás métodos vacíos por ahora
    public function store(Request $request) { /* ... */ }
    public function show($id) { /* ... */ }
    public function edit($id) { /* ... */ }
    public function update(Request $request, $id) { /* ... */ }
    public function destroy($id) { /* ... */ }
}