@extends('layouts.master')
@section('title', 'Sample Post')
@section('content')
<article>
	<!-- Feature -->
	<div>
		<a href="#" title="The feature !!!" class="img-wrapper">
			<img width="750px" height="350px" src="./images/photodune-370797-fashion-s-750x350.jpg" alt="Sorry, image is not found !"
			class="img-responsive" title="The feature !!!">
		</a>
	</div>
	<!-- Title -->
	<h1 class="post-title"><span>Here is a wonderful title post </span></h1>
	<!-- Date Author Comment Post -->
	<div class="title-line">
		<div class="col-sm-2 line-orrange"></div>
		<div class="col-sm-10 line-gray"></div>
	</div>
	<div class="row date-author-comment">
		<div class="col-sm-2">
			<span><time title="Tuesday, August 12, 2014, 5:49 pm">Aug 12, 2014</time></span>
		</div>
		<div class="col-sm-8">
			<span><a href="#"><span> John Doe</span></a></span>
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
		<p>Lorem ipsum quam a platea interdum justo, nostra ligula pretium ultricies euismod aptent, hendrerit velit curae quis risus sagittis a eros tincidunt morbi purus lobortis praesent nibh, consectetur sit pellentesque curabitur senectus litora.</p>
		<p>Duis ut mollis senectus mollis cursus feugiat duis tortor euismod aenean quisque, lacinia eu orci sodales quisque scelerisque condimentum nibh varius.</p>
		<p>Accumsan ultrices conubia praesent fringilla nam sed mollis nec potenti volutpat, aliquam pellentesque nec cras auctor sapien aliquam proin scelerisque sem, potenti ipsum fringilla a tempus tempor lacinia et class posuere sem dictum nulla aliquet vivamus rutrum nulla.</p>
		<p>Sed commodo pellentesque sodales molestie sed sem, gravida turpis justo ut eleifend, velit interdum donec imperdiet gravida nibh euismod dolor vivamus taciti tempus nam nec felis venenatis tempor egestas tellus.</p>
		<p>Fusce imperdiet eros pulvinar turpis phasellus ac convallis cras, egestas inceptos elementum duis mauris sed nisl, suspendisse aliquam adipiscing sem tristique neque cursus.</p>
		<p>Justo elementum purus placerat vel donec accumsan diam aliquam inceptos, vel vulputate aenean torquent pharetra non interdum mauris, phasellus aliquet posuere vehicula bibendum purus ultrices nisl.</p>
		<p>Mauris phasellus ipsum non posuere potenti hendrerit sit fermentum dictum, scelerisque molestie donec torquent erat sem molestie eget praesent ultricies proin eu dictumst quisque, in tristique placerat velit a massa, nisi semper id duis potenti semper faucibus sed volutpat inceptos adipiscing leo.</p>
		<p>Amet interdum leo laoreet gravida pellentesque habitasse, gravida tempor justo bibendum ac sociosqu, cursus ullamcorper luctus tortor massa cubilia netus semper viverra nisi torquent duis posuere.</p>
		
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
					<p class="test">Lorem ipsum primis elementum et integer tincidunt purus senectus litora luctus, nisi metus hac egestas senectus erat consequat phasellus egestas aliquam pharetra, neque eleifend magna imperdiet neque suspendisse aenean dictumst sit.</p>
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
		<h4><span><a href="#">John Doe</a></span></h4>
	</div>
	<div class="col-sm-2">
		<a href="#" title="Browse Author Articles" >
			<span class="post-author-avatar" itemprop="image">
			<img src="./images/author.jpg" width="80" height="80" alt="John Doe">
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