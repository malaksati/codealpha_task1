@extends('layout.master')
@section('content')
    <div class="l-form">
        <div class="img">
            <img src="{{asset('assets/images/login.jpg')}}" alt="">
            <div class="overlay"></div>
        </div>
        <div class="container py-5">
            <h2 class="my-3 mx-auto text-red">UPDATE ITEM #{{$item->id}}</h2>
            <form action="{{ url('/admin/item/update', [$item->id] ) }}" enctype="multipart/form-data" method="post" class="w-100">
                @csrf
                @method('put')
                <div class="my-3">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" value="{{ $item->title }}" id="title" name="title">
                </div>
                <div class="my-3">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" value="{{ $item->price }}" id="price" name="price">
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
