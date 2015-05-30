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
          <a href="{{$cat->url()}}"><span><span class="glyphicon glyphicon-leaf"></span> {{$cat->name}}</span></a>
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
@include('layouts.HomePostWidget.full', ['post' => $posts[0]])
    <div style="margin-top:50px;">
@for ($i = 1; $i < count($posts); $i++)
      <div class="title-news-1">
        <a href="{{$posts[$i]->url()}}" style="color:#000;"><span class="glyphicon glyphicon-play" style="font-size:10px;"></span> {{$posts[$i]->title}}</a>
      </div>
@endfor
    </div>
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
        <a href="{{$cat->url()}}"><span><span class="glyphicon glyphicon-qrcode"></span> {{$cat->name}}</span></a>
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
  @include('layouts.HomePostWidget.small', ['post' => $posts[0]])
    </div>
    <div style="margin-top:50px;">
@for ($i = 1; $i < count($posts); $i++)
      <div class="title-news-1">
        <a href="{{$posts[$i]->url()}}" style="color:#000;"><span class="glyphicon glyphicon-play" style="font-size:10px;"></span> {{$posts[$i]->title}}</a>
      </div>
@endfor
    </div>
  </div>
</div>
