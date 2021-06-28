@extends('user.layout.main')

@section('title', 'Samcro Store Surabaya')

@section('produk', 'nav-item active')

@section('banner')

    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Produk Baru</h4>
              <h2>Samcro products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('content')

<div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
                <ul>
                    <li class="active" data-filter="*">All Products</li>
                    <li data-filter=".hoodie">Hoodie</li>
                    <li data-filter=".sweater">Sweater</li>
                    <li data-filter=".jaket">Jaket</li>
                </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                    @foreach ($barang as $brg)
                    <div class="col-lg-4 col-md-4 all {{ $brg->jenis_barang }}">
                        <div class="product-item">
                            <a href="#"><img src="/storage/{{ $brg->foto_barang }}" alt=""></a>
                            <div class="down-content">
                                <a href="#" ><h4>{{ $brg->nama_barang }}</h4></a>
                                    <p class="text-danger">{{ "Rp " . number_format($brg->harga_barang,2,',','.') }}</p>
                                    <span>Tesedia {{ $brg->jumlah_barang}}</span>
                                    </div>
                                </div>
                                </div>
                        @endforeach
                </div>
            </div>
          </div>
          {{-- <div class="col-md-12 ">
            <ul class="pages filters">
              <li class="active"><a>1</a></li>
              <li data-filter=".page"><a>2</a></li>
              <li class=""><a href="#">3</a></li>
              <li class=""><a href="#">4</a></li>
              <li class=""><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div> --}}
        </div>
      </div>
    </div>

@endsection

@section('modal')

<!-- Modal -->
<div class="modal fade" id="barang1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rincian Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Nama Barang : Hoodie</p>
        <p>Bahan : Katun</p>
        <h5 style="color: red">Price : $8</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




@endsection


