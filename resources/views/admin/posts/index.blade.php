@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>My posts</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Written in date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->getFormatDate() }}</td>
                    <td><a href="{{ route('admin.posts.show', $post)}}" class="btn btn-primary">Show post</a></td>
                </tr>
                @empty
                <tr> 
                    <td colspan="3" class="text-center">
                        There are no posts to show at the moment :(
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection