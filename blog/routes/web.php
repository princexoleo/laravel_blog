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

// Route::get('/', function () {
//     return view('welcome');
// });


/*Route::get('/about', function () {
    return view('pages.about');  //This will Go to about page
}); */

Route::get('/','PagesController@index'); //this will also go the index view
Route::get('/about','PagesController@about'); //this will also go the about view
Route::get('/services','PagesController@services'); //this will also go the services view
