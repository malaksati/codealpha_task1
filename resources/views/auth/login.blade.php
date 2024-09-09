@extends('layout.master')
@section('content')
    <div class="l-form">
        <div class="img">
            <img src="{{asset('assets/images/login.jpg')}}" alt="">
            <div class="overlay"></div>
        </div>
        <div class="container py-5">
            <h2 class="my-3 mx-auto text-red">Login Page</h2>
            <form action="{{ url('/login') }}" method="post" class="w-100">
                @csrf
                <div class="my-5">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="my-5">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                </div>
                <button type="submit" class="btn btn-light text-red btn-lg">Login</button>
            </form>
            <p class="py-3">Don't Have an Account? <span><a class="text-red" href="{{ url('register') }}">Register Now</a></span></p>
        </div>
    </div>
@endsection
