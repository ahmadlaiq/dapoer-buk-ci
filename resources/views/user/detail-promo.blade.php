@extends('user.layouts.master')

@section('content')
<section class="bg-light">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid" src="{{asset('user/img/seblak.jpg')}}" alt="Card image cap" id="product-detail">
                </div>
            </div>
            <!-- col end -->
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="h2">Seblak - Pedas Level 1</h1>
                        <p class="h3 py-2"> <s>Rp15.000</s></p>
                        <ul class="list-inline">
                            <li class="list-inline-item py-2">
                                <h3>Harga Promo: <span class=" text-danger">Rp12.000</span></h3>
                            </li>
                        </ul>
                        <h4 class="text-bold">Dekripsi:</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.</p>

                        <form action="" method="GET">
                            <input type="hidden" name="product-title" value="Activewear">
                            <div class="row">
                                <div class="col-auto">
                                    <ul class="list-inline pb-3">
                                        <li class="list-inline-item text-right">
                                            Jumlah
                                            <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                        </li>
                                        <li class="list-inline-item"><span class="btn btn-primary" id="btn-minus">-</span></li>
                                        <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                        <li class="list-inline-item"><span class="btn btn-primary" id="btn-plus">+</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col d-grid">
                                    <button type="submit" class="btn btn-primary" name="submit" value="buy">Pesan</button>
                                </div>
                                <div class="col d-grid">
                                    <button type="submit" class="btn btn-primary" name="submit" value="addtocard"><i class="fa fa-fw fa-cart-arrow-down mr-1"></i> Tambah ke Kerangjang</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection