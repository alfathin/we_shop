@extends('layout.main')
@section('style')
    <link rel="stylesheet" href="/css/product.css">
@endsection

@section('container')
        <div class="row">
            <div class="col-md-4">
                <div class="sukabumi">
                    <img src="/img/rpl22.jpg"class="img-thumbnail" alt="">
                </div>
            </div>
            <div class="col-md-8 mb-5">
                <div class="card-body"> 
                    <h5 class="card-title judul">{{ $product->title }}</h5>
                    <p class="card-text harga shadow mb-2">Rp{{ $product->excerpt }}</p>
                    <div class="baris">
                        <p class="card-text teks001">Category  <span class="teks"><a href="/categories/{{ $product->category->slug }}" class="text-dark">{{ $product->category->name }}</span></a></p>
                        <p class="card-text teks001">Total Stock  <span class="teks text-dark">{{ $product->total_stock }}</span></p>
                        <p class="card-text teks001">Stock Left  <span class="teks text-dark">{{ $product->stock_left }}</span></p>
                    </div>
                    <small>
                        <p class="mb-2">By <a href="/user/{{ $product->user->username }}">{{ $product->user->name }}</a></p>
                    </small>
                    <p class="card-text badan">{!! $product->body !!}</p>
                </div>
            </div>
        </div>     
        <div class="beli">
            <button class="btn btn-light rounded-0" style="width: 60%; height: 50px;">Insert to Cart</button>
            <button class="check btn btn-light rounded-0 border-0" style="width: 40%; height: 50px; background-color: #e5d352;">Buy Now</button>
        </div>
@endsection