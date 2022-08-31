@extends('layouts.main')

@section('content')
  <div class="pt-3 pb-2 mb-3 border-bottom">
    <h2>Data Kategori</h2>
  </div>

  {{-- alert --}}
  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <a href="/categories/create" class="btn btn-success mb-3">Tambah Kategori</a>
  
  <div class="col-md-6">
    <table class="table table-striped table-hover">
      <thead class="table-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Tanggal Input</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $category->name }}</td>
            <td>{{ date_format($category->created_at, "j M Y, H:i") }}</td>
            <td>
              <a href="/categories/{{ $category->id }}/edit" class="btn badge text-bg-warning"><span data-feather="edit" class="align-text-bottom"></span></a>
              <form action="/categories/{{ $category->id }}" method="POST" class="d-inline">
                @csrf
                @method('delete')
                <button class="btn badge text-bg-danger"><span data-feather="trash-2" class="align-text-bottom"></span></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection