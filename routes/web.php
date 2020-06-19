<?php

use App\Http\Controllers\HomePage;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/test', function () {
    return view('test');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/' , 'HomePage@index');
Route::get('/blog' , 'HomePage@blog');