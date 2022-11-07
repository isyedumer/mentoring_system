@extends('user.student.layout')

@section('student_book_appointment_active', 'active')

@section('title', 'Search for teachers and courses')

@section('s')

@section('breadcrumbs')
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Appointments</li>
                        </ol>
                    </nav>
                    <form action="{{ route('appointments.book') }}">
                        <div class="form-group mt-3 row" style="width: 50%;">
                            <div class="col-11">
                                <input id="search" name="q" value="{{ request()->q }}" class="form-control"
                                    placeholder="Search...">
                            </div>
                            <div class="col-1">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                    @if (request()->get('q'))
                        <h2 class="breadcrumb-title">{{ $results->total() }} matches found for : {{ request()->q }}</h2>
                    @else
                        <h2 class="breadcrumb-title">{{ $results->total() }} results</h2>
                    @endif
                </div>
                {{-- <div class="col-md-4 col-12 d-md-block d-none">
                    <div class="sort-by">
                        <span class="sort-title">Sort by</span>
                        <span class="sortby-fliter">
                            <select class="select">
                                <option>Select</option>
                                <option class="sorting">Rating</option>
                                <option class="sorting">Popular</option>
                                <option class="sorting">Latest</option>
                                <option class="sorting">Free</option>
                            </select>
                        </span>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                {{-- <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">

                <!-- Search Filter -->
                <div class="card search-filter">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Search Filter</h4>
                    </div>
                    <div class="card-body">
                    <div class="filter-widget">
                        <div class="cal-icon">
                            <input type="text" class="form-control datetimepicker" placeholder="Select Date">
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4>Gender</h4>
                        <div>
                            <label class="custom_check">
                                <input type="checkbox" name="gender_type" checked>
                                <span class="checkmark"></span> Male
                            </label>
                        </div>
                        <div>
                            <label class="custom_check">
                                <input type="checkbox" name="gender_type">
                                <span class="checkmark"></span> Female
                            </label>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4>Select Courses</h4>
                        <div>
                            <label class="custom_check">
                                <input type="checkbox" name="select_specialist" checked>
                                <span class="checkmark"></span> Digital Marketer

                            </label>
                        </div>
                        <div>
                            <label class="custom_check">
                                <input type="checkbox" name="select_specialist" checked>
                                <span class="checkmark"></span> UNIX, Calculus, Trigonometry
                            </label>
                        </div>
                        <div>
                            <label class="custom_check">
                                <input type="checkbox" name="select_specialist">
                                <span class="checkmark"></span> Computer Programming
                            </label>
                        </div>
                        <div>
                            <label class="custom_check">
                                <input type="checkbox" name="select_specialist">
                                <span class="checkmark"></span> ASP.NET,Computer Gaming
                            </label>
                        </div>
                        <div>
                            <label class="custom_check">
                                <input type="checkbox" name="select_specialist">
                                <span class="checkmark"></span> HTML, Css
                            </label>
                        </div>
                        <div>
                            <label class="custom_check">
                                <input type="checkbox" name="select_specialist">
                                <span class="checkmark"></span> VB, VB.net
                            </label>
                        </div>
                    </div>
                        <div class="btn-search">
                            <button type="button" class="btn btn-block w-100">Search</button>
                        </div>
                    </div>
                </div>
                <!-- /Search Filter -->

            </div> --}}
                <!-- Mentor Widget -->
                @foreach ($results as $result)
                    <div class="col-lg-4 col-md-6">
                        <div class="course-box">
                            <div class="product">
                                <div class="product-img">
                                    <a href="{{ route('course.detail',$result->id) }}">
                                        <img class="img-fluid" style="height: 300px;" alt=""
                                            src="{{ $result->course->image }}" width="600"
                                            height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="course-info align-items-center" style="display: block">
                                        <div class="course-view" style="float: right;">
                                            <i class="fas fa-user-graduate"></i>
                                            @php

                                                $appointmentCount = App\Models\StudentTeacherAppointment::where('course_id', $result->course->id)->where('teacher_id', $result->user->id)->count();
                                            @endphp
                                            <div class="graduate-point">
                                                <span>{{ $appointmentCount }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="title"><a href="{{ route('course.detail',$result->id) }}">{{ $result->course->title }}</a></h3>
                                    <div class="rating rating-star rating-two align-items-center">
                                        <div class="rating-img">
                                            <img src="{{ asset('/img/user/user6.jpg') }}" alt="">
                                        </div>
                                        <h5>{{ $result->user->name }}</h5>
                                        <div class="course-price" style="float: right;">
                                            <h4><span style="text-decoration: none;">${{ $result->course->price }}</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="load-more text-center">
                    <div class="p-3">{{ $results->links('pagination::bootstrap-5') }}</div>
                </div>
            </div>

        </div>

    </div>
@endsection
