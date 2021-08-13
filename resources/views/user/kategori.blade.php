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
            @foreach ($filterData as $no => $data)
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
            {{ $filterData->links() }}
        </div><!-- end row -->
    </div><!-- end container -->
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
            @foreach ($filterData2 as $no => $data)
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
            {{ $filterData2->links() }}
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
            @foreach ($filterData3 as $no => $data)
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
            {{ $filterData3->links() }}
        </div><!-- end row -->
    </div><!-- end container -->
    
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
            @foreach ($filterData4 as $no => $data)
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
            {{ $filterData4->links() }}
        </div><!-- end row -->
    </div><!-- end container -->
    
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
            @foreach ($filterData5 as $no => $data)
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
            {{ $filterData5->links() }}
        </div><!-- end row -->
    </div><!-- end container -->

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
            @foreach ($filterData6 as $no => $data)
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
            {{ $filterData6->links() }}
        </div><!-- end row -->
    </div><!-- end container -->
    <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path></svg>
</section><!-- end trending-area -->
<!-- ================================
    END KATEGORI SALAD
================================= -->

@endsection