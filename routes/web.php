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
//    $isLoggedIn = \Illuminate\Support\Facades\Auth::check();
//
//    if ($isLoggedIn) {
//        echo "logged in ";
//    } else {
//        echo "not logged in";
//    }
//
//    exit;
    return view('welcome');
});


Route::get('/autologin', function() {
    $username = 'sanil@tiggacom.com';
    $password = 'sanil_123';

    if (\Illuminate\Support\Facades\Auth::attempt(['email' => $username, 'password' => $password])) {
        exit('login successful');
    } else {
        exit('faild to login');
    }

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin/user/roles',['middleware'=>'role', function(){
    return "Middleware role";
}]);


Route::get('/admin','AdminController@index');



Route::get('/test', function () {
    return;
});
