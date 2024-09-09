@extends('layout.master')
@section('content')
    <div class="hero-photo d-flex justify-content-center align-items-center">
        <h1 class="heartbeat text-center mb-5" style="font-weight: 700; font-size: 70px; color: #0b1c39;">CONTACT US</h1>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-7">
                <form class="form-contact contact_form" action="{{ url('/contact/add') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                    placeholder=" Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text"
                                    placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email"
                                    placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text"
                                    placeholder="Enter Subject">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-danger">SEND</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="fa fa-2x fa-solid fa-house"></i></span>
                    <div class="media-body">
                        <h4>Buttonwood, California.</h4>
                        <p>Rosemead, CA 91770</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="fa fa-2x fa-solid fa-mobile-screen-button"></i></span>
                    <div class="media-body">
                        <h4>+1 253 565 2365</h4>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="fa fa-2x fa-regular fa-envelope"></i></span>
                    <div class="media-body">
                        <h4>support@colorlib.com</h4>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
