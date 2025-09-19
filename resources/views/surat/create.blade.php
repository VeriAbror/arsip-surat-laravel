@extends('layouts.app')

@section('content')
<h4>Arsipkan Surat</h4>
<form method="POST" enctype="multipart/form-data" action="{{ route('surat.store') }}">
@csrf
<div class="mb-3">
  <label>Judul</label>
  <input type="text" name="judul" class="form-control" required>
</div>
<div class="mb-3">
  <label>Nomor Surat</label>
  <input type="text" name="nomor_surat" class="form-control" required>
</div>
<div class="mb-3">
  <label>Tanggal Surat</label>
  <input type="date" name="tanggal_surat" class="form-control" required>
</div>
<div class="mb-3">
  <label>Kategori</label>
  <select name="kategori_id" class="form-control" required>
    @foreach($categories as $c)
      <option value="{{ $c->id }}">{{ $c->nama }}</option>
    @endforeach
  </select>
</div>
<div class="mb-3">
  <label>File (PDF)</label>
  <input type="file" name="file" accept="application/pdf" class="form-control" required>
</div>
<button class="btn btn-success">Simpan</button>
<a href="{{ route('surat.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection