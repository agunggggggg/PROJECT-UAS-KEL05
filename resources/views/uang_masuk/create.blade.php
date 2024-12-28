@extends('layout.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Uang Masuk</h1>

    <form action="{{ route('uang-masuk.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="sumber_uang_masuk">Sumber Uang Masuk</label>
            <input type="text" name="sumber_uang_masuk" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nominal">Nominal</label>
            <input type="text" name="nominal" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tgl_masuk">Tanggal Masuk</label>
            <input type="date" name="tgl_masuk" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
