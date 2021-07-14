@extends('admin.layouts.master')
@section('content')

<section class="section">
    <div class="section-header">
      <h1>Metode Pembayaran</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Metode Pembayaran</a></div>
        <div class="breadcrumb-item">Tambah Jenis Akun</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Forms</h2>
      <p class="section-lead">
        Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
      </p>

      <div class="row">
        <div class="col-12 col-md-6 col-lg-12">
          <div class="card">
           <div class="card-header">
              <h4>Silahkan Masukkan Data Jenis Akun</h4>
            </div>
            <div class="card-body">
              <div class="alert alert-info">
                <b>Note!</b> Not all browsers support HTML5 type input.
              </div>
              <form method="POST" action="{{ route('admin.login')}}" class="needs-validation" novalidate="">
                @csrf
              <div class="form-group">
                <label>Nama Jenis Akun</label>
                <input type="text" class="form-control">
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