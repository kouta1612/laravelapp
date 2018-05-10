@extends('layouts.default')

@section('title', 'Blog Posts')

@section('content')
<h1>
    <a href="/posts/create" class="header-menu">New Post</a>
    Blog Posts
</h1>
<ul>
    @forelse($posts as $post)
    <li>
        <!-- <a href="/posts/{{ $post->id }}">{{$post->title}}</a> -->
        <a href="{{ url('/posts', $post) }}">{{$post->title}}</a>
        <!-- <a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a> -->
        <a href="{{ action('PostsController@edit', $post) }}">[Edit]</a>
    </li>
    @empty
    <li>No posts yet</li>
    @endforelse
</ul>
@endsection
