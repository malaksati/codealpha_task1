@extends('layout.master')
@section('content')
    <div class="l-form">
        <div class="img">
            <img src="{{asset('assets/images/login.jpg')}}" alt="">
            <div class="overlay"></div>
        </div>
        <div class="container py-5">
            <h2 class="my-3 mx-auto text-red">ADD USER</h2>
            <form action="{{ url('/admin/user/store') }}" enctype="multipart/form-data" method="post" class="w-100">
                @csrf
                <div class="my-3">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="my-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="my-3">
                    <label for="role">Role:</label>
                    <select class="form-control" name="role" id="role">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
                <div class="my-3">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-light text-red btn-lg">ADD</button>
            </form>
        </div>
    </div>
@endsection
