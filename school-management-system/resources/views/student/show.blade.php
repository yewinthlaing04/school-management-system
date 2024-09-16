@extends('layout')
@section('content')
    <div class="card mt-3">
        <div class="card-header">Student Details</div>
        <div class="card-body">
            <h5 class="card-title">Name : {{ $student -> name}}</h5>
            <p class="card-text">Address : {{ $student -> address}}</p>
            <p class="card-text">Email : {{ $student -> email}}</p>
            <p class="card-text"> Phone Number : {{ $student -> phonenumber}}</p>
        </div>
    </div>
@endsection
