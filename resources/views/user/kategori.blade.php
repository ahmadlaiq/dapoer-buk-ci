@extends('user.layouts.master')

@section('content')
<!-- ================================
    START KATEGORI SEBLAK
================================= -->
<section class="trending-area position-relative section-bg section-padding ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title">Seblak</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-12">
                <div class="trending-carousel carousel-action">
                    @foreach ($filterData as $no => $data)
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
                    @endforeach
                    
                </div><!-- end car-carousel -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path></svg>
</section><!-- end trending-area -->
<!-- ================================
    END KATEGORI SEBLAK
================================= -->

<!-- ================================
    START KATEGORI GADO GADO
================================= -->
<section class="trending-area position-relative section-bg section-padding ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title">Gado Gado</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-12">
                <div class="trending-carousel carousel-action">
                    @foreach ($filterData2 as $no => $data)
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
                    @endforeach
                    
                </div><!-- end car-carousel -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path></svg>
</section><!-- end trending-area -->
<!-- ================================
    END KATEGORI GADO GADO
================================= -->

<!-- ================================
    START KATEGORI SALAD
================================= -->
<section class="trending-area position-relative section-bg section-padding ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title">Salad</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-12">
                <div class="trending-carousel carousel-action">
                    @foreach ($filterData3 as $no => $data)
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
                    @endforeach
                    
                </div><!-- end car-carousel -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path></svg>
</section><!-- end trending-area -->
<!-- ================================
    END KATEGORI SALAD
================================= -->

<!-- ================================
    START KATEGORI SALAD
================================= -->
<section class="trending-area position-relative section-bg section-padding ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title">Ikan Bakar</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-12">
                <div class="trending-carousel carousel-action">
                    @foreach ($filterData4 as $no => $data)
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
                    @endforeach
                    
                </div><!-- end car-carousel -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path></svg>
</section><!-- end trending-area -->
<!-- ================================
    END KATEGORI SALAD
================================= -->

<!-- ================================
    START KATEGORI SALAD
================================= -->
<section class="trending-area position-relative section-bg section-padding ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title">Baby Cumi</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-12">
                <div class="trending-carousel carousel-action">
                    @foreach ($filterData5 as $no => $data)
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
                    @endforeach
                    
                </div><!-- end car-carousel -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path></svg>
</section><!-- end trending-area -->
<!-- ================================
    END KATEGORI SALAD
================================= -->

<!-- ================================
    START KATEGORI SALAD
================================= -->
<section class="trending-area position-relative section-bg section-padding ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title">Kepiting Asam Manis</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-12">
                <div class="trending-carousel carousel-action">
                    @foreach ($filterData6 as $no => $data)
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
                    @endforeach
                    
                </div><!-- end car-carousel -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path></svg>
</section><!-- end trending-area -->
<!-- ================================
    END KATEGORI SALAD
================================= -->

@endsection