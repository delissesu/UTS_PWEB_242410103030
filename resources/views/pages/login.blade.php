@extends('layouts.app')
@section('title', 'NaseAPP Login')

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
    <label for="username">Username</label>
    <br>
    <input type="text" id="username" name="username" required style="font-family: 'Poppins">
    <br>
    <br>
    <label for="password">Password</label>
    <br>
    <input type="password" id="password" name="password" required style="font-family: 'Poppins">
    <br>
    <br>
    <button type="submit" style="font-weight: bold; font-family: 'Poppins';">Login</button>
</form>

@endsection
