@extends('layouts.main')

@section('content')

<div class="text-center" style="margin-top:120px">

    <h1 class="display-4">
        Inventory App
    </h1>

    <p class="lead">
        Selamat datang pada aplikasi inventaris sederhana Laravel.
    </p>

    <a href="{{ route('products.index') }}"
       class="btn btn-primary">
        Kelola Produk
    </a>

    <a href="{{ route('categories.index') }}"
       class="btn btn-success">
        Kelola Kategori
    </a>

</div>

@endsection