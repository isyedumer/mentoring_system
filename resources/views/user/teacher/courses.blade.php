@extends('user.teacher.layout')

@section('teacher_courses_active', 'active')

@section('title', 'Courses available to teach')

@section('breadcrumbs')
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Courses available to teach</h2>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
                    <!-- Sidebar -->
                    @include('user.teacher.sidebar')
                    <!-- /Sidebar -->

                </div>

                <!-- Booking summary -->
                <div class="col-md-7 col-lg-8 col-xl-9">
                    <h3 class="pb-3">Courses available to teach</h3>
                    <!-- Mentee List Tab -->
                    <div class="tab-pane show active" id="mentee-list">
                        <div class="card card-table">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Title</th>
                                                <th class="text-center">Description</th>
                                                <th class="text-center">Image</th>
                                                <th class="text-center">Course Detail</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($courses->isEmpty())
                                                <tr>
                                                    <td colspan="4" class="text-center">No data available in the table
                                                    </td>
                                                </tr>
                                            @endif
                                            @foreach ($courses as $course)
                                                <tr>
                                                    <td class="text-center">
                                                        {{ $course->title }}
                                                    </td>
                                                    <td class="text-center">
                                                        <p>{{ $course->desc }}</p>
                                                    </td>
                                                    <td class="text-center">
                                                        <img src="{{ $course->image }}" width="50" height="50" />
                                                    </td>
                                                    <td class="text-center">
                                                        <a target="_blank" href="{{ route('course.detail',$course->id )}}"
                                                            class="btn btn-sm bg-info-light"><i class="far fa-eye"></i>
                                                            View</a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{ route('teacher.course.materials', $course->id) }}"
                                                            class="btn btn-sm bg-info-light"><i class="far fa-eye"></i>
                                                            See Material</a>
                                                        <a href="{{ route('teacher.course.materials.upload', $course->id) }}"
                                                            class="btn btn-sm bg-info-light"><i class="fa fa-upload"></i>
                                                            Upload Material</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @if ($courses->lastPage() > 1)
                                    <div class="p-3">{{ $courses->links('pagination::bootstrap-5') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- /Mentee List Tab -->
                </div>
                <!-- /Booking summary -->

            </div>

        </div>
    </div>
@endsection
