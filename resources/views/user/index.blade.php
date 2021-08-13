@extends('user.layouts.master')

@section('content')
<!-- Start Banner Hero -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
    <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
        <div class="row p-5">
          <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
            <img class="img-fluid" src="{{ asset('/user/img/carousel-1.jpg') }}" alt="" />
          </div>
          <div class="col-lg-6 mb-0 d-flex align-items-center">
            <div class="text-align-left align-self-center">
              <h1 class="h1 text-success">Masakan Tradisonal<br>Dengan Cita Rasa Tinggi</h1>
              <h3 class="h2">Gado-Gado</h3>
              <p>
                "Gado-gado yang terdiri dari ragam sayuran memiliki banyak kandungan vitamin dan mineral. Mulai dari vitamin K pada kacang panjang, vitamin B kompleks pada jagung, kalsium pada tempe, zinc pada tofu, zat besi pada kangkung dan vitamin E pada kacang."
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="container">
        <div class="row p-5">
          <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
            <img class="img-fluid" src="{{ asset('/user/img/carousel-2.jpg') }}" alt="" />
          </div>
          <div class="col-lg-6 mb-0 d-flex align-items-center">
            <div class="text-align-left">
              <h1 class="h1">Ayam Panggang: Daging 90%, Kulit 10%!</h1>
              <h3 class="h2">Kepiting Asam Pedas Manis</h3>
              <p>
                “Dimasak dengan resep rahasia Ayam Panggang Asam Pedes ala Dapoer Buk Ci, <Strong><a href="">  Klik Disini Untuk Pesan</a></Strong>. Kalo kamu geli-geli gimana gitu pas masak ayam, pesen aja udah. Nggak kuat aku liat kamu motong-motong ayam sendiri.”
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="container">
        <div class="row p-5">
          <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
            <img class="img-fluid" src="{{ asset('/user/img/carousel-3.jpg') }}" alt="" />
          </div>
          <div class="col-lg-6 mb-0 d-flex align-items-center">
            <div class="text-align-left">
              <h1 class="h1">Kejutan Spesial <br> Malam Minggu</h1>
              <h3 class="h2">Salad Buah</h3>
              <p>
                “Nggak malmingan karena sibuk? Kirim si dia<strong> Salad Buah </strong>dari Dapoer Buk Ci. Cuma Rp 10.000 buat tersayang kamu klepek-klepek di malem minggu dan terus mikirin kamu. Gratis Ongkir untuk wilayah cerme plus ucapan cinta <i class="fa fa-heart"></i> <br>
                Dan rasanya itu!! Gak kemanisan! Aroma wangi buahnya sampe ke hidung dan krimnya meleleh di dalem mulut, jadi salad buahnya nggak kering!"
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button"
    data-bs-slide="prev">
    <i class="fas fa-chevron-left"></i>
  </a>
  <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button"
    data-bs-slide="next">
    <i class="fas fa-chevron-right"></i>
  </a>
  <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button"
    data-bs-slide="next">
    <i class="fas fa-chevron-right"></i>
  </a>
</div>
<!-- End Banner Hero -->

<section class="info-area padding-top-80px padding-bottom-45px">
  <div class="arrow-separator"></div>
  <div class="container">
      <div class="row">
          <div class="col-lg-4 col-4 responsive-column">
              <div class="icon-box icon-layout-2 d-flex align-items-center">
                  <div class="info-icon flex-shrink-0 bg-rgb radius-round-full">
                      <img src="{{asset('user/img/browser.png')}}" class="w-50" alt="">
                  </div><!-- end info-icon-->
                  <div class="info-content">
                      <h4 class="info__title">Fast Order</h4>
                      <p class="info__desc">
                          Proses order dengan langkah mudah, cepat, dan fast respon.
                      </p>
                  </div><!-- end info-content -->
              </div><!-- end icon-box -->
          </div><!-- end col-lg-4 -->
          <div class="col-lg-4 col-4 responsive-column">
              <div class="icon-box icon-layout-2 d-flex align-items-center">
                  <div class="info-icon flex-shrink-0 bg-rgb-2 radius-round-full">
                      <img src="{{asset('user/img/layout.png')}}" class="w-50" alt="">
                  </div><!-- end info-icon-->
                  <div class="info-content">
                      <h4 class="info__title">Harga Murah</h4>
                      <p class="info__desc">
                          Dengan harga 10K anda sudah bisa mendapat makanan berbagai varian.
                      </p>
                  </div><!-- end info-content -->
              </div><!-- end icon-box -->
          </div><!-- end col-lg-4 -->
          <div class="col-lg-4 col-4 responsive-column">
              <div class="icon-box icon-layout-2 d-flex align-items-center">
                  <div class="info-icon flex-shrink-0 bg-rgb-3 radius-round-full">
                      <img src="{{asset('user/img/support.png')}}" class="w-50" alt="">
                  </div><!-- end info-icon-->
                  <div class="info-content">
                      <h4 class="info__title">24 Jam Support</h4>
                      <p class="info__desc">
                        Kami Terbuka 24 Jam untuk kebutuhan lapar anda.
                      </p>
                  </div><!-- end info-content -->
              </div><!-- end icon-box -->
          </div><!-- end col-lg-4 -->
      </div><!-- end row -->
  </div><!-- end container -->
</section>

<section class="discount-area mt-auto">
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
                          <a href="{{route('user.promo')}}" class="theme-btn border-0">Pesan Sekarang <i class="la la-arrow-right ml-1"></i></a>
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

<section class="destination-area section--padding">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="section-heading text-center">
                  <h2 class="sec__title">Makanan Terbaru</h2>
              </div><!-- end section-heading -->
          </div><!-- end col-lg-12 -->
      </div><!-- end row -->
      <div class="row padding-top-60px">
        @foreach ($produks as $no => $data)
        <div class="col-lg-4 responsive-column">
          <div class="card-item gallery-card">
              <div class="card-img">
                <a href="">
                  <img src="{{ url('/gambar/'.$data->gambar) }}" alt="cruise-img">
                </a>
                  <div class="card-body">
                    <h3 class="card-subtitle">{{ $data->nama_produk }} - {{ $data->varian }}</h3>
                    <p class="card-meta">Rp{{ $data->harga }}</p>
                    <div class="btn-box padding-top-30px">
                      <button class="theme-btn border-0" data-toggle="modal" data-target="#modalPesan{{ $data->id }}">Pesan</button>
                  </div>
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
        <form action="send.php" method="post" target="_blank">
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
            value="{{ $data->nama_produk}} - {{ $data->varian}}" disabled>
        </div>
        <div class="form-group">
          <label for="">Harga</label>
          <input type="text" class="form-control"
          value="Rp{{ $data->harga}}" disabled>
      </div>
      <div class="form-group">
          <label for="">Catatan</label>
          <textarea class="form-control" name="catatan" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <input type="hidden"  name="noWA" value="6285745974148">
      <input type="hidden"  name="produk" value="{{ $data->nama_produk}} - {{ $data->varian}}">
      <input type="hidden"  name="harga" value="{{ $data->harga}}">
        <button type="submit" name="submit" class="theme-btn border-0">Pesan Sekarang</button>
        </form>
        <!--END FORM Pesan-->
        </div>
        </div>
        </div>
        </div>
        <!-- End Modal Pesan-->
        @endforeach
         
      </div><!-- end row -->
  </div><!-- end container -->
</section>

<section class="gallery-area section--padding">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
            <div class="section-heading text-center">
              <h2 class="sec__title">Pilih Menu Makanan</h2>
          </div><!-- end section-heading -->
          <form action="" method="get" class="modal-content modal-body border-0 p-0">
            <div class="input-group mb-2 mt-2">
              <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Mau pesan apa?" />
              <button type="submit" class="input-group-text bg-danger text-light">
                <i class="fa fa-fw fa-search text-white"></i>
              </button>
            </div>
          </form>
              
          </div><!-- end col-lg-12 -->
      </div><!-- end row -->
      <div class="row padding-top-30px">
          <div class="col-lg-6">
              <div class="gallery-card">
                  <a class="d-block" href="{{route('user.kategori')}}">
                      <img src="{{asset('user/img/seblak.png')}}">
                  </a>
                  <div class="card-footer">
                    <h3 class="text-center">Seblak</h3>
                </div>
              </div><!-- end card-item -->
          </div><!-- end col-lg-4 -->
          <div class="col-lg-6">
              <div class="gallery-card">
                  <a class="d-block" href="{{route('user.kategori')}}">
                      <img src="{{asset('user/img/gado-gado.png')}}">
                  </a>
                  <div class="card-footer">
                    <h3 class="text-center">Gado - Gado</h3>
                </div>
              </div><!-- end card-item -->
          </div><!-- end col-lg-4 -->
          <div class="col-lg-3">
              <div class="gallery-card">
                  <a class="d-block" href="{{route('user.kategori')}}" >
                      <img src="{{asset('user/img/ikan-bakar.png')}}">
                  </a>
                  <div class="card-footer">
                    <h3 class="text-center">Ikan Bakar</h3>
                </div>
              </div><!-- end card-item -->
          </div><!-- end col-lg-4 -->
          <div class="col-lg-3">
              <div class="gallery-card">
                  <a class="d-block" href="{{route('user.kategori')}}">
                      <img src="{{asset('user/img/ayam-panggang.png')}}">
                  </a>
                  <div class="card-footer">
                    <h3 class="text-center">Ayam Panggang</h3>
                </div>
              </div><!-- end card-item -->
          </div><!-- end col-lg-4 -->
          <div class="col-lg-3">
              <div class="gallery-card">
                  <a class="d-block" href="{{route('user.kategori')}}">
                      <img src="{{asset('user/img/cumi-baby.png')}}">
                  </a>
                  <div class="card-footer">
                    <h3 class="text-center">Baby Cumi</h3>
                </div>
              </div><!-- end card-item -->
          </div><!-- end col-lg-4 -->
          <div class="col-lg-3">
              <div class="gallery-card">
                  <a class="d-block" href="{{route('user.kategori')}}">
                      <img src="{{asset('user/img/salad-buah.png')}}">
                  </a>
                  <div class="card-footer">
                    <h3 class="text-center">Selad Buah</h3>
                </div>
              </div><!-- end card-item -->
          </div><!-- end col-lg-4 -->
      </div><!-- end row -->
  </div><!-- end container -->
</section>

<section class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-7">
              <div class="section-heading">
                  <h2 class="sec__title font-size-30 text-white">Subscribe Untuk Melihat Penawaran Terbaik</h2>
              </div><!-- end section-heading -->
          </div><!-- end col-lg-7 -->
          <div class="col-lg-5">
              <div class="subscriber-box">
                  <div class="contact-form-action">
                      <form action="#">
                          <div class="input-box">
                              <label class="label-text text-white">Masukkan Alamat Email</label>
                              <div class="form-group mb-0">
                                  <span class="la la-envelope form-icon"></span>
                                  <input class="form-control" type="email" name="email" placeholder="Email address">
                                  <button class="theme-btn theme-btn-small submit-btn" type="submit">Subscribe</button>
                                  <span class="font-size-14 pt-1 text-white-50"><i class="la la-lock mr-1"></i>Jangan khawatir, informasimu aman bersama kami.</span>
                              </div>
                          </div>
                      </form>
                  </div>
              </div><!-- end section-heading -->
          </div><!-- end col-lg-5 -->
      </div><!-- end row -->
  </div><!-- end container -->
</section>

@endsection