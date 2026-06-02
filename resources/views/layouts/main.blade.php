<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            min-height:100vh;
            display:flex;
            flex-direction:column;
        }

        .content{
            flex:1;
        }

        footer{
            background:#212529;
            color:white;
            text-align:center;
            padding:10px;
        }

        .nav-link{
            color:white !important;
            margin:0 5px;
        }

        .nav-link.active{
            background-color:#0d6efd;
            color:white !important;
            border-radius:5px;
            padding:8px 15px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand fw-bold" href="/">
            Inventory App
        </a>

        <div class="navbar-nav">

            <a class="nav-link {{ Request::path() == '/' ? 'active' : '' }}"
               href="/">
                Home
            </a>

            <a class="nav-link {{ Request::is('products') || Request::is('create') || Request::is('edit/*') ? 'active' : '' }}"
               href="{{ route('products.index') }}">
                Product
            </a>

            <a class="nav-link {{ Request::is('categories*') ? 'active' : '' }}"
               href="{{ route('categories.index') }}">
                Category
            </a>

        </div>

    </div>
</nav>

<div class="container content mt-5">
    @yield('content')
</div>

<footer>
    © 2026 Inventory App - Manajemen Informatika PNP
</footer>

</body>
</html>