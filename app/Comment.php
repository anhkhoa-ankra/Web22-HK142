<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	//
	public function post() {
		return $this->belongsTo('App\Post');
	}

	public function author() {
		return $this->belongsTo('App\User', "user_id");
	}

	public function parent() {
		return $this->belongsTo('App\Comment');
	}

	public function childs() {
		return $this->hasMany('App\Comment', 'parent_id');
	}
}
