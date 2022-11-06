@extends('user.student.layout')

@section('title', 'Appointments')

@section('breadcrumbs')
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Appointments</li>
                        </ol>
                    </nav>
                    <form action="{{ route('appointments') }}">
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

                <div class="col-md-12 col-lg-12 col-xl-12">

                    <!-- Mentor Widget -->
                    @foreach ($results as $result)
                        <div class="card">
                            <div class="card-body">
                                <div class="mentor-widget">
                                    <div class="user-info-left">
                                        <div class="mentor-img">
                                            <a href="{{ route('teacher.profile', $result->user->id) }}">
                                                <img class="img-fluid" src="{{ $result->user?->additional?->profile_image ? $result->user?->additional?->profile_image : 'https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png' }}" />
                                            </a>
                                        </div>
                                        <div class="user-info-cont">
                                            <h4 class="usr-name"><a
                                                    href="{{ route('teacher.profile', $result->user->id) }}">{{ $result->user->name }}</a>
                                            </h4>
                                            <p class="mentor-type">{{ $result->course->title }}</p>
                                            {{-- <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(17)</span>
                                        </div> --}}
                                            <div class="mentor-details">
                                                <p class="user-location"><i class="fas fa-map-marker-alt"></i>
                                                    {{ $result->user?->additional?->state ? $result->user?->additional?->state . ',' : '' }}
                                                    {{ $result->user?->additional?->city ? $result->user?->additional?->city . ',' : '' }}
                                                    {{ $result->user?->additional?->country ? $result->user?->additional?->country : '' }}
                                                </p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-info-right">
                                        <div class="user-infos">
                                            <ul>
                                                {{-- <li><i class="far fa-comment"></i> 17 Feedback</li> --}}
                                                <li><i class="fas fa-map-marker-alt"></i>
                                                    {{ $result->user?->additional?->state ? $result->user?->additional?->state . ',' : '' }}
                                                    {{ $result->user?->additional?->city ? $result->user?->additional?->city . ',' : '' }}
                                                    {{ $result->user?->additional?->country ? $result->user?->additional?->country : '' }}
                                                </li>
                                                <li><i class="far fa-money-bill-alt"></i> {{ $result->user?->additional?->teacher_per_hour ?? '5$' }} </li>
                                            </ul>
                                        </div>
                                        <div class="mentor-booking">
                                            <a class="apt-btn" href="booking.html">Book Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="load-more text-center">

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
