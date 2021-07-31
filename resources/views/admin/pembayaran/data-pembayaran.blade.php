@extends('admin.layouts.master')
@section('content')

<section class="section">
    <div class="section-header">
      <h1>Pembayaran</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Pembayaran</a></div>
        <div class="breadcrumb-item">Data pembayaran</div>
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
                <h4>Data Pembayaran</h4>
                    <table class="table table-bordered table-striped table-sm table-hover">
                    <tr>
                        <th>No</th>
                        <th>Nama Akun</th>
                        
                        <th>Action</th>
                    </tr>
                    @foreach ($pembayarans as $no => $data)
                    <tr>
                        <td>{{ $pembayarans->firstItem()+$no }}</td>
                        <td>{{ $data->nama_akun }}</td>
                        
                        <td><button class="btn btn-success" data-toggle="modal" data-target="#modalDetailPembayaran{{ $data->id }}">Detail</button> 
                            <a href="#" data-id="{{ $data->id }}" class="btn btn-danger swal-confirm">
                                <form action="{{ route('admin.deletepembayaran',$data->id)}}" id="delete{{ $data->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                </form>
                                Hapus</a>
                        </td>
                    </tr>
                    <!-- Modal Detail Promosi-->
                    <div class="modal fade" id="modalDetailPembayaran{{ $data->id }}" tabindex="-1" aria-labelledby="modalDetailPembayaran" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                      <div class="modal-header">
                      <h5 class="modal-title">Detail Pembayaran</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <p style="text-align: center">Gambar Produk</p> <br>
                          <div class="text-center"></div>
                          <img height="400" width="400" src="{{ url('/gambar/'.$data->gambar) }}" alt="" style="display:block; margin:auto;">
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput">Nama Akun</label>
                        <input disabled type="text" class="form-control"
                            placeholder="{{ $data->nama_akun}}">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Nama Akun</label>
                      <input disabled type="text" class="form-control"
                          placeholder="{{ $data->nomor_akun}}">
                  </div>
                        </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      <!-- End Modal Detail Promosi-->
                    @endforeach
                </table>
                {{$pembayarans->links()}}
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