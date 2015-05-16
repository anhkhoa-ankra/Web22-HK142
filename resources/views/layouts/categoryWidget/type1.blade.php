<?php
use App\Category;
$cat = Category::find($category);
$posts = $cat->posts->sortByDesc(function($post) {
    return $post->posted_at;
})->take(7);
?>
<div>
  <h1><a href="{{$cat->url()}}">{{$cat->name}}</a></h1>
</div>
<div class="article-title">
  <div class="row content-news">
    <div class="col-sm-7">
      <div class="column thumbnail">
        <figure style="background-image: url(<?php echo $posts[0]->featured_img; ?>);" class="fixedratio"></figure>
      </div>
    </div>
    <div class="col-sm-5">
@include('layouts.homePostWidget.full', ['post' => $posts[0]])
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <ul class="list-group">
@for ($i = 1; $i < count($posts); $i+=2)
        <li class="list-group-item">
@include('layouts.homePostWidget.small', ['post' => $posts[$i]])
        </li>
@endfor
      </ul>
    </div>
    <div class="col-sm-6">
      <ul class="list-group">
@for ($i = 2; $i < count($posts); $i+=2)
        <li class="list-group-item">
@include('layouts.homePostWidget.small', ['post' => $posts[$i]])
        </li>
@endfor
      </ul>
    </div>
  </div>
</div>
