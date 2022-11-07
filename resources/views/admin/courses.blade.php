@extends('admin.layout')

@section('course_active', 'active')

@section('title', 'Courses')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="page-title">List of Courses</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="javascript:(0);">Courses</a></li>
                            <li class="breadcrumb-item active">Courses</li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('courses.add') }}" class="btn btn-primary pull-right">New Course</a>
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
                                            <th class="text-center">Course Name</th>
                                            <th class="text-center">Description</th>
                                            <th class="text-center">Added Since</th>
                                            <th class="text-center">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($courses as $course)
                                            <tr>
                                                <td>
                                                    <img src="{{ $course->image }}" height="50" width="50" /> {{ $course->title }}
                                                </td>
                                                <td class="text-center">{{ $course->desc }}</td>

                                                <td class="text-center">{{ $course->created_at->diffForHumans() }}</td>

                                                <td class="text-center"><a href="{{ route('courses.edit', $course->id) }}" class="btn btn-sm bg-info-light"><i class="fa fa-edit"></i> Edit</a></td>
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
