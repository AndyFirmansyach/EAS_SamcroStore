@extends('admin.main')

@section('title', 'Samcro Store')

@section('bagian', 'Daftar Barang')

@section('menu2', 'nav-item active')

@section('content')

<div class="row">
<div class="col-md-12">

            <div class="row">
                <div class="col-md-4">
                    <a class="btn btn-primary btn-block" href="{{ url('/tambahBrg') }}">Tambah Barang</a>
                </div>
            </div>
            <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Table Barang</h4>
                <p class="card-category">Rincian barang yang tersedia</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Jenis</th>
                        <th>Jumlah Barang</th>
                        <th>Harga Satuan</th>
                      </thead>
                      <tbody>
                        @foreach ($barang as $brg)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $brg->nama_barang }}</td>
                          <td>{{ $brg->memori_hp }}</td>
                          <td>{{ $brg->jenis_barang }}</td>
                          <td>{{ $brg->jumlah_barang }}</td>
                          <td class="text-warning">
                            {{ "Rp " . number_format($brg->harga_barang,2,',','.') }}
                          </td>
                          <td>
                              <a class="btn btn-success btn-sm" href="/editBrg/{{ $brg->id }}"><i class="material-icons">create</i></a>
                              <a class="btn btn-danger btn-sm" href="/deleteBrg/{{ $brg->id }}"><i class="material-icons">delete</i></a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>




</div>

</div>

@endsection

