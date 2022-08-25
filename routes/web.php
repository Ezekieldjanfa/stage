<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
// login
Route::get('/login', [UserController::class, 'login']);
Route::post('/authenticate', [UserController::class, 'authenticate']);

//register
Route::get('/register', [RegisterController::class, 'index'])->name('register');;
Route::post('/register', [RegisterController::class, 'register'])->name('register');


//produit
Route::get('/acceuil', [ProduitController::class, 'index'])->name('produit.index');
Route::resource('produits', ProduitController::class)->except('index');

//creation produit
Route::get('/create', [ProduitController::class, 'create']);
Route::post('/create', [ProduitController::class, 'store']);

//modification produit
Route::get('update/{id}', [ProduitController::class, 'edit']);
Route::put('produit/update/{id}', [ProduitController::class, 'update'])->name('produit.update');

// creation empployes
Route::get('/createe', [AdminController::class, 'create']);


