<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BK Web 22 - @yield('title')</title>
  <link href="/stylesheets/app.css" rel="stylesheet">
  <link rel="stylesheet" href="/stylesheets/dashboard.css">
  <link href='//fonts.googleapis.com/css?family=Roboto:400italic,700italic,300,700,300italic,400&subset=latin,vietnamese,latin-ext' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;{{ Auth::user()->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">My Profile</a></li>
            </ul>
          </li>
          <li><a href="/auth/logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Logout</a></li>
        </ul>
        {{-- <form class="navbar-form navbar-right">
          <input type="text" class="form-control" placeholder="Search...">
        </form> --}}
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
          <li{!! ($current == 'dashboard') ? ' class="active"' : '' !!}>
            <a{!! ($current == 'dashboard') ? '' : ' data-toggle="collapse" href="#dashboard-menu" aria-expanded="false" aria-controls="dashboard-menu"' !!}><span class="glyphicon glyphicon-dashboard"></span>&nbsp;&nbsp;Dashboard{!! ($current == 'dashboard') ? ' <span class="sr-only">(current)</span>' : ' <span class="caret">' !!}</a>
            <ul id="dashboard-menu" class="nav-submenu{{($current == 'dashboard') ? '' : ' collapse'}}">
              <li{!! ($sub_current == 'dashboard-overview') ? ' class="active"' : '' !!}><a href="/admin">Overview</a></li>
              <li><a href="#">Reports</a></li>
              <li><a href="#">Analytics</a></li>
              <li><a href="#">Export</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav nav-sidebar">
          <li{!! ($current == 'posts') ? ' class="active"' : '' !!}>
            <a{!! ($current == 'posts') ? '' : ' data-toggle="collapse" href="#posts-menu" aria-expanded="false" aria-controls="posts-menu"' !!}><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Posts{!! ($current == 'posts') ? ' <span class="sr-only">(current)</span>' : ' <span class="caret">' !!}</a>
            <ul id="posts-menu" class="nav-submenu{{($current == 'posts') ? '' : ' collapse'}}">
              <li{!! ($sub_current == 'posts-all') ? ' class="active"' : '' !!}><a href="/admin/post">All Posts</a></li>
              <li{!! ($sub_current == 'posts-new') ? ' class="active"' : '' !!}><a href="/admin/post/create">Add New</a></li>
              <li><a href="">Categories</a></li>
              <li><a href="">Tags</a></li>
            </ul>
          </li>
          <li><a href=""><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;Pages</a></li>
          <li><a href=""><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;Comments</a></li>
          <li><a href=""><span class="glyphicon glyphicon-camera"></span>&nbsp;&nbsp;Medias</a></li>
        </ul>
        <ul class="nav nav-sidebar">
          <li><a href=""><span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;Appearance</a></li>
          <li><a href=""><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Users</a></li>
          <li><a href=""><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Settings</a></li>
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
  <script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
  <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>
  <script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
  <script>
@yield('script')
  </script>
</body>
</html>
