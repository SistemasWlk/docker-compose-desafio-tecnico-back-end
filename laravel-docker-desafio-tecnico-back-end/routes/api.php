<?php

use Illuminate\Support\Facades\Route;

//-- Teste
Route::get('/', function(){
    return response()->json([
        'success' => true,
    ]);
});