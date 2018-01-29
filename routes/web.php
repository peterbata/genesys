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

| Route::get('/users/{id}', function ($id) {
|    return 'This is user ' .$id;
| });

| Route::get('/users/{id}/{name}', function ($id, $name) {
|    return 'This is user ' .$name. ' with an id of ' .$id;
});
*/

// Route::get('/client', function () {
//     return view('pages.index');
// });

Route::get('/client', 'PagesController@client');
Route::get('/', 'PagesController@index');
Route::get('/insurance', 'PagesController@insurance');
Route::get('/investment', 'PagesController@investment');
Route::get('/report', 'PagesController@report');

Route::resource('clients', 'ClientsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
