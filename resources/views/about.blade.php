@extends('layouts.app')

@section('content')
<div class="d-flex flex-column align-items-center">
    <img src="{{ asset('images/foto.jpg') }}" class="rounded-circle shadow mb-3" width="150" alt="Foto Profil">
    <h3 class="fw-bold">VERI ABROR HADI</h3>
    <p class="mb-1">NIM: 2331730095</p>
    <p class="text-muted">Tanggal Pembuatan: {{ date('d-m-Y') }}</p>
</div>
@endsection
