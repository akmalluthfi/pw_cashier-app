@extends('layouts.main')

@section('content')
  <div class="pt-3 pb-2 mb-3 border-bottom">
    <h2>Data Barang</h2>
  </div>

  {{-- alert --}}
  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <a href="/items/create" class="btn btn-success mb-3">Tambah Barang</a>
  
  <table class="table table-striped table-hover">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Kategori</th>
        <th scope="col">Merek</th>
        <th scope="col">Harga Beli</th>
        <th scope="col">Harga Jual</th>
        <th scope="col">Stok</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($items as $item)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $item->name }}</td>
          <td>{{ $item->category->name ?? 'Katergori Telah Dihapus' }}</td>
          <td>{{ $item->brand}}</td>
          <td>{{ $item->purchase_price }}</td>
          <td>{{ $item->selling_price }}</td>
          <td>{{ $item->stock }}</td>
          <td>
            <a href="/items/{{ $item->id }}" class="btn badge text-bg-primary"><span data-feather="eye" class="align-text-bottom"></span></a>
            <a href="/items/{{ $item->id }}/edit" class="btn badge text-bg-warning"><span data-feather="edit" class="align-text-bottom"></span></a>
            <form action="/items/{{ $item->id }}" method="POST" class="d-inline">
              @csrf
              @method('delete')
              <button class="btn badge text-bg-danger"><span data-feather="trash-2" class="align-text-bottom" onclick="return confirm('Apakah anda yakin mau menghapus barang?')"></span></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection