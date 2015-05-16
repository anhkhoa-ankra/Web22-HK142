<div class="row">
<?php
use App\Category;
$cat = Category::find($cat1);
$posts = $cat->posts->sortByDesc(function($post) {
    return $post->posted_at;
})->take(5);
?>
  <div class="col-sm-6">
    <div class="row">
      <div class="col-sm-6">
        <div class="name-catelogy-blue">
          <a href="{{$cat->url()}}"><span>{{$cat->name}}</span></a>
        </div>
      </div>
      <div class="col-sm-12 title-line">
        <div class="line-blue"></div>
      </div>
    </div>
    <a href="{{$posts[0]->url()}}">
      <div class="column thumbnail">
        <figure style="background-image: url(<?php echo $posts[0]->featured_img; ?>);" class="fixedratio"></figure>
      </div>
    </a>
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
    <div class="row">
    <div class="col-sm-6">
      <div class="name-catelogy-red">
        <a href="{{$cat->url()}}"><span>{{$cat->name}}</span></a>
      </div>
    </div>
    <div class="col-sm-12 title-line">
      <div class="line-red"></div>
    </div>
  </div>
    <a href="{{$posts[0]->url()}}">
      <div class="column thumbnail">
        <figure style="background-image: url(<?php echo $posts[0]->featured_img; ?>);" class="fixedratio"></figure>
      </div>
    </a>
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
