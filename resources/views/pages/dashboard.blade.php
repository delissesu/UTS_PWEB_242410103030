@extends('layouts.app')
@section('title', 'Dashboard - NaverSaving')

@section('content')
<style>
    .welcome-box {
        background: linear-gradient(135deg, #10b981 15%, #059669 85%);
        padding: 30px;
        border-radius: 8px;
        margin-bottom: 30px;
        box-shadow: 0 4px 12px rgba(16,185,129,0.3);
    }
    
    .welcome-box h1 {
        font-size: 32px;
        margin-bottom: 10px;
    }
    
    .welcome-box p {
        font-size: 18px;
        opacity: 0.9;
    }
    
    .card-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }
    
    .card {
        background-color: #1a1f2e;
        padding: 25px;
        border-radius: 8px;
        border-left: 4px solid #10b981;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    
    .card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 16px rgba(0,0,0,0.3);
    }
    
    .card h2 {
        color: #ffffff;
        font-size: 18px;
        margin-bottom: 10px;
    }
    
    .card p {
        color: #9ca3af;
        font-size: 14px;
        margin-bottom: 15px;
    }
    
    .card a {
        display: inline-block;
        background-color: #10b981;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 14px;
        font-weight: 500;
    }
    
    .card a:hover {
        background-color: #059669;
        text-decoration: none;
    }
</style>

<div class="welcome-box">
    <h1>Halo, {{ ucfirst($username ?? 'Guest') }}!</h1>
    <p>Selamat datang di dashboard kamu!</p>
</div>

<div class="card-grid">
    <div class="card">
        <h2>Profile</h2>
        <p>Lihat dan kelola informasi profile kamu</p>
        <a href="/profile?username={{ urlencode($username ?? '') }}">Buka Profile</a>
    </div>
    
    <div class="card">
        <h2>Tabungan</h2>
        <p>Lihat tabunganmu</p>
        <a href="/pengelolaan">Lihat Tabungan</a>
    </div>
</div>

@endsection
