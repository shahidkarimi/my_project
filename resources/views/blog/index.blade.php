@extends('layouts.master')

@section('title') Blog Home @endsection

@section('content')
<h1>Blog Posts</h1>

@foreach ($posts as $post)
    <h2><a href="{{ route('post.show', $post->id) }}">{{$post->title}}</a></h2>
    <hr />
@endforeach

{{$posts->links()}}

@endsection