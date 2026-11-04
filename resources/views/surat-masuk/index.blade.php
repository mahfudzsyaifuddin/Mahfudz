@extends('layout.app')

@section('title', 'Halaman Surat Masuk')
@section('title', 'Daftar Surat Masuk')

@section('content')
<h1>Daftar Surat Masuk</h1>

    <h1>Halaman Surat Masuk </h1>
    <table border="1" cellpadding="10">
        <thead>
<a href="{{ route('surat-masuk.create') }}">+ Tambah Surat</a>

@if (session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor</th>
            <th>Tanggal</th>
            <th>Pengirim</th>
            <th>Perihal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($suratMasuk as $surat)
<tr>
                <th>No</th>
                <th>Nomer Surat</th>
                <th>Tanggal</th>
                <th>Pengirim</th>
                <th>Perihal</th>
                <th>Aksi</th>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $surat->nomor_surat }}</td>
                <td>{{ $surat->tanggal }}</td>
                <td>{{ $surat->pengirim }}</td>
                <td>{{ $surat->perihal }}</td>
                <td>
                    <a href="{{ route('surat-masuk.show', $surat->id) }}">Detail</a>
                    <a href="{{ route('surat-masuk.edit', $surat->id) }}">Edit</a>
                    <form action="{{ route('surat-masuk.destroy', $surat->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Hapus surat ini?')">Hapus</button>
                    </form>
                </td>
</tr>
        </thead>
        <tbody>
            @forelse ($suratMasuk as $surat)
            <tr>
               <td>{{ $loop->iteration }}</td>
               <td>{{ $surat->nomor_surat }}</td>
               <td>{{ $surat->tanggal }}</td>
               <td>{{ $surat->pengirim }}</td>
               <td>{{ $surat->perihal }}</td>
               <td>
                <a href="{{ route('surat-masuk.show', $surat->id) }}">
                    Detail Surat
                </a>
            </td>
        </tr>
@empty
        <tr>
            <td>Belum ada data surat masuk.</td>
        </tr>
            <tr>
                <td colspan="6">Belum ada surat masuk.</td>
            </tr>
@endforelse
        </tbody>
    </table>

    @endsection
    </tbody>
</table>
@endsection