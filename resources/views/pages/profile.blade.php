@extends('layouts.app')
@section('title', 'NaseAPP Profile')

@section('content')
<div class="max-w-6xl mx-auto">

    <h1 class="text-3xl font-bold text-white mb-8 text-center sm:text-left">
        Pengaturan Profil
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        {{-- card kiri --}}
        <div class="md:col-span-1">
            <div class="bg-gray-900 p-8 rounded-2xl shadow-xl border border-gray-800 text-center sticky top-24 hover:border-emerald-700/60 transition-all duration-300">
                {{-- ava circle --}}
                <div class="w-40 h-40 bg-gradient-to-br from-emerald-500 to-green-600 rounded-full mx-auto mb-6 flex items-center justify-center text-6xl font-bold text-white shadow-lg border-4 border-gray-800/50">
                    {{ strtoupper(substr($username ?? 'U', 0, 1)) }}
                </div>

                {{-- usn --}}
                <h2 class="text-white text-3xl font-semibold mb-1">
                    {{ ucfirst($username ?? 'User') }}
                </h2>

                {{-- desc --}}
                <p class="text-emerald-400 text-base">
                    Member NaseAPP
                </p>

                <hr class="border-gray-700/50 my-6">

                {{-- back --}}
                <div class="md:hidden">
                    <a href="/dashboard" class="inline-flex items-center justify-center gap-2 w-full bg-gray-800 hover:bg-gray-700 text-gray-300 font-medium py-3 px-5 rounded-lg transition-colors duration-200 group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 transition-transform duration-200 group-hover:-translate-x-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                        Kembali
                    </a>
                </div>
            </div>
        </div>

        {{-- card kanan --}}
        <div class="md:col-span-2">
            <div class="bg-gray-900 rounded-2xl shadow-xl border border-gray-800 overflow-hidden hover:border-emerald-700/60 transition-all duration-300">

                <div class="px-6 py-5 sm:px-8 border-b border-gray-800">
                    <h3 class="text-xl font-semibold text-white">
                        Detail Akun
                    </h3>
                    <p class="text-gray-400 mt-1 text-sm">
                        Lihat Informasi pribadimu.
                    </p>
                </div>


                <div class="divide-y divide-gray-800"> 

                    {{-- usn --}}
                    <div class="flex flex-col sm:flex-row justify-between sm:items-center p-6 sm:px-8 sm:py-5 gap-2">
                        <span class="text-gray-400 font-medium">Username</span>
                        <span class="text-white font-semibold text-lg sm:text-right">{{ ucfirst($username) ?? 'N/A' }}</span>
                    </div>

                    {{-- nama lengkap --}}
                    <div class="flex flex-col sm:flex-row justify-between sm:items-center p-6 sm:px-8 sm:py-5 gap-2">
                        <span class="text-gray-400 font-medium">Nama Lengkap</span>
                        <span class="text-white font-semibold text-lg sm:text-right">{{ $namaLengkap ?? 'N/A' }}</span>
                    </div>

                    {{-- tanggal lahir --}}
                    <div class="flex flex-col sm:flex-row justify-between sm:items-center p-6 sm:px-8 sm:py-5 gap-2">
                        <span class="text-gray-400 font-medium">Tanggal Lahir</span>
                        <span class="text-white font-semibold text-lg sm:text-right">
                            @if($tanggalLahir)
                                {{ \Carbon\Carbon::parse($tanggalLahir)->locale('id')->translatedFormat('d F Y') }}
                            @else
                                N/A
                            @endif
                        </span>
                    </div>

                    {{-- nomor telepon --}}
                    <div class="flex flex-col sm:flex-row justify-between sm:items-center p-6 sm:px-8 sm:py-5 gap-2">
                        <span class="text-gray-400 font-medium">Nomor Telepon</span>
                        <span class="text-white font-semibold text-lg sm:text-right">{{ $nomorTelepon ?? 'N/A' }}</span>
                    </div>
                    
                    <!-- Alamat Email -->
                    <div class="flex flex-col sm:flex-row justify-between sm:items-center p-6 sm:px-8 sm:py-5 gap-2">
                        <span class="text-gray-400 font-medium">Alamat Email</span>
                        <span class="text-white font-semibold text-lg sm:text-right">{{ $email ?? 'N/A' }}</span>
                    </div>
                </div>

                {{-- Button back --}}
                <div class="bg-gray-900/50 px-6 py-5 sm:px-8 border-t border-gray-800 text-right hidden md:block">
                    <a href="/dashboard" class="inline-flex items-center gap-2 bg-gray-800 hover:bg-gray-700 text-gray-300 font-medium py-3 px-5 rounded-lg transition-colors duration-200 group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 transition-transform duration-200 group-hover:-translate-x-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                        Kembali ke Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection