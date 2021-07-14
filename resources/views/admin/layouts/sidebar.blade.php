<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{route('admin.dashboard')}}">Dapur Bu Ci</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{route('admin.dashboard')}}">DBC</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown">
          <a href="{{route('admin.dashboard')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Produk</li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Produk</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('admin.tambahproduk')}}">Tambah Produk</a></li>
            <li><a class="nav-link" href="{{route('admin.dataproduk')}}">Data Produk</a></li>
            <li><a class="nav-link" href="{{route('admin.tambahvarian')}}">Tambah Varian</a></li>
            <li><a class="nav-link" href="{{route('admin.datavarian')}}">Data Varian</a></li>
          </ul>
        </li>
        <li class="menu-header">Promosi</li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Promosi</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('admin.tambahpromosi')}}">Tambah Promosi</a></li>
            <li><a class="nav-link" href="{{route('admin.datapromosi')}}">Data Promosi</a></li>
          </ul>
        </li>
        <li class="menu-header">Pembayaran</li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Pembayaran</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('admin.tambahpembayaran')}}">Tambah Pembayaran</a></li>
            <li><a class="nav-link" href="{{route('admin.datapembayaran')}}">Data Pembayaran</a></li>
            <li><a class="nav-link" href="{{route('admin.tambahjenisakun')}}">Tambah Jenis Akun</a></li>
            <li><a class="nav-link" href="{{route('admin.datajenisakun')}}">Data Jenis Akun</a></li>
          </ul>
        </li>
        <li class="menu-header">Ongkir</li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Ongkir</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('admin.tambahongkir')}}">Tambah Ongkir</a></li>
            <li><a class="nav-link" href="{{route('admin.dataongkir')}}">Data Ongkir</a></li>
            <li><a class="nav-link" href="{{route('admin.tambahkecamatan')}}">Tambah Kecamatan</a></li>
            <li><a class="nav-link" href="{{route('admin.datakecamatan')}}">Data Kecamatan</a></li>
          </ul>
        </li>

      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="{{route('admin.logout')}}" class="btn btn-primary btn-lg btn-block btn-icon-split">
          <i class="fas fa-sign-out-alt"></i> Keluar
        </a>
      </div>        </aside>
  </div>