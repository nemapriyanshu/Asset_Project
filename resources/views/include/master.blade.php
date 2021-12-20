<!DOCTYPE html>
<html lang="en">
<head>
    @include('front.head')
    <title>Asset Project</title>
</head>
    <body class="hold-transition sidebar-mini layout-fixed">
      
    <div class="wrapper">
         <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="priyanshu/p1.jpeg" alt="AdminLTELogo" height="60" width="60">
        </div>

<!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Home</a>
            </li>
            </ul>
        </nav>


{{-- Side Bar --}}
        @include('front.sidebar')

{{-- Wapper --}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">
              @yield('heading')
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       
        <!-- /.row -->
        <!-- Main row -->
      
        <div class="row">
         
          <div class="p-2">
            @yield('contents')
          </div>
          
        </div>
        
    </section>
    <!-- /.content -->
  </div>


@include('front.footer')
    </div>

    @include('front.foot')
</body>
</html>