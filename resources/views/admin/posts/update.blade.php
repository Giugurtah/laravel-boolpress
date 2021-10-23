@extends('layouts.formPost')

@section('action')
    action="{{ route('admin.posts.update', $post) }}"
@endsection

@section('method')
    @method('PATCH')
@endsection

@section('button', 'Update post')