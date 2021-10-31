@extends('layout.main')

@section('container')
<section class="d-flex mt-5 mb-5">
    <div class="item-cart">
        <div class="shadow p-3 bg-body rounded ">
            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                <b>Select All</b>
            </label>
        </div>
        <div class="mt-3 shadow p-3 bg-body rounded d-flex align-items-center justify-content-between">
            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
            <div class="img img-thumbnail mx-2">
                <img src="/download.jfif" style="width: 100%; height:auto" alt="product">
            </div>
            <div style="flex: 1;">
                <p>sapatu bagsu langsung beli lah</p>
                <p class="fw-bolder">Rp900.000</p>
            </div>
            <div>
                <i data-feather="trash-2"></i>
                <i data-feather="heart"></i>
            </div>

        </div>
    </div>
    <div class="summary shadow p-3 bg-body rounded">
        <div class="detail-summary">
            <h4 class="mb-4">Summary</h4>
            <div class="mb-2 item d-flex justify-content-between">
                <p>Total Harga</p>
                <p>Rp. {{$product->excerpt}}</p>
            </div>
            <div class="mb-2 item d-flex justify-content-between">
                <p>Total diskon</p>
                <p>Rp200.000</p>
            </div>
            <div class="mb-2 item d-flex justify-content-between">
                <p>Ongkir</p>
                <p>Rp200.000</p>
            </div>
            <hr>
        </div>
        <div class="res">
            <div class="resa mb-3  d-flex justify-content-between">
                <b class="fw-normal">Total Harga</b>
                <b>Rp200.000</b>
            </div>
            <button class="check btn btn-primary" style="width:100%">Checkout</button>
        </div>
    </div>
</section>


@endsection