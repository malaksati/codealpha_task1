@extends('layout.master')
@section('content')
    <div class="l-form">
        <div class="img">
            <img src="{{asset('assets/images/login.jpg')}}" alt="">
            <div class="overlay"></div>
        </div>
        <div class="container py-5">
            <h2 class="my-3 mx-auto text-red">UPDATE USER #{{$user->id}}</h2>
            <form action="{{ url('/admin/user/update', [$user->id] ) }}" enctype="multipart/form-data" method="post" class="w-100">
                @csrf
                @method('put')
                <div class="my-3">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" value="{{ $user->name }}" id="name" name="name">
                </div>
                <div class="my-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" value="{{ $user->email }}" id="email" name="email">
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
                <button type="submit" class="btn btn-light text-red btn-lg">UPDATE</button>
            </form>
        </div>
    </div>
@endsection
