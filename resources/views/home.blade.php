@extends('layouts.master')

@section('title', 'Home')

<?php $haveSlider = true; ?>

@section('content')
@include('layouts.categoryWidget.type1', ['category' => 1])
@include('layouts.categoryWidget.type2', ['category' => 1])
<div class="page-header">
	<h1><a href="/category">Stay With Us</a></h1>
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
@include('layouts.categoryWidget.dual', ['cat1' => 1, 'cat2' => 1])
@endsection
