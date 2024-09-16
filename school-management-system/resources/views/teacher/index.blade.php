@extends('layout')

@section('content')
    <div class="container mt-3">

        <h1>Teacher Lists</h1>
        <a href="{{ url('/teacher/create')}}" class="btn btn-success float-end mb-3">Add Teacher</a>
        @if ( session('successMessage'))
                        <div class="alert-message">
                             <div class="alert alert-success alert-dismissible fade show" role="alert">
                                 <strong>{{ session('successMessage')}}</strong>
                                 <button:button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button:button>
                            </div>
                        </div>
        @endif
        @if ( session('updateSuccess'))
                        <div class="alert-message">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{session('updateSuccess')}}</strong>
                                <button:button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button:button>
                            </div>
                        </div>
        @endif
        @if ( session('deleteSuccess'))
                        <div class="alert-message">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{session('deleteSuccess')}}</strong>
                                <button:button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button:button>
                            </div>
                        </div>
        @endif
        <table class="table table-striped table-responsive mt-3">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Email </th>
                    <th>Actions</th>
                </tr>
            </thead>
            @foreach ($teachers as $item)
            <tbody >
                <tr class="align-middle" >
                    <td> {{ $item['id']}}</td>
                    <td>{{ $item['name']}}</td>
                    <td>{{ $item['subject']}}</td>
                    <td>{{ $item['address']}}</td>
                    <td>{{ $item['phonenumber']}}</td>
                    <td>{{ $item['email']}}</td>
                    <td class="d-flex justify-content-around">
                        <a href="{{ url('/teacher/details/'. $item['id'])}}" class="btn btn-info">View</a>
                        <a href="{{ url('/teacher/details/'. $item['id'])}}" class="btn btn-warning">Edit</a>
                        <a href="{{ url('/teacher/delete/'.$item['id'])}}" >
                            <button class="btn btn-danger" type="submit" onclick="return confirm(&quot;Confirm delete?&quot;)"> Delete</button>
                        </a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection

