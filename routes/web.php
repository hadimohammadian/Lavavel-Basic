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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/tr",'SliderController@top');



Route::get('/slider', function () {
    return "Hello Hadi This page is slider";
})->name('slider.index');

Route::get('/slider/{id}', function ($id = null) {
    return "<h1>ID id :  </h1>" . $id;
});

Route::get('/pick/{id?}', function ($id = null) {
    return "<h1>PICK is :  </h1>" . $id;
})->where(['id' => '[0-9]+'])->name('pick.id');

Route::get('/userinfo/{name}/{family}', function ($name, $family) {
    return "<h1>name is :" . $name . "</h1></br>" . "<h1> Family is :   " . $family . "</h1></br>";
});

Route::get('/jet/{name}', function ($name) {
    return $name;
})->where(['name' => '[a-zA-Z]+']);

Route::redirect("/hadi/low", "/slider", 302);
Route::redirect('/slider', "/", 302);

Route::prefix("admin")->group(function () {
    Route::get("/home", function () {
        return "admin - home";
    });
    Route::get("/about", function () {
        return "admin - about";
    });
    Route::get("/call", function () {
        return "admin - call";
    });
});

Route::get('/fi' , "FirstController@index")->name('FirstController.index');
Route::get('/fa' , "FirstController@about")->name('FirstController.about');
Route::get("/fg/{user}/{pass}","FirstController@getuser")->name('FirstController.getuser');


//Route is so big

