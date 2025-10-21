@extends('layouts.app');
@section('title', 'profile');

{{-- <div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
</div> --}}
@section('content')
<h1>
    ini profile
</h1>
@if($username) {
    <p>
        Ini profile gw
        {{ $username }}.
    </p>
}
@endif

<a href="/dashboard?username={{ urlencode($username) }}">
    Balik ke beranda
</a>
@endsection
