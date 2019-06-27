<?php
use \Illuminate\Support\Facades\Route;
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

/**
 * register the design pattern route
 */
Route::prefix('pattern')->namespace('designPattern')->name('pattern::')->group(function() {
    //简单工厂模式
    Route::get('/simpleFactory', 'SimpleFactory@index')->name('simpleFactory');
    //抽象工厂模式
    Route::get('/abstractFactory', 'AbstractFactory@index')->name('abstractFactory');
});
