@extends('layouts.app')
@section('title', 'NaseAPP Login')

@section('content')
<div class="w-full max-w-5xl mx-auto bg-gray-900 rounded-2xl shadow-2xl border border-gray-800 overflow-hidden">
    <div class="grid grid-cols-1 md:grid-cols-2">

        {{-- card kiri --}}
        <div class="hidden md:flex flex-col justify-center p-12 bg-gradient-to-br from-gray-900 via-gray-900 to-emerald-900/30 border-r border-gray-800">
            <a href="/" class="text-4xl font-bold text-emerald-500 mb-4 transition-colors duration-200">
                NaseAPP
            </a>
            <h1 class="text-3xl font-semibold text-white mb-3">
                Mulai menabung,
            </h1>
            <p class="text-gray-400 text-lg">
                Wujudkan mimpimu selangkah demi selangkah.
            </p>
        </div>

        {{-- kanan --}}
        <div class="p-8 sm:p-12">
            {{-- mob --}}
            <div class="md:hidden text-center mb-8">
                <a href="/" class="text-3xl font-bold text-emerald-500 mb-4 transition-colors duration-200">
                    NaseAPP
                </a>
            </div>

            {{-- head --}}
            <h2 class="text-3xl font-bold text-white mb-3 text-center md:text-left">
                Login
            </h2>
            <p class="text-gray-400 mb-8 text-center md:text-left">
                Selamat datang kembali!
            </p>

            {{-- error handle --}}
            @if (session('error'))
                <div class="bg-red-900/50 border border-red-700/50 text-red-300 p-3 rounded-lg mb-6 text-sm text-center">
                    {{ session('error') }}
                </div>
            @endif

            {{-- sucess handle --}}
            @if (session('success'))
                <div class="bg-green-900/50 border border-green-700/50 text-green-300 p-3 rounded-lg mb-6 text-sm text-center">
                    {{ session('success') }}
                </div>
            @endif

            {{-- log form  --}}
            <form method="POST" action="/login" class="space-y-6">
                @csrf
                
                {{-- input usn --}}
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-400 mb-2">
                        Username
                    </label>
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        required 
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-colors"
                        placeholder="Masukkan username Anda">
                </div>
                
                {{-- input password --}}
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-400 mb-2">
                        Password
                    </label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        required 
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-colors"
                        placeholder="••••••••">
                </div>

                {{-- login button --}}
                <div>
                    <button 
                        type="submit" 
                        class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 focus:ring-offset-gray-900 shadow-lg shadow-emerald-900/50">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection