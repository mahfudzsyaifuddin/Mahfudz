@extends('layout.app')

@section('title', 'Detail Surat Keluar')

@section('content')

    <h1>Detail Surat Keluar</h1>

    <p>
        <strong>Nomor Surat:</strong>
        {{ $surat['nomor_surat'] }}
    </p>

    <p>
        <strong>Tanggal:</strong>
        {{ $surat['tanggal'] }}
    </p>

    <p>
        <strong>Tujuan:</strong>
        {{ $surat['tujuan'] }}
    </p>

    <p>
        <strong>Perihal:</strong>
        {{ $surat['perihal'] }}
    </p>

    <br>
    <a href="{{ route('surat-keluar.index') }}">← Kembali</a>

@endsection