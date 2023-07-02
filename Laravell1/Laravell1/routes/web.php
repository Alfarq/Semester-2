<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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



Route::get('/about', function () {
    return view('about');
});


Route::get('/hello/{nama}/{alamat}', function($nama,$alamat) {
    return "<h2>Hello $nama ke $alamat </h2>";
}); 

Route::get('/produk/{id}', function ($id){
    return view('produk/index',["id" => $id]);
});

use App\Http\Controllers\UserController;

Route::get('/user',
    [UserController::class,'index']);


    Route::get('/user/daftar', 
        [UserController::class, 'daftar']);

Route::post('/user/store', 
    [UserController::class, 'store'])->name('user/store');


use App\Http\Controllers\TokoController;

Route::prefix('toko')->group(function(){
    Route::get('/',
        [TokoController::class,'index']);


    Route::get('detail',
        [TokoController::class,'detail']);



    
    
        
    Route::get('products/create',
        [TokoController::class,'create'])->name('produk.create');
    
    Route::post('/',
    [TokoController::class,'store'])->name('produk.store');


    Route::get('/{product}/products/edit',
        [TokoController::class, 'edit'])->name('produk.edit');


    Route::delete('/{product}',
        [TokoController::class, 'destroy'])->name('produk.destroy');

    Route::put('/{product}',
        [TokoController::class, 'update'])->name('produk.update');




//middle web

    Route:: group(['middleware' => ['auth']], function(){
        Route::get('products/admin',
            [TokoController::class,'admin'])->name('produk.admin');
    });


//customers
    Route::get('customers/customers',
        [TokoController::class,'customers'])->name('customers.admin');  
        
    Route::get('customers/create',
        [TokoController::class,'createpelanggan'])->name('customers.create');
    
    Route::post('/',
    [TokoController::class,'storepelanggan'])->name('customers.store');


    Route::get('/{customers}/customers/edit',
        [TokoController::class, 'editpelanggan'])->name('customers.edit');


    Route::delete('customers/{customers}',
        [TokoController::class, 'destroypelanggan'])->name('customers.destroy');

    Route::put('customers/{customers}',
        [TokoController::class, 'updatepelanggan'])->name('customers.update');

});

use App\Http\Controllers\FormController;

Route::get('/form', [FormController::class, 'index']);
Route::post('/hasil', [FormController::class, 'hasil']);










Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
