<?php

use Illuminate\Support\Facades\Route;

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
//user route

Route::group(['namespace'=>'User'], function(){

    Route::get('/', 'HomeController@index');
    Route::get('single-post', 'PostController@index')->name('single-blog');
   }

);



Route::group (['namespace'=>'Admin'] , function(){
        Route::get('admin/home', 'HomeController@index')->name('admin.home');

        //post route

        Route::resource('admin/post', 'PostController');


        //tag route

        Route::resource('admin/tag', 'TagController');

        //category route
        
        Route::resource('admin/category', 'CategoryController');
        //User route
        Route::resource('admin/user', 'UserController');
   }
  );




