@extends('base')

@section('header')
    <h3>Login</h3>
@endsection

@section('main')
    <form method="post" action="{{ route('login-submit') }}">
        <input type="email" placeholder="Email" />
        <input type="password" placeholder="Password" />
        <input type="submit" value="Login">
    </form>


    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>


@endsection
