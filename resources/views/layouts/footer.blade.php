<?php
use App\Post;
$posts = Post::all()->sortByDesc(function($post) {
    return $post->posted_at;
})->take(3);

for ($i=0; $i < count($posts); $i++) { 
  $datetime[$i] = explode(" ",$posts[$i]->updated_at);
  $date[$i] = $datetime[$i][0];
}

?>
<footer id="footer-large">
  <div class="container">
    <div class="col-sm-4 footer-large-font">
      <div class="title-footer">
        <h4><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> About Us</h4>
      </div>
      <img src="/images/logo.png">
      <p>
        Commodo est netus nisi aptent eros mollis dolor, sem curabitur est auctor sem magna erat diam.
      </p>
      <p>
        Subscribe to our newsletter:
      </p>
      <p><input type="text" id="feedburner-email" name="email" class="submit-form-control" aria-required="true" placeholder="Email Address">
      <input name="submit" type="submit" id="comment-submit" class="btn btn-danger" value="SUBMIT" style="font-weight:600;"></p>
    </div>
    <div class="col-sm-4">
      <div class="title-footer name-catelogy-blue">
        <h4><span class="glyphicon glyphicon-signal" aria-hidden="true"></span> Popular Posts</h4>
      </div>
@for ($i = 0; $i < count($posts); $i++)
      <div class="row">
        <div class="col-sm-4">
           <a href="{{$posts[$i]->url()}}">
             <div class="column">
               <figure style="background-image: url(<?php echo $posts[$i]->featured_img; ?>);" class="fixedratio"></figure>
            </div>
          </a>
         </div>
        <div class="col-sm-8">
           <a href="{{$posts[$i]->url()}}" style="color:#FFF;">{{$posts[$i]->title or "Undefined"}}</a>
           <p class="date-time-small">
             <span class="glyphicon glyphicon glyphicon-time" aria-hidden="true"></span>
             <span class="sr-only">Time:</span> {{$date[$i]}}
             <a href="#" style="color:#FFF; text-decoration: none;">
              <span> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{$posts[$i]->author->name}}</span>
              </a>
           </p>
         </div>
      </div>
@endfor
    </div>
    <div class="col-sm-4">
      <div class="title-footer">
        <h4><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Flickr Photos</h4>
      </div>
      <div class="clear-fix" style="margin-top:25px;">
        <div class="column col-sm-3 my-col-sm">
            <figure style="background-image: url('/images/business_1.jpg');" class="fixedratio fixedratio-footer"></figure>
        </div>
        <div class="column col-sm-3 my-col-sm">
            <figure style="background-image: url('/images/business_2.jpg');" class="fixedratio fixedratio-footer"></figure>
        </div>
        <div class="column col-sm-3 my-col-sm">
            <figure style="background-image: url('/images/business_3.jpg');" class="fixedratio fixedratio-footer"></figure>
        </div>
        <div class="column col-sm-3 my-col-sm">
            <figure style="background-image: url('/images/business_4.jpg');" class="fixedratio fixedratio-footer"></figure>
        </div>
      </div>
      <div class="clear-fix" style="margin-top: 100px;">
        <div>
        <div class="column col-sm-3 my-col-sm">
            <figure style="background-image: url('/images/business_5.jpg');" class="fixedratio fixedratio-footer"></figure>
        </div>
        <div class="column col-sm-3 my-col-sm">
            <figure style="background-image: url('/images/business_6.jpg');" class="fixedratio fixedratio-footer"></figure>
        </div>
        <div class="column col-sm-3 my-col-sm">
            <figure style="background-image: url('/images/business_7.jpg');" class="fixedratio fixedratio-footer"></figure>
        </div>
        <div class="column col-sm-3 my-col-sm">
            <figure style="background-image: url('/images/catelogy-1.jpg');" class="fixedratio fixedratio-footer"></figure>
        </div>
      </div>
      </div>
    </div>
  </div>
</footer>
<footer id="footer-lower" style="background-color: #1F2736;">
  <div class="container">
    <p class="pull-right">
    <a href="#top">Back to top</a>
    </p>
    <p>
    &copy; BKWeb22 2015 · <a href="#">Privacy</a> · <a href="#">Terms</a>
    </p>
  </div>
</footer>
