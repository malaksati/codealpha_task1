<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/images/icon.png') }}" type="image/x-icon">
    <title>Time Zone</title>
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- Main CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
</head>

<body>
    {{-- Start Header --}}
    <nav class="navbar navbar-expand-lg container navbar-light" style="height: 100px;justify-content: space-between;">
        <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse "
            style="width: 65% !important; justify-content: space-between; flex:0;" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item px-2">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="{{ url('/products') }}">Shop</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="{{ url('about') }}">About</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                </li>
                @if (Auth::user() && Auth::user()->role == 'admin')
                    <li class="nav-item px-2">
                        <a class="nav-link" href="{{ url('admin/dashboard') }}">Dashboard</a>
                    </li>
                @endif
            </ul>
            <ul class="navbar-nav mr-auto social">
                @if (Auth::user())
                    <li class="nav-item px-2">
                        <a class="nav-link" href="{{ url('profile', [Auth::user()->id]) }}"><i class="fas fa-user"></i></a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="{{ url('cart', [Auth::user()->id]) }}"><i
                                class="fas fa-shopping-cart"></i></a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
                    </li>
                @else
                    <li class="nav-item px-2">
                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
    {{-- End Header --}}
    @yield('content')
    {{-- Start Footer --}}
    <div class="container">
        <div class="row d-flex justify-content-between text-light px-2 py-3 flex-wrap" style="background: #ea0000;">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-method mb-40">
                    <i class="fa fa-2x fa-solid fa-cube mb-4"></i>
                    <h5>Free Shipping Method</h6>
                    <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-method mb-40">
                    <i class="fa fa-2x fa-solid fa-unlock mb-4"></i>
                    <h5>Secure Payment System</h6>
                    <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-method mb-40">
                    <i class="fa fa-2x fa-solid fa-repeat mb-4"></i>
                    <h5>Secure Payment System</h6>
                    <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container py-5">
            <div class="box image text-center px-5">
                <img src="{{ asset('assets/images/logo.png') }}" alt="">
                <p class="text-secondary py-5 w-75 m-auto">Asorem ipsum adipolor sdit amet, consectetur adipisicing
                    elitcf sed do eiusmod tem.</p>
            </div>
            <div class="box px-5">
                <h2 class="">Quick Links</h2>
                <ul class="text-secondary">
                    <li class="py-2"><a href="{{ url('/about') }}">About</a></li>
                    <li class="py-2"><a href="{{ url('/contact') }}">Contact Us</a></li>
                    <li class="py-2"><a href="{{ url('/products') }}">Offers & Discounts</a></li>
                </ul>
            </div>
        </div>
        <hr style="margin: 0">
        <p class="text-center w-100 m-auto py-3 text-light" style="background-color: #ff2020">Copyright ©2024 All
            rights reserved | This template is made by Malak Al-Sati</p>
    </footer>
    {{-- End Footer --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
