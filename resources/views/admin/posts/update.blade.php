@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Post creation page</h1>
        <form action="{{ route('admin.posts.update', $post) }} " method="POST">
            @csrf
            @method('PATCH')
            <div class="form-row">
                <div class="form-group col-10">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
                </div>
                <div class="form-group col-2 d-inline-block">
                    <label for="category">Category:</label>
                    <select class="form-control" id="category" name="category_id">
                        <option>No category</option>
                        @foreach ($categories as $category)
                        <option @if( $post->category_id == $category->id ) selected @endif   value={{ $category->id }}>{{ $category->category }}</option>
                        @endforeach
                    </select>
                </div>
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