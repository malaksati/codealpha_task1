@extends('layout.master')
@section('content')
    <div class="container py-5">
        <a class="btn btn-dark btn-lg my-3" href="{{ url('admin/user/add') }}">Add User</a>
        <table class="table table-hover">
            <caption>List of users</caption>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td><img style="width: 50px;" src="{{ asset($user->image) }}" alt=""></td>
                    <td>
                        <a href="{{ url('admin/user/edit', $user->id) }}">
                            <img src="{{ asset('assets/images/edit.png') }}" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="{{ url('admin/user/delete', $user->id) }}">
                            <img src="{{ asset('assets/images/delete.png') }}" alt="">
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-dark btn-lg my-3" href="{{ url('admin/item/add') }}">Add Item</a>
        <table class="table table-hover">
            <caption>List of items</caption>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>${{ $item->price }}</td>
                    <td><img style="width: 50px;" src="{{ asset($item->image) }}" alt=""></td>
                    <td>
                        <a href="{{ url('admin/item/edit', $item->id) }}">
                            <img src="{{ asset('assets/images/edit.png') }}" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="{{ url('admin/item/delete', $item->id) }}">
                            <img src="{{ asset('assets/images/delete.png') }}" alt="">
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <table class="table table-hover my-5">
            <caption>List of messages</caption>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->subject }}</td>
                    <td>{{ $message->message }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
