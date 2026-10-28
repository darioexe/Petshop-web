<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Mensaje;
use App\Models\Torta;


Route::get('/', function () {
    return view('inicio');
});


Route::get('/contacto', function () {
    return view('contacto');
});


Route::post('/contacto', function (Request $request) {
    Mensaje::create([
        'nombre'   => $request->input('nombre'),
        'correo'   => $request->input('correo'),
        'telefono' => $request->input('telefono'),
        'asunto'   => $request->input('asunto'),
        'mensaje'  => $request->input('mensaje'),
    ]);

    return back()->with('exito', '¡Mensaje guardado con éxito!');
})->name('contacto.guardar');

Route::get('/tortas', function () {
    $tortas = Torta::all();
    return view('tortas.index', compact('tortas'));
});

Route::get('/tortas/nuevo', function () {
    return view('tortas.create');
});

Route::post('/tortas/nuevo', function () {
    request()->validate([
        'sabor' => 'required',
        'precio' => 'required|integer',
    ], [
        'sabor.required' => 'Indica el sabor de la torta.',
        'precio.required' => 'Indica el precio de la torta.',
        'precio.integer' => 'El precio va en digitos, sin centavos.',
    ]);

    Torta::create([
        'sabor' => request()->input('sabor'),
        'precio' => request()->input('precio'),
    ]);

    return redirect('/tortas');
});