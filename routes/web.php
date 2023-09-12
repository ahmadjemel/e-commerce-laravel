<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

/*Route::get('/test', function () {
    return view('test');
});*/

//generer 7 routes:admin
Route::resource("category",CategoryController::class);
Route::resource("product",ProductController::class);
Route::resource("order",OrderController::class);

//route partie client
Route::get("/",[FrontController::class,'index'])->name("Front.index");
Route::get("front/products/{cat}",[FrontController::class,'products'])->name("Front.products");
//route panier

//liste produit
//modifier
//delete
//ajouter produit pannier
Route::post("front/panier/store",[FrontController::class,'store'])->name("Front.products");
Route::get("front/panier/list",[FrontController::class,'list'])->name("Front.panier.list");

//liste des produits
Route::get("front/panier/list",[FrontController::class])->name("Front.list");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
