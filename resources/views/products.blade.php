@extends('layout.master')
@section('content')
<div class="hero-photo d-flex justify-content-center align-items-center">
    <h1 class="heartbeat text-center mb-5" style="font-weight: 700; font-size: 70px; color: #0b1c39;">SHOP NOW</h1>
</div>
<section class="popular py-5 container">
    <div class="row">
        @foreach ($items as $item)
        <div class="product col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="image">
                <img style="width: 100%;" src="{{ asset($item->image) }}" alt="">
                <div class="img-cap">
                    <a href="{{ url('cart/add', [$item->id]) }}">Add to Cart</a>
                </div>
            </div>
            <h3 class="my-3">{{ $item->title }}</h3>
            <p class="text-center text-red">${{ $item->price }}</p>
        </div>
        @endforeach
    </div>
</section>
@endsection