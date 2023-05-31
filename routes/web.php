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

use Illuminate\Support\Facades\Schema;
Route::get('database',function(){
    Schema::create('loaisanpham',function($table){
        $table->increments('id');
        $table->string('ten',200);
    });
    echo"Đã thực hiện lệnh tạo bảng thành công";
});
