@extends('layouts/main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session()->has('logoutSession'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('logoutSession') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <main class="form-signin w-100 m-auto">
                        <h1 class="h3 mb-3 fw-normal text-center">Sign in</h1>
                        <form action="/login" method="post">
                            @csrf
                            <div class="form-floating">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}" autofocus required>
                                <label for="email">Email address</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" placeholder="Password"
                                    name="password" required>
                                <label for="password">Password</label>
                            </div>

                            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                        </form>
                        <small class="d-block text-end mt-3">No account yet? <a href="/register"
                                class="text-decoration-none">Sign up now!</a></small>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection
