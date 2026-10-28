<?php

use App\Models\Torta;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('home');
});


Route::get('/contacto', function () {
    return view('contacts');
});

Route::get('/hola', function () {
    return 'Hola';
});

Route::get('/productos', function () {
    return 'Productos';
});

Route::get('/tortas', function () {
    $tortas = Torta::all();

    return view('tortas.index', compact('tortas'));
});

Route::get('/tortas/nuevo', function () {
    return view('tortas.nuevo');
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

