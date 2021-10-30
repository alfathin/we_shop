@extends('layout.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card mt-5" style="width: 30rem;">
                <div class="card-header">
                    <h2> We Shop Register</h2>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="Name" class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Insert Your Name">
                        </div>
                        <div class="mb-3">
                            <label for="Name" class="form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Insert Your Username Account">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="We'll never share your email with anyone else.">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password">
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