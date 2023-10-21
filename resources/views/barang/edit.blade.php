@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div div class="card-body">
            <form action="/barang" method="POST">
                @csrf
                @method("put")
                <div class="card-title">Edit ID barang : {{ $data->id }}</div>
                <hr>
                <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="mb-4">
                    <label for="nama" class="mb-2">nama barang</label>
                    <input type="text" value="{{ $data->nama_barang }}" placeholder="nama barang" name="nama" class="form-control">
                </div>
                <div class="mb-4">
                    <label for="harga" class="mb-2">harga barang</label>
                    <input type="text" value="{{ $data->harga }}" placeholder="harga barang" name="harga" class="form-control">
                </div>
                <div class="mb-4">
                    <label for="stok" class="mb-2">stok barang</label>
                    <input type="text" value="{{ $data->stok }}" placeholder="stok barang" name="stok" class="form-control">
                </div>
                <a href="/" class="btn btn-success">Kembali</a>
                <button type="submit" class="btn btn-primary">Edit Barang</button>
            </form>
        </div>
    </div>
</div>
@endsection