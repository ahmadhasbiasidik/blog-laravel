@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        @if (session()->has('success'))
            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <main class="form-signin">
            <h4 class="mb-3 fw-normal text-center">Please login</h4>
            <form action="/login" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="email" class="form-control @error('email') is-invalid @endError" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @endError
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
            
                <button class="w-100 btn btn-lg btn-dark" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Don't have an account? <a href="/register" class="text-decoration-none">Register now</a></small>
        </main>
    </div>
</div>
@endsection