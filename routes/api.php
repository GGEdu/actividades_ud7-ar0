<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ApiAuthController;

// Rutas de autenticación
Route::post('/login', [ApiAuthController::class, 'login']);
Route::post('/register', [ApiAuthController::class, 'register']);

// Recibe el JSON de la API
Route::get('/json', [ApiController::class, 'getApiData']);

// Rutas de API protegidas
Route::group(['middleware' => 'auth:api'], function(){
    // Recoger todas las APIs
    Route::get('/apis', [ApiController::class, 'index']);
    // Crear una nueva API
    Route::post('/apis', [ApiController::class, 'store']);
    // Obtener la información de una API específica
    Route::get('/apis/{api}', [ApiController::class, 'show']);
    // Actualizar la información de una API específica
    Route::put('/apis/{api}', [ApiController::class, 'update']);
    // Eliminar una API específica
    Route::delete('/apis/{api}', [ApiController::class, 'destroy']);
});
