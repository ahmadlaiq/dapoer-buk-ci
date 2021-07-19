@extends('user.layouts.master')

@section('content')
<!-- Start Banner Hero -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
        <div class="row p-5">
          <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
            <img class="img-fluid" src="{{ asset('/user/img/banner_img_01.jpg') }}" alt="" />
          </div>
          <div class="col-lg-6 mb-0 d-flex align-items-center">
            <div class="text-align-left align-self-center">
              <h1 class="h1 text-success"><b>Zay</b> eCommerce</h1>
              <h3 class="h2">Tiny and Perfect eCommerce Template</h3>
              <p>
                Zay Shop is an eCommerce HTML5 CSS template with latest
                version of Bootstrap 5 (beta 1). This template is 100% free
                provided by
                <a rel="sponsored" class="text-success" href="https://templatemo.com" target="_blank">TemplateMo</a>
                website. Image credits go to
                <a rel="sponsored" class="text-success" href="https://stories.freepik.com/" target="_blank">Freepik
                  Stories</a>,
                <a rel="sponsored" class="text-success" href="https://unsplash.com/" target="_blank">Unsplash</a>
                and
                <a rel="sponsored" class="text-success" href="https://icons8.com/" target="_blank">Icons 8</a>.
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
            <img class="img-fluid" src="{{ asset('/user/img/banner_img_02.jpg') }}" alt="" />
          </div>
          <div class="col-lg-6 mb-0 d-flex align-items-center">
            <div class="text-align-left">
              <h1 class="h1">Proident occaecat</h1>
              <h3 class="h2">Aliquip ex ea commodo consequat</h3>
              <p>
                You are permitted to use this Zay CSS template for your
                commercial websites. You are
                <strong>not permitted</strong> to re-distribute the template
                ZIP file in any kind of template collection websites.
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
</div>
<!-- End Banner Hero -->

<!-- Start Featured Product -->
<section>
  <div class="container py-5">
    <div class="row text-center py-3">
      <div class="col-lg-6 m-auto">
        <h1 class="h1">Featured Product</h1>
        <p>
          Reprehenderit in voluptate velit esse cillum dolore eu fugiat
          nulla pariatur. Excepteur sint occaecat cupidatat non proident.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-4 mb-4">
        <div class="card h-80">
          <a href="shop-single.html">
            <img src="{{ asset('/user/img/feature_prod_01.jpg') }}" class="card-img-top" alt="..." />
          </a>
          <div class="card-body">
            <ul class="list-unstyled d-flex justify-content-between">
              <li class="text-right">Rp12.000,00</li>
            </ul>
            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Seblak</a>
            <p class="card-text">Seblak nyonyor</p>
            <p>
              <a href="shop.html" class="btn btn-success">Pesan Sekarang</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 mb-4">
        <div class="card h-80">
          <a href="shop-single.html">
            <img src="{{ asset('/user/img/feature_prod_01.jpg') }}" class="card-img-top" alt="..." />
          </a>
          <div class="card-body">
            <ul class="list-unstyled d-flex justify-content-between">
              <li class="text-right">Rp12.000,00</li>
            </ul>
            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Salad</a>
            <p class="card-text">Enak pokoke, ndang tuku</p>
            <p>
              <a href="shop.html" class="btn btn-success">Pesan Sekarang</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 mb-4">
        <div class="card h-80">
          <a href="shop-single.html">
            <img src="{{ asset('/user/img/feature_prod_01.jpg') }}" class="card-img-top" alt="..." />
          </a>
          <div class="card-body">
            <ul class="list-unstyled d-flex justify-content-between">
              <li class="text-right">Rp12.000,00</li>
            </ul>
            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Ayam Panggang</a>
            <p class="card-text">Cobaken lak enak, Asli</p>
            <p>
              <a href="shop.html" class="btn btn-success">Pesan Sekarang</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Featured Product -->

<!-- About Us Section -->
<section class="bg-success py-5" id="about">
  <div class="container">
    <div class="row align-items-center py-5">
      <div class="col-md-8 text-white">
        <h1>About Us</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
          enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>
      <div class="col-md-4">
        <img src="{{ asset('user/img/about-hero.svg') }}" alt="About Hero" />
      </div>
    </div>
  </div>
</section>
<!-- Close Banner -->

<!-- Start Section -->
<section class="container py-5">
  <div class="row text-center pt-5 pb-3">
    <div class="col-lg-6 m-auto">
      <h1 class="h1">Our Services</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
        eiusmod Lorem ipsum dolor sit amet.
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-lg-3 pb-5">
      <div class="h-100 py-5 services-icon-wap shadow">
        <div class="h1 text-success text-center">
          <i class="fa fa-truck fa-lg"></i>
        </div>
        <h2 class="h5 mt-4 text-center">Delivery Services</h2>
      </div>
    </div>

    <div class="col-md-6 col-lg-3 pb-5">
      <div class="h-100 py-5 services-icon-wap shadow">
        <div class="h1 text-success text-center">
          <i class="fas fa-exchange-alt"></i>
        </div>
        <h2 class="h5 mt-4 text-center">Shipping & Return</h2>
      </div>
    </div>

    <div class="col-md-6 col-lg-3 pb-5">
      <div class="h-100 py-5 services-icon-wap shadow">
        <div class="h1 text-success text-center">
          <i class="fa fa-percent"></i>
        </div>
        <h2 class="h5 mt-4 text-center">Promotion</h2>
      </div>
    </div>

    <div class="col-md-6 col-lg-3 pb-5">
      <div class="h-100 py-5 services-icon-wap shadow">
        <div class="h1 text-success text-center">
          <i class="fa fa-user"></i>
        </div>
        <h2 class="h5 mt-4 text-center">24 Hours Service</h2>
      </div>
    </div>
  </div>
</section>
<!-- About Us Section end -->
@endsection