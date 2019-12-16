<?php
use Illuminate\Http\Request;

Route::post('/', 'CalcController@index')->name('calc');

Route::get('/test1',function () {
    return view('index');
});

Route::post('/testform','MainController@write1');
