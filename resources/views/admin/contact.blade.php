@extends('admin.layouts.master')
@section('title')Application Detail @endsection
@section('content')
@section('addcss')
@endsection
@include('admin.includes.header')

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Contact Detail</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{url('/defaultUser.jpg')}}" alt="user image">
                    <span class="username">
                        <a href="#">mnrSewa</a>
                    </span>
                    <span class="description">Mahendranagar, Nepal </span> <br>
                </div>
                <!-- /.user-block -->
                <div class="col-12 col-md-12 order-2 order-md-1">
                    <div class="row">
                        <div class="col-12 col-sm-3">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Admin Name:</span>
                                    <span class="info-box-number text-center text-muted mb-0">Mr. Admin Name</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-3">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Email:</span>
                                    <span class="info-box-number text-center text-muted mb-0">info@domain.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-3">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Address</span>
                                    <span class="info-box-number text-center text-muted mb-0">place address 10400 <span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-3">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Website Url</span>
                                    <span class="info-box-number text-center text-muted mb-0">www.sitedomain.com <span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h4>Contact Detail</h4>
                            <div class="post">

                                <p>
                                    Detail here
                                </p>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection