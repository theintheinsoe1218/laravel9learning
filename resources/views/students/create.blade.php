@extends('layouts.master')

@section('title','Students')

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h1>Add Student Form</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Student Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="title"
                                placeholder="Student Name">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Student Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="title"
                                placeholder="Student Email">
                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Student</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
