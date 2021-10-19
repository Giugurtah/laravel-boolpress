@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Post creation page</h1>
        <form action="{{ route('admin.posts.store') }} " method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" placeholder="Enter title here" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="image">image Url:</label>
                <input type="text" class="form-control" placeholder="Enter image url here" name="image" id="image">
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" placeholder="Enter content here" id="content" rows="8" name="content"></textarea>
            </div>
            <div class="text-right"><button class="btn btn-primary" type="submit">Add post</button></div>
        </form>
    </div>
@endsection
