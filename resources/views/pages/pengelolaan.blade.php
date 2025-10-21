@extends('layouts.app')
@section('title', 'NaseAPP Tabungan')

@section('content')

{{-- header --}}
<div class="mb-8">
    <h1 class="text-4xl font-bold text-white text-center md:text-left">
        Money Saving
    </h1>
    <p class="text-xl text-gray-400 mt-1 text-center md:text-left">
        Kelola tabunganmu dengan mudah
    </p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    {{-- card kiri --}}
    <div class="md:col-span-1">
        <div class="md:sticky md:top-24">
            <div class="bg-gray-900 p-8 rounded-2xl shadow-xl border border-gray-800 flex flex-col items-center text-center transition-all duration-300 hover:border-emerald-700/60">

                <h3 class="text-sm font-semibold uppercase tracking-wider text-gray-400 mb-2">
                    Total Saldo
                </h3>
                
                <p class="text-4xl md:text-3xl lg:text-4xl font-bold text-emerald-400 break-words">
                    @php
                        $total = array_sum(array_column($data, 'saldo'));
                        echo 'Rp ' . number_format($total, 0, ',', '.');
                    @endphp
                </p>    
                
                <div class="h-1 w-20 bg-gray-800 rounded-full my-6"></div>

                <p class="text-gray-500 text-sm italic">
                    "Sedikit demi sedikit, lama-lama menjadi bukit."
                </p>
            </div>
        </div>
    </div>

    {{-- card kanan --}}
    <div class="md:col-span-2">
        <div class="bg-gray-900 rounded-2xl shadow-xl border border-gray-800 overflow-hidden hover:border-emerald-700/60 transition-all duration-300">

            <div class="px-6 py-5 border-b border-gray-800">
                <h3 class="text-xl font-semibold text-white">
                    Riwayat Tabungan
                </h3>
                <p class="text-gray-400 mt-1 text-sm">
                    Semua catatan pemasukan tabunganmu.
                </p>
            </div>

            {{-- Tabel --}}
            <div class="overflow-x-auto">
                <table class="w-full min-w-full">
                    <thead class="bg-gray-800/50">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-center text-xs font-medium text-gray-400 uppercase tracking-wider">
                                Hari
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-4 text-center text-xs font-medium text-gray-400 uppercase tracking-wider">
                                Saldo
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody class="divide-y divide-gray-800">
                        @forelse ($data as $item)
                            <tr class="hover:bg-gray-800/60 transition-colors duration-150">
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-emerald-900/50 text-emerald-300 border border-emerald-700/50">
                                        {{ $item['hari'] }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                                    {{ $item['nama'] }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center font-semibold text-emerald-400 text-base">
                                    Rp {{ number_format($item['saldo'], 0, ',', '.') }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-6 py-10 text-center text-gray-500">
                                    Belum ada data tabungan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection