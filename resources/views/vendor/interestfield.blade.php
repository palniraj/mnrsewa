@extends('admin.layouts.master')
@section('title')
    Interest Field
@endsection
@section('content')

@section('addcss')
    <link rel="stylesheet" href="{{ url('dashboard') }}/plugins/summernote/summernote-bs4.css">
@endsection
@php
$action_route = route('interestfield.store');
$id = Auth::user()->id;
// $address = null;

if (isset($interestfield)) {
    $action_route = route('interestfield.update', $interestfield->id);
    $id = $interestfield->id;
    // $address = $interestfield->address;
}
@endphp

@include('admin.includes.header')
@if (session('success'))
    <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong> {{ session('success') }} </strong>
    </div>
@endif
@foreach ($errors->all() as $error)
    <p class="text-danger">{{ $error }}</p>
@endforeach
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Your Interest</h3>
                        <div class="project-actions text-right">
                            <a class="btn btn-danger btn-sm" href="{{ route('webpanel.dashboard') }}">
                                <i class="fas fa-long-arrow-alt-left"> Back
                                </i>
                            </a>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <!-- form start -->
                    <form role="form" action="{{ $action_route }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (isset($interestfield))
                            @method('put')
                        @endif
                        <div class="card-body">

                            <div class="form-group row d-none">
                                <label for="user_id" class="col-sm-4">User: <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control col-sm-8 " id="user_id" required name="user_id"
                                    value="{{ Auth::user()->id }}">
                            </div>

                            <div class="form-group row">
                                @foreach ($servicecategory as $category)
                                    <div class="form-check col-3 m-2">
                                        <label class="form-check-label"><input class="form-check-input" name="servicecategory_id" type="checkbox" value="{{ $category->id }}">
                                        {{ $category->name }}</label>
                                        </div>
                                @endforeach

                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </div>
                        <!-- /.card-body -->

                    </form>

                </div>
                <!-- /.card -->
            </div>
            <!--/.col  -->
        </div>
        <!-- /.row -->

    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>


@section('addjs')
    <!-- Summernote -->
    <script src="{{ url('dashboard') }}/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function() {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
@endsection
@endsection
