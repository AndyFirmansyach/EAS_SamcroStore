@extends('admin.main')

@section('title', 'Samcro Store')

@section('bagian', 'Daftar Masukkan')

@section('menu4', 'nav-item active')

@section('content')

<div class="row">
<div class="col-md-12">

            <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Table Saran & Masukkan</h4>
                <p class="card-category">Rincian Saran & Masukkan</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Email</th>
                        <th>Topik</th>
                        <th>Saran & Masukkan</th>
                      </thead>
                      <tbody>
                        @foreach ($pesan as $psn)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $psn->nama }}</td>
                          <td>{{ $psn->email }}</td>
                          <td>{{ $psn->topik }}</td>
                          <td>{{ $psn->masukkan }}</td>
                          <td>
                              <a class="btn btn-danger btn-sm" href="/deletePesan/{{ $psn->id }}"><i class="material-icons">delete</i></a>
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

