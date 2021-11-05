@extends('layout.main')
@section('style')
    <link rel="stylesheet" href="/css/product.css">
@endsection

@section('container')

    <h1 class="my-3">Detail Products Page</h1>
    <small>
        <p class="mb-2">By<a href="/user/{{ $product->user->username }}">{{ $product->user->name }}</a> in <a href="/categories/{{ $product->category->slug }}">{{ $product->category->name }}</a></p>
    </small>
            <div class="img-fluid">
                <img src="/img/rpl2.jpg" class="card-img-top" alt=" . . .">
                <div class="card-body"> 
                    <h5 class="card-title">{{ $product->title }}</h5>
                    <p class="card-text">Rp. {{ $product->excerpt }}</p>
                    <p class="card-text">{!! $product->body !!}</p>
                </div>
            </div>
@endsection