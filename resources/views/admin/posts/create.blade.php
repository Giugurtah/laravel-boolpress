@extends('layouts.formPost')

@section('action')
    action="{{ route('admin.posts.store') }}"
@endsection

@section('button', 'Create post')