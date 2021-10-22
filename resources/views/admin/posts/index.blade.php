@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>My posts</h1>
        <div class="text-right mb-3">
            <a class="btn btn-success" href="{{ route('admin.posts.create') }}">Create post</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Written in date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->category }}</td>
                    <td>{{ $post->getFormatDate() }}</td>
                    <td>
                        <a href="{{ route('admin.posts.show', $post)}}" class="btn btn-primary">Show post</a>
                        <a href="{{ route('admin.posts.edit', $post)}}" class="btn btn-secondary">Edit post</a>
                        <form class="d-inline-block" action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete post</button>
                        </form>
                    </td>
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
    <footer class="container text-right">
        <div class="paginate d-inline-block mt-3">
            {{ $posts->links() }}
        </div>
    </footer>
@endsection