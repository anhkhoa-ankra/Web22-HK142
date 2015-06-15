<?php $current = 'appearance' ?>

@extends('admin.master')

@section('title', 'Appearance')

@section('control')
<button onclick="document.post.submit()" class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span>&nbsp;&nbsp;Save</button>
@stop

@section('content')
<h4 class="page-header">Navigation bar</h4>
<h4 class="page-header">Home</h4>
<h4 class="page-header">Side bar</h4>
@stop