@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Post creation page</h1>
        <form action="{{ route('admin.posts.update', $post) }} " method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="image">image Url:</label>
                <input type="text" class="form-control" name="image" id="image" value="{{ $post->image }}">
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" rows="8" name="content">{{ $post->content }}</textarea>
            </div>
            <div class="text-right"><button class="btn btn-primary" type="submit">Update post</button></div>
        </form>
    </div>
@endsection