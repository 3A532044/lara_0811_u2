<?php

/*Route::get('/', function () {
   return 'welcome';
});

Route::get('/', function() {
    return view('welcome');
});


Route::get('/', function() {
    return redirect('welcome');
});


Route::get('hello/{name}', function($name) {
    return 'Hello, '.$name;
});


Route::get('hello/{name?}', function($name = 'Everybody') {
    return 'Hello, '.$name;
});


Route::get('say/{name?}', ['as' => 'hello.index', function($name = 'Everybody') {
    return view('welcome');
} ] );

Route::get('dashboard', function() {
    return 'dashboard';
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('dashboard', function() {
        return 'admin dashboard';
    });
});*/

Route::get('/', ['as' => 'home.index', 'uses' =>
    'HomeController@index']);