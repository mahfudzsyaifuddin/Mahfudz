@extends('layout.app')

@section('title', 'Halaman Surat Keluar')
@section('title', 'Surat Keluar')

@section('content')

    <h1>Halaman Surat Keluar</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Surat</th>
                <th>Tanggal</th>
                <th>Tujuan</th>
                <th>Perihal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($suratKeluar as $surat)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $surat->nomor_surat }}</td>
                <td>{{ $surat->tanggal }}</td>
                <td>{{ $surat->tujuan }}</td>
                <td>{{ $surat->perihal }}</td>
                <td>
                    <a href="{{ route('surat-keluar.show', ['id' => $surat->id]) }}">Detail Surat</a>
               </td>
<h1>Daftar Surat Keluar</h1>
<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor Surat</th>
            <th>Tanggal</th>
            <th>Tujuan</th>
            <th>Perihal</th>
            <th>Aksi</th>
</tr>
        @empty
    </thead>
    <tbody>
        @forelse ($suratKeluar as $surat)
<tr>
            <td>Belum ada data surat keluar.</td>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $surat->nomor_surat }}</td>
            <td>{{ $surat->tanggal }}</td>
            <td>{{ $surat->tujuan }}</td>
            <td>{{ $surat->perihal }}</td>
            <td>
                <a href="{{ route('surat-keluar.show', $surat->id) }}">Detail</a>
            </td>
</tr>
        @empty
        <tr><td colspan="6">Belum ada surat keluar.</td></tr>
@endforelse
        </tbody>
    </table>
    </tbody>
</table>

@endsection