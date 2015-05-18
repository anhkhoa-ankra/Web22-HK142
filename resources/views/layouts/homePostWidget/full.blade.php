<?php
  $datetime = explode(" ",$post->updated_at);
  $date = $datetime[0];
?>
<h4><a href="{{$post->url()}}" style="color:#000;">{{$post->title}}</a></h4>
<div class="date-time">
	<span class="glyphicon glyphicon glyphicon-time" aria-hidden="true"></span>
	<span class="sr-only">Time:</span> {{$date}}
	<a style="text-decoration: none;" href="#">
		<span class="glyphicon glyphicon-thumbs-up like" aria-hidden="true"></span>
		<span class="badge">20</span>
	</a>
	<a style="text-decoration: none; " href="#">
		<span class="glyphicon glyphicon-comment comment" aria-hidden="true"></span>
		<span class="badge">20</span>
	</a>
</div>
<p class="content-news">{{$post->short_intro}}</p>
<h4><a href="{{$post->url()}}" class="read-more"><span class="label label-danger">Read More</span></a></h4>
