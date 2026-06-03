@extends('layouts.main')

@section('content')

<div class="text-center" style="margin-top:120px">

    <h1 class="display-4">
        Inventory App
    </h1>

    <p class="lead">
        Selamat datang pada aplikasi inventaris sederhana Laravel.
    </p>

    {{-- Tombol navigasi --}}
    <a href="{{ route('products.index') }}"
       class="btn btn-primary">
        Kelola Produk
    </a>

    <a href="{{ route('categories.index') }}"
       class="btn btn-success">
        Kelola Kategori
    </a>

    {{-- Logout (WAJIB POST) --}}
    <div class="mt-4">

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">
                Logout
            </button>
        </form>

    </div>

</div>

@endsection