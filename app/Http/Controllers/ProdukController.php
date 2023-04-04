<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $produks = Produk::all();
        
        return view('produk.index', compact('produks'));
    }

    public function create(){
        $kategoris = Kategori::all();

        return view('produk.create', compact('kategoris'));
    }

    public function store(Request $request) {
        $produk = new Produk;
        $produk->nama = $request->nama;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->kategori_id = $request->kategori_id;
        $produk->save();

        return redirect()->route('produk.index');
    }

    public function edit($id){
        $produk = Produk::findOrFail($id);
        $kategoris = Kategori::all();

        return view('produk.edit', compact('produk', 'kategoris'));
    }

    public function update(Request $request, $id){
        $produk = Produk::findOrFail($id);
        $produk->nama = $request->nama;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->kategori_id = $request->kategori_id;
        $produk->save();

        return redirect()->route('produk.index');
    }

    public function destroy($id){
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('produk.index');
    }
}
