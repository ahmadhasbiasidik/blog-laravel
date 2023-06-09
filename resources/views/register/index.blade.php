@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h4 class="mb-3 fw-normal text-center">Registration form</h4>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top @error('name')is-invalid @endError" id="name" placeholder="Name" required value="{{ old('name')}}">
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @endError
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @endError" id="username" placeholder="Username" required value="{{ old('username')}}">
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @endError
                </div>
                <div class="form-floating">
                    <input type="text" name="email" class="form-control @error('email') is-invalid @endError" id="email" placeholder="name@example.com" required value="{{ old('email')}}">
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @endError
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @endError" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @endError
                </div>
            
                <button class="w-100 btn btn-lg btn-dark mt-2" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Have an account? <a href="/login" class="text-decoration-none">Login</a></small>
        </main>
    </div>
</div>
@endsection