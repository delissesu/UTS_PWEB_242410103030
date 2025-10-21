@extends('layouts.app')
@section('title', 'NaseAPP Tabungan')

@section('content')
<style>
    .pengelolaan-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .pengelolaan-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 40px;
        gap: 30px;
        flex-wrap: wrap;
    }

    .header-content {
        flex: 1;
        min-width: 250px;
    }

    .header-content h1 {
        font-size: 32px;
        font-weight: 700;
        color: #ffffff;
        margin: 0 0 8px 0;
        line-height: 1.2;
    }

    .header-content p {
        font-size: 16px;
        color: #9ca3af;
        margin: 0;
    }

    .table-container {
        background-color: #1a1f2e;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.3);
        border: 1px solid #2d3748;
        margin-bottom: 30px;
    }

    table {
        width: 100%;
        margin: 0;
        border-collapse: collapse;
    }

    thead {
        background-color: #0f1419;
        border-bottom: 2px solid #2d3748;
    }

    th {
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 0.6px;
        font-weight: 600;
        color: #9ca3af;
        padding: 16px 20px;
        text-align: center;
    }

    tbody tr {
        border-bottom: 1px solid #2d3748;
        transition: background-color 0.2s ease;
    }

    tbody tr:hover {
        background-color: #252d3d;
    }

    tbody tr:last-child {
        border-bottom: none;
    }

    td {
        padding: 16px 20px;
        color: #d1d5db;
        font-size: 14px;
    }

    td:nth-child(1),
    td:nth-child(3) {
        text-align: center;
    }

    .badge {
        background-color: rgba(16, 185, 129, 0.15);
        color: #10b981;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        display: inline-block;
        border: 1px solid rgba(16, 185, 129, 0.3);
    }

    .saldo-cell {
        color: #10b981;
        font-weight: 600;
        font-size: 15px;
    }

    .total-saldo {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        padding: 28px 32px;
        border-radius: 12px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        box-shadow: 0 4px 15px rgba(16, 185, 129, 0.15);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .total-saldo:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(16, 185, 129, 0.25);
    }

    .total-saldo h3 {
        color: rgba(255, 255, 255, 0.85);
        font-size: 13px;
        font-weight: 600;
        margin: 0 0 12px 0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .total-saldo p {
        color: #ffffff;
        font-size: 32px;
        font-weight: 700;
        margin: 0;
        line-height: 1.2;
    }

    @media (max-width: 768px) {
        .pengelolaan-header {
            flex-direction: column;
            margin-bottom: 30px;
        }

        .header-content h1 {
            font-size: 24px;
        }

        th {
            padding: 12px 10px;
            font-size: 11px;
        }

        td {
            padding: 12px 10px;
            font-size: 13px;
        }

        .saldo-cell {
            font-size: 14px;
        }

        .total-saldo p {
            font-size: 24px;
        }
    }
</style>

<div class="pengelolaan-container">
    <div class="pengelolaan-header">
        <div class="header-content">
            <h1>Money Saving</h1>
            <p>Kak {{ $username ?? 'Guest' }}</p>
        </div>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Hari</th>
                    <th>Nama</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td><span class="badge">{{ $item['hari'] }}</span></td>
                        <td>{{ $item['nama'] }}</td>
                        <td class="saldo-cell">Rp {{ number_format($item['saldo'], 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="total-saldo">
        <h3>Total Saldo</h3>
        <p>
            @php
                $total = array_sum(array_column($data, 'saldo'));
                echo 'Rp ' . number_format($total, 0, ',', '.');
            @endphp
        </p>
    </div>
</div>

@endsection
