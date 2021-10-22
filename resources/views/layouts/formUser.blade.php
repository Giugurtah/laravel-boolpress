@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>User option</h1>
        <form @yield('action') method=@yield('method')>
            @csrf
            <div class="form-row">
                <div class="form-group col-9 d-inline-block">
                    <label for="address">Address:</label>
                    <input @if(Auth::user()->user_info) value="{{Auth::user()->user_info->address}}" @endif type="text" class="form-control" placeholder="Enter address here" name="address" id="address">
                </div>
                <div class="form-group col-3 d-inline-block">
                    <label for="country">Contry code:</label>
                    <input @if(Auth::user()->user_info) value="{{Auth::user()->user_info->country}}" @endif type="text" class="form-control" placeholder="Enter country code here" name="country" id="country">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-6 d-inline-block">
                    <label for="phone_number">Phone number:</label>
                    <input @if(Auth::user()->user_info) value="{{Auth::user()->user_info->phone_number}}" @endif type="tel" class="form-control" placeholder="Enter phone number here" name="phone_number" id="phone_number">
                </div>
                <div class="form-group col-6 d-inline-block">
                    <label for="date_of_birth">Date of birth:</label>
                    <input @if(Auth::user()->user_info) value="{{Auth::user()->user_info->date_of_birth}}" @endif type="date" class="form-control" placeholder="Enter date of birth here" name="date_of_birth" id="date_of_birth">
                </div>
            </div>
            <div class="text-right"><button class="btn btn-primary" type="submit">Save infos</button></div>
        </form>
    </div>
@endsection
