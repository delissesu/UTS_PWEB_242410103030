@extends('layouts.app')
@section('title', 'NaseAPP Dashboard')

@section('content')

<div class="mb-10">
    <h1 class="text-4xl font-bold text-white mb-1">
        Halo, {{ ucfirst($username ?? 'Guest') }}!
    </h1>
    <p class="text-xl text-gray-400">
        Selamat datang kembali di dashboard kamu.
    </p>
</div>

{{-- grid card --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

    {{-- card kiri --}}
    <div class="lg:col-span-2 bg-gray-900 rounded-2xl shadow-xl border border-gray-800 p-8 flex flex-col md:flex-row items-center gap-6 md:gap-8 transition-all duration-300 hover:border-emerald-700/60 hover:shadow-lg">

        {{-- konten --}}
        <div class="text-center md:text-left">
            <h2 class="text-3xl font-semibold text-white mb-2">
                Tabungan Saya
            </h2>
            <p class="text-gray-400 mb-6 max-w-lg">
                Lihat semua riwayat tabungan dan periksa total saldomu.
            </p>
            <a href="/pengelolaan" class="inline-block bg-emerald-600 hover:bg-emerald-700 text-white font-medium py-3 px-6 rounded-lg transition-colors duration-200">
                Lihat Tabungan
            </a>
        </div>
    </div>

    {{-- card kanan --}}
    <div class="lg:col-span-1 bg-gray-900 rounded-2xl shadow-xl border border-gray-800 p-8 flex flex-col items-center text-center transition-all duration-300 hover:border-emerald-700/60 hover:shadow-lg">

        <div class="flex-shrink-0 w-20 h-20 bg-gray-800 border border-gray-700 rounded-full flex items-center justify-center mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
        </div>
        
        <h2 class="text-2xl font-semibold text-white mb-2">
            Profil Akun
        </h2>
        <p class="text-gray-400 mb-6 text-sm">
            Lihat dan perbarui informasi pribadimu.
        </p>
        <a href="/profile" class="inline-block bg-gray-800 hover:bg-gray-700 text-gray-300 font-medium py-2 px-5 rounded-lg transition-colors duration-200">
            Buka Profil
        </a>
    </div>
</div>  
@endsection