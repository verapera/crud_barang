@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="card">
    <div div class="card-body">
      <h5 class="card-title fw-semibold mb-4 text-center">Data Barang</h5>
      <div class="container">
        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
        + Tambah Data Barang
        </button>
        <div class="table-responsive">
          <table id="tabel-data" class="table table-bordered table-advance table-hover">
            <thead class="thead-light bg-primary text-light">
              <tr>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Stok</th>    
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $item)
                <tr>
                    <td>{{$item->nama_barang}}</td>
                    <td>{{$item->harga}}</td>
                    <td>{{$item->stok}}</td>
                    <td>
                        <a href="/barang/{{ $item->id }}" class="btn btn-warning">Edit</a>
                        <form action="/barang/{{ $item->id }}" class="d-inline" method="post">
                          @csrf
                          @method("delete")
                          <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <form action="/barang" method="post">

            <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah barang</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                @csrf
                  <div class="mb-3">
                    <label for="nama" class="mb-1">Nama Barang</label>
                    <input type="text" id="nama" name="nama" placeholder="nama barang" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="harga" class="mb-1">Harga Barang</label>
                    <input type="number" id="harga" name="harga" placeholder="harga barang" class="form-control">
                  </div>
                  <div class="mb-3" class="mb-1">
                    <label for="stok">Stok Barang</label>
                    <input type="number" id="stok" name="stok" placeholder="stok barang" class="form-control">
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" >Tambah Barang</button>
              </div>
            </div>
          </form>

        </div>
      </div>
  </div>
</div>



      @endsection