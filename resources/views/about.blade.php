@extends('layouts.master')

@section('title','About')
@section('navbar')
    @parent
@endsection
@section('content')
    <h1>This is About Page</h1>
    <h1>{{ session('success') }}</h1>
@endsection

@section('footer')

@endsection


