<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UangKeluar;

class UangKeluarController extends Controller
{
    public function index()
    {
        $uangKeluar = UangKeluar::all();
        return view('uang_keluar.index', compact('uangKeluar'));
    }

    public function create()
    {
        return view('uang_keluar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'sumber_uang_keluar' => 'required',
            'nominal' => 'required|string',
            'tgl_keluar' => 'required|date',
        ]);

        UangKeluar::create($request->all());

        return redirect()->route('uang-keluar.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit(UangKeluar $uangKeluar)
    {
        return view('uang_keluar.edit', compact('uangKeluar'));
    }

    public function update(Request $request, UangKeluar $uangKeluar)
    {
        $request->validate([
            'sumber_uang_keluar' => 'required',
            'nominal' => 'required|string',
            'tgl_keluar' => 'required|date',
        ]);

        $uangKeluar->update($request->all());

        return redirect()->route('uang-keluar.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(UangKeluar $uangKeluar)
    {
        $uangKeluar->delete();

        return redirect()->route('uang-keluar.index')->with('success', 'Data berhasil dihapus!');
    }
}