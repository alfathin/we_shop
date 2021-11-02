@extends('layout.main')
@section('style')
    <link rel="stylesheet" href="/css/product.css">
@stop

@section('container')

    <h1 class="my-3">Products Page</h1>
    <div class="row">
        @foreach ( $products as $product )
        <div class="col col-md-4">
            <div class="tinggi card mb-3">
                <a href="/product/{{ $product->slug }}" class="text-decoration-none text-dark">
                <img src="/img/bun1.jpg" class="card-img-top" alt=" . . .">
                <div class="card-body boday"> 
                    <h5 class="card-title fw-normal">{{ $product->title }}</h5>
                    <p class="harga card-text fs-4">Rp{{ $product->excerpt }}</p>
                </div>
            </a>
            </div>
        </div>
        @endforeach
    </div>

@endsection