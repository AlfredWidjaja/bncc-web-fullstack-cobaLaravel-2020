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

    /*Tugas week 12
    Route::get('/','HomeController@enter');

    Route::get('/register', 'AuthController@join');

    Route::post('/welcome', 'AuthController@signUp');
    */

    //Tugas week 13
    Route::get('/', function(){
        return view('table');
    });

    Route::get('/data-tables',function(){
        return view('data-tables');
    });
?>
