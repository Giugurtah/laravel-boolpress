@extends('layouts.formUser')

@section('action')
    action="{{route('admin.userInfos.update', $user_info->id)}}"
@endsection

@section('method')
    @method('PATCH')
@endsection
