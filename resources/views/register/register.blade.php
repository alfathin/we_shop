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
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Insert Your Name" value="{{ old('name') }}">
                            <div class="invalid-feedback">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Insert Your Username Account" value="{{ old('username') }}">
                            <div class="invalid-feedback">
                                @error('username')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Email address</label>
                          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="We'll never share your email with anyone else." value="{{ old('email') }}">
                            <div class="invalid-feedback">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Enter Your Password">
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