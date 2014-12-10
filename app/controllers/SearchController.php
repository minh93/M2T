<?php
class SearchController extends BaseController {
	/*
	* Show search result base on query
	*
	*/

	public function listResult($query){
		$topics = Topic::all();	
		$subList = new \Illuminate\Database\Eloquent\Collection;

		foreach ($topics as $item) {
			$subList->add($item);
		}

		return View::make('searchResults')->with('topics',$subList);
	}
}