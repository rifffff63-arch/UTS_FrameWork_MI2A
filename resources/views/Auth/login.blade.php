<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Manajemen Produk</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">

            <div class="card shadow">

                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Login Sistem</h4>
                </div>

                <div class="card-body p-4">

                    {{-- Pesan sukses --}}
                    @if(session('info'))
                        <div class="alert alert-info">
                            {{ session('info') }}
                        </div>
                    @endif

                    {{-- Pesan error --}}
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login.process') }}">
                        @csrf

                        {{-- Email --}}
                        <div class="mb-3">
                            <label class="form-label">Email</label>

                            <input type="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   autofocus
                                   class="form-control @error('email') is-invalid @enderror">

                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="mb-3">
                            <label class="form-label">Password</label>

                            <input type="password"
                                   name="password"
                                   class="form-control @error('password') is-invalid @enderror">

                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Login
                        </button>

                    </form>

                </div>

            </div>

        </div>
    </div>
</div>

</body>
</html>