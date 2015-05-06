@extends('admin.master')

@if (isset($post))
@section('title', 'Edit Post')
@else
@section('title', 'New Post')
@endif

@section('content')
@include('layouts.ckEditorWidget')
@endsection
