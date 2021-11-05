@extends('layout.main')
@section('style')
    <link rel="stylesheet" href="/css/product.css">
@endsection

@section('container')
    <img src="/img/rpl2.jpg" class="img-fluid" alt=" . . .">
            <div class="">
                <div class="card-body"> 
                    <h5 class="card-title">{{ $product->title }}</h5>
                    <p class="card-text">Rp{{ $product->excerpt }}</p>
                    <p class="card-text">Category : <a href="/categories/{{ $product->category->slug }}" class="text-dark">{{ $product->category->name }}</a></p>
                    <p class="card-text">Total Stock : {{ $product->total_stock }}</p>
                    <p class="card-text">Stock Left : {{ $product->stock_left }}</p>
                    <small>
                        <p class="mb-2">By <a href="/user/{{ $product->user->username }}">{{ $product->user->name }}</a></p>
                    </small>
                    <p class="card-text">{!! $product->body !!}</p>
                </div>
            </div>
    </div>        
@endsection