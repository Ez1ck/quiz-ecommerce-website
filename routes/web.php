<?php

use Illuminate\Support\Facades\Route;
//use DB;

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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/shop', function () {

    $products = DB::table('products')->get();
    return view('shop', ['products' => $products]);
});

Route::get('/detail/{id}', function (String $id) {

    $products = DB::table('products')->where('id', $id)->get();
    return view('detail', ['products' => $products]);
});
