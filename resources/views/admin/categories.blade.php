<?php $current = 'posts'; $sub_current = 'posts-categories' ?>

@extends('admin.master')

@section('title', 'Categories')

@section('control')
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#new-post-widget"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Add new</button>
@stop

@section('content')
@include('layouts.AllCategoryWidget', [
  'id' => 'categories_datatable',
  'modal' => 'edit-post-widget',
])
@include('layouts.EditCategoryWidget', [
  'id' => 'new-post-widget',
  'datatable' => 'categories_datatable',
])
@include('layouts.EditCategoryWidget', [
  'id' => 'edit-post-widget',
  'datatable' => 'categories_datatable',
  'isEdit' => true,
])
@endsection
