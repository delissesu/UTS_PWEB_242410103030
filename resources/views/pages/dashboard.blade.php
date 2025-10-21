@extends('layouts.app');
@section('title', 'dashboard');

{{-- 
<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
</div> --}}
@section('content')
<h1>
    Tes dulu, ini dashboard
</h1>

@if($username) {
    <p>
        Yow, halo kak 
        <b>
            {{ $username }}!
        </b>
    </p>
}
@endif

<a href="/profile?username= {{ urlencode($username) }}">
    Lihat Profile
</a>

<a href="/pengelolaan">
    Lihat Tabungan
</a>
@endsection
