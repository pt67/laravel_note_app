<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Post;
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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home', 'postController@store');

Route::get('/home/edit/{id}', 'postController@edit')->name('edit');

Route::post('/home/edit/{id}', 'postController@update')->name('update');

Route::get('/home/delete/{id}', 'postController@destroy')->name('delete');

Route::any ('/search', function (Request $request) {
    $q = $request->get('q');
//dd($q);
   $result = Post::where ('title', 'LIKE', '%' . $q . '%')->get();
    if (count($result ) > 0)
        return view('search')->withDetails($result)->withQuery( $q );
    else
        return view('search')->withMessage('No Details found. Try to search again !');


} );






