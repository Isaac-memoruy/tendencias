<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SumaController;

/*
Route::get('/suma', function () {
    return view('suma');
});

Route::post('/suma', function (Request $request) {

    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $suma = $num1 + $num2;
    return view('suma', ['suma' => $suma]);
    
});
*/

Route::get('/suma', [SumaController::class, 'index']);
Route::post('/suma', [SumaController::class, 'sumar']);