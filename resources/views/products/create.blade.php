@extends('layouts.main')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

      
        <div class="card-header">
            <h3>Tambah Produk</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('products.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           placeholder="Masukkan nama produk"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number"
                           name="price"
                           class="form-control"
                           placeholder="Masukkan harga"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="number"
                           name="stock"
                           class="form-control"
                           placeholder="Masukkan stok"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>

                    <textarea name="description"
                              class="form-control"
                              rows="4"
                              placeholder="Masukkan deskripsi produk"></textarea>
                </div>

                <button type="submit" class="btn btn-success">
                    Simpan
                </button>

                <a href="{{ route('products.index') }}"
                   class="btn btn-secondary">
                   Kembali
                </a>

            </form>

        </div>
    </div>
</div>

@endsection