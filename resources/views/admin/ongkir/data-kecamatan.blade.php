@extends('admin.layouts.master')
@section('content')

<section class="section">
    <div class="section-header">
      <h1>Kecamatan</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Kecamatan</a></div>
        <div class="breadcrumb-item">Data kecamatan</div>
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
                <h4>Data Kecamatan</h4>
                    <table class="table table-bordered table-striped table-sm">
                    <tr>
                        <th>No</th>
                        <th>Nama Kecamatan</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($kecamatans as $no => $data)
                    <tr>
                        <td>{{ $kecamatans->firstItem()+$no }}</td>
                        <td>{{ $data->nama_kecamatan }}</td>
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#modalUpdateKecamatan{{ $data->id }}">Edit</button>
                            <a href="#" data-id="{{ $data->id }}" class="btn btn-danger swal-confirm">
                                <form action="{{ route('admin.deletekecamatan',$data->id)}}" id="delete{{ $data->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                </form>
                                Hapus</a>
                        </td>
                    </tr>
                    <!-- Modal Update Kecamatan-->
                    <div class="modal fade" id="modalUpdateKecamatan{{ $data->id }}" tabindex="-1" aria-labelledby="modalUpdateKecamatan" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">Edit Kecamatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <!--FORM UPDATE Kecamatan-->
                    <form action="{{ route('admin.updatekecamatan', $data->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                    <label for="">Nama Kecamatan</label>
                    <input type="text" class="form-control" id="updateNamaBarang" name="nama_kecamatan"
                    value="{{ $data->nama_kecamatan}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Perbarui Data</button>
                    </form>
                    <!--END FORM UPDATE Kecamatan-->
                    </div>
                    </div>
                    </div>
                    </div>
                    <!-- End Modal UPDATE Kecamatan-->
                    @endforeach
                </table>
                {{$kecamatans->links()}}
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