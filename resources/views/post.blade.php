@extends('layouts.master')
@section('title', $post->title)
@section('content')
<?php
  $datetime = explode(" ",$post->updated_at);
  $date = $datetime[0];
?>
<article>
	<!-- Feature -->
	<div>
		<a href="#" title="The feature !!!" class="img-wrapper">
			<img width="750px" height="350px" src="{{$post->featured_img}}" alt="Sorry, image is not found !"
			class="img-responsive" title="The feature !!!">
		</a>
	</div>
	<!-- Title -->
	<h1 class="post-title"><span>{{$post->title}}</span></h1>
	<!-- Date Author Comment Post -->
	<div class="title-line">
		<div class="col-sm-2 line-orrange"></div>
		<div class="col-sm-10 line-gray"></div>
	</div>
	<div class="row date-author-comment">
		<div class="col-sm-2">
			<span><time title="Tuesday, August 12, 2014, 5:49 pm">{{$date}}</time></span>
		</div>
		<div class="col-sm-8">
			<span><a href="#"><span>{{$post->author->name}}</span></a></span>
			<!-- FOR STAR RATING
			<div class="rating-stars">
				<span style="width: 66%;"></span>
			</div>
			-->
		</div>
		<div class="col-sm-2 title-comment">
			<a href="#" title="Click here to view commentsâ€">3</a>
		</div>
	</div>
	<!-- Content -->
	<div class="post-content">
		{!!$post->content!!}
		
		<section class="the-best-review">
			<div class="clearfix">
				<div class="col-sm-2 rate-review">
					<span class="rate">66<span class="percentage">%</span></span>
					<span class="verdict-title">Awesome</span>
				</div>
				<div ckass="content-tbr col-sm-10">
					<h4 class="uppercase">
					<span class="title-tbr">The Best Review</span>
					</h4>
					<div class="rate-line">
						<div class="col-sm-2 line-orrange"></div>
						<div class="col-sm-8 line-gray"></div>
					</div>
					<p class="content-percentage">Lorem ipsum primis elementum et integer tincidunt purus senectus litora luctus, nisi metus hac egestas senectus erat consequat phasellus egestas aliquam pharetra, neque eleifend magna imperdiet neque suspendisse aenean dictumst sit.</p>
				</div>
			</div>
			<ul class="the-best-review-list col-sm-12">
				<li class="clearfix">
					<div class="criterion">
						<span class="title">Viverra varius</span>
					</div>
				</li>
				<li class="clearfix boder-gray">
					<div class="criterion">
						<span class="title">Viverra varius</span>
					</div>
				</li>
				<li class="clearfix boder-gray">
					<div class="criterion">
						<span class="title">Viverra varius</span>
					</div>
				</li>
				<li class="clearfix boder-gray">
					<div class="criterion">
						<span class="title">Viverra varius</span>
					</div>
				</li>
			</ul>
		</section>
	</div>
	<div>
		<p>
		Categories: <a href="#" class="link-red">Fasion</a><span> , </span><a href="#" class="link-red">Reviews</a>
		</p>
	</div>
	<div>
		<p class="terms-list">
		Tags: <a href="#" class="link-red">Girl</a>
		</p>
	</div>
</article>
<section class="social-share clearfix">
	<span class="share">SHARE</span>
	<div>
		<ul>
			<li class="facebook"><a href="#"><span>Facebook</span></a></li>
			<li class="twitter"><a href="#"><span>Twitter</span></a></li>
			<li class="google"><a href="#" ><span>Google+</span></a></li>
			<li class="printerest"><a href="#"><span>Pinterest</span></a></li>
			<li class="linkedin"><a href="#"><span>Linkedin</span></a></li>
			<li class="tumblr"><a href="#"><span>Tumblr</span></a></li>
			<li class="email"><a href="#"><span>Email</span></a></li>
		</ul>
	</div>
</section>
<section class="post-author">
	<div class="title-author">
		<h4><span><a href="#">{{$post->author->name}}</a></span></h4>
	</div>
	<div class="col-sm-2">
		<a href="#" title="Browse Author Articles" >
			<span class="post-author-avatar" itemprop="image">
			<img src="/images/author.jpg" width="80" height="80" alt="John Doe">
			</span>
		</a>
	</div>
	<div class="col-sm-10" >
		<p>Celery quandong swiss chard chicory earthnut pea potato. Salsify taro catsear garlic gram celery bitterleaf wattle seed collard greens nori. Grape wattle seed kombu beetroot horseradish carrot squash brussels sprout chard.</p>
	</div>
</section>
<div class="next-prev">
	<div class="col-sm-6 next-prev">
		<div class="previous">
			<p class="title-next-pre">&lt; Previous Article</p>
			<p class="">
			<a href="#" rel="prev">Fashionable Run </a>
			</p>
		</div>
	</div>
	<div class="col-sm-6 next-prev">
		<div class="next">
			<p class="title-next-pre clearfix">Next Article &gt;</p>
			<p class="clearfix">
			<a href="#" rel="next">Taste That Strawberry!</a>
			</p>
		</div>
	</div>
</div>
<section class="clearfix"></section>
<div class="comments-form">
<div><h4><span>Leave A Reply</span></h4></div>
<form>
	<p>Your email address will not be published.</p>
	<p><input name="author" id="author" type="text" value="" size="45" aria-required="true" placeholder="Your Name"></p>
	<p><input name="email" id="email" type="text" value="" size="45" aria-required="true" placeholder="Your Email"></p>
	<p><input name="url" id="url" type="text" value="" size="45" placeholder="Your Website"></p>
	<p>
	<textarea name="comment" id="comment" cols="45" rows="10" aria-required="true" placeholder="Your Comment" style="margin-left: 0px; margin-right: 0px; width: 745px;"></textarea>
	</p>
	<p class="form-submit">
	<input name="submit" type="submit" id="comment-submit" class="post-comment" value="Post Comment">
	</p>
</form>
</div>
@endsection