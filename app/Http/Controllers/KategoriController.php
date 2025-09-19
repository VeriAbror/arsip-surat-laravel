<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $categories = Kategori::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.form');
    }

    public function store(Request $request)
    {
        $request->validate(['nama'=>'required']);
        Kategori::create($request->only('nama'));
        return redirect()->route('categories.index')->with('success','Kategori ditambahkan');
    }

    public function edit(Kategori $category)
    {
        return view('categories.form', compact('category'));
    }

    public function update(Request $request, Kategori $category)
    {
        $request->validate(['nama'=>'required']);
        $category->update($request->only('nama'));
        return redirect()->route('categories.index')->with('success','Kategori diupdate');
    }

    public function destroy(Kategori $category)
    {
        $category->delete();
        return back()->with('success','Kategori dihapus');
    }
}