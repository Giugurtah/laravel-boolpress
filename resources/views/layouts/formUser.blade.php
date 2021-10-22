@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>User options</h1>
        <form @yield('action') method="POST">
            @csrf
            @yield('method')
            <div class="form-row">
                <div class="form-group col-6 d-inline-block">
                    <label for="name">Name:</label>
                    <input value="{{ Auth::user()->name }}" type="text" class="form-control" placeholder="Enter name here" name="name" id="name">
                </div>
                <div class="form-group col-6 d-inline-block">
                    <label for="email">Email:</label>
                    <input value="{{ Auth::user()->email }}" type="text" class="form-control" placeholder="Enter email here" name="email" id="email">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-9 d-inline-block">
                    <label for="address">Address:</label>
                    <input value="{{ $user_info->address }}" type="text" class="form-control" placeholder="Enter address here" name="address" id="address">
                </div>
                <div class="form-group col-3 d-inline-block">
                    <label for="country">Contry:</label>
                    <input value="{{ $user_info->country }}" type="text" class="form-control" placeholder="Enter country here" name="country" id="country">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-6 d-inline-block">
                    <label for="phone_number">Phone number:</label>
                    <input value="{{ $user_info->phone_number }}" type="tel" class="form-control" placeholder="Enter phone number here" name="phone_number" id="phone_number">
                </div>
                <div class="form-group col-6 d-inline-block">
                    <label for="date_of_birth">Date of birth:</label>
                    <input value="{{ $user_info->date_of_birth }}" type="date" class="form-control" placeholder="Enter date of birth here" name="date_of_birth" id="date_of_birth">
                </div>
            </div>
            <div class="text-right"><button class="btn btn-primary" type="submit">Save infos</button></div>
        </form>
    </div>
@endsection
