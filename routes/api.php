<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/employees', [EmployeeController::class, 'index']);

// Route::post('/employees', [EmployeeController::class, 'store']);

// Route::get('/employees/{id}', [EmployeeController::class, 'show']);

// Route::put('/employees/{id}', [EmployeeController::class, 'update']);

// Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']);

// * selama kita menggunaan method bawaan yang sediakan oleh laravel, dan akses url nya tetap sama, maka kita dapat mempersingkat penulisan Route-nya
// * dan kalau ada method  yg kita hapus, maka kita dapat menggunakan pengecualian seperti berikut ini :
//* Route::resource('employees', [EmployeeController::class])->except(['create', 'edit']);

Route::resource('/employees', [EmployeeController::class]);
