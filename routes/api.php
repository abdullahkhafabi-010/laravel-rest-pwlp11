<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ApiAuthController;
use App\Http\Resources\MahasiswaResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route:: get('/hello', function(){
    $data=["message"=>"hello word"];
    return response()->json($data);
});

Route::post('/login', [ApiAuthController::class, 'login']);



// Route:: get('/hello', function(){
//     return "hello word";
// });
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('/mahasiswa', MahasiswaController::class);
    Route::get('/logout', [ApiAuthController::class, 'logout']);
});
