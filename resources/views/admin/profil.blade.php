@extends('admin.main')

@section('title', 'Samcro Store')

@section('bagian', 'Daftar Pegawai')

@section('menu1', 'nav-item active')

@section('content')

       <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Daftar Pegawai</h4>
                  <p class="card-category">Daftar Lengkap Pegawai</p>
                </div>
                <div class="card-body">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Nama Pegawai</th>
                        <th>Jabatan</th>
                        <th>Email Pegawai</th>
                      </thead>
                      <tbody>
                        @foreach ($pegawai as $usr)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $usr->name }}</td>
                          <td>{{ $usr->level }}</td>
                          <td>{{ $usr->email }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="{{ asset('assets1/images/logo.jpg') }}" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category">Toko Baju</h6>
                  <h4 class="card-title">Samcro Store Surabaya</h4>
                  <p class="card-description">
                    Seorang yang sering tidur dan bermimpi untuk menjadi yang terbaik dari yang terbaik (;)
                  </p>
                </div>
              </div>
            </div>
          </div>

@endsection

