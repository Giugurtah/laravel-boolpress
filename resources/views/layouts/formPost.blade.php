@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Post creation page</h1>
        <form @yield('action') action="{{ route('admin.posts.store') }} " method="POST" >
            @csrf
            @yield('method')
            <div class="form-row">
                <div class="form-group col-10">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title', $post->title) }}">
                    @error('title') 
                        <small class="invalid-feedback">{{ $message }}</small>
                    @else
                        <small id="title" class="form-text text-muted">Insert title up above</small>
                    @enderror
                </div>
                <div class="form-group col-2 d-inline-block">
                    <label for="category">Category:</label>
                    <select class="custom-select @error('category_id') is-invalid @enderror" id="category" name="category_id">
                        <option value="">No category</option>
                        @foreach ($categories as $category)
                        <option @if( old('category_id', $post->category_id) == $category->id ) selected @endif   value={{ $category->id }}>{{ $category->category }}</option>
                        @endforeach
                    </select>
                    @error('category_id') 
                        <small class="invalid-feedback">{{ $message }}</small>
                    @else
                        <small id="category" class="form-text text-muted">Select a category</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="image">Image Url:</label>
                <input type="text" class="form-control @error('image') is-invalid @enderror" name="image" id="image" value="{{ old('image', $post->image) }}">
                <small id="image" class="form-text text-muted">Insert an image url for your post</small>
                @error('image') 
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="content" rows="8" name="content">{{ old('content', $post->content) }}</textarea>
                @error('content') 
                    <small class="invalid-feedback">{{ $message }}</small>
                @else
                    <small id="content" class="form-text text-muted">Express your thoughts</small>
                @enderror
            </div>
            <fieldset>
                <legend class="h6">Tags:</legend>
                @foreach ($tags as $tag)
                <div class="form-check form-check-inline ml-1">
                    <input class="form-check-input" type="checkbox" id="tag-{{$tag->id}}" value="{{$tag->id}}" name="tags[]" 
                    @if(in_array($tag->id, old('tags', $tagIds ?? []))) checked @endif>
                    <label class="form-check-label" for="tag-{{$tag->id}}">
                        <span class="badge badge-pill text-light" style="background-color: {{$tag->color}}">{{ $tag->tag }}</span>
                    </label>
                </div>
                @endforeach
                @error('tags') 
                    <small class="invalid-feedback d-inline-block">The selected tags are not valid</small>
                @else
                    <small id="content" class="form-text text-muted">Select as many tags as you wish</small>
                @enderror
            </fieldset>

            <div class="text-right"><button class="btn btn-primary" type="submit">@yield('button')</button></div>
        </form>
    </div>
@endsection