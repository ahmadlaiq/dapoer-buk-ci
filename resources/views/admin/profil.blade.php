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
        Selamat datang di halaman admin dapoer bu ci.
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
              <div class="profile-widget-name">Irmawati Puji Astuti <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Admin</div></div>
              Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@push('page-scripts')
    
@endpush