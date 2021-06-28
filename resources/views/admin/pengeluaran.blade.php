@extends('admin.main')

@section('title', 'Samcro Store')

@section('bagian', 'Rincian Pengeluaran')

@section('menu5', 'nav-item active')

@section('content')
        <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <a class="btn btn-primary btn-block" href="{{ url('/pengeluaran1') }}">Buat Laporan</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Laporan Pengeluaran</h4>
                  <p class="card-category">Rincian Pengeluaran Perusahaan</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-responsive">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Keterangan</th>
                        <th>Satuan</th>
                        <th>Pengeluaran</th>
                        <th>Foto Nota</th>
                        <th>Tanggal</th>
                      </thead>
                      <tbody>
                        @foreach ($pengeluaran as $keluar)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $keluar->keterangan}}</td>
                            <td>{{ $keluar->satuan}}</td>
                            <td class="text-primary">
                                {{ "Rp " . number_format($keluar->jumlah,2,',','.') }}
                            </td>
                            <td>{{ $keluar->foto_nota}}</td>
                            <td>{{ $keluar->tanggal}}</td>
                            <td>
                              <a class="btn btn-success btn-sm" href="/editPengeluaran/{{ $keluar->id }}"><i class="material-icons">create</i></a>
                              <a class="btn btn-danger btn-sm" href="/deletePengeluaran/{{ $keluar->id }}"><i class="material-icons">delete</i></a>
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

