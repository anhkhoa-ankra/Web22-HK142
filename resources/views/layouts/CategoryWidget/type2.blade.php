<?php
use App\Category;
$cat = Category::find($category);
$posts = $cat->posts->sortByDesc(function($post) {
    return $post->posted_at;
})->take(5);
?>
<div class="row">
  <div class="col-sm-3">
    <div class="name-catelogy-red">
      <a href="{{$cat->url()}}"><span><span class="glyphicon glyphicon-tint"></span> {{$cat->name}}</span></a>
    </div>
   </div>
   <div class="col-sm-12 title-line">
     <div class="line-red"></div>
  </div>
</div>
<div class="article-title">
  <div class="row">
    <div class="col-sm-6">
      <a href="{{$posts[0]->url()}}">
        <div class="column thumbnail">
          <figure style="background-image: url(<?php echo $posts[0]->featured_img; ?>);" class="fixedratio"></figure>
        </div>
      </a>
@include('layouts.HomePostWidget.full', ['post' => $posts[0]])
    </div>
    <div class="col-sm-6">
      <ul class="list-group">
@for ($i = 1; $i < count($posts); $i++)
        <li class="list-group-item">
@include('layouts.HomePostWidget.small', ['post' => $posts[$i]])
        </li>
@endfor
      </ul>
    </div>
  </div>
</div>
