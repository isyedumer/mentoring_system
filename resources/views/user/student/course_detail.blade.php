@extends('user.student.layout')

@section('student_book_appointment_active', 'active')

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
                    <h2 class="breadcrumb-title">Course Detail for {{ $teacherCourse->course->title }}</h2>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <h3>Course Overview</h3>
                            <div class="row">
                                <div class="col-3">
                                    <div class="booking-user-info">
                                        <img src="{{ $teacherCourse->course->image }}" width="300"
                                            height="300" />
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="booking-info">
                                        <h4>{{ $teacherCourse->course->title }}</h4>
                                        <p>{{ $teacherCourse->user->name }}</p>
                                        <p>{{ $teacherCourse->course->price }}</p>
                                        <p class="text-muted mb-2"><i class="fas fa-map-marker-alt"></i>
                                            {{ $teacherCourse->user?->additional?->state ? $teacherCourse->user?->additional?->state . ',' : '' }}
                                            {{ $teacherCourse->user?->additional?->city ? $teacherCourse->user?->additional?->city . ',' : '' }}
                                            {{ $teacherCourse->user?->additional?->country ? $teacherCourse->user?->additional?->country : '' }}</p>
                                        <a href="{{ route('appointments.make',[$teacherCourse->course->id,$teacherCourse->user->id]) }}" class="btn btn-primary">Book an appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <h4>Course Description</h4>
                            <p>{{ $teacherCourse->course->desc }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
