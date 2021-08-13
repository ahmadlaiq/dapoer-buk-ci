@extends('user.layouts.master')

@section('content')
<section class="discount-area mt-5 mb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="discount-box">
                    <div class="discount-img">
                        <img src="{{asset('user/img/banner-diskon.png')}}" alt="discount img">
                    </div><!-- end discount-img -->
                    <div class="discount-content">
                        <div class="section-heading">
                            <p class="sec__desc text-white">Hot deal, save 50%</p>
                            <h2 class="sec__title mb-0 line-height-50 text-white">Discount 50% untuk setiap <br> Hari Jum'at</h2>
                        </div><!-- end section-heading -->
                        <div class="btn-box pt-4">
                            <a href="#" class="theme-btn border-0">Pesan Sekarang <i class="la la-arrow-right ml-1"></i></a>
                        </div>
                    </div><!-- end discount-content -->
                    <div class="company-logo">
                        <img src="{{asset('user/img/logo.svg')}}" width="" height="30" alt="">
                        <p class="text-white font-size-14 text-right">*Terms applied</p>
                    </div><!-- end company-logo -->
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
  </section>

  <section class="info-area padding-top-100px padding-bottom-70px">
    <div class="container">
        <div class="row">
            @foreach ($promoses as $no => $data)
            <div class="col-lg-4 responsive-column">
                <div class="card-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="hello word">
                    <div class="card-img">
                        <img src="{{ url('/gambar/'.$data->gambar) }}" alt="about-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mb-2">{{ $data->produk }}</h3>
                        <p class="card-meta"><s>Rp{{ $data->sebelum_promosi }}</s></p>
                        <p class="card-meta text-danger">Rp{{ $data->sesudah_promosi }}</p>
                        <div class="card-rating">
                            <span class="badge text-white">- {{ $data->diskon }}%</span>
                        </div>
                        <div class="btn-box padding-top-30px">
                            <button class="theme-btn border-0" data-toggle="modal" data-target="#modalPesan{{ $data->id }}">Pesan</button>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <!-- Modal Pesan-->
      <div class="modal fade" id="modalPesan{{ $data->id }}" tabindex="-1" aria-labelledby="modalPesan" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Silahkan Masukkan Data Diri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <!--FORM UPDATE VARIAN-->
        <form action="/send.php" method="post" target="_blank">
        <div class="form-group">
          <label for="">Nama</label>
          <input type="text" class="form-control" name="nama"
          value="">
        </div>
        <div class="form-group">
          <label for="">Alamat</label>
          <input type="text" class="form-control" name="alamat"
          value="">
        </div>
        <div class="form-group">
            <label for="">Pesanan</label>
            <input type="text" class="form-control"
            value="{{ $data->produk }}" disabled>
        </div>
        <div class="form-group">
          <label for="">Harga</label>
          <input type="text" class="form-control"
          value="Rp{{ $data->sesudah_promosi}}" disabled>
      </div>
      <div class="form-group">
          <label for="">Catatan</label>
          <textarea class="form-control" name="catatan" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <input type="hidden"  name="noWA" value="6285745974148">
      <input type="hidden"  name="produk" value="{{ $data->produk }}">
      <input type="hidden"  name="harga" value="{{ $data->sesudah_promosi}}">
        <button type="submit" name="submit" class="theme-btn border-0">Pesan Sekarang</button>
        </form>
        <!--END FORM Pesan-->
        </div>
        </div>
        </div>
        </div>
        <!-- End Modal Pesan-->
            @endforeach
            {{ $promoses->links() }}
            {{-- <div class="col-lg-4 responsive-column">
                <div class="card-item ">
                    <div class="card-img">
                        <img src="{{ asset('/user/img/seblak.jpg') }}" alt="about-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mb-2">Seblak - Pedas Level 2</h3>
                        <p class="card-meta"><s>Rp12.000</s></p>
                        <p class="card-meta text-danger">Rp10.000</p>
                        <div class="card-rating">
                            <span class="badge text-white">- 5%</span>
                        </div>
                        <div class="btn-box padding-top-30px">
                            <a href="https://wa.me/6285745974148?text=Halo%20Admin%0ANama%20saya%20nadine" class="theme-btn border-0">Pesan</a>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item ">
                    <div class="card-img">
                        <img src="{{ asset('/user/img/seblak.jpg') }}" alt="about-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mb-2">Seblak - Pedas Level 3</h3>
                        <p class="card-meta"><s>Rp12.000</s></p>
                        <p class="card-meta text-danger">Rp10.000</p>
                        <div class="card-rating">
                            <span class="badge text-white">- 15%</span>
                        </div>
                        <div class="btn-box padding-top-30px">
                            <a href="https://wa.me/6285745974148?text=Halo%20Admin%0ANama%20saya%20nadine" class="theme-btn border-0">Pesan</a>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 --> --}}
        </div><!-- end row -->
    </div><!-- end container -->
</section>


@endsection