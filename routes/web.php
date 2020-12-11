<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/doar', function() {

});

Route::get('/candidatar', [ UserController::class, 'create'] );
Route::post('/candidatar', [ UserController::class, 'store'] );
Route::get('user/{id}', [ UserController::class, 'show']);

Route::get('/lab', function () {
    return view('lab_client');
});