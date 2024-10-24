@extends('layouts.app')

@section('content')
    <h1>Welcome to the Dashboard, {{ auth()->user()->name }}!</h1>

    <p>You are now logged in.</p>

    <a href="{{ route('logout') }}">Logout</a>
@endsection
