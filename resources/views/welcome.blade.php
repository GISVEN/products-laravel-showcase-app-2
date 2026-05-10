@extends('base')

@section('header')
    <x-header>
        <a href="{{ route('login-screen') }}">Login</a>
    </x-header>
@endsection

@section('main')
    Hello world! <br>

@endsection
