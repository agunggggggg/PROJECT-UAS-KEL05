@extends('layout.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Uang Keluar</h1>

    <form action="{{ route('uang-keluar.update', $uangKeluar->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="sumber_uang_keluar">Sumber Uang Keluar</label>
            <input type="text" name="sumber_uang_keluar" value="{{ $uangKeluar->sumber_uang_keluar }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nominal">Nominal</label>
            <input type="text" name="nominal" value="{{ $uangKeluar->nominal }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tgl_keluar">Tanggal Keluar</label>
            <input type="date" name="tgl_keluar" value="{{ $uangKeluar->tgl_keluar }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
