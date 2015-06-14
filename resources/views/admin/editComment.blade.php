<?php $current = 'comments'; $sub_current = (isset($post)) ? '' : 'comments-new' ?>

@extends('admin.master')

@if (isset($post))
@section('title', 'Edit Comment')
@else
@section('title', 'New Comment')
@endif

@section('control')
<button onclick="document.comment.submit()" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-save"></span>&nbsp;&nbsp;{{ isset($post)? "Save" : "Publish" }}</button>
@stop

@section('content')
<form method="POST" name="post" action="{{ isset($post)? "/admin/comment/" . $post->id : "/admin/comment" }}">
@if(isset($post))
  <input type="hidden" name="_method" value="PUT">
@endif
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="Auth-name">Author</label>
    <input type="text" class="form-control" id="Auth-name" name="Auth-name" placeholder="Enter title"@if (isset($post)) value="{{$comment->name}}"@endif readonly>
  </div>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="Auth-website">Website</label>
      <input type="text" id="Auth-website" name="Auth-website" class="form-control"@if (isset($post)) value="{{$comment->website}}"@endif readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="Auth-mail">Email</label>
      <input type="text" id="Auth-mail" name="Auth-mail" class="form-control"@if (isset($post)) value="{{$comment->email}}"@endif readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="Post-title">Post title</label>
    <input type="text" class="form-control" id="Post-title" name="Post-title" placeholder="Enter title"@if (isset($post)) value="{{$comment->post->title}}"@endif readonly>
  </div>
  <div class="form-group">
    <label for="post-intro">Content</label>
    <textarea name="post-intro" id="post-intro" class="form-control" rows="4" @if (isset($post)) value="{{$comment->content}}"@endif></textarea>
  </div>
  <div class="form-group">
    <label for="approved">Approved</label>
    <input type="checkbox" class="form-control" id="approved" name="approved" placeholder="Enter title"@if (isset($post)) value="{{$post->approved}}"@endif readonly>
  </div>
</form>
@include('layouts.EditCategoryWidget', ['id' => 'myModal'])
@endsection
