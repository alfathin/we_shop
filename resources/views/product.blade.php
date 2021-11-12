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
@endsection