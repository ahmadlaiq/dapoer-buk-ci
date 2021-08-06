@extends('admin.layouts.master')
@section('content')

<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="fas fa-shopping-bag"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Produk</h4>
          </div>
          <div class="card-body">
            {{ $produks }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-danger">
          <i class="fas fa-gift"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Promosi</h4>
          </div>
          <div class="card-body">
            {{ $promoses }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning">
          <i class="far fa-credit-card "></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Akun Rekening</h4>
          </div>
          <div class="card-body">
            {{ $pembayarans }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-success">
          <i class="fas fa-truck"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Ongkir</h4>
          </div>
          <div class="card-body">
            {{ $ongkirs }}
          </div>
        </div>
      </div>
    </div>                  
  </div>
  
</section>

@endsection

@push('page-scripts')
    
@endpush