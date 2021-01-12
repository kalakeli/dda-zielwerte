<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <base href="localhost:8000" target="_blank">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Zielwertbestimmung') }}</title>

    <!-- Scripts -->
    <script src="https://unpkg.com/dayjs@1.8.21/dayjs.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    <!-- hint css -->
    <link href="{{ asset('css/hint.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas far-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <h4 class="navbar-nav text-right ml-auto">Zielwertbestimmung &nbsp;
      <span class="text text-primary">&nbsp;
        @if (Auth::user())
          {{ Auth::user()->name }}
        @endif
      </span>
    </h4>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="https://www.dda-web.de" class="brand-link nosign">
      <img src="{{ asset('images/logos/logo_dda_square_kite_only.png') }}" alt="DDA Logo" class="brand-image img-circle">
      <h4 class="brand-text font-weight-light">&nbsp;</h4>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      @if (Auth::user())
          @include('includes.navigation')
      @else
          <p class="text text-warning py-5">Du musst angemeldet sein, um die Arbeitszeiterfassung nutzen zu können!</p>
      @endif
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @if (Auth::user())

      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <!-- /.col -->
            <!-- <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
              </ol>
            </div> -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <router-view></router-view>
        </div><!-- /.container-fluid -->
      </div>

    @else

      <div class="content-header">
        <div class="container-fluid">
          @include('auth.login')
        </div>
      </div>

    @endif
    <!-- /.content-header -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; @php echo date('Y') @endphp <a href="https://www.dda-web.de" target="_blank">Dachverband Deutscher Avifaunisten</a>.</strong>
  </footer>
</div>
<!-- ./wrapper -->

</body>
</html>
