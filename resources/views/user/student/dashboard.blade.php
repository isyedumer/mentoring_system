@extends('user.student.layout')

@section('student_dashboard_active', 'active')

@section('title', 'Dashboard')
@section('breadcrumbs')
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Dashboard</h2>
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
                    @include('user.student.sidebar')
                    <!-- /Sidebar -->

                </div>

                <div class="col-md-7 col-lg-8 col-xl-9">

                    <div class="row">
                        <div class="col-md-12 col-lg-4 dash-board-list blue">
                            <div class="dash-widget">
                                <div class="circle-bar">
                                    <div class="icon-col">
                                        <i class="fas fa-calendar-check"></i>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h3>23</h3>
                                    <h6>Appointments</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-4 dash-board-list yellow">
                            <div class="dash-widget">
                                <div class="circle-bar">
                                    <div class="icon-col">
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h3>33</h3>
                                    <h6>Mentoring Points</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-4 dash-board-list pink">
                            <div class="dash-widget">
                                <div class="circle-bar">
                                    <div class="icon-col">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h3>14</h3>
                                    <h6>Rank</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="mb-4">Teachers Lists</h4>

                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Name</th>
                                                    <th class="text-center">Email</th>
                                                    <th class="text-center">Gender</th>
                                                    <th class="text-center">Member Since</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($teachers as $teacher)
                                                    <tr>
                                                        <td class="text-center">
                                                            <h2 class="table-avatar">
                                                                <a href="{{ route('teacher.profile', $teacher->teacher->id) }}"
                                                                    class="avatar avatar-sm me-2">
                                                                    <img src="{{ $teacher->teacher?->additional?->profile_image ? $teacher->teacher?->additional?->profile_image : 'https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png' }}"
                                                                        width="100" height="100" />
                                                                    {{ $teacher->teacher->name }}
                                                            </h2>
                                                        </td>
                                                        <td>{{ $teacher->teacher->email }}</td>
                                                        <td class="text-center">
                                                            {{ $teacher->teacher->gender }}
                                                        </td>
                                                        <td class="text-center">
                                                            {{ $teacher->teacher->created_at->diffForHumans() }}
                                                        </td>
                                                        <td class="text-center"><a
                                                                href="{{ route('teacher.profile', $teacher->teacher->id) }}"
                                                                class="btn btn-sm bg-info-light"><i class="far fa-eye"></i>
                                                                View</a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    @if ($teachers->lastPage() > 1)
                                        <div class="p-3">{{ $teachers->links('pagination::bootstrap-5') }}</div>
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
