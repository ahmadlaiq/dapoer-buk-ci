@extends('admin.layouts.master')
@section('content')

<section class="section">
    <div class="section-header">
      <h1>Produk</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Produk</a></div>
        <div class="breadcrumb-item">Data produk</div>
      </div>
    </div>
    </section>
      
          <div class="card">
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
                <h4>Data Produk</h4>
                    <table class="table table-bordered table-striped table-sm">
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Varian</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($produks as $no => $data)
                    <tr>
                        <td>{{ $produks->firstItem()+$no }}</td>
                        <td>{{ $data->nama_produk }}</td>
                        <td>{{ $data->varian }}</td>
                        <td><button class="btn btn-success" data-toggle="modal" data-target="#modalDetailProduk{{ $data->id }}">Detail</button> 
                          {{-- <button class="btn btn-primary" data-toggle="modal" data-target="#modalUpdateProduk{{ $data->id }}">Edit</button> --}}
                          <a href="#" data-id="{{ $data->id }}" class="btn btn-danger swal-confirm">
                                <form action="{{ route('admin.deleteproduk',$data->id)}}" id="delete{{ $data->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                </form>
                                Hapus</a>
                        </td>
                    </tr>
                    <!-- Modal Update Produk-->
                    {{-- <div class="modal fade" id="modalUpdateProduk{{ $data->id }}" tabindex="-1" aria-labelledby="modalUpdateProduk" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                      <div class="modal-header">
                      <h5 class="modal-title">Edit Produk</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                      <!--FORM UPDATE VARIAN-->
                      <form action="{{ route('admin.updateproduk', $data->id)}}" method="post">
                      @csrf
                      @method('put')
                      <div class="form-group">
                      <label for="">Nama Produk</label>
                      <input type="text" class="form-control" id="updateNamaProduk" name="nama_produk"
                      value="{{ $data->nama_produk}}">
                      </div>
                      <div class="form-group">
                        <label for="">Harga</label>
                        <input type="text" class="form-control" id="updateHarga" name="harga"
                        value="{{ $data->harga}}">
                      </div>
                      <div class="form-group">
                        <label>Varian</label>
                        <select name="varian" class="form-control mb-2">
                          <option value="">{{ $data->varian }}</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">Perbarui Data</button>
                      </form>
                      <!--END FORM UPDATE VARIAN-->
                      </div>
                      </div>
                      </div>
                      </div>
                      <!-- End Modal UPDATE Varian--> --}}

                    <!-- Modal Detail Produk-->
                    <div class="modal fade" id="modalDetailProduk{{ $data->id }}" tabindex="-1" aria-labelledby="modalDetailProduk" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                      <div class="modal-header">
                      <h5 class="modal-title">Detail Produk</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                      
                      <img height="500" width="800" src="{{ url('/gambar/'.$data->gambar) }}" alt="">
                      <h6 class="profile-widget-item-value">{{ $data->nama_produk}}</h6>
                      <h6 class="profile-widget-item-value">{{ $data->varian}}</h6>
                      <h6 class="profile-widget-item-value">{{ $data->harga}}</h6>
                      <h6 class="profile-widget-item-value">{{ $data->deskripsi}}</h6>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      <!-- End Modal Detail Produk-->
                    @endforeach
                </table>
                {{$produks->links()}}
            </div>
          </div>

@endsection

@push('page-scripts')
<script src="{{ asset('assets/modules/sweetalert/sweetalert.min.js')}}"></script>

@endpush

@push('after-scripts')
<script>
$(".swal-confirm").click(function(e) {
    id = e.target.dataset.id;
    swal({
        title: 'Apakah anda yakin?',
        text: 'Data yang dihapus tidak dapat dikembalikan!',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            swal('Data berhasil dihapus!', {
            icon: 'success',
            });
        $(`#delete${id}`).submit();
        } else {
            swal('File anda aman!');
        }
      });
  });
</script>
@endpush