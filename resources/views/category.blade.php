@extends('layouts.master')
@section('title', 'Category')
@section('content')
<div class="row">
	<div class="col-sm-4 part-1">
		<div class="large">
			<article id ="post-1" class="post-1" itemtype="http://schema.org/Article" itemscope="itemscope">
				<a class = "post-url" href="#">
					<img src="./images/dota2.jpg" alt="Test1" width="360" height="165" class="img-responsive">
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
				<img src="./images/dota2.jpg" alt="Test4" width="360" height="165" class="img-responsive">
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
					<img src="./images/dota2.jpg" alt="Test2" width="360" height="165" class="img-responsive">
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
				<img src="./images/dota2.jpg" alt="Test5" width="360" height="165" class="img-responsive">
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
					<img src="./images/dota2.jpg" alt="Test3" width="360" height="165" class="img-responsive">
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
				<img src="./images/dota2.jpg" alt="Test6" width="360" height="165" class="img-responsive">
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
</div>
<!-- <main id="content" class="container" itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" itemscope="" role="main"> -->
<div class="row">
	<div class="main-content col-sm-12 no-sidebar" itemtype="http://schema.org/Blog" itemscope="itemscope">
		<h1 class="page-heading">
		<span class="h-title">
		<i>Category 1</i>
		</span>
		</h1>
		<article class= "bottom-line blog-block" itemtype="http://schema.org/Article" itemscope="itemscope">
			<div class="row">
				<div class="col-sm-6">
					<img src="./images/dota2.jpg" width="600" height="300" alt="BAI_1" class="img-responsive">
					<span class="term-title term-9">
					<a href="#">Category 1</a>
					</span>
				</div>
				<div class="col-sm-6">
					<h2 class="title">
					<a class="post-url" title="Post 1" href="#" rel="bookmark" itemprop="url">
						<span class="post-title" itemprop="headline">Post 1</span>
					</a>
					</h2>
					<div class="post-details">
						<span class="time">
						<i class="fa fa-clock-o"></i>
						<time class="post-published updated" title="Friday, April 16, 2015, 00:00 am" datetime="2015-04-16T00:00:00+00:00">April 16, 2015</time>
						</span>
						<a class="comments" itemprop="interactionCount" title="Leave a comment on: “Post 1”" href="#">
							<i class="fa fa-comments-o"></i>
						</a>
						<div class="fa rating-stars">
							<span style="width: 66%;"></span>
						</div>
						<span class="author" itemtype="http://schema.org/Person" itemscope="itemscope" itemprop="author">
						<a class="author-url" href="#" itemprop="url">
							<span class="author-name" itemprop="givenName">
							<i class="fa fa-user"></i>
							John Doe
							</span>
						</a>
						</span>
					</div>
					<div class="post-summary" itemprop="description">
						Lorem ipsum quam a platea interdum justo, nostra ligula pretium ultricies euismod aptent, hendrerit velit curae quis risus sagittis a eros tincidunt morbi purus lobortis praesent nibh, consectetur sit pellentesque curabitur senectus litora. Duis ut mollis senectus mollis cursus feugiat duis tortor euismod aenean quisque, lacinia eu orci sodales quisque scelerisque condimentum nibh varius. Accumsan ultrices conubia praesent fringilla nam sed mollis nec potenti volutpat,…
					</div>
					<a class="read-more" propname="url" title="Read More" href="#">
						Read More
					</a>
				</div>
			</div>
		</article>
		<article class="bottom-line blog-block" itemtype="http://schema.org/Article" itemscope="itemscope">
			<div class="row">
				<div class="col-sm-6">
					<img src="./images/dota2.jpg" width="600" height="300" alt="BAI_1" class="img-responsive">
					<span class="term-title term-9">
					<a href="#">Category 1</a>
					</span>
				</div>
				<div class="col-sm-6">
					<h2 class="title">
					<a class="post-url" title="Post 2" href="#" rel="bookmark" itemprop="url">
						<span class="post-title" itemprop="headline">Post 2</span>
					</a>
					</h2>
					<div class="post-details">
						<span class="time">
						<i class="fa fa-clock-o"></i>
						<time class="post-published updated" title="Friday, April 16, 2015, 00:00 am" datetime="2015-04-16T00:00:00+00:00">April 16, 2015</time>
						</span>
						<a class="comments" itemprop="interactionCount" title="Leave a comment on: “Post 1”" href="#">
							<i class="fa fa-comments-o"></i>
						</a>
						<div class="fa rating-stars">
							<span style="width: 66%;"></span>
						</div>
						<span class="author" itemtype="http://schema.org/Person" itemscope="itemscope" itemprop="author">
						<a class="author-url" href="#" itemprop="url">
							<span class="author-name" itemprop="givenName">
							<i class="fa fa-user"></i>
							John Doe
							</span>
						</a>
						</span>
					</div>
					<div class="post-summary" itemprop="description">
						Lorem ipsum proin urna dui phasellus sit donec, consequat commodo tristique feugiat eros eu lorem, primis nullam morbi quis nisi netus tincidunt faucibus arcu et congue lobortis curabitur odio etiam nisl himenaeos est et. Tempus varius semper sagittis imperdiet porta pretium egestas blandit ut imperdiet, fusce adipiscing semper scelerisque in adipiscing arcu fusce tellus etiam, lacinia cras bibendum nisl est vel phasellus ad vehicula. Mattis…
					</div>
					<a class="read-more" propname="url" title="Read More" href="#">
						Read More
					</a>
				</div>
			</div>
		</article>
	</div>
</div>
<!-- </main> -->
@endsection