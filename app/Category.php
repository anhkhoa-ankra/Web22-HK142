<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	//
  public function posts() {
    return $this->hasMany('App\Post');
  }

  public function parent() {
    return $this->belongsTo('App\Post');
  }

  public function childs() {
    return $this->hasMany('App\Post', 'parent_id');
  }

  public function url() {
    return "/" . $this->slug;
  }
}
