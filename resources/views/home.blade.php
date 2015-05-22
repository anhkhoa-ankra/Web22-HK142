@extends('layouts.master')

@section('title', 'Home')

<?php $haveSlider = true; ?>

@section('content')
@include('layouts.categoryWidget.type1', ['category' => 4])
@include('layouts.categoryWidget.type2', ['category' => 5])
<div class="row">
    <div class="col-sm-3">
       <div class="name-catelogy-blue">
          <a href=""><span><span class="glyphicon glyphicon-thumbs-up"></span> Stay With Us</span></a>
       </div>
    </div>
    <div class="col-sm-12 title-line">
        <div class="line-blue"></div>
    </div>
</div>
<div class="article-title" style="margin-bottom : 50px;">
	<div class="row">
		<div class="col-sm-2 follower-me">	
			<a href="">
				<div class="col-sm-5" style="background-image: url('/images/icon-facebook.png');"></div>
				<div class="col-sm-7 padding-5" style="opacity: 0.7;"><span style="font-weight:bold;">35.500</span><span> Likes</span></div>
			</a>
		</div>
		<div class="col-sm-2 follower-me">
			<a href="">
				<div class="col-sm-5" style="background-image: url('/images/icon-twitter.png');"></div>
				<div class="col-sm-7 padding-5" style="opacity: 0.7;"><span style="font-weight:bold;">120</span><span> Followers</span></div>	
			</a>
		</div>
		<div class="col-sm-2 follower-me">
			<a href="">
				<div class="col-sm-5" style="background-image: url('/images/icon-instagram.png');"></div>	
				<div class="col-sm-7 padding-5" style="opacity: 0.7;"><span style="font-weight:bold;">300</span><span> Subscribers</span></div>
			</a>
		</div>
		<div class="col-sm-2 follower-me">
			<a href="">
				<div class="col-sm-5" style="background-image: url('/images/icon-yahoo.png');"></div>
				<div class="col-sm-7 padding-5" style="opacity: 0.7;"><span style="font-weight:bold;">450</span><span> Followers</span></div>
				</a>
		</div>
		<div class="col-sm-2 follower-me">
			<a href="">
				<div class="col-sm-5" style="background-image: url('/images/icon-youtube.png');"></div>
				<div class="col-sm-7 padding-5"style="opacity: 0.7;"><span style="font-weight:bold;">190</span><span> Subscribers</span></div>
			</a>
		</div>
		<div class="col-sm-2 follower-me">
			<a href="">
				<div class="col-sm-5" style="background-image: url('/images/icon-google-plus.png');"></div>
				<div class="col-sm-7 padding-5" style="opacity: 0.7;"><span style="font-weight:bold;">560</span><span> Followers</span></div>	
			</a>
		</div>
	</div>
</div>
@include('layouts.categoryWidget.dual', ['cat1' => 6, 'cat2' => 7])
@endsection
