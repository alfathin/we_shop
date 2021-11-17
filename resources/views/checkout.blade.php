@extends('layout.main')

@section('container')
<h4 class="mt-5 mb-2">CheckOut Page</h4>
<section class="d-flex  mb-5">
    <div class="item-cart">
        <div class="mt-4">
            <h6>Shipping Address</h6>
            <hr>
            <hr>
        </div>
        @foreach($items as $item)
        <div class="rs mt-3 shadow p-3 bg-body rounded d-flex align-items-center justify-content-between">
            <div class="img img-thumbnail mx-2">
                <img src="/download.jfif" style="width: 100%; height:auto" alt="product">
            </div>
            <div style="flex: 1;">
                <p>{{$item->title}}</p>
                <p class="fw-bolder">Rp{{$item->excerpt}}</p>
            </div>
            <div>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Choose Courier</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        @endforeach
    </div>
    <div class="summary shadow p-3 bg-body rounded">
        <div class="detail-summary">
            <h4 class="mb-4">Summary</h4>
            <div class="mb-2 item d-flex justify-content-between">
                <p>Total (<span id="jml">0 goods</span>)</p>
                <p id="harga">Rp0</p>
            </div>
            <div class="mb-2 item d-flex justify-content-between">
                <p>Total diskon</p>
                <p>Rp0</p>
            </div>
            <div class="mb-2 item d-flex justify-content-between">
                <p>Ongkir</p>
                <p>Rp0</p>
            </div>
            <hr>
        </div>
        <div class="res">
            <div class="resa mb-3  d-flex justify-content-between">
                <b class="fw-normal">Total Price</b>
                <b id="harga">Rp0</b>
            </div>
            <form action="{{ route('checkout.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input id="pass" type="hidden" value="" name="check">
                <button id="check" class=" btn btn-primary" style="width:100%" disabled>Buy</button>
            </form>
        </div>
    </div>
</section>
@endsection