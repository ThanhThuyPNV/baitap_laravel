<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/home', [App\Http\Controllers\PageController::class, 'getIndex']);
//  Route::get('/ac', [App\Http\Controllers\PageController::class, 'loai_sanpham']);
Route::get('/detail/{id}', [App\Http\Controllers\PageController::class, 'getDetail']);
use Illuminate\Support\Facades\Schema;
Route::get('database',function(){
    Schema::create('loaisanpham',function($table){
        $table->increments('id');
        $table->string('ten',200);
    });
    echo"Đã thực hiện lệnh tạo bảng thành công";
});
Route::get('/contact', [App\Http\Controllers\PageController::class, 'getContact']);
Route::get('/about', [App\Http\Controllers\PageController::class, 'getAbout']);
Route::get('/type/{id}', [App\Http\Controllers\PageController::class, 'getLoaiSp']);
Route::get('/admin', [App\Http\Controllers\PageController::class, 'getIndexAdmin']);											
Route::get('/admin-add-form', [App\Http\Controllers\PageController::class, 'getAdminAdd'])->name('add-product');
Route::post('/admin-add-form', [App\Http\Controllers\PageController::class, 'postAdminAdd']);	
Route::get('/admin-edit-form/{id}', [App\Http\Controllers\PageController::class, 'getAdminEdit']);
Route::post('admin-edit-form/{id}', [App\Http\Controllers\PageController::class, 'postAdminEdit']);	
Route::post('admin-delete/{id}', [App\Http\Controllers\PageController::class, 'postAdminDelete']);	
Route::get('/admin-export', [App\Http\Controllers\PageController::class, 'exportAdminProduct'])->name('export');													

Route::get('/add-to-cart/{id}', [App\Http\Controllers\PageController::class, 'getAddToCart'])->name('themgiohang');														
Route::get('/del-cart/{id}', [App\Http\Controllers\PageController::class, 'getDelItemCart'])->name('xoagiohang');														


// Register
Route::get('/register', function () {					
	return view('users.register');					
});	
    
Route::post('/register', [App\Http\Controllers\UserController::class, 'Register']);	

Route::get('/login', function () {						
    return view('users.login');						
});

Route::post('/login', [App\Http\Controllers\UserController::class, 'Login']);
Route::get('/logout', [App\Http\Controllers\UserController::class, 'Logout']);	

Route::get('add-to-cart/{id}', [App\Http\Controllers\PageController::class, 'getAddToCart'])->name('themgiohang');												
Route::get('del-cart/{id}', [App\Http\Controllers\PageController::class, 'getDelItemCart'])->name('xoagiohang');												

Route::get('del-cart/{id}', [App\Http\Controllers\PageController::class, 'getDelItemCart'])->name('xoagiohang');												

Route::get('check-out', [App\Http\Controllers\PageController::class, 'getCheckout'])->name('dathang');				
Route::post('check-out', [App\Http\Controllers\PageController::class, 'postCheckout'])->name('dathang');				




