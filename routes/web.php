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
    return view('superuser.index');
});

Route::get('/admin', 'AdminsController@signin');

Route::group(['middleware' => 'admin'], function (){

    Route::group(['prefix' => 'admin'], function (){

        // Route::get('/product','ProductController@index');
        // Route::get('/product/create','ProductController@create');
        // Route::post('/product/store','ProductController@store');
        // Route::get('/product/search', 'ProductController@search');
        // Route::post('/product/search/' ,'ProductController@search');
        // Route::get('/product/search/{id}', 'ProductController@show');
        // Route::get('/product/{id}/edit', 'ProductController@edit');
        // Route::post('/product/{id}/update', 'ProductController@update');
        // Route::get('/product/delete/{id}', 'ProductController@destroy');
        // Route::get('/product/{id}/view','ProductController@view_stock');
        // Route::post('/product/{id}/create_stock', 'ProductController@create_stock');


    });



});



Route::get('/product','ProductController@index');
Route::get('/product/create','ProductController@create');
Route::post('/product/store','ProductController@store');
Route::get('/product/search', 'ProductController@search');
Route::post('/product/search/' ,'ProductController@search');
Route::get('/product/search/{id}', 'ProductController@show');
Route::get('/product/{id}/edit', 'ProductController@edit');
Route::post('/product/{id}/update', 'ProductController@update');
Route::get('/product/delete/{id}', 'ProductController@destroy');
Route::get('/product/{id}/view','ProductController@view_stock');
Route::post('/product/{id}/create_stock', 'ProductController@create_stock');
Route::get('/product/sales', 'ProductController@make_sales');
Route::post('/product/sales', 'ProductController@make_sales');
Route::get('/product/sales/search', 'ProductController@execute');
Route::post('/product/sales/search', 'ProductController@execute');











// Route::get('/admin/register', 'AdminController@create');
// Route::post('/admin', 'AdminController@')





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// Route::get('/admin/user/roles', ['middleware'=>['web'], function(){




