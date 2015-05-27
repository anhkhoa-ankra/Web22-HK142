<?php $current = 'posts'; $sub_current = (isset($post)) ? '' : 'posts-new' ?>

@extends('admin.master')

@if (isset($post))
@section('title', 'Edit Post')
@else
@section('title', 'New Post')
@endif

@section('control')
<button onclick="document.post.submit()" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-save"></span>&nbsp;&nbsp;{{ isset($post)? "Save" : "Publish" }}</button>
@stop

@section('content')
<form method="POST" name="post" action="{{ isset($post)? "/admin/post/" . $post->id : "/admin/post" }}">
@if(isset($post))
  <input type="hidden" name="_method" value="PUT">
@endif
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="post-title">Title</label>
    <input type="text" class="form-control" id="post-title" name="post-title" placeholder="Enter title"@if (isset($post)) value="{{$post->title}}"@endif>
  </div>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="post-img">Featured Image</label>
      <input type="text" id="post-img" name="post-img" class="form-control"@if (isset($post)) value="{{$post->featured_img}}"@endif>
    </div>
    <div class="form-group col-md-6">
      <label for="post-category">Category</label>
      <div class="input-group">
        <span class="input-group-btn">
          <button class="btn btn-success" type="button" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span></button>
        </span>
        <select id="post-category" name="post-category" class="form-control">
<?php
use App\Category;
$categories = Category::all();
?>
@foreach ($categories as $cat)
          <option value="{{$cat->id}}"@if (isset($post) && $post->category->id == $cat->id) {{'selected'}}@endif>{{$cat->name}}</option>
@endforeach
        </select>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="post-intro">Short Intro</label>
    <textarea name="post-intro" id="post-intro" class="form-control" rows="4"></textarea>
  </div>
  <hr />
  <div class="form-group">
    @include('layouts.ckEditorWidget', ['id' => 'post-content', 'content' => (isset($post)) ? $post->content : ""])
  </div>
</form>
@include('layouts.EditCategoryWidget', ['id' => 'myModal'])
@endsection
