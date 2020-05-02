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



Route::group(['middleware' => ['web']], function () {
    

    Route::get('/', function () {
        return view('home');
    })->name('home');
    
    
        //controlllers
     Route::group(['prefix' => 'do'], function () {
         Route::get('/{action}/{name?}',[
    
            'uses' => 'NiceActionController@getNiceAction',
            'as' =>'niceaction'
    
         ]);
     
        
        Route::post('/',[
    
            'uses' => 'NiceActionController@postNiceAction',
            'as' => 'donenice'
    
    
        ]); 
        
    });
    
});










// Route::group(['prefix' => 'do'], function () {
//     Route::get('/greets/{name?}', function ($name) {
//         return view('actions.greets',['name'=> $name]);
//     })->name('greets');
// Route::get('/hug/{name?}', function ($name) {
//     return view('actions.hug',['name'=> $name]);
// })->name('hug');

// Route::get('/kiss/{name?}', function ($name) {
//     return view('actions.kiss',['name'=> $name]);
// })->name('kiss');
