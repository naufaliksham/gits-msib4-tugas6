@extends('layouts.app')

@section('content')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900 text-center mb-4">Create New Product</h1>

            <form method="POST" action="{{ route('produk.store') }}"
                class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <div class="mb-4">
                    <label class="ml-2 block text-gray-700 font-bold mb-2"
                     for="nama">Nama Produk</label>
                    <input type="text" class="shadow-lg bg-gray-200 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" name="nama" required>
                </div>
                <div class="mb-4">
                    <label class="ml-2 block text-gray-700 font-bold mb-2"
                     for="deskripsi">Deskripsi Produk</label>
                    <textarea class="shadow-lg bg-gray-200 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="deskripsi" name="deskripsi" required></textarea>
                </div>
                <div class="mb-4">
                    <label class="ml-2 block text-gray-700 font-bold mb-2"
                     for="harga">Harga Produk</label>
                    <input type="number" class="shadow-lg bg-gray-200 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="harga" name="harga" required>
                </div>
                <div class="mb-4">
                    <label class="ml-2 block text-gray-700 font-bold mb-2"
                     for="kategori_id">Kategori Produk</label>
                    <select class="shadow-lg bg-gray-200" id="kategori_id" name="kategori_id" required>
                        <option value="">-- Pilih Kategori --</option>
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}">-- {{ $kategori->nama }} --</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>
    </div>
@endsection
