<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets1/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/templatemo-sixteen.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/gambar.css') }}">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Samcro <em>Store</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="@yield('home')">
                <a class="nav-link" href="{{ url('/')}}">Home
                  {{-- <span class="sr-only">(current)</span> --}}
                </a>
              </li>
              <li class="@yield('produk')">
                <a class="nav-link " href="{{ url('/produk') }}">Products</a>
              </li>
              <li class="@yield('kontak')">
                <a class="nav-link" href="{{ url('/kontak') }}">About Us</a>
              </li>
              <li class="@yield('transaksi')">
                {{-- <a class="nav-link" href="{{ url('/transaksi') }}"><i class="fas fa-shopping-cart"></i></a> --}}
                <a class="nav-link" href="{{ url('/transaksi') }}">Transaksi</i></a>
              </li>
              <li class="@yield('login')">
                <a class="nav-link" href="{{ url('/menu') }}">Login</i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
        @yield('banner')
    <!-- Banner Ends Here -->

    {{-- Home --}}
        @yield('content')
    {{-- end home --}}

        @yield('modal')

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2021 Samcro Store Surabaya.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


    <!-- Additional Scripts -->
    <script src="{{ asset('assets1/js/custom.js') }}"></script>
    <script src="{{ asset('assets1/js/owl.js') }}"></script>
    <script src="{{ asset('assets1/js/slick.js') }}"></script>
    <script src="{{ asset('assets1/js/isotope.js') }}"></script>
    <script src="{{ asset('assets1/js/accordions.js') }}"></script>
    <script src="{{ asset('assets1/js/hitung.js') }}"></script>
    <script src="https://kit.fontawesome.com/76ce12362d.js" crossorigin="anonymous"></script>

    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

    <script language="text/javascript">
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
            }
        }
        }
    </script>


  </body>

</html>
