@extends('admin.layouts.master')
@section('content')

<section class="section">
    <div class="section-header">
      <h1>Setting</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Setting</div>
      </div>
    </div>
    <div class="section-body">
      
      <div class="row">
        <div class="col-12 col-md-6 col-lg-12">
          <div class="card">
           <div class="card-header">
              <h4>Silahkan Ubah Data Admin</h4>
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
            @foreach ($users as $no => $data)
              <form method="POST" action="{{ route('admin.updatesetting', $data->id)}}" class="needs-validation MultiFile-intercepted" novalidate="" enctype="multipart/form-data">
                @csrf
                @method('put')
                
                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" name="gambar" class="form-control">
                </div>
              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" placeholder="" value="{{ $data->name}}">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="" value="{{ $data->email}}">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="">
              </div>
              @endforeach
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