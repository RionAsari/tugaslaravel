<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjamans = Peminjaman::all();

        return view('peminjamans.index', compact('peminjamans'));
    }

    public function create()
    {
        return view('peminjamans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'buku' => 'required',
            'pinjam' => 'required',
            'kembali' => 'required',
            'telpon' => 'required',
        ]);

        Peminjaman::create($request->all());

        return redirect()->route('peminjamans.index')
            ->with('success', 'Peminjaman sukses dibuat.');
    }

    public function show(Peminjaman $peminjaman)
    {
        return view('peminjamans.show', compact('peminjaman'));
    }

    public function edit(Peminjaman $peminjaman)
    {
        return view('peminjamans.edit', compact('peminjaman'));
    }

    public function update(Request $request, Peminjaman $peminjaman)
    {
        $request->validate([
            'nama' => 'required',
            'nama' => 'required',
            'pinjam' => 'required',
            'kembali' => 'required',
            'telpon' => 'required',
        ]);

        $peminjaman->update($request->all());

        return redirect()->route('peminjamans.index')
            ->with('success', 'Peminjaman sukses diupdate.');
    }

    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();

        return redirect()->route('peminjamans.index')
            ->with('success', 'Peminjaman sukses dihapus.');
    }
}

