<?php $current = 'posts'; $sub_current = (isset($post)) ? '' : 'posts-all' ?>

@extends('admin.master')

@section('title', 'All Posts')

@section('control')
<a class="btn btn-success" href="/admin/post/create"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Add new</a>
@stop

@section('content')
@include('layouts.AllPostWidget', ['id' => 'posts_datatable'])
@endsection
