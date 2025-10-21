@extends('layouts.app')
@section('title', 'login')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');
    
    form {
        font-family: 'Poppins', sans-serif;
    }
</style>

<h1>Tes, ini login</h1>

@if (session('error'))
    <p style="color: red">{{ session('error') }}</p>
@endif

<form method="POST" action="/login" style="padding: 4px;">
    @csrf
    <label for="">Username</label>
    <br>
    <input type="text" name="username" required>
    <br>
    <br>
    <label for="">Password</label>
    <br>
    <input type="password" name="password" required>
    <br>
    <br>
    <button type="submit" style="font-weight: bold; font-family: 'Poppins';">Login</button>
</form>

@endsection
