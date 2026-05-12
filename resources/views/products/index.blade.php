@extends('layouts.main')

@section('content')

<h1>Daftar Barang Inventaris</h1>

<a href="/insert" class="btn btn-primary">Tambah Data Otomatis</a>

<br><br>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stock</th>
            <th>Deskripsi</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $p)
        <tr>
            <td>{{ $p->name }}</td>
            <td>{{ $p->category->name ?? '-' }}</td>
            <td>Rp {{ number_format($p->price) }}</td>
            <td>{{ $p->stock }}</td>
            <td>{{ $p->description }}</td>
            <td>{{ $p->status }}</td>
            <td>
                <a href="/update/{{ $p->id }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="/delete/{{ $p->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $products->links() }}

@endsection
