<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome', [
        'pageclass' => 'home'
    ]);
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/menu', 'MenuController@index');

Route::get('/about', 'AboutController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/admin', 'AdminController@index');

Route::get('/adminmenu', 'AdminMenuController@index');

Route::get('/myorders', 'MyOrdersController@index');

Route::get('/createmenu', 'CreateMenuController@index');

Route::post('menusubmit', 'SubmitMenuController@save');

Route::post('contactsubmit', 'SubmitContactController@save');

Route::get('/placeorder', 'PlaceOrderController@save');

