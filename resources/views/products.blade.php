@extends('layout.main')
@section('style')
<link rel="stylesheet" href="/css/product.css">
@stop

@section('container')

<h1 class="my-4 text-center">{{ $title }}</h1>
<form action="product/search" method="POST">
    <div class="input-group mb-3">
        <input type="text" name="key" class="form-control" placeholder="search something">
        <button type="submit" class="input-group-text">search</button>
    </div>
</form>

<div class="row geser2">
    @foreach ( $products as $product )
    <div class="col col-md-3">
        <div class="tinggi card mb-3">
            <div class="position-absolute px-3 py-2 text-white rounded-bottom pin"><a href="categories/{{ $product->category->slug}}" class="text-decoration-none text-white">{{ $product->category->name }}</a></div>
            <a href="/product/{{ $product->slug }}" class="text-decoration-none text-dark">
                <img src="https://source.unsplash.com/400x400/?{{ $product->category->slug }}" class="card-img-top" alt="{{ $product->category->name }}">
                <div class="card-body boday">
                    <h5 class="card-title fw-normal">{{ $product->title }}</h5>
                    <p class="card-text fs-4">Rp{{ $product->excerpt }}</p>
                </div>
            </a>
        </div>
    </div>
    @endforeach
</div>

@endsection