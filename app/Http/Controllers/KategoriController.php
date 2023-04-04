<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $kategoris = Kategori::all();

        return view('kategori.index', compact('kategoris'));
    }

    public function create(){
        return view('kategori.create');
    }

    public function store(Request $request){
        $kategori = new Kategori;
        $kategori->nama = $request->nama;
        $kategori->save();

        return redirect()->route('kategori.index');
    }

    public function edit($id){
        $kategori = Kategori::findOrFail($id);

        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id){
        $kategori = Kategori::findOrFail($id);
        $kategori->nama = $request->nama;
        $kategori->save();

        return redirect()->route('kategori.index');
    }

    public function destroy($id){
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('kategori.index');
    }
}
