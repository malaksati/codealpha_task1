@extends('layout.master')
@section('content')
<section class="bg-light landing">
    <div class="container py-5 d-flex justify-content-around">
        <div class="w-50">
            <h1>Select Your New Perfect Style</h1>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat is aute irure.</p>
            <a class="btn btn-secondary btn-lg" href="{{ url('/products') }}">Shop Now</a>
        </div>
        <div class="image" style="height: 70vh; overflow:hidden">
            <img class="text-center heartbeat" style="height: 80vh;" src="{{ asset('assets/images/watch.png') }}" alt="">
        </div>
    </div>
</section>
<section class="new py-5 container">
    <h1 style="font-weight: 700">New Arrivals</h1>
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="image">
                <img style="width: 100%;" src="{{ asset('assets/images/new_product1.png') }}" alt="">
            </div>
            <h3 class="my-3">Thermo Ball Etip Gloves</h3>
            <p class="text-center text-red">$47</p>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="image">
                <img style="width: 100%;" src="{{ asset('assets/images/new_product2.png') }}" alt="">
            </div>
            <h3 class="my-3">Thermo Ball Etip Gloves</h3>
            <p class="text-center text-red">$47</p>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="image">
                <img style="width: 100%;" src="{{ asset('assets/images/new_product3.png') }}" alt="">
            </div>
            <h3 class="my-3">Thermo Ball Etip Gloves</h3>
            <p class="text-center text-red">$47</p>
        </div>
    </div>
</section>
<section class="popular py-5 container">
    <h1 style="font-weight: 700">Popular Items</h1>
    <p class="text-secondary">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
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