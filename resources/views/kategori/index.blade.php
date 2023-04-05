<!-- resources/views/produk/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span
            class="bg-gray-50 dark:bg-gray-700 dark:text-gray-50 rounded-lg px-2">Daftar Kategori</span></h1>

    <div class="m-5">
        <div class="my-[1%] relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">#</th>
                        <th scope="col" class="px-6 py-3">Nama Kategori</th>
                        <th scope="col" class="px-6 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $order = 1;
                    @endphp
                    @foreach ($kategoris as $kategori)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th class="px-6 py-4">{{ $order++ }}</th>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $kategori->nama }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('kategori.edit', $kategori->id) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline"">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('kategori.create') }}"
            class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tambah
            Kategori</a>
    </div>
@endsection
