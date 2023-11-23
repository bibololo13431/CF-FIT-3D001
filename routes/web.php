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
    return view('blade.view-blade'); // nó sẽ tìm tới file test trong views
});

Route::get('master', function () {
    return view('layout.master');
});

//function anonymous (ở react gọi là function không tên)
//closure (function không có tên đc gọi ở laravel)

Route::get('product/index', function(){
    echo'Danh sach san pham';
});

Route::get('product/create', function (){
    echo 'Tao san pham';
});

Route::get('product/detail/{id}/{productId?}', function ($id, $productId = null){ // để dấu productId? để không bắt buộc n dùng truyền vô
    echo "Detail san phaim id: $id danh muc san pham: $productId";
});
