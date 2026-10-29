<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Mensaje;

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