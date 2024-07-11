<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container py-4">
        <div class="row py-4 justify-content-center align-items-center">
            <div class="col-md-5">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <main class="form-register w-200 m-auto">
                    <form action="/register" method="post" class="needs-validation" novalidate>
                        @csrf
                        <h1 class="h3 mb-3 fw-normal">Register Form</h1>
                        <div class="form-floating rounded-top">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" id="name" placeholder="name" required value="{{ old('name') }}">
                            <label for="name">Username</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
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
                        <button class="btn btn-primary w-100 py-2" type="submit">Sign up</button>
                        <p class="mt-2">Have an account? <a href="/login">Sign in Here!</a></p>
                        <p class="mt-5 mb-3 text-body-secondary">&copy; June 2024</p>
                    </form>

                </main>
            </div>
        </div>
    </div>
</x-layout>
