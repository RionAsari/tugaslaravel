<!-- resources/views/reservations/index.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Peminjaman Komik') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Buku</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Nomor Telepon</th>
        <th>Action</th>
    </tr>
    @foreach ($peminjamans as $peminjaman)
        <tr>
            <td>{{ $peminjaman->id }}</td>
            <td>{{ $peminjaman->nama }}</td>
            <td>{{ $peminjaman->buku }}</td>
            <td>{{ $peminjaman->pinjam }}</td>
            <td>{{ $peminjaman->kembali }}</td>
            <td>{{ $peminjaman->telpon }}</td>
            <td>
                    <a class="btn btn-info" href="{{ route('peminjamans.show', $peminjaman->id) }}">Detail</a>
                    <a class="btn btn-primary" href="{{ route('peminjamans.edit', $peminjaman->id) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('peminjamans.destroy', $peminjaman->id) }}">Hapus</a>
            </td>
        </tr>
    @endforeach
</table>

<a class="btn btn-success" href="{{ route('peminjamans.create') }}">Buat Data Peminjaman Baru</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>