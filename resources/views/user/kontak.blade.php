@extends('user.layout.main')

@section('title', 'Samcro Store Surabaya')

@section('kontak', 'nav-item active')

@section('banner')

    <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>about us</h4>
              <h2>Toko saya</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('content')

            </div>
          </div>
          <div class="col-md-15">
            <div class="right-image">
              <img src="{{ asset('assets1/images/cover1.jpg') }}" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Who we are &amp; What we do?</h4>
              <p>Samcro Store 2021 merupakan tempat penjualan baju baru yang berada di kota Surabaya, toko ini melayani pengriman dalam dan luar pulau<br>
                <br>Samcro Store merupakan salah satu toko yang menawarkan berbagai jenis baju dengan harga yang murah tetapi kualitas yang diberikan tidak murah. Ayo berkunjung ke toko kami.</p>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
                </div>
              </div>
              <div class="down-content">
                <h4>Andy firmansyach</h4>
                <span>CO-Founder</span>
                <p>S1 Teknik Informatika</p>
              </div>
            </div>
          </div>
              <div class="down-content">
                <h4>Arianto Ferdy K </h4>
                <span>CO-Founder</span>
                <p>S1 Teknik Informatika</p>
              </div>
            </div>
          </div>
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a Message</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="/pesan" method="POST">
                @csrf
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="nama" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="topik" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="masukkan" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
