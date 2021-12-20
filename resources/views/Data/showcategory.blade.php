<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
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
         
         
<table class="table text-center" style="width:1000px" id="example1">
  <thead class="bg-dark">
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Name</th>
      <th scope="col">Unique Code</th>
      <th scope="col">Asset Type</th>
      <th scope="col">Status</th>
      <th scope="col">Images</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php
        $pp=1;
    @endphp
  @foreach ($data as $item)
      <tr>
          <td>{{$pp++}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->unicode}}</td>
          <td>{{$item->typename}}</td>
          <td>
            @if ($item->status==1)
                <form action="status/1/{{$item->tid}}">
                  <input type="submit" value="Active" class="btn btn-sm btn-success">
                </form>
            @else
            <form action="status/0/{{$item->tid}}">
              <input type="submit" value="In-Active" class="btn btn-sm btn-danger">
            </form>
                
            @endif
            
          </td>
          <td>
            <a href="/showimage/{{$item->tid}}" class=""><i class="fas fa-eye">Image</i></a>
          </td>
          <td>
              <a href="/asetedit/{{$item->tid}}" class="btn btn-warning">Edit</a>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                delete
              </button>

              
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">DELETE ASSET TYPE</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body h3">
      Are You Sure for delete the type
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
      <a href="/asetdelete/{{$item->tid}}" class="btn btn-danger">Delete</a>
    </div>
  </div>
</div>
</div>

          </td>
        
      </tr>
  @endforeach
  </tbody>
</table>
          
        </div>
        
    </section>
    <!-- /.content -->
  </div>


@include('front.footer')
    </div>


<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv","pdf"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  
  });
</script>



</body>
</html>



{{-- PREVIOUS CODE --}}













{{-- 


@extends('include.master')
@section('contents')



<table class="table text-center" style="width:1000px" id="example1">
    <thead class="bg-dark">
      <tr>
        <th scope="col">S.no</th>
        <th scope="col">Name</th>
        <th scope="col">Unique Code</th>
        <th scope="col">Asset Type</th>
        <th scope="col">Status</th>
        <th scope="col">Images</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @php
          $pp=1;
      @endphp
    @foreach ($data as $item)
        <tr>
            <td>{{$pp++}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->unicode}}</td>
            <td>{{$item->typename}}</td>
            <td>
              @if ($item->status==1)
                  <form action="status/1/{{$item->tid}}">
                    <input type="submit" value="Active" class="btn btn-sm btn-success">
                  </form>
              @else
              <form action="status/0/{{$item->tid}}">
                <input type="submit" value="In-Active" class="btn btn-sm btn-danger">
              </form>
                  
              @endif
              
            </td>
            <td>
              <a href="/showimage/{{$item->tid}}" class=""><i class="fas fa-eye">Image</i></a>
            </td>
            <td>
                <a href="/asetedit/{{$item->tid}}" class="btn btn-warning">Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                  delete
                </button>

                
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DELETE ASSET TYPE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body h3">
        Are You Sure for delete the type
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
        <a href="/asetdelete/{{$item->tid}}" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>





            </td>
          
        </tr>
    @endforeach
    </tbody>
  </table>

  <!-- Button trigger modal -->










@endsection --}}