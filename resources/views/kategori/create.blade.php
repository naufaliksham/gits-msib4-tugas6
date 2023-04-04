@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Product</h1>

    <form method="POST" action="{{ route('kategori.store') }}">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Kategori</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
