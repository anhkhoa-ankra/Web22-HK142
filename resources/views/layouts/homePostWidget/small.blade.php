<?php
  $datetime = explode(" ",$post->updated_at);
  $date = $datetime[0];
?>
<div class="row">
  <div class="col-sm-5 small-featured"><img src="{{$post->featured_img or "/images/no_img.gif"}}"></div>
  <div class="col-sm-7">
    <a class="content-news-2" href="{{$post->url()}}">{{$post->title or "Undefined"}}</a>
    <p class="content-news-3">
    <span class="glyphicon glyphicon glyphicon-time" aria-hidden="true"></span>
    <span class="sr-only">Time:</span> {{$date}}
    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
    <span class="sr-only">Author:</span> {{$post->author->name}}
    </p>
  </div>
</div>
