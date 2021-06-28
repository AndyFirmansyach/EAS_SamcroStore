@extends('admin.main')

@section('title', 'Samcro Store')

@section('bagian', 'Tambah Laporan Pengeluaran')

@section('menu5', 'nav-item active')

@section('content')

    <div class="row">
            <div class="col-md-11">
              <div class="card">
            <div class="card-header card-header-danger">
                <h4 class="card-title ">Laporan Pengeluaran</h4>
                <p class="card-category">Buat Laporan Baru</p>
                </div>
                <div class="card-body">
                  <form action="/pengeluaran2" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Keterangan</label>
                          <input type="text" class="form-control" name="keterangan">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Satuan (Jika Ada)</label>
                          <input type="text" class="form-control" name="satuan">
                        </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                          <input type="date" class="form-control" name="tanggal">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Jumlah Pengeluaran</label>
                          <input type="text" class="form-control" name="pengeluaran">
                        </div>
                      </div>
                    </div>
                        <label class="bmd-label-floating form-group">Foto Nota</label>
                        <input type="file" class="form-control" name="foto_nota" >
                    <br>
                    <button type="submit" class="btn btn-danger pull-right">Tambah</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
                </div>
            </div>
        </div>


@endsection

