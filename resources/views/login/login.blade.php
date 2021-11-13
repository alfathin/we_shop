@extends('layout.main')
@section('style')
    <link rel="stylesheet" href="/css/login.css">
@stop

@section('container')

<div class="row justify-content-center haji">
    <div class="col-md-6">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif
        
        @if(session()->has('logineror'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('logineror') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif
        <div class="card mt-5">
                <div class="card-header">
                    <h2 class="text-center">We Shop Login</h2>
                </div>     
                <div class="card-body responlog">
                    <form action="{{ route('actionlogin') }}" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
                <div class="card-title ms-3">
                    <small>Dont have any Account ? <a class="text-decoration-none" href="/register">Register</a></small>
                </div>
            </div>
        </div>
    </div>

@endsection