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

Route::get('/',function (){
    $name='<span style="color:red">wwww</span>';
    return view('books.index')->with([
        'website' => '1111',
        'name'=>$name
    ]);
});


Route::resource('users','UserController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
