@extends('layouts.master')

@section('title', 'Home')

<?php $haveSlider = true; ?>

@section('content')
@include('layouts.categoryWidget.type1', ['category' => 1])
@include('layouts.categoryWidget.type2', ['category' => 2])
<div class="row">
    <div class="col-sm-3">
       <div class="name-catelogy-blue">
          <a href=""><span>Stay With Us</span></a>
       </div>
    </div>
    <div class="col-sm-12 title-line">
        <div class="line-blue"></div>
    </div>
</div>
<div class="article-title">
	<div class="row">
		<div class="col-sm-2 follower-me">
			<img src="./images/icon-facebook.png">
			<span class="badge">35.500 likes</span>
		</div>
		<div class="col-sm-2 follower-me">
			<img src="./images/icon-twitter.png">
			<span class="badge">120 followers</span>
		</div>
		<div class="col-sm-2 follower-me">
			<img src="./images/icon-youtube.png">
			<span class="badge">300 subscribers</span>
		</div>
		<div class="col-sm-2 follower-me">
			<img src="./images/icon-google-plus.png">
			<span class="badge">450 followers</span>
		</div>
		<div class="col-sm-2 follower-me">
			<img src="./images/icon-yahoo.png">
			<span class="badge">190 subscribers</span>
		</div>
		<div class="col-sm-2 follower-me">
			<img src="./images/icon-instagram.png">
			<span class="badge">560 followers</span>
		</div>
	</div>
</div>
@include('layouts.categoryWidget.dual', ['cat1' => 3, 'cat2' => 4])
@endsection
