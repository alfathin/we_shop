@extends('layout.main')
@section('style')
<link rel="stylesheet" href="/css/product.css">
@endsection

@section('container')

<div class="row">
    <div class="col-md-4">
        <div class="sukabumi">
            <img src="/img/rpl22.jpg" class="img-thumbnail" alt="">
        </div>
    </div>
    <div class="col-md-8 mb-5">
        <div class="card-body">
            <h5 class="card-title judul">{{ $product->title }}</h5>
            <p class="card-text harga shadow mb-2">Rp{{ $product->excerpt }}</p>
            <div class="baris">
                <p class="card-text teks001">Category <span class="teks"><a href="/categories/{{ $product->category->slug }}" class="text-dark">{{ $product->category->name }}</span></a></p>
                <p class="card-text teks001">Total Stock <span class="teks text-dark">{{ $product->total_stock }}</span></p>
                <p class="card-text teks001">Stock Left <span class="teks text-dark">{{ $product->stock_left }}</span></p>
            </div>
            <small>
                <p class="mb-2">By <a href="/user/{{ $product->user->username }}">{{ $product->user->name }}</a></p>
            </small>
            <p class="card-text badan">{!! $product->body !!}</p>
            @if($reviews != null)
            @foreach($reviews as $review)
            <div class="card-text">
                {{$review->isi}}
                {{$reviews->first()->user->name}}
            </div>
            @endforeach
            @else
            <h1>
                <div class="card-text">
                    <span>belum ada review</span>
                </div>
            </h1>
            @endif
        </div>
        <form action="{{ route('addreview') }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="isi" class="form-label">isi</label>
                <input type="text" name="isi" class="form-control" placeholder="produk ini bagus">
            </div>
            <input type="hidden" name="product_id" class="form-control" value="{{$product->id}}">
            <input type="hidden" name="url" class="form-control" value="{{$product->slug}}">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
<div class="beli">
    <form style="width:60%;" action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $product->id }}" name="id">
        <input type="hidden" value="{{ $product->title }}" name="name">
        <input type="hidden" value="{{ $product->excerpt }}" name="price">
        <input type="hidden" value="{{ $product->slug }}" name="image">
        <input type="hidden" value="1" name="quantity">
        <button class="btn btn-light rounded-0" style="width: 100%; height: 50px;">Add To Cart</button>
    </form>
    <button class="check btn btn-light rounded-0 border-0" style="width: 40%; height: 50px; background-color: #e5d352;">Buy Now</button>
</div>
@endsection