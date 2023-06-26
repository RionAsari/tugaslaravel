<!-- resources/views/reservations/show.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table">
                        <tr>
                            <th>Nama:</th>
                            <td>{{ $peminjaman->nama }}</td>
                        </tr>
                        <tr>
                            <th>Buku:</th>
                            <td>{{ $peminjaman->buku }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Pinjam:</th>
                            <td>{{ $peminjaman->pinjam }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Kembali:</th>
                            <td>{{ $peminjaman->kembali }}</td>
                        </tr>
                        <tr>
                            <th>Nomor Telepon:</th>
                            <td>{{ $peminjaman->telpon }}</td>
                        </tr>
                    
                    <a class="btn btn-primary" href="{{ route('peminjamans.edit', $peminjaman->id) }}">Edit</a>
                    <a class="btn btn-secondary" href="{{ route('peminjamans.index') }}">Kembali ke Halaman Utama</a>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


