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

Route::get('/user', [DataController::class, 'createUser']);

Route::get('/size', [DataController::class, 'createSize']);

Route::get('/site', [DataController::class, 'createSite']);

Route::get('/product', [DataController::class, 'createProduct']);

Route::get('/price', [DataController::class, 'createPrice']);

Route::get('/color', [DataController::class, 'createColor']);

Route::get('/category', [DataController::class, 'createCategory']);

Route::get('/cart', [DataController::class, 'createCart']);

// TO GET DETAILS OF THE PRICE TABLE:
Route::get('/getdetails', [DataController::class, 'getdetails']);

// TO GET THE DETAILS OF THE CART TABLE:
Route::get('/getdetailscart', [DataController::class, 'getdetailsCart']);

//Route::get('/login', 'LoginRegister');

// Route::get('/login', function () {
//     return view('livewire/login-register');
// });

Route::get('a/{size}/{color}',[FasionController::class,'cash']);