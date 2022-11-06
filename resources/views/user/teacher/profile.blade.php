@extends('user.teacher.layout')

@section('teacher_profile_active', 'active')

@section('title', $user->name . "'s " . 'profile')

@section('breadcrumbs')
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">{{ $user->name }}'s Profile</h2>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">

                    <!-- Mentor Widget -->
                    <div class="card">
                        <div class="card-body">
                            <div class="mentor-widget">
                                <div class="user-info-left align-items-center">
                                    <div class="mentor-img d-flex flex-wrap justify-content-center">
                                        <div class="pro-avatar">
                                            <div><img src="{{ $user?->additional?->profile_image ? $user?->additional?->profile_image : 'https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png' }}" width="100" height="100" /></div>
                                        </div>
                                        {{-- <div class="rating text-center">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div> --}}
                                        <div class="mentor-details m-0">
                                            <p class="user-location m-0"><i class="fas fa-map-marker-alt"></i>
                                                {{ $user?->additional?->state ? $user?->additional?->state . ',' : '' }}
                                                {{ $user?->additional?->city ? $user?->additional?->city . ',' : '' }}
                                                {{ $user?->additional?->country ? $user?->additional?->country : '' }} </p>
                                        </div>
                                    </div>
                                    <div class="user-info-cont">
                                        <h4 class="usr-name">{{ auth()->user()->name }}</h4>
                                        <p class="mentor-type">
                                            {{ $user?->additional?->headline ? $user?->additional?->headline : 'Headline not set' }}
                                        </p>
                                        <div class="mentor-action">
                                            <p class="mentor-type social-title">Contact Me</p>
                                            <a href="tel:{{ $user?->additional?->mobile }}" class="btn-blue"
                                                data-toggle="modal" data-target="#voice_call">
                                                <i class="fas fa-phone-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="user-info-right d-flex align-items-end flex-wrap">
                                    <div class="hireme-btn text-center">
                                        @if(auth()->user()->id == $user->id)
                                        <a class="btn btn-primary" href="{{ route('teacher.profile.edit', $user->id) }}">Update Profile</a>
                                        @endif
                                        @if (auth()->user()->role->type == 'student' && $user->role->type == 'teacher')
                                            <span class="hire-rate"> ₹ {{ $user?->additional?->teacher_per_hour }} /
                                                hour</span>
                                            <a class="blue-btn-radius" href="{{ route('appointments.book') }}">Book
                                                appointment</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Mentor Widget -->

                    <!-- Mentor Details Tab -->
                    <div class="card">
                        <div class="card-body custom-border-card pb-0">

                            <!-- About Details -->
                            <div class="widget about-widget custom-about mb-0">
                                <h4 class="widget-title">About Me</h4>
                                <hr />
                                {{ $user?->additional?->about_me ? $user?->additional?->about_me : 'Not set' }}
                            </div>
                            <!-- /About Details -->
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body custom-border-card pb-0">

                            <!-- Personal Details -->
                            <div class="widget education-widget mb-0">
                                <h4 class="widget-title">Personal Details</h4>
                                <hr />
                                <div class="experience-box">
                                    <ul class="experience-list profile-custom-list">
                                        <li>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <span>Gender</span>
                                                    <div class="row-result">{{ $user->gender }}</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <span>Date of Birth</span>
                                                    <div class="row-result">
                                                        {{ $user?->additional?->date_of_birth ? $user?->additional?->date_of_birth : 'Not set' }}
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Personal Details -->

                        </div>
                    </div>

                    <div class="card" style="display: none;">
                        <div class="card-body custom-border-card pb-0">

                            <!-- Qualification Details -->
                            <div class="widget experience-widget mb-0">
                                <h4 class="widget-title">Qualification</h4>
                                <hr />
                                <div class="experience-box">
                                    <ul class="experience-list profile-custom-list">
                                        <li>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <span>Undergraduate College</span>
                                                    <div class="row-result">Ahmedabad University</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <span>Undergraduate Major</span>
                                                    <div class="row-result">Mathematics</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <span>Graduate College</span>
                                                    <div class="row-result">Ahmedabad University</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <span>Type of Degree</span>
                                                    <div class="row-result">B.Sc (Maths)</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Qualification Details -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body pb-1 custom-border-card">

                            <!-- Location Details -->
                            <div class="widget awards-widget m-0">
                                <h4 class="widget-title">Location</h4>
                                <hr />
                                <div class="experience-box">
                                    <ul class="experience-list profile-custom-list">
                                        <li>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <span>Address</span>
                                                    <div class="row-result">
                                                        {{ $user?->additional?->address ? $user?->additional?->address : 'Not set' }}
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <span>Country</span>
                                                    <div class="row-result">
                                                        {{ $user?->additional?->country ? $user?->additional?->country : 'Not set' }}
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <span>City</span>
                                                    <div class="row-result">
                                                        {{ $user?->additional?->city ? $user?->additional?->city : 'Not set' }}
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <span>State</span>
                                                    <div class="row-result">
                                                        {{ $user?->additional?->state ? $user?->additional?->state : 'Not set' }}
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <span>Postal Code</span>
                                                    <div class="row-result">
                                                        {{ $user?->additional?->postal_code ? $user?->additional?->postal_code : 'Not set' }}
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Location Details -->

                        </div>
                    </div>
                    <!-- /Mentor Details Tab -->

                </div>
            </div>
        </div>
    </div>
@endsection
