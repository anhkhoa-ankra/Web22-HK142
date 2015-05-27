<?php $current = 'posts'; $sub_current = (isset($post)) ? '' : 'posts-all' ?>

@extends('admin.master')

@section('title', 'All Posts')

@section('content')
@include('layouts.AllPostWidget', ['id' => 'posts-datatable'])
@endsection
