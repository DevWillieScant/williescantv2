@extends('main')
@section('content')
    <div class="dashboard">
        <h1>Welcome to Willie Scant Customer Dashboard</h1>
        <table class="table">
            <thead>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{$data->first_name}}</td>
                    <td>{{$data->last_name}}</td>
                    <td>{{$data->username}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone_number}}</td>
                    <td><a href="/logout">Logout</a></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection