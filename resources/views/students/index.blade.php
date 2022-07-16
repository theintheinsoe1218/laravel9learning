@extends('layouts.master')

@section('title','Students')

@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-10 mx-auto">
                <h1>Students Lists</h1>
                @if (session()->has('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <a href="{{ route('students.create') }}" class="btn btn-primary float-end">Add New Student</a>
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
                                <td>{{ Carbon\Carbon::parse($student->created_at)->format('d-m-y') }}</td>
                                <td><a href="{{ route('students.show',['id'=>$student->id]) }}" class="btn btn-primary">Show</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
