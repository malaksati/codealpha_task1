@extends('layout.master')
@section('content')
<div class="hero-photo d-flex justify-content-center align-items-center">
    <h1 class="heartbeat text-center mb-5" style="font-weight: 700; font-size: 70px; color: #0b1c39;">CART</h1>
</div>
    <div class="container py-5">
        <div class="cart">
                <div class="border p-3 rounded">
                    @foreach ($carts as $cart)
                        <div class="d-flex gap-2 align-items-center p-3">
                            <img class="mx-2" style="width: 120px;" src="{{ asset($cart->item_image) }}" alt="">
                            <h4 class="mx-2">{{ $cart->item_title }}</h4>
                            <div class="mx-2">
                                <select name="quantity" id="quantity{{ $cart->id }}"
                                    onclick="solve{{ $cart->id }}()">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <p class="my-2 p-0" id="res{{ $cart->id }}">$<span>{{ $cart->item_price }}</span></p>
                               
                                <p id="price" class="my-2 p-0 text-secondary">${{ $cart->item_price }} / per item</p>
                            </div>
                            <a class="btn btn-danger mx-2" href="{{ url('cart/remove', [$cart->id]) }}">Remove</a>
                        </div>
                        <script>
                            function solve{{ $cart->id }}() {
                                let price = {{ $cart->item_price }}
                                let quantityy = document.getElementById('quantity{{ $cart->id }}');
                                document.getElementById('res{{ $cart->id }}').innerText = "$" + price * quantityy.value;
                            }
                        </script>
                        
                    @endforeach
                    <a class="btn btn-success m-4 text-light">Make Purchace</a>
                </div>
        </div>
    </div>
@endsection
