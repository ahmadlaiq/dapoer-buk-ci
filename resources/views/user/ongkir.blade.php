@extends('user.layouts.master')

@section('content')
<div class="container-fluid bg-light py-5">
	<div class="col-md-6 m-auto text-center">
		<h3 class="h2">Cek Ongkir</h3>
		<p>
			Silahkan mengecek ongkos kirim pada tabel berikut. <br> Ongkos kirim sewaktu-waktu dapat berubah.
		</p>
	</div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-box">
            {{-- <div class="form-title-wrap">
                <h3 class="title">Airlines List</h3>
            </div> --}}
            <div class="form-content">
                <div class="table-form table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kecamatan</th>
                            <th scope="col">Desa</th>
                            <th scope="col">Biaya</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($ongkirs as $no => $data)    
                        <tr>
                            <td>{{ $ongkirs->firstItem()+$no }}</td>
                            <td>{{ $data->kecamatan }}</td>
                            <td>{{ $data->nama_desa }}</td>
                            <td>Rp {{ $data->biaya }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- end form-box -->
    </div><!-- end col-lg-12 -->
</div>
@endsection