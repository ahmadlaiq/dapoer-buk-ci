@extends('admin.layouts.master')
@section('content')

<section class="section">
    <div class="section-header">
      <h1>Profile</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Profile</div>
      </div>
    </div>
    <div class="section-body">
      
      <h2 class="section-title">Hi, Admin!</h2>
      <p class="section-lead">
        Selamat datang di halaman admin dapoer buk ci.
      </p>

      <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card profile-widget">
            <div class="profile-widget-header">                     
              <img alt="image" src={{asset("assets/img/avatar/avatar-1.png")}} class="rounded-circle profile-widget-picture">
              <div class="profile-widget-items">
                <div class="profile-widget-item">
                  <div class="profile-widget-item-label">Produk</div>
                  <div class="profile-widget-item-value">187</div>
                </div>
                <div class="profile-widget-item">
                  <div class="profile-widget-item-label">Promosi</div>
                  <div class="profile-widget-item-value">6,8K</div>
                </div>
                <div class="profile-widget-item">
                  <div class="profile-widget-item-label">Akun Rekening</div>
                  <div class="profile-widget-item-value">2,1K</div>
                </div>
                <div class="profile-widget-item">
                  <div class="profile-widget-item-label">Ongkir</div>
                  <div class="profile-widget-item-value">2,1K</div>
                </div>
              </div>
            </div>
            <div class="profile-widget-description">
              @foreach ($users as $no => $data)
              <div class="profile-widget-name">{{ $data->name }} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Admin</div></div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@push('page-scripts')
    
@endpush