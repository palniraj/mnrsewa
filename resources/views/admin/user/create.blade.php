@extends('admin.layouts.master')
@section('title')New User @endsection
@section('addcss')

@endsection
@section('content')
@include('admin.includes.header')
@php
$header = 'Add User';
$action_route = route('user.store');
$name = null;
// $username = null;
$email = null;
$role = null;
$status = null;
$password = null;
if(isset($user))
{
$header = 'Update User';
$name = $user->name;
// $username = $user->username;
$email = $user->email ;
$password = $user->password;
$role = $user->role ;
$status = $user->status ;
$action_route = route('user.update', $user->id);
}
@endphp
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title"> {{$header}}</h3>
                        <div class="project-actions text-right">
                            <a class="btn btn-danger btn-sm" href="{{route('user.index')}}">
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
                        <form role="form" action="{{$action_route}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($user))
                            @method('put')
                            @endif
                            <div class="form-group row">
                                <label for="name" class="col-sm-4">Company Name:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control col-sm-8 @error('name')is-invalid @enderror" id="name" name="name" value="{{$name}} " required>
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            {{-- <div class="form-group row" @if(isset($user)) style="display:none" @endif>
                                <label for="username" class="col-sm-4">username:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control col-sm-8 @error('username')is-invalid @enderror" id="username" name="username" value="{{$username}}" required>
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div> --}}
                            <div class="form-group row" @if(isset($user)) style="display:none" @endif>
                                <label for="email" class="col-sm-4">Email:<span class="text-danger">*</span></label>
                                <input type="email" class="form-control col-sm-8 @error('email')is-invalid @enderror" id="email" name="email" value="{{$email}}" required>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-4">Password:<span class="text-danger">*</span></label>
                                <input type="password" class="form-control col-sm-8" id="password" name="password" value="">

                            </div>

                            <div class="form-group row" @if(isset($user)) style="display:none" @endif>
                                <label class="col-sm-4">Role:<span class="text-danger">*</span></label>
                                <select class="form-control col-sm-8" name="role_id">
                                    @foreach ($roles as $role)
                                    <option value="{{$role->id}}">{{$role->type}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4">Status:<span class="text-danger">*</span></label>
                                <select class="form-control col-sm-8" name="status">
                                    <option value="{{$status}}">{{$status}}</option>
                                    <option value="approved">approved</option>
                                    <option value="pending">pending</option>
                                    <option value="rejected">rejected</option>
                                </select>
                            </div>

                            <!-- <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div> -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">{{$header}}</button>
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

@endsection