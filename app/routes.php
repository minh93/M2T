<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$topics = Topic::all();
	return View::make('index')->with('topics',$topics);
});
Route::get('/dev',function(){			
	var_dump(Topic::find(1)->getAllPicPath->first()->imgPath);		
	var_dump(DB::getQueryLog());
});