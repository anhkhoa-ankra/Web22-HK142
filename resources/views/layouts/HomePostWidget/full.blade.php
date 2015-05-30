<?php
  $datetime = explode(" ",$post->updated_at);
  $date = $datetime[0];
?>
<h4><a href="{{$post->url()}}" style="color:#000;">{{$post->title}}</a></h4>
<div class="row date-time-full">
	<div class="col-sm-4">
		<span class="glyphicon glyphicon glyphicon-time" aria-hidden="true"></span>
		<span><time title="{{$post->updated_at}}">{{$date}}</time></span>
	</div>
	<div class="col-sm-5">
		<a href="#" style="color:#000;">
			<span>
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{$post->author->name}}
			</span>
		</a>
		<!-- FOR STAR RATING
		<div class="rating-stars">
			<span style="width: 66%;"></span>
		</div>
		-->
	</div>
	<div class="col-sm-3 title-comment">
		<a href="#" title="Click here to view comments" style="color:#000;">
			<span class="glyphicon glyphicon-comment comment" aria-hidden="true"></span> 3
		</a>
	</div>
</div>
<p class="content-news">{{$post->short_intro}}</p>
<h4><a href="{{$post->url()}}" class="read-more"><span class="label label-danger">Read More</span></a></h4>
