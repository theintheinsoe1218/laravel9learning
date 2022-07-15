@extends('layouts.master')

@section('title','Students')

@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-10 mx-auto">
                <h1>Students Lists</h1>
                <table class="table table-stripted table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->created_at }}</td>
                                <td><a href="#" class="btn btn-primary">Show</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
