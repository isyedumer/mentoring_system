@extends('user.teacher.layout')

@section('teacher_dashboard_active', 'active')

@section('title', 'Materials')
@section('breadcrumbs')
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Material</h2>
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

                <div class="col-md-7 col-lg-8 col-xl-9">

                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="mb-4">Material Lists</h4>
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Course</th>
                                                    <th class="text-center">Teacher</th>
                                                    <th class="text-center">Added date</th>
                                                    <th class="text-center">Added since</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $materials = $teacherCourse->materials()->paginate(10);
                                                @endphp
                                                @if ($materials->isEmpty())
                                                    <tr>
                                                        <td colspan="4" class="text-center">No data available in the
                                                            table
                                                        </td>
                                                    </tr>
                                                @endif
                                                @foreach ($materials as $material)
                                                    <tr>
                                                        <td class="text-center">{{ $teacherCourse->course->title }}</td>
                                                        <td class="text-center">{{ $teacherCourse->user->name }}
                                                        </td>
                                                        <td class="text-center">
                                                            {{ $material->created_at->format('Y-m-d') }}
                                                        </td>
                                                        <td class="text-center">
                                                            {{ $material->created_at->diffForHumans() }}
                                                        </td>
                                                        <td class="text-center"><a download href="{{ $material->content }}"
                                                                class="btn btn-sm bg-info-light"><i
                                                                    class="far fa-download"></i>
                                                                Download</a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    @if ($materials->lastPage() > 1)
                                        <div class="p-3">{{ $students->links('pagination::bootstrap-5') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
@endsection
