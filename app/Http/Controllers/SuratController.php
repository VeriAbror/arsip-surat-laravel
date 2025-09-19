<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuratController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->input('q');
        $surats = Surat::with('kategori')
            ->when($q, fn($query) => $query->where('judul','like',"%{$q}%"))
            ->latest()->get();
        return view('surat.index', compact('surats','q'));
    }

    public function create()
    {
        $categories = Kategori::all();
        return view('surat.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'nomor_surat' => 'required',
            'tanggal_surat' => 'required|date',
            'kategori_id' => 'required',
            'file' => 'required|mimes:pdf'
        ]);

        $path = $request->file('file')->store('surat','public');

        Surat::create($request->only('judul','nomor_surat','tanggal_surat','kategori_id') + [
            'file_path' => $path
        ]);

        return redirect()->route('surat.index')->with('success','Data berhasil disimpan');
    }

    public function show($id)
    {
        $surat = Surat::with('kategori')->findOrFail($id);
        return view('surat.show', compact('surat'));
    }

    public function download($id)
    {
        $surat = Surat::findOrFail($id);
        return Storage::disk('public')->download($surat->file_path);
    }

    public function destroy($id)
    {
        $surat = Surat::findOrFail($id);
        Storage::disk('public')->delete($surat->file_path);
        $surat->delete();
        return back()->with('success','Data berhasil dihapus');
    }
}