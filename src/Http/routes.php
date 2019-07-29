<?php
/**
 * Created by PhpStorm.
 * User: sabo
 * Date: 2019/7/25 025
 * Time: 19:53:28
 */
Route::get('/','JunitController@index');
Route::post('/','JunitController@store')->name('junit.store');