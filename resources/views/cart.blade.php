@extends('layout.main')

@section('container')
<section class="container d-flex mt-5 mb-5">
    <div class="position-fixed start-50 translate-middle-x p-3" style="top:45px;z-index: 9999">
        <div id="liveToast" class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="2500">
            <div class="d-flex">
                <div class="toast-body">
                    Item Has been Deleted from your cart
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <div class="item-cart">
        <div class="rs shadow p-3 bg-body rounded ">
            <input class="form-check-input me-2" type="checkbox" name="selectAll">
            <label class="form-check-label" for="flexCheckDefault">
                <b>Select All</b>
            </label>
        </div>
        @foreach($cartItems as $item)
        <div class="rs mt-3 shadow p-3 bg-body rounded d-flex align-items-center justify-content-between">
            <input class="form-check-input me-2" type="checkbox" name="select" id="{{$item->id}}" value="{{$item->price}}">
            <div class="img img-thumbnail mx-2">
                <img src="/download.jfif" style="width: 100%; height:auto" alt="product">
            </div>
            <div style="flex: 1;">
                <p>{{$item->name}}</p>
                <p class="fw-bolder">Rp{{$item->price}}</p>
            </div>
            <div>
                <form action="{{ route('cart.remove') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$item->id}}" name="id">
                    <button style="border: none; background: none;"><i data-feather="trash-2" style="color:red;"></i></button>
                </form>
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
                <button id="check" class=" btn btn-primary" style="width:100%" disabled>Checkout</button>
            </form>
        </div>
    </div>
</section>
@endsection

@section('script')
@if(session()->has('success'))
<script>
    var toastLiveExample = document.getElementById('liveToast')
    var toast = new bootstrap.Toast(toastLiveExample)
    toast.show()
</script>
@endif
<script>
    $(document).ready(function() {
        let obj = [];
        $('input[type=checkbox][name=select]').change(function() {
            if (this.checked) {
                obj.push([`${this.id}`, `${this.value}`]);

            } else {
                for (let index = 0; index < obj.length; index++) {
                    if (obj[index][0] === `${this.id}`) {
                        obj.splice(index, 1);
                        break;
                    }
                }
            }
            console.log(obj)
            var total = 0;
            for (var i = 0; i < obj.length; i++) {
                total += obj[i][1] << 0;
            }
            if (obj.length > 0) {
                $("#check").prop('disabled', false);
            } else {
                $("#check").prop('disabled', true);
            }
            $("#harga").text("Rp" + total);
            $("b#harga").text("Rp" + total);
            $("#jml").text(obj.length);
            $("#pass").val(JSON.stringify(obj));
        });
        $('input[type=checkbox][name=selectAll]').change(function() {
            var app = <?php echo json_encode($cartItems); ?>;
            let pa = []
            if (this.checked) {
                pa.push([`${app[1].id}`, `a`]);
                console.log(pa);
            } else {

            }
        });
    });
</script>
@endsection