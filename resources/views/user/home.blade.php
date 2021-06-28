@extends('user.layout.main')

@section('title', 'Samcro Store Surabaya')

@section('home', 'nav-item active')

@section('banner')
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Rekomendasi</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('content')
<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="{{ url('/produk') }}">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          @foreach ($barang as $brg)
          <div class="col-lg-4 col-md-4 all des">
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
<br>
<br>
    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-medal"></i>
              </div>
              <div class="down-content">
                <h4>Kualiats Terjamin</h4>
                </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-shipping-fast"></i>
              </div>
              <div class="down-content">
                <h4>Pengiriman Cepat</h4>
                </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-handshake"></i>
              </div>
              <div class="down-content">
                <h4>Harga Bersahabat</h4>
                </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-smile-beam"></i>
              </div>
              <div class="down-content">
                <h4>Admin Ramah</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>



@endsection
