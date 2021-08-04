@extends('admin.layouts.master')
@section('content')

<section class="section">
    <div class="section-header">
      <h1>Ongkir</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Ongkir</a></div>
        <div class="breadcrumb-item">Data ongkir</div>
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
                <h4>Data Ongkir</h4>
                    <table class="table table-bordered table-striped table-sm table-hover">
                    <tr>
                        <th>No</th>
                        <th>Kecamatan</th> 
                        <th>Nama Desa</th>
                        <th>Biaya</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($ongkirs as $no => $data)
                    <tr>
                        <td>{{ $ongkirs->firstItem()+$no }}</td>
                        <td>{{ $data->kecamatan }}</td>
                        <td>{{ $data->nama_desa }}</td>
                        <td>Rp {{ $data->biaya }}</td>
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#modalUpdateKecamatan{{ $data->id }}">Edit</button>
                            <a href="#" data-id="{{ $data->id }}" class="btn btn-danger swal-confirm">
                                <form action="{{ route('admin.deleteongkir',$data->id)}}" id="delete{{ $data->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                </form>
                                Hapus</a>
                        </td>
                    </tr>
                    <!-- Modal Update Ongkir-->
                    <div class="modal fade" id="modalUpdateKecamatan{{ $data->id }}" tabindex="-1" aria-labelledby="modalUpdateKecamatan" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">Edit Ongkir</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <!--FORM UPDATE Ongkir-->
                    <form action="{{ route('admin.updateongkir', $data->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Kecamatan</label>
                        <input type="text" class="form-control" id="updateNamaBarang" name="kecamatan"
                        value="{{ $data->kecamatan}}">
                    </div>
                    <div class="form-group">
                    <label for="">Nama Desa</label>
                    <input type="text" class="form-control" id="updateNamaBarang" name="nama_desa"
                    value="{{ $data->nama_desa}}">
                    </div>
                    <div class="form-group">
                        <label for="">Biaya</label>
                        <input type="text" class="form-control" id="updateNamaBarang" name="biaya"
                        value="Rp {{ $data->biaya}}">
                        </div>
                    <button type="submit" class="btn btn-primary">Perbarui Data</button>
                    </form>
                    <!--END FORM UPDATE Ongkir-->
                    </div>
                    </div>
                    </div>
                    </div>
                    <!-- End Modal UPDATE Ongkir-->
                    @endforeach
                </table>
                {{$ongkirs->links()}}
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