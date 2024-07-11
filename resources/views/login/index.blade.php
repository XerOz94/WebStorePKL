<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container py-4">
        <div class="row py-4 justify-content-center align-items-center">
            <div class="col-md-5">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Register Berhasil!</strong> Anda bisa login sekarang.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Login Gagal</strong> Masukkan data yang benar.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <main class="form-signin w-200 m-auto">
                    <form action="/login" method="post">
                        @csrf
                        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                        <div class="form-floating">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" id="email" placeholder="name@example.com" required
                                value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating rounded-bottom">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                        <p class="mt-2">Don't have an account? <a href="/register">Register Here!</a></p>
                        <p class="mt-5 mb-3 text-body-secondary">&copy; June 2024</p>
                    </form>
                </main>
            </div>
        </div>

    </div>
</x-layout>
