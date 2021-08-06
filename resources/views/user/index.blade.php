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
              <h1 class="h1">Ayam Panggang Asli: Daging 90%, Kulit 10%!</h1>
              <h3 class="h2">Ayam Panggang Asam Pedas Manis</h3>
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

<!-- Start Featured Product -->
<section>
  <div class="container py-5">
    <div class="row text-center py-3">
      {{-- <div class="col-lg-6 m-auto">
        <h1 class="h1">Featured Product</h1>
        <p>
          Reprehenderit in voluptate velit esse cillum dolore eu fugiat
          nulla pariatur. Excepteur sint occaecat cupidatat non proident.
        </p>
      </div> --}}
    </div>
    <div class="row">
      <div class="col-12 col-md-3 mb-4">
        <div class="card h-80">
          <a href="shop-single.html">
            <img src="{{ asset('/user/img/seblak.jpg') }}" class="card-img-top" alt="..." />
          </a>
          <div class="card-body">
           <h5 class="card-subtitle">Seblak - Pedas Level 1</h5>
           <p class="card-meta">Rp12.000</p>
            
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3 mb-4">
        <div class="card h-80">
          <a href="shop-single.html">
            <img src="{{ asset('/user/img/seblak.jpg') }}" class="card-img-top" alt="..." />
          </a>
          <div class="card-body">
            <h5 class="card-subtitle">Seblak - Pedas Level 2</h5>
            <p class="card-meta">Rp12.000</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3 mb-4">
        <div class="card h-80">
          <a href="shop-single.html">
            <img src="{{ asset('/user/img/seblak.jpg') }}" class="card-img-top" alt="..." />
          </a>
          <div class="card-body">
            <h5 class="card-subtitle">Seblak - Pedas Level 3</h5>
            <p class="card-meta">Rp12.000</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3 mb-4">
        <div class="card h-80">
          <a href="shop-single.html">
            <img src="{{ asset('/user/img/seblak.jpg') }}" class="card-img-top" alt="..." />
          </a>
          <div class="card-body">
            <h5 class="card-subtitle">Seblak - Pedas Level 4</h5>
            <p class="card-meta">Rp12.000</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Featured Product -->

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

<section class="destination-area section--padding">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="section-heading text-center">
                  <h2 class="sec__title">Makanan Terlaris</h2>
              </div><!-- end section-heading -->
          </div><!-- end col-lg-12 -->
      </div><!-- end row -->
      <div class="row padding-top-60px">
          <div class="col-lg-4 responsive-column">
              <div class="card-item cruise-card">
                  <div class="card-img">
                    <a href="google.com">
                      <img src="{{ asset('user/img/cruise-img.jpg') }}" alt="cruise-img">
                    </a>
                      <div class="card-body">
                          <h3 class="card-title mb-0"><a href="cruise-details.html"><i class="la la-star"></i> Terlaris</a></h3>
                      </div>
                  </div>
                  <div class="card-footer">
                      <a href=""><h3 class="card-subtitle">Get Ready for Some Fun in the Sun</h3></a>
                      <p class="card-meta">Rp12.000</p>
                      <div class="btn-box padding-top-30px">
                        <a href="https://wa.me/6285745974148?text=Halo%20Admin!%0ASaya%20pesan:%20*Seblak-Pedas%20Level%201*%0AHarga:%20*Rp12000*" class="theme-btn border-0">Pesan</a>
                    </div>
                  </div>
              </div><!-- end card-item -->
          </div><!-- end col-lg-6 -->
          <div class="col-lg-4 responsive-column">
              <div class="card-item cruise-card">
                  <div class="card-img">
                      <img src="{{asset('user/img/cruise-img2.jpg')}}" alt="cruise-img">
                      <div class="card-body">
                        <h3 class="card-title mb-0"><a href="cruise-details.html"><i class="la la-star"></i> Terlaris</a></h3>
                      </div>
                  </div>
                  <div class="card-footer">
                      <h3 class="card-subtitle">Explore the Culture and Beauty of Europe</h3>
                      <p class="card-meta">Rp12.000</p>
                      <div class="btn-box padding-top-30px">
                      <a href="become-local-expert.html" class="theme-btn border-0">Pesan</a>
                  </div>
                  </div>
              </div><!-- end card-item -->
          </div><!-- end col-lg-6 -->
          <div class="col-lg-4 responsive-column">
              <div class="card-item cruise-card">
                  <div class="card-img">
                      <img src="{{asset('user/img/cruise-img3.jpg')}}" alt="cruise-img">
                      <div class="card-body">
                        <h3 class="card-title mb-0"><a href="cruise-details.html"><i class="la la-star"></i> Terlaris</a></h3>
                      </div>
                  </div>
                  <div class="card-footer">
                      <h3 class="card-subtitle">Family Fun Time</h3>
                      <p class="card-meta">Rp12.000</p>
                      <div class="btn-box padding-top-30px">
                        <a href="become-local-expert.html" class="theme-btn border-0">Pesan</a>
                    </div>
                  </div>
              </div><!-- end card-item -->
          </div><!-- end col-lg-4 -->
          <div class="col-lg-4 responsive-column">
              <div class="card-item cruise-card">
                  <div class="card-img">
                      <img src="{{asset('user/img/cruise-img4.jpg')}}" alt="cruise-img">
                      <div class="card-body">
                        <h3 class="card-title mb-0"><a href="cruise-details.html"><i class="la la-star"></i> Terlaris</a></h3>
                      </div>
                  </div>
                  <div class="card-footer">
                      <h3 class="card-subtitle">Honeymoon Cruises</h3>
                      <p class="card-meta">Rp12.000</p>
                      <div class="btn-box padding-top-30px">
                        <a href="become-local-expert.html" class="theme-btn border-0">Pesan</a>
                    </div>
                  </div>
              </div><!-- end card-item -->
          </div><!-- end col-lg-4 -->
          <div class="col-lg-4 responsive-column">
              <div class="card-item cruise-card">
                  <div class="card-img">
                      <img src="{{asset('user/img/cruise-img5.jpg')}}" alt="cruise-img">
                      <div class="card-body">
                        <h3 class="card-title mb-0"><a href="cruise-details.html"><i class="la la-star"></i> Terlaris</a></h3>
                      </div>
                  </div>
                  <div class="card-footer">
                      <h3 class="card-subtitle">Last-Minute Cruise Sale</h3>
                      <p class="card-meta">Rp12.000</p>
                      <div class="btn-box padding-top-30px">
                        <a href="become-local-expert.html" class="theme-btn border-0">Pesan</a>
                    </div>
                  </div>
              </div><!-- end card-item -->
          </div><!-- end col-lg-4 -->
          <div class="col-lg-4 responsive-column">
            <div class="card-item cruise-card">
                <div class="card-img">
                    <img src="{{asset('user/img/cruise-img5.jpg')}}" alt="cruise-img">
                    <div class="card-body">
                      <h3 class="card-title mb-0"><a href="cruise-details.html"><i class="la la-star"></i> Terlaris</a></h3>
                    </div>
                </div>
                <div class="card-footer">
                    <h3 class="card-subtitle">Last-Minute Cruise Sale</h3>
                    <p class="card-meta">Rp12.000</p>
                    <div class="btn-box padding-top-30px">
                      <a href="become-local-expert.html" class="theme-btn border-0">Pesan</a>
                  </div>
                </div>
            </div><!-- end card-item -->
        </div><!-- end col-lg-4 -->
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
                  <a class="d-block" href="https://google.com">
                      <img src="user/img/seblak.png">
                  </a>
                  <div class="card-footer">
                    <h3 class="text-center">Seblak</h3>
                </div>
              </div><!-- end card-item -->
          </div><!-- end col-lg-4 -->
          <div class="col-lg-6">
              <div class="gallery-card">
                  <a class="d-block" href="images/img29.jpg">
                      <img src="user/img/gado-gado.png">
                  </a>
                  <div class="card-footer">
                    <h3 class="text-center">Gado - Gado</h3>
                </div>
              </div><!-- end card-item -->
          </div><!-- end col-lg-4 -->
          <div class="col-lg-3">
              <div class="gallery-card">
                  <a class="d-block" href="images/img30.jpg" >
                      <img src="user/img/ikan-bakar.png">
                  </a>
                  <div class="card-footer">
                    <h3 class="text-center">Ikan Bakar</h3>
                </div>
              </div><!-- end card-item -->
          </div><!-- end col-lg-4 -->
          <div class="col-lg-3">
              <div class="gallery-card">
                  <a class="d-block" href="images/img31.jpg">
                      <img src="user/img/ayam-panggang.png">
                  </a>
                  <div class="card-footer">
                    <h3 class="text-center">Ayam Panggang</h3>
                </div>
              </div><!-- end card-item -->
          </div><!-- end col-lg-4 -->
          <div class="col-lg-3">
              <div class="gallery-card">
                  <a class="d-block" href="images/img32.jpg">
                      <img src="user/img/cumi-baby.png">
                  </a>
                  <div class="card-footer">
                    <h3 class="text-center">Baby Cumi</h3>
                </div>
              </div><!-- end card-item -->
          </div><!-- end col-lg-4 -->
          <div class="col-lg-3">
              <div class="gallery-card">
                  <a class="d-block" href="images/img33.jpg">
                      <img src="user/img/salad-buah.png">
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