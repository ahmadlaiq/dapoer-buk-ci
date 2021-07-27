@extends('admin.layouts.master')
@section('content')

<section class="section">
    <div class="section-header">
      <h1>Metode Pembayaran</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#"> Metode Pembayaran</a></div>
        <div class="breadcrumb-item">Tambah Metode Pembayaran</div>
      </div>
    </div>


      <div class="row">
        <div class="col-12 col-md-6 col-lg-12">
          <div class="card">
           <div class="card-header">
              <h4>Silahkan Masukkan Data Metode Pembayaran</h4>
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
              <form method="POST" action="{{ route('admin.tambahpembayaran')}}" class="needs-validation MultiFile-intercepted" novalidate="" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label>Nama Akun</label>
                <input type="text" name="nama_akun" class="form-control">
              </div>
              <div class="form-group">
                <label>Nomor Akun</label>
                <input type="text" name="nomor_akun" class="form-control">
              </div>
              <div class="form-group">
                <label>Gambar (Logo)</label>
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