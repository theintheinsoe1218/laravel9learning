@extends('layouts.master')

@section('title','Home')
@section('navbar')
    @parent
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card mt-4">
                    <div class="card-header">
                        <h1>Blog Form</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('blog.store') }}" method="post" class="p-3">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Email address</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Blog Title">
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">Blog Description</label>
                                <textarea name="desc" class="form-control" id="desc" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @parent
@endsection
