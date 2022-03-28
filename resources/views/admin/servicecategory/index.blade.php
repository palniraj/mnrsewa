@extends('admin.layouts.master')
@section('title') All Categories @endsection
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
                        <h3 class="card-title"> List of all Category</h3>
                        <div class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{route('servicecategory.create')}}">
                                <i class="fas fa-plus">Add Category
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
                                    <th class="text-center">
                                        Name
                                    </th>
                                    <th>
                                        Parent Category
                                    </th>
                                    <th>
                                       Is Featured
                                    </th>
                                    <th>
                                        Order
                                    </th>
                                    <th>
                                        Created
                                    </th>
                                    <th>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($servicecategorys as $key => $servicecategory)
                                <tr>
                                    <td>
                                        {{$key+1}}
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <p>{{$servicecategory->image}}</p>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <p> {{$servicecategory->name}}</p>
                                            </li>
                                            
                                        </small>
                                    </ul>
                                </td>                                
                                    <td>
                                        <ul class="list-inline">
                                            <p> @if ($servicecategory->parent_id == 0)
                                                None 
                                                @else {{$servicecategory->parent->name}}
                                            @endif</p>
                                        </ul>
                                    </td>
                                    <td class="project-state">
                                        @if($servicecategory->is_featured == 'on')
                                        <span class="badge badge-success">Yes</span>
                                        @else
                                        <span class="badge badge-danger">No</span>
                                        @endif
                                    </td>
                                    <td>
                                        <p> {{$servicecategory->order}}</p>
                                    </td>
                                    <td class="list-inline">
                                        <p>{{$servicecategory->created_at->diffForHumans()}}</p>
                                    </td>

                                    <td class="project-actions text-right">

                                        <a class="btn btn-warning btn-sm" href="{{route('servicecategory.edit', $servicecategory->id)}}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                        <form action="{{route('servicecategory.destroy', $servicecategory->id)}}" method="post" style="display:inline;">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this employee ?') ">
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

@endsection
@endsection