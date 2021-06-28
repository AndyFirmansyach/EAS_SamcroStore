@extends('admin.main')

@section('title', 'Samcro Store')

@section('bagian', 'Rincian Pendapatan')

@section('menu3', 'nav-item active')

@section('content')
<div class="row">
<div class="col-md-12">
<div class="card">
    <div class="card-header card-header-primary">
                  <h4 class="card-title ">Tabel Pendapatan</h4>
                  <p class="card-category">Rincian Pendapatan Perusahaan</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Harga Satuan</th>
                        <th>Total</th>
                      </thead>
                      <tbody>
                        @foreach ($pemasukkan as $masuk)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $masuk->nama_barang }}</td>
                            <td>{{ $masuk->jenis_barang }}</td>
                            <td>{{ $masuk->jumlah_barang }}</td>
                            <td>{{ "Rp " . number_format($masuk->harga_satuan,2,',','.') }}</td>
                            <td class="text-primary">
                                {{ "Rp " . number_format($masuk->total,2,',','.') }}
                            </td>
                            <td>
                                <a class="btn btn-danger btn-sm" href="/deletePemasukkan/{{ $masuk->id }}"><i class="material-icons">delete</i></a>
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

