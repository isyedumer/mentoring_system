@extends('user.student.layout')

@section('student_book_appointment_active', 'active')

@section('title', 'Course detail - ' . $teacherCourse->course->title)

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
                                <div class="col-2">
                                    <div class="booking-user-info">
                                        <div class="profile-img" style="height: 200px; width: 200px;">
                                            <img style="width: 180px; height: 180px;"
                                                src="{{ $teacherCourse->course->image }}" width="100" height="100" />
                                        </div>
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
                                            {{ $teacherCourse->user?->additional?->country ? $teacherCourse->user?->additional?->country : '' }}
                                        </p>
                                        @auth
                                            @if (auth()->user()->role->type == 'student')
                                                <a href="{{ route('appointments.make', [$teacherCourse->course->id, $teacherCourse->user->id]) }}"
                                                    class="btn btn-primary">Book an appointment</a>
                                            @endif
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <h3>Course Description</h3>
                            <p>{{ $teacherCourse->course->desc }}</p>
                        </div>
                    </div>

                </div>
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <h3>Ask your Queries</h3>
                            @if ($teacherCourse->queries->isEmpty())
                                <p>No queries yet</p>
                            @else
                                <div class="row mt-4">
                                    {{-- <div class="col-3">
                                        <h4>Name</h4>
                                    </div>
                                    <div class="col-3">
                                        <h4>Question</h4>
                                    </div> --}}
                                </div>
                                @foreach ($teacherCourse->queries as $query)
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row mt-4">
                                                <div class="col-3">
                                                    <div class="booking-user-info">
                                                        <div class="profile-img m-">
                                                            <img src="{{ $query->student?->additional?->profile_image ? $query->student?->additional?->profile_image : 'https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png' }}"
                                                                width="100" height="100" />
                                                        </div>
                                                        <div class="booking-info" style="margin-left: 10px;">
                                                            <h4>{{ $query->student->name }}</h4>
                                                            {{-- <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating">35</span>
                                            </div> --}}
                                                            <p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i>
                                                                {{ $query->student?->additional?->state ? $query->student?->additional?->state . ',' : '' }}
                                                                {{ $query->student?->additional?->city ? $query->student?->additional?->city . ',' : '' }}
                                                                {{ $query->student?->additional?->country ? $query->student?->additional?->country : '' }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <p>{{ $query->question }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            @auth
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <h5>Please type your query here</h5>
                                        <form method="POST" action="{{ route('query.post', $teacherCourse->id) }}">
                                            @csrf
                                            <div class="form-group">
                                                <textarea class="form-control" name="question" rows="4" cols="6"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Your feedback on this course</label>
                                            <form method="POST" action="{{ route('feedback.post', $teacherCourse->id) }}">
                                                @csrf
                                                <div class="form-group">
                                                    <textarea class="form-control" name="feedback_text" rows="4" cols="6"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endauth
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
