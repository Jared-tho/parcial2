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
    $validated = request()->validate([
        'sabor' => 'required',
        'precio' => 'required|integer',
        'stock' => 'required|integer|min:0',
    ], [
        'sabor.required' => 'Indica el sabor de la torta.',
        'precio.required' => 'Indica el precio de la torta.',
        'precio.integer' => 'El precio va en digitos, sin centavos.',
        'stock.required' => 'Indica cuántas tortas hay en stock.',
        'stock.integer' => 'El stock debe ser un número entero.',
        'stock.min' => 'El stock no puede ser negativo.',
    ]);

    Torta::create($validated);

    return redirect('/tortas');
});
