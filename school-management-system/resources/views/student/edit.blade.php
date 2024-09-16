@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <h2 class="text-center mb-4">Student Edit Form</h2>
            <form action="{{ url('/student/editStudent/'.$student->id)}}" method="POST">
                @csrf
                {{-- @method("PATCH") --}}
                <!-- Name -->
                <input type="text" hidden name="id" value="{{$student->id}}">

                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $student->name}}"  placeholder="Enter your full name">
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" value="{{ $student->email }}" placeholder="Enter your email">
                </div>

                <!-- Address -->
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="{{ $student->address}}" placeholder="Enter your address">
                </div>

                <!-- Phone -->
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" name="phonenumber" value="{{ $student->phonenumber}}" placeholder="Enter your phone number">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
