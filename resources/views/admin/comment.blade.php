<?php $current = 'comments'; $sub_current = (isset($post)) ? '' : 'comments-all' ?>

@extends('admin.master')

@section('title', 'All Comments')

@section('control')
<a class="btn btn-success" href="/admin/comment/create"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Add new</a>
@stop

@section('content')
@include('layouts.AllCommentWidget', ['id' => 'comment_datatable'])
@endsection
