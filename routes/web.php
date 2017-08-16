<?php

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

Route::get('/', 'PagesController@index');
Route::get('/compare-product', 'PagesController@compareProduct')->name('compare_product');
Route::post('/get-car-vehicles', 'PagesController@getListCarVehicle');
Route::post('/get-list-car-vehicle-years', 'PagesController@getListCarVehicleYears');
Route::get('/add-car', 'PagesController@addCar');

Route::get('admin',function (){
    return 'admin';
})->name('admin_home')->middleware('auth');
Route::get('logout',function (){
    return 'admin';
})->name('admin_logout');
Route::get('login', function(){
    return 'login';
});