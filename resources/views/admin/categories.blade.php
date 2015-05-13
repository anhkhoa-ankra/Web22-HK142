<?php $current = 'posts'; $sub_current = 'posts-categories' ?>

@extends('admin.master')

@section('title', 'Categories')

@section('control')
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Add new</button>
@stop

@section('content')
@include('layouts.editCategoryWidget', ['id' => 'myModal'])
@include('layouts.dataTableWidget')
@endsection
