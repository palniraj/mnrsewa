@extends('admin.layouts.master')
@section('title')
    All Users
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
        <div class="project-actions text-left">
            <a class="btn btn-primary btn-sm" href="{{route('user.create')}}">
                <i class="fas fa-plus"> Add User
                </i>
            </a>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline card-tabs">
                    <div class="card-header p-0 pt-1 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-three-pending-tab" data-toggle="pill"
                                    href="#custom-tabs-three-pending" role="tab"
                                    aria-controls="custom-tabs-three-pending" aria-selected="true">Pendding
                                    ({{ $pendingCount }})</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-three-approved-tab" data-toggle="pill"
                                    href="#custom-tabs-three-approved" role="tab"
                                    aria-controls="custom-tabs-three-approved" aria-selected="false">Approved
                                    ({{ $approvedCount }})</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-three-rejected-tab" data-toggle="pill"
                                    href="#custom-tabs-three-rejected" role="tab"
                                    aria-controls="custom-tabs-three-rejected" aria-selected="false"> Rejected
                                    ({{ $rejectedCount }})</a>
                            </li>
                        </ul>
                    </div>
                    <!-- pending Block -->
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-three-tabContent">
                            <div class="tab-pane fade active show" id="custom-tabs-three-pending" role="tabpanel"
                                aria-labelledby="custom-tabs-three-pending-tab">
                                <table class="table table-striped projects display nowrap dataTableSearch">
                                    <thead>
                                        <tr>
                                            <th>
                                                S.N
                                            </th>
                                            <th >
                                                Name
                                            </th>
                                            <th>
                                                Role
                                            </th>
                                            <th>
                                                Contact
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                            <th>
                                                Created
                                            </th>
                                            <th>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pendingUser as $key => $user)
                                            <tr>
                                                <td>
                                                    {{ $key + 1 }}
                                                </td>
                                                <td>
                                                    <ul class="list-inline">
                                                        <p>{{ $user->name }}</p>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <p> {{ $user->role_id }}</p>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <p>{{$user->phone}}</p>
                                                </td>
                                                <td>
                                                    <ul class="list-inline">
                                                        <p>
                                                            @if ($user->status == 'pending')
                                                                <span class="badge badge-warning">Pending</span>
                                                            @else
                                                                <span class="badge badge-success">{{$user->status}}</span>
                                                            @endif
                                                        </p>
                                                    </ul>
                                                </td>

                                                <td class="list-inline">
                                                    <p>{{$user->created_at}}</p>
                                                    {{-- <p>{{$user->created_at->diffForHumans()}}</p> --}}
                                                </td>

                                                <td class="project-actions text-right">

                                                    <a class="btn btn-warning btn-sm"
                                                        href="{{ route('user.edit', $user->id) }}">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                    </a>
                                                    <form action="{{ route('user.destroy', $user->id) }}" method="post"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Do you want to delete this employee ?') ">
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
                            <!-- pending Block End -->

                            <!--approved Block  -->
                            <div class="tab-pane fade" id="custom-tabs-three-approved" role="tabpanel"
                                aria-labelledby="custom-tabs-three-approved-tab">
                                <table class="table table-striped projects display nowrap dataTableSearch">
                                    <thead>
                                        <tr>
                                            <th>
                                                S.N
                                            </th>
                                            <th >
                                                Name
                                            </th>
                                            <th>
                                                Role
                                            </th>
                                            <th>
                                                Contact
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                            <th>
                                                Created
                                            </th>
                                            <th>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($approvedUser as $key => $user)
                                            <tr>
                                                <td>
                                                    {{ $key + 1 }}
                                                </td>
                                                <td>
                                                    <ul class="list-inline">
                                                        <p>{{ $user->name }}</p>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <p> {{ $user->role_id }}</p>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <p>{{$user->phone}}</p>
                                                </td>
                                                <td>
                                                    <ul class="list-inline">
                                                        <p>
                                                            @if ($user->status == 'approved')
                                                                <span class="badge badge-success">Approved</span>
                                                            @else
                                                                <span class="badge badge-warning">{{$user->status}}</span>
                                                            @endif
                                                        </p>
                                                    </ul>
                                                </td>

                                                <td class="list-inline">
                                                    <p>{{$user->created_at}}</p>
                                                </td>

                                                <td class="project-actions text-right">

                                                    <a class="btn btn-warning btn-sm"
                                                        href="{{ route('user.edit', $user->id) }}">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                    </a>
                                                    <form action="{{ route('user.destroy', $user->id) }}" method="post"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Do you want to delete this employee ?') ">
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
                            <!-- approved Block End -->

                            <!-- rejected Block  -->
                            <div class="tab-pane fade" id="custom-tabs-three-rejected" role="tabpanel"
                                aria-labelledby="custom-tabs-three-rejected-tab">
                                <table class="table table-striped projects display nowrap dataTableSearch">
                                    <thead>
                                        <tr>
                                            <th>
                                                S.N
                                            </th>
                                            <th >
                                                Name
                                            </th>
                                            <th>
                                                Role
                                            </th>
                                            <th>
                                                Contact
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                            <th>
                                                Created
                                            </th>
                                            <th>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rejectedUser as $key => $user)
                                            <tr>
                                                <td>
                                                    {{ $key + 1 }}
                                                </td>
                                                <td>
                                                    <ul class="list-inline">
                                                        <p>{{ $user->name }}</p>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <p> {{ $user->role_id }}</p>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <p>{{$user->phone}}</p>
                                                </td>
                                                <td>
                                                    <ul class="list-inline">
                                                        <p>
                                                            @if ($user->status == 'rejected')
                                                                <span class="badge badge-danger">Rejected</span>
                                                            @else
                                                                <span class="badge badge-success">{{$user->status}}</span>
                                                            @endif
                                                        </p>
                                                    </ul>
                                                </td>

                                                <td class="list-inline">
                                                    <p>{{$user->created_at}}</p>
                                                </td>

                                                <td class="project-actions text-right">

                                                    <a class="btn btn-warning btn-sm"
                                                        href="{{ route('user.edit', $user->id) }}">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                    </a>
                                                    <form action="{{ route('user.destroy', $user->id) }}" method="post"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Do you want to delete this employee ?') ">
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
                            <!-- rejected Block end -->

                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@section('addjs')
    <!-- DataTables -->
    <script src="{{ url('dashboard') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('dashboard') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('dashboard') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('dashboard') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <!-- DataTables Button -->
    {{-- <script src="{{ url('dashboard') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('dashboard') }}/plugins/datatables-buttons/js/jszip.min.js"></script>
    <script src="{{ url('dashboard') }}/plugins/datatables-buttons/js/pdfmake.min.js"></script>
    <script src="{{ url('dashboard') }}/plugins/datatables-buttons/js/vfs_fonts.js"></script>
    <script src="{{ url('dashboard') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ url('dashboard') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <!-- page script -->
    <script>
        $(function() {
            $(".dataTableSearch").DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "autoWidth": false,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

        });
    </script> --}}
@endsection
@endsection





