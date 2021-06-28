@extends('admin.main')

@section('title', 'Samcro Store')

@section('bagian', 'Edit Barang')

@section('menu2', 'nav-item active')

@section('content')

    <div class="row">
            <div class="col-md-11">
              <div class="card">
            <div class="card-header card-header-warning">
                <h4 class="card-title ">Edit Barang</h4>
                <p class="card-category">Edit Persediaan Barang</p>
                </div>
                <div class="card-body">
                  @foreach ($barang as $brg)
                    <form action="/updateBrg" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $brg->id }}">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Barang</label>
                          <input type="text" class="form-control" name="nama_barang" value="{{ $brg->nama_barang }}">
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Jumlah Barang</label>
                          <input type="text" class="form-control" name="jumlah_barang" value="{{ $brg->jumlah_barang }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Harga Satuan</label>
                          <input type="text" class="form-control" name="harga_satuan" value="{{ $brg->harga_barang }}">
                        </div>
                      </div>
                    </div>
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
                    <button type="submit" class="btn btn-warning pull-right">Edit</button>
                    <div class="clearfix"></div>
                  </form>
                  @endforeach
                </div>
                </div>
            </div>
        </div>


@endsection

