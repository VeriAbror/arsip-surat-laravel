@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
  <form method="GET">
    <input type="text" name="q" placeholder="Cari surat..." value="{{ $q }}" class="form-control d-inline w-auto">
    <button class="btn btn-primary">Cari</button>
  </form>
  <a href="{{ route('surat.create') }}" class="btn btn-success">Arsipkan Surat..</a>
</div>

<table class="table table-bordered">
  <thead><tr><th>Judul</th><th>Nomor</th><th>Kategori</th><th>Tanggal</th><th>Aksi</th></tr></thead>
  <tbody>
    @foreach($surats as $s)
    <tr>
      <td>{{ $s->judul }}</td>
      <td>{{ $s->nomor_surat }}</td>
      <td>{{ $s->kategori->nama }}</td>
      <td>{{ $s->tanggal_surat }}</td>
      <td>
        <a href="{{ route('surat.show',$s->id) }}" class="btn btn-info btn-sm">Lihat >></a>
        <a href="{{ route('surat.download',$s->id) }}" class="btn btn-warning btn-sm">Unduh</a>
        <form method="POST" action="{{ route('surat.destroy',$s->id) }}" style="display:inline" onsubmit="return confirm('Hapus data ini?')">
          @csrf @method('DELETE')
          <button class="btn btn-danger btn-sm">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection