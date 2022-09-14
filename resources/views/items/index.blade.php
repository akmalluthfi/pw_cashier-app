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

  <div class="row justify-content-between mb-3">
    <div class="col-12 col-sm">
      <input class="form-control mb-3" type="search" name="search" id="search" placeholder="Cari Barang..." value="{{ request()->query('k') ?? '' }}">
    </div>
    <div class="col-auto">
      <a href="/items/create" class="btn btn-success">Tambah Barang</a>
    </div>
  </div>
  
  <div class="table-responsive mb-3">
    <table class="table table-striped table-hover">
      <thead class="table-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Kategori</th>
          <th scope="col">Merek</th>
          <th scope="col" class="text-nowrap">Harga Beli</th>
          <th scope="col" class="text-nowrap">Harga Jual</th>
          <th scope="col">Stok</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody id="items-table-body">
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
              <div class="d-flex flex-nowrap">
                <a href="/items/{{ $item->id }}" class="btn badge text-bg-primary me-2"><span data-feather="eye" class="align-text-bottom"></span></a>
                <a href="/items/{{ $item->id }}/edit" class="btn badge text-bg-warning me-2"><span data-feather="edit" class="align-text-bottom"></span></a>
                <form action="/items/{{ $item->id }}" method="POST" class="d-inline">
                  @csrf
                  @method('delete')
                  <button class="btn badge text-bg-danger"><span data-feather="trash-2" class="align-text-bottom" onclick="return confirm('Apakah anda yakin mau menghapus barang?')"></span></button>
                </form>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  {{ $items->links() }}
@endsection
