<!DOCTYPE html>
<html lang="en">

<head>
 <title>Samcro Store</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="{{ asset('assets/css/material-dashboard.css?v=2.1.0') }}" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="main-panel">
      <!-- End Navbar -->

       <div class="content">
          <div class="container-fluid">
             <div class="row">
                </div>
                <div class="card-body">
                  <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-md">
                        <div class="form-group">
                          <label>Email</label>
                          <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <br>
                    <p>Don't have account? <a href="/regist">Regist</a></p>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          </div>
       </div>

    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="{{ asset('/assets/js/core/jquery.min.js') }} "></script>
  <script src="{{ asset('/assets/js/core/popper.min.js') }} "></script>
  <script src="{{ asset('/assets/js/core/bootstrap-material-design.min.js') }} "></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="{{ asset('/assets/js/plugins/perfect-scrollbar.jquery.min.js') }} "></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="{{ asset('/assets/js/plugins/chartist.min.js') }} "></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('/assets/js/plugins/bootstrap-notify.js') }} "></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('/assets/js/material-dashboard.js?v=2.1.0') }} "></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ asset('/assets/demo/demo.js') }} "></script>
</body>

</html>
