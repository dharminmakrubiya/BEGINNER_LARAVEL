<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Welcome;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Basic Route
Route::get('/greeting', function () {
    return 'Hello World';
});

//Route View
Route::view('/welcome', 'welcome');

Route::get('/products',[Welcome::class,'index']);

// Basic Controllers with Routes
Route::get('/welcome',[Welcome::class,'welcomeUser']);


//Route Parameters 
Route::get('products/{id}', [Welcome::class,'showProductList']);


// Named Route
Route::get('/products',[Welcome::class,'index'])->name('all_products');


// Route Group
// Route::group(['prefix'=>'accounts','as'=>'account.'], function(){
//     Route::get('/', 'AccountController@index')->name('index');
//     Route::get('connect', 'AccountController@connect')->name('connect');
// });

// Route::group(['prefix'=>'quotes','as'=>'quote.'], function(){
//     Route::get('/', 'QuoteController@index')->name('index');
//     Route::get('connect', 'QuoteController@create')->name('create');
// });

require __DIR__.'/auth.php';
