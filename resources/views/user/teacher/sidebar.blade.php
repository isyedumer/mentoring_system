<div class="profile-sidebar">
    <div class="user-widget">
        <div><img src="{{ auth()->user()?->additional?->profile_image ?? 'https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png' }}" width="100" height="100" /></div>
        {{-- <div class="rating">
            <i class="fas fa-star filled"></i>
            <i class="fas fa-star filled"></i>
            <i class="fas fa-star filled"></i>
            <i class="fas fa-star filled"></i>
            <i class="fas fa-star"></i>
        </div> --}}
        <div class="user-info-cont">
            <h4 class="usr-name">{{ auth()->user()->name }}</h4>
            <p class="mentor-type">{{ auth()->user()?->additional?->headline }}</p>
        </div>
    </div>
    {{-- <div class="progress-bar-custom">
        <h6>Complete your profiles ></h6>
        <div class="pro-progress">
            <div class="tooltip-toggle" tabindex="0"></div>
            <div class="tooltip">80%</div>
        </div>
    </div> --}}
    <div class="custom-sidebar-nav">
        <ul>
            <li><a href="{{ route('dashboard') }}" class="@yield('teacher_dashboard_active')"><i class="fas fa-home"></i>Dashboard
                    <span><i class="fas fa-chevron-right"></i></span></a></li>
            <li><a href="{{ route('courses.teach') }}" class="@yield('teacher_courses_active')"><i class="fas fa-clock"></i>Courses <span><i
                            class="fas fa-chevron-right"></i></span></a></li>
            <li><a href="{{ route('teacher.appointments') }}" class="@yield('teacher_appointments_active')"><i class="fas fa-clock"></i>Appointments <span><i
                            class="fas fa-chevron-right"></i></span></a></li>
            <li><a href="{{ route('teacher.profile', auth()->user()->id) }}" class="@yield('teacher_profile_active')"><i class="fas fa-user-cog"></i>Profile <span><i
                            class="fas fa-chevron-right"></i></span></a></li>
        </ul>
    </div>
</div>
