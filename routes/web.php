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

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    //Tugas week 13

    Route::get('/', function(){
        return view('table');
    });

    Route::get('/data-tables',function(){
        return view('data-tables');
    });


    Route::get('/pertanyaan', 'PertanyaanController@index');
    Route::get('/pertanyaan/create', 'PertanyaanController@create')
        ->middleware('auth');
    Route::post('/pertanyaan', 'PertanyaanController@store')
        ->middleware('auth');
    Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@show');
    Route::get('/pertanyaan/{pertanyaan_id}/edit', 'PertanyaanController@edit')
        ->middleware('auth');
    Route::put('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@update')
        ->middleware('auth');
    Route::delete('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@destroy')
        ->middleware('auth');

?>
