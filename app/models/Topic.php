<?php

class Topic extends Eloquent {
	protected $table = 'topics';

	public function getAllPicPath(){
		return $this->hasMany('PicDescription','tID');
	}	
}