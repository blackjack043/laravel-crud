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
use Illuminate\Http\Request;
use App\Contact12;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/page2', function () {
    return view('page2',   'ContactController@myData');
});

Route::get('/page3', function () {
    return auth()->user()->admin;

});



Route::post('/profile', 'ContactController@submit');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
