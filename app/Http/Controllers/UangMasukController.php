<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UangMasuk;

class UangMasukController extends Controller
{
    public function index()
    {
        $uangMasuk = UangMasuk::all();
        return view('uang_masuk.index', compact('uangMasuk'));
    }

    public function create()
    {
        return view('uang_masuk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'sumber_uang_masuk' => 'required',
            'nominal' => 'required|string',
            'tgl_masuk' => 'required|date',
        ]);

        UangMasuk::create($request->all());

        return redirect()->route('uang-masuk.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit(UangMasuk $uangMasuk)
    {
        return view('uang_masuk.edit', compact('uangMasuk'));
    }

    public function update(Request $request, UangMasuk $uangMasuk)
    {
        $request->validate([
            'sumber_uang_masuk' => 'required',
            'nominal' => 'required|string',
            'tgl_masuk' => 'required|date',
        ]);

        $uangMasuk->update($request->all());

        return redirect()->route('uang-masuk.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(UangMasuk $uangMasuk)
    {
        $uangMasuk->delete();

        return redirect()->route('uang-masuk.index')->with('success', 'Data berhasil dihapus!');
    }
}