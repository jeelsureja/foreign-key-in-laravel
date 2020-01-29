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
Auth::routes();

Route::redirect('/','/login');

Route::group(["middleware"=>'auth'],function(){  
    Route::resource('/admin/category','categorycontroller');   
    Route::get('/home', 'HomeController@index')->name('home');
    Route::match(['get,post'],'register',function(){
    });
    Route::resource('/admin/category', 'categorycontroller');
    Route::resource('/admin/allcategory','allcategorycontroller');
    Route::resource('/admin/friendship', 'friendshipcatcontroller');
    Route::resource('/admin/inspirational', 'inspirationalcatcontroller');
    Route::resource('/admin/motivational', 'motivationalcatcontroller');
    Route::resource('/admin/sad', 'sadcatcontroller');
    Route::resource('/admin/success', 'successcatcontroller');
    });
 
