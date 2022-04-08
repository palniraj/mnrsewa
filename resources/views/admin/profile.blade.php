@extends('admin.layouts.master')
@section('title')
    Profile
@endsection
@section('content')

@section('addcss')
    <link rel="stylesheet" href="{{ url('dashboard') }}/plugins/summernote/summernote-bs4.css">
@endsection
@php
$action_route = route('profile.store');
$name = Auth::user()->name;
$email = Auth::user()->email;
$phone = Auth::user()->phone;
$address = null;
$latitude = null;
$longitude = null;
$image = asset('images/no_img.png');

$dob = null;
$gender = null;
$interested_category = null;

if (isset($profile)) {
    $action_route = route('profile.update', $profile->id);
    $name = $profile->name;
    $email = $profile->email;
    $phone = $profile->phone;
    $addresh = $profile->addresh;
    $latitude = $profile->latitude;
    $longitude = $profile->longitude;

    $dob = $profile->dob;
    $gender = $profile->gender;
    $interested_category = $profile->interested_category;

    $image = asset('uploads/profile/' . $profile->image);
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
                        <h3 class="card-title">Profile</h3>
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
                        @if (isset($profile))
                            @method('put')
                        @endif
                        <div class="card-body">

                            <div class="form-group row d-none">
                                <label for="user_id" class="col-sm-4">User: <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control col-sm-8 " id="user_id" required name="user_id"
                                    value="{{ Auth::user()->id }}">
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <label for="image">Pofile:</label>
                                    <br>
                                    <img src="{{ $image }}" alt="" height="90" width="90"
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

                            </div>
                            <br>

                            <div class="form-group row">
                                <label for="institute_name" class="col-sm-3">Name: <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control col-sm-3" id="name" name="name"
                                    value="{{ $name }}">
                                <label for="email" class="col-sm-3">Email: <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control col-sm-3" id="email" name="email"
                                    value="{{ $email }}">
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-3">Phone No.: <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control col-sm-3" id="phone" name="phone"
                                    value="{{ $phone }}">
                                <label for="address" class="col-sm-3">Address: <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control col-sm-3" id="address" name="address"
                                    value="{{ $address }}">
                            </div>
                            <div class="form-group row">
                                <label for="latitude" class="col-sm-3">Latitude: <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control col-sm-3" id="latitude" name="latitude"
                                    value="{{ $latitude }}">
                                <label for="longitude" class="col-sm-3">Longitude: <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control col-sm-3" id="longitude" name="longitude"
                                    value="{{ $longitude }}">
                            </div>

                            <div class="form-group row">
                                <label for="dob" class="col-sm-3">DOB: <span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control col-sm-3" id="dob" name="dob"
                                    value="{{ $dob }}">
                                <label for="" class="col-sm-3">Gender: <span
                                        class="text-danger">*</span></label>
                                <div class="form-check form-check-inline" style="color:#232323; font-size: 15x;">
                                    <input class="form-check-input " type="radio" name="gender" id="male" value="male"
                                        required @if ($profile && $profile->gender == 'male') checked @endif>
                                    <label class="form-check-label" style="font-weight: 400;" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline" style="color:#232323; font-size: 15x;">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                        value="female" @if ($profile && $profile->gender == 'female') checked @endif>
                                    <label class="form-check-label" style="font-weight: 400;"
                                        for="female">Female</label>
                                </div>
                                <div class="form-check form-check-inline" style="color:#232323; font-size: 15x;">
                                    <input class="form-check-input" type="radio" name="gender" id="other" value="other"
                                        @if ($profile && $profile->gender == 'other') checked @endif>
                                    <label class="form-check-label" style="font-weight: 400;" for="other">Other</label>
                                </div>
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
