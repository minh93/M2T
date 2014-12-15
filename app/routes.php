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

Route::get('/', 'IndexController@createView');
Route::get('index', function()
{
	$topics = Topic::all();
	return View::make('index')->with('topics',$topics);
});
Route::get('details{id?}', 'DetailController@showDetail');

Route::get('about', function()
{	
	return View::make('about');
});

Route::get('searchResults/{query}', 'SearchController@listResult');

Route::get('searchResults/{query?}', function(){
	if (Input::has('query'))
		{
		    $query = Input::get('query'); 
		    return Redirect::action('SearchController@listResult', array('$query' => $query));
		}else{
			$query = "";
		}		
});
/*
|
|
|
*/
Route::get('/dev/allplace',function()
{
	// FIXME: Return nearest place
	$topics = Topic::all();
	return Response::json($topics);
});
Route::get('/dev/allquery{query?}',function()
{
	//Simple search
	$query = Input::get('query');

	$queries = Query::all();
	$queries = $queries -> filter(function($item) use (&$query)
	{
		
		if(strpos($item->value, $query) !== false)
			return true;
		else
			return false;
	});	
	$result = array("query" => $query,"suggestions" => $queries);
	return Response::json($result);
});
Route::get('/dev/testquery',function(){
				
	return var_dump(Query::where('data', '=', '#gaixinh')->get()->find(1)->value);
});
