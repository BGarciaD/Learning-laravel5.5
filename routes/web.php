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
    //return view('welcome');
    return 'Home';
});

Route::get('/users', function() {
    return 'Users';
});

Route::get('/users/{id}', function($id) {
    return "Showing user's details: {$id}";
})->where('id', '\d+');

Route::get('/users/new', function() {
    return 'Creating new user';
});

Route::get('/greeting/{name}/{nickname?}', function($name, $nickname = null) {
    if($nickname){
        return "Welcome {$name}, you nickname will be {$nickname}";
    } else {
        return "Welcome {$name}, you didn't choose a nickname";
    }
});
