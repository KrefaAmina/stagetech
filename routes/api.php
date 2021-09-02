<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CongeController;
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



Route::get('/', function () {
    return view('welcome');
});
//User route
Route::get('/users',[UserController::class, 'create']);
Route::post('/users',[UserController::class, 'store'])->name("users.store");

Route::get('/index',[UserController::class, 'index'])->name("users.index");

Route::get('/edit/{id}',[UserController::class, 'edit'])->name("users.edit");
Route::patch('/{id}',[UserController::class,'update'])->name("users.update");

Route::delete('/delete/{id}',[UserController::class, 'destroy'])->name("users.destroy");

//Conge route
Route::get('/conges',[CongeController::class, 'createConge']);
Route::post('/conges',[CongeController::class, 'storeConge'])->name("conges.storeConge");

Route::get('/indexConge',[CongeController::class, 'indexConge'])->name("conges.indexConge");

Route::get('/editConge/{id}',[CongeController::class, 'editConge'])->name("conges.editConge");
Route::patch('/{id}',[CongeController::class,'updateConge'])->name("conges.updateConge");

Route::delete('/deleteConge/{id}',[CongeController::class, 'destroyConge'])->name("conges.destroyConge");