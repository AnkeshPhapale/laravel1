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
    return view('home');
})->name('home');

Route::get('/greets/{name?}', function ($name) {
    return view('actions.greets',['name'=> $name]);
})->name('greets');

Route::get('/hug/{name?}', function ($name) {
    return view('actions.hug',['name'=> $name]);
})->name('hug');

Route::get('/kiss/{name?}', function ($name) {
    return view('actions.kiss',['name'=> $name]);
})->name('kiss');

Route::post('/donenice', function (\Illuminate\Http\Request $request) {

    if(isset($request['action']) && $request['name'])   {

        if(strlen($request['name'])>0) {

            return view('actions.donenice',['action' => $request['action'],'name'=>$request['name']]);
        }
    
       
       }
    
  return redirect()->back();
})->name('donenice');
