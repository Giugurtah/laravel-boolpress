@extends('layouts.app')

@section('content')
    <div class="container">
        <h1> {{ $post->title }} </h1>
        <div> Category: {{ $post->getCategoryName() }} </div>
        <p> {{ $post->content }} </p>
        <div>
            <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Return to list</a>
        </div>
    </div>
@endsection