<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Tampilkan semua produk
    public function index()
    {
        $products = Product::all();
        return view('home',['title'=>'DASBORD'] ,compact('products'));
    }

    // Tampilkan form tambah produk
    public function create()
    {
        return view('insert',['title'=>'INSERT']);
    }

    // Simpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:products,nama',
            'harga' => 'required|numeric',
            'stok' => 'required'
        ]);

        Product::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);

        return redirect('/')->with('success', 'Produk berhasil ditambahkan!');
    }

    // Tampilkan semua produk untuk update
    public function updated()
    {
        $products = Product::all();
        return view('update',['title'=>'FOR UPDATE'] ,compact('products'));
    }


    // Tampilkan form edit
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('edit', ['title' => 'EDIT'],compact('product'));
    }

    // Simpan hasil edit
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|unique:products,nama',
            'harga' => 'required|numeric',
            'stok' => 'required',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validated);
        return redirect('/')->with('success', 'Produk berhasil diperbarui');
    }
    // Hapus produk
    public function destroy(Request $request)
    {
        $ids = $request->input('ids');

    if (!$ids) {
        return redirect('/')->with('error', 'Tidak ada data yang dipilih.');
    }

    Product::whereIn('id', $ids)->delete();

    return redirect('/')->with('success', 'Produk terpilih berhasil dihapus.');
    }
}
