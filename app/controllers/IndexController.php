<?php
class IndexController extends BaseController {
	/*
	* Return index view
	*
	*/

	public function createView(){
		$topics = Topic::all();	
		
		$listTopic = Topic::orderBy('tCreateAt')->get();

		$newestTopics = new \Illuminate\Database\Eloquent\Collection;		

		for($i = 0; $i < 5; $i++){
			$newestTopics->add($listTopic->get($i));
		}

		$placeTopics = Topic::where('tType', '=', '2')->get();
		$recipeTopics = Topic::where('tType', '=', '1')->get();

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