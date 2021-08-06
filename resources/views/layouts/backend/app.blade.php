<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>AdminLTE 3 | Starter</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
    .user-image{
      overflow: hidden;
      white-space: nowrap;
    }
    .img-circle {
    border-radius: 50%;
    width: 40px;
    overflow: hidden;
    white-space: nowrap;
    padding-bottom: 5px;
    margin-bottom: 5px;
}
.user-text{
  float: left;
}
.nav-sidebar .nav-link p {
    display: inline;
    margin: 0;
    white-space: normal;
    font-size: 16px;
}
.content-header {
    padding: 15px 0.5rem;
    background:#F7F9FA;
    padding-top: 39px;
    margin-bottom: 25px;
    margin-top: 30px;
}
.content-wrapper {
    background-color:#EAEDF0;
    color:black;
}
.card {
    box-shadow: 0 0.46875rem 2.1875rem rgb(4 9 20 / 3%), 0 0.9375rem 1.40625rem rgb(4 9 20 / 3%), 0 0.25rem 0.53125rem rgb(4 9 20 / 5%), 0 0.125rem 0.1875rem rgb(4 9 20 / 3%);
    border-width: 0;
    transition: all .2s;
}
.fa, .fas {
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 16px;
}

  </style>
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed">
<div class="wrapper" id="app">

  <!-- Navbar -->
  @include('layouts.backend.partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.backend.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    {{-- <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> --}}
    <!-- /.content-header -->

    <!-- Main content -->
    {{-- <div class="content">
      <div class="container-fluid">
        
        
      </div><!-- /.container-fluid -->
    </div> --}}
    <admin-master></admin-master>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('layouts.backend.partials.footer')
</div>
<!-- ./js -->
<script src="{{ asset('js/app.js') }}"></script>

</html>
