@extends('admin.layouts.master')
@section('content')

<section class="section">
    <div class="section-header">
      <h1>Produk</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Produk</a></div>
        <div class="breadcrumb-item">Tambah Produk</div>
      </div>
    </div>

      <div class="row">
        <div class="col-12 col-md-6 col-lg-12">
          <div class="card">
           <div class="card-header">
              <h4>Silahkan Masukkan Data Produk</h4>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('admin.login')}}" class="needs-validation" novalidate="">
                @csrf
              <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control">
              </div>
              <div class="form-group">
                <label>Harga</label>
                <input type="text" name="nama_produk" class="form-control">
              </div>
              <div class="form-group">
                <label>Varian</label>
                <select class="form-control">
                  
                  <option>tes</option>
                  
                </select>
              </div>
              <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" name="nama_produk" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="nama_produk" class="form-control">
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