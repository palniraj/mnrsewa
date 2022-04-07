@extends('admin.layouts.master')
@section('title') All Service @endsection
@section('content')
@section('addcss')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('dashboard')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{url('dashboard')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
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
                        <h3 class="card-title"> List of all Service</h3>
                        <div class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{route('service.create')}}">
                                <i class="fas fa-plus">Add Service
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-striped projects display nowrap">
                            <thead>
                            <tr>
                                <th>
                                    S.N
                                </th>
                                <th>
                                    Image
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Category
                                </th>
                                <th>
                                    Badge
                                </th>
                                <th>
                                   Price
                                </th>
                                <th>
                                    Created
                                </th>
                                <th>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $key => $service)
                                <tr>
                                    <td>
                                        {{$key+1}}
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <img src="{{asset('uploads/service/'.$service->image)}}" alt="" height="90" width="90"
                                                 class="img img-responsive img-thumbnail" id="image">

                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <p> {{$service->name}}</p>
                                            </li>

                                            </small>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <p>  {{$service->servicecategory->name}} </p>
                                        </ul>
                                    </td>
                                    <td>
                                         <span class="badge badge-danger">{{$service->price_badge}}</span>
                                    </td>
                                    <td>
                                        Rs. <span class="badge badge-success">{{$service->price}}</span>
                                    </td>

                                    <td class="list-inline">
                                        <p>{{$service->created_at->diffForHumans()}}</p>
                                    </td>

                                    <td class="project-actions text-right">

                                        <a class="btn btn-warning btn-sm" href="{{route('service.edit', $service->id)}}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                        <form action="{{route('service.destroy', $service->id)}}" method="post" style="display:inline;">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this service ?') ">
                                                <i class="fas fa-trash">
                                                </i>
                                            </button>
                                        </form>
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
    <script src="{{url('dashboard')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('dashboard')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{url('dashboard')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{url('dashboard')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
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
