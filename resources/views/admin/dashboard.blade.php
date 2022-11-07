@extends('admin.layout')
@section('title', 'Dashboard')
@section('content')
    <div class="page-wrapper">

        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Welcome {{ explode(' ', auth()->user()->name)[0] }}!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-primary border-primary">
                                    <i class="fe fe-users"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $studentsCount }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Students</h6>
                                {{-- <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary w-50"></div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-success">
                                    <i class="fe fe-credit-card"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $totalAppointments }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">

                                <h6 class="text-muted">Appointments</h6>
                                {{-- <div class="progress progress-sm">
                                    <div class="progress-bar bg-success w-50"></div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-danger border-danger">
                                    <i class="fe fe-star-o"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $teachersCount }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">

                                <h6 class="text-muted">Teachers</h6>
                                {{-- <div class="progress progress-sm">
                                    <div class="progress-bar bg-danger w-50"></div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex">

                    <!-- Recent Orders -->
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Teachers List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Teacher Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Member since</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($teachers as $user)
                                            <tr>
                                                <td class="text-center">
                                                    {{ $user->name }}
                                                </td>
                                                <td class="text-center">{{ $user->email }}</td>

                                                <td class="text-center">{{ $user->gender }}</td>

                                                <td class="text-center">{{ $user->created_at->diffForHumans() }}</td>

                                                <td class="text-center">
                                                    {{ $user->is_active == 1 ? 'Active' : ($user->is_active == 0 ? 'Pending' : ($user->is_active == 2 ? 'Rejected' : 'N/A')) }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Recent Orders -->

                </div>
                <div class="col-md-6 d-flex">

                    <!-- Feed Activity -->
                    <div class="card  card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Student List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Member since</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $user)
                                            <tr>
                                                <td class="text-center">
                                                    {{ $user->name }}
                                                </td>
                                                <td class="text-center">{{ $user->email }}</td>

                                                <td class="text-center">{{ $user->gender }}</td>

                                                <td class="text-center">{{ $user->created_at->diffForHumans() }}</td>

                                                <td class="text-center">
                                                    {{ $user->is_active == 1 ? 'Active' : ($user->is_active == 0 ? 'Pending' : ($user->is_active == 2 ? 'Rejected' : 'N/A')) }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Feed Activity -->

                </div>
            </div>

        </div>
    </div>
@endsection
