@extends('layouts.main')

@section('content')
  <div class="pt-3 pb-2 mb-3 border-bottom">
    <h2>Tambah Kategori</h2>
  </div>

  <div class="col-md-8 mb-3">
    <form method="POST" action="/items">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <button type="submit" class="btn btn-primary">Tambah Barang</button>
    </form>
  </div>
    
@endsection