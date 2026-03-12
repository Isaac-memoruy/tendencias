<?php

use Illuminate\Support\Facades\Route;

Route::get('/suma', function () {
    return view('suma');
});

Route::post('/suma', function () {

    $num1 = request('num1');
    $num2 = request('num2');

    $resultado = $num1 + $num2;

    return view('suma', compact('resultado'));
});