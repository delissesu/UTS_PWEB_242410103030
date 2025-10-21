@extends('layouts.app')
@section('title', 'NaseAPP Profile')

@section('content')
<style>
    .profile-container {
        max-width: 750px;
        margin: 0 auto;
    }
    
    .profile-header {
        background-color: #1a1f2e;
        padding: 40px;
        border-radius: 8px;
        margin-bottom: 20px;
        text-align: center;
    }
    
    .profile-avatar {
        width: 120px;
        height: 120px;
        background: linear-gradient(135deg, #10b981, #059669);
        border-radius: 50%;
        margin: 0 auto 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 48px;
    }
    
    .profile-info {
        background-color: #1a1f2e;
        padding: 30px;
        border-radius: 8px;
    }
    
    .info-row {
        display: flex;
        justify-content: space-between;
        padding: 15px 0;
        border-bottom: 1px solid #2d3748;
    }
    
    .info-row:last-child {
        border-bottom: none;
    }
    
    .info-label {
        color: #9ca3af;
        font-weight: 600;
    }
    
    .info-value {
        color: #ffffff;
    }
    
    .back-btn {
        display: inline-block;
        margin-top: 20px;
        padding: 12px 24px;
        background-color: #2d3748;
        color: white;
        border-radius: 5px;
    }
    
    .back-btn:hover {
        background-color: #3f4655;
        text-decoration: none;
    }
</style>

<div class="profile-container">
    <h1>Profile Saya</h1>

    <div class="profile-header">
        <div class="profile-avatar">
            {{ strtoupper(substr($username ?? 'U', 0, 1)) }}
        </div>
        <h2 style="color: #ffffff; font-size: 24px; margin-bottom: 5px;">{{ $username ?? 'User' }}</h2>
        <p style="color: #9ca3af;">Member NaseAPP</p>
    </div>
    
    <div class="profile-info">
        <div class="info-row">
            <span class="info-label">Username</span>
            <span class="info-value">{{ $username ?? 'N/A' }}</span>
        </div>
        <div class="info-row">
            <span class="info-label">Nama Lengkap</span>
            <span class="info-value">{{ $username ?? 'N/A' }}</span>
        </div>
        <div class="info-row">
            <span class="info-label">Tanggal Lahir</span>
            <span class="info-value">N/A</span>
        </div>
        <div class="info-row">
            <span class="info-label">Nomor Telepon</span>
            <span class="info-value">N/A</span>
        </div>
    </div>
    
    <a href="/dashboard?username={{ urlencode($username ?? '') }}" class="back-btn">
        Kembali ke Dashboard
    </a>
</div>

@endsection
