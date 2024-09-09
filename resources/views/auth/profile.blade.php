@extends('layout.master')
@section('content')
<div class="hero-photo d-flex justify-content-center align-items-center">
    <h1 class="heartbeat text-center mb-5" style="font-weight: 700; font-size: 70px; color: #0b1c39;">PROFILE</h1>
</div>
<div class="profile container py-5">
    <div class="row">
        <div class="col-12 pb-5">
            <h4>Want to Update Profile? <a class="text-red" href="{{ url('profile/edit', [$user->id]) }}">Update</a></h4>
        </div>
        <div class="col-lg-3 py-5">
            <div class="image">
                <img class="w-100 rounded-circle" src="{{ asset($user->image) }}" alt="">
            </div>
        </div>
        <div class="col-lg-8 offset-lg-1 py-5">
            <h4 class="mb-5">Name: <span class="text-red">{{ $user->name }}</span></h4>
            <h4 class="mb-5">Email: <span class="text-red">{{ $user->email }}</span></h4>
            <h4 class="mb-5">Role: <span class="text-red">{{ $user->role }}</span></h4>
        </div>
    </div>
</div>
@endsection