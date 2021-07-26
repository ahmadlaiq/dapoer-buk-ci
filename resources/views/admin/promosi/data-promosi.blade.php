@extends('admin.layouts.master')
@section('content')

<section class="section">
    <div class="section-header">
      <h1>Promosi</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Promosi</a></div>
        <div class="breadcrumb-item">Data promosi</div>
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
                <h4>Data Promosi</h4>
                    <table class="table table-bordered table-striped table-sm">
                    <tr>
                        <th>No</th>
                        <th>Nama Promosi</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($promoses as $no => $data)
                    <tr>
                        <td>{{ $promoses->firstItem()+$no }}</td>
                        <td>{{ $data->nama_promosi }}</td>
                        <td><button class="btn btn-success" data-toggle="modal" data-target="#modalDetailPromosi{{ $data->id }}">Detail</button> 
                            <a href="#" data-id="{{ $data->id }}" class="btn btn-danger swal-confirm">
                                <form action="{{ route('admin.deletepromosi',$data->id)}}" id="delete{{ $data->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                </form>
                                Hapus</a>
                        </td>
                    </tr>
                    <!-- Modal Detail Promosi-->
                    <div class="modal fade" id="modalDetailPromosi{{ $data->id }}" tabindex="-1" aria-labelledby="modalDetailPromosi" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                      <div class="modal-header">
                      <h5 class="modal-title">Detail Promosi</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                      <h6 class="profile-widget-item-value">{{ $data->nama_promosi}}</h6>
                      <img height="500" width="800" src="{{ url('/gambar/'.$data->gambar) }}" alt="">
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      <!-- End Modal Detail Promosi-->
                    @endforeach
                </table>
                {{$promoses->links()}}
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