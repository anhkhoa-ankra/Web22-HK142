<?php
  $datetime = explode(" ",$post->updated_at);
  $date = $datetime[0];
?>
<h4><a href="{{$post->url()}}">{{$post->title}}</a></h4>
<span class="glyphicon glyphicon glyphicon-time" aria-hidden="true"></span>
<span class="sr-only">Time:</span> {{$date}}
<a href="#">
<span class="glyphicon glyphicon-thumbs-up like" aria-hidden="true"></span></a>
<span class="badge">20</span>
<a href="#">
<span class="glyphicon glyphicon-comment comment" aria-hidden="true"></span></a>
<span class="badge">20</span>
<p class="content-news">{{$post->short_intro}}</p>
<a href="{{$post->url()}}" class="read-more"><h4><span class="label label-danger">Read More</span></h4></a>
