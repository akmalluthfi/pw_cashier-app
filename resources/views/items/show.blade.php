@extends('layouts.main')

@section('content')
  <div class="pt-3 pb-2 mb-3 border-bottom">
    <h2>Detail Barang</h2>
  </div>
  <a href="/items" class="btn btn-primary mb-3">Kembali</a>
  <div class="col-md-8 mb-5">
    <div class="mb-3">
      <label for="name" class="form-label">Nama Barang</label>
      <input type="text" class="form-control" value="{{ $item->name }}" readonly>
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Kategori</label>
      <input type="text" class="form-control" value="{{ $item->category->name }}" readonly>
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Merk</label>
      <input type="text" class="form-control" value="{{ $item->brand }}" readonly>
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Harga Beli</label>
      <input type="text" class="form-control" value="{{ $item->purchase_price }}" readonly>
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Harga Jual</label>
      <input type="text" class="form-control" value="{{ $item->selling_price }}" readonly>
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Stok</label>
      <input type="text" class="form-control" value="{{ $item->stock }}" readonly>
    </div>
  </div>


@endsection