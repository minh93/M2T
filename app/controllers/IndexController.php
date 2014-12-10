<?php
class IndexController extends BaseController {
	/*
	* Return index view
	*
	*/

	public function createView(){
		$topics = Topic::all();	
		
		$newestTopics = Topic::all();
		$placeTopics = Topic::all();
		$recipeTopics = Topic::all();

		$data = array(
			'newest' => $newestTopics,
			'place' => $placeTopics,
			'recipe' => $recipeTopics
			);

		return View::make('index')->with('recipeTopics', $recipeTopics)->
		with('placeTopics', $placeTopics)->
		with('newestTopics', $newestTopics);
	}
}