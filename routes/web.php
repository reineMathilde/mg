<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\adminController;
use App\http\Controllers\appelEntrantController;
use App\http\Controllers\loginController;

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

Route::get('/', [adminController::class,'login'])->middleware('alreadlyLoggedIn');


Route::get('/dashboard', [adminController::class, 'dashboard'])->middleware('isLoggedIn');


Route::get('/ajoutAppelRentrant', [adminController::class, 'ajoutAppelRentrant']);
Route::get('/listeAppel', [adminController::class, 'listeAppel'])->name('listeAppel');
//Route::get('/statistique', [adminController::class, 'statistique']);


// je suis là, tu me suis?


//appelentrantController

Route::post('/saveClient',[appelEntrantController::class,'saveClient']);
Route::get('/admin/editClient/{id}',[appelEntrantController::class,'editClient']);
Route::put('/admin/updateClient/{id}',[appelEntrantController::class,'updateClient']);



//login Controller

Route::post('/admin/saveLogin/', [loginController::class, 'saveLogin']);
Route::get('/logout', [loginController::class, 'logout']);


// routes/web.php



/*Route::middleware(['alreadlyLoggedIn', 'role:admin'])->group(function(){

    Route::get('/statistique', [adminController::class, 'statistique']);


});*/

/*
Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/statistique', [adminController::class, 'statistique']);
});*/



//
/*
Route::prefix('role:admin')->middleware('auth')->group(function() {

    Route::get('/statistique', [adminController::class, 'statistique']);


});
*/



Route::get('/statistique', [adminController::class, 'statistique'])->middleware('role:admin');














