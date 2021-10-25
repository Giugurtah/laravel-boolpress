@extends('layouts.app')

@section('content')
    <div class="container">
        <h1> {{ $post->title }} </h1>
        <div> Category: 
            @if($post->category)
                <span class="badge badge-pill text-light" style="background-color: {{$post->category->color}}">{{ $post->category->category }}</span>
            @else 
                -
            @endif
        </div>
        <div>
            Tags: 
            @forelse ($post->tag as $tag)
                <span class="badge badge-pill text-light" style="background-color: {{$tag->color}}">{{ $tag->tag }}</span>
            @empty
                -
            @endforelse
        </div>
        <p class="mt-3"> {{ $post->content }} </p>
        <div>
            <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Return to list</a>
        </div>
    </div>
@endsection