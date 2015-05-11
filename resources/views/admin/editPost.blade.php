<?php $current = 'posts'; $sub_current = (isset($post)) ? '' : 'posts-new' ?>

@extends('admin.master')

@if (isset($post))
@section('title', 'Edit Post')
@else
@section('title', 'New Post')
@endif

@section('content')
<form method="POST" action="{{ isset($post)? "/admin/post/" . $post->id : "/admin/post" }}">
  @if(isset($post))
  <input type="hidden" name="_method" value="PUT">
  @endif
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="post-title">Title</label>
    <input type="text" class="form-control" id="post-title" name="post-title" placeholder="Enter title" @if (isset($post)) value="{{$post->title}}" @endif>
  </div>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="post-img">Featured Image</label>
      <input type="text" id="post-img" name="post-img" class="form-control" @if (isset($post)) value="{{$post->featured_img}}" @endif>
    </div>
    <div class="form-group col-md-6">
      <label for="post-category">Category</label>
      <select id="post-category" name="post-category" class="form-control">
<?php
use App\Category;
$categories = Category::all();
?>
@foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
@endforeach
      </select>
    </div>    
  </div>
  <hr />
  <div class="form-group">
    @include('layouts.ckEditorWidget', ['id' => 'post-content', 'content' => (isset($post)) ? $post->content : ""])
  </div>
  <button type="submit" class="btn btn-primary">{{ isset($post)? "Save" : "Publish" }}</button>
</form>
@endsection
