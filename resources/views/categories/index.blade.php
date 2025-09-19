@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
  <h4>Kategori Surat</h4>
  <a href="{{ route('categories.create') }}" class="btn btn-success">Tambah</a>
</div>
<table class="table table-bordered">
  <thead><tr><th>ID</th><th>Nama</th><th>Aksi</th></tr></thead>
  <tbody>
    @foreach($categories as $c)
    <tr>
      <td>{{ $c->id }}</td>
      <td>{{ $c->nama }}</td>
      <td>
        <a href="{{ route('categories.edit',$c->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form method="POST" action="{{ route('categories.destroy',$c->id) }}" style="display:inline" onsubmit="return confirm('Hapus kategori ini?')">
          @csrf @method('DELETE')
          <button class="btn btn-danger btn-sm">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection