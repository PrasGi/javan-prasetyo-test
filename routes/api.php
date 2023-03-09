<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\SilsilahController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/semua-anak-budi', [Controller::class, 'semuaAnakBudi']);
Route::get('/cucu-budi', [Controller::class, 'cucuBudi']);
Route::get('/cucu-perempuan-budi', [Controller::class, 'cucuPerempuanBudi']);
Route::get('/bibi-farah', [Controller::class, 'bibiFarah']);
Route::get('/sepupu-laki_laki-hani', [SilsilahController::class, 'sepupuLakiLakiHani']);

Route::resource('silsilah', SilsilahController::class);
