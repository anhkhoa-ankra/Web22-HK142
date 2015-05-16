<div class="row">
<?php
use App\Category;
$cat = Category::find($cat1);
$posts = $cat->posts->sortByDesc(function($post) {
    return $post->posted_at;
})->take(5);
?>
  <div class="col-sm-6">
    <div>
      <h1><a href="{{$cat->url()}}">{{$cat->name}}</a></h1>
    </div>
    <div class="column thumbnail">
      <figure style="background-image: url(<?php echo $posts[0]->featured_img; ?>);" class="fixedratio"></figure>
    </div>
@include('layouts.homePostWidget.full', ['post' => $posts[0]])
@for ($i = 1; $i < count($posts); $i++)
    <div class="title-news-1">
      <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
      <a href="{{$posts[$i]->url()}}">{{$posts[$i]->title}}</a>
    </div>
@endfor
  </div>
<?php
$cat = Category::find($cat2);
$posts = $cat->posts->sortByDesc(function($post) {
    return $post->posted_at;
})->take(5);
?>
  <div class="col-sm-6">
    <div>
      <h1><a href="{{$cat->url()}}">{{$cat->name}}</a></h1>
    </div>
    <div class="column thumbnail">
      <figure style="background-image: url(<?php echo $posts[0]->featured_img; ?>);" class="fixedratio"></figure>
    </div>
    <div style="max-height:250px;">
@include('layouts.homePostWidget.full', ['post' => $posts[0]])
    </div>
@for ($i = 1; $i < count($posts); $i++)
    <div class=" title-news-1">
      <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
      <a href="{{$posts[$i]->url()}}">{{$posts[$i]->title}}</a>
    </div>
@endfor
  </div>
</div>
