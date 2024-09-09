@extends('layout.master')
@section('content')
<div class="l-form">
    <div class="img">
        <img src="{{asset('assets/images/login.jpg')}}" alt="">
        <div class="overlay"></div>
    </div>
    <div class="container py-5">
        <h2 class="my-3 mx-auto text-red">Register Page</h2>
        <form action="{{ url('/register') }}" method="post" enctype="multipart/form-data" class="w-100">
            @csrf
            <div class="mb-3">
                <label for="name">Full Name:</label>
                <input type="text" required class="form-control" id="name" placeholder="Enter Full Name" name="name">
            </div>
            <div class="mb-3">
                <label for="email">Email:</label>
                <input type="email" required class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd">Password:</label>
                <input type="password" required class="form-control" id="pwd" placeholder="Enter password" name="password">
            </div>
            <div class="mb-3">
                <label for="image">Image:</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-light text-red btn-lg">Register</button>
        </form>
    </div>
</div>
@endsection
