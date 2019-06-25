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

Route::get('/', function () {
    return view('101907.home');
});

Route::get('/student', 'StudentController@studentView');
Route::get('/studentAction', 'StudentController@storeStudent')->name('studentAction');

Route::get('/fees', 'FeeController@feesView');
Route::get('/feesAction', 'FeeController@storeFees')->name('feesAction');

Route::get('/amount', 'FeeController@amountView');
Route::get('/AmountAction', 'FeeController@getFees')->name('AmountAction');

