<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ Storage::url( $data->logo ) }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ Storage::url( $data->logo ) }}" type="image/x-icon">
    <title>{{ $data->nama_yayasan}}</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/fontawesome.css')}} ">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/icofont.css')}} ">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/themify.css')}} ">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/flag-icon.css')}} ">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/feather-icon.css')}} ">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('back/assets/css/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('back/assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('back/assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('back/assets/css/responsive.css')}}">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <section>
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-12">
            <div class="login-card">
              <form class="theme-form login-form" method="POST" action="{{ route('auth')}}">
                @csrf

                @if (session('error'))
                    <div class="alert alert-danger outline-2x" role="alert">
                        <p>{{ session('error')}}</p>
                    </div>
                @endif

                @if (session('warning'))
                    <div class="alert alert-secondary outline-2x" role="alert">
                        <p>{{ session('warning')}}</p>
                    </div>
                @endif

                <h4 class="text-center">Login</h4>
                <h6 class="text-center">Silahkan Masukan Username dan Password </h6>
                <div class="form-group">
                  <label>Username</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
                    <input class="form-control" type="text" required="" placeholder="username" name="username">
                  </div>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                    <input class="form-control" type="password" name="password" required="" placeholder="*********">
                    <div class="show-hide"><span class="show">                         </span></div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- page-wrapper end-->
    <!-- latest jquery-->
    <script src="{{ asset('back/assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('back/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('back/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('back/assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('back/assets/js/config.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('back/assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('back/assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('back/assets/js/script.js') }}"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
