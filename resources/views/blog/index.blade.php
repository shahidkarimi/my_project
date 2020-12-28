@extends('layouts.master')

@section('title') Blog Home @endsection

@section('content')
<h1>Blog Posts</h1>
<a href="/blog/post" class="btn btn-primary pull-right">Createa new Post </a>

@foreach ($posts as $post)
    <h2><a href="{{ route('post.show', $post->id) }}">{{$post->title}}</a></h2>
    <hr />
@endforeach

<div style="">{{$posts->links()}}</div>

@endsection