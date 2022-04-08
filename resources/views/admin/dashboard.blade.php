@extends('admin.layouts.master')
@section('title') {{trans('general.dashboard')}} @endsection
@section('content')
@section('addcss')

<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="{{url('dashboard')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="{{url('dashboard')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="{{url('dashboard')}}/plugins/jqvmap/jqvmap.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{url('dashboard')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{url('dashboard')}}/plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="{{url('dashboard')}}/plugins/summernote/summernote-bs4.css">
@endsection
@include('admin.includes.header')
@if(Auth::user()->role_id == 1)
@php
$userCount = \App\Models\User::where('role_id', 2)->count();
$pendingCount = \App\Models\User::where('status', 'pending')->count();
$approvedCount = \App\Models\User::where('status', 'approved')->count();
$rejectedCount = \App\Models\User::where('status', 'rejected')->count();
@endphp
@endif

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
@if(Auth::user()->role_id == 1)
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{$userCount}}</h3>

            <p>Customer</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="{{route('user.index')}}" class="small-box-footer"> {{trans('general.more-info')}} <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{$pendingCount}}</h3>

            <p>{{trans('general.pending')}} {{trans('general.vendor')}}</p>
          </div>
          <div class="icon">
            <i class="ion ion-pinpoint"></i>
          </div>
          <a href="{{route('user.index')}}" class="small-box-footer"> {{trans('general.more-info')}} <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{$approvedCount}}</h3>

            <p>{{trans('general.approved')}} {{trans('general.vendor')}}</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="{{route('user.index')}}" class="small-box-footer"> {{trans('general.more-info')}} <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{$rejectedCount}}</h3>

            <p>{{trans('general.rejected')}} {{trans('general.vendor')}}</p>
          </div>
          <div class="icon">
            <i class="ion ion-close"></i>
          </div>
          <a href="{{route('user.index')}}" class="small-box-footer"> {{trans('general.more-info')}} <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

  
      @endif
  
   
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@section('addjs')
<!-- jQuery UI 1.11.4 -->
<script src="{{url('dashboard')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- ChartJS -->
<script src="{{url('dashboard')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{url('dashboard')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{url('dashboard')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{url('dashboard')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('dashboard')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{url('dashboard')}}/plugins/moment/moment.min.js"></script>
<script src="{{url('dashboard')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('dashboard')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{url('dashboard')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{url('dashboard')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

@endsection

@endsection
