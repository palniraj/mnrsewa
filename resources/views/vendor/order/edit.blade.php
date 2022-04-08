@extends('admin.layouts.master')
@section('title')
    Update Order
@endsection
@section('addcss')
@endsection
@section('content')
    @include('vendor.includes.header')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title"> Update Ordere</h3>
                            <div class="project-actions text-right">
                                <a class="btn btn-danger btn-sm" href="{{ route('orders.index') }}">
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
                            <form role="form" action="{{ route('orders.update', $order->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    <label for="name" class="col-sm-4">Order Status:<span
                                            class="text-danger">*</span></label>
                                    <select class="form-control" name="status" id="">

                                        @foreach ($statusOptions as $val)
                                            <option {{ $order->status == $val ? 'selected' : null }}
                                                value="{{ $val }}">{{ $val }}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Paid</label>
                                    <select class="form-control" name="is_paid" id="">
                                        @foreach ([0, 1] as $val)
                                            <option {{ $order->is_paid == $val ? 'selected' : null }}
                                                value="{{ $val }}">{{ $val == 1 ? 'Paid' : 'Not Paid' }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Notes</label>
                                    <input type="text" name="notes" id="" class="form-control"
                                        value="{{ $order->notes }}">
                                </div>


                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
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
@endsection
@endsection
