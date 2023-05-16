<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('127.0.0.1/Kafel/50623/people', [PeopleController::class, 'getAll'] );
Route::post('127.0.0.1/Kafel/50623/people', [PeopleController::class, 'createOne'] );
Route::put('127.0.0.1/Kafel/50623/people/{id}', [PeopleController::class, 'updateOne'] );
Route::get('127.0.0.1/Kafel/50623/people/{id}', [PeopleController::class, 'getOne'] );
Route::delete('127.0.0.1/Kafel/50623/people/{id}', [PeopleController::class, 'deleteOne'] );