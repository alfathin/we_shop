@extends('layout.main')
@section('style')
    <link rel="stylesheet" href="/css/login.css">
@endsection

@section('container')

    <div class="row justify-content-center haji">
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-header">
                    <h2 class="text-center">We Shop Register</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('actionregister') }}" method="POST">
                        @method('put')
                    @csrf
                        <div class="mb-3 form-floating">
                                <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{ old('name') }}">
                                <label for="floatingInput">Name</label>
                            <div class="invalid-feedback">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{ old('username') }}">
                            <label for="floatingInput">Username</label>
                            <div class="invalid-feedback">
                                @error('username')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}">
                            <label for="floatingInput">Email</label>
                            <div class="invalid-feedback">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{ old('password') }}">
                            <label for="floatingInput">Password</label>
                            <div class="invalid-feedback">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
                <div class="card-title ms-3">
                    <small>Already Have Account ? <a class="text-decoration-none" href="/login">Login</a></small>
                </div>
            </div>
        </div>
    </div>

@endsection