@extends('layouts.app')

{{-- @section('content')
    <div class="container">
        <h1>Edit Kategori</h1>
        <hr>
        <form method="POST" action="{{ route('kategori.update', $kategori->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $kategori->nama }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection --}}
@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 text-center mb-4">Edit Kategori</h1>
        <form method="POST" action="{{ route('kategori.update', $kategori->id) }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nama" class="ml-2 block text-gray-700 font-bold mb-2">Nama</label>
                <input type="text" class="shadow-lg bg-gray-200 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                 id="nama" name="nama" value="{{ $kategori->nama }}" required>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>
</div>
@endsection
