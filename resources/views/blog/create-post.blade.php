@extends('layouts.master')

@section('title') Blog Home @endsection

@section('content')
<h1>Create a New Post</h1>

<div>
    <form method="post" action="{{ route('post.store') }}">
        {{ csrf_field() }}
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                <div>{{$err}}</div>
            @endforeach
        </div>
        @endif
        <div class="form-group">
            <label>Title</label>
            <input class="form-control" type="text" name="title" />
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea class="form-control" name="body"></textarea>
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Save" />
        </div>
    </form>
</div>

@endsection