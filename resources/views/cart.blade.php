@extends('layout.main')

@section('container')
<section class="container d-flex mt-5 mb-5">
    <div class="item-cart">
        <div class="rs shadow p-3 bg-body rounded ">
            <input class="form-check-input me-2" type="checkbox">
            <label class="form-check-label" for="flexCheckDefault">
                <b>Select All</b>
            </label>
        </div>
        @foreach($cartItems as $item)
        <div class="rs mt-3 shadow p-3 bg-body rounded d-flex align-items-center justify-content-between">
            <input class="form-check-input me-2" type="checkbox" name="select" id="select{{$item->id}}" value="{{$item->price}}">
            <div class="img img-thumbnail mx-2">
                <img src="/download.jfif" style="width: 100%; height:auto" alt="product">
            </div>
            <div style="flex: 1;">
                <p>{{$item->name}}</p>
                <p class="fw-bolder">Rp{{$item->price}}</p>
            </div>
            <div>
                <i data-feather="trash-2"></i>
                <i data-feather="heart"></i>
            </div>

        </div>
        @endforeach
    </div>
    <div class="summary shadow p-3 bg-body rounded">
        <div class="detail-summary">
            <h4 class="mb-4">Summary</h4>
            <div class="mb-2 item d-flex justify-content-between">
                <p>Total Harga (<span id="barang">0</span> barang)</p>
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
                <b class="fw-normal">Total Harga</b>
                <b id="harga">Rp0</b>
            </div>
            <button class="check btn btn-primary" style="width:100%">Checkout</button>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        let obj = [];
        $('input[type=checkbox][name=select]').change(function() {
            const id = `${this.id}`
            if (this.checked) {
                obj.push(`${this.value}`);
                console.log(obj)

            } else {
                delete obj[id];
            }
            var total = 0;
            for (var i = 0; i < obj.length; i++) {
                total += obj[i] << 0;
            }
            $("#harga").text("Rp" + total);
            $("b#harga").text("Rp" + total);
            $("#barang").text(obj.length);
        });
    });
</script>
@endsection