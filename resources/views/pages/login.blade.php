@extends('layouts.app');
@section('title', 'login');

{{-- <div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div> --}}

@section('content')
<h1>
    Tes, ini login
</h1>

@if (session('error'))
    <p style="color: red">
        {{ session('error') }}
    </p>
@endif

<form method="POST" action="/login">
    @csrf
    <label for="">Username:</label>
    <br>
    <input type="text" name="username" required>
    <br>
    <br>
    <label for="">Password:</label>
    <br>
    <input type="password" name="password" required>
    <br>
    <br>
    <button type="submit">
        Coba login dulu
    </button>
</form>

@endsection