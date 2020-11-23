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

//Route::get('/', function (){
//    return view('index');
//})->name('main');
//Route::get('/about', function (){
//    return view('about-us');
//})->name('about');
//Route::get('/works', function(){
//    return view('work');
//})->name('works');
//Route::get('/blog', function (){
//    return view('blog');
//})->name('blog');
Route::get('/news', 'PostController@ViewPosts')->name('posts');
Route::post('/request','CLController@SendRequest')->name('request');
//Route::get('/main/works','PostController@ViewWorks')->name('mainWorks');

Route::get('/','PageController@Main')->name('main');
Route::get('/about','PageController@About')->name('about');
Route::get('/works','PageController@Works')->name('works');
Route::get('/blog','PageController@Blog')->name('blog');
Route::get('/contacts','PageController@Contacts')->name('contacts');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/request','CLController@SendRequest')->name('request');
