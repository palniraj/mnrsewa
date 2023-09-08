@extends('admin.layouts.master')
@section('title')
    Your Order
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
                            <h3 class="card-title"> Your Ordere</h3>
                            <div class="project-actions text-right">
                                <a class="btn btn-danger btn-sm" href="{{ route('orders.index') }}">
                                    <i class="fas fa-long-arrow-alt-left"> Back
                                    </i>
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <h2>Order Number : </h2> <strong><p>{{ $order->order_number }}</p></strong>

                            <h3>Ordered Items</h3>
                        
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Service Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                        
                                    @foreach ($order->items as $item)
                                        <tr>
                                            <td><img src="{{ asset('/uploads/service/'.$item->image)}}" height="80" width="80" alt=""></td>
                                            <td scope="row">{{ $item->name }}</td>
                                            <td >{{ $item->price }}</td>
                                            <td>{{ $item->pivot->quantity }}</td>
                                        </tr>
                                    @endforeach
                        
                        
                        
                                </tbody>
                            </table>
                        
                        
                            <hr>
                            <h3>
                                Total: {{$order->grand_total}}
                            </h3>
                        
                            <p>
                                {{$order->notes}}
                            </p>
                        
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
