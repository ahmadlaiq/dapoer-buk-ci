@extends('user.layouts.master')

@section('content')
<section class="gallery-area mt-3">
    <div class="container">
        <div class="row padding-top-30px">
            <div class="col-lg-6">
                <div class="gallery-card">
                    <a class="d-block" href="https://google.com">
                        <img src="{{asset('user/img/seblak.png')}}">
                    </a>
                    <div class="card-footer">
                      <h3 class="text-center">Seblak</h3>
                  </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-6">
                <div class="gallery-card">
                    <a class="d-block" href="images/img29.jpg">
                        <img src="{{asset('user/img/gado-gado.png')}}">
                    </a>
                    <div class="card-footer">
                      <h3 class="text-center">Gado - Gado</h3>
                  </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-6">
                <div class="gallery-card">
                    <a class="d-block" href="images/img30.jpg" >
                        <img src="{{asset('user/img/ikan-bakar.png')}}">
                    </a>
                    <div class="card-footer">
                      <h3 class="text-center">Ikan Bakar</h3>
                  </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-6">
                <div class="gallery-card">
                    <a class="d-block" href="images/img31.jpg">
                        <img src="{{asset('user/img/ayam-panggang.png')}}">
                    </a>
                    <div class="card-footer">
                      <h3 class="text-center">Ayam Panggang</h3>
                  </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-6">
                <div class="gallery-card">
                    <a class="d-block" href="images/img32.jpg">
                        <img src="{{asset('user/img/cumi-baby.png')}}">
                    </a>
                    <div class="card-footer">
                      <h3 class="text-center">Baby Cumi</h3>
                  </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-6">
                <div class="gallery-card">
                    <a class="d-block" href="images/img33.jpg">
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
@endsection