@extends('layout.app')

@section('title', 'Halaman Detail Surat')

@section('content')

    <h1>Detail Surat Masuk</h1>

@if ($surat)

    <p>
        <strong>Nomor Surat:</strong>
        {{$surat['nomor_surat']}}
<<<<<<< HEAD
        {{$surat->nomor_surat}}
=======
>>>>>>> 7cd37a8881b952c47c1af42270758167a896b200
    </p>

    <p>
        <strong>Tanggal:</strong>
        {{$surat['tanggal']}}
<<<<<<< HEAD
        {{$surat->tanggal}}
=======
>>>>>>> 7cd37a8881b952c47c1af42270758167a896b200
    </p>

    <p>
        <strong>Pengirim:</strong>
        {{$surat['pengirim']}}
<<<<<<< HEAD
        {{$surat->pengirim}}
=======
>>>>>>> 7cd37a8881b952c47c1af42270758167a896b200
    </p>

    <p>
        <strong>Perihal:</strong>
        {{$surat['perihal']}}
<<<<<<< HEAD
        {{$surat->perihal}}
=======
>>>>>>> 7cd37a8881b952c47c1af42270758167a896b200
    </p>
@else
    <p>Surat tidak ditemukan.</p>
@endif

    <a href="{{ route ('surat-masuk.index')}}">Kembali</a>

    @endsection