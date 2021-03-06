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
        <a href="#" class="del" data-id="{{ $post->id }}">[x]</a>
        <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
            {{ csrf_field() }}
            {{ method_field('delete') }}
        </form>
    </li>
    @empty
    <li>No posts yet</li>
    @endforelse
</ul>
<script src="/js/main.js"></script>
@endsection
