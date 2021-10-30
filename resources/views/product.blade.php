@extends('layout.main')

@section('container')

    <h1>Detail Products Page</h1>
            <div class="card">
                <a href="/product" class="text-decoration-none text-dark">
                    <img src="/img/rpl2.jpg" class="card-img-top" alt=" . . .">
                    <div class="card-body"> 
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text">Rp. {{ $product->excerpt }}</p>
                        <p class="card-text">{!! $product->body !!}</p>
                    </div>
                </a>
            </div>
@endsection