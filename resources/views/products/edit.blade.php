@extends('layouts.main')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header">
            <h3>Edit Produk</h3>
        </div>

        <div class="card-body">

            <form action="/update/{{ $product->id }}" method="POST">
                @csrf

          
                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>

                    <input type="text"
                           name="name"
                           class="form-control"
                           value="{{ $product->name }}"
                           required>
                </div>

              
                <div class="mb-3">
                    <label class="form-label">Kategori</label>

                    <select name="category_id"
                            class="form-control"
                            required>

                        <option value="">-- Pilih Kategori --</option>

                        @foreach($categories as $c)

                            <option value="{{ $c->id }}"
                                {{ $product->category_id == $c->id ? 'selected' : '' }}>

                                {{ $c->name }}

                            </option>

                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga</label>

                    <input type="number"
                           name="price"
                           class="form-control"
                           value="{{ $product->price }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Stock</label>

                    <input type="number"
                           name="stock"
                           class="form-control"
                           value="{{ $product->stock }}"
                           required>
                </div>

              
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>

                    <textarea name="description"
                              class="form-control"
                              rows="4">{{ $product->description }}</textarea>
                </div>

                
                <div class="mb-3">
                    <label class="form-label">Status</label>

                    <select name="status"
                            class="form-control"
                            required>

                        <option value="tersedia"
                            {{ $product->status == 'tersedia' ? 'selected' : '' }}>
                            Tersedia
                        </option>

                        <option value="habis"
                            {{ $product->status == 'habis' ? 'selected' : '' }}>
                            Habis
                        </option>

                    </select>
                </div>

              
                <button type="submit" class="btn btn-warning">
                    Update
                </button>

                <a href="/products"
                   class="btn btn-secondary">
                   Kembali
                </a>

            </form>

        </div>
    </div>
</div>

@endsection