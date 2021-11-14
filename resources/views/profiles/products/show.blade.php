@extends('profiles.layouts.main')

@section('container')
  <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="my-3">{{ $product->title }}</h1>
                <a href="/dashboard/products" class="btn btn-success mb-3"><span data-feather="arrow-left"></span> Back to my all Product</a>
                <a href="" class="btn btn-warning mb-3"><span data-feather="edit"></span> Edit</a>
                <a href="" class="btn btn-danger mb-3"><span data-feather="x-circle"></span> Delete</a>
                <div class="card mb-2">
                <img src="https://source.unsplash.com/1200x400?{{ $product->category->name }}" class="card-img-top img-fluid" alt="{{ $product->category->name }}">
                    <div class="card-body">
                        <p class="card-text">{{ $product->excerpt }}</p>
                        <article class="my-3 fs-5">
                            {!! $product->body !!}
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection