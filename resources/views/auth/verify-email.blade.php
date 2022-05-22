@extends('layout.app')

@section('title', 'Verify email')

@section('content')
    @include('partials.header')

    <p>Email confirmation required</p>

    <a href="{{ route('verification.send') }}">
        Send again
    </a>
@endsection

