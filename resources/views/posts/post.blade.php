@extends('posts.layout')

@section('content')
    <div class="page-header clearfix">
        <h1 class="pull-left">My Blog</h1><br>
        <h2 class="pull-right">Danijela Lapcevic</h2>
    </div>

	<h1>{{{ $post->title }}}</h1>
	<p class="created_at">Created on {{{ date('Y-m-d', strtotime($post->created_at))}}} By {{{ $post->user->name }}} In {{{ $post->category->name }}}</p> 
	<p>{!! $post->body !!}</p>
	<p>{!! link_to_route('home', '&lsaquo; Back') !!}</p>
@stop