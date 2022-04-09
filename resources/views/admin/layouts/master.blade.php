<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('dashboard')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('dashboard')}}/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  @yield('addcss')

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{route('webpanel.dashboard')}}" class="nav-link">{{trans('general.home')}}</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{route('webpanel.contact')}}" class="nav-link">{{trans('general.contact')}}</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{route('frontend.home')}}" class="nav-link bg-primary">Website</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <img style="height:28px;width:28px" src="{{url('/defaultUser.jpg')}}" alt="">

            {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
           {{-- <a class="dropdown-item" href="{{route('user.profile', Auth::user()->id)}}" >
           {{trans('general.profile')}}
            </a>
           <a class="dropdown-item" href="{{route('changepassword')}}" >
           {{trans('general.password-change')}}
            </a> --}}
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
             {{trans('general.logout')}}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    @include('admin.includes.sidebar')

    @yield('content')



    <footer class="main-footer">
      <strong>© {{ now()->year}} mnrSewa All Rights Reserved. </strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{url('dashboard')}}/plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="{{url('dashboard')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- AdminLTE App -->
  <script src="{{url('dashboard')}}/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{url('dashboard')}}/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{url('dashboard')}}/dist/js/demo.js"></script>

  @yield('addjs')

</body>

</html>
