@extends('user.layout.main')

@section('title', 'Samcro Store Surabaya')

@section('transaksi', 'nav-item active')

@section('banner')

    <div class="page-heading contact-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Transaction</h4>
              <h2>Product Selection</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('content')

    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Transaksi Lanjutan</h2>
            </div>
          </div>
        </div>

          <form method="POST" action="/transaksi1" class="hitung">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nama">Nama Pelanggan</label>
                <input type="text" class="form-control" id="nama" name="nama_pelanggan">
              </div>
              <div class="form-group col-md-6">
                <label for="no_hp">No Handphone</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp">
              </div>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea id="alamat" name="alamat" cols="60" rows="5" class="form-control">

              </textarea>
            </div>
              <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="nama">Nama Barang</label>
                  <select id="nama_barang" name="nama_barang" class="form-control" onchange="autofill()">
                    <option selected>--Pilih Barang--</option>
                    @foreach ($barang as $item)
                        <option value="{{ $item->nama_barang }}">{{ $item->nama_barang}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label for="harga_sat">Harga Satuan</label>
                  <input type="text" class="form-control" id="harga_satuan" name="harga_satuan">
                </div>
                <div class="form-group col-md-1">
                  <label for="jumlah">Jumlah</label>
                  <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang" onclick="kali()" >
                </div>
                <div class="form-group col-md-3">
                  <label for="media_pembayaran">Pembayaran</label>
                  <select id="media_pembayaran" name="media_pembayaran" class="form-control" onclick="diskon()" >
                    <option selected>--Pilih Media--</option>
                    <option value="Tunai">Tunai</option>
                    <option value="BCA">BCA</option>
                    <option value="Mandiri">Mandiri</option>
                  </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nama">Total Sebelum Disc</label>
                <input type="text" class="form-control"  id="total_kotor" name="total_kotor" readonly>
              </div>
              <div class="form-group col-md-6">
                <label for="no_hp">Diskon (10% = Pembelian > 1 Juta, 20% = Pembelian > 2 Juta)</label>
                <input type="text" class="form-control" id="potongan" name="potongan" readonly >
              </div>
            </div>
            <div class="form-group text-danger">
              <label for="alamat">Total Bayar</label>
              <input type="text" class="form-control" id="total" name="total" readonly>
            </div>
            <hr>
            <button type="submit" class="btn btn-danger">Bayar</button>
          </form>

      </div>
    </div>

    <script type="text/javascript">
        function autofill(){
            var barang = $("#nama_barang").val();
            $.ajax({
                url : '/transaksiJ?nama_barang='+barang,
                data : 'nama_barang='+barang,

                success: function(data){
                 document.getElementById("harga_satuan").value = data["harga_barang"];
                // console.log(data);
                }
            });
        }

        function kali(){

            $("#jumlah_barang, #harga_satuan").keyup(function() {
                var harga  = $("#harga_satuan").val();
                var jumlah = $("#jumlah_barang").val();

                var total_kotor = parseInt(harga) * parseInt(jumlah);
                $("#total_kotor").val(total_kotor);
            });
        }

        function diskon(){

            $("#total_kotor").ready(function() {
                var media  = $("#media_pembayaran").val();
                var total_kotor = $("#total_kotor").val();
                var diskon = $("#potongan").val();

                if (total_kotor > 999999) {
                    var diskon = parseInt(total_kotor) * 0.1;
                    $("#potongan").val(diskon)
                }if (total_kotor > 1999999) {
                    var diskon = parseInt(total_kotor) * 0.2;
                    $("#potongan").val(diskon)
                }if (total_kotor < 1000000) {
                     var diskon = 0 ;
                    $("#potongan").val(diskon)
                }
            });
        }

        // function total_bersih(){

        //     $("#potongan", "total_kotor").ready(function() {
        //         var potongan  = $("#potongan").val();
        //         var kotor = $("#total_kotor").val();

        //         var total_bersih = parseInt(kotor) - parseInt(potongan);

        //         $("#total").val(total_bersih);
        //     });
        // }

    </script>

@endsection


