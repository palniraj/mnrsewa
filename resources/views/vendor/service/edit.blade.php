@extends('admin.layouts.master')
@section('title')Update Service @endsection
@section('addcss')
    <link rel="stylesheet" href="{{ url('dashboard') }}/plugins/summernote/summernote-bs4.css">
@endsection
@section('content')
    @include('admin.includes.header')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title"> Update Service</h3>
                            <div class="project-actions text-right">
                                <a class="btn btn-danger btn-sm" href="{{route('service.index')}}">
                                    <i class="fas fa-long-arrow-alt-left"> Back
                                    </i>
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @foreach ($errors->all() as $error)
                                <p class="text-danger">{{ $error }}</p>
                            @endforeach
                            <form role="form" action="{{route('service.update', $service->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="image">Image:<span class="text-danger">*</span></label>
                                    <br>
                                    <img src="{{asset('uploads/service/'.$service->image)}}" alt="" height="90" width="90"
                                         class="img img-responsive img-thumbnail" id="image">
                                    <br>
                                    <input type="file" class="@error('image') is-invalid @enderror" id="image"
                                           name="image" value=""
                                           onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                                    @if ($errors->has('image'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif

                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4">Service Name:<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control col-sm-8 @error('name')is-invalid @enderror" id="name" name="name" value="{{$service->name}}" required>
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group row"  style="display:none" >
                                    <label for="user_id" class="col-sm-4">User ID:<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control col-sm-8 @error('user_id')is-invalid @enderror" id="user_id" name="user_id" value="{{Auth::id()}}" required>
                                    @error('user_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4">Category:<span class="text-danger">*</span></label>
                                    <select class="form-control col-sm-8" name="servicecategory_id">
                                        <option value="{{$service->servicecategory_id}}">{{$service->servicecategory->name}}</option>
                                    @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group row">
                                    <label for="price" class="col-sm-4">Price:<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control col-sm-8 @error('price')is-invalid @enderror" id="price" name="price" value="{{$service->price}}" required>
                                    @error('price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label for="price_badge" class="col-sm-4">Price Badge:<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control col-sm-8 @error('price_badge')is-invalid @enderror" id="price_badge" name="price_badge" value="{{$service->price_badge}}" required>
                                    @error('price_badge')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label for="tags" class="col-sm-4">Tags:<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control col-sm-8 @error('tags')is-invalid @enderror" id="tags" name="tags" value="{{$service->tags}}" required>
                                    @error('tags')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Description: <span
                                            class="text-danger">*</span></label>
                                    <textarea class="textarea" placeholder=""
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                              name="description">{{$service->description}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="highlights">Highlights: <span
                                            class="text-danger">*</span></label>
                                    <textarea class="textarea" placeholder=""
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                              name="highlights">{{$service->highlights}}</textarea>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Service</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!--/.col (right) -->
            </div>
        </div>
    </section>
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
