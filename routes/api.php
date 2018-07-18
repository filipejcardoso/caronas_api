<?php

use Illuminate\Http\Request;

Route::group(['prefix' =>'v1'],function()
{
	Route::group(['prefix' =>'caronas'],function()
	{
		Route::get('', ['uses' => 'CaronasController@index']);
		Route::get('{id}', ['uses' => 'CaronasController@show']);
		Route::post('', ['uses' => 'CaronasController@store']);
		Route::patch('{id}', ['uses' => 'CaronasController@update']);
		Route::delete('{id}', ['uses' => 'CaronasController@destroy']);
	});
});

