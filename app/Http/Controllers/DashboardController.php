<?php

namespace App\Http\Controllers;

use App\Models\UangMasuk;
use App\Models\UangKeluar;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUangMasuk = UangMasuk::sum('nominal');
        $totalUangKeluar = UangKeluar::sum('nominal');
        $saldo = $totalUangMasuk - $totalUangKeluar;

        return view('dashboard', compact('totalUangMasuk', 'totalUangKeluar', 'saldo'));
    }
}