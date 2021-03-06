<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BKITSec - @yield('title')</title>
  <link href="/stylesheets/app.css" rel="stylesheet">
  <link rel="stylesheet" href="/stylesheets/style.css">
  <link rel="stylesheet" href="/stylesheets/comments.css">
  <link href='//fonts.googleapis.com/css?family=Roboto:400italic,700italic,300,700,300italic,400&subset=latin,vietnamese,latin-ext' rel='stylesheet' type='text/css'>
  <script src="/javascripts/angular.min.js" type="text/javascript"></script>
  <script src="/javascripts/comment.js" type="text/javascript"></script>
</head>
<body>
@include('layouts.header')
@include('layouts.navbar')
@if (isset($haveSlider) && $haveSlider)
@include('layouts.slider')
@endif
  <div class="container">
    <div class="row">
      <article class="col-sm-8">
        @yield('content')
      </article>
      <aside class="col-sm-4" id="sidebar-main">
        <div class="row">
          <div class="col-sm-12">
            <h4>Social Counter</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <h4>Social Counter</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <h4>Custom Menu</h4>
          </div>
        </div>
      </aside>
    </div>
  </div>
@include('layouts.footer')
  <!-- Scripts -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <script src="/javascripts/script.js" type="text/javascript"></script>
  <script>
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
  </script>
</body>
</html>