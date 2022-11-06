@extends('admin.layout')

@section('teacher_active', 'active')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">List of Teachers</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="javascript:(0);">Students</a></li>
                            <li class="breadcrumb-item active">Students</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Teacher Name</th>
                                            <th class="text-center">Gender</th>
                                            <th class="text-center">Member Since</th>
                                            <th class="text-center">Account Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td class="text-center">
                                                    {{ $user->name }}
                                                </td>
                                                <td class="text-center">{{ $user->gender }}</td>

                                                <td class="text-center">{{ $user->created_at->diffForHumans() }}</td>

                                                <td class="text-center">{{ $user->is_active ? 'Active' : 'In-active' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
