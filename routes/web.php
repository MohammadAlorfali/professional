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

/* Route::get('/', function () {
    $data = [];
    $data['age'] = 21;
    $data['name'] = 'Mohammad AlOrfali';
    return view('welcome', $data);
    //return view('welcome')->with(['name'=>'Mohammad AlOrfali','age'=>21]);
}); */
Route::get('/', 'Front\UserController@getIndex');

Route::get('/test/{id?}', function ($id) {
    return $id;
})->name('a');
Route::get('/landing',function(){
    return view('landing');
});
Route::get('/about',function(){
    return view('about');
});
Route::namespace ('Front')->group(function () {

    //all routes only access controller or methods in folder name Front
    Route::get('users', 'UserController@showUserName');
});
/* Route::prefix('users')->group(function () {

//you will add 'users' befor all routes in group .
Route::get('show', 'Front\UserController@showUserName');
Route::delete('delete', 'Front\UserController@showUserName');
Route::get('edit', 'Front\UserController@showUserName');
Route::put('update', 'Front\UserController@showUserName');
});
 */
Route::group(['prefix' => 'users', 'namespace' => 'Front', 'middleware' => 'auth'], function () {

    //you will add 'users' befor all routes in group .
    Route::get('show', 'UserController@showUserName');
    Route::delete('delete', 'UserController@showUserName');
    Route::get('edit', 'UserController@showUserName');
    Route::put('update', 'UserController@showUserName');
});

/* Route::get('check',function(){
retry 'middleware';
})->middleware('auth');

 */
Route::get('front', 'Front\FirstCon@showName');

Route::resource('news', 'NewsController');
/* The last line can be like the next six lines */
/* Route::get('news','NewsController@index');
Route::get('news','NewsController@store');
Route::get('news/create','NewsController@create');
Route::get('news/{id}/edit','NewsController@edit');
Route::get('update/{id}','NewsController@update');
Route::get('news/{id}','NewsController@delete'); */

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
