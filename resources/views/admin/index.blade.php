<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin | Dashboard</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('/tampilan-admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/tampilan-admin/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/dash/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('/dash/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('/dash/vendors/css/vendor.bundle.addons.css')}}">
  <script src="{{ asset('js/app.js') }}"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
      <li class="col-md-12">
        <a href="{{ url('/keluar') }}">Logout</a>
      </li>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('/tampilan-admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info" style="color : white;" >
          {{ Auth::guard('admin')->user()->name }}
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('/admin/index') }}" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/admin/index') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Akun Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/pengguna/index') }}" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Akun Pengguna
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/barang/index') }}" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
                Data Barang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/transaksi/index') }}" class="nav-link">
              <i class="nav-icon fas fa-cash-register"></i>
              <p>
                Laporan Transaksi
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
          <h3>{{ $admin->count() }}</h3>

            <p>Akun Admin</p>
          </div>
          <div class="icon">
            <i class="fa fa-user"></i>
          </div>
          <a href="{{ url('/admin/admin/index') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-grey">
          <div class="inner">
          <h3>{{ $pengguna->count() }}</h3>

            <p>Akun Pengguna</p>
          </div>
          <div class="icon">
            <i class="fa fa-user"></i>
          </div>
          <a href="{{ url('/admin/pengguna/index') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
          <h3>{{ $barang->count() }}</h3>

            <p>Data Barang</p>
          </div>
          <div class="icon">
            <i class="fa fa-cubes"></i>
          </div>
          <a href="{{ url('/admin/barang/index') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{{ $pesanan->count() }}</h3>

            <p>Laporan Keuangan</p>
          </div>
          <div class="icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <a href="{{ url('/admin/transaksi/index') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <?php
                    $untung = \App\pesanan::where('status',2)->sum('jumlah_harga');
            ?>
            <h5>Pendapatan</h5>
            <h2><strong>@currency($untung)</strong></h2>
          </div>
          <div class="icon">
            <i class="fas fa-coins"></i>
          </div>
          <a href="" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('/tampilan-admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/tampilan-admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/tampilan-admin/dist/js/adminlte.min.js')}}"></script>
  @include('sweet::alert')

@yield('script')
</body>
</html>
