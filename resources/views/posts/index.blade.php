@extends('posts.layout')

@section('content')
    <div class="page-header clearfix">
        <h1 class="pull-left">My Blog</h1><br>
        <h2 class="pull-right">Danijela Lapcevic</h2>
    </div>

    <div class="row">
        <div class="col-md-12">
				@if($posts->count())
                @foreach($posts as $post)
                <article>
				    <h2>{!! link_to_route('post', $post->title, array($post->id)) !!}</h2>
				    <p class="created_at">Created on {{{ date('Y-m-d', strtotime($post->created_at))}}} By {{{ $post->user->name }}} In {{{ $post->category->name }}}</p> 
				    {!! str_limit($post->body) !!}

				    <p>{!! link_to_route('post', 'Read More &rsaquo;', array($post->id)) !!}</p>
				</article>
                @endforeach
                @endif

            {!! $posts->render() !!}
        </div>
    </div>
@stop