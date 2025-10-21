{{-- <div>
    <!-- It always seems impossible until it is done. - Nelson Mandela -->
</div> --}}

@extends('layouts.app')
@section('title', 'kelola tabungan')

@section('content')
<h1>
    Tes dulu
</h1>

<table border="1" cellpadding="6">
    <tr>
        <th>Hari</th>
        <th>Nama</th>
        <th>Saldo</th>
    </tr>

    @foreach ($data as $item)
        <tr>
            <td>{{ $item['hari'] }}</td>
            <td>{{ $item['nama'] }}</td>
            <td>Rp {{ number_format($item['saldo'], 0, ',', '.') }}</td>
        </tr>
    @endforeach
</table>
@endsection
