@extends('admin.layouts.master')
@section('title')
    All Order
@endsection
@section('content')
@section('addcss')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('dashboard') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('dashboard') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection
@include('admin.includes.header')
@if (session('success'))
    <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong> {{ session('success') }} </strong>
    </div>
@endif
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> List of all Order</h3>
                        {{-- <div class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{route('order.create')}}">
                                <i class="fas fa-plus">Add order
                                </i>
                            </a>
                        </div> --}}
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-striped projects display nowrap">
                            <thead>
                                <tr>
                                    <th> S.N </th>
                                    <th>Order Number</th>
                                    <th>Customer</th>
                                    <th>Shipping Name</th>
                                    <th>Is Paid</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    @if (Auth::user()->role_id == [3,4])
                                    <th>Action</th>
                                    @endif
                                    <th>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $key => $orderitem)
                                    <tr>
                                        <td>
                                            {{ $key + 1 }}
                                        </td>
                                        <td scope="row"> {{ $orderitem->order_number }} </td>
                                        <td>{{ $orderitem->user->name }}</td>
                                        <td> {{ $orderitem->shipping_fullname }} </td>
                                        <td>
                                            @if ($orderitem->is_paid == 0)
                                                <span class="badge badge-danger">No</span>
                                            @else
                                                <span class="badge badge-success">Yes</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($orderitem->status == 'pending')
                                                <span class="badge badge-primary">Pending</span>
                                            @elseif ($orderitem->status == 'processing')
                                                <span class="badge badge-primary">processing</span>
                                            @elseif ($orderitem->status == 'completed')
                                                <span class="badge badge-success">Completed</span>
                                            @else
                                                <span class="badge badge-danger">{{ $orderitem->status }}</span>
                                            @endif

                                        </td>

                                        <td class="list-inline">
                                            <p>{{ $orderitem->created_at->diffForHumans() }}</p>
                                        </td>
                                        
                                        <td class="project-actions text-right">
                                            
                                            <a class="btn btn-primary btn-sm"
                                            href="{{ route('orders.show', $orderitem->id) }}">
                                            <i class="fas fa-eye">
                                            </i>
                                        </a>
                                        @if (Auth::user()->role_id == [3,4])
                                            <a class="btn btn-warning btn-sm"
                                                href="{{ route('orders.edit', $orderitem->id) }}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                            </a>
                                            <form action="{{ route('orders.destroy', $orderitem->id) }}"
                                                method="post" style="display:inline;">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Do you want to delete this order ?') ">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                </button>
                                            </form>
                                            @endif
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


@section('addjs')
    <!-- DataTables -->
    <script src="{{ url('dashboard') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('dashboard') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('dashboard') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('dashboard') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(function() {
            $('#example1').DataTable({
                "responsive": true,
                "autoWidth": false,
                dom: 'Bfrtip',
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
@endsection
