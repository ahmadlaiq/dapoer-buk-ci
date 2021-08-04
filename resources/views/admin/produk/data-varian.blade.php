@extends('admin.layouts.master')
@section('content')

<section class="section">
    <div class="section-header">
      <h1>Varian</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Produk</a></div>
        <div class="breadcrumb-item">Data varian</div>
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
                <h4>Data Varian</h4>
                    <table class="table table-bordered table-striped table-sm table-hover">
                    <tr>
                        <th>No</th>
                        <th>Nama Varian</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($varians as $no => $data)
                    <tr>
                        <td>{{ $varians->firstItem()+$no }}</td>
                        <td>{{ $data->nama_varian }}</td>
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#modalUpdateVarian{{ $data->id }}">Edit</button>
                            <a href="#" data-id="{{ $data->id }}" class="btn btn-danger swal-confirm">
                                <form action="{{ route('admin.deletevarian',$data->id)}}" id="delete{{ $data->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                </form>
                                Hapus</a>
                        </td>
                    </tr>
                    <!-- Modal Update Varian-->
                    <div class="modal fade" id="modalUpdateVarian{{ $data->id }}" tabindex="-1" aria-labelledby="modalUpdateVarian" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">Edit Varian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <!--FORM UPDATE VARIAN-->
                    <form action="{{ route('admin.updatevarian', $data->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                    <label for="">Nama Varian</label>
                    <input type="text" class="form-control" id="updateNamaBarang" name="nama_varian"
                    value="{{ $data->nama_varian}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Perbarui Data</button>
                    </form>
                    <!--END FORM UPDATE VARIAN-->
                    </div>
                    </div>
                    </div>
                    </div>
                    <!-- End Modal UPDATE Varian-->
                    @endforeach
                </table>
                {{$varians->links()}}
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