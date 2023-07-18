<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Livewire\LoginRegister;
use App\Http\Controllers\FasionController;
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
    return view('home');
});
// TO INSERT NEW USERS
Route::get('/user', [DataController::class, 'createUser']);

// TO INSERT NEW SIZE
Route::get('/size', [DataController::class, 'createSize']);

// TO INSERT NEW SITE
Route::get('/site', [DataController::class, 'createSite']);

// TO INSERT NEW PRODUCT
Route::get('/product', [DataController::class, 'createProduct']);

// TO INSERT NEW PRICE
Route::get('/price', [DataController::class, 'createPrice']);

// TO INSERT NEW COLOR
Route::get('/color', [DataController::class, 'createColor']);

// TO INSERT NEW CATEGORY
Route::get('/category', [DataController::class, 'createCategory']);

// TO INSERT NEW CART
Route::get('/cart', [DataController::class, 'createCart']);

// TO GET DETAILS OF THE PRICE TABLE:
Route::get('/getdetails', [DataController::class, 'getdetails']);

// TO GET THE DETAILS OF THE CART TABLE:
Route::get('/getdetailscart', [DataController::class, 'getdetailsCart']);

//Route::get('/login', 'LoginRegister');

// Route::get('/login', function () {
//     return view('livewire/login-register');
// });

//Route::get('a/{size}/{color}',[FasionController::class,'cash']);

Route::get('a/{product}/{color}/{size}',[FasionController::class,'price']);