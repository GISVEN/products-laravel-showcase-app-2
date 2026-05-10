@extends('base')

@section('header')
    <x-header></x-header>
@endsection

@section('main')
    <form method="post" action="{{ route('login-submit') }}">
        @csrf
        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="example@domain.com" value="{{ old('email') }}" required/>

        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="..." required />

        <input type="submit" value="Login">
        @error('login')
            <x-error-message>{{ $message }}</x-error-message>
        @enderror
    </form>
@endsection
