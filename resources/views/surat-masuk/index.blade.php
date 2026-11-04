@extends('layout.app')

@section('title', 'Halaman Surat Masuk')

@section('content')

    <h1>Halaman Surat Masuk </h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomer Surat</th>
                <th>Tanggal</th>
                <th>Pengirim</th>
                <th>Perihal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suratMasuk as $surat)
<<<<<<< HEAD
            @forelse ($suratMasuk as $surat)
=======
>>>>>>> 7cd37a8881b952c47c1af42270758167a896b200
            <tr>
               <td>{{ $loop->iteration }}</td>
               <td>{{ $surat['nomor_surat'] }}</td>
               <td>{{ $surat['tanggal'] }}</td>
               <td>{{ $surat['pengirim'] }}</td>
               <td>{{ $surat['perihal'] }}</td>
<<<<<<< HEAD
                <td>{{ $surat->nomor_surat }}</td>
               <td>{{ $surat->tanggal }}</td>
               <td>{{ $surat->pengirim }}</td>
               <td>{{ $surat->perihal }}</td>
               <td>
                <a href="{{ route('surat-masuk.show', ['id' => $surat['id']]) }}">
                    <a href="{{ route('surat-masuk.show', $surat->id) }}">
=======
               <td>
                <a href="{{ route('surat-masuk.show', ['id' => $surat['id']]) }}">
>>>>>>> 7cd37a8881b952c47c1af42270758167a896b200
                    Detail Surat
                </a>
               </td>
           </tr>
            @endforeach
<<<<<<< HEAD
            </td>
        </tr>
        @empty
        <tr>
            <td>Belum ada data surat masuk.</td>
        </tr>
        @endforelse
=======
>>>>>>> 7cd37a8881b952c47c1af42270758167a896b200
        </tbody>
    </table>

    @endsection