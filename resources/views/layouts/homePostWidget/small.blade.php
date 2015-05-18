<?php
  $datetime = explode(" ",$post->updated_at);
  $date = $datetime[0];
?>
<div class="row">
  <div class="col-sm-5">
    <a href="$post->url()">
      <div class="column thumbnail">
        <figure style="background-image: url(<?php echo $post->featured_img; ?>);" class="fixedratio"></figure>
      </div>
    </a>
  </div>
  <div class="col-sm-7">
    <a href="{{$post->url()}}" style="color:#000;">{{$post->title or "Undefined"}}</a>
    <p class="date-time">
      <span class="glyphicon glyphicon glyphicon-time" aria-hidden="true"></span>
      <span class="sr-only">Time:</span> {{$date}}
      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
      <span class="sr-only">Author:</span> {{$post->author->name}}
    </p>
  </div>
</div>
