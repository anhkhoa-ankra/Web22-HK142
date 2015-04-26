<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BK Web 22 - @yield('title')</title>
  <link href="/css/app.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
  <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
  <header class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1>
          BKWeb22 <small>Subtext for header</small>
          </h1>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
    <nav id="nav" class="navbar navbar-default">
      <div>
        <!-- Brand and toggle get grouped for better mobile display-->
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#top-navbar-collapse" class="navbar-toggle collapsed">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar">
          </span>
          <span class="icon-bar">
          </span>
          <span class="icon-bar">
          </span>
          </button>
          <a href="/" class="navbar-brand"><span class="glyphicon glyphicon-home"></span></a>
        </div>
        <div id="top-navbar-collapse" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="#">
                Giới thiệu <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle">
                Hoạt động <span class="caret">
                </span>
              </a>
              <ul role="menu" class="dropdown-menu">
                <li>
                  <a href="#">Action</a>
                </li>
                <li>
                  <a href="#">Another action</a>
                </li>
                <li>
                  <a href="#">Something else here</a>
                </li>
                <li class="divider">
                </li>
                <li>
                  <a href="#">Separated link</a>
                </li>
                <li class="divider">
                </li>
                <li>
                  <a href="#">One more separated link</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle">
                Sự kiện <span class="caret">
                </span>
              </a>
              <ul role="menu" class="dropdown-menu">
                <li>
                  <a href="#">Action</a>
                </li>
                <li>
                  <a href="#">Another action</a>
                </li>
                <li>
                  <a href="#">Something else here</a>
                </li>
                <li class="divider">
                </li>
                <li>
                  <a href="#">Separated link</a>
                </li>
                <li class="divider">
                </li>
                <li>
                  <a href="#">One more separated link</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">Liên hệ</a>
            </li>
          </ul>
          <form role="search" class="navbar-form navbar-right">
            <div class="input-group">
              <input type="text" placeholder="Search" class="form-control">
              <div class="input-group-btn">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </nav>
  </div>
  <header class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h1>Hello, world!</h1>
          <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          <p>
          <a href="#" role="button" class="btn btn-primary btn-lg">Learn more »</a>
          </p>
        </div>
        <div class="col-sm-4">
          <div class="row">
            <div class="col-sm-12">
              <h2>Hello, world!</h2>
              <p>
              <a href="#" role="button" class="btn btn-primary btn-lg">Learn more »</a>
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <h2>Hello, world!</h2>
              <p>
              <a href="#" role="button" class="btn btn-primary btn-lg">Learn more »</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
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
  <footer id="footer-large">
    <div class="container">
      <div class="col-sm-4">
        <h4>About Us</h4>
      </div>
      <div class="col-sm-4">
        <h4>Popular Posts</h4>
      </div>
      <div class="col-sm-4">
        <h4>Flickr Photos</h4>
      </div>
    </div>
  </footer>
  <footer id="footer-lower">
    <div class="container">
      <p class="pull-right">
      <a href="#">Back to top</a>
      </p>
      <p>
      &copy; BKWeb22 2015 · <a href="#">Privacy</a> · <a href="#">Terms</a>
      </p>
    </div>
  </footer>
  <!-- Scripts -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <script src="scripts/script.js" type="text/javascript"></script>
</body>
</html>