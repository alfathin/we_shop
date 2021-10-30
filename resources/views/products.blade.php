@extends('layout.main')

@section('container')

    <h1 class="mb-3 mt-3">Products Page</h1>
    <div class="row">
        @foreach ( $products as $product )
        <div class="col-md-3">
            <div class="card mb-3 d-flex hape" style="width: 15rem; height: 300px;">
                <a href="/product/{{ $product->slug }}" class="text-decoration-none text-dark">
                <img src="/img/rpl2.jpg" class="card-img-top" alt=" . . .">
                <div class="card-body"> 
                    <h5 class="card-title">{{ $product->title }}</h5>
                    <p class="card-text fs-4 align-items-end">Rp. {{ $product->excerpt }}</p>
                </div>
            </a>
            </div>
        </div>
        @endforeach
    </div>

@endsection