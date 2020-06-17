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
  <script>
    function formatCurrency(num) {
      num = num.toString().replace(/\$|\,/g,'');
      if(isNaN(num))
      num = "0";
      sign = (num == (num = Math.abs(num)));
      num = Math.floor(num*100+0.50000000001);
      cents = num%100;
      num = Math.floor(num/100).toString();
      if(cents<10)
      cents = "0" + cents;
      for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
      num = num.substring(0,num.length-(4*i+3))+'.'+
      num.substring(num.length-(4*i+3));
      return (((sign)?'':'-') + 'Rp. ' + num);
    }
</script>
  
  @yield('style-ajalah')

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
    <a href="index3.html" class="brand-link">
      <img src="{{asset('/tampilan-admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Toko Zahira</span>
    </a>

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
            <a href="{{ url('/admin/index') }}" class="nav-link">
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
            <a href="{{ url('/admin/barang/index') }}" class="nav-link active">
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
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 mt-3">
                <a href="{{url('/admin/barang/index')}}" class="btn btn-round btn-primary"><i class="fas fa-arrow-circle-left"> KEMBALI</i></a>
              </div>
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="fas fa-clipboard"></i> EDIT DATA {{$barang->name}}</h5>
                        </div>
                        <div class="card-body">
                          @if ($errors->any())
                            <div class="alert alert-danger" align="left">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                          @endif
                            <form action="{{ url('/edit-barang')}}/{{ $barang->id }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                  <label>Nama Barang</label>
                                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $barang->name }}" style=text-transform: capitalize;>
                                  @if ($errors->has('name')) <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span> @endif
                                </div>
                                <div class="form-group">
                                  <label>Stok Barang</label>
                                  <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ $barang->stok }}">
                                  @if ($errors->has('stok')) <span class="invalid-feedback"><strong>{{ $errors->first('stok') }}</strong></span> @endif
                                </div>
                                <div class="form-group">
                                  <label>Harga</label>
                                  <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ $barang->harga }}" onkeyup="document.getElementById('format').innerHTML = formatCurrency(this.value);" >Nominal : <span id="format"></span>
                                  @if ($errors->has('harga')) <span class="invalid-feedback"><strong>{{ $errors->first('harga') }}</strong></span> @endif
                                </div>
                                <div class="form-group">
                                  <label>Keterangan Barang</label>
                                  <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ $barang->keterangan }}" style="text-transform: capitalize;>
                                  @if ($errors->has('keterangan')) <span class="invalid-feedback"><strong>{{ $errors->first('keterangan') }}</strong></span> @endif
                                </div>
                                <div class="form-group">
                                  <label>Upload Gambar</label><br>
                                  <img class="" src="{{ asset('uploads/'.$barang->image) }}" style="width : 300px;">
                                  <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                  @if ($errors->has('image')) <span class="invalid-feedback"><strong>{{ $errors->first('image') }}</strong></span> @endif
                                </div>
                                <button class="btn btn-primary btn-flat btn-block btn-sm">UPDATE</button>
    
                            </form>
                        </div>
                    </div>
                </div>
    
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

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('/tampilan-admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/tampilan-admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/tampilan-admin/dist/js/adminlte.min.js')}}"></script>

@yield('script')
</body>
</html>
