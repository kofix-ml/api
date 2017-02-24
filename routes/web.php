<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header( 'Access-Control-Allow-Headers: Current-page, Access-Token, Content-Type' );
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/api/news/{id}', 'ApiController@news');
// Route::group(['middleware' => 'cors'], function () 
// {
//     Route::get('/api/news/{id}', 'ApiController@news');
// });

// Route::get('/api/news/{id}', ['middleware' => 'cors', function()
// {
//     return \Response::json(\App\news::all()->paginate(5), 200);
// }]);

