@extends('layouts.app')

@section('content')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900 text-center mb-4">Edit Produk</h1>
            <form method="POST" action="{{ route('produk.update', $produk->id) }}"
                class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="nama" class="ml-2 block text-gray-700 font-bold mb-2">Nama</label>
                    <input type="text"
                        class="shadow-lg bg-gray-200 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="nama" name="nama" value="{{ $produk->nama }}" required>
                </div>
                <div class="mb-4">
                    <label for="deskripsi" class="ml-2 block text-gray-700 font-bold mb-2">Deskripsi</label>
                    <textarea
                        class="shadow-lg bg-gray-200 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="deskripsi" name="deskripsi" rows="3" required>{{ $produk->deskripsi }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="harga" class="ml-2 block text-gray-700 font-bold mb-2">Harga</label>
                    <input type="number"
                        class="shadow-lg bg-gray-200 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="harga" name="harga" value="{{ $produk->harga }}" required>
                </div>
                <div class="mb-4">
                    <label for="kategori_id" class="ml-2 block text-gray-700 font-bold mb-2">Kategori</label>
                    <div class="relative">
                        <select
                            class="shadow-lg bg-gray-200"
                            id="kategori_id" name="kategori_id">
                            @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}"
                                    {{ $kategori->id == $produk->kategori_id ? 'selected' : '' }}>-- {{ $kategori->nama }} --
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>
    </div>
@endsection
