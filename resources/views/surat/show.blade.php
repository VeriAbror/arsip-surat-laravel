@extends('layouts.app')

@section('content')
<h4>{{ $surat->judul }}</h4>
<p>Nomor: {{ $surat->nomor_surat }}</p>
<p>Kategori: {{ $surat->kategori->nama }}</p>
<p>Tanggal: {{ $surat->tanggal_surat }}</p>
<a href="{{ route('surat.download',$surat->id) }}" class="btn btn-warning">Unduh</a>
<a href="{{ route('surat.index') }}" class="btn btn-secondary">Kembali <<</a>
<iframe src="{{ asset('storage/'.$surat->file_path) }}" width="100%" height="600"></iframe>
@endsection