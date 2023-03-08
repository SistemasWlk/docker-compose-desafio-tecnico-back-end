<?php

use App\Http\Controllers\{
    PatientController,
    CepController,
    AddressController,
    AuthUserController
};
use Illuminate\Support\Facades\Route;

//-- User
Route::post('/auth',                [AuthUserController::class,         'auth']);
Route::post('/logout',              [AuthUserController::class,         'logout'])->middleware('auth:sanctum');
Route::get('/me',                   [AuthUserController::class,         'me'])->middleware('auth:sanctum');

//-- Grupo de rotas que precisam de autenticação
Route::middleware('auth:sanctum')->group(function(){
    Route::get('/patient',              [PatientController::class,      'index']);
    Route::get('/patient/{id}',         [PatientController::class,      'show']);
    Route::post('/patient',             [PatientController::class,      'store']);
    Route::post('/patient/{id}',        [PatientController::class,      'update']);
    Route::post('/patient-delete/{id}', [PatientController::class,      'destroy']);

    Route::get('/address',              [AddressController::class,      'index']);
    Route::get('/address/{id}',         [AddressController::class,      'show']);
    Route::post('/address',             [AddressController::class,      'store']);
    Route::post('/address/{id}',        [AddressController::class,      'update']);
    Route::post('/address-delete/{id}', [AddressController::class,      'destroy']);

    Route::get('/cep/{id}',             [CepController::class,          'show']);
});

//-- Teste
Route::get('/', function(){
    return response()->json([
        'success' => true,
    ]);
});