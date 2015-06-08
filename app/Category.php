<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	//
  public function posts() {
    return $this->hasMany('App\Post');
  }

  public function parent() {
    return $this->belongsTo('App\Category');
  }

  public function childs() {
    return $this->hasMany('App\Category', 'parent_id');
  }

  public function url() {
    if ($this->id == 1)
      return "";
    else
      return "/" . $this->slug;
  }
}
