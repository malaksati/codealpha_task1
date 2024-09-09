@extends('layout.master')
@section('content')
    <div class="hero-photo d-flex justify-content-center align-items-center">
        <h1 class="heartbeat text-center mb-5" style="font-weight: 700; font-size: 70px; color: #0b1c39;">UPDATE PROFILE</h1>
    </div>
    <div class="container py-5">
        <form class="form-contact contact_form" enctype="multipart/form-data" action="{{ url('/profile/update', [$user->id]) }}" method="post">
            <div class="row">
                <div class="col-lg-3">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <img class="w-100 rounded-circle" src="{{ asset($user->image) }}" alt="">
                                <input class="form-control" name="image" id="image" type="file">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" name="name" id="name" type="text"
                                value="{{ $user->name }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" name="email" id="email" type="email"
                                value="{{ $user->email }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="pass">New Password</label>
                            <input class="form-control" name="pass" id="pass" type="password">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="password">Renter Password</label>
                            <input class="form-control" name="password" id="password" type="password">
                        </div>
                    </div>
                    <div class="form-group m-3">
                        <button type="submit" class="btn btn-danger">UPDATE</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
