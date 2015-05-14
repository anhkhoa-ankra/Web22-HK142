@extends('layouts.master')
@section('title', 'Category')
@section('content')
<?php
use App\Category;
$cat = Category::find(1);
$posts = $cat->posts->sortByDesc(function($post) {
    return $post->posted_at;
})->take(5);

for ($i=0; $i < count($posts); $i++) { 
	$datetime[$i] = explode(" ",$posts[$i]->updated_at);
	$date[$i] = $datetime[$i][0];
}

?> <!--
<div class="row">
	<div class="col-sm-4 part-1">
		<div class="large">
			<article id ="post-1" class="post-1" itemtype="http://schema.org/Article" itemscope="itemscope">
				<a class = "post-url" href="#">
					<img src="./images/catelogy-1.jpg" alt="Test1" width="360" height="165" class="img-responsive">
				</a>
				
				<div class="content">
					<h2 class="title">
					<a class="post-url" title="Test1" href="#" rel="bookmark" itemprop="url">
						<span class="post-title" itemprop="headline">Artical 1</span>
					</a>
					</h2>
				</div>
			</article>
		</div>
		
		<article id ="post-2" class="post-2"  itemtype="http://schema.org/Article" itemscope="itemscope">
			<a class = "post-url" href="#">
				<img src="./images/catelogy-1.jpg" alt="Test4" width="360" height="165" class="img-responsive">
			</a>
			
			<div class="content">
				<h2 class="title">
				<a class="post-url" title="Test4" href="#" rel="bookmark" itemprop="url">
					<span class="post-title" itemprop="headline">Artical 4</span>
				</a>
				</h2>
			</div>
		</article>
	</div>
	<div class="col-sm-4 part-2">
		<div class="large">
			<article itemtype="http://schema.org/Article" itemscope="itemscope">
				<a class = "post-url" href="#">
					<img src="./images/catelogy-1.jpg" alt="Test2" width="360" height="165" class="img-responsive">
				</a>
				
				<div class="content">
					<h2 class="title">
					<a class="post-url" title="Test2" href="#" rel="bookmark" itemprop="url">
						<span class="post-title" itemprop="headline">Artical 2</span>
					</a>
					</h2>
				</div>
			</article>
		</div>
		
		<article itemtype="http://schema.org/Article" itemscope="itemscope">
			<a class = "post-url" href="#">
				<img src="./images/catelogy-1.jpg" alt="Test5" width="360" height="165" class="img-responsive">
			</a>
			
			<div class="content">
				<h2 class="title">
				<a class="post-url" title="Test5" href="#" rel="bookmark" itemprop="url">
					<span class="post-title" itemprop="headline">Artical 5</span>
				</a>
				</h2>
			</div>
		</article>
	</div>
	<div class="col-sm-4 part-3">
		<div class="large">
			<article itemtype="http://schema.org/Article" itemscope="itemscope">
				<a class = "post-url" href="#">
					<img src="./images/catelogy-1.jpg" alt="Test3" width="360" height="165" class="img-responsive">
				</a>
				
				<div class="content">
					<h2 class="title">
					<a class="post-url" title="Test3" href="#" rel="bookmark" itemprop="url">
						<span class="post-title" itemprop="headline">Artical 3</span>
					</a>
					</h2>
				</div>
			</article>
		</div>
		
		<article itemtype="http://schema.org/Article" itemscope="itemscope">
			<a class = "post-url" href="#">
				<img src="./images/catelogy-1.jpg" alt="Test6" width="360" height="165" class="img-responsive">
			</a>
			
			<div class="content">
				<h2 class="title">
				<a class="post-url" title="Test6" href="#" rel="bookmark" itemprop="url">
					<span class="post-title" itemprop="headline">Artical 6</span>
				</a>
				</h2>
			</div>
		</article>
	</div>
</div> -->
<!-- <main id="content" class="container" itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" itemscope="" role="main"> -->
<div class="row">
	<div class="col-sm-12 title-line">
		<h4 class="page-heading">
			<span class="h-title">
				Browsing : <i>{{$cat->name}}</i>
			</span>
		</h4>
		<div class="col-sm-2 line-orrange"></div>
		<div class="col-sm-10 line-gray"></div>
	</div>
	<div class="col-sm-12" itemtype="http://schema.org/Blog" itemscope="itemscope">
@for ($i = 0; $i < count($posts); $i+=1)
		<article class= "catelogy-block" itemtype="http://schema.org/Article" itemscope="itemscope">
			<div class="row catelogy-term">
				<div class="col-sm-6">
					<img class="catelogy-term-img .img-responsive" src="{{$posts[$i]->featured_img}}" alt="BAI_1">
				</div>
				<div class="col-sm-6 catelogy-term">
					<div>
						<a class="post-url" title="Post 1" href="{{$posts[$i]->url()}}" rel="bookmark" itemprop="url">
							<span class="post-title" style="font-size: 18px;" itemprop="headline">{{$posts[$i]->title}}</span>
						</a>
						<div class="catelogy-post-time-author row">
							<div class="col-sm-5">
								<span class="glyphicon glyphicon glyphicon-time" aria-hidden="true" />
								<span class="sr-only">Time:</span> {{$date[$i]}}
							</div>
							<div class="col-sm-4">
								<a href="#">
									<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
									<span class="sr-only">Author:</span> {{$posts[$i]->author->name}}
								</a>
								<!-- FOR STAR RATING
								<div class="rating-stars">
									<span style="width: 66%;"></span>
								</div>
								-->
							</div>
							<div class="col-sm-3 title-comment">
								<a href="#" title="Click here to view commentsâ€">
									<span class="glyphicon glyphicon-comment comment" aria-hidden="true" />
									3
								</a>
							</div>
						</div>
						<div class="post-summary" itemprop="description">
							{{$posts[$i]->short_intro}}
						</div>
					</div>
					<a href="{{$posts[$i]->url()}}" class="read-more"><h4><span class="label label-danger">READ MORE</span></h4></a>
				</div>
			</div>
		</article>
@endfor
	</div>
</div>
<!-- </main> -->
@endsection