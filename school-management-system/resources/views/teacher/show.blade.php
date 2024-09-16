@extends('layout')
@section('content')
    <div class="card mt-3">
        <div class="card-header">Teacher Details</div>
        <div class="card-body">
            <h5 class="card-title">Name : {{ $teacher -> name}}</h5>
            <p class="card-text">Subject: {{ $teacher -> subject}}</p>
            <p class="card-text">Address : {{ $teacher -> address}}</p>
            <p class="card-text">Email : {{ $teacher -> email}}</p>
            <p class="card-text"> Phone Number : {{ $teacher -> phonenumber}}</p>
        </div>
    </div>
@endsection
