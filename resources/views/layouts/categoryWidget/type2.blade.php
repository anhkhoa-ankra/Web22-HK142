<?php
use App\Category;
$cat = Category::find($category);
$posts = $cat->posts->sortByDesc(function($post) {
    return $post->posted_at;
})->take(5);
?>
<div class="page-header">
  <h1><a href="{{$cat->url()}}">{{$cat->name}}</a></h1>
</div>
<div class="article-title">
  <div class="row">
    <div class="col-sm-6">
      <img src="{{$posts[0]->featured_img}}">
@include('layouts.homePostWidget.full', ['post' => $posts[0]])
    </div>
    <div class="col-sm-6">
      <ul class="list-group">
@for ($i = 1; $i < count($posts); $i++)
        <li class="list-group-item">
@include('layouts.homePostWidget.small', ['post' => $posts[$i]])
        </li>
@endfor
      </ul>
    </div>
  </div>
</div>
