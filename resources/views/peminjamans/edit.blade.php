<!-- resources/views/reservations/edit.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error Bang!</strong> Ada Masalah dengan Input Datanya.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('peminjamans.update', $peminjaman->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $peminjaman->nama }}" required>
    </div>

    <div class="form-group">
        <label for="buku">Buku:</label>
        <input type="text" class="form-control" id="buku" name="buku" value="{{ $peminjaman->buku }}" required>
    </div>

    <div class="form-group">
        <label for="pinjam">Tanggal Pinjam</label>
        <input type="date" class="form-control" id="pinjam" name="pinjam" value="{{ $peminjaman->pinjam }}" required>
    </div>

    <div class="form-group">
        <label for="kembali">Tanggal Kembali</label>
        <input type="date" class="form-control" id="kembali" name="kembali" value="{{ $peminjaman->kembali }}" required>
    </div>

    <div class="form-group">
        <label for="telpon">Nomor Telepon</label>
        <input type="text" class="form-control" id="telpon" name="telpon" value="{{ $peminjaman->telpon }}" required>
    </div>

    <button type="submit" class="btn btn-outline-primary">Edit</button>
    <a class="btn btn-outline-secondary" href="{{ route('peminjamans.index') }}">Kembali ke Halaman Utama</a>
</form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
