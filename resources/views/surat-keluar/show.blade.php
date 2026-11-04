@extends('layout.app')

@section('title', 'Detail Surat Keluar')

@section('content')

    <h1>Detail Surat Keluar</h1>

    <p>
        <strong>Nomor Surat:</strong>
        {{ $surat['nomor_surat'] }}
<<<<<<< HEAD
        {{ $surat->nomor_surat }}
=======
>>>>>>> 7cd37a8881b952c47c1af42270758167a896b200
    </p>

    <p>
        <strong>Tanggal:</strong>
        {{ $surat['tanggal'] }}
<<<<<<< HEAD
        {{ $surat->tanggal }}
=======
>>>>>>> 7cd37a8881b952c47c1af42270758167a896b200
    </p>

    <p>
        <strong>Tujuan:</strong>
        {{ $surat['tujuan'] }}
<<<<<<< HEAD
        {{ $surat->tujuan }}
=======
>>>>>>> 7cd37a8881b952c47c1af42270758167a896b200
    </p>

    <p>
        <strong>Perihal:</strong>
        {{ $surat['perihal'] }}
<<<<<<< HEAD
        {{ $surat->perihal }}
=======
>>>>>>> 7cd37a8881b952c47c1af42270758167a896b200
    </p>

    <br>
    <a href="{{ route('surat-keluar.index') }}">← Kembali</a>

@endsection