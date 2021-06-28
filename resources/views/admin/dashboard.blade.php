@extends('admin.main')

@section('title', 'Samcro Store')

@section('bagian', 'Dashboard')

@section('menu', 'nav-item active')

@section('content')

        <div class="row">
            <div class="col">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Total Pendapatan</p>
                  <h4 class="card-title text-warning">{{"Rp " .number_format($pemasukan1,0,',','.') }}</h4>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    {{-- <a href="" class="warning-link">Total Pendapatan</a> --}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Total Pengeluaran</p>
                  <h4 class="card-title text-success">{{"Rp " .number_format($pengeluaran1,0,',','.') }}</h4>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    {{-- <a href="" class="success-link">Total Penjualan</a> --}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Saran Masukkan</p>
                  <h4 class="card-title text-danger">{{number_format($masukkan,0,',','.') }}</h4>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    {{-- <a href="" class="danger-link">Jumlah Saran & Masukkan</a> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Daftar Pemasukkan</h4>
                  <p class="card-category">Rincian Pemasukan Perusahaan</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>No</th>
                      <th>Barang</th>
                      <th>Pemasukkan</th>
                      <th>Tanggal</th>
                    </thead>
                    <tbody>
                      @foreach ($pemasukkan as $masuk)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $masuk->nama_barang}}</td>
                            <td class="text-primary">
                                {{ "Rp " . number_format($masuk->total,0,',','.') }}
                            </td>
                            <td>{{ $masuk->created_at->format('d, M Y')}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-info">
                  <h4 class="card-title">Daftar Pengeluaran</h4>
                  <p class="card-category">Rincian Pengeluaran Perusahaan</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>No</th>
                      <th>Keterangan</th>
                      <th>Pengeluaran</th>
                      <th>Tanggal</th>
                    </thead>
                    <tbody>
                      @foreach ($pengeluaran as $keluar)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $keluar->keterangan}}</td>
                            <td class="text-info">
                                {{ "Rp " . number_format($keluar->jumlah,0,',','.') }}
                            </td>
                            <td>{{ $keluar->created_at->format('d, M Y')}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

@endsection

