<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="/">
          <img src="{{asset('user/img/logo.svg')}}" width="" height="30" alt="">
        </a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{route('admin.dashboard')}}">DBC</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown {{ Route::is('admin.dashboard') ? 'active' : '' }}">
          <a href="{{route('admin.dashboard')}}" class="nav-link card-icon"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Produk</li>
        <li class="dropdown {{ Route::is('admin.dataproduk', 'admin.datavarian', 'admin.tambahproduk', 'admin.tambahvarian') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-shopping-bag"></i> <span>Produk</span></a>
          <ul class="dropdown-menu">
            <li class="{{ Route::is('admin.tambahproduk') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.tambahproduk')}}">Tambah Produk</a></li>
            <li class="{{ Route::is('admin.dataproduk') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.dataproduk')}}">Data Produk</a></li>
            <li class="{{ Route::is('admin.tambahvarian') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.tambahvarian')}}">Tambah Varian</a></li>
            <li class="{{ Route::is('admin.datavarian') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.datavarian')}}">Data Varian</a></li>
          </ul>
        </li>
        <li class="menu-header">Promosi</li>
        <li class="dropdown {{ Route::is('admin.tambahpromosi', 'admin.datapromosi') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-gift"></i> <span>Promosi</span></a>
          <ul class="dropdown-menu">
            <li class="{{ Route::is('admin.tambahpromosi') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.tambahpromosi')}}">Tambah Promosi</a></li>
            <li class="{{ Route::is('admin.datapromosi') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.datapromosi')}}">Data Promosi</a></li>
          </ul>
        </li>
        <li class="menu-header">Pembayaran</li>
        <li class="dropdown {{ Route::is('admin.tambahpembayaran', 'admin.datapembayaran') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-credit-card"></i> <span>Pembayaran</span></a>
          <ul class="dropdown-menu">
            <li class="{{ Route::is('admin.tambahpembayaran') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.tambahpembayaran')}}">Tambah Pembayaran</a></li>
            <li class="{{ Route::is('admin.datapembayaran') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.datapembayaran')}}">Data Pembayaran</a></li>
          </ul>
        </li>
        <li class="menu-header">Ongkir</li>
        <li class="dropdown {{ Route::is('admin.tambahongkir', 'admin.dataongkir', 'admin.tambahkecamatan', 'admin.datakecamatan') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-truck"></i> <span>Ongkir</span></a>
          <ul class="dropdown-menu">
            <li class="{{ Route::is('admin.tambahongkir') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.tambahongkir')}}">Tambah Ongkir</a></li>
            <li class="{{ Route::is('admin.dataongkir') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.dataongkir')}}">Data Ongkir</a></li>
            <li class="{{ Route::is('admin.tambahkecamatan') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.tambahkecamatan')}}">Tambah Kecamatan</a></li>
            <li class="{{ Route::is('admin.datakecamatan') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.datakecamatan')}}">Data Kecamatan</a></li>
          </ul>
        </li>

      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="{{route('admin.logout')}}" class="btn btn-danger btn-lg btn-block btn-icon-split">
          <i class="fas fa-sign-out-alt"></i> Keluar
        </a>
      </div>        </aside>
  </div>