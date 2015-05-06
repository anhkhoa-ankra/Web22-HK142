<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BK Web 22 - @yield('title')</title>
  <link href="/stylesheets/app.css" rel="stylesheet">
  <link rel="stylesheet" href="/stylesheets/dashboard.css">
  <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">BKWeb22</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
{{-- <li><a href="#">Dashboard</a></li> --}}
{{-- <li><a href="#">Settings</a></li> --}}
{{-- <li><a href="#">Profile</a></li> --}}
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="/auth/logout">Logout</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-right">
          <input type="text" class="form-control" placeholder="Search...">
        </form>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">
<?php
if (!isset($current)) {
  $current = "";
}
if (!isset($sub_current)) {
  $sub_current = "";
}
?>
        <ul class="nav nav-sidebar">
          <li {!! ($current == 'dashboard') ? 'class="active"' : 'class="dropdown"' !!}>
            <a {!! ($current == 'dashboard') ? 'href="#"' : 'class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false"' !!}><span class="glyphicon glyphicon-dashboard"></span> Dashboard{!! ($current == 'dashboard') ? ' <span class="sr-only">(current)</span>' : ' <span class="caret">' !!}</a>
            <ul{!! ($current == 'dashboard') ? '' : ' class="dropdown-menu" role="menu"' !!}>
              <li{!! ($sub_current == 'dashboard-overview') ? ' class="active"' : '' !!}><a href="/admin">Overview</a></li>
              <li><a href="#">Reports</a></li>
              <li><a href="#">Analytics</a></li>
              <li><a href="#">Export</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav nav-sidebar">
          <li {!! ($current == 'posts') ? 'class="active"' : 'class="dropdown"' !!}>
            <a {!! ($current == 'posts') ? 'href="#"' : 'class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false"' !!}><span class="glyphicon glyphicon-pencil"></span> Posts{!! ($current == 'posts') ? ' <span class="sr-only">(current)</span>' : ' <span class="caret">' !!}</a>
            <ul{!! ($current == 'posts') ? '' : ' class="dropdown-menu" role="menu"' !!}>
              <li><a href="">All Posts</a></li>
              <li{!! ($sub_current == 'posts-new') ? ' class="active"' : '' !!}><a href="/admin/post/create">Add New</a></li>
              <li><a href="">Categories</a></li>
              <li><a href="">Tags</a></li>
            </ul>
          </li>
          <li><a href=""><span class="glyphicon glyphicon-file"></span> Pages</a></li>
          <li><a href=""><span class="glyphicon glyphicon-comment"></span> Comments</a></li>
          <li><a href=""><span class="glyphicon glyphicon-camera"></span> Medias</a></li>
        </ul>
        <ul class="nav nav-sidebar">
          <li><a href=""><span class="glyphicon glyphicon-eye-open"></span> Appearance</a></li>
          <li><a href=""><span class="glyphicon glyphicon-user"></span> Users</a></li>
          <li><a href=""><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
        </ul>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">@yield('title')</h1>

        @yield('content')
      </div>
    </div>
  </div>
  <!-- Scripts -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
