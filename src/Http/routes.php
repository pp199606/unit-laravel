<?php
/**
 * Created by PhpStorm
 * User: xiaozhu
 * Date: 2019/11/14
 * Time: 10:02
 */

Route::get('/', 'unitController@index');
Route::get('test', 'TestController@index');
Route::post('/', 'unitController@store')->name('unit.store');
