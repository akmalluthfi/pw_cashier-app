@extends('layouts.main')

@section('content')
  <div class="pt-3 pb-2 mb-3 border-bottom">
    <h2>Edit Barang</h2>
  </div>

  <div class="col-md-8 mb-3">
    <form method="POST" action="/items/{{ $item->id }}">
      @csrf
      @method('put')
      <div class="mb-3">
        <label for="name" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}" required>
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Kategori Barang</label>
        <select class="form-select" name="category_id" required>
          <option selected disabled>Silahkan Pilih Kategori</option>
          @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $item->category->id ? 'selected' : '' }}>{{ $category->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="brand" class="form-label">Merk</label>
        <input type="text" class="form-control" id="brand" name="brand" value="{{ $item->brand }}" required>
      </div>
      <div class="mb-3">
        <label for="purchase_price" class="form-label">Harga Beli</label>
        <input type="number" class="form-control" id="purchase_price" name="purchase_price" value="{{ $item->purchase_price }}" required>
      </div>
      <div class="mb-3">
        <label for="selling_price" class="form-label">Harga Jual</label>
        <input type="number" class="form-control" id="selling_price" name="selling_price" value="{{ $item->selling_price }}" required>
      </div>
      <div class="mb-3">
        <label for="stock" class="form-label">Stok</label>
        <input type="number" class="form-control" id="stock" name="stock" value="{{ $item->stock }}" required>
      </div>
      <button type="submit" class="btn btn-primary">Edit Barang</button>
    </form>
  </div>
    
@endsection