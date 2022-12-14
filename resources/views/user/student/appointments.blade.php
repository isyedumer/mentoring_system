@extends('user.student.layout')

@section('student_appointments_active', 'active')

@section('title', 'Appointments')

@section('breadcrumbs')
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Appointments</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Appointments</h2>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">

                <!-- Sidebar -->
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
                    @include('user.student.sidebar')
                </div>
                <!-- /Sidebar -->

                <!-- Booking summary -->
                <div class="col-md-7 col-lg-8 col-xl-9">
                    <h3 class="pb-3">Appointments</h3>
                    <!-- Mentee List Tab -->
                    <div class="tab-pane show active" id="mentee-list">
                        <div class="card card-table">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Teacher</th>
                                                <th class="text-center">Course</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Material</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($appointments->isEmpty())
                                                <tr>
                                                    <td colspan="5" class="text-center">No data available in the table
                                                    </td>
                                                </tr>
                                            @endif
                                            @foreach ($appointments as $appointment)
                                                <tr>
                                                    <td class="text-center">
                                                        <h2 class="table-avatar">
                                                            <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                                    class="avatar-img rounded-circle"
                                                                    src="{{ $appointment->teacher?->additional?->profile_image ? $appointment?->teacher?->additional?->profile_image : 'https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png' }}"></a>
                                                            <a
                                                                href="{{ route('teacher.profile', $appointment->teacher->id) }}"><span>{{ $appointment->teacher->name }}</span></a>
                                                        </h2>
                                                    </td>
                                                    <td class="text-center">{{ $appointment->course->title }}</td>
                                                    <td class="text-center">{{ $appointment->date }}</td>
                                                    <td class="text-center"><span
                                                            class="{{ $appointment->status == 'Pending' ? 'pending' : ($appointment->status == 'Accepted' ? 'accept' : ($appointment->status == 'Rejected' ? 'reject' : '')) }}">{{ $appointment->status }}</span>
                                                    </td>
                                                    @php
                                                        if($appointment->status == 'Pending' || $appointment->status == 'Rejected') {
                                                            $message = 'N/A';
                                                        } else {
                                                            $message = '<a href="'. route('student.course.materials', $appointment->id) . '"
                                                            class="btn btn-sm bg-info-light"><i class="far fa-eye"></i>
                                                            View</a>';
                                                        }
                                                    @endphp
                                                    <td class="text-center"><?php echo($message) ?></span>
                                                </td>
                                                    <td class="text-center"><a href="#"
                                                            class="btn btn-sm bg-info-light"><i class="far fa-eye"></i>
                                                            View</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @if ($appointments->lastPage() > 1)
                                    <div class="p-3">{{ $appointments->links('pagination::bootstrap-5') }}</div>
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
