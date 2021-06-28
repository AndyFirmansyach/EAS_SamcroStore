@extends('admin.main')

@section('title', 'Samcro Store')

@section('bagian', 'Tambah Barang')

@section('menu2', 'nav-item active')

@section('content')

    <div class="row">
            <div class="col-md-11">
              <div class="card">
            <div class="card-header card-header-success">
                <h4 class="card-title ">Tmbah Barang</h4>
                <p class="card-category">Tambah Barang Baru</p>
                </div>
                <div class="card-body">
                  <form action="/tambahBrg" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Barang</label>
                          <input type="text" class="form-control" name="nama_barang">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Memori (Jika Ada)</label>
                          <input type="text" class="form-control" name="memori_hp">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Jumlah Barang</label>
                          <input type="text" class="form-control" name="jumlah_barang">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Harga Satuan</label>
                          <input type="text" class="form-control" name="harga_satuan">
                        </div>
                      </div>
                    </div>
                        <label class="bmd-label-floating form-group">Gambar Barang</label>
                        <input type="file" class="form-control" name="foto_barang" >
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="bmd-label-floating">Jenis Barang</label>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="hoodie" id="jenis_barang" name="jenis_barang">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span> Hoodie
                            </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="sweater" id="jenis_barang" name="jenis_barang">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span> Sweater
                            </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="jaket" id="jenis_barang" name="jenis_barang">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span> Jaket
                            </label>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success pull-right">Tambah</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
                </div>
            </div>
        </div>


@endsection

