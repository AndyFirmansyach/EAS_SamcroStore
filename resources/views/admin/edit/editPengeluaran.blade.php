@extends('admin.main')

@section('title', 'Samcro Store')

@section('bagian', 'Edit Laporan Pengeluaran')

@section('menu5', 'nav-item active')

@section('content')

    <div class="row">
            <div class="col-md-11">
              <div class="card">
            <div class="card-header card-header-danger">
                <h4 class="card-title ">Edit Laporan Pengeluaran</h4>
                <p class="card-category">Edit Laporan</p>
                </div>
                <div class="card-body">
                    @foreach ($pengeluaran as $keluar)
                        <form action="/updatePengeluaran" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $keluar->id }}">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" value="{{ $keluar->keterangan }}">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Satuan (Jika Ada)</label>
                                <input type="text" class="form-control" name="satuan" value="{{ $keluar->satuan }}">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <input type="date" class="form-control" name="tanggal" value="{{ $keluar->tanggal }}">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label class="bmd-label-floating">Jumlah Pengeluaran</label>
                                <input type="text" class="form-control" name="pengeluaran" value="{{ $keluar->jumlah }}">
                            </div>
                            </div>
                        </div>
                            <label class="bmd-label-floating form-group">Foto Nota</label>
                            <input type="file" class="form-control" name="foto_nota" value="{{ $keluar->foto_nota }}">
                        <br>
                        <button type="submit" class="btn btn-danger pull-right">Edit</button>
                        <div class="clearfix"></div>
                        </form>
                    @endforeach
                </div>
                </div>
            </div>
        </div>


@endsection

