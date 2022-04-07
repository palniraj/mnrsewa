@extends('admin.layouts.master')
@section('title')
    New Category
@endsection
@section('content')

@section('addcss')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ url('dashboard') }}/plugins/select2/css/select2.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ url('dashboard') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endsection

@include('admin.includes.header')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Category Details</h3>
                        <div class="project-actions text-right">
                            <a class="btn btn-danger btn-sm" href="{{ route('servicecategory.index') }}">
                                <i class="fas fa-long-arrow-alt-left"> Back
                                </i>
                            </a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{ route('servicecategory.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <input type="hidden" value="{{ Auth::id() }}" name="user_Id">
                            <div class="form-group row">
                                <label for="name" class="col-sm-4">Name:<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control col-sm-8" id="name" name="name" required>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4">Parent Category:<span
                                        class="text-danger">*</span></label>
                                <select class="form-control col-sm-8" name="parent_id">
                                    <option value="0">None</option>
                                    @foreach ($servicecategories as $servicecategory)
                                        <option value="{{ $servicecategory->id }}">{{ $servicecategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-4">Order:</label>
                                <input type="number" class="form-control col-sm-8" id="order" name="order" value="0"
                                    >
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4">Description:</label>
                                <textarea name="description" id="description" cols="92" rows="5"></textarea>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="is_featured" name="is_featured">
                                <label for="is_featured" class="custom-control-label">Is Featured</label>
                            </div>
                            <br>
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
    <!-- Select2 -->
    <script src="{{ url('dashboard') }}/plugins/select2/js/select2.full.min.js"></script>
    <script>
        $(function() {
            // Summernote
            $('.textarea').summernote()

            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>
@endsection
@endsection
