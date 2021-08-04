@extends('admin.layouts.master')
@section('content')

<section class="section">
    <div class="section-header">
      <h1>Promosi</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Promosi</a></div>
        <div class="breadcrumb-item">Tambah Promosi</div>
      </div>
    </div>

      <div class="row">
        <div class="col-12 col-md-6 col-lg-12">
          <div class="card">
           <div class="card-header">
              <h4>Silahkan Masukkan Data Promosi</h4>
            </div>
            <div class="card-body">
              @if (session('message'))
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>×</span>
                  </button>
                  {{session('message')}}
                </div>
              </div>
            @endif
              <form method="POST" action="{{ route('admin.tambahpromosi')}}" class="needs-validation MultiFile-intercepted" novalidate="" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>Nama Produk</label>
                  <input type="text" name="produk" class="form-control">
                </div> 
              <div class="form-group">
                <label>Harga Sebelum Promosi</label>
                <input type="text" name="sebelum_promosi" class="form-control">
              </div>
              <div class="form-group">
                <label>Harga Sesudah Promosi</label>
                <input type="text" name="sesudah_promosi" class="form-control">
              </div>
              <div class="form-group">
                <label>Diskon Berapa Persen</label>
                <input type="text" name="diskon" class="form-control">
              </div>
              <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control">
              </div>
              <div class="form-group">
                <button class="btn btn-primary mr-1" type="submit">Submit</button>
              </div>
               </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@push('page-scripts')
    
@endpush